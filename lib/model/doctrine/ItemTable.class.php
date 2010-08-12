<?php


class ItemTable extends EntityTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Item');
    }
}