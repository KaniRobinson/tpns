<?php

namespace TPNS\Methods;

class Notification extends \TPNS\Guzzle {

	/**
	 * The api url for creating a notification.
	 * 
	 * @var string
	 */
    protected $apiUri = 'http://pushsvr.team8digital.uk/api/notification';

    /**
     * Mass assign options for request
     * 
     * @param  array $options
     */
    public function __construct(array $options = [])
    {
        Parent::__construct($options);
    }

	/**
	 * Create new notification method.
	 *
	 * @return Notification
	 */	
    public function create() : Notification
    {
        return $this;
    }
}