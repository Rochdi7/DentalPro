<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductTagRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * ✅ Ces règles ne sont utilisées que pour update(), car la création multiple n'utilise pas ce form request.
     */
    public function rules(): array
    {
        $current = $this->route('product_tag');
        $ignoreId = is_object($current) ? $current->getKey() : $current;

        return [
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:product_tags,slug,' . $ignoreId],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Le nom du tag est obligatoire.',
            'slug.unique' => 'Ce slug est déjà utilisé.',
        ];
    }
}
