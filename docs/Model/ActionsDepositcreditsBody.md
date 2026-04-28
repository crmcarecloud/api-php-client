# ActionsDepositcreditsBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | The number of deposit credits. | 
**customer_id** | **string** | The unique ID of the customer. [GET /customers](https://carecloud.readme.io/reference/getcustomers) | 
**partner_id** | **string** | The unique ID of the partner. [GET /partners](https://carecloud.readme.io/reference/getpartners) | 
**credit_type_id** | **string** | The unique ID of the credit type. If the parameter is not set, a default credit type is set. [GET /credit-types](https://carecloud.readme.io/reference/getcredittypes) | [optional] 
**currency_id** | **string** | The unique ID of the currency. If not set, the default currency of the project is used. [GET /currencies](https://carecloud.readme.io/reference/getcurrencies) | [optional] 
**note** | **string** | Note for the new credit deposit. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

