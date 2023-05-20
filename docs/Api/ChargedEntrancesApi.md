# CrmCareCloud\Webservice\RestApi\Client\ChargedEntrancesApi

All URIs are relative to *https://&lt;projectURL&gt;/webservice/rest-api/enterprise-interface/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEntrance**](ChargedEntrancesApi.md#getentrance) | **GET** /entrances/{entrance_id} | Get an entrance
[**getEntrances**](ChargedEntrancesApi.md#getentrances) | **GET** /entrances | Get all entrances
[**getEntrancesOverview**](ChargedEntrancesApi.md#getentrancesoverview) | **GET** /entrances/actions/overview | Get entrances overview
[**putEntrance**](ChargedEntrancesApi.md#putentrance) | **PUT** /entrances/{entrance_id} | Update an entrance

# **getEntrance**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200140 getEntrance($entrance_id, $accept_language)

Get an entrance

Get information about a specific entrance resource.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\ChargedEntrancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entrance_id = "entrance_id_example"; // string | The unique ID of the charged entrance.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->getEntrance($entrance_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargedEntrancesApi->getEntrance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entrance_id** | **string**| The unique ID of the charged entrance. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200140**](../Model/InlineResponse200140.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEntrances**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200139 getEntrances($accept_language, $count, $offset, $sort_field, $sort_direction, $pos_id, $external_order_id, $name, $resort_name, $customer_category_name, $card_id, $customer_id, $entrance_type_id, $state, $external_entrance_id, $is_valid, $is_cancelled, $valid_from, $valid_to, $product_id)

Get all entrances

Get a list of entrances in CRM CareCloud.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\ChargedEntrancesApi(
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
$pos_id = 56; // int | ID of POS system for tickets. Required with path parameter entrance ID. *Possible values are: EPOS - 3 / skidata - 6 / axess - 9 / base - 11*
$external_order_id = "external_order_id_example"; // string | ID of an external order created in POS system.
$name = "name_example"; // string | Name of the charged entrance (product name is used from resource products).
$resort_name = "resort_name_example"; // string | Name of the resort where is an entrance charged.
$customer_category_name = "customer_category_name_example"; // string | Name of the customer category.
$card_id = "card_id_example"; // string | ID of a card used for charging entrance.
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$entrance_type_id = 56; // int | Type of the entrance. *Possible values are: season ticket - 0/ one day ticket -1/ multiple day ticket - 2*
$state = 56; // int | State of the entrance. *Possible values are: canceled entrance - 0 / valid entrance -1*
$external_entrance_id = "external_entrance_id_example"; // string | External ID of the entrance. Structure can be different depends of POS system, that created entrance.
$is_valid = true; // bool | *in validity range - true / before or after validity range - false / no value - all*
$is_cancelled = true; // bool | Filter for canceled entrances. *Possible values: true - all cancelled entrances / false - all non cancelled entrances / no value - all entrances*
$valid_from = "valid_from_example"; // string | Date from when is record already valid. *(YYYY-MM-DD)*
$valid_to = "valid_to_example"; // string | Date to when is record still valid. *(YYYY-MM-DD)*
$product_id = "product_id_example"; // string | ID of the product.

try {
    $result = $apiInstance->getEntrances($accept_language, $count, $offset, $sort_field, $sort_direction, $pos_id, $external_order_id, $name, $resort_name, $customer_category_name, $card_id, $customer_id, $entrance_type_id, $state, $external_entrance_id, $is_valid, $is_cancelled, $valid_from, $valid_to, $product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargedEntrancesApi->getEntrances: ', $e->getMessage(), PHP_EOL;
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
 **pos_id** | **int**| ID of POS system for tickets. Required with path parameter entrance ID. *Possible values are: EPOS - 3 / skidata - 6 / axess - 9 / base - 11* | [optional]
 **external_order_id** | **string**| ID of an external order created in POS system. | [optional]
 **name** | **string**| Name of the charged entrance (product name is used from resource products). | [optional]
 **resort_name** | **string**| Name of the resort where is an entrance charged. | [optional]
 **customer_category_name** | **string**| Name of the customer category. | [optional]
 **card_id** | **string**| ID of a card used for charging entrance. | [optional]
 **customer_id** | **string**| The unique ID of the customer. | [optional]
 **entrance_type_id** | **int**| Type of the entrance. *Possible values are: season ticket - 0/ one day ticket -1/ multiple day ticket - 2* | [optional]
 **state** | **int**| State of the entrance. *Possible values are: canceled entrance - 0 / valid entrance -1* | [optional]
 **external_entrance_id** | **string**| External ID of the entrance. Structure can be different depends of POS system, that created entrance. | [optional]
 **is_valid** | **bool**| *in validity range - true / before or after validity range - false / no value - all* | [optional]
 **is_cancelled** | **bool**| Filter for canceled entrances. *Possible values: true - all cancelled entrances / false - all non cancelled entrances / no value - all entrances* | [optional]
 **valid_from** | **string**| Date from when is record already valid. *(YYYY-MM-DD)* | [optional]
 **valid_to** | **string**| Date to when is record still valid. *(YYYY-MM-DD)* | [optional]
 **product_id** | **string**| ID of the product. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200139**](../Model/InlineResponse200139.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEntrancesOverview**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200141 getEntrancesOverview($accept_language, $valid_from, $valid_to, $pos_id)

Get entrances overview

Get information about entrances in time interval.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\ChargedEntrancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$valid_from = "valid_from_example"; // string | Date from when is record already valid. *(YYYY-MM-DD)*
$valid_to = "valid_to_example"; // string | Date to when is record still valid. *(YYYY-MM-DD)*
$pos_id = 56; // int | ID of POS system for tickets. Required with path parameter entrance ID. *Possible values are: EPOS - 3 / skidata - 6 / axess - 9 / base - 11*

try {
    $result = $apiInstance->getEntrancesOverview($accept_language, $valid_from, $valid_to, $pos_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargedEntrancesApi->getEntrancesOverview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **valid_from** | **string**| Date from when is record already valid. *(YYYY-MM-DD)* | [optional]
 **valid_to** | **string**| Date to when is record still valid. *(YYYY-MM-DD)* | [optional]
 **pos_id** | **int**| ID of POS system for tickets. Required with path parameter entrance ID. *Possible values are: EPOS - 3 / skidata - 6 / axess - 9 / base - 11* | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200141**](../Model/InlineResponse200141.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEntrance**
> putEntrance($body, $entrance_id, $accept_language)

Update an entrance

This method updates a specific entrance resource.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\ChargedEntrancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\EntrancesEntranceIdBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\EntrancesEntranceIdBody | 
$entrance_id = "entrance_id_example"; // string | The unique ID of the charged entrance.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $apiInstance->putEntrance($body, $entrance_id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling ChargedEntrancesApi->putEntrance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\EntrancesEntranceIdBody**](../Model/EntrancesEntranceIdBody.md)|  |
 **entrance_id** | **string**| The unique ID of the charged entrance. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

