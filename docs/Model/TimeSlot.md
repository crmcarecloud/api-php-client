# TimeSlot

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**time_slot_id** | **string** | The unique id of the booking time slot | [optional] 
**ticket_id** | **string** | The unique id of the booking ticket | 
**valid_from** | **string** | Date and time when time slot starts *(YYYY-MM-DD HH:MM:SS)* | 
**valid_to** | **string** | Date and time when time slot ends *(YYYY-MM-DD HH:MM:SS)* | 
**total_capacity** | **int** | Total capacity of the time slot | 
**free_capacity** | **int** | Free capacity of the time slot | [optional] 
**created_at** | **string** | Date and time when ticket was created *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**state** | **int** | State of the booking ticket *Possible values are: 0 - blocked / 1 - active* | [optional] 
**last_change** | **string** | Date and time of the last change *(YYYY-MM-DD HH:MM:SS)* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

