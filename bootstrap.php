<?php
/**
 * Part of the Phrame
 *
 * @package    Codeception
 * @version    0.3.0
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
     * @param   Core\Application  $application  Application object
     * @return  void
     */
    public static function init($application = null)
    {
        $application = $application ?: Core\Application::instance();

        include_once 'vendor/autoload.php';
    }

}
