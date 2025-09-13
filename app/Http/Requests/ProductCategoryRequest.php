<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductCategoryRequest extends FormRequest
{
    /**
     * Autoriser cette requête.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Règles de validation.
     */
    public function rules(): array
    {
        $id = $this->route('product_category')?->id ?? null;

        return [
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('product_categories', 'name')->ignore($id),
            ],
            'position' => ['nullable', 'integer'],
            'description' => ['nullable', 'string'],
            'meta_title' => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string'],
            'subcategories.*' => ['nullable', 'string', 'max:255'],
            'existing_subcategories.*' => ['nullable', 'string', 'max:255'],
        ];
    }

    /**
     * Messages d'erreur personnalisés.
     */
    public function messages(): array
    {
        return [
            'name.required'    => 'Le nom de la catégorie est obligatoire.',
            'name.unique'      => 'Ce nom de catégorie existe déjà.',
            'name.max'         => 'Le nom ne peut pas dépasser 255 caractères.',
            'description.max'  => 'La description ne peut pas dépasser 500 caractères.',
            'subcategories.*.max' => 'Chaque sous-catégorie ne peut pas dépasser 255 caractères.',
            'existing_subcategories.*.max' => 'Chaque sous-catégorie existante ne peut pas dépasser 255 caractères.',
        ];
    }
}
