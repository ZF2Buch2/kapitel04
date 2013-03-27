<?php
/**
 * ZF2 Buch Kapitel 4
 * 
 * Das Buch "Zend Framework 2 - Von den Grundlagen bis zur fertigen Anwendung"
 * von Ralf Eggert ist im Addison-Wesley Verlag erschienen. 
 * ISBN 978-3-8273-2994-3
 * 
 * @package    Pizza
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @copyright  Alle Listings sind urheberrechtlich geschützt!
 * @link       http://www.zendframeworkbuch.de/ und http://www.awl.de/2994
 */

/**
 * namespace definition and usage
 */
namespace Pizza\Filter;

use Zend\Filter\AbstractFilter;

/**
 * Revert filter
 * 
 * Reverts the input
 * 
 * @package    Pizza
 */
class Revert extends AbstractFilter
{
    /**
     * Filters the input and reverts it
     *
     * @param  string $value
     * @return string
     */
    public function filter($value)
    {
        return strrev($value);
    }
}
