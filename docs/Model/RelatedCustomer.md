# RelatedCustomer

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**related_customer_id** | **string** | The unique id of the related customer | 
**short_name** | **string** | Short name of the customer | [optional] 
**customer_relation_type_id** | **string** | The unique id of the customer relation type | 
**is_leading** | **bool** | Parameter says, if related customer is a leader in their relationship. *Example: Parent is a leader, child is a follower* | 
**valid_from** | **string** | Date and time when customer relation starts *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**valid_to** | **string** | Date and time when customer relation ends *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**last_change** | **string** | Date and time of the last change (YYYY-MM-DD HH:MM:SS) | [optional] 
**state** | **int** | State of the related customer *Possible values are: 0 - deleted / 1 - active / 2 - non active* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

