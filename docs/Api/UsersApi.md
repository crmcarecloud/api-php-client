# CrmCareCloud\Webservice\RestApi\Client\UsersApi

All URIs are relative to *https://{project_url}/webservice/rest-api/{api_interface}/{version}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUser**](UsersApi.md#getuser) | **GET** /users/{user_id} | Get information about a user
[**getUsers**](UsersApi.md#getusers) | **GET** /users | Get all users
[**postUserLogin**](UsersApi.md#postuserlogin) | **POST** /users/actions/login | User login
[**postUserLogout**](UsersApi.md#postuserlogout) | **POST** /users/actions/logout | User logout
[**postUserSsoLogin**](UsersApi.md#postuserssologin) | **POST** /users/actions/sso-login | User SSO login
[**postUserVerifyAuthToken**](UsersApi.md#postuserverifyauthtoken) | **POST** /users/actions/verify-auth-token | Verify user auth token

# **getUser**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200177 getUser($user_id, $accept_language)

Get information about a user

Get information about a specific user.<br/> ⚠️ Endpoint is available only in the Enterprise interface.<br/>

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The unique ID of the user.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->getUser($user_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The unique ID of the user. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200177**](../Model/InlineResponse200177.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsers**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200176 getUsers($accept_language, $count, $offset, $sort_field, $sort_direction, $email, $phone, $login, $first_name, $last_name, $store_id)

Get all users

Get a list of all users in CareCloud.<br/> ⚠️ Endpoint is available only in the Enterprise interface.<br/> ⚠️ This endpoint is disabled by default. Please contact the CareCloud administrator to allow usage of this method.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\UsersApi(
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
$email = "email_example"; // string | Search by email.
$phone = "phone_example"; // string | Phone number with international prefix (420000000).
$login = "login_example"; // string | Search by login.
$first_name = "first_name_example"; // string | Search by first name.
$last_name = "last_name_example"; // string | Search by last name.
$store_id = "store_id_example"; // string | The unique ID of the store in CareCloud.

try {
    $result = $apiInstance->getUsers($accept_language, $count, $offset, $sort_field, $sort_direction, $email, $phone, $login, $first_name, $last_name, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUsers: ', $e->getMessage(), PHP_EOL;
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
 **email** | **string**| Search by email. | [optional]
 **phone** | **string**| Phone number with international prefix (420000000). | [optional]
 **login** | **string**| Search by login. | [optional]
 **first_name** | **string**| Search by first name. | [optional]
 **last_name** | **string**| Search by last name. | [optional]
 **store_id** | **string**| The unique ID of the store in CareCloud. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200176**](../Model/InlineResponse200176.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUserLogin**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200179 postUserLogin($body, $accept_language)

User login

User login to external application.<br/> ⚠️ Endpoint is available only in the Enterprise interface.<br/>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsLoginBody1(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsLoginBody1 | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->postUserLogin($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postUserLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsLoginBody1**](../Model/ActionsLoginBody1.md)|  |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200179**](../Model/InlineResponse200179.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUserLogout**
> postUserLogout($body, $accept_language)

User logout

User logout from external application.<br/> ⚠️ Endpoint is available only in the Enterprise interface.<br/>

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsLogoutBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsLogoutBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $apiInstance->postUserLogout($body, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postUserLogout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsLogoutBody**](../Model/ActionsLogoutBody.md)|  |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUserSsoLogin**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200180 postUserSsoLogin($body, $accept_language)

User SSO login

User Signe sign-on login to external application. In this case it is necessary cary SSO token from CareCloud to login user.<br/> ⚠️ Endpoint is available only in the Enterprise interface.<br/>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSsologinBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSsologinBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->postUserSsoLogin($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postUserSsoLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSsologinBody**](../Model/ActionsSsologinBody.md)|  |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200180**](../Model/InlineResponse200180.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUserVerifyAuthToken**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200178 postUserVerifyAuthToken($body)

Verify user auth token

Verification of the user auth token.<br/> ⚠️ Endpoint is available only in the Enterprise interface.<br/>

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsVerifyauthtokenBody1(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsVerifyauthtokenBody1 | 

try {
    $result = $apiInstance->postUserVerifyAuthToken($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postUserVerifyAuthToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsVerifyauthtokenBody1**](../Model/ActionsVerifyauthtokenBody1.md)|  |

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200178**](../Model/InlineResponse200178.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

