# Message

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message_id** | **string** | The unique ID of the message. | [optional] 
**status** | **int** | The status ID of the message. *Possible values are: 0 - message was not sent / 1 - message was sent successfully / -1 - message was not received (it was returned) / -2 - message was not received (soft bounce) / 2 - an error occurred while sending / 4 - customer has no agreements (GDPR) / 5 - Scheduled for retry (the message was not delivered because of an error and will be sent repeatedly. If not successful, the status will change to error.)* | [optional] 
**message_template_id** | **string** | The unique ID of the message template. [GET /message-templates](https://carecloud.readme.io/reference/getmessagetemplates) | 
**customer_id** | **string** | The unique ID of the customer. [GET /customers](https://carecloud.readme.io/reference/getcustomers) | 
**contact** | **string** | Email address or phone number of customer in case of send message to different contact than customer has in database. | [optional] 
**title** | **string** | Subject of the email message/ Title of notification message / Preview of the text message . Mandatory only in case of email template. | [optional] 
**send_time** | **string** | Timestamp when the message was sent from the server to the recipient. Format: &#x60;YYYY-MM-DD HH:MM:SS&#x60;. All times are in the local timezone. | [optional] 
**opened_time** | **string** | Timestamp when the message was opened by the recipient. Format: &#x60;YYYY-MM-DD HH:MM:SS&#x60;. All times are in the local timezone. | [optional] 
**mail_client_user_agent** | **string** | User agent of the mail client application where message was opened. | [optional] 
**mail_client_language** | **string** | Language of the mail client application where message was opened. | [optional] 
**communication_channel_id** | **int** | The unique ID of the communication channel. *Possible values are: 1 - email / 2- SMS / 4 - PUSH notification (Apple or Google)/ 5 - internal system notification* | 
**message_data** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\Parameter[]**](Parameter.md) | Message data could contains array of customized parameters. They may have influence on message display or add values to message. | [optional] 
**attachments** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\Attachment[]**](Attachment.md) | List of the attachments for the message. A single attachment has a size limit of 1 MB. File type restrictions: .jpg, .jpeg, .png, .gif, and .pdf. | [optional] 
**last_change** | **string** | Timestamp of the last change. Format: &#x60;YYYY-MM-DD HH:MM:SS&#x60;. All times are in the local timezone. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

