# StatusRecord

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status_record_id** | **string** | The unique ID of the status record. | [optional] 
**status_id** | **string** | The unique ID of the status. | 
**customer_id** | **string** | The unique ID of the customer. | 
**valid_from** | **string** | Date and time of the record valid from. *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**valid_to** | **string** | Date and time of the record valid to. *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**purchase_conditions** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\PurchaseConditions**](PurchaseConditions.md) |  | [optional] 
**last_change** | **string** | Date and time of the last change. *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**state** | **int** | State of the reward. *Possible values are: 0 - deleted / 1 - active / 2 - non active* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

