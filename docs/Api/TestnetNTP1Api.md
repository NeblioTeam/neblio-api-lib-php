# NeblioAPI\TestnetNTP1Api

All URIs are relative to *https://ntp1node.nebl.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**testnetBroadcastTx**](TestnetNTP1Api.md#testnetBroadcastTx) | **POST** /testnet/ntp1/broadcast | Broadcasts a signed raw transaction to the network
[**testnetBurnToken**](TestnetNTP1Api.md#testnetBurnToken) | **POST** /testnet/ntp1/burntoken | Builds a transaction that burns an NTP1 Token
[**testnetGetAddressInfo**](TestnetNTP1Api.md#testnetGetAddressInfo) | **GET** /testnet/ntp1/addressinfo/{address} | Information On a Neblio Address
[**testnetGetTokenHolders**](TestnetNTP1Api.md#testnetGetTokenHolders) | **GET** /testnet/ntp1/stakeholders/{tokenid} | Get Addresses Holding a Token
[**testnetGetTokenId**](TestnetNTP1Api.md#testnetGetTokenId) | **GET** /testnet/ntp1/tokenid/{tokensymbol} | Returns the tokenId representing a token
[**testnetGetTokenMetadata**](TestnetNTP1Api.md#testnetGetTokenMetadata) | **GET** /testnet/ntp1/tokenmetadata/{tokenid} | Get Metadata of Token
[**testnetGetTokenMetadataOfUtxo**](TestnetNTP1Api.md#testnetGetTokenMetadataOfUtxo) | **GET** /testnet/ntp1/tokenmetadata/{tokenid}/{utxo} | Get UTXO Metadata of Token
[**testnetGetTransactionInfo**](TestnetNTP1Api.md#testnetGetTransactionInfo) | **GET** /testnet/ntp1/transactioninfo/{txid} | Information On an NTP1 Transaction
[**testnetIssueToken**](TestnetNTP1Api.md#testnetIssueToken) | **POST** /testnet/ntp1/issue | Builds a transaction that issues a new NTP1 Token
[**testnetSendToken**](TestnetNTP1Api.md#testnetSendToken) | **POST** /testnet/ntp1/sendtoken | Builds a transaction that sends an NTP1 Token


# **testnetBroadcastTx**
> \NeblioAPI\Model\BroadcastTxResponse testnetBroadcastTx($broadcast_tx_request)

Broadcasts a signed raw transaction to the network

Broadcasts a signed raw transaction to the network. If successful returns the txid of the broadcast trasnaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\TestnetNTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$broadcast_tx_request = new \NeblioAPI\Model\BroadcastTxRequest(); // \NeblioAPI\Model\BroadcastTxRequest | Object representing a transaction to broadcast

try {
    $result = $apiInstance->testnetBroadcastTx($broadcast_tx_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestnetNTP1Api->testnetBroadcastTx: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **broadcast_tx_request** | [**\NeblioAPI\Model\BroadcastTxRequest**](../Model/BroadcastTxRequest.md)| Object representing a transaction to broadcast |

### Return type

[**\NeblioAPI\Model\BroadcastTxResponse**](../Model/BroadcastTxResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testnetBurnToken**
> \NeblioAPI\Model\BurnTokenResponse testnetBurnToken($burn_token_request)

Builds a transaction that burns an NTP1 Token

Builds an unsigned raw transaction that burns an NTP1 token on the Neblio blockchain.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\TestnetNTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$burn_token_request = new \NeblioAPI\Model\BurnTokenRequest(); // \NeblioAPI\Model\BurnTokenRequest | Object representing the token to be burned

try {
    $result = $apiInstance->testnetBurnToken($burn_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestnetNTP1Api->testnetBurnToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **burn_token_request** | [**\NeblioAPI\Model\BurnTokenRequest**](../Model/BurnTokenRequest.md)| Object representing the token to be burned |

### Return type

[**\NeblioAPI\Model\BurnTokenResponse**](../Model/BurnTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testnetGetAddressInfo**
> \NeblioAPI\Model\GetAddressInfoResponse testnetGetAddressInfo($address)

Information On a Neblio Address

Returns both NEBL and NTP1 token UTXOs held at the given address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\TestnetNTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Neblio Address to get information on.

try {
    $result = $apiInstance->testnetGetAddressInfo($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestnetNTP1Api->testnetGetAddressInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Neblio Address to get information on. |

### Return type

[**\NeblioAPI\Model\GetAddressInfoResponse**](../Model/GetAddressInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testnetGetTokenHolders**
> \NeblioAPI\Model\GetTokenHoldersResponse testnetGetTokenHolders($tokenid)

Get Addresses Holding a Token

Returns the the the addresses holding a token and how many tokens are held

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\TestnetNTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tokenid = 'tokenid_example'; // string | TokenId to request metadata for

try {
    $result = $apiInstance->testnetGetTokenHolders($tokenid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestnetNTP1Api->testnetGetTokenHolders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tokenid** | **string**| TokenId to request metadata for |

### Return type

[**\NeblioAPI\Model\GetTokenHoldersResponse**](../Model/GetTokenHoldersResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testnetGetTokenId**
> \NeblioAPI\Model\GetTokenIdResponse testnetGetTokenId($tokensymbol)

Returns the tokenId representing a token

Translates a token symbol to a tokenId if a token exists with that symbol on the network

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\TestnetNTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tokensymbol = 'tokensymbol_example'; // string | Token symbol

try {
    $result = $apiInstance->testnetGetTokenId($tokensymbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestnetNTP1Api->testnetGetTokenId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tokensymbol** | **string**| Token symbol |

### Return type

[**\NeblioAPI\Model\GetTokenIdResponse**](../Model/GetTokenIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testnetGetTokenMetadata**
> \NeblioAPI\Model\GetTokenMetadataResponse testnetGetTokenMetadata($tokenid, $verbosity)

Get Metadata of Token

Returns the metadata associated with a token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\TestnetNTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tokenid = 'tokenid_example'; // string | TokenId to request metadata for
$verbosity = 3.4; // float | 0 (Default) is fastest, 1 contains token stats, 2 contains token holding addresses

try {
    $result = $apiInstance->testnetGetTokenMetadata($tokenid, $verbosity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestnetNTP1Api->testnetGetTokenMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tokenid** | **string**| TokenId to request metadata for |
 **verbosity** | **float**| 0 (Default) is fastest, 1 contains token stats, 2 contains token holding addresses | [optional]

### Return type

[**\NeblioAPI\Model\GetTokenMetadataResponse**](../Model/GetTokenMetadataResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testnetGetTokenMetadataOfUtxo**
> \NeblioAPI\Model\GetTokenMetadataResponse testnetGetTokenMetadataOfUtxo($tokenid, $utxo, $verbosity)

Get UTXO Metadata of Token

Returns the metadata associated with a token for that specific utxo instead of the issuance transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\TestnetNTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tokenid = 'tokenid_example'; // string | TokenId to request metadata for
$utxo = 'utxo_example'; // string | Specific UTXO to request metadata for
$verbosity = 3.4; // float | 0 (Default) is fastest, 1 contains token stats, 2 contains token holding addresses

try {
    $result = $apiInstance->testnetGetTokenMetadataOfUtxo($tokenid, $utxo, $verbosity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestnetNTP1Api->testnetGetTokenMetadataOfUtxo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tokenid** | **string**| TokenId to request metadata for |
 **utxo** | **string**| Specific UTXO to request metadata for |
 **verbosity** | **float**| 0 (Default) is fastest, 1 contains token stats, 2 contains token holding addresses | [optional]

### Return type

[**\NeblioAPI\Model\GetTokenMetadataResponse**](../Model/GetTokenMetadataResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testnetGetTransactionInfo**
> \NeblioAPI\Model\GetTransactionInfoResponse testnetGetTransactionInfo($txid)

Information On an NTP1 Transaction

Returns detailed information regarding an NTP1 transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\TestnetNTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$txid = 'txid_example'; // string | Neblio txid to get information on.

try {
    $result = $apiInstance->testnetGetTransactionInfo($txid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestnetNTP1Api->testnetGetTransactionInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **txid** | **string**| Neblio txid to get information on. |

### Return type

[**\NeblioAPI\Model\GetTransactionInfoResponse**](../Model/GetTransactionInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testnetIssueToken**
> \NeblioAPI\Model\IssueTokenResponse testnetIssueToken($issue_token_request)

Builds a transaction that issues a new NTP1 Token

Builds an unsigned raw transaction that issues a new NTP1 token on the Neblio blockchain.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\TestnetNTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$issue_token_request = new \NeblioAPI\Model\IssueTokenRequest(); // \NeblioAPI\Model\IssueTokenRequest | Object representing the token to be created

try {
    $result = $apiInstance->testnetIssueToken($issue_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestnetNTP1Api->testnetIssueToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **issue_token_request** | [**\NeblioAPI\Model\IssueTokenRequest**](../Model/IssueTokenRequest.md)| Object representing the token to be created |

### Return type

[**\NeblioAPI\Model\IssueTokenResponse**](../Model/IssueTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testnetSendToken**
> \NeblioAPI\Model\SendTokenResponse testnetSendToken($send_token_request)

Builds a transaction that sends an NTP1 Token

Builds an unsigned raw transaction that sends an NTP1 token on the Neblio blockchain.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\TestnetNTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$send_token_request = new \NeblioAPI\Model\SendTokenRequest(); // \NeblioAPI\Model\SendTokenRequest | Object representing the token to be sent

try {
    $result = $apiInstance->testnetSendToken($send_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestnetNTP1Api->testnetSendToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **send_token_request** | [**\NeblioAPI\Model\SendTokenRequest**](../Model/SendTokenRequest.md)| Object representing the token to be sent |

### Return type

[**\NeblioAPI\Model\SendTokenResponse**](../Model/SendTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

