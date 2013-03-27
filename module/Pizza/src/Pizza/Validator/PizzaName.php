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
namespace Pizza\Validator;

use Zend\Validator\AbstractValidator;

/**
 * Pizza name validator filter
 * 
 * Checks if the input is a pizza name
 * 
 * @package    Pizza
 */
class PizzaName extends AbstractValidator
{
    const INVALID      = 'pizzaNameInvalid';
    const NOT_PIZZA    = 'notPizza';
    const STRING_EMPTY = 'pizzaNameStringEmpty';
    
    /**
     * Validation failure message template definitions
     *
     * @var array
     */
    protected $messageTemplates = array(
        self::INVALID      => "Invalid type given. String expected",
        self::NOT_PIZZA    => "The input is not a pizza name.",
        self::STRING_EMPTY => "The input is an empty string",
    );

    /**
     * Options for this validator
     *
     * @var array
     */
    protected $options = array(
        'pizzaList' => array(
            'Pizza Salami', 'Pizza Hawaii', 'Pizza Melone', 'Pizza Thunfisch',
            'Pizza Spinat', 'Pizza Schinken', 'Pizza Vier Jahreszeiten',
        ),
    );

    /**
     * Returns true if $value is a valid pizza name
     *
     * @param  string $value
     * @return boolean
     */
    public function isValid($value)
    {
        if (!is_string($value)) {
            $this->error(self::INVALID);
            return false;
        }

        $this->setValue($value);
        if ('' === $value) {
            $this->error(self::STRING_EMPTY);
            return false;
        }

        if (!in_array($value, $this->options['pizzaList'])) {
            $this->error(self::NOT_PIZZA);
            return false;
        }

        return true;
    }
}
