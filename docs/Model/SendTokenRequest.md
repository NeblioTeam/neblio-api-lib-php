# SendTokenRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fee** | **float** | Fee in satoshi to include in the issuance transaction min 10000 (0.0001 NEBL) | 
**from** | **string[]** | Array of addresses to send the token from | [optional] 
**sendutxo** | **string[]** | Array of UTXOs to send the token from | [optional] 
**to** | [**\NeblioAPI\Model\SendTokenRequestTo[]**](SendTokenRequestTo.md) |  | 
**flags** | [**\NeblioAPI\Model\IssueTokenRequestFlags**](IssueTokenRequestFlags.md) |  | [optional] 
**metadata** | [**\NeblioAPI\Model\IssueTokenRequestMetadata**](IssueTokenRequestMetadata.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


