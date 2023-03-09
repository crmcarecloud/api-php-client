# Booking

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**booking_id** | **string** | The unique id of the booking | [optional] 
**customer_id** | **string** | The unique id of the customer that created the booking | [optional] 
**booking_items** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\BookingItem[]**](BookingItem.md) | List of the booking items. Included in response of GET API call only if query parameter &#x60;add_booking_items&#x60; is &#x60;true&#x60; | 
**booking_status** | **string** | Current status of the booking from resource [booking-statuses](#tag/Booking-statuses). If not set, CareCloud uses default booking status. | [optional] 
**created_at** | **string** | Date and time of the booking *(YYYY-MM-DD HH:MM:SS)* | 
**last_change** | **string** | Date and time of the last change *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**state** | **int** | State of the booking record *Possible values are: 0 - deleted / 1 - active / 2 - non active* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

