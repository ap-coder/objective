<?php

namespace App\Http\Requests;

use App\Applicant;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateApplicantRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('applicant_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'     => [
                'required'],
            'email'    => [
                'required'],
            'skills.*' => [
                'integer'],
            'skills'   => [
                'array'],
        ];
    }
}
