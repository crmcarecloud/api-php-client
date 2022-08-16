# BookingItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**booking_item_id** | **string** | The unique id of the booking item | [optional] 
**customer_id** | **string** | The unique id of the customer | [optional] 
**time_slot_id** | **string** | The unique id of the booking time slot | 
**ticket_id** | **string** | The unique id of the booking ticket | [optional] 
**valid_from** | **string** | Date and time when time slot starts *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**valid_to** | **string** | Date and time when time slot ends *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**capacity_taken** | **int** | How much capacity is taken by the booking item. If not set, value is 1 | [optional] [default to 1]
**booking_item_status** | **int** | Current status of the booking item *Possible values: 0 - created and not used / 1 - used / 2 - canceled* | 
**additional_properties** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\PropertyRecord[]**](PropertyRecord.md) | List of additional property records | [optional] 
**created_at** | **string** | Date and time of the boking item *(YYYY-MM-DD HH:MM:SS)* | 
**state** | **int** | State of the booking item record *Possible values are: 0 - deleted / 1 - active / 2 - non active* | [optional] 
**last_change** | **string** | Date and time of the last change *(YYYY-MM-DD HH:MM:SS)* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

