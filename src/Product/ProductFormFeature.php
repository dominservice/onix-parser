<?php

namespace Dso\Onix\Product;

use Dso\Onix\CodeList\CodeList220;
use Dso\Onix\CodeList\CodeList79;
use Dso\Onix\CodeList\CodeList98;
//use Dso\Onix\CodeList\CodeList220;

class ProductFormFeature
{

    /**
     * ProductFormFeatureType
     *
     * @var CodeList
     */
    protected $ProductFormFeatureType;

    /**
     * ProductFormFeatureValue
     *
     * @var CodeList
     */
    protected $ProductFormFeatureValue;

    /**
     * ProductFormFeatureDescription
     *
     * @var string
     */
    protected $ProductFormFeatureDescription;

    /**
     * Set ProductFormFeatureType
     *
     * @param CodeList79 $ProductFormFeatureType
     * @return void
     */
    public function setProductFormFeatureType(CodeList79 $ProductFormFeatureType)
    {
        $this->ProductFormFeatureType = $ProductFormFeatureType;
    }

    /**
     * Set ProductFormFeatureValue
     *
     * @param CodeList220 | CodeList98 $ProductFormFeatureValue
     * @return void
     */
    public function setProductFormFeatureValue(CodeList220 | CodeList98 $ProductFormFeatureValue)
    {
        $this->ProductFormFeatureValue = $ProductFormFeatureValue;
    }

    /**
     * Set ProductFormFeatureDescription
     *
     * @param string $description
     * @return void
     */
    public function setProductFormFeatureDescription(string $description)
    {
        $this->ProductFormFeatureDescription = $description;
    }

    /**
     * Get ProductFormFeatureType
     *
     * @return CodeList
     */
    public function getProductFormFeatureType()
    {
        return $this->ProductFormFeatureType;
    }

    /**
     * Get ProductFormFeatureValue
     *
     * @return CodeList
     */
    public function getProductFormFeatureValue()
    {
        return $this->ProductFormFeatureValue;
    }

    /**
     * Get ProductFormFeatureDescription
     *
     * @return string
     */
    public function getProductFormFeatureDescription()
    {
        return $this->ProductFormFeatureDescription;
    }
}
