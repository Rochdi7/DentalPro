<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogPostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $postId = $this->route('blog_post')?->id;

        return [
            'title'             => ['required', 'string', 'max:255'],
            'slug'              => ['nullable', 'string', 'max:255', 'unique:blog_posts,slug,' . $postId],
            'excerpt'           => ['nullable', 'string'],
            'body'              => ['required', 'string'],
            'blog_category_id'  => ['nullable', 'exists:blog_categories,id'],
            'tag_ids'           => ['nullable', 'array'],
            'tag_ids.*'         => ['exists:blog_tags,id'],
            'video_url'         => ['nullable', 'url'],
            'video_provider'    => ['nullable', 'string', 'max:255'],
            'meta_title'        => ['nullable', 'string', 'max:255'],
            'meta_description'  => ['nullable', 'string'],
            'is_published'      => ['nullable', 'boolean'],
            'published_at'      => ['nullable', 'date'],
            'cover'             => ['nullable', 'image', 'max:2048'],
            'images.*'          => ['nullable', 'image', 'max:2048'],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'is_published' => $this->has('is_published'),
        ]);
    }
}
