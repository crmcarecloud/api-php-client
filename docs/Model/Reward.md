# Reward

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reward_id** | **string** | The unique id of the reward | [optional] 
**code** | **string** | Code of the reward | 
**name** | **string** | Name of the reward | 
**note** | **string** | Additional text | [optional] 
**subtitle** | **string** | Text of subtitle | [optional] 
**points_cost** | **float** | Number of points, that will be spent by the voucher redemption | [optional] 
**valid_time_from** | **string** | Time the reward is valid from *(HH:MM:SS)* | [optional] 
**valid_time_to** | **string** | Time the reward is valid to *(HH:MM:SS)* | [optional] 
**reward_group** | **int** | The unique id of the reward group *Possible values: 0 - party time voucher / 1 - catalog voucher / 2 - campaign voucher/ 4 - simple reward* | 
**reward_type_id** | **string** | The type of reward describes the reward behavior. For example, a Percentage discount, Buy one + get one discounted product, and others. | [optional] 
**store_list** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\Store[]**](Store.md) | List of the stores where the reward can be redeemed | 
**additional_properties** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\PropertyRecord[]**](PropertyRecord.md) | Additional properties | [optional] 
**priority** | **int** | Priority of the reward *1 is the highest priority* | [optional] 
**image_urls** | **string[]** | List of reward image URL addresses | [optional] 
**reward_external_url** | **string** | External URL addresses | [optional] 
**has_product_condition** | **bool** | Parameter says, if there is product condition on reward | [optional] 
**has_group_condition** | **bool** | Parameter says, if there is group condition on reward | [optional] 
**has_brand_condition** | **bool** | Parameter says, if there is brand condition on reward | [optional] 
**is_automated** | **bool** | Parameter says, if reward is automated or not. If reward is automated, means it&#x27;s applied by rules of the reward. Otherwise have to be applied manually | [optional] 
**tags** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\Tag[]**](Tag.md) | List of the tags assigned to the reward. | [optional] 
**last_change** | **string** | Date and time of the last change *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**state** | **int** | State of the reward *Possible values are: 0 - deleted / 1 - active / 2 - non active* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

