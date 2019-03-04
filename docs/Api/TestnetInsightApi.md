# NeblioAPI\TestnetInsightApi

All URIs are relative to *https://ntp1node.nebl.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**testnetGetAddress**](TestnetInsightApi.md#testnetGetAddress) | **GET** /testnet/ins/addr/{address} | Returns address object
[**testnetGetAddressBalance**](TestnetInsightApi.md#testnetGetAddressBalance) | **GET** /testnet/ins/addr/{address}/balance | Returns address balance in sats
[**testnetGetAddressTotalReceived**](TestnetInsightApi.md#testnetGetAddressTotalReceived) | **GET** /testnet/ins/addr/{address}/totalReceived | Returns total received by address in sats
[**testnetGetAddressTotalSent**](TestnetInsightApi.md#testnetGetAddressTotalSent) | **GET** /testnet/ins/addr/{address}/totalSent | Returns total sent by address in sats
[**testnetGetAddressUnconfirmedBalance**](TestnetInsightApi.md#testnetGetAddressUnconfirmedBalance) | **GET** /testnet/ins/addr/{address}/unconfirmedBalance | Returns address unconfirmed balance in sats
[**testnetGetAddressUtxos**](TestnetInsightApi.md#testnetGetAddressUtxos) | **GET** /testnet/ins/addr/{address}/utxo | Returns all UTXOs at a given address
[**testnetGetBlock**](TestnetInsightApi.md#testnetGetBlock) | **GET** /testnet/ins/block/{blockhash} | Returns information regarding a Neblio block
[**testnetGetBlockIndex**](TestnetInsightApi.md#testnetGetBlockIndex) | **GET** /testnet/ins/block-index/{blockindex} | Returns block hash of block
[**testnetGetRawTx**](TestnetInsightApi.md#testnetGetRawTx) | **GET** /testnet/ins/rawtx/{txid} | Returns raw transaction hex
[**testnetGetStatus**](TestnetInsightApi.md#testnetGetStatus) | **GET** /testnet/ins/status | Utility API for calling several blockchain node functions
[**testnetGetSync**](TestnetInsightApi.md#testnetGetSync) | **GET** /testnet/ins/sync | Get node sync status
[**testnetGetTx**](TestnetInsightApi.md#testnetGetTx) | **GET** /testnet/ins/tx/{txid} | Returns transaction object
[**testnetGetTxs**](TestnetInsightApi.md#testnetGetTxs) | **GET** /testnet/ins/txs | Get transactions by block or address
[**testnetSendTx**](TestnetInsightApi.md#testnetSendTx) | **POST** /testnet/ins/tx/send | Broadcasts a signed raw transaction to the network (not NTP1 specific)


# **testnetGetAddress**
> \NeblioAPI\Model\GetAddressResponse testnetGetAddress($address)

Returns address object

Returns NEBL address object containing information on a specific address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\TestnetInsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Address

try {
    $result = $apiInstance->testnetGetAddress($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestnetInsightApi->testnetGetAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Address |

### Return type

[**\NeblioAPI\Model\GetAddressResponse**](../Model/GetAddressResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testnetGetAddressBalance**
> float testnetGetAddressBalance($address)

Returns address balance in sats

Returns NEBL address balance in satoshis

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\TestnetInsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Address

try {
    $result = $apiInstance->testnetGetAddressBalance($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestnetInsightApi->testnetGetAddressBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Address |

### Return type

**float**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testnetGetAddressTotalReceived**
> float testnetGetAddressTotalReceived($address)

Returns total received by address in sats

Returns total NEBL received by address in satoshis

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\TestnetInsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Address

try {
    $result = $apiInstance->testnetGetAddressTotalReceived($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestnetInsightApi->testnetGetAddressTotalReceived: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Address |

### Return type

**float**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testnetGetAddressTotalSent**
> float testnetGetAddressTotalSent($address)

Returns total sent by address in sats

Returns total NEBL sent by address in satoshis

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\TestnetInsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Address

try {
    $result = $apiInstance->testnetGetAddressTotalSent($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestnetInsightApi->testnetGetAddressTotalSent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Address |

### Return type

**float**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testnetGetAddressUnconfirmedBalance**
> float testnetGetAddressUnconfirmedBalance($address)

Returns address unconfirmed balance in sats

Returns NEBL address unconfirmed balance in satoshis

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\TestnetInsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Address

try {
    $result = $apiInstance->testnetGetAddressUnconfirmedBalance($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestnetInsightApi->testnetGetAddressUnconfirmedBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Address |

### Return type

**float**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testnetGetAddressUtxos**
> object[] testnetGetAddressUtxos($address)

Returns all UTXOs at a given address

Returns information on each Unspent Transaction Output contained at an address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\TestnetInsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Address

try {
    $result = $apiInstance->testnetGetAddressUtxos($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestnetInsightApi->testnetGetAddressUtxos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Address |

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testnetGetBlock**
> \NeblioAPI\Model\GetBlockResponse testnetGetBlock($blockhash)

Returns information regarding a Neblio block

Returns blockchain data for a given block based upon the block hash

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\TestnetInsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$blockhash = 'blockhash_example'; // string | Block Hash

try {
    $result = $apiInstance->testnetGetBlock($blockhash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestnetInsightApi->testnetGetBlock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockhash** | **string**| Block Hash |

### Return type

[**\NeblioAPI\Model\GetBlockResponse**](../Model/GetBlockResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testnetGetBlockIndex**
> \NeblioAPI\Model\GetBlockIndexResponse testnetGetBlockIndex($blockindex)

Returns block hash of block

Returns the block hash of a block at a given block index

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\TestnetInsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$blockindex = 3.4; // float | Block Index

try {
    $result = $apiInstance->testnetGetBlockIndex($blockindex);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestnetInsightApi->testnetGetBlockIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockindex** | **float**| Block Index |

### Return type

[**\NeblioAPI\Model\GetBlockIndexResponse**](../Model/GetBlockIndexResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testnetGetRawTx**
> \NeblioAPI\Model\GetRawTxResponse testnetGetRawTx($txid)

Returns raw transaction hex

Returns raw transaction hex representing a NEBL transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\TestnetInsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$txid = 'txid_example'; // string | Transaction ID

try {
    $result = $apiInstance->testnetGetRawTx($txid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestnetInsightApi->testnetGetRawTx: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **txid** | **string**| Transaction ID |

### Return type

[**\NeblioAPI\Model\GetRawTxResponse**](../Model/GetRawTxResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testnetGetStatus**
> object testnetGetStatus($q)

Utility API for calling several blockchain node functions

Utility API for calling several blockchain node functions - getInfo, getDifficulty, getBestBlockHash, getLastBlockHash

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\TestnetInsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$q = 'q_example'; // string | Function to call, getInfo, getDifficulty, getBestBlockHash, or getLastBlockHash

try {
    $result = $apiInstance->testnetGetStatus($q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestnetInsightApi->testnetGetStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Function to call, getInfo, getDifficulty, getBestBlockHash, or getLastBlockHash | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testnetGetSync**
> \NeblioAPI\Model\GetSyncResponse testnetGetSync()

Get node sync status

Returns information on the node's sync progress

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\TestnetInsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->testnetGetSync();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestnetInsightApi->testnetGetSync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\NeblioAPI\Model\GetSyncResponse**](../Model/GetSyncResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testnetGetTx**
> \NeblioAPI\Model\GetTxResponse testnetGetTx($txid)

Returns transaction object

Returns NEBL transaction object representing a NEBL transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\TestnetInsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$txid = 'txid_example'; // string | Transaction ID

try {
    $result = $apiInstance->testnetGetTx($txid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestnetInsightApi->testnetGetTx: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **txid** | **string**| Transaction ID |

### Return type

[**\NeblioAPI\Model\GetTxResponse**](../Model/GetTxResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testnetGetTxs**
> \NeblioAPI\Model\GetTxsResponse testnetGetTxs($address, $block, $page_num)

Get transactions by block or address

Returns all transactions by block or address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\TestnetInsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Address
$block = 'block_example'; // string | Block Hash
$page_num = 3.4; // float | Page number to display

try {
    $result = $apiInstance->testnetGetTxs($address, $block, $page_num);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestnetInsightApi->testnetGetTxs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Address | [optional]
 **block** | **string**| Block Hash | [optional]
 **page_num** | **float**| Page number to display | [optional]

### Return type

[**\NeblioAPI\Model\GetTxsResponse**](../Model/GetTxsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testnetSendTx**
> \NeblioAPI\Model\BroadcastTxResponse testnetSendTx($send_tx_request)

Broadcasts a signed raw transaction to the network (not NTP1 specific)

Broadcasts a signed raw transaction to the network. If successful returns the txid of the broadcast trasnaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\TestnetInsightApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$send_tx_request = new \NeblioAPI\Model\SendTxRequest(); // \NeblioAPI\Model\SendTxRequest | Object representing a transaction to broadcast

try {
    $result = $apiInstance->testnetSendTx($send_tx_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestnetInsightApi->testnetSendTx: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **send_tx_request** | [**\NeblioAPI\Model\SendTxRequest**](../Model/SendTxRequest.md)| Object representing a transaction to broadcast |

### Return type

[**\NeblioAPI\Model\BroadcastTxResponse**](../Model/BroadcastTxResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

