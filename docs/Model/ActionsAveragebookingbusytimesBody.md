# ActionsAveragebookingbusytimesBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**booking_date** | **string** | The date when you want to check how busy the bookings are | 
**time_period** | **string** | The period that the algorithm uses to calculate past busy times and return your data in that period. If you set the value as DAY, the algorithm will return the data for one day in an hour range. | 
**booking_ticket_id** | **string** | The unique ID of the booking ticket. If not set, the data will be returned for all available tickets. | [optional] 
**booking_property_id** | **string** | Booking ticket property ID from resource [booking-ticket-properties](https://carecloud.readme.io/reference/getbookingticketproperties). The parameter determines property, which is used to filter resources by their properties. The parameter must be used in combination with property_value otherwise is ignored in the request. | [optional] 
**booking_property_value** | **string** | Booking ticket property record value from [booking-ticket-properties](https://carecloud.readme.io/reference/getbookingticketproperties) in case of datatype with multiple values. Parameter filters resources depends of store property record value. The parameter must be used in combination with property_id otherwise is ignored in the request. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

