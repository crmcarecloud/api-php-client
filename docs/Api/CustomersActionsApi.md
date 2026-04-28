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
[**postCustomersAuthToken**](CustomersActionsApi.md#postcustomersauthtoken) | **POST** /customers/actions/auth-token | Get authentication token for a customer
[**postCustomersCheckRegistrationAbility**](CustomersActionsApi.md#postcustomerscheckregistrationability) | **POST** /customers/actions/check-registration-ability | Check ability to register a customer
[**postCustomersSetStatusRecord**](CustomersActionsApi.md#postcustomerssetstatusrecord) | **POST** /customers/actions/set-status-record | Set a new customer status
[**postCustomersUploadPhoto**](CustomersActionsApi.md#postcustomersuploadphoto) | **POST** /customers/actions/upload-customer-photo | Upload a customer profile photo
[**postCustomersValidateCustomerData**](CustomersActionsApi.md#postcustomersvalidatecustomerdata) | **POST** /customers/actions/validate-customer-data | Validation of the customer data
[**postCustomersVerifyAuthToken**](CustomersActionsApi.md#postcustomersverifyauthtoken) | **POST** /customers/actions/verify-auth-token | Verify auth token
[**postSubCustomerSetPartners**](CustomersActionsApi.md#postsubcustomersetpartners) | **POST** /customers/actions/set-partners | Set one or multiple partners to the customer

# **getCustomerSearch**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetCustomersSearch200Response getCustomerSearch($accept_language, $first_name, $last_name, $birthdate, $card_number, $mode)

Search customers

Search all customers matching for parameters.  Searches across customer accounts by name, date of birth, card number, email, phone, or external ID simultaneously. Unlike [GET /customers](https://carecloud.readme.io/reference/getcustomers), this endpoint combines all identifying fields in a single search and is optimised for point-of-sale customer lookup and identification workflows.  ⚠️ Action method for search customers is available only in Enterprise interface.

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
$birthdate = "birthdate_example"; // string | Customer's date of birth. Accepts the format `YYYY-MM-DD` or `DD.MM.YYYY`.
$card_number = "card_number_example"; // string | Number of the customer card.
$mode = "mode_example"; // string | Mode of search results.  *Possible values are: strict - return only 100% matching results / none - return results without strict matching (default behavior, all query parameters are optional)*  ⚠️ Caution: Strict mode makes all query parameters required. For a successful result you have to set all parameters.  ⚠️ Caution: Currently the whole resource is returning results only in strict mode.

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
 **birthdate** | **string**| Customer&#x27;s date of birth. Accepts the format &#x60;YYYY-MM-DD&#x60; or &#x60;DD.MM.YYYY&#x60;. | [optional]
 **card_number** | **string**| Number of the customer card. | [optional]
 **mode** | **string**| Mode of search results.  *Possible values are: strict - return only 100% matching results / none - return results without strict matching (default behavior, all query parameters are optional)*  ⚠️ Caution: Strict mode makes all query parameters required. For a successful result you have to set all parameters.  ⚠️ Caution: Currently the whole resource is returning results only in strict mode. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetCustomersSearch200Response**](../Model/GetCustomersSearch200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomerCancelPushNotifications**
> postCustomerCancelPushNotifications($body)

Cancel the customer's push notifications subscription from all devices if push token not specified.

Cancel push notification subscriptions for a customer.  Unregisters a customer's push notification token for a specified external application. If `push_token` is provided, only that specific device registration is removed. If `push_token` is omitted, all device registrations for the customer and application are cancelled.  To register a device for push notifications, use [POST /customers/actions/set-push-notifications](https://carecloud.readme.io/reference/postcustomersetpushnotifications) (enterprise interface only).  ⚠️ The endpoint is available only in the Enterprise interface.

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

Sign up a contact for the newsletter. The contact does not need to be an existing customer. ⚠️ We strongly recommend verifying the contact with CAPTCHA before sending a request to CareCloud API.  **Partner assignment**  When a contact is signed up, CareCloud creates one or more customer-partner relations. The assignment is determined as follows:  - If `partner_records` is provided (non-empty array) - relations are created for exactly those partners. - If `partner_records` is an empty array (`[]`) or omitted - relations are created for all partners accessible to the authenticated API user.  Because this endpoint returns no customer ID, partner assignment cannot be managed after the call. Use `partner_records` to control assignment at sign-up time.

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

Set up customer push notifications for a specific application and device.  Registers a push notification token (Apple or Android) for a customer account and links it to the specified external application and device ID. This enables the CareCloud platform to send push notifications to the customer's device. If a token is already registered for the same device ID, it is replaced.  To unregister a device, use [POST /customers/actions/cancel-push-notifications](https://carecloud.readme.io/reference/postcustomercancelpushnotifications) (enterprise interface only).  ⚠️ The endpoint is available only in the Enterprise interface. ⚠️ Please make sure the ID of the device is unique. You will avoid problems with signing off other devices.

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
> \CrmCareCloud\Webservice\RestApi\Client\Model\PostCustomerVerifyCredentials200Response postCustomerVerifyCredentials($body)

Customer's credentials verification

Verification of a customer account credentials.  Validates a customer's login credentials (email address and password) against their CareCloud account. Returns the customer ID if the credentials are valid. Use this endpoint to authenticate a customer before granting access to a service or application.  ⚠️ Action method for verification credentials is available only in the Enterprise interface.

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

[**\CrmCareCloud\Webservice\RestApi\Client\Model\PostCustomerVerifyCredentials200Response**](../Model/PostCustomerVerifyCredentials200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomerVerifySocialNetworkCredentials**
> \CrmCareCloud\Webservice\RestApi\Client\Model\PostCustomerVerifySocialNetworkCredentials200Response postCustomerVerifySocialNetworkCredentials($body)

Social network credentials verification

Verification of a customer account's social network credentials.  Validates a customer's social network token against their CareCloud account. Returns the customer ID if the credentials are valid. Use this endpoint to authenticate a customer who has linked a social network account to their CareCloud profile.  ⚠️ Action method for verification credentials is available only in the Enterprise interface.

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

[**\CrmCareCloud\Webservice\RestApi\Client\Model\PostCustomerVerifySocialNetworkCredentials200Response**](../Model/PostCustomerVerifySocialNetworkCredentials200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomersAuthToken**
> \CrmCareCloud\Webservice\RestApi\Client\Model\PostCustomersAuthToken200Response postCustomersAuthToken($body, $accept_language)

Get authentication token for a customer

Returns an authentication token for a specific customer. Another application that uses the CareCloud API can use this token to verify the customer's identity or authenticate the customer.  Typical uses include initiating customer sign-in in another application or portal, or passing a customer's identity to an in-app browser for a different application.  ⚠️ Endpoint is available only in the Enterprise interface.

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
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsAuthtokenBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsAuthtokenBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->postCustomersAuthToken($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersActionsApi->postCustomersAuthToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsAuthtokenBody**](../Model/ActionsAuthtokenBody.md)|  |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\PostCustomersAuthToken200Response**](../Model/PostCustomersAuthToken200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomersCheckRegistrationAbility**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetCustomerCheckRegistrationAbility200Response postCustomersCheckRegistrationAbility($body)

Check ability to register a customer

Check ability to register a customer with his identifier (email or phone number).  Determines whether the given identifier is available for new customer registration - for example, whether it is already associated with an existing account. Use this endpoint before submitting a registration form to provide early feedback to the user.  ⚠️ For use in the Customer interface integration (mobile application, web portal, or kiosk), this action method has to be allowed in CareCloud. Please contact the CareCloud administrator.

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

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetCustomerCheckRegistrationAbility200Response**](../Model/GetCustomerCheckRegistrationAbility200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomersSetStatusRecord**
> \CrmCareCloud\Webservice\RestApi\Client\Model\PostCustomersSetStatusRecord200Response postCustomersSetStatusRecord($body)

Set a new customer status

The method sets a new customer status. If another valid status exists, CareCloud deactivates it.  Customer statuses represent the customer's tier or standing within a loyalty program. Only one status can be active at a time. Setting a new status automatically deactivates any currently active status on the account. The response returns the ID of the created status record.  To view current and past status records on a customer account, use [GET /customers/{customer_id}/statuses](https://carecloud.readme.io/reference/getsubcustomerstatus).  ⚠️ Action method is available only in the Enterprise interface.

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

[**\CrmCareCloud\Webservice\RestApi\Client\Model\PostCustomersSetStatusRecord200Response**](../Model/PostCustomersSetStatusRecord200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomersUploadPhoto**
> postCustomersUploadPhoto($body)

Upload a customer profile photo

Upload a customer profile photo. If the customer already has a photo, the new photo replaces the old one. Maximum size is 2 MB.  Available formats: `.jpg, .jpeg, .png`

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
> \CrmCareCloud\Webservice\RestApi\Client\Model\PostCustomerValidateCustomerData200Response postCustomersValidateCustomerData($body)

Validation of the customer data

The method validates customer data following the CareCloud validation standards. It allows you to validate and avoid creating customers without a valid password. It also validates the strength of the password.  Call this endpoint before [POST /customers](https://carecloud.readme.io/reference/postcustomer) to verify that the proposed password meets the required strength criteria. This endpoint does not require authentication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

[**\CrmCareCloud\Webservice\RestApi\Client\Model\PostCustomerValidateCustomerData200Response**](../Model/PostCustomerValidateCustomerData200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomersVerifyAuthToken**
> \CrmCareCloud\Webservice\RestApi\Client\Model\PostCustomerVerifyAuthToken200Response postCustomersVerifyAuthToken($body)

Verify auth token

Method verifies authentication token created by a specified application. There is the unique ID of the customer as a response. ⚠️ Endpoint method is available only in the Enterprise interface.

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

[**\CrmCareCloud\Webservice\RestApi\Client\Model\PostCustomerVerifyAuthToken200Response**](../Model/PostCustomerVerifyAuthToken200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSubCustomerSetPartners**
> postSubCustomerSetPartners($body, $accept_language)

Set one or multiple partners to the customer

Set one or multiple partners to the customer. The method will set all the partners from the request available to the CareCloud API user and delete all that are not present in the request. If customer has a partner that is unavailable to the user, this partner is not going to be modified or deleted. ⚠️ Endpoint is available only in the Enterprise interface.

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

