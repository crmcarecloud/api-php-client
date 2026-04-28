# ActionsAuthtokenBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_id** | **string** | The unique ID of the customer. [GET /customers](https://carecloud.readme.io/reference/getcustomers) | 
**external_application_id** | **string** | ID of the destination external application. Please provide the destination external application ID, not the token-issuing external application ID. Need a destination external application ID? Please contact your CareCloud administrator. | 
**token_type** | **int** | Sets which token type should be generated. *Possible values: 1 - alphanumeric, 2 - numeric* | [default to TOKEN_TYPE.1]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

