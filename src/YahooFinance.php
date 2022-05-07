<?php

namespace Necmicolak\YahooFinance;

use GuzzleHttp\Client;

abstract class Yahoo
{
	private $base_url = 'https://query1.finance.yahoo.com/';
	protected $endpoint;
	protected $queries = [];
	
	public function connect($method = 'GET')
	{
		$url = $this->base_url.$this->endpoint;
		$url = ! empty($this->queries) ? $url.'?'.http_build_query($this->queries) : $url;
		
		$client = new Client();
		return json_decode($client->request($method, $url)->getBody(), true);
	}
}
