# Voucher

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**voucher_id** | **string** | The unique id of the voucher | 
**customer_id** | **string** | The unique id of the customer. | 
**store_id** | **string** | The unique id of the store where voucher was applied | 
**code** | **string** | Code of the voucher | 
**value** | **float** | Value of the voucher when applied by the purchase | 
**applied_date** | **string** | Voucher application date *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**valid_from** | **string** | Date from the voucher is valid *(YYYY-MM-DD HH:MM:SS)* | 
**valid_to** | **string** | Date to the voucher is valid *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**reward_group** | **string** | The unique id of the reward group | 
**reward** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\Reward**](Reward.md) |  | 
**last_change** | **string** | Date and time of the last change *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**state** | **int** | State of the voucher *Possible values are: 0 - deleted / 1 - active / 2 - non active* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

