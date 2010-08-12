<?php


class BookTable extends EntityTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Book');
    }
}