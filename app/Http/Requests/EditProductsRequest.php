<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProductsRequest extends FormRequest
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
            'sltCate' => 'required',
            'txtname'=>'required',
            'txtintro'=>'required',
            'txtprice'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'sltCate.required' => ' Hãy chọn một thương hiệu',
            'txtname.required' => ' Hãy nhập tên sản phẩm',
            'txtintro.required' => ' Hãy nhập tóm tắt chức năng cho sản phẩm',
            'txtprice.required' => ' Hãy nhập giá cho sản phẩm'
            
        ];
    }
}
