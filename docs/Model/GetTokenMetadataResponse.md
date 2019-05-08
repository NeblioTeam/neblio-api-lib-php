# GetTokenMetadataResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**token_id** | **string** | ID of the token | [optional] 
**some_utxo** | **string** | Example UTXO containing this token. | [optional] 
**divisibility** | **float** | Decimal places the token is divisible to | [optional] 
**lock_status** | **bool** | Whether issuance of more tokens is locked | [optional] 
**aggregation_policy** | **string** | Whether the tokens are aggregatable | [optional] 
**total_supply** | **float** | Total number of tokens in supply | [optional] 
**num_of_holders** | **float** | Total number of addresses this token is held at | [optional] 
**num_of_transfers** | **float** | Total number of transactions of this token | [optional] 
**num_of_issuance** | **float** | Total number of times this token has been issued | [optional] 
**num_of_burns** | **float** | Number of times tokens have been burned | [optional] 
**first_block** | **float** | Block number token was issued in | [optional] 
**issuance_txid** | **string** | TXID the token was issued with | [optional] 
**issue_address** | **string** | Address that issued the tokens | [optional] 
**metadata_of_issuence** | [**\NeblioAPI\Model\GetTokenMetadataResponseMetadataOfIssuence**](GetTokenMetadataResponseMetadataOfIssuence.md) |  | [optional] 
**metadata_of_utxo** | [**\NeblioAPI\Model\GetTokenMetadataResponseMetadataOfUtxo**](GetTokenMetadataResponseMetadataOfUtxo.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


