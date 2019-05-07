# NeblioAPI\NTP1Api

All URIs are relative to *https://ntp1node.nebl.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**broadcastTx**](NTP1Api.md#broadcastTx) | **POST** /ntp1/broadcast | Broadcasts a signed raw transaction to the network
[**burnToken**](NTP1Api.md#burnToken) | **POST** /ntp1/burntoken | Builds a transaction that burns an NTP1 Token
[**getAddressInfo**](NTP1Api.md#getAddressInfo) | **GET** /ntp1/addressinfo/{address} | Information On a Neblio Address
[**getTokenHolders**](NTP1Api.md#getTokenHolders) | **GET** /ntp1/stakeholders/{tokenid} | Get Addresses Holding a Token
[**getTokenId**](NTP1Api.md#getTokenId) | **GET** /ntp1/tokenid/{tokensymbol} | Returns the tokenId representing a token
[**getTokenMetadata**](NTP1Api.md#getTokenMetadata) | **GET** /ntp1/tokenmetadata/{tokenid} | Get Metadata of Token
[**getTokenMetadataOfUtxo**](NTP1Api.md#getTokenMetadataOfUtxo) | **GET** /ntp1/tokenmetadata/{tokenid}/{utxo} | Get UTXO Metadata of Token
[**getTransactionInfo**](NTP1Api.md#getTransactionInfo) | **GET** /ntp1/transactioninfo/{txid} | Information On an NTP1 Transaction
[**issueToken**](NTP1Api.md#issueToken) | **POST** /ntp1/issue | Builds a transaction that issues a new NTP1 Token
[**sendToken**](NTP1Api.md#sendToken) | **POST** /ntp1/sendtoken | Builds a transaction that sends an NTP1 Token


# **broadcastTx**
> \NeblioAPI\Model\BroadcastTxResponse broadcastTx($broadcast_tx_request)

Broadcasts a signed raw transaction to the network

Broadcasts a signed raw transaction to the network. If successful returns the txid of the broadcast trasnaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\NTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$broadcast_tx_request = new \NeblioAPI\Model\BroadcastTxRequest(); // \NeblioAPI\Model\BroadcastTxRequest | Object representing a transaction to broadcast

try {
    $result = $apiInstance->broadcastTx($broadcast_tx_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NTP1Api->broadcastTx: ', $e->getMessage(), PHP_EOL;
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

# **burnToken**
> \NeblioAPI\Model\BurnTokenResponse burnToken($burn_token_request)

Builds a transaction that burns an NTP1 Token

Builds an unsigned raw transaction that burns an NTP1 token on the Neblio blockchain.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\NTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$burn_token_request = new \NeblioAPI\Model\BurnTokenRequest(); // \NeblioAPI\Model\BurnTokenRequest | Object representing the token to be burned

try {
    $result = $apiInstance->burnToken($burn_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NTP1Api->burnToken: ', $e->getMessage(), PHP_EOL;
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

# **getAddressInfo**
> \NeblioAPI\Model\GetAddressInfoResponse getAddressInfo($address)

Information On a Neblio Address

Returns both NEBL and NTP1 token UTXOs held at the given address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\NTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Neblio Address to get information on.

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

[**\NeblioAPI\Model\GetAddressInfoResponse**](../Model/GetAddressInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTokenHolders**
> \NeblioAPI\Model\GetTokenHoldersResponse getTokenHolders($tokenid)

Get Addresses Holding a Token

Returns the the the addresses holding a token and how many tokens are held

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\NTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tokenid = 'tokenid_example'; // string | TokenId to request metadata for

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

[**\NeblioAPI\Model\GetTokenHoldersResponse**](../Model/GetTokenHoldersResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTokenId**
> \NeblioAPI\Model\GetTokenIdResponse getTokenId($tokensymbol)

Returns the tokenId representing a token

Translates a token symbol to a tokenId if a token exists with that symbol on the network

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\NTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tokensymbol = 'tokensymbol_example'; // string | Token symbol

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

[**\NeblioAPI\Model\GetTokenIdResponse**](../Model/GetTokenIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTokenMetadata**
> \NeblioAPI\Model\GetTokenMetadataResponse getTokenMetadata($tokenid)

Get Metadata of Token

Returns the metadata associated with a token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\NTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tokenid = 'tokenid_example'; // string | TokenId to request metadata for

try {
    $result = $apiInstance->getTokenMetadata($tokenid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NTP1Api->getTokenMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tokenid** | **string**| TokenId to request metadata for |

### Return type

[**\NeblioAPI\Model\GetTokenMetadataResponse**](../Model/GetTokenMetadataResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTokenMetadataOfUtxo**
> \NeblioAPI\Model\GetTokenMetadataResponse getTokenMetadataOfUtxo($tokenid, $utxo)

Get UTXO Metadata of Token

Returns the metadata associated with a token for that specific utxo instead of the issuance transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\NTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tokenid = 'tokenid_example'; // string | TokenId to request metadata for
$utxo = 'utxo_example'; // string | Specific UTXO to request metadata for

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

[**\NeblioAPI\Model\GetTokenMetadataResponse**](../Model/GetTokenMetadataResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionInfo**
> \NeblioAPI\Model\GetTransactionInfoResponse getTransactionInfo($txid)

Information On an NTP1 Transaction

Returns detailed information regarding an NTP1 transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\NTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$txid = 'txid_example'; // string | Neblio txid to get information on.

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

[**\NeblioAPI\Model\GetTransactionInfoResponse**](../Model/GetTransactionInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **issueToken**
> \NeblioAPI\Model\IssueTokenResponse issueToken($issue_token_request)

Builds a transaction that issues a new NTP1 Token

Builds an unsigned raw transaction that issues a new NTP1 token on the Neblio blockchain.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\NTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$issue_token_request = new \NeblioAPI\Model\IssueTokenRequest(); // \NeblioAPI\Model\IssueTokenRequest | Object representing the token to be created

try {
    $result = $apiInstance->issueToken($issue_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NTP1Api->issueToken: ', $e->getMessage(), PHP_EOL;
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

# **sendToken**
> \NeblioAPI\Model\SendTokenResponse sendToken($send_token_request)

Builds a transaction that sends an NTP1 Token

Builds an unsigned raw transaction that sends an NTP1 token on the Neblio blockchain.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\NTP1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$send_token_request = new \NeblioAPI\Model\SendTokenRequest(); // \NeblioAPI\Model\SendTokenRequest | Object representing the token to be sent

try {
    $result = $apiInstance->sendToken($send_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NTP1Api->sendToken: ', $e->getMessage(), PHP_EOL;
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

