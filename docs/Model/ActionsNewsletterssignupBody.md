# ActionsNewsletterssignupBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contact** | **string** | The parameter could contain email, phone number or other identifier of the contact. | 
**customer_source_id** | **string** | The unique ID of the customer source. | 
**agreements** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\Agreement**](Agreement.md) |  | [optional] 
**language_id** | **string** | The unique ID of the language by ISO 639-1 code. | [optional] 
**partner_records** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\PartnerRecord[]**](PartnerRecord.md) | List of partners to associate with the signed-up contact. When provided as a non-empty array, partner assignment is based solely on this list. An empty array is treated the same as omitting this field. See the partner assignment rules in the endpoint description for the full precedence logic. [GET /partners](https://carecloud.readme.io/reference/getpartners) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

