# CrmCareCloud\Webservice\RestApi\Client\CreditsApi

All URIs are relative to *https://&lt;projectURL&gt;/webservice/rest-api/enterprise-interface/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCredit**](CreditsApi.md#getcredit) | **GET** /credits/{credit_id} | Get a credit record
[**getCredits**](CreditsApi.md#getcredits) | **GET** /credits | Get all credit records
[**getSubCreditPurchases**](CreditsApi.md#getsubcreditpurchases) | **GET** /credits/{credit_id}/purchases | Get a collection of purchases

# **getCredit**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20026 getCredit($credit_id, $accept_language)

Get a credit record

Get information about a specific credit transaction

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CreditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_id = "credit_id_example"; // string | The unique id of the credit record
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->getCredit($credit_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditsApi->getCredit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_id** | **string**| The unique id of the credit record |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCredits**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20025 getCredits($accept_language, $count, $offset, $sort_field, $sort_direction, $customer_id, $credit_type_id, $create_credit_time_from, $create_credit_time_to)

Get all credit records

Get a list of all credit transactions and their current values.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CreditsApi(
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
$credit_type_id = "credit_type_id_example"; // string | The unique id of a credit type
$create_credit_time_from = "create_credit_time_from_example"; // string | Date and time from of the create credit record *(YYYY-MM-DD HH:MM:SS)*
$create_credit_time_to = "create_credit_time_to_example"; // string | Date and time to of the create credit record *(YYYY-MM-DD HH:MM:SS)*

try {
    $result = $apiInstance->getCredits($accept_language, $count, $offset, $sort_field, $sort_direction, $customer_id, $credit_type_id, $create_credit_time_from, $create_credit_time_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditsApi->getCredits: ', $e->getMessage(), PHP_EOL;
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
 **credit_type_id** | **string**| The unique id of a credit type | [optional]
 **create_credit_time_from** | **string**| Date and time from of the create credit record *(YYYY-MM-DD HH:MM:SS)* | [optional]
 **create_credit_time_to** | **string**| Date and time to of the create credit record *(YYYY-MM-DD HH:MM:SS)* | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCreditPurchases**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20027 getSubCreditPurchases($credit_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $store_id, $customer_id, $type_id, $payment_time_from, $payment_time_to, $purchase_items_extension)

Get a collection of purchases

Get information about all purchases by credit resource

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CreditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_id = "credit_id_example"; // string | The unique id of the credit record
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$store_id = "store_id_example"; // string | The unique id of the store in CareCloud
$customer_id = "customer_id_example"; // string | The unique id of the customer
$type_id = "type_id_example"; // string | Purchase type
$payment_time_from = "payment_time_from_example"; // string | Date and time from of the purchase payment *(YYYY-MM-DD HH:MM:SS)*
$payment_time_to = "payment_time_to_example"; // string | Date and time to of the purchase payment *(YYYY-MM-DD HH:MM:SS)*
$purchase_items_extension = false; // bool | If true, resource returns extended response with purchase items. If false, the resource won't be extended. If the parameter is not set, the default value is false

try {
    $result = $apiInstance->getSubCreditPurchases($credit_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $store_id, $customer_id, $type_id, $payment_time_from, $payment_time_to, $purchase_items_extension);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditsApi->getSubCreditPurchases: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_id** | **string**| The unique id of the credit record |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **store_id** | **string**| The unique id of the store in CareCloud | [optional]
 **customer_id** | **string**| The unique id of the customer | [optional]
 **type_id** | **string**| Purchase type | [optional]
 **payment_time_from** | **string**| Date and time from of the purchase payment *(YYYY-MM-DD HH:MM:SS)* | [optional]
 **payment_time_to** | **string**| Date and time to of the purchase payment *(YYYY-MM-DD HH:MM:SS)* | [optional]
 **purchase_items_extension** | **bool**| If true, resource returns extended response with purchase items. If false, the resource won&#x27;t be extended. If the parameter is not set, the default value is false | [optional] [default to false]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

