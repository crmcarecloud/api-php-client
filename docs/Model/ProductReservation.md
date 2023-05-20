# ProductReservation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_reservation_id** | **string** | The unique ID of the product reservation. | [optional] 
**customer_id** | **string** | The unique ID of the customer, owner of the product reservation. | 
**store_id** | **string** | The unique ID of the store tied to the reservation. | 
**reservation_codes** | **string[]** | Reservation codes of the reservation from CareCloud. | [optional] 
**external_reservation_codes** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ExternalCode[]**](ExternalCode.md) | List of the external reservation codes. Id codes can have different sources. Please get in touch with your account manager for the list of ID sources. | [optional] 
**benefit_codes** | **string[]** | List of the benefit (rewards, vouchers) codes used in a reservation. After the reservation is delivered, all benefits are applied on the customer account. | [optional] 
**product_reservation_source_id** | **string** | The unique ID of the product reservation source. | 
**pickup_date** | **string** | Date of the reservation pickup in the tied store. *(YYYY-MM-DD)* | [optional] 
**customers_note** | **string** | Customer’s note for the merchant. | [optional] 
**total_price** | **float** | Total price of reservation. If currency_id is set, then total_price is mandatory. | [optional] 
**currency_id** | **string** | ID of the currency. If total_price is set, then currency_id is mandatory. | [optional] 
**product_reservation_items** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ProductReservationItem[]**](ProductReservationItem.md) | List of the Product Reservation Items. | [optional] 
**external_purchase_id** | **string** | The unique external ID of the purchase. | [optional] 
**utm** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\UTM**](UTM.md) |  | [optional] 
**actual_state** | **int** | Current progress of the product reservation. *Possible values: 0 - Canceled / 1 - Entered / 2 - Accepted / 3 - Ready / 4 - Delivered / 5 - In progress / 6 - Not Picked up / 7 - Ordered / 8 - Being solved /_* | [optional] 
**reservation_progress_history** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ProductReservationProgress[]**](ProductReservationProgress.md) | History of the product reservation progress. Product reservation progress is sorted in descending order by time. | [optional] 
**comments** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ProductReservationComment[]**](ProductReservationComment.md) | Product reservation comments. Comments are sorted in descending order by time. | [optional] 
**last_change** | **string** | Date and time of the last change. *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**state** | **int** | State of the product reservation. *Possible values are: 0 - deleted / 1 - active * | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

