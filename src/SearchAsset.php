<?php

namespace Necmicolak\YahooFinance;

class SearchAsset extends Yahoo
{
	protected $endpoint = 'v1/finance/search';
	
	function __construct($key, $count)
	{
		$this->queries = [
			'q'                 => $key,
			'lang'              => 'en-US',
			'region'            => 'US',
			'quotesCount'       => $count,
			'newsCount'         => '0',
			'listsCount'        => '0',
			'enableFuzzyQuery'  => 'false',
			'quotesQueryId'     => 'tss_match_phrase_query',
			'multiQuoteQueryId' => 'multi_quote_single_token_query'
		];
		
		return $this->map();
	}
	
	public static function search($key, $count = 6)
	{
		return (new SearchAsset($key, $count))->map();
	}
	
	protected function map()
	{
		return array_map(function ($data) {
			return $data;
		}, $this->connect()['quotes']);
	}
	
}