# Entrance

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entrance_id** | **string** | The unique ID of the entrance. | 
**pos_id** | **int** | ID of POS system for tickets. Required with path parameter entrance ID. *Possible values are: EPOS - 3 / skidata - 6 / axess - 9 / base - 11* | 
**name** | **string** | Name of the entrance. | [optional] 
**customer_id** | **string** | The unique ID of the customer. [GET /customers](https://carecloud.readme.io/reference/getcustomers) | [optional] 
**resort_name** | **string** | Name of the resort where the entrance is charged. | [optional] 
**customer_category_name** | **string** | Name of the customer category. | [optional] 
**external_order_id** | **string** | ID of an external order created in the POS system. | [optional] 
**external_entrance_id** | **string** | External ID of the entrance. Structure can be different depending on the POS system that created the entrance. | [optional] 
**external_turnstile_permission_id** | **string** | External ID of the permission to open a turnstile. Structure can be different depending on the POS system that created the permission. | [optional] 
**entrance_type_id** | **int** | Type of the entrance. *Possible values are: season ticket - 0 / one day ticket - 1 / multiple day ticket - 2* | [optional] 
**order_item_id** | **string** | Order ID item represents relation between entrance and order item from carecloud e-shop. | [optional] 
**card_id** | **string** | The unique ID of the card used to charge the entrance. [GET /cards](https://carecloud.readme.io/reference/getcards) | 
**created_at** | **string** | Timestamp of the entrance creation in CareCloud. Format: &#x60;YYYY-MM-DD HH:MM:SS&#x60;. All times are in the local timezone. | [optional] 
**cancelled_at** | **string** | Timestamp of the entrance cancellation in CareCloud. Format: &#x60;YYYY-MM-DD HH:MM:SS&#x60;. All times are in the local timezone. | [optional] 
**charged_price** | **float** | Price charged to POS system. | [optional] 
**product_ids** | **string** | The unique ID of the product. [GET /products](https://carecloud.readme.io/reference/getproducts) | [optional] 
**charge_date** | **string** | Timestamp when the entrance will be or was charged to the POS system. Format: &#x60;YYYY-MM-DD HH:MM:SS&#x60;. All times are in the local timezone. | [optional] 
**valid_from** | **string** | Date of the first day when the customer can use the entrance in ISO-8601 format (&#x60;YYYY-MM-DD&#x60;). | [optional] 
**valid_to** | **string** | Date of the last day when the customer can use the entrance in ISO-8601 format (&#x60;YYYY-MM-DD&#x60;). | [optional] 
**last_change** | **string** | Timestamp of the last change. Format: &#x60;YYYY-MM-DD HH:MM:SS&#x60;. All times are in the local timezone. | [optional] 
**state** | **int** | State of the entrance. *Possible values are: 0 - cancelled / 1 - active* | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

