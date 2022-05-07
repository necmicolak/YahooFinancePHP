<?php

namespace Necmicolak\YahooFinance;

class FinanceAsset extends Yahoo
{
	protected $endpoint = 'v8/finance/chart/';
	private $response;
	
	/**
	 * @param $symbol string (required)
	 * @param $interval string (optional) (default: '1m')
	 * @param $range string (optional) (default: '1d')
	 */
	public function __construct($symbol, $interval = '1m', $range = '1d')
	{
		$this->endpoint .= $symbol;
		$this->queries = [
			'region' => 'US',
			'lang' => 'en-US',
			'includePrePost' => 'false',
			'interval' => $interval,
			'range' => $range,
		];
		
		$this->response = $this->connect();
	}
	
	public function getMeta()
	{
		return $this->response['chart']['result'][0]['meta'];
	}
	
	public function getChart()
	{
		return [
			'timestamp' => $this->response['chart']['result'][0]['timestamp'],
			'values' => $this->response['chart']['result'][0]['indicators']['quote'][0]['open'],
		];
	}
	
}