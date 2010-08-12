<?php


class ConcertTable extends EventTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Concert');
    }
}