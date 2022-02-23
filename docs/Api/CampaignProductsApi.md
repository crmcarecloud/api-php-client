# CrmCareCloud\Webservice\RestApi\Client\CampaignProductsApi

All URIs are relative to *https://&lt;projectURL&gt;/webservice/rest-api/enterprise-interface/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCampaignProduct**](CampaignProductsApi.md#getcampaignproduct) | **GET** /campaign-products/{campaign_product_id} | Detail of a specific campaign product
[**getCampaignProductStoreRecords**](CampaignProductsApi.md#getcampaignproductstorerecords) | **GET** /campaign-products/{campaign_product_id}/campaign-product-store-records | Get a campaign product store records
[**getCampaignProducts**](CampaignProductsApi.md#getcampaignproducts) | **GET** /campaign-products | Collection of campaign products
[**postCampaignProduct**](CampaignProductsApi.md#postcampaignproduct) | **POST** /campaign-products | Create a campaign product
[**postCampaignProductStoreRecord**](CampaignProductsApi.md#postcampaignproductstorerecord) | **POST** /campaign-products/{campaign_product_id}/campaign-product-store-records | Add a store to the campaign product

# **getCampaignProduct**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2005 getCampaignProduct($campaign_product_id, $accept_language)

Detail of a specific campaign product

Get information about all details of a specific campaign product

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CampaignProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_product_id = "campaign_product_id_example"; // string | The unique id for the campaign product in CareCloud
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->getCampaignProduct($campaign_product_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignProductsApi->getCampaignProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_product_id** | **string**| The unique id for the campaign product in CareCloud |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCampaignProductStoreRecords**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2006 getCampaignProductStoreRecords($campaign_product_id, $accept_language, $count, $offset, $sort_field, $sort_direction)

Get a campaign product store records

Get information about all campaign products store records.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CampaignProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_product_id = "campaign_product_id_example"; // string | The unique id for the campaign product in CareCloud
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | One of the query string parameters for sorting. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.

try {
    $result = $apiInstance->getCampaignProductStoreRecords($campaign_product_id, $accept_language, $count, $offset, $sort_field, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignProductsApi->getCampaignProductStoreRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_product_id** | **string**| The unique id for the campaign product in CareCloud |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| One of the query string parameters for sorting. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCampaignProducts**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2004 getCampaignProducts($accept_language, $count, $offset, $sort_field, $sort_direction, $name, $code, $display_in, $type_id, $store_id, $value_type_id, $is_valid, $valid_from, $valid_to)

Collection of campaign products

Get information about all available campaign products

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CampaignProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | One of the query string parameters for sorting. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$name = "name_example"; // string | Search record by name or a part of the name
$code = "code_example"; // string | Code of the product
$display_in = "display_in_example"; // string | Place to display campaign product.
$type_id = array("type_id_example"); // string[] | Type of the customer for a campaign product.
$store_id = "store_id_example"; // string | Parameter filters all campaig products from [store](#tag/Stores) by store id
$value_type_id = 56; // int | Type of value (1 - percentage discount value, 2 - final price)
$is_valid = true; // bool | *in validity range - true / before or after validity range - false / no value - all*
$valid_from = "valid_from_example"; // string | Date and time from where is valid already. *(YYYY-MM-DD HH:MM:SS)*
$valid_to = "valid_to_example"; // string | Date and time to where is valid still. *(YYYY-MM-DD HH:MM:SS)*

try {
    $result = $apiInstance->getCampaignProducts($accept_language, $count, $offset, $sort_field, $sort_direction, $name, $code, $display_in, $type_id, $store_id, $value_type_id, $is_valid, $valid_from, $valid_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignProductsApi->getCampaignProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| One of the query string parameters for sorting. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **name** | **string**| Search record by name or a part of the name | [optional]
 **code** | **string**| Code of the product | [optional]
 **display_in** | **string**| Place to display campaign product. | [optional]
 **type_id** | [**string[]**](../Model/string.md)| Type of the customer for a campaign product. | [optional]
 **store_id** | **string**| Parameter filters all campaig products from [store](#tag/Stores) by store id | [optional]
 **value_type_id** | **int**| Type of value (1 - percentage discount value, 2 - final price) | [optional]
 **is_valid** | **bool**| *in validity range - true / before or after validity range - false / no value - all* | [optional]
 **valid_from** | **string**| Date and time from where is valid already. *(YYYY-MM-DD HH:MM:SS)* | [optional]
 **valid_to** | **string**| Date and time to where is valid still. *(YYYY-MM-DD HH:MM:SS)* | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCampaignProduct**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2011 postCampaignProduct($body, $accept_language)

Create a campaign product

Add a new campaign product

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CampaignProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\CampaignproductsBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\CampaignproductsBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->postCampaignProduct($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignProductsApi->postCampaignProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\CampaignproductsBody**](../Model/CampaignproductsBody.md)|  |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2011**](../Model/InlineResponse2011.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCampaignProductStoreRecord**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2012 postCampaignProductStoreRecord($body, $campaign_product_id, $accept_language)

Add a store to the campaign product

Add one of the [stores](#tag/Stores) to a campaign product

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CampaignProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\CampaignProductIdCampaignproductstorerecordsBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\CampaignProductIdCampaignproductstorerecordsBody | 
$campaign_product_id = "campaign_product_id_example"; // string | The unique id for the campaign product in CareCloud
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->postCampaignProductStoreRecord($body, $campaign_product_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignProductsApi->postCampaignProductStoreRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\CampaignProductIdCampaignproductstorerecordsBody**](../Model/CampaignProductIdCampaignproductstorerecordsBody.md)|  |
 **campaign_product_id** | **string**| The unique id for the campaign product in CareCloud |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2012**](../Model/InlineResponse2012.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

