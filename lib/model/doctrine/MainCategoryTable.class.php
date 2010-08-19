<?php


class MainCategoryTable extends EntityTable
{
    public static function getInstance()
    {
        return Doctrine_Core::getTable('MainCategory');
    }
}