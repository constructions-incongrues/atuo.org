<?php


class CardTable extends EntityTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Card');
    }
}