<?php


class GearTable extends EntityTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Gear');
    }
}