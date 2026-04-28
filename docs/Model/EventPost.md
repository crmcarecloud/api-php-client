# EventPost

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_id** | **string** | The unique ID of the event. | [optional] 
**event_type_id** | **string** | The unique ID of the event type. [GET /event-types](https://carecloud.readme.io/reference/geteventtypes) | 
**customer_id** | **string** | The unique platform customer ID.   If this field is provided, it will always be used and any alternative identifier parameters (&#x60;customer_identifier_type&#x60; and &#x60;customer_identifier_value&#x60;) **must not** be included.   If both are present, the request will be rejected. | [optional] 
**customer_identifier_type** | **string** | Alternative identifier type to use when &#x60;customer_id&#x60; is not provided.   If &#x60;customer_id&#x60; is missing, both &#x60;customer_identifier_type&#x60; and &#x60;customer_identifier_value&#x60; are required.    Accepted values: - &#x60;email&#x60; – identify customer by e-mail address   - &#x60;phone&#x60; – identify customer by phone number   - &#x60;external_id&#x60; – identify customer by an external system ID (e-shop, POS, portal, etc.)    If &#x60;customer_id&#x60; and an alternative identifier are both provided, the request will be rejected. | [optional] 
**customer_identifier_value** | [**OneOfEventPostCustomerIdentifierValue**](OneOfEventPostCustomerIdentifierValue.md) | Alternative identifier value to use when &#x60;customer_id&#x60; is not provided.   The value must match the format expected for the selected &#x60;customer_identifier_type&#x60;.    - For &#x60;email&#x60; or &#x60;phone&#x60;, provide a string.   - For &#x60;external_id&#x60;, provide an object with the following structure:     &#x60;&#x60;&#x60;json   {     \&quot;customer_source_id\&quot;: \&quot;8795d942b31990e944c2ab1254\&quot;,     \&quot;external_id\&quot;: \&quot;7ACFY3R\&quot;   }   &#x60;&#x60;&#x60;  These parameters follow the same conventions as customer search by external ID in [GET /customer-source-records](https://carecloud.readme.io/reference/getcustomersourcerecords).    If both &#x60;customer_id&#x60; and an alternative identifier are included, the request will be rejected. | [optional] 
**external_id** | **string** | The unique external ID of the event. It may be ID from other system. | 
**data** | [**OneOfEventPostData**](OneOfEventPostData.md) | Additional data of the event. Serialized data in JSON. | [optional] 
**created_at** | **string** | Timestamp of the event. Accepts the format &#x60;YYYY-MM-DD HH:MM:SS&#x60; or ISO-8601 format (&#x60;YYYY-MM-DDTHH:MM:SS&#x60;). All times must be in the local timezone. | [optional] 
**secondary_external_id** | **string** | Additional external ID of the event. Used when differentiation of external_id is needed. | [optional] 
**state** | **int** | State of the event. *Possible values are: 0 - deleted / 1 - active / 2 - non active* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

