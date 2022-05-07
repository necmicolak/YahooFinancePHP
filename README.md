# YahooFinancePHP
Yahoo finance unofficial API PHP package

# Usage

# Search Currency, stocks etc.
```
use Necmicolak\YahooFinance\SearchAsset;

SearchAsset::search('APP', 6);

// Returns an array of exchange, shortname, quoteType, symbol etc.
```

# Fetch meta values
```
use Necmicolak\YahooFinance\FinanceAsset;
$asset = new FinanceAsset('BTC-USD');
$asset->getMeta();
```
* Example Return
```
[
     "currency" => "USD",
     "symbol" => "BTC-USD",
     "exchangeName" => "CCC",
     "instrumentType" => "CRYPTOCURRENCY",
     "firstTradeDate" => 1410912000,
     "regularMarketTime" => 1651964220,
     "gmtoffset" => 0,
     "timezone" => "UTC",
     "exchangeTimezoneName" => "UTC",
     "regularMarketPrice" => 34982.34,
     "chartPreviousClose" => 36033.406,
     "previousClose" => 36033.406,
     "scale" => 3,
     "priceHint" => 2,
     "currentTradingPeriod" => [
       "pre" => [
         "timezone" => "UTC",
         "end" => 1651881600,
         "start" => 1651881600,
         "gmtoffset" => 0,
       ],
       "regular" => [
         "timezone" => "UTC",
         "end" => 1651967940,
         "start" => 1651881600,
         "gmtoffset" => 0,
       ],
       "post" => [
         "timezone" => "UTC",
         "end" => 1651967940,
         "start" => 1651967940,
         "gmtoffset" => 0,
       ],
     ],
     "tradingPeriods" => [
       [
         [
           "timezone" => "UTC",
           "end" => 1651967940,
           "start" => 1651881600,
           "gmtoffset" => 0,
         ],
       ],
     ],
     "dataGranularity" => "1m",
     "range" => "1d",
     "validRanges" => [
       "1d",
       "5d",
       "1mo",
       "3mo",
       "6mo",
       "1y",
       "2y",
       "5y",
       "10y",
       "ytd",
       "max",
     ],
];
```

# Fetch chart
```
use Necmicolak\YahooFinance\FinanceAsset;
$asset = new FinanceAsset('BTC-USD');
$asset->getChart();
```
* Example return
```
[
  "timestamp" => [] // timestamp values
  "values" => [] // asset values same count timestamp
]
```
