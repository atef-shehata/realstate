<?php

/**
 * CurrencyTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class CurrencyTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object CurrencyTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Currency');
    }
}