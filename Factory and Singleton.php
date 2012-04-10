<?php
class Factory
{
    // The parameterized factory method
    public static function factory($type)
    {
        if (include_once 'Drivers/' . $type . '.php') {
            $classname = 'Driver_' . $type;
            return new $classname;
        } else {
            throw new Exception('Driver not found');
        }
    }
}
?>


<?php
class Singleton
{
    private static $instance;
    private $count = 0;

    private function __construct()
    {
    }

    public static function singleton()
    {
        if (!isset(self::$instance)) {
            echo 'Creating new instance.';
            $className = __CLASS__;
            self::$instance = new $className;
        }
        return self::$instance;
    }

    public function increment()
    {
        return $this->count++;
    }

    public function __clone()
    {
        trigger_error('Clone is not allowed.', E_USER_ERROR);
    }

    public function __wakeup()
    {
        trigger_error('Unserializing is not allowed.', E_USER_ERROR);
    }
}
?>