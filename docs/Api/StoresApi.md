# CrmCareCloud\Webservice\RestApi\Client\StoresApi

All URIs are relative to *https://{project_url}/webservice/rest-api/{api_interface}/{version}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSubStoreProperty**](StoresApi.md#deletesubstoreproperty) | **DELETE** /stores/{store_id}/property-records/{property_record_id} | Delete a property record of the store
[**getStore**](StoresApi.md#getstore) | **GET** /stores/{store_id} | Get a store
[**getStores**](StoresApi.md#getstores) | **GET** /stores | Get all stores
[**getSubStoreGroups**](StoresApi.md#getsubstoregroups) | **GET** /stores/{store_id}/store-group-records | Get a collection of store group records
[**getSubStoreProperties**](StoresApi.md#getsubstoreproperties) | **GET** /stores/{store_id}/property-records | Get a collection of properties
[**postStore**](StoresApi.md#poststore) | **POST** /stores | Create a store
[**postSubStoreProperties**](StoresApi.md#postsubstoreproperties) | **POST** /stores/{store_id}/property-records | Add a property to a store
[**putStore**](StoresApi.md#putstore) | **PUT** /stores/{store_id} | Update a store
[**putSubStoreProperty**](StoresApi.md#putsubstoreproperty) | **PUT** /stores/{store_id}/property-records/{property_record_id} | Update a property record of the store

# **deleteSubStoreProperty**
> deleteSubStoreProperty($store_id, $property_record_id, $accept_language)

Delete a property record of the store

Delete a specific store property record tied to the store.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The unique ID of the store in CareCloud.
$property_record_id = "property_record_id_example"; // string | The unique ID of the property record.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $apiInstance->deleteSubStoreProperty($store_id, $property_record_id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->deleteSubStoreProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The unique ID of the store in CareCloud. |
 **property_record_id** | **string**| The unique ID of the property record. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStore**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetStore200Response getStore($store_id, $accept_language)

Get a store

Get information about a specific store.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The unique ID of the store in CareCloud.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->getStore($store_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The unique ID of the store in CareCloud. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetStore200Response**](../Model/GetStore200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStores**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetStores200Response getStores($accept_language, $count, $offset, $sort_field, $sort_direction, $visible_for_customer, $property_id, $property_value, $system_id)

Get all stores

Get information as a list of all stores.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$count = 100; // int | The number of records to return in API response. <br/>⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if `count` parameter is not set.
$offset = 0; // int | The number of records from a collection to skip. Default value of 0 is used when parameter `offset` is not set.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$visible_for_customer = 56; // int | State of the visibility of the customer. *Possible values are: 0 - invisible / 1- visible. If query string is not used, return both.*
$property_id = "property_id_example"; // string | Store property ID from resource [store-properties](#tag/Store-properties). The parameter determines property, which is used to filter stores by their properties. The parameter must be used in combination with property_value otherwise is ignored in the request.
$property_value = "property_value_example"; // string | Store property record value from resource [/stores/{store_id}/property-records](#operation/getSubStoreProperties) or [store-properties](#tag/Store-properties) in case of datatype with multiple values. Parameter filters stores depends of store property record value. The parameter must be used in combination with property_id otherwise is ignored in the request.
$system_id = "system_id_example"; // string | The unique ID of the store in external system (e-shop, POS, etc.)

try {
    $result = $apiInstance->getStores($accept_language, $count, $offset, $sort_field, $sort_direction, $visible_for_customer, $property_id, $property_value, $system_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getStores: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return in API response. &lt;br/&gt;⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if &#x60;count&#x60; parameter is not set. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. Default value of 0 is used when parameter &#x60;offset&#x60; is not set. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **visible_for_customer** | **int**| State of the visibility of the customer. *Possible values are: 0 - invisible / 1- visible. If query string is not used, return both.* | [optional]
 **property_id** | **string**| Store property ID from resource [store-properties](#tag/Store-properties). The parameter determines property, which is used to filter stores by their properties. The parameter must be used in combination with property_value otherwise is ignored in the request. | [optional]
 **property_value** | **string**| Store property record value from resource [/stores/{store_id}/property-records](#operation/getSubStoreProperties) or [store-properties](#tag/Store-properties) in case of datatype with multiple values. Parameter filters stores depends of store property record value. The parameter must be used in combination with property_id otherwise is ignored in the request. | [optional]
 **system_id** | **string**| The unique ID of the store in external system (e-shop, POS, etc.) | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetStores200Response**](../Model/GetStores200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubStoreGroups**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetSubStoreGroups200Response getSubStoreGroups($store_id, $accept_language)

Get a collection of store group records

Get information about all store group records tied to the store.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The unique ID of the store in CareCloud.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->getSubStoreGroups($store_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getSubStoreGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The unique ID of the store in CareCloud. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetSubStoreGroups200Response**](../Model/GetSubStoreGroups200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubStoreProperties**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetSubStoreProperties200Response getSubStoreProperties($store_id, $accept_language)

Get a collection of properties

Get information about all property records tied to the store.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The unique ID of the store in CareCloud.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->getSubStoreProperties($store_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getSubStoreProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The unique ID of the store in CareCloud. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetSubStoreProperties200Response**](../Model/GetSubStoreProperties200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postStore**
> \CrmCareCloud\Webservice\RestApi\Client\Model\PostStores201Response postStore($body, $accept_language)

Create a store

Add a new store.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\StoresBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\StoresBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->postStore($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->postStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\StoresBody**](../Model/StoresBody.md)|  |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\PostStores201Response**](../Model/PostStores201Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSubStoreProperties**
> \CrmCareCloud\Webservice\RestApi\Client\Model\PostSubStoreProperties201Response postSubStoreProperties($body, $store_id, $accept_language)

Add a property to a store

Add a new store property record to a store.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\StoreIdPropertyrecordsBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\StoreIdPropertyrecordsBody | 
$store_id = "store_id_example"; // string | The unique ID of the store in CareCloud.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->postSubStoreProperties($body, $store_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->postSubStoreProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\StoreIdPropertyrecordsBody**](../Model/StoreIdPropertyrecordsBody.md)|  |
 **store_id** | **string**| The unique ID of the store in CareCloud. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\PostSubStoreProperties201Response**](../Model/PostSubStoreProperties201Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putStore**
> putStore($body, $store_id, $accept_language)

Update a store

This method updates a specific store.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\StoresStoreIdBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\StoresStoreIdBody | 
$store_id = "store_id_example"; // string | The unique ID of the store in CareCloud.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $apiInstance->putStore($body, $store_id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->putStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\StoresStoreIdBody**](../Model/StoresStoreIdBody.md)|  |
 **store_id** | **string**| The unique ID of the store in CareCloud. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSubStoreProperty**
> putSubStoreProperty($body, $store_id, $property_record_id, $accept_language)

Update a property record of the store

Update a specific store property record tied to the store.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\PropertyrecordsPropertyRecordIdBody1(); // \CrmCareCloud\Webservice\RestApi\Client\Model\PropertyrecordsPropertyRecordIdBody1 | 
$store_id = "store_id_example"; // string | The unique ID of the store in CareCloud.
$property_record_id = "property_record_id_example"; // string | The unique ID of the property record.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $apiInstance->putSubStoreProperty($body, $store_id, $property_record_id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->putSubStoreProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\PropertyrecordsPropertyRecordIdBody1**](../Model/PropertyrecordsPropertyRecordIdBody1.md)|  |
 **store_id** | **string**| The unique ID of the store in CareCloud. |
 **property_record_id** | **string**| The unique ID of the property record. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

