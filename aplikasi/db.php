<?php 

namespace App;

    class db 
    {
        static $db_type;
        static $db_host;
        static $db_name;
        static $db_user;
        static $db_pass;

        private static $instance;

        public static function init(){
            if ( is_null( self::$instance ) )
            {
                self::$db_type=getenv('DB_TYPE');
                self::$db_host=getenv('DB_HOST');
                self::$db_name=getenv('DB_NAME');
                self::$db_user=getenv('DB_USER');
                self::$db_pass=getenv('DB_PASS');
                self::$instance = new self();
            }
            return self::$instance;
        }

        public static function get()
        {
            return getenv('APP_NAME') . self::$db_user;
        }
    }
    

?>
