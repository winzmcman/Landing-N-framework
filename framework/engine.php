<?php

class Engine 
{

    public 
        $config;

    public function __construct(){
        $this->config = require( BASE_DIR . "/config.php" );
        $this->get_page();
    }

    private function get_page()
    {
        require( BASE_DIR . "/" . $this->config['folder_name'] . "/" . $this->config['name_of_landing_file'] );
    }

}