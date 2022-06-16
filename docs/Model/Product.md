# Product

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_id** | **string** | The unique id of the product | [optional] 
**name** | **string** | Name of the product | [optional] 
**code** | **string** | Code of the product | [optional] 
**external_id** | **string** | The external unique id of the product. This parameter is depracated. Please use parameter &#x60;plu_ids&#x60; | [optional] 
**plu_ids** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\PluId[]**](PluId.md) | An array of all available pluIds from the particular product lists (default is Product ID from Global product list (consist cleaned data - unique id for every product across all POS systems)). | [optional] 
**product_group_id** | **string** | The unique id for the product group | [optional] 
**product_brand_id** | **string** | The unique id for the product brand | [optional] 
**additional_properties** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\PropertyRecord[]**](PropertyRecord.md) | List of additional properties | [optional] 
**last_change** | **string** | Date and time of the last change *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**state** | **int** | State of the product *Possible values are: 0 - deleted / 1 - active / 2 - non active* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

