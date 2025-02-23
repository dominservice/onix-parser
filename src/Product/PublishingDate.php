<?php

namespace Dso\Onix\Product;

use Dso\Onix\CodeList\CodeList163;
use Dso\Onix\Date;

class PublishingDate
{

    /**
     * PublishingDateRole
     *
     * @var CodeList
     */
    protected $PublishingDateRole;

    /**
     * Date
     *
     * @var Date
     */
    protected $Date;

    /**
     * Set PublishingDateRole
     *
     * @param CodeList163 $PublishingDateRole
     * @return void
     */
    public function setPublishingDateRole(CodeList163 $PublishingDateRole)
    {
        $this->PublishingDateRole = $PublishingDateRole;
    }

    /**
     * Set Date
     *
     * @param Date $Date
     * @return void
     */
    public function setDate(Date $Date)
    {
        $this->Date = $Date;
    }

    /**
     * Get PublishingDateRole
     *
     * @return CodeList
     */
    public function getPublishingDateRole()
    {
        return $this->PublishingDateRole;
    }

    /**
     * Get Date
     *
     * @return Date
     */
    public function getDate()
    {
        return $this->Date;
    }

}