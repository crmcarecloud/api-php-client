# RewardProduct

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**minimum_number_of_products** | **int** | A minimal amount of purchase products to apply reward. This parameter is deprecated, for minimal amount of product in the reward condition, please look at [GET /rewards](https://carecloud.readme.io/reference/getrewards) structure &#x60;reward_product_relation_conditions&#x60;. If the query parameter &#x60;reward_product_relation_type&#x60; is not set. The amount of product for condition is returned. | [optional] 
**reward_product_relation_types** | **string[]** | Parameter identify type of the relation between reward and product.  *Possible values are: &#x60;condition&#x60; - product is part of a reward condition / &#x60;bonus&#x60; - product is part of a reward condition* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

