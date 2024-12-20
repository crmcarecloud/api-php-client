# CrmCareCloud\Webservice\RestApi\Client\LanguagesApi

All URIs are relative to *https://{project_url}/webservice/rest-api/{api_interface}/{version}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLanguages**](LanguagesApi.md#getlanguages) | **GET** /languages | Get all languages

# **getLanguages**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetLanguages200Response getLanguages($accept_language, $language_list_type, $default_language)

Get all languages

Get a list of all languages accepted in CRM CareCloud.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\LanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$language_list_type = "carecloud-api"; // string | Type of language list. All lists can be managed from the CareCloud administration interface. *Possible values: customer-communication - list of languages used for communication with the customer (emails, notifications or text messages) / web-portal - list of languages for CareCloud web portal / carecloud-api - languages supported by CareCloud REST API (API communicates in these languages).*
$default_language = false; // bool | Default language of the project. If true, the endpoint returns only default language of the project.

try {
    $result = $apiInstance->getLanguages($accept_language, $language_list_type, $default_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LanguagesApi->getLanguages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **language_list_type** | **string**| Type of language list. All lists can be managed from the CareCloud administration interface. *Possible values: customer-communication - list of languages used for communication with the customer (emails, notifications or text messages) / web-portal - list of languages for CareCloud web portal / carecloud-api - languages supported by CareCloud REST API (API communicates in these languages).* | [optional] [default to carecloud-api]
 **default_language** | **bool**| Default language of the project. If true, the endpoint returns only default language of the project. | [optional] [default to false]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetLanguages200Response**](../Model/GetLanguages200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

