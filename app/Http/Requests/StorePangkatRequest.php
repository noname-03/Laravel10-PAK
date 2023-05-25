<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePangkatRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'title' => 'required',
        ];
    }
}