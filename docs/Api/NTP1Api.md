# Swagger\Client\NTP1Api

All URIs are relative to *https://ntp1node.nebl.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**broadcastTx**](NTP1Api.md#broadcastTx) | **POST** /ntp1/broadcast | Broadcasts a signed raw transaction to the network
[**burnToken**](NTP1Api.md#burnToken) | **POST** /ntp1/burntoken | Builds a transaction that burns an NTP1 Token
[**getAddressInfo**](NTP1Api.md#getAddressInfo) | **GET** /ntp1/addressinfo/{address} | Information On a Neblio Address
[**getTokenHolders**](NTP1Api.md#getTokenHolders) | **GET** /ntp1/stakeholders/{tokenid} | Get Addresses Holding a Token
[**getTokenId**](NTP1Api.md#getTokenId) | **GET** /ntp1/tokenid/{tokensymbol} | Returns the tokenId representing a token
[**getTokenMetadataOfIssuance**](NTP1Api.md#getTokenMetadataOfIssuance) | **GET** /ntp1/tokenmetadata/{tokenid} | Get Issuance Metadata of Token
[**getTokenMetadataOfUtxo**](NTP1Api.md#getTokenMetadataOfUtxo) | **GET** /ntp1/tokenmetadata/{tokenid}/{utxo} | Get UTXO Metadata of Token
[**getTransactionInfo**](NTP1Api.md#getTransactionInfo) | **GET** /ntp1/transactioninfo/{txid} | Information On an NTP1 Transaction
[**issueToken**](NTP1Api.md#issueToken) | **POST** /ntp1/issue | Builds a transaction that issues a new NTP1 Token
[**sendToken**](NTP1Api.md#sendToken) | **POST** /ntp1/sendtoken | Builds a transaction that sends an NTP1 Token


# **broadcastTx**
> \Swagger\Client\Model\BroadcastTxResponse broadcastTx($body)

Broadcasts a signed raw transaction to the network

Broadcasts a signed raw transaction to the network. If successful returns the txid of the broadcast trasnaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\BroadcastTxRequest(); // \Swagger\Client\Model\BroadcastTxRequest | Object representing a transaction to broadcast

try {
    $result = $apiInstance->broadcastTx($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NTP1Api->broadcastTx: ', $e->getMessage(), PHP_EOL;
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

# **burnToken**
> \Swagger\Client\Model\BurnTokenResponse burnToken($body)

Builds a transaction that burns an NTP1 Token

Builds an unsigned raw transaction that burns an NTP1 token on the Neblio blockchain.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\BurnTokenRequest(); // \Swagger\Client\Model\BurnTokenRequest | Object representing the token to be burned

try {
    $result = $apiInstance->burnToken($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NTP1Api->burnToken: ', $e->getMessage(), PHP_EOL;
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

# **getAddressInfo**
> \Swagger\Client\Model\GetAddressInfoResponse getAddressInfo($address)

Information On a Neblio Address

Returns both NEBL and NTP1 token UTXOs held at the given address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = "address_example"; // string | Neblio Address to get information on.

try {
    $result = $apiInstance->getAddressInfo($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NTP1Api->getAddressInfo: ', $e->getMessage(), PHP_EOL;
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

# **getTokenHolders**
> \Swagger\Client\Model\GetTokenHoldersResponse getTokenHolders($tokenid)

Get Addresses Holding a Token

Returns the the the addresses holding a token and how many tokens are held

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tokenid = "tokenid_example"; // string | TokenId to request metadata for

try {
    $result = $apiInstance->getTokenHolders($tokenid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NTP1Api->getTokenHolders: ', $e->getMessage(), PHP_EOL;
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

# **getTokenId**
> \Swagger\Client\Model\GetTokenIdResponse getTokenId($tokensymbol)

Returns the tokenId representing a token

Translates a token symbol to a tokenId if a token exists with that symbol on the network

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tokensymbol = "tokensymbol_example"; // string | Token symbol

try {
    $result = $apiInstance->getTokenId($tokensymbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NTP1Api->getTokenId: ', $e->getMessage(), PHP_EOL;
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

# **getTokenMetadataOfIssuance**
> \Swagger\Client\Model\GetTokenMetadataResponse getTokenMetadataOfIssuance($tokenid)

Get Issuance Metadata of Token

Returns the metadata associated with a token at time of issuance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tokenid = "tokenid_example"; // string | TokenId to request metadata for

try {
    $result = $apiInstance->getTokenMetadataOfIssuance($tokenid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NTP1Api->getTokenMetadataOfIssuance: ', $e->getMessage(), PHP_EOL;
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

# **getTokenMetadataOfUtxo**
> \Swagger\Client\Model\GetTokenMetadataResponse getTokenMetadataOfUtxo($tokenid, $utxo)

Get UTXO Metadata of Token

Returns the metadata associated with a token for that specific utxo instead of the issuance transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tokenid = "tokenid_example"; // string | TokenId to request metadata for
$utxo = "utxo_example"; // string | Specific UTXO to request metadata for

try {
    $result = $apiInstance->getTokenMetadataOfUtxo($tokenid, $utxo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NTP1Api->getTokenMetadataOfUtxo: ', $e->getMessage(), PHP_EOL;
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

# **getTransactionInfo**
> \Swagger\Client\Model\GetTransactionInfoResponse getTransactionInfo($txid)

Information On an NTP1 Transaction

Returns detailed information regarding an NTP1 transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$txid = "txid_example"; // string | Neblio txid to get information on.

try {
    $result = $apiInstance->getTransactionInfo($txid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NTP1Api->getTransactionInfo: ', $e->getMessage(), PHP_EOL;
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

# **issueToken**
> \Swagger\Client\Model\IssueTokenResponse issueToken($body)

Builds a transaction that issues a new NTP1 Token

Builds an unsigned raw transaction that issues a new NTP1 token on the Neblio blockchain.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\IssueTokenRequest(); // \Swagger\Client\Model\IssueTokenRequest | Object representing the token to be created

try {
    $result = $apiInstance->issueToken($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NTP1Api->issueToken: ', $e->getMessage(), PHP_EOL;
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

# **sendToken**
> \Swagger\Client\Model\SendTokenResponse sendToken($body)

Builds a transaction that sends an NTP1 Token

Builds an unsigned raw transaction that sends an NTP1 token on the Neblio blockchain.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SendTokenRequest(); // \Swagger\Client\Model\SendTokenRequest | Object representing the token to be sent

try {
    $result = $apiInstance->sendToken($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NTP1Api->sendToken: ', $e->getMessage(), PHP_EOL;
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

