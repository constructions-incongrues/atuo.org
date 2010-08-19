<?php


class GraphicDesignTable extends EntityTable
{
    public static function getInstance()
    {
        return Doctrine_Core::getTable('GraphicDesign');
    }

    /**
     * (non-PHPdoc)
     * @see model/doctrine/EntityTable::getAdditionalSortingCriteriaName()
     */
    public function getAdditionalSortingCriteriaName()
    {
        return 'subcategory';
    }
}