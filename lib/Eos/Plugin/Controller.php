<?php
/**
 * Eos
 *
 * @author Online Associates (MS) <https://github.com/onlineassociates>
 */
class Eos_Plugin_Controller
{
    /**
     * Load at configuration
     */
    public static function init()
    {
        Eos_Config::loadFromFile(self::getConfigFilename());
    }

    /**
     * Get Configuration Path
     *
     * @return string
     */
    public static function getConfigFilename()
    {
        return PIMCORE_WEBSITE_PATH . '/var/plugins/eos/config.php';
    }

    /**
     * Check if the plugin is installed or not
     */
    public static function isInstalled()
    {
        return is_file(self::getConfigFilename());
    }

    /**
     * Install
     */
    public static function install()
    {
        self::_createConfigFile();

        if(self::isInstalled())
        {
            return "Eos Plugin successfully installed.";
        }
        else
        {
            return "Eos Plugin could not be installed";
        }
    }

    /**
     * Uninstall
     */
    public static function uninstall()
    {
        unlink(self::getConfigFilename());

        if(!self::isInstalled())
        {
            return "Eos Plugin successfully uninstalled.";
        }
        else
        {
            return "Eos Plugin could not be uninstalled";
        }
    }

    /**
     * @return string
     */
    public static function getPluginPath()
    {
        return PIMCORE_PLUGINS_PATH . "/Eos";
    }

    /**
     * Create Config File
     */
    private static function _createConfigFile()
    {
        $filename = self::getConfigFilename();
        if(!file_exists($filename))
        {
            mkdir(PIMCORE_WEBSITE_PATH . '/var/plugins/eos/');
            $data = '<?php
                return [];
            ';

            file_put_contents($filename, $data);
        }
    }

}