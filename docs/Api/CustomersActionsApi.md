# CrmCareCloud\Webservice\RestApi\Client\CustomersActionsApi

All URIs are relative to *https://{project_url}/webservice/rest-api/{api_interface}/{version}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomerSearch**](CustomersActionsApi.md#getcustomersearch) | **GET** /customers/actions/search-customers | Search customers
[**postCustomerCancelPushNotifications**](CustomersActionsApi.md#postcustomercancelpushnotifications) | **POST** /customers/actions/cancel-push-notifications | Cancel the customer&#x27;s push notifications subscription from all devices if push token not specified.
[**postCustomerNewslettersSignUp**](CustomersActionsApi.md#postcustomernewsletterssignup) | **POST** /customers/actions/newsletters-sign-up | Sign up for newsletters
[**postCustomerSetPushNotifications**](CustomersActionsApi.md#postcustomersetpushnotifications) | **POST** /customers/actions/set-push-notifications | Set the customer&#x27;s push notifications
[**postCustomerVerifyCredentials**](CustomersActionsApi.md#postcustomerverifycredentials) | **POST** /customers/actions/verify-credentials | Customer&#x27;s credentials verification
[**postCustomerVerifySocialNetworkCredentials**](CustomersActionsApi.md#postcustomerverifysocialnetworkcredentials) | **POST** /customers/actions/verify-social-network-credentials | Social network credentials verification
[**postCustomersCheckRegistrationAbility**](CustomersActionsApi.md#postcustomerscheckregistrationability) | **POST** /customers/actions/check-registration-ability | Check ability to register a customer
[**postCustomersSetStatusRecord**](CustomersActionsApi.md#postcustomerssetstatusrecord) | **POST** /customers/actions/set-status-record | Set a new customer status
[**postCustomersUploadPhoto**](CustomersActionsApi.md#postcustomersuploadphoto) | **POST** /customers/actions/upload-customer-photo | Upload the customer  profile photo
[**postCustomersValidateCustomerData**](CustomersActionsApi.md#postcustomersvalidatecustomerdata) | **POST** /customers/actions/validate-customer-data | Validation of the customer data
[**postCustomersVerifyAuthToken**](CustomersActionsApi.md#postcustomersverifyauthtoken) | **POST** /customers/actions/verify-auth-token | Verify auth token
[**postSubCustomerSetPartners**](CustomersActionsApi.md#postsubcustomersetpartners) | **POST** /customers/actions/set-partners | Set one or multiple partners to the customer

# **getCustomerSearch**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20062 getCustomerSearch($accept_language, $first_name, $last_name, $birthdate, $card_number, $mode)

Search customers

Search all customers matching for parameters.  <p class=\"warning\">⚠️ Action method for search customers is available only in Enterprise interface.</p>

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
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$first_name = "first_name_example"; // string | Search by first name.
$last_name = "last_name_example"; // string | Search by last name.
$birthdate = "birthdate_example"; // string | Customer's date of birth. *Possible values are: YYYY-MM-DD / DD.MM.YYYY*
$card_number = "card_number_example"; // string | Number of the customer card.
$mode = "mode_example"; // string | Mode of search results.  *Possible values are: strict - return only 100% matching results / none - return results in strict mode*  <p class=\"warning\">⚠️ Caution: Strict mode makes all query parameters required. For a successful result you have to set all parameters.</p> <p class=\"warning\">⚠️ Caution: Currently the whole resource is returning results only in strict mode.</p>

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
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **first_name** | **string**| Search by first name. | [optional]
 **last_name** | **string**| Search by last name. | [optional]
 **birthdate** | **string**| Customer&#x27;s date of birth. *Possible values are: YYYY-MM-DD / DD.MM.YYYY* | [optional]
 **card_number** | **string**| Number of the customer card. | [optional]
 **mode** | **string**| Mode of search results.  *Possible values are: strict - return only 100% matching results / none - return results in strict mode*  &lt;p class&#x3D;\&quot;warning\&quot;&gt;⚠️ Caution: Strict mode makes all query parameters required. For a successful result you have to set all parameters.&lt;/p&gt; &lt;p class&#x3D;\&quot;warning\&quot;&gt;⚠️ Caution: Currently the whole resource is returning results only in strict mode.&lt;/p&gt; | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20062**](../Model/InlineResponse20062.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomerCancelPushNotifications**
> postCustomerCancelPushNotifications($body)

Cancel the customer's push notifications subscription from all devices if push token not specified.

⚠️ The endpoint is available only in the Enterprise interface.<br/>

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
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsCancelpushnotificationsBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsCancelpushnotificationsBody | 

try {
    $apiInstance->postCustomerCancelPushNotifications($body);
} catch (Exception $e) {
    echo 'Exception when calling CustomersActionsApi->postCustomerCancelPushNotifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsCancelpushnotificationsBody**](../Model/ActionsCancelpushnotificationsBody.md)|  |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomerNewslettersSignUp**
> postCustomerNewslettersSignUp($body)

Sign up for newsletters

Method sign up a contact for the newsletter. The contact does not need to be an existing customer.  ⚠️ While use this method we strongly recommend you to verify a contact with Captcha before sending a request to CareCloud API

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
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsNewsletterssignupBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsNewsletterssignupBody | 

try {
    $apiInstance->postCustomerNewslettersSignUp($body);
} catch (Exception $e) {
    echo 'Exception when calling CustomersActionsApi->postCustomerNewslettersSignUp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsNewsletterssignupBody**](../Model/ActionsNewsletterssignupBody.md)|  |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomerSetPushNotifications**
> postCustomerSetPushNotifications($body)

Set the customer's push notifications

⚠️ The endpoint is available only in the Enterprise interface.<br/> ⚠️ Please make sure the ID of the device is unique. You will avoid problems with signing off other devices.<br/> Method will set up customer's push notifications to specified application and device.

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
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSetpushnotificationsBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSetpushnotificationsBody | 

try {
    $apiInstance->postCustomerSetPushNotifications($body);
} catch (Exception $e) {
    echo 'Exception when calling CustomersActionsApi->postCustomerSetPushNotifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSetpushnotificationsBody**](../Model/ActionsSetpushnotificationsBody.md)|  |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomerVerifyCredentials**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2018 postCustomerVerifyCredentials($body)

Customer's credentials verification

Verification of a customer account credentials. ⚠️ Action method for verification credentials is available only in the Enterprise interface.

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

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2018**](../Model/InlineResponse2018.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomerVerifySocialNetworkCredentials**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2018 postCustomerVerifySocialNetworkCredentials($body)

Social network credentials verification

Verification of a customer account's social network credentials. ⚠️ Action method for verification credentials is available only in the Enterprise interface.

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

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2018**](../Model/InlineResponse2018.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomersCheckRegistrationAbility**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20064 postCustomersCheckRegistrationAbility($body)

Check ability to register a customer

Check ability to register a customer with his identifier (email or phone number). ⚠️ For use in the Customer interface integration (mobile application, web portal, or kiosk), this action method has to be allowed in CareCloud. Please contact the CareCloud administrator.

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
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsCheckregistrationabilityBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsCheckregistrationabilityBody | 

try {
    $result = $apiInstance->postCustomersCheckRegistrationAbility($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersActionsApi->postCustomersCheckRegistrationAbility: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsCheckregistrationabilityBody**](../Model/ActionsCheckregistrationabilityBody.md)|  |

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20064**](../Model/InlineResponse20064.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomersSetStatusRecord**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20063 postCustomersSetStatusRecord($body)

Set a new customer status

The method sets a new customer status. If another valid status exists, CareCloud deactivates it.<br/> ⚠️ Action method is available only in the Enterprise interface.

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
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSetstatusrecordBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSetstatusrecordBody | 

try {
    $result = $apiInstance->postCustomersSetStatusRecord($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersActionsApi->postCustomersSetStatusRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSetstatusrecordBody**](../Model/ActionsSetstatusrecordBody.md)|  |

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20063**](../Model/InlineResponse20063.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomersUploadPhoto**
> postCustomersUploadPhoto($body)

Upload the customer  profile photo

Method uploads the customer  profile photo. In case if the customer already has a photo, new photo will replace the old one. Maximum size of a picture is 2 MB. <br/> Available formats: `.jpg, .jpeg, .png`

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

# **postCustomersValidateCustomerData**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20061 postCustomersValidateCustomerData($body)

Validation of the customer data

The method validates customer data following the CareCloud validation standards. It allows you to validate and avoid creating customers without a valid password. It also validates the strength of the password.

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
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsValidatecustomerdataBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsValidatecustomerdataBody | 

try {
    $result = $apiInstance->postCustomersValidateCustomerData($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersActionsApi->postCustomersValidateCustomerData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsValidatecustomerdataBody**](../Model/ActionsValidatecustomerdataBody.md)|  |

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20061**](../Model/InlineResponse20061.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomersVerifyAuthToken**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20060 postCustomersVerifyAuthToken($body)

Verify auth token

Method verifies authentication token created by a specified application. There is the unique ID of the customer as a response. <br/> ⚠️ Endpoint method is available only in the Enterprise interface.

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

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20060**](../Model/InlineResponse20060.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSubCustomerSetPartners**
> postSubCustomerSetPartners($body, $accept_language)

Set one or multiple partners to the customer

Set one or multiple partners to the customer.<br/> The method will set all the partners from the request available to the CareCloud API user and delete all that are not present in the request.<br/> If customer has a partner that is unavailable to the user, this partner is not going to be modified or deleted.<br/> ⚠️ Endpoint is available only in the Enterprise interface.<br/>

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
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSetpartnersBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSetpartnersBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $apiInstance->postSubCustomerSetPartners($body, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling CustomersActionsApi->postSubCustomerSetPartners: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSetpartnersBody**](../Model/ActionsSetpartnersBody.md)|  |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

