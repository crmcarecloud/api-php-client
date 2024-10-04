# CrmCareCloud\Webservice\RestApi\Client\TestsApi

All URIs are relative to *https://{project_url}/webservice/rest-api/{api_interface}/{version}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTestsConnection**](TestsApi.md#gettestsconnection) | **GET** /tests/connection | Connection test

# **getTestsConnection**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200174 getTestsConnection($test_string)

Connection test

If you need test REST API availability, please use this resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\TestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$test_string = "test_string_example"; // string | A test string sends to REST API. Correct result should revert the string.

try {
    $result = $apiInstance->getTestsConnection($test_string);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestsApi->getTestsConnection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **test_string** | **string**| A test string sends to REST API. Correct result should revert the string. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200174**](../Model/InlineResponse200174.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

