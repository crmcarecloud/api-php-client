# BookingTicket

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ticket_id** | **string** | The unique ID of the booking ticket. | [optional] 
**name** | **string** | Name of the booking ticket in language from request header. | 
**created_at** | **string** | Timestamp of the ticket creation. Accepts the format &#x60;YYYY-MM-DD HH:MM:SS&#x60; or ISO-8601 format (&#x60;YYYY-MM-DDTHH:MM:SS&#x60;). All times must be in the local timezone. | [optional] 
**valid_from** | **string** | Timestamp from which the ticket is valid. Accepts the format &#x60;YYYY-MM-DD HH:MM:SS&#x60; or ISO-8601 format (&#x60;YYYY-MM-DDTHH:MM:SS&#x60;). All times must be in the local timezone. | [optional] 
**valid_to** | **string** | Timestamp until which the ticket is valid. Accepts the format &#x60;YYYY-MM-DD HH:MM:SS&#x60; or ISO-8601 format (&#x60;YYYY-MM-DDTHH:MM:SS&#x60;). All times must be in the local timezone. | [optional] 
**state** | **int** | State of the booking ticket. *Possible values are: 0 - blocked / 1 - active* | [optional] 
**last_change** | **string** | Date and time of the last change. *(YYYY-MM-DD HH:MM:SS)* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

