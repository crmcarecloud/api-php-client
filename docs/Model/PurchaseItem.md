# PurchaseItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchase_item_id** | **string** | The unique ID of the purchase item. | [optional] 
**product_id** | **string** | The unique ID of the [product](https://carecloud.readme.io/reference/getproducts). | 
**product_name** | **string** | The unique name of the [product](https://carecloud.readme.io/reference/getproducts). | [optional] 
**product_group_id** | **string** | The unique ID of the product group. | [optional] 
**product_group_name** | **string** | The unique ID of the product group. | [optional] 
**product_brand_id** | **string** | The unique ID of the product brand. | [optional] 
**product_brand_name** | **string** | The unique ID of the product brand. | [optional] 
**external_id** | **string** | Identifier of the purchase item in external system. | [optional] 
**purchase_item_type_id** | **string** | Type of the purchase item.There is a distinction between a purchase in an e-shop, in a brick-and-mortar store, a mobile application, or a cancellation of the purchase. It also differentiates purchases without the possibility of applying loyalty benefits from ordinary purchases or from purchases with the application of loyalty points. | 
**price** | **float** | Price of the purchase item. | 
**amount** | **float** | Amount of the purchase item. | 
**vat_rate** | **float** | The rate of an item VAT. | 
**additional_properties** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\PropertyRecord[]**](PropertyRecord.md) | List of additional properties. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

