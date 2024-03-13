<?php

namespace App\Http\Controllers\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateProfileRequest extends FormRequest
{
    public function authorize(): bool
    {

        return true;
    }
/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return[
            

        ];

    }

}