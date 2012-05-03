<?php
/**
 * Part of the Phrame
 *
 * @package    Codeception
 * @version    0.4.0
 * @author     Phrame Development Team
 * @license    MIT License
 * @copyright  2012 Phrame Development Team
 * @link       http://phrame.itworks.in.ua/
 */

namespace Phrame\Codeception;

use Phrame\Core;

/**
 * Bootstrap class
 */
class Bootstrap
{
    /**
     * Loads and initializes package
     * 
     * @param   string  $app_name  Application name
     * @return  void
     */
    public static function init($app_name = null)
    {
        include_once 'vendor/autoload.php';
    }

}
