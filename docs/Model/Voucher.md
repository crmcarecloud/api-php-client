# Voucher

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**voucher_id** | **string** | The unique ID of the voucher. | [optional] 
**customer_id** | **string** | The unique ID of the customer. | 
**store_id** | **string** | The unique ID of the store where voucher was applied. | [optional] 
**code** | **string** | Code of the voucher. | [optional] 
**value** | **float** | Value of the voucher when applied by the purchase. | [optional] 
**applied_date** | **string** | Voucher application date. *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**valid_from** | **string** | Date from the voucher is valid. *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**valid_to** | **string** | Date to the voucher is valid. *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**reward_group** | **string** | The unique ID of the reward group. | [optional] 
**note** | **string** | Voucher&#x27;s note. | [optional] 
**reward** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\Reward**](Reward.md) |  | [optional] 
**created_at** | **string** | Date of the voucher creation. *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**last_change** | **string** | Date and time of the last change. *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**state** | **int** | State of the voucher. *Possible values are: 0 - deleted / 1 - active / 2 - non active* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

