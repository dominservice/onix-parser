<?php

namespace Dso\Onix\Product;

use Dso\Onix\CodeList\CodeList46;

class SalesRights
{

    /**
     * SalesRightsType
     *
     * @var CodeList
     */
    protected $SalesRightsType;

    /**
     * Territory
     *
     * @var Territory
     */
    protected $Territory;

    /**
     * Set SalesRightsType
     *
     * @param CodeList46 $SalesRightsType
     * @return void
     */
    public function setSalesRightsType(CodeList46 $SalesRightsType)
    {
        $this->SalesRightsType = $SalesRightsType;
    }

    /**
     * Set Territory
     *
     * @param Territory $Territory
     * @return void
     */
    public function setTerritory(Territory $Territory)
    {
        $this->Territory = $Territory;
    }

    /**
     * Get SalesRightsType
     *
     * @return CodeList
     */
    public function getSalesRightsType()
    {
        return $this->SalesRightsType;
    }

    /**
     * Get Territory
     *
     * @return Territory
     */
    public function getTerritory()
    {
        return $this->Territory;
    }

}
