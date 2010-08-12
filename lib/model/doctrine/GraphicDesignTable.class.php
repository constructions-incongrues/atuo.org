<?php


class GraphicDesignTable extends EntityTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('GraphicDesign');
    }
}