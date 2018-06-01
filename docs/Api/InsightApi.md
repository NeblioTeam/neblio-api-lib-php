# Swagger\Client\InsightApi

All URIs are relative to *https://ntp1node.nebl.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAddress**](InsightApi.md#getAddress) | **GET** /ins/addr/{address} | Returns address object
[**getAddressBalance**](InsightApi.md#getAddressBalance) | **GET** /ins/addr/{address}/balance | Returns address balance in sats
[**getAddressTotalReceived**](InsightApi.md#getAddressTotalReceived) | **GET** /ins/addr/{address}/totalReceived | Returns total received by address in sats
[**getAddressTotalSent**](InsightApi.md#getAddressTotalSent) | **GET** /ins/addr/{address}/totalSent | Returns total sent by address in sats
[**getAddressUnconfirmedBalance**](InsightApi.md#getAddressUnconfirmedBalance) | **GET** /ins/addr/{address}/unconfirmedBalance | Returns address unconfirmed balance in sats
[**getAddressUtxos**](InsightApi.md#getAddressUtxos) | **GET** /ins/addr/{address}/utxo | Returns all UTXOs at a given address
[**getBlock**](InsightApi.md#getBlock) | **GET** /ins/block/{blockhash} | Returns information regarding a Neblio block
[**getBlockIndex**](InsightApi.md#getBlockIndex) | **GET** /ins/block-index/{blockindex} | Returns block hash of block
[**getRawTx**](InsightApi.md#getRawTx) | **GET** /ins/rawtx/{txid} | Returns raw transaction hex
[**getStatus**](InsightApi.md#getStatus) | **GET** /ins/status | Utility API for calling several blockchain node functions
[**getSync**](InsightApi.md#getSync) | **GET** /ins/sync | Get node sync status
[**getTx**](InsightApi.md#getTx) | **GET** /ins/tx/{txid} | Returns transaction object
[**getTxs**](InsightApi.md#getTxs) | **GET** /ins/txs | Get transactions by block or address
[**sendTx**](InsightApi.md#sendTx) | **POST** /ins/tx/send | Broadcasts a signed raw transaction to the network (not NTP1 specific)


# **getAddress**
> \Swagger\Client\Model\GetAddressResponse getAddress($address)

Returns address object

Returns NEBL address object containing information on a specific address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = "address_example"; // string | Address

try {
    $result = $apiInstance->getAddress($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightApi->getAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Address |

### Return type

[**\Swagger\Client\Model\GetAddressResponse**](../Model/GetAddressResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddressBalance**
> \Swagger\Client\Model\GetAddressBalanceResponse getAddressBalance($address)

Returns address balance in sats

Returns NEBL address balance in satoshis

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = "address_example"; // string | Address

try {
    $result = $apiInstance->getAddressBalance($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightApi->getAddressBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Address |

### Return type

[**\Swagger\Client\Model\GetAddressBalanceResponse**](../Model/GetAddressBalanceResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddressTotalReceived**
> \Swagger\Client\Model\GetAddressTotalReceivedResponse getAddressTotalReceived($address)

Returns total received by address in sats

Returns total NEBL received by address in satoshis

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = "address_example"; // string | Address

try {
    $result = $apiInstance->getAddressTotalReceived($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightApi->getAddressTotalReceived: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Address |

### Return type

[**\Swagger\Client\Model\GetAddressTotalReceivedResponse**](../Model/GetAddressTotalReceivedResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddressTotalSent**
> \Swagger\Client\Model\GetAddressTotalSentResponse getAddressTotalSent($address)

Returns total sent by address in sats

Returns total NEBL sent by address in satoshis

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = "address_example"; // string | Address

try {
    $result = $apiInstance->getAddressTotalSent($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightApi->getAddressTotalSent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Address |

### Return type

[**\Swagger\Client\Model\GetAddressTotalSentResponse**](../Model/GetAddressTotalSentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddressUnconfirmedBalance**
> \Swagger\Client\Model\GetAddressUnconfirmedBalanceResponse getAddressUnconfirmedBalance($address)

Returns address unconfirmed balance in sats

Returns NEBL address unconfirmed balance in satoshis

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = "address_example"; // string | Address

try {
    $result = $apiInstance->getAddressUnconfirmedBalance($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightApi->getAddressUnconfirmedBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Address |

### Return type

[**\Swagger\Client\Model\GetAddressUnconfirmedBalanceResponse**](../Model/GetAddressUnconfirmedBalanceResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddressUtxos**
> \Swagger\Client\Model\GetAddressUtxosResponse getAddressUtxos($address)

Returns all UTXOs at a given address

Returns information on each Unspent Transaction Output contained at an address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = "address_example"; // string | Address

try {
    $result = $apiInstance->getAddressUtxos($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightApi->getAddressUtxos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Address |

### Return type

[**\Swagger\Client\Model\GetAddressUtxosResponse**](../Model/GetAddressUtxosResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBlock**
> \Swagger\Client\Model\GetBlockResponse getBlock($blockhash)

Returns information regarding a Neblio block

Returns blockchain data for a given block based upon the block hash

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$blockhash = "blockhash_example"; // string | Block Hash

try {
    $result = $apiInstance->getBlock($blockhash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightApi->getBlock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockhash** | **string**| Block Hash |

### Return type

[**\Swagger\Client\Model\GetBlockResponse**](../Model/GetBlockResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBlockIndex**
> \Swagger\Client\Model\GetBlockIndexResponse getBlockIndex($blockindex)

Returns block hash of block

Returns the block hash of a block at a given block index

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$blockindex = 8.14; // float | Block Index

try {
    $result = $apiInstance->getBlockIndex($blockindex);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightApi->getBlockIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockindex** | **float**| Block Index |

### Return type

[**\Swagger\Client\Model\GetBlockIndexResponse**](../Model/GetBlockIndexResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRawTx**
> \Swagger\Client\Model\GetRawTxResponse getRawTx($txid)

Returns raw transaction hex

Returns raw transaction hex representing a NEBL transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$txid = "txid_example"; // string | Transaction ID

try {
    $result = $apiInstance->getRawTx($txid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightApi->getRawTx: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **txid** | **string**| Transaction ID |

### Return type

[**\Swagger\Client\Model\GetRawTxResponse**](../Model/GetRawTxResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStatus**
> \Swagger\Client\Model\GetStatusResponse getStatus($q)

Utility API for calling several blockchain node functions

tility API for calling several blockchain node functions - getInfo, getDifficulty, getBestBlockHash, getLastBlockHash

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$q = "q_example"; // string | Function to call, getInfo, getDifficulty, getBestBlockHash, or getLastBlockHash

try {
    $result = $apiInstance->getStatus($q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightApi->getStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Function to call, getInfo, getDifficulty, getBestBlockHash, or getLastBlockHash | [optional]

### Return type

[**\Swagger\Client\Model\GetStatusResponse**](../Model/GetStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSync**
> \Swagger\Client\Model\GetSyncResponse getSync()

Get node sync status

Returns information on the node's sync progress

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getSync();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightApi->getSync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\GetSyncResponse**](../Model/GetSyncResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTx**
> \Swagger\Client\Model\GetTxResponse getTx($txid)

Returns transaction object

Returns NEBL transaction object representing a NEBL transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$txid = "txid_example"; // string | Transaction ID

try {
    $result = $apiInstance->getTx($txid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightApi->getTx: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **txid** | **string**| Transaction ID |

### Return type

[**\Swagger\Client\Model\GetTxResponse**](../Model/GetTxResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTxs**
> \Swagger\Client\Model\GetTxsResponse getTxs($address, $block, $page)

Get transactions by block or address

Returns all transactions by block or address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = "address_example"; // string | Address
$block = "block_example"; // string | Block Hash
$page = 8.14; // float | Page number to display

try {
    $result = $apiInstance->getTxs($address, $block, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightApi->getTxs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Address | [optional]
 **block** | **string**| Block Hash | [optional]
 **page** | **float**| Page number to display | [optional]

### Return type

[**\Swagger\Client\Model\GetTxsResponse**](../Model/GetTxsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendTx**
> \Swagger\Client\Model\BroadcastTxResponse sendTx($body)

Broadcasts a signed raw transaction to the network (not NTP1 specific)

Broadcasts a signed raw transaction to the network. If successful returns the txid of the broadcast trasnaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SendTxRequest(); // \Swagger\Client\Model\SendTxRequest | Object representing a transaction to broadcast

try {
    $result = $apiInstance->sendTx($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsightApi->sendTx: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SendTxRequest**](../Model/SendTxRequest.md)| Object representing a transaction to broadcast |

### Return type

[**\Swagger\Client\Model\BroadcastTxResponse**](../Model/BroadcastTxResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

