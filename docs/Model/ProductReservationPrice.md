# ProductReservationPrice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_reservation_price_id** | **string** | The unique ID of the product reservation price. | [optional] 
**reservable_product_id** | **string** | The unique ID of the reservable product. This represents relation in between price and product. Required if &#x60;plu_ids&#x60; is not set. | [optional] 
**plu_ids** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\PluId[]**](PluId.md) | An array of all available pluIDs from the particular product lists (default is Product ID from Global product list (consist cleaned data - unique ID of every product across all POS systems)).  This is an alternative to  &#x60;reservable_product_id&#x60;. It will accept only products that could be reserved.  Required if &#x60;reservable_product_id&#x60; is not set. | [optional] 
**value** | **float** | Value of a price for store and currency. | 
**currency_id** | **string** | ID of the currency. If total_price is set, then currency_id is mandatory. | 
**store_id** | **string** | The unique ID of the store tied to the product reservation price. Prices of product can vary depending on the store. | [optional] 
**last_change** | **string** | Date and time of the last change. *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**state** | **int** | State of the product reservation. *Possible values are: 0 - deleted / 1 - active * | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

