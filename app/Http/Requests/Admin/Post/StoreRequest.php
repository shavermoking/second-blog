<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string',
            'content' => 'required|string',
            'main_image' => 'required|file',
            'preview_image' => 'required|file',
            'category_id' => 'required|integer|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Поле обязательно для заполнения',
            'title.string' => 'Поле должно соответствовать строчному типу данных',
            'content.required' => 'Поле обязательно для заполнения',
            'content.string' => 'Поле должно соответствовать строчному типу данных',
            'main_image.required' => 'Поле обязательно для заполнения',
            'main_image.file' => 'Необходимо выбрать файл',
            'preview_image.required' => 'Поле обязательно для заполнения',
            'preview_image.file' => 'Необходимо выбрать файл',
            'category_id.required' => 'Поле необходимо для заполнения',
            'category_id.integer' => 'Id категории должен быть числом',
            'category_id.exists' => 'Id категории должен существовать',
            'tag_ids.array' => 'Необходимо отправить массив данных'
        ];
    }
}
