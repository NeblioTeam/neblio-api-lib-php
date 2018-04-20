# Swagger\Client\TestnetNTP1Api

All URIs are relative to *https://ntp1node.nebl.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**testnetBroadcastTx**](TestnetNTP1Api.md#testnetBroadcastTx) | **POST** /testnet/ntp1/broadcast | Broadcasts a signed raw transaction to the network
[**testnetBurnToken**](TestnetNTP1Api.md#testnetBurnToken) | **POST** /testnet/ntp1/burntoken | Builds a transaction that burns an NTP1 Token
[**testnetGetAddressInfo**](TestnetNTP1Api.md#testnetGetAddressInfo) | **GET** /testnet/ntp1/addressinfo/{address} | Information On a Neblio Address
[**testnetGetTokenHolders**](TestnetNTP1Api.md#testnetGetTokenHolders) | **GET** /testnet/ntp1/stakeholders/{tokenid} | Get Addresses Holding a Token
[**testnetGetTokenId**](TestnetNTP1Api.md#testnetGetTokenId) | **GET** /testnet/ntp1/tokenid/{tokensymbol} | Returns the tokenId representing a token
[**testnetGetTokenMetadataOfIssuance**](TestnetNTP1Api.md#testnetGetTokenMetadataOfIssuance) | **GET** /testnet/ntp1/tokenmetadata/{tokenid} | Get Issuance Metadata of Token
[**testnetGetTokenMetadataOfUtxo**](TestnetNTP1Api.md#testnetGetTokenMetadataOfUtxo) | **GET** /testnet/ntp1/tokenmetadata/{tokenid}/{utxo} | Get UTXO Metadata of Token
[**testnetGetTransactionInfo**](TestnetNTP1Api.md#testnetGetTransactionInfo) | **GET** /testnet/ntp1/transactioninfo/{txid} | Information On an NTP1 Transaction
[**testnetIssueToken**](TestnetNTP1Api.md#testnetIssueToken) | **POST** /testnet/ntp1/issue | Builds a transaction that issues a new NTP1 Token
[**testnetSendToken**](TestnetNTP1Api.md#testnetSendToken) | **POST** /testnet/ntp1/sendtoken | Builds a transaction that sends an NTP1 Token


# **testnetBroadcastTx**
> \Swagger\Client\Model\BroadcastTxResponse testnetBroadcastTx($body)

Broadcasts a signed raw transaction to the network

Broadcasts a signed raw transaction to the network. If successful returns the txid of the broadcast trasnaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TestnetNTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\BroadcastTxRequest(); // \Swagger\Client\Model\BroadcastTxRequest | Object representing a transaction to broadcast

try {
    $result = $apiInstance->testnetBroadcastTx($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestnetNTP1Api->testnetBroadcastTx: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BroadcastTxRequest**](../Model/BroadcastTxRequest.md)| Object representing a transaction to broadcast |

### Return type

[**\Swagger\Client\Model\BroadcastTxResponse**](../Model/BroadcastTxResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testnetBurnToken**
> \Swagger\Client\Model\BurnTokenResponse testnetBurnToken($body)

Builds a transaction that burns an NTP1 Token

Builds an unsigned raw transaction that burns an NTP1 token on the Neblio blockchain.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TestnetNTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\BurnTokenRequest(); // \Swagger\Client\Model\BurnTokenRequest | Object representing the token to be burned

try {
    $result = $apiInstance->testnetBurnToken($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestnetNTP1Api->testnetBurnToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BurnTokenRequest**](../Model/BurnTokenRequest.md)| Object representing the token to be burned |

### Return type

[**\Swagger\Client\Model\BurnTokenResponse**](../Model/BurnTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testnetGetAddressInfo**
> \Swagger\Client\Model\GetAddressInfoResponse testnetGetAddressInfo($address)

Information On a Neblio Address

Returns both NEBL and NTP1 token UTXOs held at the given address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TestnetNTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = "address_example"; // string | Neblio Address to get information on.

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

[**\Swagger\Client\Model\GetAddressInfoResponse**](../Model/GetAddressInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testnetGetTokenHolders**
> \Swagger\Client\Model\GetTokenHoldersResponse testnetGetTokenHolders($tokenid)

Get Addresses Holding a Token

Returns the the the addresses holding a token and how many tokens are held

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TestnetNTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tokenid = "tokenid_example"; // string | TokenId to request metadata for

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

[**\Swagger\Client\Model\GetTokenHoldersResponse**](../Model/GetTokenHoldersResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testnetGetTokenId**
> \Swagger\Client\Model\GetTokenIdResponse testnetGetTokenId($tokensymbol)

Returns the tokenId representing a token

Translates a token symbol to a tokenId if a token exists with that symbol on the network

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TestnetNTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tokensymbol = "tokensymbol_example"; // string | Token symbol

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

[**\Swagger\Client\Model\GetTokenIdResponse**](../Model/GetTokenIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testnetGetTokenMetadataOfIssuance**
> \Swagger\Client\Model\GetTokenMetadataResponse testnetGetTokenMetadataOfIssuance($tokenid)

Get Issuance Metadata of Token

Returns the metadata associated with a token at time of issuance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TestnetNTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tokenid = "tokenid_example"; // string | TokenId to request metadata for

try {
    $result = $apiInstance->testnetGetTokenMetadataOfIssuance($tokenid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestnetNTP1Api->testnetGetTokenMetadataOfIssuance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tokenid** | **string**| TokenId to request metadata for |

### Return type

[**\Swagger\Client\Model\GetTokenMetadataResponse**](../Model/GetTokenMetadataResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testnetGetTokenMetadataOfUtxo**
> \Swagger\Client\Model\GetTokenMetadataResponse testnetGetTokenMetadataOfUtxo($tokenid, $utxo)

Get UTXO Metadata of Token

Returns the metadata associated with a token for that specific utxo instead of the issuance transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TestnetNTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tokenid = "tokenid_example"; // string | TokenId to request metadata for
$utxo = "utxo_example"; // string | Specific UTXO to request metadata for

try {
    $result = $apiInstance->testnetGetTokenMetadataOfUtxo($tokenid, $utxo);
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

### Return type

[**\Swagger\Client\Model\GetTokenMetadataResponse**](../Model/GetTokenMetadataResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testnetGetTransactionInfo**
> \Swagger\Client\Model\GetTransactionInfoResponse testnetGetTransactionInfo($txid)

Information On an NTP1 Transaction

Returns detailed information regarding an NTP1 transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TestnetNTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$txid = "txid_example"; // string | Neblio txid to get information on.

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

[**\Swagger\Client\Model\GetTransactionInfoResponse**](../Model/GetTransactionInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testnetIssueToken**
> \Swagger\Client\Model\IssueTokenResponse testnetIssueToken($body)

Builds a transaction that issues a new NTP1 Token

Builds an unsigned raw transaction that issues a new NTP1 token on the Neblio blockchain.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TestnetNTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\IssueTokenRequest(); // \Swagger\Client\Model\IssueTokenRequest | Object representing the token to be created

try {
    $result = $apiInstance->testnetIssueToken($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestnetNTP1Api->testnetIssueToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\IssueTokenRequest**](../Model/IssueTokenRequest.md)| Object representing the token to be created |

### Return type

[**\Swagger\Client\Model\IssueTokenResponse**](../Model/IssueTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testnetSendToken**
> \Swagger\Client\Model\SendTokenResponse testnetSendToken($body)

Builds a transaction that sends an NTP1 Token

Builds an unsigned raw transaction that sends an NTP1 token on the Neblio blockchain.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TestnetNTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SendTokenRequest(); // \Swagger\Client\Model\SendTokenRequest | Object representing the token to be sent

try {
    $result = $apiInstance->testnetSendToken($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestnetNTP1Api->testnetSendToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SendTokenRequest**](../Model/SendTokenRequest.md)| Object representing the token to be sent |

### Return type

[**\Swagger\Client\Model\SendTokenResponse**](../Model/SendTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

