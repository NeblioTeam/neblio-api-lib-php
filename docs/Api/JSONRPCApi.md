# NeblioAPI\JSONRPCApi

All URIs are relative to *https://ntp1node.nebl.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**jsonRpc**](JSONRPCApi.md#jsonRpc) | **POST** / | Send a JSON-RPC call to a localhost neblio-Qt or nebliod node


# **jsonRpc**
> \NeblioAPI\Model\RpcResponse jsonRpc($rpc_request)

Send a JSON-RPC call to a localhost neblio-Qt or nebliod node

Call any Neblio RPC command from the Neblio API libraries. Useful for signing transactions with a local node and other functions. Will not work from a browser due to CORS restrictions. Requires a node to be running locally at 127.0.0.1

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: rpcAuth
$config = NeblioAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new NeblioAPI\Api\JSONRPCApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rpc_request = new \NeblioAPI\Model\RpcRequest(); // \NeblioAPI\Model\RpcRequest | 

try {
    $result = $apiInstance->jsonRpc($rpc_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JSONRPCApi->jsonRpc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rpc_request** | [**\NeblioAPI\Model\RpcRequest**](../Model/RpcRequest.md)|  |

### Return type

[**\NeblioAPI\Model\RpcResponse**](../Model/RpcResponse.md)

### Authorization

[rpcAuth](../../README.md#rpcAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

