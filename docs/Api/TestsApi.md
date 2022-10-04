# CrmCareCloud\Webservice\RestApi\Client\TestsApi

All URIs are relative to *https://&lt;projectURL&gt;/webservice/rest-api/enterprise-interface/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTestsConnection**](TestsApi.md#gettestsconnection) | **GET** /tests/connection | Connection test

# **getTestsConnection**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200141 getTestsConnection($test_string)

Connection test

If you need test REST API availability, please use this resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\TestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$test_string = "test_string_example"; // string | Test string send to REST API. Correct result should reverted string

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
 **test_string** | **string**| Test string send to REST API. Correct result should reverted string | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200141**](../Model/InlineResponse200141.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

