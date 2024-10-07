# BillItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**plu_ids** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\PluId[]**](PluId.md) | An array of all available pluIds from the particular product lists (default is Product ID from Global product list (consist cleaned data - unique ID of every product across all POS systems)). | 
**plu_name** | **string** | Product name. | 
**category_plu_id** | **string** | Product group ID identify the product group in the system outside of CareCloud (POS, e-shop, etc.). Consist cleaned data - unique ID of every product group across all POS systems. This parameter needs to be set only if product learning is activated. If not set during product learning the default product group will be used. | [optional] 
**vat_rate** | **float** | VAT rate of the item. | 
**quantity** | **float** | Quantity of product. | 
**paid_amount** | **float** | Real money value (unit price * quantity) paid by the customer (The value for a pharmaceutical client could have a copayment for drug prescription or money value of drugs not covered by an insurer). | 
**price** | **float** | Value of parameter \&quot;paid_amount\&quot;. In the case of a pharmaceutical client, add to the value of \&quot;paid_amount\&quot; a value of money covered by the customer  health insurance. | 
**bill_item_id** | **string** | ID of the bill item. | 
**loyalty_off** | **bool** | Switch off all loyalty benefits (points, discounts- instant and campaign prices, vouchers) on the item. | 
**purchase_item_type_id** | **string** | Type of the purchase item from resource [purchase-item-types](https://carecloud.readme.io/reference/getpurchaseitemtypes).There is a distinction between a purchase in an e-shop, in a brick-and-mortar store, a mobile application, or a cancellation of the purchase. It also differentiates purchases without the possibility of applying loyalty benefits from ordinary purchases or from purchases with the application of loyalty points. | 
**customer_id** | **string** | The ID of the customer. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

