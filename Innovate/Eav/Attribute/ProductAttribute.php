<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/23/2016
 * Time: 10:01 PM.
 */
namespace Innovate\Eav\Attribute;

use Innovate\BaseModel;
use Innovate\Eav\Attribute\Traits\Attribute\ProductAttributeAttribute;
use Innovate\Eav\Attribute\Traits\Relationship\ProductAttributeRelationship;

class ProductAttribute extends BaseModel
{
    use ProductAttributeAttribute,ProductAttributeRelationship;

    protected $table = 'product_attribute';


    /**
     * @var array
     */
    protected $fillable = ['product_category_id', 'title', 'notnull', 'datatype'];
}
