<?php


class PosterTable extends EntityTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Poster');
    }
}