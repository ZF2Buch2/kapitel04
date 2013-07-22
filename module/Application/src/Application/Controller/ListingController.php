<?php
/**
 * ZF2 Buch Kapitel 4
 * 
 * Das Buch "Zend Framework 2 - Das Praxisbuch"
 * von Ralf Eggert ist im Galileo-Computing Verlag erschienen. 
 * ISBN 978-3-8362-2610-3
 * 
 * @package    Application
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @copyright  Alle Listings sind urheberrechtlich geschützt!
 * @link       http://www.zendframeworkbuch.de/ und http://www.galileocomputing.de/3460
 */

/**
 * namespace definition and usage
 */
namespace Application\Controller;

use Zend\Debug\Debug;
use Zend\Loader\AutoloaderFactory;
use Zend\Loader\ClassMapAutoloader;
use Zend\Loader\StandardAutoloader;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Listing controller
 * 
 * Shows and executes the listings
 * 
 * @package    Application
 */
class ListingController extends AbstractActionController
{
    /**
     * Redirects to homepage
     */
    public function indexAction()
    {
        return $this->redirect()->toRoute('home');
    }
    
    /**
     * Show listing 04.01
     */
    public function listing0401Action()
    {
        // setup output
        $output = '';
        
        // check if Pizza Salami can be loaded
        $output.= Debug::dump(class_exists('Pizza\Model\PizzaSalami'), null, false);
        
        // configure Standard Autoloader
        $loader = new StandardAutoloader();
        $loader->registerNamespace('Pizza', LUIGI_ROOT . '/module/Pizza/src/Pizza');
        $loader->register();
        
        // check if Pizza Salami can be loaded
        $output.= Debug::dump(class_exists('Pizza\Model\PizzaSalami'), null, false);
        
        return new ViewModel(array(
            'output' => $output,
        ));
    }
    
    /**
     * Show listing 04.02
     */
    public function listing0402Action()
    {
        // setup output
        $output = '';
        
        // check if Pizza Salami can be loaded
        $output.= Debug::dump(class_exists('Pizza\Model\PizzaSalami'), null, false);
        
        // configure ClassMap Autoloader
        $loader = new ClassMapAutoloader();
        $loader->registerAutoloadMap(LUIGI_ROOT . '/module/Pizza/autoload_classmap.php');
        $loader->register();
        
        // check if Pizza Salami can be loaded
        $output.= Debug::dump(class_exists('Pizza\Model\PizzaSalami'), null, false);
        
        return new ViewModel(array(
            'output' => $output,
        ));
    }
    
    /**
     * Show listing 04.03
     */
    public function listing0403Action()
    {
        // setup output
        $output = '';
        
        // check if Pizza Service can be loaded
        $output.= Debug::dump(class_exists('Pizza\Service\PizzaService'), null, false);
        
        // set configuration options
        $options = array(
            'Zend\Loader\ClassMapAutoloader' => array(
                'pizza' => LUIGI_ROOT . '/module/Pizza/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    'Pizza' => LUIGI_ROOT . '/module/Pizza/src/Pizza',
                ),
            ),
        );
        
        // configure AutoloaderFactory
        AutoloaderFactory::factory($options);
        
        // check if Pizza Service can be loaded
        $output.= Debug::dump(class_exists('Pizza\Service\PizzaService'), null, false);
        
        return new ViewModel(array(
            'output' => $output,
        ));
    }
    
    /**
     * Show listing 04.04
     */
    public function listing0404Action()
    {
        return new ViewModel(array());
    }
    
    /**
     * Show listing 04.05
     */
    public function listing0405Action()
    {
        return new ViewModel(array());
    }
    
    /**
     * Show listing 04.06
     */
    public function listing0406Action()
    {
        return new ViewModel(array());
    }
    
    /**
     * Show listing 04.07
     */
    public function listing0407Action()
    {
        return new ViewModel(array());
    }
    
    /**
     * Show listing 04.08
     */
    public function listing0408Action()
    {
        return new ViewModel(array());
    }

    /**
     * Show listing 04.09
     */
    public function listing0409Action()
    {
        return new ViewModel(array());
    }
    
    /**
     * Show listing 04.10
     */
    public function listing0410Action()
    {
        return new ViewModel(array());
    }
    
    /**
     * Show listing 04.11
     */
    public function listing0411Action()
    {
        return new ViewModel(array());
    }
    
    /**
     * Show listing 04.12
     */
    public function listing0412Action()
    {
        return new ViewModel(array());
    }
    
    /**
     * Show listing 04.13
     */
    public function listing0413Action()
    {
        return new ViewModel(array());
    }
    
    /**
     * Show listing 04.14
     */
    public function listing0414Action()
    {
        return new ViewModel(array());
    }
    
    /**
     * Show listing 04.15
     */
    public function listing0415Action()
    {
        return new ViewModel(array());
    }
    
    /**
     * Show listing 04.16
     */
    public function listing0416Action()
    {
        return new ViewModel(array());
    }
    
    /**
     * Show listing 04.17
     */
    public function listing0417Action()
    {
        return new ViewModel(array());
    }
    
    /**
     * Show listing 04.18
     */
    public function listing0418Action()
    {
        return new ViewModel(array());
    }
    
    /**
     * Show listing 04.19
     */
    public function listing0419Action()
    {
        return new ViewModel(array());
    }
    
    /**
     * Show listing 04.20
     */
    public function listing0420Action()
    {
        return new ViewModel(array());
    }
    
    /**
     * Show listing 04.21
     */
    public function listing0421Action()
    {
        return new ViewModel(array());
    }
    
    /**
     * Show listing 04.22
     */
    public function listing0422Action()
    {
        return new ViewModel(array());
    }
    
    /**
     * Show listing 04.23
     */
    public function listing0423Action()
    {
        return new ViewModel(array());
    }
    
    /**
     * Show listing 04.24
     */
    public function listing0424Action()
    {
        return new ViewModel(array());
    }
    
    /**
     * Show listing 04.25
     */
    public function listing0425Action()
    {
        return new ViewModel(array());
    }

    /**
     * Show listing 04.26
     */
    public function listing0426Action()
    {
        return new ViewModel(array());
    }
}
