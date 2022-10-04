# CrmCareCloud\Webservice\RestApi\Client\CustomersApi

All URIs are relative to *https://&lt;projectURL&gt;/webservice/rest-api/enterprise-interface/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSubCustomerInterest**](CustomersApi.md#deletesubcustomerinterest) | **DELETE** /customers/{customer_id}/interest-records/{interest_record_id} | Delete an interest record on an account
[**deleteSubCustomerProperty**](CustomersApi.md#deletesubcustomerproperty) | **DELETE** /customers/{customer_id}/property-records/{property_record_id} | Delete a property on an account
[**getCustomer**](CustomersApi.md#getcustomer) | **GET** /customers/{customer_id} | Get information about a customer
[**getCustomers**](CustomersApi.md#getcustomers) | **GET** /customers | Get all customers
[**getSubCustomerAddress**](CustomersApi.md#getsubcustomeraddress) | **GET** /customers/{customer_id}/addresses/{additional_customer_address_id_path} | Get an additional customer address
[**getSubCustomerAddresses**](CustomersApi.md#getsubcustomeraddresses) | **GET** /customers/{customer_id}/addresses | Get all additional customer adresses
[**getSubCustomerCards**](CustomersApi.md#getsubcustomercards) | **GET** /customers/{customer_id}/cards | Get all customer cards
[**getSubCustomerEvents**](CustomersApi.md#getsubcustomerevents) | **GET** /customers/{customer_id}/events | Get information about all customer&#x27;s events
[**getSubCustomerInterests**](CustomersApi.md#getsubcustomerinterests) | **GET** /customers/{customer_id}/interest-records | Get a collection of interest records
[**getSubCustomerPints**](CustomersApi.md#getsubcustomerpints) | **GET** /customers/{customer_id}/points | Get all customer point records
[**getSubCustomerProperties**](CustomersApi.md#getsubcustomerproperties) | **GET** /customers/{customer_id}/property-records | Get a collection of properties
[**getSubCustomerPurchases**](CustomersApi.md#getsubcustomerpurchases) | **GET** /customers/{customer_id}/purchases | Get all customer purchases
[**getSubCustomerRecommendation**](CustomersApi.md#getsubcustomerrecommendation) | **GET** /customers/{customer_id}/recommendation-records | Get a collection of recommendation records
[**getSubCustomerRelatedCustomers**](CustomersApi.md#getsubcustomerrelatedcustomers) | **GET** /customers/{customer_id}/related-customers | Get information about all related customers
[**getSubCustomerRewards**](CustomersApi.md#getsubcustomerrewards) | **GET** /customers/{customer_id}/rewards | Get all customer rewards
[**getSubCustomerSegments**](CustomersApi.md#getsubcustomersegments) | **GET** /customers/{customer_id}/segment-records | Get a collection of segment records
[**getSubCustomerSource**](CustomersApi.md#getsubcustomersource) | **GET** /customers/{customer_id}/customer-source-records | Get customer source records
[**getSubCustomerStatus**](CustomersApi.md#getsubcustomerstatus) | **GET** /customers/{customer_id}/status-records | Get a collection of status records
[**getSubCustomerVouchers**](CustomersApi.md#getsubcustomervouchers) | **GET** /customers/{customer_id}/vouchers | Get all customer vouchers
[**postCustomer**](CustomersApi.md#postcustomer) | **POST** /customers | Create a new customer
[**postSubCustomerAddress**](CustomersApi.md#postsubcustomeraddress) | **POST** /customers/{customer_id}/addresses | Create an additional customer address
[**postSubCustomerInterest**](CustomersApi.md#postsubcustomerinterest) | **POST** /customers/{customer_id}/interest-records | Add an interest record to a customer
[**postSubCustomerProperties**](CustomersApi.md#postsubcustomerproperties) | **POST** /customers/{customer_id}/property-records | Add a property to a customer
[**postSubCustomerSource**](CustomersApi.md#postsubcustomersource) | **POST** /customers/{customer_id}/customer-source-records | Add an customer source record to a customer
[**putCustomer**](CustomersApi.md#putcustomer) | **PUT** /customers/{customer_id} | Update a customer
[**putSubCustomerAddress**](CustomersApi.md#putsubcustomeraddress) | **PUT** /customers/{customer_id}/addresses/{additional_customer_address_id_path} | Update an additional customer address
[**putSubCustomerInterest**](CustomersApi.md#putsubcustomerinterest) | **PUT** /customers/{customer_id}/interest-records/{interest_record_id} | Update an interest record on an account
[**putSubCustomerProperty**](CustomersApi.md#putsubcustomerproperty) | **PUT** /customers/{customer_id}/property-records/{property_record_id} | Update a property on an account

# **deleteSubCustomerInterest**
> deleteSubCustomerInterest($customer_id, $interest_record_id, $accept_language)

Delete an interest record on an account

Delete a specific customer interest record on a customer account

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique id of the customer
$interest_record_id = "interest_record_id_example"; // string | The unique id of the interest record
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $apiInstance->deleteSubCustomerInterest($customer_id, $interest_record_id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->deleteSubCustomerInterest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique id of the customer |
 **interest_record_id** | **string**| The unique id of the interest record |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSubCustomerProperty**
> deleteSubCustomerProperty($customer_id, $property_record_id, $accept_language)

Delete a property on an account

Delete a specific customer property record on a customer account

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique id of the customer
$property_record_id = "property_record_id_example"; // string | The unique id of the property record
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $apiInstance->deleteSubCustomerProperty($customer_id, $property_record_id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->deleteSubCustomerProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique id of the customer |
 **property_record_id** | **string**| The unique id of the property record |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomer**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20026 getCustomer($customer_id, $accept_language)

Get information about a customer

Get information about a specific customer account

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique id of the customer
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->getCustomer($customer_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique id of the customer |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomers**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20025 getCustomers($accept_language, $count, $offset, $sort_field, $sort_direction, $email, $phone, $customer_source_id, $first_name, $last_name, $birthdate)

Get all customers

Get a list of all customers

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
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
$email = "email_example"; // string | Search by email
$phone = "phone_example"; // string | Phone number with international prefix (420000000)
$customer_source_id = "customer_source_id_example"; // string | The unique id of the customer source. It identifies the system where the customer belongs or the customer account was created
$first_name = "first_name_example"; // string | Search by first name
$last_name = "last_name_example"; // string | Search by last name
$birthdate = "birthdate_example"; // string | Customer's date of birth. *Possible values are: YYYY-MM-DD / DD.MM.YYYY*

try {
    $result = $apiInstance->getCustomers($accept_language, $count, $offset, $sort_field, $sort_direction, $email, $phone, $customer_source_id, $first_name, $last_name, $birthdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomers: ', $e->getMessage(), PHP_EOL;
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
 **email** | **string**| Search by email | [optional]
 **phone** | **string**| Phone number with international prefix (420000000) | [optional]
 **customer_source_id** | **string**| The unique id of the customer source. It identifies the system where the customer belongs or the customer account was created | [optional]
 **first_name** | **string**| Search by first name | [optional]
 **last_name** | **string**| Search by last name | [optional]
 **birthdate** | **string**| Customer&#x27;s date of birth. *Possible values are: YYYY-MM-DD / DD.MM.YYYY* | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerAddress**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20038 getSubCustomerAddress($customer_id, $additional_customer_address_id_path, $accept_language)

Get an additional customer address

Get information about an additional customer address

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique id of the customer
$additional_customer_address_id_path = "additional_customer_address_id_path_example"; // string | Unique ID of the customer additional address
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->getSubCustomerAddress($customer_id, $additional_customer_address_id_path, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getSubCustomerAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique id of the customer |
 **additional_customer_address_id_path** | **string**| Unique ID of the customer additional address |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20038**](../Model/InlineResponse20038.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerAddresses**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20037 getSubCustomerAddresses($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $customer_address_type_id)

Get all additional customer adresses

Get information about all customer addresses.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique id of the customer
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$customer_address_type_id = "customer_address_type_id_example"; // string | The unique id of the customer address type.

try {
    $result = $apiInstance->getSubCustomerAddresses($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $customer_address_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getSubCustomerAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique id of the customer |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **customer_address_type_id** | **string**| The unique id of the customer address type. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerCards**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20016 getSubCustomerCards($accept_language, $customer_id, $count, $offset, $sort_field, $sort_direction, $card_number, $card_type_id, $is_valid)

Get all customer cards

Get information about all customer cards.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$customer_id = "customer_id_example"; // string | The unique id of the customer
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$card_number = "card_number_example"; // string | Number of the customer card
$card_type_id = "card_type_id_example"; // string | The unique id of the card type
$is_valid = true; // bool | *in validity range - true / before or after validity range - false / no value - all*

try {
    $result = $apiInstance->getSubCustomerCards($accept_language, $customer_id, $count, $offset, $sort_field, $sort_direction, $card_number, $card_type_id, $is_valid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getSubCustomerCards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **customer_id** | **string**| The unique id of the customer | [optional]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **card_number** | **string**| Number of the customer card | [optional]
 **card_type_id** | **string**| The unique id of the card type | [optional]
 **is_valid** | **bool**| *in validity range - true / before or after validity range - false / no value - all* | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerEvents**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20039 getSubCustomerEvents($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $event_type_id, $external_id)

Get information about all customer's events

Get a list of customer's events in CRM CareCloud

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique id of the customer
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$event_type_id = "event_type_id_example"; // string | The unique id of the event type
$external_id = "external_id_example"; // string | The unique external id. It may be id from the other system

try {
    $result = $apiInstance->getSubCustomerEvents($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $event_type_id, $external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getSubCustomerEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique id of the customer |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **event_type_id** | **string**| The unique id of the event type | [optional]
 **external_id** | **string**| The unique external id. It may be id from the other system | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20039**](../Model/InlineResponse20039.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerInterests**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20036 getSubCustomerInterests($customer_id, $accept_language)

Get a collection of interest records

Get information about all interest records on a customer account

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique id of the customer
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->getSubCustomerInterests($customer_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getSubCustomerInterests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique id of the customer |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20036**](../Model/InlineResponse20036.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerPints**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20028 getSubCustomerPints($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $point_type_id)

Get all customer point records

Get information about all customer point records.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique id of the customer
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$point_type_id = "point_type_id_example"; // string | The unique id of a point type

try {
    $result = $apiInstance->getSubCustomerPints($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $point_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getSubCustomerPints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique id of the customer |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **point_type_id** | **string**| The unique id of a point type | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerProperties**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20035 getSubCustomerProperties($customer_id, $accept_language)

Get a collection of properties

Get information about all property records on a customer account

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique id of the customer
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->getSubCustomerProperties($customer_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getSubCustomerProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique id of the customer |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20035**](../Model/InlineResponse20035.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerPurchases**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20027 getSubCustomerPurchases($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $store_id, $type_id)

Get all customer purchases

Get information about all customer account purchases.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique id of the customer
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$store_id = "store_id_example"; // string | The unique id of the store in CareCloud
$type_id = "type_id_example"; // string | Purchase type

try {
    $result = $apiInstance->getSubCustomerPurchases($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $store_id, $type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getSubCustomerPurchases: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique id of the customer |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **store_id** | **string**| The unique id of the store in CareCloud | [optional]
 **type_id** | **string**| Purchase type | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerRecommendation**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20033 getSubCustomerRecommendation($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $name)

Get a collection of recommendation records

Get information about all recommendation records on a customer account

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique id of the customer
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$name = "name_example"; // string | Search record by name or a part of the name

try {
    $result = $apiInstance->getSubCustomerRecommendation($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getSubCustomerRecommendation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique id of the customer |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **name** | **string**| Search record by name or a part of the name | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20033**](../Model/InlineResponse20033.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerRelatedCustomers**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20040 getSubCustomerRelatedCustomers($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $related_customer_id, $customer_relation_type_id)

Get information about all related customers

Get a list of related customers in CRM CareCloud

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique id of the customer
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$related_customer_id = "related_customer_id_example"; // string | The unique id of the related customer
$customer_relation_type_id = "customer_relation_type_id_example"; // string | The unique id of the customer relation type in CareCloud

try {
    $result = $apiInstance->getSubCustomerRelatedCustomers($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $related_customer_id, $customer_relation_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getSubCustomerRelatedCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique id of the customer |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **related_customer_id** | **string**| The unique id of the related customer | [optional]
 **customer_relation_type_id** | **string**| The unique id of the customer relation type in CareCloud | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20040**](../Model/InlineResponse20040.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerRewards**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20030 getSubCustomerRewards($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $name, $store_id, $is_valid, $valid_from, $valid_to, $code, $is_automated, $reward_group, $customer_type_id, $without_stores, $tag_ids)

Get all customer rewards

Get information about all customer rewards.  <p class=\"warning\">⚠️ There is the logical AND between query parameters `is_valid`, `valid_from` and `valid to`.</p>

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique id of the customer
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$name = "name_example"; // string | Search record by name or a part of the name
$store_id = "store_id_example"; // string | The unique id of the store where customer can apply the reward
$is_valid = true; // bool | *in validity range - true / before or after validity range - false / no value - all*
$valid_from = "valid_from_example"; // string | Date from when is record already valid. *(YYYY-MM-DD)*
$valid_to = "valid_to_example"; // string | Date to when is record still valid. *(YYYY-MM-DD)*
$code = "code_example"; // string | Code of the reward
$is_automated = true; // bool | Filter of the automated rewards *Possible values: true - returns all automated rewards / false - returns all non automated rewards / no value - all rewards(filter is not applied)*
$reward_group = 56; // int | The unique id of the reward group *Possible values: 0 - cash desk reward (party time reward) / 1 - catalog reward / 2 - campaign reward / 4 - simple reward*
$customer_type_id = array("customer_type_id_example"); // string[] | Select by list of customer types from customer-types resource. Logic OR is used between values
$without_stores = true; // bool | If true, the data will not contain information about business units (stores). If false, or not set resource returns default strucutre.
$tag_ids = array("tag_ids_example"); // string[] | Parameter filters values by a list of tag ids. Logic OR is used between values.

try {
    $result = $apiInstance->getSubCustomerRewards($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $name, $store_id, $is_valid, $valid_from, $valid_to, $code, $is_automated, $reward_group, $customer_type_id, $without_stores, $tag_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getSubCustomerRewards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique id of the customer |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **name** | **string**| Search record by name or a part of the name | [optional]
 **store_id** | **string**| The unique id of the store where customer can apply the reward | [optional]
 **is_valid** | **bool**| *in validity range - true / before or after validity range - false / no value - all* | [optional]
 **valid_from** | **string**| Date from when is record already valid. *(YYYY-MM-DD)* | [optional]
 **valid_to** | **string**| Date to when is record still valid. *(YYYY-MM-DD)* | [optional]
 **code** | **string**| Code of the reward | [optional]
 **is_automated** | **bool**| Filter of the automated rewards *Possible values: true - returns all automated rewards / false - returns all non automated rewards / no value - all rewards(filter is not applied)* | [optional]
 **reward_group** | **int**| The unique id of the reward group *Possible values: 0 - cash desk reward (party time reward) / 1 - catalog reward / 2 - campaign reward / 4 - simple reward* | [optional]
 **customer_type_id** | [**string[]**](../Model/string.md)| Select by list of customer types from customer-types resource. Logic OR is used between values | [optional]
 **without_stores** | **bool**| If true, the data will not contain information about business units (stores). If false, or not set resource returns default strucutre. | [optional]
 **tag_ids** | [**string[]**](../Model/string.md)| Parameter filters values by a list of tag ids. Logic OR is used between values. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerSegments**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20031 getSubCustomerSegments($customer_id, $accept_language, $segment_group_ids)

Get a collection of segment records

Get information about all segment records on a customer account

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique id of the customer
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$segment_group_ids = array("segment_group_ids_example"); // string[] | List of the segment group IDs from the resource [GET /segment-groups](#tag/Segments/operation/getSegmentGroups).

try {
    $result = $apiInstance->getSubCustomerSegments($customer_id, $accept_language, $segment_group_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getSubCustomerSegments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique id of the customer |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **segment_group_ids** | [**string[]**](../Model/string.md)| List of the segment group IDs from the resource [GET /segment-groups](#tag/Segments/operation/getSegmentGroups). | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20031**](../Model/InlineResponse20031.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerSource**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20034 getSubCustomerSource($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $external_id, $customer_source_id)

Get customer source records

Get information about all customer account source records.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique id of the customer
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$external_id = "external_id_example"; // string | The parameter contains a unique ID from an external system (POS, webshop,  mobile app, ERP, and others ). ID should be unique within a customer source for better identification (For example, the process of customer synchronization between systems).
$customer_source_id = "customer_source_id_example"; // string | The unique id of the customer source. It identifies the system where the customer belongs or the customer account was created

try {
    $result = $apiInstance->getSubCustomerSource($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $external_id, $customer_source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getSubCustomerSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique id of the customer |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **external_id** | **string**| The parameter contains a unique ID from an external system (POS, webshop,  mobile app, ERP, and others ). ID should be unique within a customer source for better identification (For example, the process of customer synchronization between systems). | [optional]
 **customer_source_id** | **string**| The unique id of the customer source. It identifies the system where the customer belongs or the customer account was created | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20034**](../Model/InlineResponse20034.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerStatus**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20032 getSubCustomerStatus($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $valid_now)

Get a collection of status records

Get information about all status records on a customer account

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique id of the customer
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$valid_now = true; // bool | Status validity. Just one status can be valid in the time. *Possible values are: True for valid status / False for status not valid*

try {
    $result = $apiInstance->getSubCustomerStatus($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $valid_now);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getSubCustomerStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique id of the customer |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **valid_now** | **bool**| Status validity. Just one status can be valid in the time. *Possible values are: True for valid status / False for status not valid* | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20032**](../Model/InlineResponse20032.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerVouchers**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20029 getSubCustomerVouchers($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $code, $store_id, $is_valid, $is_applied, $without_stores)

Get all customer vouchers

Get information about all customer vouchers.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique id of the customer
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$code = "code_example"; // string | Unique code of the voucher
$store_id = "store_id_example"; // string | The unique id of the store where customer can apply the reward
$is_valid = true; // bool | *in validity range - true / before or after validity range - false / no value - all*
$is_applied = true; // bool | Filter by voucher application and reservation. *Possible values: true - all applied or reserved vouchers / false - all vouchers that have not been applied yet or that are not reserved actually / no value - all vouchers*
$without_stores = true; // bool | If true, the data will not contain information about business units (stores). If false, or not set resource returns default strucutre.

try {
    $result = $apiInstance->getSubCustomerVouchers($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $code, $store_id, $is_valid, $is_applied, $without_stores);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getSubCustomerVouchers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique id of the customer |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **code** | **string**| Unique code of the voucher | [optional]
 **store_id** | **string**| The unique id of the store where customer can apply the reward | [optional]
 **is_valid** | **bool**| *in validity range - true / before or after validity range - false / no value - all* | [optional]
 **is_applied** | **bool**| Filter by voucher application and reservation. *Possible values: true - all applied or reserved vouchers / false - all vouchers that have not been applied yet or that are not reserved actually / no value - all vouchers* | [optional]
 **without_stores** | **bool**| If true, the data will not contain information about business units (stores). If false, or not set resource returns default strucutre. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20029**](../Model/InlineResponse20029.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomer**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2017 postCustomer($body, $accept_language)

Create a new customer

Add a new customer account in CRM CareCloud

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\CustomersBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\CustomersBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->postCustomer($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->postCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\CustomersBody**](../Model/CustomersBody.md)|  |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2017**](../Model/InlineResponse2017.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSubCustomerAddress**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20111 postSubCustomerAddress($body, $customer_id, $accept_language)

Create an additional customer address

Add a new additional customer address

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\CustomerIdAddressesBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\CustomerIdAddressesBody | 
$customer_id = "customer_id_example"; // string | The unique id of the customer
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->postSubCustomerAddress($body, $customer_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->postSubCustomerAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\CustomerIdAddressesBody**](../Model/CustomerIdAddressesBody.md)|  |
 **customer_id** | **string**| The unique id of the customer |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20111**](../Model/InlineResponse20111.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSubCustomerInterest**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20110 postSubCustomerInterest($body, $customer_id, $accept_language)

Add an interest record to a customer

Add a new specific customer interest record to a customer account

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\CustomerIdInterestrecordsBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\CustomerIdInterestrecordsBody | 
$customer_id = "customer_id_example"; // string | The unique id of the customer
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->postSubCustomerInterest($body, $customer_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->postSubCustomerInterest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\CustomerIdInterestrecordsBody**](../Model/CustomerIdInterestrecordsBody.md)|  |
 **customer_id** | **string**| The unique id of the customer |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20110**](../Model/InlineResponse20110.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSubCustomerProperties**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2019 postSubCustomerProperties($body, $customer_id, $accept_language)

Add a property to a customer

Add a new specific customer property record to a customer account

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\CustomerIdPropertyrecordsBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\CustomerIdPropertyrecordsBody | 
$customer_id = "customer_id_example"; // string | The unique id of the customer
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->postSubCustomerProperties($body, $customer_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->postSubCustomerProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\CustomerIdPropertyrecordsBody**](../Model/CustomerIdPropertyrecordsBody.md)|  |
 **customer_id** | **string**| The unique id of the customer |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2019**](../Model/InlineResponse2019.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSubCustomerSource**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2018 postSubCustomerSource($body, $customer_id, $accept_language)

Add an customer source record to a customer

Add one of the [customer sources](/#tag/Customer-sources) to a customer account

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\CustomerIdCustomersourcerecordsBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\CustomerIdCustomersourcerecordsBody | 
$customer_id = "customer_id_example"; // string | The unique id of the customer
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->postSubCustomerSource($body, $customer_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->postSubCustomerSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\CustomerIdCustomersourcerecordsBody**](../Model/CustomerIdCustomersourcerecordsBody.md)|  |
 **customer_id** | **string**| The unique id of the customer |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2018**](../Model/InlineResponse2018.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCustomer**
> putCustomer($body, $customer_id, $accept_language)

Update a customer

Update the information on a specific customer account

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\CustomersCustomerIdBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\CustomersCustomerIdBody | 
$customer_id = "customer_id_example"; // string | The unique id of the customer
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $apiInstance->putCustomer($body, $customer_id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->putCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\CustomersCustomerIdBody**](../Model/CustomersCustomerIdBody.md)|  |
 **customer_id** | **string**| The unique id of the customer |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSubCustomerAddress**
> putSubCustomerAddress($body, $customer_id, $additional_customer_address_id_path, $accept_language)

Update an additional customer address

Update a specific additional customer address

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\AddressesAdditionalCustomerAddressIdPathBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\AddressesAdditionalCustomerAddressIdPathBody | 
$customer_id = "customer_id_example"; // string | The unique id of the customer
$additional_customer_address_id_path = "additional_customer_address_id_path_example"; // string | Unique ID of the customer additional address
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $apiInstance->putSubCustomerAddress($body, $customer_id, $additional_customer_address_id_path, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->putSubCustomerAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\AddressesAdditionalCustomerAddressIdPathBody**](../Model/AddressesAdditionalCustomerAddressIdPathBody.md)|  |
 **customer_id** | **string**| The unique id of the customer |
 **additional_customer_address_id_path** | **string**| Unique ID of the customer additional address |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSubCustomerInterest**
> putSubCustomerInterest($body, $customer_id, $interest_record_id, $accept_language)

Update an interest record on an account

Update a specific customer interest record on a customer account

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\InterestrecordsInterestRecordIdBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\InterestrecordsInterestRecordIdBody | 
$customer_id = "customer_id_example"; // string | The unique id of the customer
$interest_record_id = "interest_record_id_example"; // string | The unique id of the interest record
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $apiInstance->putSubCustomerInterest($body, $customer_id, $interest_record_id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->putSubCustomerInterest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\InterestrecordsInterestRecordIdBody**](../Model/InterestrecordsInterestRecordIdBody.md)|  |
 **customer_id** | **string**| The unique id of the customer |
 **interest_record_id** | **string**| The unique id of the interest record |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSubCustomerProperty**
> putSubCustomerProperty($body, $customer_id, $property_record_id, $accept_language)

Update a property on an account

Update a specific customer property record on a customer account

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\PropertyrecordsPropertyRecordIdBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\PropertyrecordsPropertyRecordIdBody | 
$customer_id = "customer_id_example"; // string | The unique id of the customer
$property_record_id = "property_record_id_example"; // string | The unique id of the property record
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $apiInstance->putSubCustomerProperty($body, $customer_id, $property_record_id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->putSubCustomerProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\PropertyrecordsPropertyRecordIdBody**](../Model/PropertyrecordsPropertyRecordIdBody.md)|  |
 **customer_id** | **string**| The unique id of the customer |
 **property_record_id** | **string**| The unique id of the property record |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

