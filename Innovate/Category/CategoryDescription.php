<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 4/2/2016
 * Time: 10:59 AM.
 */
namespace Innovate\Category;

use Innovate\BaseModel;
use Innovate\Category\Traits\Relationship\CategoryDescriptionRelationship;

class CategoryDescription extends BaseModel
{
    use CategoryDescriptionRelationship;

    protected $table = 'donotuseme';

    public $translationModel = 'Innovate\Category\CategoryDescriptionTranslation';

    public $translatedAttributes = ['name', 'description'];
}
