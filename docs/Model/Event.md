# Event

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_id** | **string** | The unique ID of the event. | [optional] 
**event_type_id** | **string** | The unique ID of the event type. [GET /event-types](https://carecloud.readme.io/reference/geteventtypes) | 
**customer_id** | **string** | The unique ID of the customer. [GET /customers](https://carecloud.readme.io/reference/getcustomers) | 
**external_id** | **string** | The unique external ID of the event. It may be ID from other system. | 
**data** | [**OneOfEventData**](OneOfEventData.md) | Additional data of the event. Serialized data in JSON. | [optional] 
**created_at** | **string** | Timestamp of the event. Accepts the format &#x60;YYYY-MM-DD HH:MM:SS&#x60; or ISO-8601 format (&#x60;YYYY-MM-DDTHH:MM:SS&#x60;). All times must be in the local timezone. | [optional] 
**secondary_external_id** | **string** | Additional external ID of the event. Used when differentiation of external_id is needed. | [optional] 
**state** | **int** | State of the event. *Possible values are: 0 - deleted / 1 - active / 2 - non active* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

