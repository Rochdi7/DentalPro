<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCategoryRequest extends FormRequest
{
    /**
     * Autoriser cette requête (toujours true ici).
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
        $id = $this->route('product_category'); // utilisé pour update

        return [
            'name' => 'required|string|max:150|unique:product_categories,name,' . $id,
            'description' => 'nullable|string|max:500',
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
            'name.max'         => 'Le nom ne peut pas dépasser 150 caractères.',
            'description.max'  => 'La description ne peut pas dépasser 500 caractères.',
        ];
    }
}
