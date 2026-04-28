# StatusRecord

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status_record_id** | **string** | The unique ID of the status record. | [optional] 
**status_id** | **string** | The unique ID of the status. | 
**customer_id** | **string** | The unique ID of the customer. | 
**valid_from** | **string** | Timestamp from which the status record is valid. Format: &#x60;YYYY-MM-DD HH:MM:SS&#x60;. All times are in the local timezone. | [optional] 
**valid_to** | **string** | Timestamp until which the status record is valid. Format: &#x60;YYYY-MM-DD HH:MM:SS&#x60;. All times are in the local timezone. | [optional] 
**purchase_conditions** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\PurchaseConditions**](PurchaseConditions.md) |  | [optional] 
**last_change** | **string** | Timestamp of the last change. Format: &#x60;YYYY-MM-DD HH:MM:SS&#x60;. All times are in the local timezone. | [optional] 
**state** | **int** | State of the reward. *Possible values are: 0 - deleted / 1 - active / 2 - non active* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

