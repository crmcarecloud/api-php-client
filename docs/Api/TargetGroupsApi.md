# CrmCareCloud\Webservice\RestApi\Client\TargetGroupsApi

All URIs are relative to *https://{project_url}/webservice/rest-api/{api_interface}/{version}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTargetGroup**](TargetGroupsApi.md#gettargetgroup) | **GET** /target-groups/{target_group_id} | Get a target group
[**getTargetGroups**](TargetGroupsApi.md#gettargetgroups) | **GET** /target-groups | Get all target groups

# **getTargetGroup**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetTargetGroup200Response getTargetGroup($target_group_id, $accept_language)

Get a target group

Get information about a specific target group. ⚠️ The endpoint is available only in the Enterprise interface.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\TargetGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$target_group_id = "target_group_id_example"; // string | The unique ID of the target group.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->getTargetGroup($target_group_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->getTargetGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **target_group_id** | **string**| The unique ID of the target group. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetTargetGroup200Response**](../Model/GetTargetGroup200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTargetGroups**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetTargetGroups200Response getTargetGroups($accept_language, $count, $offset, $sort_field, $sort_direction, $name, $communication_channel_id)

Get all target groups

Get information about available target groups. ⚠️ The endpoint is available only in the Enterprise interface.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\TargetGroupsApi(
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
$communication_channel_id = "communication_channel_id_example"; // string | The unique ID of the communication channel. List of values is available in resource [GET /communication-channels](/#tag/Communication-channels).

try {
    $result = $apiInstance->getTargetGroups($accept_language, $count, $offset, $sort_field, $sort_direction, $name, $communication_channel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetGroupsApi->getTargetGroups: ', $e->getMessage(), PHP_EOL;
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
 **communication_channel_id** | **string**| The unique ID of the communication channel. List of values is available in resource [GET /communication-channels](/#tag/Communication-channels). | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetTargetGroups200Response**](../Model/GetTargetGroups200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

