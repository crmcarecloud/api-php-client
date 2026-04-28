# ActionsVerifyauthtokenBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**application_id** | **string** | ID of the destination external application where the customer is being verified. Provide the destination external application ID, not the token-issuing external application ID. Need a destination external application ID? Please contact your CareCloud administrator. | 
**token** | **string** | Authentication token | 
**token_request_id** | **string** | The parameter specifies the request that caused the token to be created. If two customers generated an authentication token at the same time and in the same application, the token_request_id parameter represents additional verification to identify the correct token. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

