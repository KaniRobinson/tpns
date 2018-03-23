<?php

namespace TPNS\Methods;

class User extends \TPNS\Guzzle {

	/**
	 * The api url for creating an user.
	 * 
	 * @var string
	 */
    protected $apiUri = 'https://push.com/api/user';

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
	 * Create new user method.
	 *
	 * @return User
	 */	
    public function create() : User
    {
        return $this;
    }
}
