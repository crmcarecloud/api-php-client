# ActionsSendpasswordsetupemailBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Message with a setup password link will be delivered to this email address. &lt;br/&gt; ⚠️This parameter is deprecated and will be removed in the future versions of CareCloud API.If possible do not use it. | [optional] 
**communication_channel_id** | **string** | ID of communication channels that will be used for password setup. Parameter is required if &#x60;email&#x60; parameter is not set.The list of all available channels is provided here: [GET /communication-channels](https://carecloud.readme.io/reference/getcommunicationchannels) &lt;br/&gt; The possibility of a password setup message from a channel may vary depending on the project setup. For more information, please contact the CareCloud administrator. | [optional] 
**recipient** | **string** | Recipient of the message with a password setup. The value of a parameter depending on &#x60;communication_channel_id&#x60;. Parameter is required if &#x60;email&#x60; parameter is not set. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

