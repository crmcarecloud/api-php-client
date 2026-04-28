# ActionsTransfercreditsBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**original_customer_id** | **string** | The unique ID of the original credit holder. [GET /customers](https://carecloud.readme.io/reference/getcustomers) | 
**new_customer_id** | **string** | The unique ID of the new credit holder. [GET /customers](https://carecloud.readme.io/reference/getcustomers) | 
**amount** | **float** | Number of the transferred credits. | 
**credit_type_id** | **string** | The unique ID of the credit type for the transferred credits. [GET /credit-types](https://carecloud.readme.io/reference/getcredittypes) | 
**currency_id** | **string** | The unique ID of the currency. If not set, the default currency of the project is used. [GET /currencies](https://carecloud.readme.io/reference/getcurrencies) | [optional] 
**note** | **string** | Note for the credit transfer. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

