# ProductBatch

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_id** | **string** | The unique id of the product | [optional] 
**name** | **string** | Name of the product | 
**code** | **string** | Code of the product | 
**plu_ids** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\PluId[]**](PluId.md) | An array of all available pluIds from the particular product lists (default is Product ID from Global product list (consist cleaned data - unique id for every product across all POS systems)) | 
**product_group_id** | **string** | The unique id for the product group. If &#x60;product_group_external_id&#x60; is also set, both parameters have to represent the same product group. | [optional] 
**product_group_external_id** | **string** | The unique external id for the product group. If &#x60;product_group_id&#x60; is also set, both parameters have to represent the same product group. | [optional] 
**product_brand_id** | **string** | The unique id for the product brand. If &#x60;product_brand_external_id&#x60; is also set, both parameters have to represent the same product brand. | [optional] 
**product_brand_external_id** | **string** | The unique external id for the product brand. If &#x60;product_brand_id&#x60; is also set, both parameters have to represent the same product brand. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

