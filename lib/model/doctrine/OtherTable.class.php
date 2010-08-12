<?php


class OtherTable extends EntityTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Other');
    }
}