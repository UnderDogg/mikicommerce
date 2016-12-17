<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/18/2016
 * Time: 1:33 PM.
 */
namespace Innovate\Products;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Innovate\BaseModel;
use Innovate\Products\Traits\Attribute\ProductAttribute;
use Innovate\Products\Traits\Relationship\ProductRelationship;
use Innovate\SEOProvider\ObjectFlat;
use Sofa\Eloquence\Eloquence;

/**
 * Class Product.
 */
class Product extends BaseModel implements ObjectFlat,SluggableInterface
{
    /*
     * This are trait definition's and a solution for the conflict inside them
     */
    use SoftDeletes,ProductRelationship,ProductAttribute,SluggableTrait,Eloquence{

        Eloquence::getAttribute  as getAttributeEloquence;


        Eloquence::setAttribute  as setAttributeEloquence;


        Eloquence::save  as saveEloquence;


        Eloquence::toArray   as toArrayEloquence;


        Eloquence::__isset   as __issetEloquence;

     }

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * @var array
     */
 //   protected  $fillable = ['title','description'];

    /**
     * For soft deletes.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];


    /**
     * This array holds information about.
     *
     * @var array
     */
    protected $sluggable = [
        'build_from' => 'sku',
        'save_to'    => 'slug',
    ];

    /**
     * The searchable attributes on the model with there relevance.
     *
     * The numbers on the value of the array are the relevance of that column from 1-100 when searching
     *
     * @var array
     */
    protected $searchableColumns = [
        'sku'                       => 10,
        'location'                  => 10,
        'slug'                      => 10,
        'product_translations.name' => 15,
    ];
}
