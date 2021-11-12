# ProductReservation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_reservation_id** | **string** | The unique id of the product reservation | [optional] 
**customer_id** | **string** | The unique id of the customer, owner of the product reservation | 
**store_id** | **string** | The unique id of the store tied to the reservation | 
**reservation_codes** | **string[]** | Ids of the reservation | [optional] 
**external_reservation_codes** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ExternalCode[]**](ExternalCode.md) | List of external id codes. Id codes can have different sources. For the list of id sources please contact your account manager. | [optional] 
**benefit_codes** | **string[]** | List of the benefit (rewards, vouchers) codes used in a reservation. After the reservation is delivered, all benefits are applied on the customer&#x27;s account | [optional] 
**product_reservation_source_id** | **string** | The unique id of the product reservation source | 
**pickup_date** | **string** | Date of the reservation pickup in the tied store (YYYY-MM-DD) | [optional] 
**customers_note** | **string** | Customer’s note for the merchant | [optional] 
**total_price** | **float** | Total price of reservation If currency_id, than total_price is mandatory | [optional] 
**currency_id** | **string** | Id of the currency. If total_price is set, than currency_id is mandatory | [optional] 
**product_reservation_items** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ProductReservationItem[]**](ProductReservationItem.md) | List of the Product Reservation Items | [optional] 
**external_purchase_id** | **string** | The unique external id of the purchase | [optional] 
**utm** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\UTM**](UTM.md) |  | [optional] 
**actual_state** | **int** | Actual state of the product reservation. *Possible values: 0 - Canceled / 1 - Entered / 2 - Accepted / 3 - Ready / 4 - Delivered / 5 - In progress / 6 - Not Picked up / 7 - Ordered / 8 - Being solved /_* | [optional] 
**states** | **string[]** | History of the state values. States are sorted in descending order by time | [optional] 
**comments** | **string[]** | Reservation comments. Comments are sorted in descending order by time | [optional] 
**last_change** | **string** | Date and time of the last change *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**state** | **int** | State of the product reservation *Possible values are: 0 - deleted / 1 - active / 2 - non active* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

