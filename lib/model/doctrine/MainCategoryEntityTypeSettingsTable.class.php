<?php

class MainCategoryEntityTypeSettingsTable extends Doctrine_Table
{
    /**
     * @return MainCategoryEntityTypeSettingsTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('MainCategoryEntityTypeSettings');
    }
}