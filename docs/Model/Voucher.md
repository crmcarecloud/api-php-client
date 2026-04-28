# Voucher

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**voucher_id** | **string** | The unique ID of the voucher. | [optional] 
**customer_id** | **string** | The unique ID of the customer. [GET /customers](https://carecloud.readme.io/reference/getcustomers) | 
**store_id** | **string** | The unique ID of the store where the voucher was applied. [GET /stores](https://carecloud.readme.io/reference/getstores) | [optional] 
**code** | **string** | Code of the voucher. | [optional] 
**value** | **float** | Value of the voucher when applied by the purchase. | [optional] 
**applied_date** | **string** | Timestamp of the voucher application. Accepts the format &#x60;YYYY-MM-DD HH:MM:SS&#x60; or ISO-8601 format (&#x60;YYYY-MM-DDTHH:MM:SS&#x60;). All times must be in the local timezone. | [optional] 
**valid_from** | **string** | Timestamp from which the voucher is valid. Accepts the format &#x60;YYYY-MM-DD HH:MM:SS&#x60; or ISO-8601 format (&#x60;YYYY-MM-DDTHH:MM:SS&#x60;). All times must be in the local timezone. | [optional] 
**valid_to** | **string** | Timestamp until which the voucher is valid. Accepts the format &#x60;YYYY-MM-DD HH:MM:SS&#x60; or ISO-8601 format (&#x60;YYYY-MM-DDTHH:MM:SS&#x60;). All times must be in the local timezone. | [optional] 
**reward_group** | **string** | The unique ID of the reward group. | [optional] 
**note** | **string** | Voucher&#x27;s note. | [optional] 
**reward** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\Reward**](Reward.md) |  | [optional] 
**created_at** | **string** | Timestamp of the voucher creation. Format: &#x60;YYYY-MM-DD HH:MM:SS&#x60;. All times are in the local timezone. | [optional] 
**last_change** | **string** | Timestamp of the last change. Format: &#x60;YYYY-MM-DD HH:MM:SS&#x60;. All times are in the local timezone. | [optional] 
**state** | **int** | State of the voucher. *Possible values are: 0 - deleted / 1 - active / 2 - non active* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

