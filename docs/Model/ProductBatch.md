# ProductBatch

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_id** | **string** | The unique id of the product | [optional] 
**name** | **string** | Name of the product | 
**code** | **string** | Code of the product | [optional] 
**plu_ids** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\PluId[]**](PluId.md) | An array of all available pluIds from the particular product lists (default is Product ID from Global product list (consist cleaned data - unique id of every product across all POS systems)) | 
**product_group_id** | **string** | The unique id of the product group. If &#x60;product_group_external_id&#x60; is also set, both parameters have to represent the same product group. | [optional] 
**product_group_external_id** | **string** | The unique external id of the product group. If &#x60;product_group_id&#x60; is also set, both parameters have to represent the same product group. | [optional] 
**product_brand_id** | **string** | The unique id of the product brand. If &#x60;product_brand_external_id&#x60; is also set, both parameters have to represent the same product brand. | [optional] 
**product_brand_external_id** | **string** | The unique external id of the product brand. If &#x60;product_brand_id&#x60; is also set, both parameters have to represent the same product brand. | [optional] 
**store_id** | **string** | The unique id of the store where the product group is valid. The product group is global if this value is not set | [optional] 
**property_records** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\PropertyRecord[]**](PropertyRecord.md) | List of an additional properties | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

