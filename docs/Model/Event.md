# Event

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_id** | **string** | The unique id of the event | [optional] 
**event_type_id** | **string** | The unique id of the event type | 
**customer_id** | **string** | The unique id for the card holder. | 
**external_id** | **string** | The unique external id of the event. It may be id from other system | 
**data** | [**OneOfEventData**](OneOfEventData.md) | Additional data of the event. Serialized data in JSON | [optional] 
**created_at** | **string** | Date and time of the event *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**secondary_external_id** | **string** | Additional external id of the event. It&#x27;s used in case, when differentiation of external_id needed | [optional] 
**state** | **int** | State of the event type *Possible values are: 0 - deleted / 1 - active / 2 - non active* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

