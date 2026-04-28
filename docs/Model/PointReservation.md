# PointReservation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**points_reservation_id** | **string** | The unique ID of the point reservation record. | [optional] 
**customer_id** | **string** | The unique ID of the customer. | 
**external_id** | **string** | The external unique ID of the point reservation. You can use your own ID (could be an order ID or reservation ID from your system/application) that will help you identify and filter the point reservation later. | 
**quantity** | **float** | The number of reserved points. | 
**state** | **int** | State of the point reservation. *Possible values are: 0 - deleted / 1 - active / 2 - non active(expired)* | [optional] 
**expiration** | **string** | Timestamp of the point reservation expiration. Accepts the format &#x60;YYYY-MM-DD HH:MM:SS&#x60; or ISO-8601 format (&#x60;YYYY-MM-DDTHH:MM:SS&#x60;). All times must be in the local timezone. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

