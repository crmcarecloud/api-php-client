# CrmCareCloud\Webservice\RestApi\Client\SkipassesApi

All URIs are relative to *https://&lt;projectURL&gt;/webservice/rest-api/enterprise-interface/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSkipass**](SkipassesApi.md#getskipass) | **GET** /skipasses/{skipass_id} | Get a skipass
[**getSkipasses**](SkipassesApi.md#getskipasses) | **GET** /skipasses | Get all skipasses
[**getSkipassesOverview**](SkipassesApi.md#getskipassesoverview) | **GET** /skipasses/actions/overview | Get skipasses overview
[**putSkipass**](SkipassesApi.md#putskipass) | **PUT** /skipasses/{skipass_id} | Update a skipass

# **getSkipass**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200103 getSkipass($skipass_id, $accept_language)

Get a skipass

Get information about a specific skipass resource.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\SkipassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skipass_id = "skipass_id_example"; // string | The unique id of the skipass
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->getSkipass($skipass_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkipassesApi->getSkipass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skipass_id** | **string**| The unique id of the skipass |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200103**](../Model/InlineResponse200103.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSkipasses**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200102 getSkipasses($accept_language, $count, $offset, $sort_field, $sort_direction, $pos_id, $external_order_id, $name, $resort_name, $customer_category_name, $card_id, $customer_id, $skipass_type_id, $state, $external_skipass_id, $is_valid, $is_cancelled)

Get all skipasses

Get a list of skipasses in CRM CareCloud

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\SkipassesApi(
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
$pos_id = 56; // int | Id of POS system for ski tickets. *Possible values are: skidata - 6 / axess - 9 / base - 11*
$external_order_id = "external_order_id_example"; // string | string Id of an external order creaded in POS system
$name = "name_example"; // string | name string Name of the charged skipass (product name is used from resource products)
$resort_name = "resort_name_example"; // string | string Name of the resort where is a skipass charged
$customer_category_name = "customer_category_name_example"; // string | Name of the customer category
$card_id = "card_id_example"; // string | Id of card used for charge skipasses
$customer_id = "customer_id_example"; // string | The unique id of the customer
$skipass_type_id = 56; // int | Type of the skipass *Possible values are: season ticket - 0/ one day ticket -1/ multiple day ticket - 2*
$state = 56; // int | State of the skipass *Possible values are: canceled skipass - 0 / valid skipass -1*
$external_skipass_id = "external_skipass_id_example"; // string | External id of skipass. Structure can be different depends of POS system, that created skipass
$is_valid = true; // bool | *in validity range - true / before or after validity range - false / no value - all*
$is_cancelled = true; // bool | Filter for canceled skipasses. *Possible values: true - all cancelled skipasses / false - all non cancelled skipasses / no value - all skipasses*

try {
    $result = $apiInstance->getSkipasses($accept_language, $count, $offset, $sort_field, $sort_direction, $pos_id, $external_order_id, $name, $resort_name, $customer_category_name, $card_id, $customer_id, $skipass_type_id, $state, $external_skipass_id, $is_valid, $is_cancelled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkipassesApi->getSkipasses: ', $e->getMessage(), PHP_EOL;
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
 **pos_id** | **int**| Id of POS system for ski tickets. *Possible values are: skidata - 6 / axess - 9 / base - 11* | [optional]
 **external_order_id** | **string**| string Id of an external order creaded in POS system | [optional]
 **name** | **string**| name string Name of the charged skipass (product name is used from resource products) | [optional]
 **resort_name** | **string**| string Name of the resort where is a skipass charged | [optional]
 **customer_category_name** | **string**| Name of the customer category | [optional]
 **card_id** | **string**| Id of card used for charge skipasses | [optional]
 **customer_id** | **string**| The unique id of the customer | [optional]
 **skipass_type_id** | **int**| Type of the skipass *Possible values are: season ticket - 0/ one day ticket -1/ multiple day ticket - 2* | [optional]
 **state** | **int**| State of the skipass *Possible values are: canceled skipass - 0 / valid skipass -1* | [optional]
 **external_skipass_id** | **string**| External id of skipass. Structure can be different depends of POS system, that created skipass | [optional]
 **is_valid** | **bool**| *in validity range - true / before or after validity range - false / no value - all* | [optional]
 **is_cancelled** | **bool**| Filter for canceled skipasses. *Possible values: true - all cancelled skipasses / false - all non cancelled skipasses / no value - all skipasses* | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200102**](../Model/InlineResponse200102.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSkipassesOverview**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200104 getSkipassesOverview($accept_language, $valid_from, $valid_to)

Get skipasses overview

Get information about skipasses in time interval

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\SkipassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$valid_from = "valid_from_example"; // string | Date from where is valid already. *(YYYY-MM-DD)*
$valid_to = "valid_to_example"; // string | Date to where is valid still. *(YYYY-MM-DD)*

try {
    $result = $apiInstance->getSkipassesOverview($accept_language, $valid_from, $valid_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkipassesApi->getSkipassesOverview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **valid_from** | **string**| Date from where is valid already. *(YYYY-MM-DD)* | [optional]
 **valid_to** | **string**| Date to where is valid still. *(YYYY-MM-DD)* | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200104**](../Model/InlineResponse200104.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSkipass**
> putSkipass($body, $skipass_id, $accept_language)

Update a skipass

This method updates a specific skipass resource.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\SkipassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\SkipassesSkipassIdBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\SkipassesSkipassIdBody | 
$skipass_id = "skipass_id_example"; // string | The unique id of the skipass
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $apiInstance->putSkipass($body, $skipass_id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling SkipassesApi->putSkipass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\SkipassesSkipassIdBody**](../Model/SkipassesSkipassIdBody.md)|  |
 **skipass_id** | **string**| The unique id of the skipass |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

