<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 5/23/2016
 * Time: 3:37 AM.
 */
namespace Innovate\Requests\product;

use App\Http\Requests\Request;
use Illuminate\Http\Request  as Re;

class StoreProductRequest extends Request
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
     *
     * @internal param InnovateImageUploadContract $image
     */
    public function rules()
    {
        $rules = [
            'meta_title'       => 'required|min:3',
            'meta_description' => 'required|min:10',

            'image'                => 'required',
            'name_en'              => 'required',
            'cart_description_en'  => 'required',
            'short_description_en' => 'required',
            'long_description_en'  => 'required',

            'parent_category' => 'required',
            'sku'             => 'required',
            'tax_id'          => 'required',
            'currency'        => 'required',
            'price'           => 'required',
            'previous_price'  => 'required',
            'stock'           => 'required',
            'location'        => 'required',

        ];

        if (Re::has('status')) {
            $rules['status'] = 'required';
        }

        if (Re::has('unlimited')) {
            $rules['unlimited'] = 'required';
        }

        return $rules;
    }
}
