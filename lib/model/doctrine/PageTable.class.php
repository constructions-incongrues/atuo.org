<?php


class PageTable extends EntityTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Page');
    }
}