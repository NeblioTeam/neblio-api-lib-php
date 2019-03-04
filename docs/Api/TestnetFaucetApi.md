# NeblioAPI\TestnetFaucetApi

All URIs are relative to *https://ntp1node.nebl.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**testnetGetFaucet**](TestnetFaucetApi.md#testnetGetFaucet) | **GET** /testnet/faucet | Withdraws testnet NEBL to the specified address


# **testnetGetFaucet**
> \NeblioAPI\Model\GetFaucetResponse testnetGetFaucet($address, $amount)

Withdraws testnet NEBL to the specified address

Withdraw testnet NEBL to your Neblio Testnet address. By default amount is 1500000000 or 15 NEBL and has a max of 50 NEBL. Only 2 withdrawals allowed per 24 hour period.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new NeblioAPI\Api\TestnetFaucetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Your Neblio Testnet Address
$amount = 3.4; // float | Amount of NEBL to withdrawal in satoshis

try {
    $result = $apiInstance->testnetGetFaucet($address, $amount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestnetFaucetApi->testnetGetFaucet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Your Neblio Testnet Address |
 **amount** | **float**| Amount of NEBL to withdrawal in satoshis | [optional]

### Return type

[**\NeblioAPI\Model\GetFaucetResponse**](../Model/GetFaucetResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

