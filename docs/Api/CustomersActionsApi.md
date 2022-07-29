# CrmCareCloud\Webservice\RestApi\Client\CustomersActionsApi

All URIs are relative to *https://&lt;projectURL&gt;/webservice/rest-api/enterprise-interface/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomerSearch**](CustomersActionsApi.md#getcustomersearch) | **GET** /customers/actions/search-customers | Search customers
[**postCustomerVerifyCredentials**](CustomersActionsApi.md#postcustomerverifycredentials) | **POST** /customers/actions/verify-credentials | Customer credentials verification
[**postCustomerVerifySocialNetworkCredentials**](CustomersActionsApi.md#postcustomerverifysocialnetworkcredentials) | **POST** /customers/actions/verify-social-network-credentials | Social network credentials verification
[**postCustomersUploadPhoto**](CustomersActionsApi.md#postcustomersuploadphoto) | **POST** /customers/actions/upload-customer-photo | Upload customer&#x27;s profile photo
[**postCustomersVerifyAuthToken**](CustomersActionsApi.md#postcustomersverifyauthtoken) | **POST** /customers/actions/verify-auth-token | Verify auth token

# **getCustomerSearch**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20039 getCustomerSearch($accept_language, $first_name, $last_name, $birthdate, $card_number, $mode)

Search customers

Search all customers matching for parameters  <p class=\"warning\">⚠️ Action method for search customers is available only in Enterprise interface.</p>

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$first_name = "first_name_example"; // string | Search by first name
$last_name = "last_name_example"; // string | Search by last name
$birthdate = "birthdate_example"; // string | Customer's date of birth. *Possible values are: YYYY-MM-DD / DD.MM.YYYY*
$card_number = "card_number_example"; // string | Number of the customer card
$mode = "mode_example"; // string | Mode of search results.  *Possible values are: strict - return only 100% matching results*  <p class=\"warning\">⚠️ Caution: Strict mode makes all path parameters as required. For succesful result you have to set all parameters.</p>

try {
    $result = $apiInstance->getCustomerSearch($accept_language, $first_name, $last_name, $birthdate, $card_number, $mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersActionsApi->getCustomerSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **first_name** | **string**| Search by first name | [optional]
 **last_name** | **string**| Search by last name | [optional]
 **birthdate** | **string**| Customer&#x27;s date of birth. *Possible values are: YYYY-MM-DD / DD.MM.YYYY* | [optional]
 **card_number** | **string**| Number of the customer card | [optional]
 **mode** | **string**| Mode of search results.  *Possible values are: strict - return only 100% matching results*  &lt;p class&#x3D;\&quot;warning\&quot;&gt;⚠️ Caution: Strict mode makes all path parameters as required. For succesful result you have to set all parameters.&lt;/p&gt; | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20039**](../Model/InlineResponse20039.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomerVerifyCredentials**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2017 postCustomerVerifyCredentials($body)

Customer credentials verification

Verification of a Customer account credentials  <p class=\"warning\">⚠️ Action method for verification credentials is available only in Enterprise interface.</p>

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsVerifycredentialsBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsVerifycredentialsBody | 

try {
    $result = $apiInstance->postCustomerVerifyCredentials($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersActionsApi->postCustomerVerifyCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsVerifycredentialsBody**](../Model/ActionsVerifycredentialsBody.md)|  |

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2017**](../Model/InlineResponse2017.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomerVerifySocialNetworkCredentials**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2017 postCustomerVerifySocialNetworkCredentials($body)

Social network credentials verification

Verification of a Customer account Social network credentials  <p class=\"warning\">⚠️ Action method for verification credentials is available only in Enterprise interface.</p>

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsVerifysocialnetworkcredentialsBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsVerifysocialnetworkcredentialsBody | 

try {
    $result = $apiInstance->postCustomerVerifySocialNetworkCredentials($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersActionsApi->postCustomerVerifySocialNetworkCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsVerifysocialnetworkcredentialsBody**](../Model/ActionsVerifysocialnetworkcredentialsBody.md)|  |

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2017**](../Model/InlineResponse2017.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomersUploadPhoto**
> postCustomersUploadPhoto($body)

Upload customer's profile photo

Method uploads cusomer's profile photo. In case customer already has a photo, new photo will replace the old one. Maximum size of picture is 2 MB. <br/> Available formats: `.jpg, .jpeg, .png`

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsUploadcustomerphotoBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsUploadcustomerphotoBody | 

try {
    $apiInstance->postCustomersUploadPhoto($body);
} catch (Exception $e) {
    echo 'Exception when calling CustomersActionsApi->postCustomersUploadPhoto: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsUploadcustomerphotoBody**](../Model/ActionsUploadcustomerphotoBody.md)|  |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomersVerifyAuthToken**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2017 postCustomersVerifyAuthToken($body)

Verify auth token

Method verifies authentication token created by a specified application. There is the unique id of the customer as a response.  <p class=\"warning\">⚠️ Action method is available only in Enterprise interface.</p>

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsVerifyauthtokenBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsVerifyauthtokenBody | 

try {
    $result = $apiInstance->postCustomersVerifyAuthToken($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersActionsApi->postCustomersVerifyAuthToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsVerifyauthtokenBody**](../Model/ActionsVerifyauthtokenBody.md)|  |

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2017**](../Model/InlineResponse2017.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

