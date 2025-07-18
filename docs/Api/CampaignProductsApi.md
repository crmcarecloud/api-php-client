# CrmCareCloud\Webservice\RestApi\Client\CampaignProductsApi

All URIs are relative to *https://{project_url}/webservice/rest-api/{api_interface}/{version}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCampaignProduct**](CampaignProductsApi.md#getcampaignproduct) | **GET** /campaign-products/{campaign_product_id} | Detail of a specific campaign product
[**getCampaignProductStoreRecords**](CampaignProductsApi.md#getcampaignproductstorerecords) | **GET** /campaign-products/{campaign_product_id}/campaign-product-store-records | Get a campaign product store records
[**getCampaignProducts**](CampaignProductsApi.md#getcampaignproducts) | **GET** /campaign-products | Collection of campaign products
[**postCampaignProduct**](CampaignProductsApi.md#postcampaignproduct) | **POST** /campaign-products | Create a campaign product
[**postCampaignProductStoreRecord**](CampaignProductsApi.md#postcampaignproductstorerecord) | **POST** /campaign-products/{campaign_product_id}/campaign-product-store-records | Add a store to the campaign product

# **getCampaignProduct**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetCampaignProduct200Response getCampaignProduct($campaign_product_id, $accept_language)

Detail of a specific campaign product

Get information about all details of a specific campaign product.

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
$campaign_product_id = "campaign_product_id_example"; // string | The unique ID of the campaign product in CareCloud.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

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
 **campaign_product_id** | **string**| The unique ID of the campaign product in CareCloud. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetCampaignProduct200Response**](../Model/GetCampaignProduct200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCampaignProductStoreRecords**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCampaignProductStoreRecords200Response getCampaignProductStoreRecords($campaign_product_id, $accept_language, $count, $offset, $sort_field, $sort_direction)

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
$campaign_product_id = "campaign_product_id_example"; // string | The unique ID of the campaign product in CareCloud.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$count = 100; // int | The number of records to return in API response. <br/>⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if `count` parameter is not set.
$offset = 0; // int | The number of records from a collection to skip. Default value of 0 is used when parameter `offset` is not set.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
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
 **campaign_product_id** | **string**| The unique ID of the campaign product in CareCloud. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return in API response. &lt;br/&gt;⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if &#x60;count&#x60; parameter is not set. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. Default value of 0 is used when parameter &#x60;offset&#x60; is not set. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCampaignProductStoreRecords200Response**](../Model/GetSubCampaignProductStoreRecords200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCampaignProducts**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetCampaignProducts200Response getCampaignProducts($accept_language, $count, $offset, $sort_field, $sort_direction, $name, $code, $display_in, $type_id, $store_id, $value_type_id, $is_valid, $valid_from, $valid_to, $campaign_id, $include_property_records)

Collection of campaign products

Get information about all available campaign products.

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
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$count = 100; // int | The number of records to return in API response. <br/>⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if `count` parameter is not set.
$offset = 0; // int | The number of records from a collection to skip. Default value of 0 is used when parameter `offset` is not set.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$name = "name_example"; // string | Search record by name or a part of the name.
$code = "code_example"; // string | Code of the product.
$display_in = "display_in_example"; // string | Place to display campaign product.
$type_id = array("type_id_example"); // string[] | Type of the customer for a campaign product. The list of values is available at [GET /customer-types](https://carecloud.readme.io/reference/getcustomertypes).
$store_id = "store_id_example"; // string | Parameter filters all campaign products from [store](#tag/Stores) by store ID.
$value_type_id = 56; // int | Type of value (1 - percentage discount value, 2 - final price).
$is_valid = true; // bool | *in validity range - true / before or after validity range - false / no value - all*
$valid_from = "valid_from_example"; // string | Date and time from when is record already valid. *(YYYY-MM-DD HH:MM:SS)*
$valid_to = "valid_to_example"; // string | Date and time to when is record still valid. *(YYYY-MM-DD HH:MM:SS)*
$campaign_id = "campaign_id_example"; // string | The unique ID of the campaign in CareCloud. The list of campaigns is available in [GET /campaigns](https://carecloud.readme.io/reference/getcampaigns).
$include_property_records = true; // bool | If true, the property record structure will be included in the response. Possible values: true - property records structure will be included / false or not set - property records structure won't be included, and parameter will return null value

try {
    $result = $apiInstance->getCampaignProducts($accept_language, $count, $offset, $sort_field, $sort_direction, $name, $code, $display_in, $type_id, $store_id, $value_type_id, $is_valid, $valid_from, $valid_to, $campaign_id, $include_property_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignProductsApi->getCampaignProducts: ', $e->getMessage(), PHP_EOL;
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
 **name** | **string**| Search record by name or a part of the name. | [optional]
 **code** | **string**| Code of the product. | [optional]
 **display_in** | **string**| Place to display campaign product. | [optional]
 **type_id** | [**string[]**](../Model/string.md)| Type of the customer for a campaign product. The list of values is available at [GET /customer-types](https://carecloud.readme.io/reference/getcustomertypes). | [optional]
 **store_id** | **string**| Parameter filters all campaign products from [store](#tag/Stores) by store ID. | [optional]
 **value_type_id** | **int**| Type of value (1 - percentage discount value, 2 - final price). | [optional]
 **is_valid** | **bool**| *in validity range - true / before or after validity range - false / no value - all* | [optional]
 **valid_from** | **string**| Date and time from when is record already valid. *(YYYY-MM-DD HH:MM:SS)* | [optional]
 **valid_to** | **string**| Date and time to when is record still valid. *(YYYY-MM-DD HH:MM:SS)* | [optional]
 **campaign_id** | **string**| The unique ID of the campaign in CareCloud. The list of campaigns is available in [GET /campaigns](https://carecloud.readme.io/reference/getcampaigns). | [optional]
 **include_property_records** | **bool**| If true, the property record structure will be included in the response. Possible values: true - property records structure will be included / false or not set - property records structure won&#x27;t be included, and parameter will return null value | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetCampaignProducts200Response**](../Model/GetCampaignProducts200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCampaignProduct**
> \CrmCareCloud\Webservice\RestApi\Client\Model\PostCampaignProduct201Response postCampaignProduct($body, $accept_language)

Create a campaign product

Add a new campaign product.

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
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

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
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\PostCampaignProduct201Response**](../Model/PostCampaignProduct201Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCampaignProductStoreRecord**
> \CrmCareCloud\Webservice\RestApi\Client\Model\PostSubCampaignProductStoreRecords201Response postCampaignProductStoreRecord($body, $campaign_product_id, $accept_language)

Add a store to the campaign product

Add one of the [stores](#tag/Stores) to a campaign product.

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
$campaign_product_id = "campaign_product_id_example"; // string | The unique ID of the campaign product in CareCloud.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

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
 **campaign_product_id** | **string**| The unique ID of the campaign product in CareCloud. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\PostSubCampaignProductStoreRecords201Response**](../Model/PostSubCampaignProductStoreRecords201Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

