# Booking

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**booking_id** | **string** | The unique ID of the booking. | [optional] 
**customer_id** | **string** | The unique ID of the customer that created the booking. [GET /customers](https://carecloud.readme.io/reference/getcustomers) | [optional] 
**booking_items** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\BookingItem[]**](BookingItem.md) | List of the booking items. Included in response of GET API call only if query parameter &#x60;add_booking_items&#x60; is &#x60;true&#x60;. | 
**booking_status** | **string** | The current status of the booking. If not set, CareCloud uses the default booking status. [GET /booking-statuses](https://carecloud.readme.io/reference/getbookingstatuses) | [optional] 
**utm** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\UTM**](UTM.md) |  | [optional] 
**data** | [**OneOfBookingData**](OneOfBookingData.md) | Additional data of the booking. Serialized data in JSON. | [optional] 
**created_at** | **string** | Timestamp of the booking. Accepts the format &#x60;YYYY-MM-DD HH:MM:SS&#x60; or ISO-8601 format (&#x60;YYYY-MM-DDTHH:MM:SS&#x60;). All times must be in the local timezone. | 
**last_change** | **string** | Date and time of the last change. *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**state** | **int** | State of the booking record. *Possible values are: 0 - deleted / 1 - active / 2 - non active* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

