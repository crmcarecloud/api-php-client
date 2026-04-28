# Credit

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**credit_id** | **string** | The unique ID of the credit record. | [optional] 
**customer_id** | **string** | The unique ID of the customer. [GET /customers](https://carecloud.readme.io/reference/getcustomers) | 
**assigned_credits** | **float** | The number of earned credits in the record. | [optional] 
**available_credits** | **float** | The number of available credits from the record. | [optional] 
**credit_type_id** | **string** | The unique ID of the credit type. [GET /credit-types](https://carecloud.readme.io/reference/getcredittypes) | 
**partner_id** | **string** | The unique ID of the partner company. [GET /partners](https://carecloud.readme.io/reference/getpartners) | 
**valid_to** | **string** | Timestamp until which the credit record is valid. Accepts the format &#x60;YYYY-MM-DD HH:MM:SS&#x60; or ISO-8601 format (&#x60;YYYY-MM-DDTHH:MM:SS&#x60;). All times must be in the local timezone. | [optional] 
**currency_id** | **string** | The unique ID of the currency. [GET /currencies](https://carecloud.readme.io/reference/getcurrencies) | [optional] 
**state** | **int** | State of the credit record. *Possible values are: 0 - deleted / 1 - active / 2 - non active* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

