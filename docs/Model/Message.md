# Message

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message_id** | **string** | The unique ID of the message. | [optional] 
**status** | **int** | The status ID of the message. *Possible values are: 0 - message was not send / 1 - message was send successfully / -1 - message was not received (it was returned) / -2 - message was not received (soft bounce) / 2 - an error occurred while sending / 4 - customer has no agreements (GDPR)* | [optional] 
**message_template_id** | **string** | The unique ID of the message_template. | 
**customer_id** | **string** | The unique ID of the card holder. | 
**contact** | **string** | Email address or phone number of customer in case of send message to different contact than customer has in database. | [optional] 
**title** | **string** | Subject of the email message/ Title of notification message / Preview of the text message . Mandatory only in case of email template. | [optional] 
**send_time** | **string** | Date and time when message was send from server to recipient. *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**opened_time** | **string** | Date and time when message was opened by recipient. *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**mail_client_user_agent** | **string** | User agent of the mail client application where message was opened. | [optional] 
**mail_client_language** | **string** | Language of the mail client application where message was opened. | [optional] 
**communication_channel_id** | **int** | The unique ID of the communication channel. *Possible values are: 1 - email / 2- SMS / 4 - PUSH notification (Apple or Google)/ 5 - internal system notification* | 
**message_data** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\Parameter[]**](Parameter.md) | Message data could contains array of customized parameters. They may have influence on message display or add values to message. | [optional] 
**attachments** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\Attachment[]**](Attachment.md) | List of the attachments for the message. A single attachment has a size limit of 1 MB. File type restrictions: .jpg, .jpeg, .png, .gif, and .pdf. | [optional] 
**last_change** | **string** | Date and time of the last change. *(YYYY-MM-DD HH:MM:SS)* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

