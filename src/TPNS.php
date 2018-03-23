<?php

namespace TPNS;

use TPNS\Methods\App;

use TPNS\Methods\User;

use TPNS\Methods\Notification;

class TPNS {
    
    /**
     * Executes App Creation Method
     * 
     * @return TPNS\Methods\App
     */
    public function app(array $options = []) 
    {
        return new App($options);
    }

    /**
     * Executes User Creation Method
     * 
     * @return TPNS\Methods\User
     */
    public function user(array $options = []) 
    {
        return new User($options);
    }

    /**
     * Executes Notification Creation Method
     * 
     * @return TPNS\Methods\Notification
     */
    public function notification(array $options = []) 
    {
        return new Notification($options);
    }
}