<?php

/**
 * PluginAuMobileTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PluginAuMobileTable extends MobileTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object PluginAuMobileTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('PluginAuMobile');
    }
}