<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation(): void
    {
        $input = $this->all();

        foreach (['title','slug','description','sku','meta_title','meta_description'] as $key) {
            if (isset($input[$key]) && is_string($input[$key])) {
                $input[$key] = trim($input[$key]);
            }
        }

        foreach (['is_published', 'has_size', 'has_capacity', 'has_volume'] as $field) {
            if ($this->has($field)) {
                $val = $this->input($field);
                $input[$field] = in_array((string)$val, ['1','true','on'], true);
            }
        }

        if (isset($input['characteristics']) && is_array($input['characteristics'])) {
            $input['characteristics'] = array_values(array_filter(array_map(function ($row) {
                if (!is_array($row)) return null;

                $attr = isset($row['attribute_name']) && is_string($row['attribute_name'])
                    ? trim($row['attribute_name']) : '';
                $val  = isset($row['value']) && is_string($row['value'])
                    ? trim($row['value']) : '';
                $pos  = isset($row['position']) && is_numeric($row['position'])
                    ? (int)$row['position'] : 0;

                if ($attr === '' && $val === '') return null;

                return [
                    'id'             => $row['id'] ?? null,
                    'attribute_name' => $attr,
                    'value'          => $val,
                    'position'       => $pos,
                ];
            }, $input['characteristics'])));
        }

        $this->replace($input);
    }

    public function rules(): array
    {
        $productParam = $this->route('product');
        $productId = is_object($productParam) ? ($productParam->id ?? null) : (is_numeric($productParam) ? (int)$productParam : null);

        return [
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', Rule::unique('products', 'slug')->ignore($productId)],
            'description' => ['nullable', 'string'],
            'price' => ['required', 'numeric', 'min:0'],
            'old_price' => ['nullable', 'numeric', 'gte:price'],
            'sku' => ['nullable', 'string', 'max:255', Rule::unique('products', 'sku')->ignore($productId)],
            'product_category_id' => ['required', 'exists:product_categories,id'],
            'is_published' => ['required','boolean'],
            'has_size' => ['nullable', 'boolean'],
            'has_capacity' => ['nullable', 'boolean'],
            'has_volume' => ['nullable', 'boolean'],
            'meta_title' => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string', 'max:255'],
            'published_at' => ['nullable', 'date'],

            'tags' => ['nullable', 'array'],
            'tags.*' => ['integer', 'exists:product_tags,id'],

            'main_image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
            'gallery' => ['nullable', 'array'],
            'gallery.*' => ['image', 'mimes:jpg,jpeg,png,webp', 'max:6144'],

            'characteristics'                     => ['nullable', 'array'],
            'characteristics.*.id'                => ['nullable', 'integer', 'exists:product_characteristics,id'],
            'characteristics.*.attribute_name'    => ['required', 'string', 'max:255'],
            'characteristics.*.value'             => ['required', 'string', 'max:255'],
            'characteristics.*.position'          => ['nullable', 'integer', 'min:0'],
            '_deleted_characteristic_ids'         => ['nullable', 'array'],
            '_deleted_characteristic_ids.*'       => ['integer', 'exists:product_characteristics,id'],
        ];
    }

    public function attributes(): array
    {
        return [
            'title' => 'titre',
            'slug' => 'slug',
            'price' => 'prix',
            'old_price' => 'ancien prix',
            'sku' => 'SKU',
            'product_category_id' => 'catégorie',
            'is_published' => 'état de publication',
            'has_size' => 'option taille',
            'has_capacity' => 'option capacité',
            'has_volume' => 'option volume',
            'meta_title' => 'meta title',
            'meta_description' => 'meta description',
            'published_at' => 'date de publication',
            'main_image' => 'image principale',
            'gallery' => 'galerie',
            'tags' => 'tags',
            'characteristics' => 'caractéristiques',
            'characteristics.*.attribute_name' => "nom de la caractéristique",
            'characteristics.*.value' => "valeur de la caractéristique",
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Le titre du produit est obligatoire.',
            'price.required' => 'Le prix est obligatoire.',
            'price.numeric' => 'Le prix doit être un nombre.',
            'old_price.gte' => 'Le prix précédent doit être supérieur ou égal au prix actuel.',
            'product_category_id.required' => 'La catégorie est obligatoire.',
            'product_category_id.exists' => 'La catégorie sélectionnée est invalide.',
            'tags.*.exists' => 'Un ou plusieurs tags sélectionnés sont invalides.',
            'main_image.image' => "L'image principale doit être une image valide.",
            'gallery.*.image' => 'Chaque image de la galerie doit être une image valide.',
            'characteristics.*.attribute_name.required' => "Le nom de la caractéristique est requis.",
            'characteristics.*.value.required' => "La valeur de la caractéristique est requise.",
        ];
    }
}
