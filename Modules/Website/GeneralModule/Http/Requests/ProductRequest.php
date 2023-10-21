<?php

namespace Modules\Website\GeneralModule\Http\Requests;

class ProductRequest extends ResponseShape
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title'   => 'required|min:2'
        ];
    }
}
