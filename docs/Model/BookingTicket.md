# BookingTicket

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ticket_id** | **string** | The unique id of the booking ticket | [optional] 
**name** | **string** | Name of the booking ticket in language from request header | 
**created_at** | **string** | Date and time when ticket was created *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**valid_from** | **string** | Date and time from when is ticket valid already. *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**valid_to** | **string** | Date and time to when is ticket still valid. *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**state** | **int** | State of the booking ticket *Possible values are: 0 - blocked / 1 - active* | [optional] 
**last_change** | **string** | Date and time of the last change *(YYYY-MM-DD HH:MM:SS)* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

