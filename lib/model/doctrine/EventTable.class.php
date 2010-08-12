<?php


class EventTable extends EntityTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Event');
    }
}