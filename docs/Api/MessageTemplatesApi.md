# CrmCareCloud\Webservice\RestApi\Client\MessageTemplatesApi

All URIs are relative to *https://&lt;projectURL&gt;/webservice/rest-api/enterprise-interface/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMessageTemplate**](MessageTemplatesApi.md#getmessagetemplate) | **GET** /message-templates/{message_template_id} | Get a message template
[**getMessageTemplates**](MessageTemplatesApi.md#getmessagetemplates) | **GET** /message-templates | Get all message templates

# **getMessageTemplate**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20067 getMessageTemplate($message_template_id, $accept_language)

Get a message template

Get information about a specific message template

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\MessageTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_template_id = "message_template_id_example"; // string | The unique id of the message template
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->getMessageTemplate($message_template_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageTemplatesApi->getMessageTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_template_id** | **string**| The unique id of the message template |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20067**](../Model/InlineResponse20067.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessageTemplates**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20066 getMessageTemplates($accept_language, $count, $offset, $sort_field, $sort_direction, $name)

Get all message templates

Get information about message templates as a list of all message templates.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\MessageTemplatesApi(
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
$name = "name_example"; // string | Search record by name or a part of the name

try {
    $result = $apiInstance->getMessageTemplates($accept_language, $count, $offset, $sort_field, $sort_direction, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageTemplatesApi->getMessageTemplates: ', $e->getMessage(), PHP_EOL;
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
 **name** | **string**| Search record by name or a part of the name | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20066**](../Model/InlineResponse20066.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

