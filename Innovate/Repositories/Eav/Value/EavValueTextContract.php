<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 4/22/2016
 * Time: 3:59 PM.
 */
namespace Innovate\Repositories\Eav\Value;

use Innovate\Repositories\BaseContract;

interface EavValueTextContract extends BaseContract
{
    /**
     * @param $product
     * @param $new_string
     * @param $value
     *
     * @return mixed
     */
    public function createFromInput($product, $new_string, $value);
}
