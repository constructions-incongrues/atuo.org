<?php


class ExhibitionTable extends EventTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Exhibition');
    }
}