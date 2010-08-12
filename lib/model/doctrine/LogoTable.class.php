<?php


class LogoTable extends EntityTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Logo');
    }
}