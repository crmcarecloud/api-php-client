# ActionsAuthenticationtokenloginBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**application_id** | **string** | ID of the destination external application. Please provide the destination external application ID, not the token-issuing external application ID. Need a destination external application ID? Please contact your CareCloud administrator. | 
**token** | **string** | Authentication token | 
**token_request_id** | **string** | The parameter specifies the request that caused the token to be created. If two customers generated an authentication token at the same time and in the same application, the token_request_id parameter represents doubled verification to identify the correct token. In case you dont need to have two factor authentication, please send both parameters (token and token_request_id) one way. For example in HTTP Authentication header. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

