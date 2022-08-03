# CrmCareCloud\Webservice\RestApi\Client\BookingsApi

All URIs are relative to *https://&lt;projectURL&gt;/webservice/rest-api/enterprise-interface/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBooking**](BookingsApi.md#getbooking) | **GET** /bookings/{booking_id}} | Get a booking
[**getBookings**](BookingsApi.md#getbookings) | **GET** /bookings | Get all bookings
[**postBooking**](BookingsApi.md#postbooking) | **POST** /bookings | Create a new booking
[**putBooking**](BookingsApi.md#putbooking) | **PUT** /bookings/{booking_id}} | Update a booking

# **getBooking**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2003 getBooking($booking_id, $accept_language)

Get a booking

Get information about a specific booking

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$booking_id = "booking_id_example"; // string | The unique id of the booking
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->getBooking($booking_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->getBooking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **booking_id** | **string**| The unique id of the booking |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBookings**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2002 getBookings($accept_language, $count, $offset, $sort_field, $sort_direction, $customer_id, $state, $add_booking_items)

Get all bookings

Get information about all bookings

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$customer_id = "customer_id_example"; // string | The unique id of the customer
$state = 56; // int | State of the card *Possible values are: 0 - blocked / 1 - active*
$add_booking_items = true; // bool | Booking items are going to be return depends on the parameter value *Possible values: true - returns all booking items. / false - returns no booking items. / no value - return no booking items*

try {
    $result = $apiInstance->getBookings($accept_language, $count, $offset, $sort_field, $sort_direction, $customer_id, $state, $add_booking_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->getBookings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **customer_id** | **string**| The unique id of the customer | [optional]
 **state** | **int**| State of the card *Possible values are: 0 - blocked / 1 - active* | [optional]
 **add_booking_items** | **bool**| Booking items are going to be return depends on the parameter value *Possible values: true - returns all booking items. / false - returns no booking items. / no value - return no booking items* | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postBooking**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse201 postBooking($body, $accept_language)

Create a new booking

Add a new booking

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\BookingsBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\BookingsBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->postBooking($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->postBooking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\BookingsBody**](../Model/BookingsBody.md)|  |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putBooking**
> putBooking($body, $booking_id, $accept_language)

Update a booking

Update a specific booking

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\BookingsBookingIdBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\BookingsBookingIdBody | 
$booking_id = "booking_id_example"; // string | The unique id of the booking
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $apiInstance->putBooking($body, $booking_id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->putBooking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\BookingsBookingIdBody**](../Model/BookingsBookingIdBody.md)|  |
 **booking_id** | **string**| The unique id of the booking |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

