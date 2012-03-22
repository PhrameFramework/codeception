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

class Bootstrap
{
    /**
     * Loads and initializes package
     * 
     * @param   \Phrame\Core\Application  $app  Application object
     * @return  void
     */
    public static function init($app = null)
    {
        $app = $app ?: Core\Application::instance();

        include_once 'vendor/autoload.php';
    }

}
