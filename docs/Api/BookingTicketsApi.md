# CrmCareCloud\Webservice\RestApi\Client\BookingTicketsApi

All URIs are relative to *https://&lt;projectURL&gt;/webservice/rest-api/enterprise-interface/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBookingTicket**](BookingTicketsApi.md#getbookingticket) | **GET** /booking-tickets/{booking_ticket_id} | Get a booking ticket
[**getBookingTickets**](BookingTicketsApi.md#getbookingtickets) | **GET** /booking-tickets | Get all booking tickets
[**getSubBookingTicketsTimeSlots**](BookingTicketsApi.md#getsubbookingticketstimeslots) | **GET** /booking-tickets/{booking_ticket_id}/time-slots | Get a collection time slots depends on booking ticket

# **getBookingTicket**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2005 getBookingTicket($booking_ticket_id, $accept_language)

Get a booking ticket

Get information about a specific booking ticket.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\BookingTicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$booking_ticket_id = "booking_ticket_id_example"; // string | The unique ID of the booking ticket.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->getBookingTicket($booking_ticket_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingTicketsApi->getBookingTicket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_ticket_id** | **string**| The unique ID of the booking ticket. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBookingTickets**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2004 getBookingTickets($accept_language, $count, $offset, $sort_field, $sort_direction, $customer_id, $valid_from, $valid_to, $valid_only, $booking_ticket_property_id, $booking_ticket_property_value)

Get all booking tickets

Get information about all booking tickets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\BookingTicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$valid_from = "valid_from_example"; // string | Date and time from when is record already valid. *(YYYY-MM-DD HH:MM:SS)*
$valid_to = "valid_to_example"; // string | Date and time to when is record still valid. *(YYYY-MM-DD HH:MM:SS)*
$valid_only = true; // bool | Time validity of the resource records. *Possible values are: true - returns only records valid in current moment / false - returns all records of the resource without time validation*
$booking_ticket_property_id = "booking_ticket_property_id_example"; // string | Booking ticket property ID from resource [booking-ticket-properties](#tag/Booking-ticket-properties). The parameter determines property, which is used to filter resources by their properties. The parameter must be used in combination with property_value otherwise is ignored in the request.
$booking_ticket_property_value = "booking_ticket_property_value_example"; // string | Booking ticket property record value from [booking-ticket-properties](#tag/Booking-ticket-properties) in case of datatype with multiple values. Parameter filters resources depends of store property record value. The parameter must be used in combination with property_id otherwise is ignored in the request.

try {
    $result = $apiInstance->getBookingTickets($accept_language, $count, $offset, $sort_field, $sort_direction, $customer_id, $valid_from, $valid_to, $valid_only, $booking_ticket_property_id, $booking_ticket_property_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingTicketsApi->getBookingTickets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **customer_id** | **string**| The unique ID of the customer. | [optional]
 **valid_from** | **string**| Date and time from when is record already valid. *(YYYY-MM-DD HH:MM:SS)* | [optional]
 **valid_to** | **string**| Date and time to when is record still valid. *(YYYY-MM-DD HH:MM:SS)* | [optional]
 **valid_only** | **bool**| Time validity of the resource records. *Possible values are: true - returns only records valid in current moment / false - returns all records of the resource without time validation* | [optional]
 **booking_ticket_property_id** | **string**| Booking ticket property ID from resource [booking-ticket-properties](#tag/Booking-ticket-properties). The parameter determines property, which is used to filter resources by their properties. The parameter must be used in combination with property_value otherwise is ignored in the request. | [optional]
 **booking_ticket_property_value** | **string**| Booking ticket property record value from [booking-ticket-properties](#tag/Booking-ticket-properties) in case of datatype with multiple values. Parameter filters resources depends of store property record value. The parameter must be used in combination with property_id otherwise is ignored in the request. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubBookingTicketsTimeSlots**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2006 getSubBookingTicketsTimeSlots($booking_ticket_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $free_only, $time_from, $time_to, $booking_ticket_property_id, $booking_ticket_property_value)

Get a collection time slots depends on booking ticket

Get information about all time slots depends on booking ticket.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\BookingTicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$booking_ticket_id = "booking_ticket_id_example"; // string | The unique ID of the booking ticket.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$free_only = true; // bool | Parameter defines what kind of time slots is going to be return depends on the capacity. *Possible values: true - returns all time slots with free capacity. / false - returns all occupied time slots. / no value - all time slots are returned (filter is not applied)*
$time_from = "time_from_example"; // string | Filter results on the start of the time interval. *(YYYY-MM-DD HH:MM:SS)*
$time_to = "time_to_example"; // string | Filter results on the end of the time interval. *(YYYY-MM-DD HH:MM:SS)*
$booking_ticket_property_id = "booking_ticket_property_id_example"; // string | Booking ticket property ID from resource [booking-ticket-properties](#tag/Booking-ticket-properties). The parameter determines property, which is used to filter resources by their properties. The parameter must be used in combination with property_value otherwise is ignored in the request.
$booking_ticket_property_value = "booking_ticket_property_value_example"; // string | Booking ticket property record value from [booking-ticket-properties](#tag/Booking-ticket-properties) in case of datatype with multiple values. Parameter filters resources depends of store property record value. The parameter must be used in combination with property_id otherwise is ignored in the request.

try {
    $result = $apiInstance->getSubBookingTicketsTimeSlots($booking_ticket_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $free_only, $time_from, $time_to, $booking_ticket_property_id, $booking_ticket_property_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingTicketsApi->getSubBookingTicketsTimeSlots: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_ticket_id** | **string**| The unique ID of the booking ticket. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **free_only** | **bool**| Parameter defines what kind of time slots is going to be return depends on the capacity. *Possible values: true - returns all time slots with free capacity. / false - returns all occupied time slots. / no value - all time slots are returned (filter is not applied)* | [optional]
 **time_from** | **string**| Filter results on the start of the time interval. *(YYYY-MM-DD HH:MM:SS)* | [optional]
 **time_to** | **string**| Filter results on the end of the time interval. *(YYYY-MM-DD HH:MM:SS)* | [optional]
 **booking_ticket_property_id** | **string**| Booking ticket property ID from resource [booking-ticket-properties](#tag/Booking-ticket-properties). The parameter determines property, which is used to filter resources by their properties. The parameter must be used in combination with property_value otherwise is ignored in the request. | [optional]
 **booking_ticket_property_value** | **string**| Booking ticket property record value from [booking-ticket-properties](#tag/Booking-ticket-properties) in case of datatype with multiple values. Parameter filters resources depends of store property record value. The parameter must be used in combination with property_id otherwise is ignored in the request. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

