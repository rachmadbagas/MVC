<?php 
    require __DIR__."/../vendor/autoload.php";

    use \App\db;
    use \Dotenv\Dotenv as env;
    
    $dotenv = new env(__DIR__.'/../');
    $dotenv->load();

    
    echo db::init()->get();

?>