<?php
/**
 * Eos
 *
 * @author Online Associates (MS) <https://github.com/onlineassociates>
 */
class Eos_Plugin extends Pimcore_API_Plugin_Abstract implements Pimcore_API_Plugin_Interface
{
    /**
     * Init
     */
    public function init()
    {
        Eos_Plugin_Controller::init();
    }

    /**
     *
     *
     * @return bool
     */
    public static function install()
    {
        Eos_Plugin_Controller::install();
    }

    /**
     * @return bool
     */
    public static function uninstall()
    {
        Eos_Plugin_Controller::uninstall();
        return true;
    }

    /**
     * @return bool
     */
    public static function isInstalled()
    {
        return Eos_Plugin_Controller::isInstalled();
    }

    /**
     * Get Configuration
     *
     * @return array|mixed
     */
    public static function getConfig()
    {
        return Eos_Plugin_Controller::getConfiguration();
    }
}
