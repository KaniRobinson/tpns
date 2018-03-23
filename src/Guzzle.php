<?php

namespace TPNS;

class Guzzle
{
    /**
     * Client Instance
     * 
     * @return \GuzzleHttp\Client
     */
    public $client;

	/**
	 * Application url
	 * 
	 * @var array
	 */
    public $options = [];

	/**
	 * The results object of the app creation.
	 * 
	 * @var array
	 */
    public $result = [];

    public function __construct(array $options = [])
    {
        $this->client = new \GuzzleHttp\Client();
        $this->options = $options;
        $this->execute();
        $this->transform();
    }

    /**
     * Hide specific elements on response
     * 
     * @return Array
     */
    public function __debugInfo() : array
    {
        $properties = get_object_vars($this);
        unset($properties['client']);
    
        return $properties;
    }

    /**
     * Execute Guzzle POST request
     * 
     * @return Guzzle
     */
    protected function execute()
    {
        $this->result = $this->client->post($this->apiUri, [
            'headers' => [
                'Content-Type' => 'application/json'
            ],
            'body' => json_encode($this->options)
        ])->getBody()->getContents();

        return $this;
    }

    /**
     * Convert string to object
     * 
     * @return Guzzle
     */
    protected function transform()
    {
        $this->result = json_decode($this->result);

        return $this;
    }
}