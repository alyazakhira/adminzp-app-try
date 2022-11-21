<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArticleRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'judul' => 'required|max:255',
            'ringkasan' => 'required|max:200',
            'artikel' => 'required',
            'uploaded_at' => 'required',
            'gambar'=>'required|mimes:jpeg,jpg,png',
        ];
    }
}
