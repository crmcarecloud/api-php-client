# Entrance

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entrance_id** | **string** | The unique ID of the entrance. | 
**pos_id** | **int** | ID of POS system for tickets. Required with path parameter entrance ID. *Possible values are: EPOS - 3 / skidata - 6 / axess - 9 / base - 11* | 
**name** | **string** | Name of the entrance. | [optional] 
**customer_id** | **string** | The unique ID of the customer. | [optional] 
**resort_name** | **string** | Name of the resort where is an entrance charged. | [optional] 
**customer_category_name** | **string** | Name of the customer category. | [optional] 
**external_order_id** | **string** | ID of an external order creaded in POS system. | [optional] 
**external_entrance_id** | **string** | External ID of the entrance. Structure can be different depends of the POS system, that created the entrance. | [optional] 
**external_turnstile_permission_id** | **string** | External ID of the permission to open a turnstile. Structure can be different depends of the POS system, that created the permission. | [optional] 
**entrance_type_id** | **int** | Type of the entrance *Possible values are: season ticket - 0/ one day ticket -1/ multiple day ticket - 2* | [optional] 
**order_item_id** | **string** | Order ID item represents relation between entrance and order item from carecloud e-shop. | [optional] 
**card_id** | **string** | ID of card used for charge entrance. | 
**created_at** | **string** | Date and time when entrance was created in CareCloud. *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**cancelled_at** | **string** | Date and time when entrance was cancelled in CareCloud. *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**charged_price** | **float** | Price charged to POS system. | [optional] 
**product_ids** | **string** | The unique ID of the product. | [optional] 
**charge_date** | **string** | Date and time when entrance will be/was charged to the POS system. *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**valid_from** | **string** | Date of the first day when customer can use entrance. *(YYYY-MM-DD)* | [optional] 
**valid_to** | **string** | Date of the last day when customer can use entrance. *(YYYY-MM-DD)* | [optional] 
**last_change** | **string** | Date and time of the last change. *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**state** | **int** | State of the event type. *Possible values are: 0 - cancelled / 1- active* | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

