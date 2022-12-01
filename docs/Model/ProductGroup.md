# ProductGroup

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_group_id** | **string** | The unique id of the product group | [optional] 
**name** | **string** | Name of the product group | 
**parent_product_group_id** | **string** | The unique id of the parent product group. If &#x60;parent_external_id&#x60; is also set, both parameters have to represent the same product group. | [optional] 
**parent_external_id** | **string** | The unique external id of the parent product group. If &#x60;parent_product_group_id&#x60; is also set, both parameters have to represent the same product group. | [optional] 
**code** | **string** | Code of the product group | [optional] 
**external_id** | **string** | The external unique id of the product group | 
**store_id** | **string** | The unique id of the store where the product group is valid. The product group is global if this value is not set | [optional] 
**last_change** | **string** | Date and time of the last change *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**state** | **int** | State of the product group *Possible values are: 0 - deleted / 1 - active / 2 - non active* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

