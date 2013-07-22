<?php
/**
 * ZF2 Buch Kapitel 4
 *
 * Das Buch "Zend Framework 2 - Das Praxisbuch"
 * von Ralf Eggert ist im Galileo-Computing Verlag erschienen. 
 * ISBN 978-3-8362-2610-3
 * 
 * @package    Pizza
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @copyright  Alle Listings sind urheberrechtlich geschützt!
 * @link       http://www.zendframeworkbuch.de/ und http://www.galileocomputing.de/3460
 */

/**
 * namespace definition and usage
 */
namespace Pizza\Service;

/**
 * Pizza service class
 *
 * @package    Pizza
 */
class PizzaService
{
    protected static $toppingList = array(
        'Salami', 'Melone', 'Käse', 'Tomatenpampe', 'Kochschinken',
    );
    
    public static function getRandomTopping($count)
    {
        $toppings = array();
        
        for ($i = 0; $i < $count; $i++) {
            $toppings[] = self::$toppingList[array_rand(self::$toppingList)];
        }
        
        return $toppings;
    }
}
