<?php


class RecordTable extends EntityTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Record');
    }
}