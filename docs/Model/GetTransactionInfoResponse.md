# GetTransactionInfoResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hex** | **string** | Transaction in raw hex | [optional] 
**txid** | **string** | TXID of transaction | [optional] 
**version** | **float** | Transaction version | [optional] 
**locktime** | **float** | Transaction locktime | [optional] 
**vin** | [**\NeblioAPI\Model\GetTransactionInfoResponseVin[]**](GetTransactionInfoResponseVin.md) | Array of transaction inputs | [optional] 
**vout** | [**\NeblioAPI\Model\GetTransactionInfoResponseVout[]**](GetTransactionInfoResponseVout.md) | Array of transaction outputs | [optional] 
**blocktime** | **float** | Block time of this transaction | [optional] 
**blockheight** | **float** | Block height of this transaction | [optional] 
**totalsent** | **float** | Total NEBL sent in this transaction in satoshis | [optional] 
**fee** | **float** | Total NEBL used as fee for this transcation in satoshis | [optional] 
**blockhash** | **string** | Hash of the block this transaction is in | [optional] 
**time** | **float** | Transaction time | [optional] 
**confirmations** | **float** | Number of transaction confirmations | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


