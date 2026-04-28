# BookingItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**booking_item_id** | **string** | The unique ID of the booking item. | [optional] 
**customer_id** | **string** | The unique ID of the customer. [GET /customers](https://carecloud.readme.io/reference/getcustomers) | [optional] 
**time_slot_id** | **string** | The unique ID of the booking time slot. | 
**booking_ticket** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\BookingTicket**](BookingTicket.md) |  | [optional] 
**valid_from** | **string** | Date and time when time slot starts. *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**valid_to** | **string** | Date and time when time slot ends. *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**capacity_taken** | **int** | How much capacity is taken by the booking item. If not set, value is 1. | [optional] [default to 1]
**booking_item_status** | **string** | The current status of the booking item. If not set, CareCloud uses the default booking status. [GET /booking-statuses](https://carecloud.readme.io/reference/getbookingstatuses) | [optional] 
**additional_properties** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\PropertyRecord[]**](PropertyRecord.md) | List of additional property records. | [optional] 
**created_at** | **string** | Timestamp of the booking item. Accepts the format &#x60;YYYY-MM-DD HH:MM:SS&#x60; or ISO-8601 format (&#x60;YYYY-MM-DDTHH:MM:SS&#x60;). All times must be in the local timezone. | 
**state** | **int** | State of the booking item record. *Possible values are: 0 - deleted / 1 - active / 2 - non active* | [optional] 
**last_change** | **string** | Timestamp of the last change. Format: &#x60;YYYY-MM-DD HH:MM:SS&#x60;. All times are in the local timezone. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

