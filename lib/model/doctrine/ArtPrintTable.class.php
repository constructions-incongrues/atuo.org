<?php


class ArtPrintTable extends EntityTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('ArtPrint');
    }
}