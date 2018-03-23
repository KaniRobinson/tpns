<?php

namespace TPNS\Methods;

class App extends \TPNS\Guzzle {

	/**
	 * The api url for creating an app.
	 * 
	 * @var string
	 */
    protected $apiUri = 'https://push.com/api/app';

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
	 * Create new application method.
	 *
	 * @return App
	 */	
    public function create() : App
    {
        return $this;
    }
}
