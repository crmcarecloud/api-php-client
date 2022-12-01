# CustomersBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\Customer**](Customer.md) |  | 
**customer_source** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\CustomerSourceRecord**](CustomerSourceRecord.md) |  | 
**password** | **string** | Password of the customer. Password must satisfy the following criteria and contain: At least one number (Example: 1 2 3); At least one uppercase letter (Example: A B C); Minimum lenght of password is 8 characters; Password is not part of a common password list (Example: abc123, password, 12345). If parameter &#x60;autologin&#x3D;true&#x60;, password is required, otherwise is optional. | [optional] 
**autologin** | **bool** | If true, password is required and customer is logged in. Otherwise password is optional | 
**social_network_credentials** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\SocialNetworkCredentials**](SocialNetworkCredentials.md) |  | [optional] 
**property_records** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\PropertyRecord[]**](PropertyRecord.md) | List of an customer property records | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

