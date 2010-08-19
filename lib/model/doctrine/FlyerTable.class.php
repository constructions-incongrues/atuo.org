<?php


class FlyerTable extends ItemTable
{
    /**
     * @return FlyerTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Flyer');
    }

    /**
     * (non-PHPdoc)
     * @see model/doctrine/EntityTable::getAdditionalSortingCriteriaName()
     */
    public function getAdditionalSortingCriteriaName()
    {
        return 'year';
    }
}