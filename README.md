# .
Learn here the basics of the Customer Data Platform CareCloud API, from authentication to usage of available resources. Learn about the CDP CareCloud REST API, which Systems can use API to connect with CDP CareCloud. Like e-shops, POS, kiosks, booking, and other similar production systems. These systems usually process the customer data sets with their relationships or end-user applications like mobile Android and iOS APPs or web microsites that need to get the unique customer data.    This is the description of the basics of the CDP CareCloud API. It is described here the [domain structure](#section/Getting-started/Domain-structure) and the parameters of the URL, the difference between  Enterprise  and  Customer API, [HTTP methods](#section/Getting-started/HTTPS-Methods) used in the API, [authentication details](#section/Authentication) and more. If you need to make your integration a little easier, please look at our toolkit in [Tools](#section/Tools).  #### [CRM CareCloud API Reference](#section/CRM-CareCloud-API-Reference)  [CRM CareCloud API Reference](#section/CRM-CareCloud-API-Reference) describes each available [Resource](#section/CRM-CareCloud-API-Reference/Available-resources-overview) in the API, you can learn more about parameters, errors, and how to format your requests. Review all available resources for CRM CareCloud REST API with this reference overview.  # Getting started  CRM CareCloud REST API allows you to create and manage the customer accounts and related resources like countries, languages, currencies, sources or customer account statuses. You can use the API for management of vouchers, rewards, customer cards, segments and other structures related to customer account.   ## What is the best interface for my use case? <img src=\"img/customer_enterprise.png\">  Now, when it is all clear, let's continue with API call structure  ## API call structure  ### Domain structure  The domain structure is like  `<projectURL>/webservice/rest-api/customer-interface/v1.0/customers` where  `<projectURL>`  corresponds to the specific URL of your project. For example for project of company called Cortex, the  `<projectURL>`  could be `https://cortex.crmcarecloud.com/` or  `https://project.carecloud.cz/` or any other URL. REST API is available only through secure protocol HTTPS.  We have created and described two API types, where the main difference is the authentication method and the purpose of the systems for which the API is created.  #### Enterprise API  The  Enterprise interface client authenticates with login and password. The Enterprise API is mainly created for e-shops, POS, kiosks, booking and other similar production systems which needs to get the data lists. The domain structure for Enterprise interface API is like  `<projectURL>/webservice/rest-api/enterprise-interface/v1.0/customers`, where :  -   `<projectURL>`  the specific URL of your project -   `enterprise-interface`  represents the type of API -   `v1.0`  is the version of the API (this is only example, please the check actual version with your integration support) -   `customers`  is an example of the resource. List of resources is available in  CRM CareCloud API Reference  #### Customer API  The  Customer interface client authenticates  with user name and token. The Customer API is created and used mainly for end user applications like mobile Android and iOS APPs or web customer microsites which needs to get the unique customer data. The domain structure for the Customer interface API is like  `<projectURL>/webservice/rest-api/customer-interface/v1.0/customers` Where :  -   `<projectURL>`  the specific URL of your project -   `customer-interface`  represents the type of API -   `v1.0`  is the version of the API (this is only example, please check the actual version with your integration support) -   `customers`  is an example of the resource. List of resources is available in  CRM CareCloud API Reference  ### API call parameters  Every API call has the following parameters:  -   Path - contains domain, version, resource, identifier of resource, subresource and the subresource unique id: `https://project.crmcarecloud.com/webservice/rest-api/customer-interface/v1.0/resource-name/resource_id/actions/action_id` -   Query string - uses as filter for results, pagination and limitation of results -   Request body - contains structures for methods POST, PUT -   Response body - contains all result data (resources or error information) in  standard response structure  ### HTTPS Methods  REST API is available only through the secure protocol HTTPS. CRM CareCloud REST API uses selection of the basic HTTP methods:  Make a `GET ` request to retrieve data depending on URI and query string  `POST ` is used to create new resources, we use it also for some action calls  `PUT` method is used to update a resource specified by the unique id  Method `DELETE` removes a resource specified by the unique id. This method is provided just by some specific resources.  ### API versioning  Versioning of the API has the following pattern: `<vX.Y>` where:  -   X represents the major version. The major version serial number increases when an incompatible API changes are made. -   Y represents the minor version. The minor version serial number increases when we add a functionality in a backwards-compatible manner  If developers fix issues in the API a changelog report is published. Changelog contains a version of the API, date and description of the fix.  ### Actions  In special cases, if it is not possible to follow the RESTful way, we use the procedural call. We call it Action. It is possible the Action to be called by existing resources as in the example below.  POST  `<projectURL>/webservice/rest-api/customer-interface/v1.0/resource-name/resource_id/actions/action_id`  Where `resource-name` represents a resource with its unique id - resource_id. Keyword actions identifies an action call and action_id is a unique id of the action that is represented by name of the action. Action name is unique across the API.  This is the example of the action “add customer” by resource segments:  POST  `<projectURL>/webservice/rest-api/customer-interface/v1.0/segments/{segment_id}/actions/add-customer`  ### Status codes  Status codes represent a status of the API response.  | Success status code | Description | | ----------- | ----------- | | 200 OK | Successful | | 201 Created | Resource was created | | 204 No Content | In case of the success without any response data |  | Error status code | Description | | ----------- | ----------- | | 400 Bad Request | Bad input parameter. Error message specifies the detail | | 401 Unauthorized | The client has invalid credentials or auth token | | 403 Forbidden | The client does not exist or the client tried to access non authorized property/resource | | 404 Not Found | The resource was not found | | 405 Method Not Allowed | The resource does not support the specified HTTP method | | 429 Too Many Requests | Too many requests - more than the resource limit | | 500 Internal Server Error | Server is not working as expected | | 503 Service Unavailable | Temporary state when the service is temporarily unavailable, overloaded or there is a maintenance window |  ### Language version  It is used, when the integrator needs to get the right language version of the requested information (like name, description or note). To be able to identify the language version it is necessary to set HTTP header field accept-language.  ```http request GET / HTTP/1.1 Host: project.crmcarecloud.com Accept-Language: cs ```  ### Read-only parameters  These kinds of parameters are used only in response to API calls, and they should not be set in the request body of the API call. Please avoid using them during use POST or PUT HTTP method. Every data structure parameter is marked in documentation, so you can see if parameter is read only or not.  ### Mandatory parameters  If a parameter is marked as mandatory in the documentation, it has to be used in API calls. If a parent structure is not mandatory and you won't use it, child parameters of that structure won't be required. If you use the parent structure in the API call, all child parameters that are marked as mandatory will be required. Every data structure parameter is marked in the documentation, so you can see if the parameter is mandatory or not.   # Tools We try to make your life easier all the time. And one of these things that might make integration easier is our toolkit. It contains support tools for PHP developers but also platform-independent tools.  ## SDK The SDK for the CareCloud REST API contains a list of resources and uses them with the best practices. That should make your integration easier. SDK was created for PHP developers only, and you can find it with its documentation on our GitHub:<br/> [https://github.com/crmcarecloud/api-php-sdk](https://github.com/crmcarecloud/api-php-sdk)  ## REST API Client REST API client was built for developers who don't want to spend time writing their own classes but need different access to API resources than SDK. The REST API client is built in PHP, and you can find it on our GitHub:<br/> [https://github.com/crmcarecloud/api-php-client](https://github.com/crmcarecloud/api-php-client)  ## Open API 3.0 specification We published the Open API 3.0 specification of the CareCloud REST API because we understand all developers need to have a tool for easier and faster integration with CareCloud REST API. The specification is available on our GitHub:<br/> [https://github.com/crmcarecloud/api-spec](https://github.com/crmcarecloud/api-spec)<br/> You can generate not only API clients in several languages. But also use it with plenty of tools that support many platforms and programming languages. Please look at the list of available generators and find there your platform:<br/> [https://openapi.tools/](https://openapi.tools/)  # Authentication  <!-- ReDoc-Inject: <security-definitions> -->   # FAQ The section will answer all the questions you have about using and integrating CareCloud REST API.  ## What is the purpose of CareCloud REST API? You can integrate the external applications with the CareCloud platform via the documented CareCloud REST API. The integration enables data exchange between the CareCloud platform and an integrated external application.<br/> Through the CareCloud REST API, you can integrate applications designed for CareCloud platform users (POS and EPOS systems, e-shops, kiosks, BI, accounting systems, and more) or external applications designed for customers, i.e., mobile applications, customer portals, and customer microsites.<br/> The CareCloud REST API documentation describes the individual data resources, explains their use through the examples and use cases, and answers basic questions in the FAQ section.  ## What interface is the best to use? CareCloud REST API has two kinds of interface: - customer interface - enterprise interface  The best way to decide what interface use is to look at the [following section](#section/Getting-started/What-is-the-best-interface-for-my-use-case).  ## What is an external application? External application is your identification for CareCloud REST API. It helps us to know which application uses REST API. Because as an integrator, you could integrate more applications to one installation of our REST API.<br/> You have to use `external_application_id` in multiple resources around REST API. The important information is External application is not a resource, and you can find or create id for your application in CareCloud administration.<br/> If you don't know how to find it, here is [a guide](#section/Authentication) for you to get, create or manage existing applications.  ## What authentication use for the REST API enterprise interface? Please use [HTTP Bearer authentication](#section/Authentication). If you already use HTTP Basic, we recommend you change it to HTTP Bearer because HTTP Basic is deprecated in the current version of REST API.  ## How exactly PUT verb works in CareCloud REST API? Just a friendly reminder, all our update methods use HTTP PUT. This HTTP verb updates the whole structure, so make sure you have all the necessary data to avoid losing any. HTTP PUT doesn't support updating a single parameter. You need to send the whole data set. For more information read this [article](https://www.geeksforgeeks.org/difference-between-put-and-patch-request/).  ## How do I create a customer account?  In the CareCloud platform, each customer has their customer account, to which all data related to this customer are assigned. The customer's account can be found and identified by any unique identifier (such as a customer card) associated with that account. You can create a customer account using the method [[POST] /customers](#operation/postCustomer) as described [here](#section/Use-cases/Creation-of-a-customer-account-process).  # Use cases  ## Authentication and login process for customer interface  1. Get `<user name>` from your account manager. It is usually `customer_interface` for the customer interface, but it might be different depending on the project.<br/> 2. Create a token using the method  [[POST] /tokens](#operation/postToken).    The creation of a token is different from other API calls.  HTTP Authorization header contains only a login name and no token (because it doesn't exist yet). ```http request <user name>:  ``` Value of HTTP header Authentication contains BASE64 encoded string `<user name>:`. The request looks like this:  ```http request POST <projectURL>/webservice/rest-api/customer-interface/v1.0/tokens Content-Type: application/json Accept-Language: cs, en-gb;q=0.8 Authorization: Basic Y3VzdG9tZXJfaW50ZXJmYWNlOiA= ``` 3. You will get a token_id as a response. ```json {   \"data\":{     \"token_id\":<token_id>   } } ``` 4. The next step is to put together the user name and token in the HTTP Authorization header. The value of the header has to be BASE 64 encoded. ```http request <user name>:<token_id> ``` HTTP Authorization header looks similar to: ```http request Authorization: Basic Y3VzdG9tZXJfaW50ZXJmYWNlOiA= ``` 5. For the customer login use the method [[POST] /tokens/{token_id}/actions/login](#operation/postTokenLogin). Remember to set `<token_id>` in the  HTTP Authorization header as is in step nr. 4. Put right customer credentials in the request's body after.  <p class=\"warning\"> Note: Do not copy the credentials below. Code is just an example of a method used.</p>  ```json {   \"login_type\": \"email\",   \"login_value\": \"example@crmcarecloud.com\",   \"password\": \"password_example\" } ``` 6. You will receive the customer_id of the logged-in customer as a response. ```json {   \"data\":{     \"customer_id\":<customer_id>   } } ```  ## Creation of a customer account process  1. You should know all the values for the required/optional customer account parameters before creating a customer account by [[POST] /customers](#operation/postCustomer). Use any available resource you need to get the lists of actual values. We will use resource stores in this example. To get all options for `store_id` you should call [[GET] /stores](#operation/getStores). Parameter `store_id` will be set during the customer account creation process. ```http request GET <projectURL>/webservice/rest-api/customer-interface/v1.0/stores Content-Type: application/json Accept-Language: cs, en-gb;q=0.8 #<user name>:<token> Authorization: Basic Y3VzdG9tZXJfaW50ZXJmYWNlOmNlMzZjMDg2YmZjN2U3YjBkMjNjNjY3YjdhOTUxZTk= ```  2. You will get a response containing the list of stores and their unique IDs. ```json {    \"data\": {       \"stores\": [          {             \"store_id\": \"86e05affc7a7abefcd513ab400\",             \"store_code\": \"\",             \"name\": \"Great Pub\",             \"store_address\": {                \"address1\": \"Old Town Square\",                \"address2\": \"34\",                \"address3\": \"\",                \"address4\": \"\",                \"address5\": \"\",                \"address6\": \"\",                \"address7\": \"\",                \"zip\": \"11000\",                \"city\": \"Prague 1\",                \"country_code\": \"cz\"             },             \"contact_email\": \"\",             \"manager_name\": \"\",             \"phone_number\": \"\",             \"partner_id\": \"86e05affc7a7abefcd513ab400\",             \"system_id\": 2375303497,             \"gps_coordinates\": {                \"gps_longitude\": 0,                \"gps_latitude\": 0             },             \"url_address\": \"\",             \"opening\": [ ],             \"image_urls\": [ ],             \"visibility_for_customer\": 1,             \"short_description\": \"fdsfdsfds\",             \"description\": null,             \"registration_id\": 123,             \"last_change\": \"2018-12-19 16:12:56\",             \"state\": 1          }       ],       \"total_items\": 1    } } ```  3. You will get a response containing the list of stores and their unique IDs.    Use the method [[POST] /customers](#operation/postCustomer) to create a customer account and set `store_id` as the registration branch of a customer account.    </br>Header: ```http request POST <projectURL>/webservice/rest-api/customer-interface/v1.0/customers Content-Type: application/json Accept-Language: cs, en-gb;q=0.8 #<user name>:<token> Authorization: Basic Y3VzdG9tZXJfaW50ZXJmYWNlOmNlMzZjMDg2YmZjN2U3YjBkMjNjNjY3YjdhOTUxZTk= ``` Request body: ```json {    \"customer\": {       \"personal_information\": {          \"gender\": 1,          \"first_name\": \"John\",          \"last_name\": \"Smith\",          \"birthdate\": \"985-02-12\",          \"email\": \"happy_customer@crmcarecloud.com\",          \"phone\": 420523828931,          \"language_id\": \"en\",          \"store_id\": \"8bed991c68a4\",          \"photo_url\": null,          \"address\": {             \"address1\": \"Old Town Square\",             \"address2\": \"34\",             \"address3\": \"\",             \"address4\": \"\",             \"address5\": \"\",             \"address6\": \"\",             \"address7\": \"\",             \"zip\": \"11000\",             \"city\": \"Prague 1\",             \"country_code\": \"cz\"          },          \"agreement\": {             \"agreement_gtc\": 1,             \"agreement_profiling\": 1,             \"agreement_marketing_communication\": 1,             \"custom_agreements\": [                {                   \"agreement_id\": \"custom_agreement_id\",                   \"agreement_value\": 2                }             ]          }       }    },    \"customer_source\": {       \"customer_source_id\": \"8fdce3475560d56e95a6ab035r\",       \"external_id\": null    },    \"password\": \"password_example\",    \"autologin\": true,    \"social_network_credentials\": {       \"social_network_id\": \"twitter\",       \"social_network_token\": \"38e123j1jedu12d1jnjqwd\"    } } ```  4. Set all the parameters according to the documentation and get a response including `customer_id`. ```json {     \"data\":{         \"customer_id\":\"89ac83ca207a820c62c79bf03a\"     } } ```  5. Customers subresources can be set during the process of a customer account creation. Customer's interests and properties will be set in the next steps. Lists of all available interests and properties are available using the [[GET] /interests](#operation/getInterests) and [[GET] /customer-properties](#operation/getCustomerProperties). 6. To save a value of interest on a customer account use the interest-records subresource [[POST] /customers/{customer_id}/interest-records/](#operation/postSubCustomerInterest) as follows: ```http request POST <projectURL>/webservice/rest-api/customer-interface/v1.0/customers/89ac83ca207a820c62c79bf03a/interst-records Content-Type: application/json Accept-Language: cs, en-gb;q=0.8 #<user name>:<token> Authorization: Basic Y3VzdG9tZXJfaW50ZXJmYWNlOmNlMzZjMDg2YmZjN2U3YjBkMjNjNjY3YjdhOTUxZTk= ``` ```json {    \"interest_record\": {       \"interest_id\": \"81eaeea13b8984a169c490a325\",       \"customer_id\": \"89ac83ca207a820c62c79bf03a\"    } } ```  6. You will get a response including the interest record unique id. ```json {    \"data\": {       \"interest_record_id\": \"87d934c86a6303f5fb4d1214fb\"    } } ```  7. Use a similar process to set a property value on a customer account. Use subresource property-records [[POST] /customers/{customer_id}/property-records](#operation/postSubCustomerProperties) as follows: ```http request POST <projectURL>/webservice/rest-api/customer-interface/v1.0/customers/89ac83ca207a820c62c79bf03a/property-records Content-Type: application/json Accept-Language: cs, en-gb;q=0.8 #<user name>:<token> Authorization: Basic Y3VzdG9tZXJfaW50ZXJmYWNlOmNlMzZjMDg2YmZjN2U3YjBkMjNjNjY3YjdhOTUxZTk= ``` ```json {    \"property_record\": {       \"property_id\": \"contact_person\",       \"property_name\": \"Project contact person\",       \"property_value\": [ ]    } } ```  8. You will get a response with the property record id. ```json {    \"data\": {       \"property_record_id\": \"contact_person:8aa2049ac2f84952014d96bb23\"    } } ```  9. Repeat POST method calls if you need to set more property-records or interest-records on a customer account.  ## How to authenticate customers in external application  Use case covers authorization of a customer in an external application through REST API (customer interface only). For more information, please look at the picture below:  <img src=\"img/login_between_two_apps_with_auth_token-3.png\">  ## How to create a Marketing Automation Event?  Marketing automation events are used to launch a scenario connected to an event. The scenario covers any available automation in CareCloud platform.  Marketing Automation Events has the following structure of resources:  <img src=\"https://imgur.com/0Bu8zWI.jpeg\">  **Event group:** groups divide event types into administrator-defined categories. An administrator can add, edit or delete event groups from the administration environment of the CareCloud platform.  **Event type:** It is a general definition of an event. As an administrator, you can define event types that describe the behavior and structure of following events.  **Event properties:** It is a list of properties defined with the connected event type. It is a good way how to extend event type possibilities.  **Event:** It is a resource that allows you to create an event for a specific customer. The event starts a Marketing Automation scenario. It can transfer data to the scenario. Marketing automation scenarios can use the data to make better decisions during their run.  **Event property record:** It contains values of property that is connected with an event.  ### Create an event  1. If you want to create an event through CareCloud REST API, make sure you know what type of event you wish to create. Correctly set it up, and check if it contains all necessary properties. If you need to create a new event group, you can do it in the events section of the CareCloud administration. You can also create a new event type or property there. When everything is set up in CareCloud administration, we can go to the next step.  2. First, you have to decide what event type you want to use to create an event. To help you decide, you might select an event type depends on the event group. List of the groups you can list with API call of resource [[GET] /event-groups](#operation/getEventGroups):  ```http request GET <projectURL>/webservice/rest-api/enterprise-interface/v1.0/event-groups Content-Type: application/json Accept-Language: cs, en-gb;q=0.8 #<user name>:<password> Authorization: Basic Y3VzdG9tZXJfaW50ZXJmYWNlOmNlMzZjMDg2YmZjN2U3YjBkMjNjNjY3YjdhOTUxZTk= ```  Depends on the results, you can select a list of event types that fits your event group or use other criteria from an [event-types resource documentation](#tag/Event-types): ```http request GET <projectURL>/webservice/rest-api/enterprise-interface/v1.0/event-types?event_group_id=8bdf68d3838b4e009991 Content-Type: application/json Accept-Language: cs, en-gb;q=0.8 #<user name>:<password> Authorization: Basic Y3VzdG9tZXJfaW50ZXJmYWNlOmNlMzZjMDg2YmZjN2U3YjBkMjNjNjY3YjdhOTUxZTk= ```  3. If you decided on an event type that fits your use case, you could check if you need to use any of the available [event properties](#tag/Event-properties):  ```http request GET <projectURL>/webservice/rest-api/enterprise-interface/v1.0/event-properties Content-Type: application/json Accept-Language: cs, en-gb;q=0.8 #<user name>:<password> Authorization: Basic Y3VzdG9tZXJfaW50ZXJmYWNlOmNlMzZjMDg2YmZjN2U3YjBkMjNjNjY3YjdhOTUxZTk= ```  4. Now is the time to create an event for a specific customer. Call the method [[POST] /events](#operation/postEvent) with parameters:  ```http request POST <projectURL>/webservice/rest-api/enterprise-interface/v1.0/events Content-Type: application/json Accept-Language: cs, en-gb;q=0.8 #<user name>:<password> Authorization: Basic Y3VzdG9tZXJfaW50ZXJmYWNlOmNlMzZjMDg2YmZjN2U3YjBkMjNjNjY3YjdhOTUxZTk= ``` ```json {    \"event\": {       \"event_type_id\": \"8bed991c68a470e7aaeffbf048\",       \"customer_id\": \"81ceb8582e2d8dbb7e71b7273b\",       \"external_id\": 157613,       \"data\": \"{\\\"test\\\":10,\\\"test2\\\":20}\",       \"created_at\": \"2017-06-20 16:59:49\",       \"secondary_external_id\": null    },    \"property_records\": [       {          \"property_id\": \"contact_person\",          \"property_name\": \"Project contact person\",          \"property_value\": [ ]       }    ] } ```  5. As you can see, the creation of events also contains values of properties. You set property records in events resource because we need to have all data available for the MA scenario in one API call to start immediately after.    If you want to see a list of events, call the method [[GET] /events](#operation/getEvents) with query params:  ```http request GET <projectURL>/webservice/rest-api/enterprise-interface/v1.0/events Content-Type: application/json Accept-Language: cs, en-gb;q=0.8 #<user name>:<password> Authorization: Basic Y3VzdG9tZXJfaW50ZXJmYWNlOmNlMzZjMDg2YmZjN2U3YjBkMjNjNjY3YjdhOTUxZTk= ```  6. If you need to see property values of the event, please call subresource of events - [[GET] /events/{event_id}/property-records](#operation/getSubEventProperties):  ```http request GET <projectURL>/webservice/rest-api/enterprise-interface/v1.0/events/85bc5819e09dab9/property-records Content-Type: application/json Accept-Language: cs, en-gb;q=0.8 #<user name>:<password> Authorization: Basic Y3VzdG9tZXJfaW50ZXJmYWNlOmNlMzZjMDg2YmZjN2U3YjBkMjNjNjY3YjdhOTUxZTk= ```  ## Update of a forgotten password - customer  Use case covers update of customer's password through REST API. In this case, an external application operates the whole process and updates the customer's password after a new password confirmation.  <img src=\"img/forgotten_password_1.png\">  Use case covers update of customer's password through REST API. It includes sending a forgotten password email to the customer.  <img src=\"img/forgotten_password_rest_api-send-fp-email.png\">  ## Use of the resource properties  1. Every resource in API has a list of parameters, that are static. As we know, every client has different requirements, and that's why we have additional properties structure in some of our resources. The additional properties contain list of a properties, that can be used by clients to set up a properties that are not used in the main parameters of a resource. The additional properties make API flexible to use.  2. Resource [[GET] /rewards](#operation/getRewards) contains an additional properties parameter. Additional properties have the same strutcure throughout the API.  3. API call of the resource [[GET] /rewards](#operation/getRewards) can show us all properties and the values of that resource: ```http request POST <projectURL>/webservice/rest-api/customer-interface/v1.0/rewards Content-Type: application/json Accept-Language: cs, en-gb;q=0.8 #<user name>:<token> Authorization: Basic Y3VzdG9tZXJfaW50ZXJmYWNlOmNlMzZjMDg2YmZjN2U3YjBkMjNjNjY3YjdhOTUxZTk= ```  4. You will get a response containing the list of rewards with all of their additional properties.  ```json \"data\": {     \"rewards\": [       {         \"reward_id\": \"8bdf68d3838b4e009991819e85\",         \"code\": \"\",         \"name\": \"Letní balíček 2017\",         \"note\": null,           ...        \"additional_properties\": [             {             \"property_record_id\": \"global:8bdf68d3838b4e009991819e85\",             \"property_id\": \"global\",             \"property_name\": \"Global setup of reward\",             \"property_value\": true,             \"last_change\": \"2017-06-14 10:43:49.882375\"            }        ],         \"priority\": null,         \"image_urls\": [],         \"last_change\": \"2017-06-14 10:43:49.882375\",         \"state\": 1       },        ... ```  ## Assign a free card to the existing customer This use case describes the process of assigning free cards to the existing customer. In this case, the customer holds the card and knows the number of the card. It covers only cards that exist in the database already, and they are ready to be used.  1. Find a free card that it could be assigned to the customer by the card number. To do that, you have to filter cards.    Use parameters `card_number` to filter a card that the customer holds.  ```http request GET <projectURL>/webservice/rest-api/enterprise-interface/v1.0/cards?card_number=2001900627 Content-Type: application/json Accept-Language: cs, en-gb;q=0.8 Authorization: Bearer Y3VzdG9tZXJfaW50ZXJmYWNlOmNlMzZjMDg2YmZjN2U3YjBkMjNjNjY3YjdhOTUxZTk= ```  ```json {   \"data\": {     \"cards\": [       {         \"card_id\": \"8ecdd31720a5de8af85e1c566\",         \"customer_id\": null,         \"card_type_id\": \"86e05affc7a7abcd513ab400\",         \"card_number\": \"2001900627\",         \"state\": 1,         \"valid_from\": null,         \"valid_to\": null,         \"store_id\": null,         \"last_change\": \"2012-08-21 14:25:13.821752\"       }     ],     \"total_items\": 35415   } } ``` 2. If you got a successful result, that means the card you are looking for exists in the database. The next step is to check the card's parameters to confirm it is free to use.    You need to check parameter `customer_id` (should have value `null`) to filter only cards without a relation to the customer.  3. You need to add customer identification when you find a free card by parameters from the previous point.    With the following API call from resource [PUT /cards](#operation/putCard).    Set parameter `customer_id` like in example `e05affc7a7abefc513ab` with the customer id. Other parameters stay unchanged.  ```http request PUT <projectURL>/webservice/rest-api/enterprise-interface/v1.0/cards/8ecdd31720a5de8af85e1c566 Content-Type: application/json Accept-Language: cs, en-gb;q=0.8 Authorization: Bearer Y3VzdG9tZXJfaW50ZXJmYWNlOmNlMzZjMDg2YmZjN2U3YjBkMjNjNjY3YjdhOTUxZTk= ``` ```json {     \"card\":        {         \"card_id\": \"8ecdd31720a5de8af85e1c566\",         \"customer_id\": \"e05affc7a7abefc513ab\",         \"card_type_id\": \"86e05affc7a7abcd513ab400\",         \"card_number\": \"2001900627\",         \"state\": 1,         \"valid_from\": null,         \"valid_to\": null,         \"store_id\": null,       } }  ```  4. After the successful API call, the card has been assigned to the customer, and it's ready to be used.    In case of any error, please follow the error message to find the solution.  5. If you didn't find any card, the card you were looking for is not in the system. In this case, you should insert a new card into the system.    There is a way how to do it through API. Otherwise, you have to import cards manually to the system via CDP administration.    If you decide to use an API solution, you can create a new card. For that, you need to know a card type.    If you don't know card type, you can select a card type from the resource [GET /card-types](#operation/getCardTypes):  ```http request GET <projectURL>/webservice/rest-api/enterprise-interface/v1.0/card-types Content-Type: application/json Accept-Language: cs, en-gb;q=0.8 Authorization: Bearer Y3VzdG9tZXJfaW50ZXJmYWNlOmNlMzZjMDg2YmZjN2U3YjBkMjNjNjY3YjdhOTUxZTk= ```  Response:  ```json {   \"data\": {     \"card_types\": [       {         \"card_type_id\": \"8bd48117006496e01788109b8\",         \"name\": \"Business card\",         \"prefix\": \"12\"       },       {         \"card_type_id\": \"85d85ccae1fbb739f0a6db02b\",         \"name\": \"REST API card type\",         \"prefix\": \"\"       }     ],     \"total_items\": 2   } } ```  6. Now you know the card type, card number, and customer id. You can create a new card in the system.    For that, you will use the resource [POST /cards](#operation/postCard).  ```http request  POST <projectURL>/webservice/rest-api/enterprise-interface/v1.0/cards/ Content-Type: application/json Accept-Language: cs, en-gb;q=0.8 Authorization: Bearer Y3VzdG9tZXJfaW50ZXJmYWNlOmNlMzZjMDg2YmZjN2U3YjBkMjNjNjY3YjdhOTUxZTk= ```  ```json {     \"card\":        {         \"customer_id\": \"e05affc7a7abefc513ab\",         \"card_type_id\": \"8bd48117006496e01788109b8\",         \"card_number\": \"2001900627\",         \"state\": 1,         \"valid_from\": null,         \"valid_to\": null,         \"store_id\": null       } }  ```  7. If you have done everything right, you will get a card id in the response.  ```json  {   \"data\": {     \"customer_id\": \"82c973544d6279113f387bc\"   } } ``` 8. In case of any error, please follow the error message to find a solution.  ## One Time Password processes  ### Phone validation Use case covers scenario when cashier/operator has to verify phone number ownership. It includes two REST API calls for send OTP [/one-time-password/actions/send](#operation/postSendOtp) and verify it [/one-time-password/actions/verify](#operation/postVerifyOtp).  <img src=\"img/otp-customer-phone-validation.png\">  You can use the same REST API action methods without customer identification to verify a phone number or email ownership in any process. In the diagram below, you can see an online registration of new customer process with phone verification.  <img src=\"img/otp-phone-verification.png\">  ## Purchase closure rewards application  ### Product group, product brand, and product synchronization The best practice is to synchronize with all three resources before you start using the purchase closure process with the rewards application. That means CareCloud will know your product structure, and you can set up reward conditions for any product group, product brand, or product from your production system. For synchronization, please follow these steps:  1. The best practice is to start with the synchronization of product brands and product groups before products. CareCloud has available batch synchronization so that you can limit the number of API calls. <p class=\"notice\">Please consider adjust batch sizes based on processing times. We recommended using a maximum amount of 1000 records per batch. If API takes a long time to respond to or an error message, please make your batch size even smaller.</p> 2. In this use case, we start first with the synchronization of product brands. CareCloud API offers resource [/product-brands/batch](#operation/postBulkProductBrands). And assemble your request like the following example:  ```http request POST <projectURL>/webservice/rest-api/enterprise-interface/v1.0/product-brands/batch Content-Type: application/json Accept-Language: cs, en-gb;q=0.8 Authorization: Bearer Y3VzdG9tZXJfaW50ZXJmYWNlOmNlMzZjMDg2YmZjN2U3YjBkMjNjNjY3YjdhOTUxZTk= ```   ```json {     \"product_brands\": [         {             \"name\": \"Samsung\",             \"external_id\": \"8FDT9FD\"         },         {             \"name\": \"Apple\",             \"external_id\": \"9DFYF0S\"         }     ] } ``` 3. Following with synchronization of product groups. CareCloud API offers resource [/product-groups/batch](#operation/postBulkProductGroups):  ```http request POST <projectURL>/webservice/rest-api/enterprise-interface/v1.0/product-groups/batch Content-Type: application/json Accept-Language: cs, en-gb;q=0.8 Authorization: Bearer Y3VzdG9tZXJfaW50ZXJmYWNlOmNlMzZjMDg2YmZjN2U3YjBkMjNjNjY3YjdhOTUxZTk= ```   ```json {   \"product_groups\": [     {       \"name\": \"Cell phones\",       \"code\": \"CP\",       \"external_id\": \"08FDSYF34\",       \"store_id\": \"W50ZXJmYWNlOmNlMzZjMDg2YmZjN2U3YjBkMjN\"     },     {       \"name\": \"Water resist\",       \"code\": \"WR\",       \"parent_external_id\": \"08FDSYF34\",       \"external_id\": \"LSA60MVX\",       \"store_id\": \"W50ZXJmYWNlOmNlMzZjMDg2YmZjN2U3YjBkMjN\"     }   ] } ``` As you can see in the example, you can synchronize `product-groups` in a tree structure with the help of the parameter `parent_external_id` that points to the parent group of the currently synchronized group.  4. The last resource in synchronization is products. CareCloud API offers batch endpoint [/products/batch](#operation/postBulkProducts):  ```http request POST <projectURL>/webservice/rest-api/enterprise-interface/v1.0/products/batch Content-Type: application/json Accept-Language: cs, en-gb;q=0.8 Authorization: Bearer Y3VzdG9tZXJfaW50ZXJmYWNlOmNlMzZjMDg2YmZjN2U3YjBkMjNjNjY3YjdhOTUxZTk= ```   ```json {   \"products\": [     {       \"name\": \"Apple iPhone 13\",       \"code\": \"AiP13\",       \"plu_ids\": [         {           \"list_code\": \"GLOBAL\",           \"code\": \"KO0D2\"         }       ],       \"product_group_external_id\": \"08FDSYF34\",       \"product_brand_external_id\": \"9DFYF0S\"     },     {       \"name\": \"Samsung Galaxy\",       \"code\": \"SG0\",       \"plu_ids\": [         {           \"list_code\": \"GLOBAL\",           \"code\": \"D5A70AV\"         },         {           \"list_code\": \"local_code\",           \"code\": \"768430\"         }       ],       \"product_group_external_id\": \"08FDSYF34\",       \"product_brand_external_id\": \"8FDT9FD\"     }   ] } ``` In the example, you can see two important things: - The external ids or the CareCloud REST API ids can establish a relationship between the product and its group or brand. - You can use multiple product lists if you identify a product with more than one code. You need to change list_code from value `GLOBAL` to other contained in CarCloud administration.  ### Bill Closure with rewards application  1. User clicks on the Loyalty program button in the POS system. 2. The User inserts the Customer Card Number into the specified field on POS using a barcode reader or manual input. The User can identify a customer with other parameters like email, phone, or name. If so, the User should collect these parameters from the Customer and get `customer id` with API call [GET /customers?parameter=value](#operation/getCustomers). 3. POS system verifies the validity of the Loyalty Card with API call [GET /cards?cardnumber=12345678](#operation/getCards). This step is optional, and you can skip it if you don't want to verify a card number. ```http request GET <projectURL>/webservice/rest-api/enterprise-interface/v1.0/cards?card_number=100000047 Content-Type: application/json Accept-Language: cs, en-gb;q=0.8 Authorization: Bearer Y3VzdG9tZXJfaW50ZXJmYWNlOmNlMzZjMDg2YmZjN2U3YjBkMjNjNjY3YjdhOTUxZTk= ```  Response:  ```json {   \"data\": {     \"cards\": [       {         \"card_id\": \"83d1d11ea3884a5d33253fe214\",         \"customer_id\": \"84b9167cff007d98e1633\",         \"card_type_id\": \"8bed991c68a470e7aabf048\",         \"card_number\": \"100000047\",         \"state\": 1,         \"valid_from\": null,         \"valid_to\": null,         \"store_id\": null,         \"last_change\": \"2021-04-14 16:00:42\"       }     ],     \"total_items\": 1   } }  ``` 4. The result shows that the example card doesn't have a validity date, and `state` has value 1. That means this card is good to use. Also, you can see if the card is assigned to the customer or not depending on the parameter `customer_id`.  5. In the next step the user loads a list of rewards [POST /purchases/action/recommend-best-rewards](#operation/postPurchaseRecommendedRewards). ```http request POST <projectURL>/webservice/rest-api/enterprise-interface/v1.0/purchases/action/recommend-best-rewards Content-Type: application/json Accept-Language: cs, en-gb;q=0.8 Authorization: Bearer Y3VzdG9tZXJfaW50ZXJmYWNlOmNlMzZjMDg2YmZjN2U3YjBkMjNjNjY3YjdhOTUxZTk= ```  ```json     {     \"store_id\": \"81eaeea13984a169c490a325\",     \"cashdesk_number\": 2,     \"card_number\": \"100000047\",     \"bill\": {         \"bill_id\": \"15\",         \"payment_time\": \"2021-12-12 15:32:33\",         \"currency_id\": \"8bed991ca470e7aaeffbf048\",         \"total_price\": 1400,         \"bill_items\": [             {                 \"plu_ids\": [                     {                         \"list_code\": \"GLOBAL\",                         \"code\": \"p2\"                     }                 ],                 \"plu_name\": \"Apple iPhone 12 Pro 128GB\",                 \"category_plu_id\": \"\",                 \"vat_rate\": 21,                 \"quantity\": 2,                 \"paid_amount\": 1400,                 \"price\": 1400,                 \"bill_item_id\": \"123\",                 \"loyalty_off\": false,                 \"purchase_item_type_id\": \"86e05affc7befcd513ab400\"             }         ]     },     \"reward_list_type\": \"C\" }  ``` Response to the request above: ```json {     \"data\": {         \"recommended_best_rewards\": [             {                 \"code\": \"PTV2\",                 \"name\": \"Apple Iphone for 590 EUR\",                 \"reward_priority\": 1,                 \"max_count\": 0,                 \"description\": \"Iphone 12 sale\",                 \"reward_properties\": {                     \"image\": \"\",                     \"valid_time_from\": \"0000-00-00 00:00:00\",                     \"valid_time_to\": \"0000-00-00 00:00:00\"                 }             },             {                 \"code\": \"PTV3\",                 \"name\": \"Samsung brand campaign - second Samsung device for 590 EUR\",                 \"reward_priority\": 2,                 \"max_count\": 0,                 \"description\": \"Samsung sale\",                 \"reward_properties\": {                     \"image\": \"\",                     \"valid_time_from\": \"0000-00-00 00:00:00\",                     \"valid_time_to\": \"0000-00-00 00:00:00\"                 }             }         ],         \"total_items\": 2     } } ``` 6. The User chooses specific rewards and sets the amount of use. 7. The User clicks on the Bill Closure button on POS. 8. The POS system adds selected rewards from [ POST /purchases/action/recommend-best-rewards](#operation/postPurchaseRecommendedRewards) and sends request Bill Closure to CareCloud REST API [POST /purchases/actions/accept-payment](#operation/postPurchaseAcceptPayment).    Based on the Customer id (or Card Number) and Bill Items, CareCloud calculates all available discounts. CareCloud applies all selected rewards too. ```http request POST <projectURL>/webservice/rest-api/enterprise-interface/v1.0/purchases/action/accept-payment Content-Type: application/json Accept-Language: cs, en-gb;q=0.8 Authorization: Bearer Y3VzdG9tZXJfaW50ZXJmYWNlOmNlMzZjMDg2YmZjN2U3YjBkMjNjNjY3YjdhOTUxZTk=  ```  ```json {     \"store_id\": \"81eaeea13984a169c490a325\",     \"cashdesk_number\": 1,     \"payment_type\": \"S\",     \"card_number\": \"100000047\",     \"benefit_codes\": [         \"PTV2\"     ],     \"bill\": {         \"bill_id\": \"15\",         \"payment_time\": \"2021-12-12 15:32:33\",         \"currency_id\": \"8bed991ca470e7aaeffbf048\",         \"total_price\": 1400,         \"bill_items\": [             {                 \"plu_ids\": [                     {                         \"list_code\": \"GLOBAL\",                         \"code\": \"p2\"                     }                 ],                 \"plu_name\": \"Apple iPhone 12 Pro 128GB\",                 \"category_plu_id\": \"\",                 \"vat_rate\": 21,                 \"quantity\": 3,                 \"paid_amount\": 1400,                 \"price\": 1400,                 \"bill_item_id\": \"123\",                 \"loyalty_off\": false,                 \"purchase_item_type_id\": \"86e05affc7befcd513ab400\"             }         ]     } } ``` 9. CareCloud sends a list of all recommended discounts related to bill items and/or all selected rewards to the POS system. ```json {   \"data\": {     \"recommended_discounts\": [],     \"credit_points\": 0,     \"price_of_credit_points\": 0,     \"credit\": 0,     \"vouchers\": [       {         \"code\": \"PTV2-1-1-1\",         \"name\": \"Apple Iphone for 590 EUR\",         \"discount_value\": 171.67,         \"discount_percent\": 36.79,         \"bill_item_id\": \"123\"       },       {         \"code\": \"PTV2-1-2-1\",         \"name\": \"Apple Iphone for 590 EUR\",         \"discount_value\": 171.67,         \"discount_percent\": 36.79,         \"bill_item_id\": \"123\"       }     ],     \"credit_points_of_this_transaction\": 0,     \"total_credit_points\": 0,     \"total_credit\": 0,     \"messages\": []   } } ``` 10. Optionally, POS can display recommendation messages from parameter `messages` for cashiers. These contain sale recommendations for cashiers. Example: _Add a Teddy bear to the Bill, and the customer gets it free._ 11. POS should add all discounts and rewards to the Bill(into structure `payment_recap`). POS has to add all discounted items as bill items with a negative value and reduce the final price. 12. The User checks the correctness and confirms by clicking on the Bill Payment button for final closure of the Bill or returns to Bill Closure 13. User confirms payment of the Bill.     POS system saves and sends all details of the final Bill and applied rewards to CareCloud [POST /purchases/actions/send-purchase](#operation/postPurchaseSend). The detail of that part of the process you can find in the following use case.  ###  Send paid purchase This Use case describes sending of paid purchases to CareCloud. POS system asynchronously sends the finished purchases. All purchases that have not been sent yet are sent at a defined time interval (one minute). In case of unsuccessful data transfer, the purchase is sent later on (approx. five attempts, interval 10 minutes in between) and then marked to manual transfer. The possibility of manual transfer to CareCloud should be implemented on POS. This method is not supposed to be used with paid bills transmission to CareCloud via a data warehouse.  1. POS system sends a final paid purchase [POST /purchases/actions/send-purchase](#operation/postPurchaseSend). ```http request POST <projectURL>/webservice/rest-api/enterprise-interface/v1.0/purchases/action/send-purchase Content-Type: application/json Accept-Language: cs, en-gb;q=0.8 Authorization: Bearer Y3VzdG9tZXJfaW50ZXJmYWNlOmNlMzZjMDg2YmZjN2U3YjBkMjNjNjY3YjdhOTUxZTk=  ```  ```json  {   \"store_id\": \"81eaeea13984a169c490a325\",   \"cashdesk_number\": 1,   \"card_number\": \"100000047\",   \"bill\": {     \"fiscal\": true,     \"purchase_type_id\": \"86e05affa7abefcd513ab400\",     \"canceled\": false,     \"payment_recap\": {       \"credit_points\": 0,       \"amount_for_credit\": 0,       \"vouchers\": [         {           \"code\": \"PTV2-1-1-1\",           \"name\": \"Apple Iphone for 590 EUR\",           \"discount_value\": 171.67,           \"discount_percent\": 36.79,           \"bill_item_id\": \"123\"         },         {           \"code\": \"PTV2-1-2-1\",           \"name\": \"Apple Iphone for 590 EUR\",           \"discount_value\": 171.67,           \"discount_percent\": 36.79,           \"bill_item_id\": \"123\"         }       ]     },     \"payment_type\": \"S\",     \"payment_time\": \"2020-09-14 00:00:00\",     \"bill_id\": \"15\",     \"bill_number\": \"15_external_id\",     \"create_date_time\": \"2021-09-14\",     \"created_by\": \"operator1\",     \"currency_id\": \"8bed991ca470e7aaeffbf048\",     \"total_price\": 1400,     \"bill_items\": [       {         \"plu_ids\": [           {             \"list_code\": \"GLOBAL\",             \"code\": \"p2\"           }         ],         \"plu_name\": \"Apple iPhone 12 Pro 128GB\",         \"category_plu_id\": \"\",         \"vat_rate\": 21,         \"quantity\": 3,         \"paid_amount\": 1400,         \"price\": 1400,         \"bill_item_id\": \"123\",         \"loyalty_off\": false,         \"purchase_item_type_id\": \"86e05affc7befcd513ab400\"       },       {         \"plu_ids\": [           {             \"list_code\": \"GLOBAL\",             \"code\": \"p2\"           }         ],         \"plu_name\": \"Apple Iphone for 590 EUR\",         \"category_plu_id\": \"\",         \"vat_rate\": 21,         \"quantity\": 1,         \"paid_amount\": -171.67,         \"price\": -171.67,         \"bill_item_id\": \"124\",         \"loyalty_off\": false,         \"purchase_item_type_id\": \"86e05affc7befcd513ab400\"       },       {         \"plu_ids\": [           {             \"list_code\": \"GLOBAL\",             \"code\": \"p2\"           }         ],         \"plu_name\": \"Apple Iphone for 590 EUR\",         \"category_plu_id\": \"\",         \"vat_rate\": 21,         \"quantity\": 1,         \"paid_amount\": -171.67,         \"price\": -171.67,         \"bill_item_id\": \"125\",         \"loyalty_off\": false,         \"purchase_item_type_id\": \"86e05affc7befcd513ab400\"       }     ],     \"utm\": {       \"utm_source\": \"newsletter\",       \"utm_medium\": \"email\",       \"utm_campaign\": \"winter_campaign_2021\"     }   } } ``` 2. CareCloud receives the purchase, saves it, and executes all necessary designated processes (system CareCloud set points for User, applies rewards, spent points, actives card, and others). 3. CareCloud confirms the execution of the purchase. ```json {     \"data\": {         \"purchase_id\": \"83d42b956cae0982696e425\"     } } ``` 4. POS system marks the purchase as successfully transferred to CareCloud.   # CRM CareCloud API Reference  CRM CareCloud API Reference describes each available resource in the API. Learn more about parameters, errors, and how to format your requests.   Review all available resources for CRM CareCloud API with this reference overview. Learn the basics of the API in CRM CareCloud  [Documentation](#).  ## Available resources overview  ### [Campaign products](#tag/Campaign-products)  Campaign products are sets of products that are offered to Customers under special conditions, with different type of benefits. It can be used like a catalogue of discounted products on a special web site/e-shop or a set of special offers distributed to households as leaflet or direct mail. All this kind of campaign product types can be managed in CRM CareCloud directly or via CareCloud API.  ### [Cards](#tag/Cards)  The Customer can be identified by different unique identificators - cards related to the account. Credit Card, Loyalty Card, mobile Card, skipass, virtual Card or any other type of unique personal ID or any other identification method like barcode, QR code or any other key can be used. All the unique customer cards (identificators) related to the Customer account can be processed by this resource.  ### [Card types](#tag/Card-types)  Different card types can be managed in CRM CareCloud. Credit Card, Loyalty Card, mobile Card, skipass, virtual Card or any other type of unique personal ID or any other identification method like barcode, QR code or any other key can be used. The card types can be differenciated by a prefix, name or design and managed by this resource.  ### [Countries](#tag/Countries)  Some data, especially addresses are tied to a Country, which is listed in CRM CareCloud. You can get here the list of countries available.  ### [Customers](#tag/Customers)  CRM CareCloud like a Customer Relationship Management system is about 360 view on a Customer and all relationships of the uinque Customer. Resource Customers is used for creation, processing and managing this basic entity, which contains personal and all additional related information about the Customer.  ### [Customer source](#tag/Customer-sources)  Customer account can be created and tied to different sources, like online registration form, e-shop, mobile app, POS, booking system, web microsite, campaign or any other source. This source is related to customer account and can be managed by this resource.  ### [Currencies](#tag/Currencies)  Some data, especially Products can be tied to a Currency which is listed in CRM CareCloud. You can get here the list of currencies available.  ### [Languages](#tag/Languages)  Some data, especially Customer accounts or Tokens are tied to a Language, which is listed in CRM CareCloud. You can get here the list of languages available.  ### [Points](#tag/Points)  If there is a Loyalty program managed by CRM CareCloud based on points collection, the points collection and redemption can be managed by this resource.  ### [Products](#tag/Products)  There is a Product database in CRM CareCloud that is available via this resource. Products are related to Product Groups, Product Brands and Stores. All this related information can be used for creation of Customer benefits tied to Products.  ### [Product Brands](#tag/Product-brands)  There is a possibility to create sets of Products within the same brand, called Product Brands. Products are related to Product Groups, Product Brands and Stores. All this related information can be used for creation of Customer Benefits tied to Product Brands.  ### [Product Groups](#tag/Product-groups)  There is a possibility to create sets of Products with similar properties, called Product Groups. Products are related to Product Groups, Product Brands and Stores. All this related information can be used for creation of Customer Benefits tied to Product Groups.  ### [Product Reservations](#tag/Product-reservations)  CRM CareCloud allows to reserve Products or Product sets and manage the reservation process. There is the possibility to create a special group of Products that can be reserved - Reservable products. The Reservation of a Product can be created by this resource.  ### [Reservable Products](#tag/Reservable-products)  The set of Products that could be reserved can be limited. We call this group Reservable Products. You can get the details of Reservable Products and search within this group by this resource.  ### [Purchases](#tag/Purchases)  There are the purchases tied to customer accounts stored in CRM CareCloud. The purchases are saved online when closing the bill or imported by the offline web service after the purchase. There are many parameters that specifies the purchase like bill items and its prices, date and time of the purchase, store, where purchase was made or loyalty card number. All this data are used for segmentation or voucher creation.  ### [Recommendations](#tag/Recommendations)  There is the possibility to recommend the customers a product, a service or just an information in CRM CareCloud based on customer purchasing behavior and many other criteria. All recommendations can be viewed by this resource.  ### [Rewards](#tag/Rewards)  Different types of Rewards for Customers can be created and managed in CRM CareCloud. The Reward is a pattern for creation of individual customer Vouchers that can be applicated to the Customer purchases directly. It is defined by a set of parameters like Reward validity, prioroty or number of points, that will be spent by application and many other. You can create rewards and get the information about actual rewards processed in CRM CareCloud by this resource.  ### [Segment](#tag/Segments)  Segments are customer groups, which can be defined and created in CRM CareCloud according to many different criteria. Customers in the Segment share some specific common information or property and can be managed via this resource.  ### [Statuses](#tag/Statuses)  Status is a specific property of a customer account which can be achieved based on the defined criteria, like its validity, achieving principle or loyalty switch. It is often used for management of loyalty membership levels within the loyalty scheme setup and can be processed by this resource.  ### [Stores](#tag/Stores)  You can manage the network of stores (company branches) via this resource. Many properties as address, GPS coordinates, opening hours or contact details can be synchronized with any other system.  ### [Tokens](#tag/Tokens)  Management of token resources. Tokens are used for identification of the application installation on a device and for setup of basic application parameters (permissions, language, notification identification).  ### [Vouchers](#tag/Vouchers)  Vouchers are generated by the Rewards for a specific Customer account and they are applied during the purchasing process. They are defined by its value, validity and related Reward. Vouchers can be managed by this resource.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "http://.com/crmcarecloud/api-php-client.git"
    }
  ],
  "require": {
    "crmcarecloud/api-php-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/./vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
    ->setUsername('YOUR_USERNAME')
    ->setPassword('YOUR_PASSWORD');

$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agreement_id = "agreement_id_example"; // string | The unique id of an agreement in CareCloud
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->getAgreement($agreement_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->getAgreement: ', $e->getMessage(), PHP_EOL;
}
// Configure HTTP basic authorization: basicAuth
$config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
    ->setUsername('YOUR_USERNAME')
    ->setPassword('YOUR_PASSWORD');

$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | One of the query string parameters for sorting. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.

try {
    $result = $apiInstance->getAgreements($accept_language, $count, $offset, $sort_field, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->getAgreements: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://&lt;projectURL&gt;/webservice/rest-api/enterprise-interface/v1.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AgreementsApi* | [**getAgreement**](docs/Api/AgreementsApi.md#getagreement) | **GET** /agreements/{agreement_id} | Detail of an agreement
*AgreementsApi* | [**getAgreements**](docs/Api/AgreementsApi.md#getagreements) | **GET** /agreements | Get all agreements
*CampaignProductsApi* | [**getCampaignProduct**](docs/Api/CampaignProductsApi.md#getcampaignproduct) | **GET** /campaign-products/{campaign_product_id} | Detail of a specific campaign product
*CampaignProductsApi* | [**getCampaignProductStoreRecords**](docs/Api/CampaignProductsApi.md#getcampaignproductstorerecords) | **GET** /campaign-products/{campaign_product_id}/campaign-product-store-records | Get a campaign product store records
*CampaignProductsApi* | [**getCampaignProducts**](docs/Api/CampaignProductsApi.md#getcampaignproducts) | **GET** /campaign-products | Collection of campaign products
*CampaignProductsApi* | [**postCampaignProduct**](docs/Api/CampaignProductsApi.md#postcampaignproduct) | **POST** /campaign-products | Create a campaign product
*CampaignProductsApi* | [**postCampaignProductStoreRecord**](docs/Api/CampaignProductsApi.md#postcampaignproductstorerecord) | **POST** /campaign-products/{campaign_product_id}/campaign-product-store-records | Add a store to the campaign product
*CampaignsApi* | [**getCampaign**](docs/Api/CampaignsApi.md#getcampaign) | **GET** /campaigns/{campaign_id} | Detail of a specific campaign
*CampaignsApi* | [**getCampaigns**](docs/Api/CampaignsApi.md#getcampaigns) | **GET** /campaigns | Collection of campaigns
*CampaignsApi* | [**postCampaign**](docs/Api/CampaignsApi.md#postcampaign) | **POST** /campaigns | Create a campaign
*CardTypesApi* | [**getCardType**](docs/Api/CardTypesApi.md#getcardtype) | **GET** /card-types/{card_type_id} | Get a card type
*CardTypesApi* | [**getCardTypes**](docs/Api/CardTypesApi.md#getcardtypes) | **GET** /card-types | Get information about all card types
*CardTypesApi* | [**getSubCardTypeCards**](docs/Api/CardTypesApi.md#getsubcardtypecards) | **GET** /card-types/{card_type_id}/cards | Get a collection of cards
*CardTypesApi* | [**postCardType**](docs/Api/CardTypesApi.md#postcardtype) | **POST** /card-types | Create a new card type
*CardTypesApi* | [**putCardType**](docs/Api/CardTypesApi.md#putcardtype) | **PUT** /card-types/{card_type_id} | Update a card type
*CardsApi* | [**getCard**](docs/Api/CardsApi.md#getcard) | **GET** /cards/{card_id} | Get a card
*CardsApi* | [**getCards**](docs/Api/CardsApi.md#getcards) | **GET** /cards | Get all cards
*CardsApi* | [**postAssignCard**](docs/Api/CardsApi.md#postassigncard) | **POST** /cards/actions/assign-free-card | Assign free card
*CardsApi* | [**postCard**](docs/Api/CardsApi.md#postcard) | **POST** /cards | Create a card
*CardsApi* | [**postGenerateDigitalCard**](docs/Api/CardsApi.md#postgeneratedigitalcard) | **POST** /cards/actions/generate-digital-card-file | Generate digital card file
*CardsApi* | [**putCard**](docs/Api/CardsApi.md#putcard) | **PUT** /cards/{card_id} | Update a card
*CountriesApi* | [**getCountries**](docs/Api/CountriesApi.md#getcountries) | **GET** /countries | Get all countries
*CurrenciesApi* | [**getCurrencies**](docs/Api/CurrenciesApi.md#getcurrencies) | **GET** /currencies | Get all currencies
*CurrenciesApi* | [**getCurrency**](docs/Api/CurrenciesApi.md#getcurrency) | **GET** /currencies/{currency_id} | Detail of a currency
*CustomerExternalApplicationsApi* | [**getCustomerExternalApp**](docs/Api/CustomerExternalApplicationsApi.md#getcustomerexternalapp) | **GET** /customer-external-applications/{customer_external_application_id} | Detail of a customer external application
*CustomerExternalApplicationsApi* | [**getCustomerExternalApps**](docs/Api/CustomerExternalApplicationsApi.md#getcustomerexternalapps) | **GET** /customer-external-applications | Get all customer external applications
*CustomerPropertiesApi* | [**getCustomerProperties**](docs/Api/CustomerPropertiesApi.md#getcustomerproperties) | **GET** /customer-properties | Get all customer properties
*CustomerPropertiesApi* | [**getCustomerProperty**](docs/Api/CustomerPropertiesApi.md#getcustomerproperty) | **GET** /customer-properties/{customer_property_id} | Get a customer property
*CustomerRelationTypesApi* | [**getCustomerRelationType**](docs/Api/CustomerRelationTypesApi.md#getcustomerrelationtype) | **GET** /customer-relation-types/{customer_relation_type_id} | Detail of a customer relation type
*CustomerRelationTypesApi* | [**getCustomerRelationTypes**](docs/Api/CustomerRelationTypesApi.md#getcustomerrelationtypes) | **GET** /customer-relation-types | Get all customer relation types
*CustomerSourceRecordsApi* | [**getCustomerSourceRecords**](docs/Api/CustomerSourceRecordsApi.md#getcustomersourcerecords) | **GET** /customer-source-records | Get customer source records
*CustomerSourcesApi* | [**getCustomerSources**](docs/Api/CustomerSourcesApi.md#getcustomersources) | **GET** /customer-sources | Get customer sources
*CustomerTypesApi* | [**getCustomerType**](docs/Api/CustomerTypesApi.md#getcustomertype) | **GET** /customer-types/{customer_type_id} | Detail of a customer type
*CustomerTypesApi* | [**getCustomerTypes**](docs/Api/CustomerTypesApi.md#getcustomertypes) | **GET** /customer-types | Get all customer types
*CustomersApi* | [**deleteSubCustomerInterest**](docs/Api/CustomersApi.md#deletesubcustomerinterest) | **DELETE** /customers/{customer_id}/interest-records/{interest_record_id} | Delete an interest record on an account
*CustomersApi* | [**deleteSubCustomerProperty**](docs/Api/CustomersApi.md#deletesubcustomerproperty) | **DELETE** /customers/{customer_id}/property-records/{property_record_id} | Delete a property on an account
*CustomersApi* | [**getCustomer**](docs/Api/CustomersApi.md#getcustomer) | **GET** /customers/{customer_id} | Get information about a customer
*CustomersApi* | [**getCustomers**](docs/Api/CustomersApi.md#getcustomers) | **GET** /customers | Get all customers
*CustomersApi* | [**getSubCustomerCards**](docs/Api/CustomersApi.md#getsubcustomercards) | **GET** /customers/{customer_id}/cards | Get all customer cards
*CustomersApi* | [**getSubCustomerInterests**](docs/Api/CustomersApi.md#getsubcustomerinterests) | **GET** /customers/{customer_id}/interest-records | Get a collection of interest records
*CustomersApi* | [**getSubCustomerPints**](docs/Api/CustomersApi.md#getsubcustomerpints) | **GET** /customers/{customer_id}/points | Get all customer point records
*CustomersApi* | [**getSubCustomerProperties**](docs/Api/CustomersApi.md#getsubcustomerproperties) | **GET** /customers/{customer_id}/property-records | Get a collection of properties
*CustomersApi* | [**getSubCustomerPurchases**](docs/Api/CustomersApi.md#getsubcustomerpurchases) | **GET** /customers/{customer_id}/purchases | Get all customer purchases
*CustomersApi* | [**getSubCustomerRecommendation**](docs/Api/CustomersApi.md#getsubcustomerrecommendation) | **GET** /customers/{customer_id}/recommendation-records | Get a collection of recommendation records
*CustomersApi* | [**getSubCustomerRewards**](docs/Api/CustomersApi.md#getsubcustomerrewards) | **GET** /customers/{customer_id}/rewards | Get all customer rewards
*CustomersApi* | [**getSubCustomerSegments**](docs/Api/CustomersApi.md#getsubcustomersegments) | **GET** /customers/{customer_id}/segment-records | Get a collection of segment records
*CustomersApi* | [**getSubCustomerSource**](docs/Api/CustomersApi.md#getsubcustomersource) | **GET** /customers/{customer_id}/customer-source-records | Get customer source records
*CustomersApi* | [**getSubCustomerStatus**](docs/Api/CustomersApi.md#getsubcustomerstatus) | **GET** /customers/{customer_id}/status-records | Get a collection of status records
*CustomersApi* | [**getSubCustomerVouchers**](docs/Api/CustomersApi.md#getsubcustomervouchers) | **GET** /customers/{customer_id}/vouchers | Get all customer vouchers
*CustomersApi* | [**postCustomer**](docs/Api/CustomersApi.md#postcustomer) | **POST** /customers | Create a new customer
*CustomersApi* | [**postSubCustomerInterest**](docs/Api/CustomersApi.md#postsubcustomerinterest) | **POST** /customers/{customer_id}/interest-records | Add an interest record to a customer
*CustomersApi* | [**postSubCustomerProperties**](docs/Api/CustomersApi.md#postsubcustomerproperties) | **POST** /customers/{customer_id}/property-records | Add a property to a customer
*CustomersApi* | [**putCustomer**](docs/Api/CustomersApi.md#putcustomer) | **PUT** /customers/{customer_id} | Update a customer
*CustomersApi* | [**putSubCustomerInterest**](docs/Api/CustomersApi.md#putsubcustomerinterest) | **PUT** /customers/{customer_id}/interest-records/{interest_record_id} | Update an interest record on an account
*CustomersApi* | [**putSubCustomerProperty**](docs/Api/CustomersApi.md#putsubcustomerproperty) | **PUT** /customers/{customer_id}/property-records/{property_record_id} | Update a property on an account
*CustomersActionsApi* | [**getCustomerSearch**](docs/Api/CustomersActionsApi.md#getcustomersearch) | **GET** /customers/actions/search-customers | Search customers
*CustomersActionsApi* | [**postCustomerVerifyCredentials**](docs/Api/CustomersActionsApi.md#postcustomerverifycredentials) | **POST** /customers/actions/verify-credentials | Customer credentials verification
*CustomersActionsApi* | [**postCustomerVerifySocialNetworkCredentials**](docs/Api/CustomersActionsApi.md#postcustomerverifysocialnetworkcredentials) | **POST** /customers/actions/verify-social-network-credentials | Social network credentials verification
*CustomersActionsApi* | [**postCustomersUploadPhoto**](docs/Api/CustomersActionsApi.md#postcustomersuploadphoto) | **POST** /customers/actions/upload-customer-photo | Upload customer&#x27;s profile photo
*CustomersActionsApi* | [**postCustomersVerifyAuthToken**](docs/Api/CustomersActionsApi.md#postcustomersverifyauthtoken) | **POST** /customers/actions/verify-auth-token | Verify auth token
*EventGroupsApi* | [**getEventGroup**](docs/Api/EventGroupsApi.md#geteventgroup) | **GET** /event-groups/{event_group_id} | Get a event group
*EventGroupsApi* | [**getEventGroups**](docs/Api/EventGroupsApi.md#geteventgroups) | **GET** /event-groups | Get all event groups
*EventPropertiesApi* | [**getEventProperties**](docs/Api/EventPropertiesApi.md#geteventproperties) | **GET** /event-properties | Get all event properties
*EventPropertiesApi* | [**getEventProperty**](docs/Api/EventPropertiesApi.md#geteventproperty) | **GET** /event-properties/{event_property_id} | Get a event property
*EventTypesApi* | [**getEventType**](docs/Api/EventTypesApi.md#geteventtype) | **GET** /event-types/{event_type_id} | Get a event type
*EventTypesApi* | [**getEventTypes**](docs/Api/EventTypesApi.md#geteventtypes) | **GET** /event-types | Get all event types
*EventTypesApi* | [**getSubEventTypeProperties**](docs/Api/EventTypesApi.md#getsubeventtypeproperties) | **GET** /event-types/{event_type_id}/event-properties | Get a collection of event type properties
*EventsApi* | [**getEvent**](docs/Api/EventsApi.md#getevent) | **GET** /events/{event_id} | Get an event
*EventsApi* | [**getEvents**](docs/Api/EventsApi.md#getevents) | **GET** /events | Get information about all events
*EventsApi* | [**getSubEventProperties**](docs/Api/EventsApi.md#getsubeventproperties) | **GET** /events/{event_id}/property-records | Get a collection of event properties records
*EventsApi* | [**postEvent**](docs/Api/EventsApi.md#postevent) | **POST** /events | Create a new event
*InterestsApi* | [**getInterest**](docs/Api/InterestsApi.md#getinterest) | **GET** /interests/{interest_id} | Get an interest
*InterestsApi* | [**getInterests**](docs/Api/InterestsApi.md#getinterests) | **GET** /interests | Get all interests
*LanguagesApi* | [**getLanguages**](docs/Api/LanguagesApi.md#getlanguages) | **GET** /languages | Get all languages
*MessageTemplatesApi* | [**getMessageTemplate**](docs/Api/MessageTemplatesApi.md#getmessagetemplate) | **GET** /message-templates/{message_template_id} | Get a message template
*MessageTemplatesApi* | [**getMessageTemplates**](docs/Api/MessageTemplatesApi.md#getmessagetemplates) | **GET** /message-templates | Get all message templates
*MessagesApi* | [**getMessage**](docs/Api/MessagesApi.md#getmessage) | **GET** /messages/{message_id} | Get a message
*MessagesApi* | [**getMessages**](docs/Api/MessagesApi.md#getmessages) | **GET** /messages | Get all messages
*MessagesApi* | [**getSubMessageDetail**](docs/Api/MessagesApi.md#getsubmessagedetail) | **GET** /messages/{message_id}/detail | Get a message detail
*MessagesApi* | [**postMessageSend**](docs/Api/MessagesApi.md#postmessagesend) | **POST** /messages/actions/send-message | Send message
*OneTimePasswordApi* | [**postSendOtp**](docs/Api/OneTimePasswordApi.md#postsendotp) | **POST** /one-time-password/actions/send | Send a one-time password to a communication channel
*OneTimePasswordApi* | [**postVerifyOtp**](docs/Api/OneTimePasswordApi.md#postverifyotp) | **POST** /one-time-password/actions/verify | Verify a one-time password
*OrdersApi* | [**getOrder**](docs/Api/OrdersApi.md#getorder) | **GET** /orders/{order_id} | Get an order
*OrdersApi* | [**getOrders**](docs/Api/OrdersApi.md#getorders) | **GET** /orders | Get all orders
*OrdersApi* | [**postOrder**](docs/Api/OrdersApi.md#postorder) | **POST** /orders | Create an order
*PartnersApi* | [**getPartner**](docs/Api/PartnersApi.md#getpartner) | **GET** /partners/{partner_id} | Get a partner
*PartnersApi* | [**getPartners**](docs/Api/PartnersApi.md#getpartners) | **GET** /partners | Get all partners
*PointReservationApi* | [**getPointReservation**](docs/Api/PointReservationApi.md#getpointreservation) | **GET** /point-reservations/{point_reservation_id} | Get a point reservation
*PointReservationApi* | [**getPointReservations**](docs/Api/PointReservationApi.md#getpointreservations) | **GET** /point-reservations | Get all point reservations
*PointReservationApi* | [**postPointReservationCreate**](docs/Api/PointReservationApi.md#postpointreservationcreate) | **POST** /point-reservations/actions/reserve-points | Create point reservation
*PointReservationApi* | [**postPointReservationRelease**](docs/Api/PointReservationApi.md#postpointreservationrelease) | **POST** /point-reservations/actions/free-points | Free points from reserevation
*PointTypesApi* | [**getPointType**](docs/Api/PointTypesApi.md#getpointtype) | **GET** /point-types/{point_type_id} | Get a point type
*PointTypesApi* | [**getPointsTypes**](docs/Api/PointTypesApi.md#getpointstypes) | **GET** /point-types | Get all point types
*PointsApi* | [**getPoint**](docs/Api/PointsApi.md#getpoint) | **GET** /points/{point_id} | Get a point record
*PointsApi* | [**getPoints**](docs/Api/PointsApi.md#getpoints) | **GET** /points | Get all point records
*PointsApi* | [**getSubPointPurchases**](docs/Api/PointsApi.md#getsubpointpurchases) | **GET** /points/{point_id}/purchases | Get a collection of purchases
*PointsApi* | [**postPointsAssign**](docs/Api/PointsApi.md#postpointsassign) | **POST** /points/actions/assign-points | Assign of points
*PointsApi* | [**postPointsRedemption**](docs/Api/PointsApi.md#postpointsredemption) | **POST** /points/actions/reduce-points | Points redemption
*PointsApi* | [**postPointsTransfer**](docs/Api/PointsApi.md#postpointstransfer) | **POST** /points/actions/transfer-points | Transfer points
*ProductBrandsApi* | [**getProductBrand**](docs/Api/ProductBrandsApi.md#getproductbrand) | **GET** /product-brands/{product_brand_id} | Get a product brand
*ProductBrandsApi* | [**getProductBrands**](docs/Api/ProductBrandsApi.md#getproductbrands) | **GET** /product-brands | Get all product brand
*ProductBrandsApi* | [**postBulkProductBrands**](docs/Api/ProductBrandsApi.md#postbulkproductbrands) | **POST** /product-brands/batch | Create a batch of product brands
*ProductGroupsApi* | [**getProductGroup**](docs/Api/ProductGroupsApi.md#getproductgroup) | **GET** /product-groups/{product_group_id} | Get a product group
*ProductGroupsApi* | [**getProductGroups**](docs/Api/ProductGroupsApi.md#getproductgroups) | **GET** /product-groups | Get all product groups
*ProductGroupsApi* | [**postBulkProductGroups**](docs/Api/ProductGroupsApi.md#postbulkproductgroups) | **POST** /product-groups/batch | Create a batch of product groups
*ProductPropertiesApi* | [**getProductProperties**](docs/Api/ProductPropertiesApi.md#getproductproperties) | **GET** /product-properties | Get all product properties
*ProductPropertiesApi* | [**getProductProperty**](docs/Api/ProductPropertiesApi.md#getproductproperty) | **GET** /product-properties/{product_property_id} | Get a product property
*ProductReservationSourcesApi* | [**getProductReservationSource**](docs/Api/ProductReservationSourcesApi.md#getproductreservationsource) | **GET** /product-reservation-sources/{product_reservation_source_id} | Detail of an product reservation source
*ProductReservationSourcesApi* | [**getProductReservationSources**](docs/Api/ProductReservationSourcesApi.md#getproductreservationsources) | **GET** /product-reservation-sources | Get all product reservation sources
*ProductReservationsApi* | [**getProductReservation**](docs/Api/ProductReservationsApi.md#getproductreservation) | **GET** /product-reservations/{product_reservation_id} | Get a product-reservation
*ProductReservationsApi* | [**getProductReservations**](docs/Api/ProductReservationsApi.md#getproductreservations) | **GET** /product-reservations | Get all product reservations
*ProductReservationsApi* | [**postProductReservation**](docs/Api/ProductReservationsApi.md#postproductreservation) | **POST** /product-reservations | Create a reservation
*ProductReservationsApi* | [**postProductReservationCancel**](docs/Api/ProductReservationsApi.md#postproductreservationcancel) | **POST** /product-reservations/{product_reservation_id}/actions/cancel-reservation | Cancel reservation
*ProductsApi* | [**getProduct**](docs/Api/ProductsApi.md#getproduct) | **GET** /products/{product_id} | Detail of a product
*ProductsApi* | [**getProducts**](docs/Api/ProductsApi.md#getproducts) | **GET** /products | Collection of available products
*ProductsApi* | [**postBulkProducts**](docs/Api/ProductsApi.md#postbulkproducts) | **POST** /products/batch | Create a batch of products
*PurchaseItemTypesApi* | [**getPurchaseItemTypes**](docs/Api/PurchaseItemTypesApi.md#getpurchaseitemtypes) | **GET** /purchase-item-types | Get all purchase item types
*PurchaseTypesApi* | [**getPurchaseTypes**](docs/Api/PurchaseTypesApi.md#getpurchasetypes) | **GET** /purchase-types | Get all purchase types
*PurchasesApi* | [**getPurchase**](docs/Api/PurchasesApi.md#getpurchase) | **GET** /purchases/{purchase_id} | Get a purchase
*PurchasesApi* | [**getPurchasePaymentSummary**](docs/Api/PurchasesApi.md#getpurchasepaymentsummary) | **GET** /purchases/{purchase_id}/actions/payment-summary | Return payment summary
*PurchasesApi* | [**getPurchases**](docs/Api/PurchasesApi.md#getpurchases) | **GET** /purchases | Get all purchases
*PurchasesApi* | [**getSubPurchaseItems**](docs/Api/PurchasesApi.md#getsubpurchaseitems) | **GET** /purchases/{purchase_id}/purchase-items | Get purchase items tied to a purchase
*PurchasesApi* | [**getSubPurchasePoints**](docs/Api/PurchasesApi.md#getsubpurchasepoints) | **GET** /purchases/{purchase_id}/points | Get point records tied to a purchase
*PurchasesApi* | [**getSubPurchaseVouchers**](docs/Api/PurchasesApi.md#getsubpurchasevouchers) | **GET** /purchases/{purchase_id}/vouchers | Get vouchers tied to a purchase
*PurchasesApi* | [**postPurchaseAcceptPayment**](docs/Api/PurchasesApi.md#postpurchaseacceptpayment) | **POST** /purchases/actions/accept-payment | Accept payment
*PurchasesApi* | [**postPurchaseAssignCustomer**](docs/Api/PurchasesApi.md#postpurchaseassigncustomer) | **POST** /purchases/actions/assign-customer | Assign customer
*PurchasesApi* | [**postPurchaseRecommendedRewards**](docs/Api/PurchasesApi.md#postpurchaserecommendedrewards) | **POST** /purchases/actions/recommended-best-rewards | Recommended best rewards
*PurchasesApi* | [**postPurchaseSend**](docs/Api/PurchasesApi.md#postpurchasesend) | **POST** /purchases/actions/send-purchase | Send purchase
*RecommendationEngineApi* | [**getRecommendationCartCombined**](docs/Api/RecommendationEngineApi.md#getrecommendationcartcombined) | **GET** /recommendation-engine/shopping-cart/actions/combined | Get the best recommendation for shopping cart
*RecommendationEngineApi* | [**getRecommendationCartEliminate**](docs/Api/RecommendationEngineApi.md#getrecommendationcarteliminate) | **GET** /recommendation-engine/shopping-cart/actions/eliminate | Get the best recommendation with elimination for shopping cart
*RecommendationEngineApi* | [**getRecommendationCartOrder**](docs/Api/RecommendationEngineApi.md#getrecommendationcartorder) | **GET** /recommendation-engine/shopping-cart/actions/order | Order products for the best recommendation for a shopping cart
*RecommendationEngineApi* | [**getRecommendationProductCombined**](docs/Api/RecommendationEngineApi.md#getrecommendationproductcombined) | **GET** /recommendation-engine/product/actions/combined | Get the best recommendation
*RecommendationEngineApi* | [**getRecommendationProductEliminate**](docs/Api/RecommendationEngineApi.md#getrecommendationproducteliminate) | **GET** /recommendation-engine/product/actions/eliminate | Get the best recommendation with an elimination
*RecommendationEngineApi* | [**getRecommendationProductOrder**](docs/Api/RecommendationEngineApi.md#getrecommendationproductorder) | **GET** /recommendation-engine/product/actions/order | Order products for the best recommendation.
*RecommendationsApi* | [**getRecommendation**](docs/Api/RecommendationsApi.md#getrecommendation) | **GET** /recommendations/{recommendation_id} | Get a recommendation
*RecommendationsApi* | [**getRecommendations**](docs/Api/RecommendationsApi.md#getrecommendations) | **GET** /recommendations | Get all recommendations
*ReservableProductsApi* | [**getReservableProduct**](docs/Api/ReservableProductsApi.md#getreservableproduct) | **GET** /reservable-products/{reservable_product_id} | Get a reservable product
*ReservableProductsApi* | [**getReservableProducts**](docs/Api/ReservableProductsApi.md#getreservableproducts) | **GET** /reservable-products | Get all reservable products
*ReservableProductsApi* | [**postReservableProductsSearch**](docs/Api/ReservableProductsApi.md#postreservableproductssearch) | **POST** /reservable-products/actions/search-reservable-products | Search reservable products
*RewardPropertiesApi* | [**getRewardProperties**](docs/Api/RewardPropertiesApi.md#getrewardproperties) | **GET** /reward-properties | Get all reward properties
*RewardPropertiesApi* | [**getRewardProperty**](docs/Api/RewardPropertiesApi.md#getrewardproperty) | **GET** /reward-properties/{reward_property_id} | Get a reward property
*RewardsApi* | [**getReward**](docs/Api/RewardsApi.md#getreward) | **GET** /rewards/{reward_id} | Get a reward
*RewardsApi* | [**getRewards**](docs/Api/RewardsApi.md#getrewards) | **GET** /rewards | Get all rewards
*RewardsApi* | [**getSubRewardProductBrands**](docs/Api/RewardsApi.md#getsubrewardproductbrands) | **GET** /rewards/{reward_id}/product-brands | Get product brands tied to a reward
*RewardsApi* | [**getSubRewardProductGroups**](docs/Api/RewardsApi.md#getsubrewardproductgroups) | **GET** /rewards/{reward_id}/product-groups | Get product groups tied to a reward
*RewardsApi* | [**getSubRewardProducts**](docs/Api/RewardsApi.md#getsubrewardproducts) | **GET** /rewards/{reward_id}/products | Get products tied to a reward
*RewardsApi* | [**getSubRewardStores**](docs/Api/RewardsApi.md#getsubrewardstores) | **GET** /rewards/{reward_id}/stores | Get all stores
*RewardsApi* | [**getSubRewardTags**](docs/Api/RewardsApi.md#getsubrewardtags) | **GET** /rewards/tags | Get all tags for resource rewards
*RewardsApi* | [**getSubRewardVouchers**](docs/Api/RewardsApi.md#getsubrewardvouchers) | **GET** /rewards/{reward_id}/vouchers | Get vouchers tied to a reward
*RewardsApi* | [**postRewardCreateVoucher**](docs/Api/RewardsApi.md#postrewardcreatevoucher) | **POST** /rewards/{reward_id}/actions/create-voucher | Create a new voucher
*SegmentsApi* | [**getSegment**](docs/Api/SegmentsApi.md#getsegment) | **GET** /segments/{segment_id} | Get a segment
*SegmentsApi* | [**getSegments**](docs/Api/SegmentsApi.md#getsegments) | **GET** /segments | Get all segments
*SegmentsApi* | [**getSubSegmentRecords**](docs/Api/SegmentsApi.md#getsubsegmentrecords) | **GET** /segments/{segment_id}/segment-records | Get a collection of segment records
*SegmentsApi* | [**postSegmentAddCustomer**](docs/Api/SegmentsApi.md#postsegmentaddcustomer) | **POST** /segments/{segment_id}/actions/add-customer | Add customer to a segment
*SegmentsApi* | [**postSegmentRemoveCustomer**](docs/Api/SegmentsApi.md#postsegmentremovecustomer) | **POST** /segments/{segment_id}/actions/remove-customer | Remove customer from a segment
*SkipassesApi* | [**getSkipass**](docs/Api/SkipassesApi.md#getskipass) | **GET** /skipasses/{skipass_id} | Get a skipass
*SkipassesApi* | [**getSkipasses**](docs/Api/SkipassesApi.md#getskipasses) | **GET** /skipasses | Get all skipasses
*SkipassesApi* | [**getSkipassesOverview**](docs/Api/SkipassesApi.md#getskipassesoverview) | **GET** /skipasses/actions/overview | Get skipasses overview
*SkipassesApi* | [**putSkipass**](docs/Api/SkipassesApi.md#putskipass) | **PUT** /skipasses/{skipass_id} | Update a skipass
*StatusesApi* | [**getStatus**](docs/Api/StatusesApi.md#getstatus) | **GET** /statuses/{status_id} | Get a status
*StatusesApi* | [**getStatuses**](docs/Api/StatusesApi.md#getstatuses) | **GET** /statuses | Get all statuses
*StoreGroupsApi* | [**getStoreGroup**](docs/Api/StoreGroupsApi.md#getstoregroup) | **GET** /store-groups/{store_group_id} | Get a store group
*StoreGroupsApi* | [**getStoreGroups**](docs/Api/StoreGroupsApi.md#getstoregroups) | **GET** /store-groups | Get all store groups
*StorePropertiesApi* | [**getStoreProperties**](docs/Api/StorePropertiesApi.md#getstoreproperties) | **GET** /store-properties | Get all store properties
*StorePropertiesApi* | [**getStoreProperty**](docs/Api/StorePropertiesApi.md#getstoreproperty) | **GET** /store-properties/{store_property_id} | Get a store property
*StoresApi* | [**deleteSubStoreProperty**](docs/Api/StoresApi.md#deletesubstoreproperty) | **DELETE** /stores/{store_id}/property-records/{property_record_id} | Delete a property record of the store
*StoresApi* | [**getStore**](docs/Api/StoresApi.md#getstore) | **GET** /stores/{store_id} | Get a store
*StoresApi* | [**getStores**](docs/Api/StoresApi.md#getstores) | **GET** /stores | Get all stores
*StoresApi* | [**getSubStoreGroups**](docs/Api/StoresApi.md#getsubstoregroups) | **GET** /stores/{store_id}/store-group-records | Get a collection of store group records
*StoresApi* | [**getSubStoreProperties**](docs/Api/StoresApi.md#getsubstoreproperties) | **GET** /stores/{store_id}/property-records | Get a collection of properties
*StoresApi* | [**postStore**](docs/Api/StoresApi.md#poststore) | **POST** /stores | Create a store
*StoresApi* | [**postSubStoreProperties**](docs/Api/StoresApi.md#postsubstoreproperties) | **POST** /stores/{store_id}/property-records | Add a property to a store
*StoresApi* | [**putStore**](docs/Api/StoresApi.md#putstore) | **PUT** /stores/{store_id} | Update a store
*StoresApi* | [**putSubStoreProperty**](docs/Api/StoresApi.md#putsubstoreproperty) | **PUT** /stores/{store_id}/property-records/{property_record_id} | Update a property record of the store
*TokensApi* | [**getTokenAuthentication**](docs/Api/TokensApi.md#gettokenauthentication) | **GET** /tokens/{token_id}/actions/auth-token | Get authentication token
*TokensApi* | [**postToken**](docs/Api/TokensApi.md#posttoken) | **POST** /tokens | Create a token
*TokensApi* | [**postTokenLogin**](docs/Api/TokensApi.md#posttokenlogin) | **POST** /tokens/{token_id}/actions/login | Login to the application
*TokensApi* | [**postTokenLogout**](docs/Api/TokensApi.md#posttokenlogout) | **POST** /tokens/{token_id}/actions/logout | Logout from the application
*TokensApi* | [**postTokenSendPasswordSetup**](docs/Api/TokensApi.md#posttokensendpasswordsetup) | **POST** /tokens/{token_id}/actions/send-password-setup-email | Send email for set up of the new customer password
*TokensApi* | [**postTokenSocialLogin**](docs/Api/TokensApi.md#posttokensociallogin) | **POST** /tokens/{token_id}/actions/social-network-login | Login via social network
*TokensApi* | [**postTokenTestCustomerLogin**](docs/Api/TokensApi.md#posttokentestcustomerlogin) | **POST** /tokens/{token_id}/actions/login-test-customer | Login to the application for test customer
*TokensApi* | [**putToken**](docs/Api/TokensApi.md#puttoken) | **PUT** /tokens/{token_id} | Edit a push token
*UserRolesApi* | [**getUserRole**](docs/Api/UserRolesApi.md#getuserrole) | **GET** /user-roles/{user_role_id} | Get information about an user role
*UserRolesApi* | [**getUserRoles**](docs/Api/UserRolesApi.md#getuserroles) | **GET** /user-roles | Get all user roles
*UsersApi* | [**getUser**](docs/Api/UsersApi.md#getuser) | **GET** /users/{user_id} | Get information about an user
*UsersApi* | [**getUsers**](docs/Api/UsersApi.md#getusers) | **GET** /users | Get all users
*UsersApi* | [**postUserLogin**](docs/Api/UsersApi.md#postuserlogin) | **POST** /users/actions/login | User login
*UsersApi* | [**postUserLogout**](docs/Api/UsersApi.md#postuserlogout) | **POST** /users/actions/logout | User logout
*UsersApi* | [**postUserSsoLogin**](docs/Api/UsersApi.md#postuserssologin) | **POST** /users/actions/sso-login | User SSO login
*UsersApi* | [**postUserVerifyAuthToken**](docs/Api/UsersApi.md#postuserverifyauthtoken) | **POST** /users/actions/verify-auth-token | Verify user auth token
*VouchersApi* | [**getVoucher**](docs/Api/VouchersApi.md#getvoucher) | **GET** /vouchers/{voucher_id} | Get a voucher
*VouchersApi* | [**getVouchers**](docs/Api/VouchersApi.md#getvouchers) | **GET** /vouchers | Get all vouchers
*VouchersApi* | [**postVoucherApply**](docs/Api/VouchersApi.md#postvoucherapply) | **POST** /vouchers/{voucher_id}/actions/apply-voucher | Application of a voucher
*WalletApi* | [**getWalletCredits**](docs/Api/WalletApi.md#getwalletcredits) | **GET** /wallet/actions/credits-overview | Get credits overview
*WalletApi* | [**getWalletCreditsExpiration**](docs/Api/WalletApi.md#getwalletcreditsexpiration) | **GET** /wallet/actions/credits-expiration-overview | Get credits expiration overview
*WalletApi* | [**getWalletPoints**](docs/Api/WalletApi.md#getwalletpoints) | **GET** /wallet/actions/points-overview | Get points overview
*WalletApi* | [**getWalletPointsExpiration**](docs/Api/WalletApi.md#getwalletpointsexpiration) | **GET** /wallet/actions/points-expiration-overview | Get points expiration overview
*WalletApi* | [**getWalletSalesTurnover**](docs/Api/WalletApi.md#getwalletsalesturnover) | **GET** /wallet/actions/sales-turnover | Get sales turnover

## Documentation For Models

 - [AcceptedPayment](docs/Model/AcceptedPayment.md)
 - [ActionsAcceptpaymentBody](docs/Model/ActionsAcceptpaymentBody.md)
 - [ActionsAddcustomerBody](docs/Model/ActionsAddcustomerBody.md)
 - [ActionsApplyvoucherBody](docs/Model/ActionsApplyvoucherBody.md)
 - [ActionsAssigncustomerBody](docs/Model/ActionsAssigncustomerBody.md)
 - [ActionsAssignfreecardBody](docs/Model/ActionsAssignfreecardBody.md)
 - [ActionsAssignpointsBody](docs/Model/ActionsAssignpointsBody.md)
 - [ActionsCancelreservationBody](docs/Model/ActionsCancelreservationBody.md)
 - [ActionsCreatevoucherBody](docs/Model/ActionsCreatevoucherBody.md)
 - [ActionsFreepointsBody](docs/Model/ActionsFreepointsBody.md)
 - [ActionsGeneratedigitalcardfileBody](docs/Model/ActionsGeneratedigitalcardfileBody.md)
 - [ActionsLoginBody](docs/Model/ActionsLoginBody.md)
 - [ActionsLoginBody1](docs/Model/ActionsLoginBody1.md)
 - [ActionsLogoutBody](docs/Model/ActionsLogoutBody.md)
 - [ActionsRecommendedbestrewardsBody](docs/Model/ActionsRecommendedbestrewardsBody.md)
 - [ActionsReducepointsBody](docs/Model/ActionsReducepointsBody.md)
 - [ActionsRemovecustomerBody](docs/Model/ActionsRemovecustomerBody.md)
 - [ActionsReservepointsBody](docs/Model/ActionsReservepointsBody.md)
 - [ActionsSearchreservableproductsBody](docs/Model/ActionsSearchreservableproductsBody.md)
 - [ActionsSendBody](docs/Model/ActionsSendBody.md)
 - [ActionsSendmessageBody](docs/Model/ActionsSendmessageBody.md)
 - [ActionsSendpasswordsetupemailBody](docs/Model/ActionsSendpasswordsetupemailBody.md)
 - [ActionsSendpurchaseBody](docs/Model/ActionsSendpurchaseBody.md)
 - [ActionsSocialnetworkloginBody](docs/Model/ActionsSocialnetworkloginBody.md)
 - [ActionsSsologinBody](docs/Model/ActionsSsologinBody.md)
 - [ActionsTransferpointsBody](docs/Model/ActionsTransferpointsBody.md)
 - [ActionsUploadcustomerphotoBody](docs/Model/ActionsUploadcustomerphotoBody.md)
 - [ActionsVerifyBody](docs/Model/ActionsVerifyBody.md)
 - [ActionsVerifyauthtokenBody](docs/Model/ActionsVerifyauthtokenBody.md)
 - [ActionsVerifyauthtokenBody1](docs/Model/ActionsVerifyauthtokenBody1.md)
 - [ActionsVerifycredentialsBody](docs/Model/ActionsVerifycredentialsBody.md)
 - [ActionsVerifysocialnetworkcredentialsBody](docs/Model/ActionsVerifysocialnetworkcredentialsBody.md)
 - [Address](docs/Model/Address.md)
 - [Agreement](docs/Model/Agreement.md)
 - [AgreementList](docs/Model/AgreementList.md)
 - [AllOfinlineResponse400Error](docs/Model/AllOfinlineResponse400Error.md)
 - [AllOfinlineResponse401Error](docs/Model/AllOfinlineResponse401Error.md)
 - [AllOfinlineResponse404Error](docs/Model/AllOfinlineResponse404Error.md)
 - [AllOfinlineResponse405Error](docs/Model/AllOfinlineResponse405Error.md)
 - [AnyOfEventData](docs/Model/AnyOfEventData.md)
 - [AnyOfPropertyRecordPropertyValue](docs/Model/AnyOfPropertyRecordPropertyValue.md)
 - [BasicError](docs/Model/BasicError.md)
 - [Bill](docs/Model/Bill.md)
 - [BillItem](docs/Model/BillItem.md)
 - [Campaign](docs/Model/Campaign.md)
 - [CampaignPresentationData](docs/Model/CampaignPresentationData.md)
 - [CampaignProduct](docs/Model/CampaignProduct.md)
 - [CampaignProductIdCampaignproductstorerecordsBody](docs/Model/CampaignProductIdCampaignproductstorerecordsBody.md)
 - [CampaignProductStoreRecord](docs/Model/CampaignProductStoreRecord.md)
 - [CampaignproductsBody](docs/Model/CampaignproductsBody.md)
 - [CampaignsBody](docs/Model/CampaignsBody.md)
 - [Card](docs/Model/Card.md)
 - [CardType](docs/Model/CardType.md)
 - [CardsBody](docs/Model/CardsBody.md)
 - [CardsCardIdBody](docs/Model/CardsCardIdBody.md)
 - [CardtypesBody](docs/Model/CardtypesBody.md)
 - [CardtypesCardTypeIdBody](docs/Model/CardtypesCardTypeIdBody.md)
 - [CashierMessage](docs/Model/CashierMessage.md)
 - [Currency](docs/Model/Currency.md)
 - [CustomAgreements](docs/Model/CustomAgreements.md)
 - [Customer](docs/Model/Customer.md)
 - [CustomerIdInterestrecordsBody](docs/Model/CustomerIdInterestrecordsBody.md)
 - [CustomerIdPropertyrecordsBody](docs/Model/CustomerIdPropertyrecordsBody.md)
 - [CustomerRelationType](docs/Model/CustomerRelationType.md)
 - [CustomerResult](docs/Model/CustomerResult.md)
 - [CustomerSearchResult](docs/Model/CustomerSearchResult.md)
 - [CustomerSource](docs/Model/CustomerSource.md)
 - [CustomerSourceRecord](docs/Model/CustomerSourceRecord.md)
 - [CustomerType](docs/Model/CustomerType.md)
 - [CustomersBody](docs/Model/CustomersBody.md)
 - [CustomersCustomerIdBody](docs/Model/CustomersCustomerIdBody.md)
 - [Device](docs/Model/Device.md)
 - [DiscountItem](docs/Model/DiscountItem.md)
 - [Event](docs/Model/Event.md)
 - [EventGroup](docs/Model/EventGroup.md)
 - [EventType](docs/Model/EventType.md)
 - [EventsBody](docs/Model/EventsBody.md)
 - [ExternalApplication](docs/Model/ExternalApplication.md)
 - [ExternalCode](docs/Model/ExternalCode.md)
 - [FinalBill](docs/Model/FinalBill.md)
 - [Flag](docs/Model/Flag.md)
 - [GPSCoordinates](docs/Model/GPSCoordinates.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse20010](docs/Model/InlineResponse20010.md)
 - [InlineResponse200100](docs/Model/InlineResponse200100.md)
 - [InlineResponse200100Data](docs/Model/InlineResponse200100Data.md)
 - [InlineResponse200101](docs/Model/InlineResponse200101.md)
 - [InlineResponse200102](docs/Model/InlineResponse200102.md)
 - [InlineResponse200102Data](docs/Model/InlineResponse200102Data.md)
 - [InlineResponse200103](docs/Model/InlineResponse200103.md)
 - [InlineResponse200104](docs/Model/InlineResponse200104.md)
 - [InlineResponse200104Data](docs/Model/InlineResponse200104Data.md)
 - [InlineResponse200105](docs/Model/InlineResponse200105.md)
 - [InlineResponse200105Data](docs/Model/InlineResponse200105Data.md)
 - [InlineResponse200106](docs/Model/InlineResponse200106.md)
 - [InlineResponse200107](docs/Model/InlineResponse200107.md)
 - [InlineResponse200107Data](docs/Model/InlineResponse200107Data.md)
 - [InlineResponse200108](docs/Model/InlineResponse200108.md)
 - [InlineResponse200109](docs/Model/InlineResponse200109.md)
 - [InlineResponse200109Data](docs/Model/InlineResponse200109Data.md)
 - [InlineResponse20010Data](docs/Model/InlineResponse20010Data.md)
 - [InlineResponse20011](docs/Model/InlineResponse20011.md)
 - [InlineResponse200110](docs/Model/InlineResponse200110.md)
 - [InlineResponse200110Data](docs/Model/InlineResponse200110Data.md)
 - [InlineResponse200111](docs/Model/InlineResponse200111.md)
 - [InlineResponse200111Data](docs/Model/InlineResponse200111Data.md)
 - [InlineResponse200112](docs/Model/InlineResponse200112.md)
 - [InlineResponse200113](docs/Model/InlineResponse200113.md)
 - [InlineResponse200113Data](docs/Model/InlineResponse200113Data.md)
 - [InlineResponse200114](docs/Model/InlineResponse200114.md)
 - [InlineResponse200114Data](docs/Model/InlineResponse200114Data.md)
 - [InlineResponse200115](docs/Model/InlineResponse200115.md)
 - [InlineResponse200115Data](docs/Model/InlineResponse200115Data.md)
 - [InlineResponse200116](docs/Model/InlineResponse200116.md)
 - [InlineResponse200117](docs/Model/InlineResponse200117.md)
 - [InlineResponse200117Data](docs/Model/InlineResponse200117Data.md)
 - [InlineResponse200118](docs/Model/InlineResponse200118.md)
 - [InlineResponse200118Data](docs/Model/InlineResponse200118Data.md)
 - [InlineResponse200119](docs/Model/InlineResponse200119.md)
 - [InlineResponse200119Data](docs/Model/InlineResponse200119Data.md)
 - [InlineResponse20012](docs/Model/InlineResponse20012.md)
 - [InlineResponse200120](docs/Model/InlineResponse200120.md)
 - [InlineResponse200120Data](docs/Model/InlineResponse200120Data.md)
 - [InlineResponse200121](docs/Model/InlineResponse200121.md)
 - [InlineResponse200122](docs/Model/InlineResponse200122.md)
 - [InlineResponse200123](docs/Model/InlineResponse200123.md)
 - [InlineResponse200123Data](docs/Model/InlineResponse200123Data.md)
 - [InlineResponse200124](docs/Model/InlineResponse200124.md)
 - [InlineResponse200124Data](docs/Model/InlineResponse200124Data.md)
 - [InlineResponse200125](docs/Model/InlineResponse200125.md)
 - [InlineResponse200125Data](docs/Model/InlineResponse200125Data.md)
 - [InlineResponse200126](docs/Model/InlineResponse200126.md)
 - [InlineResponse200126Data](docs/Model/InlineResponse200126Data.md)
 - [InlineResponse20012Data](docs/Model/InlineResponse20012Data.md)
 - [InlineResponse20013](docs/Model/InlineResponse20013.md)
 - [InlineResponse20013Data](docs/Model/InlineResponse20013Data.md)
 - [InlineResponse20013DataCountries](docs/Model/InlineResponse20013DataCountries.md)
 - [InlineResponse20014](docs/Model/InlineResponse20014.md)
 - [InlineResponse20014Data](docs/Model/InlineResponse20014Data.md)
 - [InlineResponse20015](docs/Model/InlineResponse20015.md)
 - [InlineResponse20016](docs/Model/InlineResponse20016.md)
 - [InlineResponse20016Data](docs/Model/InlineResponse20016Data.md)
 - [InlineResponse20017](docs/Model/InlineResponse20017.md)
 - [InlineResponse20018](docs/Model/InlineResponse20018.md)
 - [InlineResponse20018Data](docs/Model/InlineResponse20018Data.md)
 - [InlineResponse20019](docs/Model/InlineResponse20019.md)
 - [InlineResponse20019Data](docs/Model/InlineResponse20019Data.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse20020](docs/Model/InlineResponse20020.md)
 - [InlineResponse20020Data](docs/Model/InlineResponse20020Data.md)
 - [InlineResponse20021](docs/Model/InlineResponse20021.md)
 - [InlineResponse20021Data](docs/Model/InlineResponse20021Data.md)
 - [InlineResponse20022](docs/Model/InlineResponse20022.md)
 - [InlineResponse20022Data](docs/Model/InlineResponse20022Data.md)
 - [InlineResponse20023](docs/Model/InlineResponse20023.md)
 - [InlineResponse20023Data](docs/Model/InlineResponse20023Data.md)
 - [InlineResponse20024](docs/Model/InlineResponse20024.md)
 - [InlineResponse20024Data](docs/Model/InlineResponse20024Data.md)
 - [InlineResponse20025](docs/Model/InlineResponse20025.md)
 - [InlineResponse20025Data](docs/Model/InlineResponse20025Data.md)
 - [InlineResponse20026](docs/Model/InlineResponse20026.md)
 - [InlineResponse20026Data](docs/Model/InlineResponse20026Data.md)
 - [InlineResponse20027](docs/Model/InlineResponse20027.md)
 - [InlineResponse20027Data](docs/Model/InlineResponse20027Data.md)
 - [InlineResponse20028](docs/Model/InlineResponse20028.md)
 - [InlineResponse20029](docs/Model/InlineResponse20029.md)
 - [InlineResponse20029Data](docs/Model/InlineResponse20029Data.md)
 - [InlineResponse2002Data](docs/Model/InlineResponse2002Data.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse20030](docs/Model/InlineResponse20030.md)
 - [InlineResponse20031](docs/Model/InlineResponse20031.md)
 - [InlineResponse20031Data](docs/Model/InlineResponse20031Data.md)
 - [InlineResponse20032](docs/Model/InlineResponse20032.md)
 - [InlineResponse20033](docs/Model/InlineResponse20033.md)
 - [InlineResponse20033Data](docs/Model/InlineResponse20033Data.md)
 - [InlineResponse20034](docs/Model/InlineResponse20034.md)
 - [InlineResponse20035](docs/Model/InlineResponse20035.md)
 - [InlineResponse20035Data](docs/Model/InlineResponse20035Data.md)
 - [InlineResponse20036](docs/Model/InlineResponse20036.md)
 - [InlineResponse20037](docs/Model/InlineResponse20037.md)
 - [InlineResponse20037Data](docs/Model/InlineResponse20037Data.md)
 - [InlineResponse20038](docs/Model/InlineResponse20038.md)
 - [InlineResponse20038Data](docs/Model/InlineResponse20038Data.md)
 - [InlineResponse20039](docs/Model/InlineResponse20039.md)
 - [InlineResponse20039Data](docs/Model/InlineResponse20039Data.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse20040](docs/Model/InlineResponse20040.md)
 - [InlineResponse20041](docs/Model/InlineResponse20041.md)
 - [InlineResponse20041Data](docs/Model/InlineResponse20041Data.md)
 - [InlineResponse20042](docs/Model/InlineResponse20042.md)
 - [InlineResponse20042Data](docs/Model/InlineResponse20042Data.md)
 - [InlineResponse20043](docs/Model/InlineResponse20043.md)
 - [InlineResponse20044](docs/Model/InlineResponse20044.md)
 - [InlineResponse20044Data](docs/Model/InlineResponse20044Data.md)
 - [InlineResponse20045](docs/Model/InlineResponse20045.md)
 - [InlineResponse20045Data](docs/Model/InlineResponse20045Data.md)
 - [InlineResponse20046](docs/Model/InlineResponse20046.md)
 - [InlineResponse20047](docs/Model/InlineResponse20047.md)
 - [InlineResponse20047Data](docs/Model/InlineResponse20047Data.md)
 - [InlineResponse20048](docs/Model/InlineResponse20048.md)
 - [InlineResponse20048Data](docs/Model/InlineResponse20048Data.md)
 - [InlineResponse20049](docs/Model/InlineResponse20049.md)
 - [InlineResponse2004Data](docs/Model/InlineResponse2004Data.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InlineResponse20050](docs/Model/InlineResponse20050.md)
 - [InlineResponse20050Data](docs/Model/InlineResponse20050Data.md)
 - [InlineResponse20051](docs/Model/InlineResponse20051.md)
 - [InlineResponse20051Data](docs/Model/InlineResponse20051Data.md)
 - [InlineResponse20052](docs/Model/InlineResponse20052.md)
 - [InlineResponse20053](docs/Model/InlineResponse20053.md)
 - [InlineResponse20054](docs/Model/InlineResponse20054.md)
 - [InlineResponse20054Data](docs/Model/InlineResponse20054Data.md)
 - [InlineResponse20055](docs/Model/InlineResponse20055.md)
 - [InlineResponse20056](docs/Model/InlineResponse20056.md)
 - [InlineResponse20056Data](docs/Model/InlineResponse20056Data.md)
 - [InlineResponse20057](docs/Model/InlineResponse20057.md)
 - [InlineResponse20057Data](docs/Model/InlineResponse20057Data.md)
 - [InlineResponse20058](docs/Model/InlineResponse20058.md)
 - [InlineResponse20058Data](docs/Model/InlineResponse20058Data.md)
 - [InlineResponse20059](docs/Model/InlineResponse20059.md)
 - [InlineResponse2006](docs/Model/InlineResponse2006.md)
 - [InlineResponse20060](docs/Model/InlineResponse20060.md)
 - [InlineResponse20060Data](docs/Model/InlineResponse20060Data.md)
 - [InlineResponse20061](docs/Model/InlineResponse20061.md)
 - [InlineResponse20062](docs/Model/InlineResponse20062.md)
 - [InlineResponse20063](docs/Model/InlineResponse20063.md)
 - [InlineResponse20063Data](docs/Model/InlineResponse20063Data.md)
 - [InlineResponse20064](docs/Model/InlineResponse20064.md)
 - [InlineResponse20065](docs/Model/InlineResponse20065.md)
 - [InlineResponse20065Data](docs/Model/InlineResponse20065Data.md)
 - [InlineResponse20066](docs/Model/InlineResponse20066.md)
 - [InlineResponse20067](docs/Model/InlineResponse20067.md)
 - [InlineResponse20067Data](docs/Model/InlineResponse20067Data.md)
 - [InlineResponse20068](docs/Model/InlineResponse20068.md)
 - [InlineResponse20069](docs/Model/InlineResponse20069.md)
 - [InlineResponse20069Data](docs/Model/InlineResponse20069Data.md)
 - [InlineResponse2006Data](docs/Model/InlineResponse2006Data.md)
 - [InlineResponse2007](docs/Model/InlineResponse2007.md)
 - [InlineResponse20070](docs/Model/InlineResponse20070.md)
 - [InlineResponse20071](docs/Model/InlineResponse20071.md)
 - [InlineResponse20071Data](docs/Model/InlineResponse20071Data.md)
 - [InlineResponse20072](docs/Model/InlineResponse20072.md)
 - [InlineResponse20073](docs/Model/InlineResponse20073.md)
 - [InlineResponse20073Data](docs/Model/InlineResponse20073Data.md)
 - [InlineResponse20074](docs/Model/InlineResponse20074.md)
 - [InlineResponse20074Data](docs/Model/InlineResponse20074Data.md)
 - [InlineResponse20075](docs/Model/InlineResponse20075.md)
 - [InlineResponse20076](docs/Model/InlineResponse20076.md)
 - [InlineResponse20076Data](docs/Model/InlineResponse20076Data.md)
 - [InlineResponse20077](docs/Model/InlineResponse20077.md)
 - [InlineResponse20078](docs/Model/InlineResponse20078.md)
 - [InlineResponse20078Data](docs/Model/InlineResponse20078Data.md)
 - [InlineResponse20079](docs/Model/InlineResponse20079.md)
 - [InlineResponse20079Data](docs/Model/InlineResponse20079Data.md)
 - [InlineResponse2007Data](docs/Model/InlineResponse2007Data.md)
 - [InlineResponse2008](docs/Model/InlineResponse2008.md)
 - [InlineResponse20080](docs/Model/InlineResponse20080.md)
 - [InlineResponse20081](docs/Model/InlineResponse20081.md)
 - [InlineResponse20081Data](docs/Model/InlineResponse20081Data.md)
 - [InlineResponse20082](docs/Model/InlineResponse20082.md)
 - [InlineResponse20082Data](docs/Model/InlineResponse20082Data.md)
 - [InlineResponse20083](docs/Model/InlineResponse20083.md)
 - [InlineResponse20083Data](docs/Model/InlineResponse20083Data.md)
 - [InlineResponse20084](docs/Model/InlineResponse20084.md)
 - [InlineResponse20085](docs/Model/InlineResponse20085.md)
 - [InlineResponse20085Data](docs/Model/InlineResponse20085Data.md)
 - [InlineResponse20086](docs/Model/InlineResponse20086.md)
 - [InlineResponse20086Data](docs/Model/InlineResponse20086Data.md)
 - [InlineResponse20087](docs/Model/InlineResponse20087.md)
 - [InlineResponse20087Data](docs/Model/InlineResponse20087Data.md)
 - [InlineResponse20088](docs/Model/InlineResponse20088.md)
 - [InlineResponse20089](docs/Model/InlineResponse20089.md)
 - [InlineResponse20089Data](docs/Model/InlineResponse20089Data.md)
 - [InlineResponse2009](docs/Model/InlineResponse2009.md)
 - [InlineResponse20090](docs/Model/InlineResponse20090.md)
 - [InlineResponse20090Data](docs/Model/InlineResponse20090Data.md)
 - [InlineResponse20091](docs/Model/InlineResponse20091.md)
 - [InlineResponse20091Data](docs/Model/InlineResponse20091Data.md)
 - [InlineResponse20092](docs/Model/InlineResponse20092.md)
 - [InlineResponse20093](docs/Model/InlineResponse20093.md)
 - [InlineResponse20093Data](docs/Model/InlineResponse20093Data.md)
 - [InlineResponse20094](docs/Model/InlineResponse20094.md)
 - [InlineResponse20094Data](docs/Model/InlineResponse20094Data.md)
 - [InlineResponse20095](docs/Model/InlineResponse20095.md)
 - [InlineResponse20095Data](docs/Model/InlineResponse20095Data.md)
 - [InlineResponse20096](docs/Model/InlineResponse20096.md)
 - [InlineResponse20096Data](docs/Model/InlineResponse20096Data.md)
 - [InlineResponse20097](docs/Model/InlineResponse20097.md)
 - [InlineResponse20097Data](docs/Model/InlineResponse20097Data.md)
 - [InlineResponse20098](docs/Model/InlineResponse20098.md)
 - [InlineResponse20098Data](docs/Model/InlineResponse20098Data.md)
 - [InlineResponse20099](docs/Model/InlineResponse20099.md)
 - [InlineResponse20099Data](docs/Model/InlineResponse20099Data.md)
 - [InlineResponse2009Data](docs/Model/InlineResponse2009Data.md)
 - [InlineResponse200Data](docs/Model/InlineResponse200Data.md)
 - [InlineResponse201](docs/Model/InlineResponse201.md)
 - [InlineResponse2011](docs/Model/InlineResponse2011.md)
 - [InlineResponse20110](docs/Model/InlineResponse20110.md)
 - [InlineResponse20110Data](docs/Model/InlineResponse20110Data.md)
 - [InlineResponse20111](docs/Model/InlineResponse20111.md)
 - [InlineResponse20111Data](docs/Model/InlineResponse20111Data.md)
 - [InlineResponse20112](docs/Model/InlineResponse20112.md)
 - [InlineResponse20112Data](docs/Model/InlineResponse20112Data.md)
 - [InlineResponse20113](docs/Model/InlineResponse20113.md)
 - [InlineResponse20113Data](docs/Model/InlineResponse20113Data.md)
 - [InlineResponse20114](docs/Model/InlineResponse20114.md)
 - [InlineResponse20114Data](docs/Model/InlineResponse20114Data.md)
 - [InlineResponse20115](docs/Model/InlineResponse20115.md)
 - [InlineResponse20115Data](docs/Model/InlineResponse20115Data.md)
 - [InlineResponse2011Data](docs/Model/InlineResponse2011Data.md)
 - [InlineResponse2012](docs/Model/InlineResponse2012.md)
 - [InlineResponse2012Data](docs/Model/InlineResponse2012Data.md)
 - [InlineResponse2013](docs/Model/InlineResponse2013.md)
 - [InlineResponse2013Data](docs/Model/InlineResponse2013Data.md)
 - [InlineResponse2014](docs/Model/InlineResponse2014.md)
 - [InlineResponse2014Data](docs/Model/InlineResponse2014Data.md)
 - [InlineResponse2015](docs/Model/InlineResponse2015.md)
 - [InlineResponse2015Data](docs/Model/InlineResponse2015Data.md)
 - [InlineResponse2016](docs/Model/InlineResponse2016.md)
 - [InlineResponse2016Data](docs/Model/InlineResponse2016Data.md)
 - [InlineResponse2017](docs/Model/InlineResponse2017.md)
 - [InlineResponse2017Data](docs/Model/InlineResponse2017Data.md)
 - [InlineResponse2018](docs/Model/InlineResponse2018.md)
 - [InlineResponse2018Data](docs/Model/InlineResponse2018Data.md)
 - [InlineResponse2019](docs/Model/InlineResponse2019.md)
 - [InlineResponse2019Data](docs/Model/InlineResponse2019Data.md)
 - [InlineResponse201Data](docs/Model/InlineResponse201Data.md)
 - [InlineResponse400](docs/Model/InlineResponse400.md)
 - [InlineResponse401](docs/Model/InlineResponse401.md)
 - [InlineResponse404](docs/Model/InlineResponse404.md)
 - [InlineResponse405](docs/Model/InlineResponse405.md)
 - [InlineResponse500](docs/Model/InlineResponse500.md)
 - [Interest](docs/Model/Interest.md)
 - [InterestRecord](docs/Model/InterestRecord.md)
 - [InterestrecordsInterestRecordIdBody](docs/Model/InterestrecordsInterestRecordIdBody.md)
 - [Language](docs/Model/Language.md)
 - [Message](docs/Model/Message.md)
 - [MessageDetail](docs/Model/MessageDetail.md)
 - [MessageTemplate](docs/Model/MessageTemplate.md)
 - [OpeningDay](docs/Model/OpeningDay.md)
 - [Order](docs/Model/Order.md)
 - [OrderInvoicing](docs/Model/OrderInvoicing.md)
 - [OrderItem](docs/Model/OrderItem.md)
 - [OrderShipping](docs/Model/OrderShipping.md)
 - [OrdersBody](docs/Model/OrdersBody.md)
 - [Parameter](docs/Model/Parameter.md)
 - [Partner](docs/Model/Partner.md)
 - [PaymentRecap](docs/Model/PaymentRecap.md)
 - [PaymentVoucher](docs/Model/PaymentVoucher.md)
 - [PersonalInformation](docs/Model/PersonalInformation.md)
 - [PluId](docs/Model/PluId.md)
 - [Point](docs/Model/Point.md)
 - [PointReservation](docs/Model/PointReservation.md)
 - [PointType](docs/Model/PointType.md)
 - [Product](docs/Model/Product.md)
 - [ProductBatch](docs/Model/ProductBatch.md)
 - [ProductBrand](docs/Model/ProductBrand.md)
 - [ProductGroup](docs/Model/ProductGroup.md)
 - [ProductReservation](docs/Model/ProductReservation.md)
 - [ProductReservationItem](docs/Model/ProductReservationItem.md)
 - [ProductReservationSource](docs/Model/ProductReservationSource.md)
 - [ProductbrandsBatchBody](docs/Model/ProductbrandsBatchBody.md)
 - [ProductgroupsBatchBody](docs/Model/ProductgroupsBatchBody.md)
 - [ProductreservationsBody](docs/Model/ProductreservationsBody.md)
 - [ProductsBatchBody](docs/Model/ProductsBatchBody.md)
 - [Property](docs/Model/Property.md)
 - [PropertyItem](docs/Model/PropertyItem.md)
 - [PropertyRecord](docs/Model/PropertyRecord.md)
 - [PropertyrecordsPropertyRecordIdBody](docs/Model/PropertyrecordsPropertyRecordIdBody.md)
 - [PropertyrecordsPropertyRecordIdBody1](docs/Model/PropertyrecordsPropertyRecordIdBody1.md)
 - [Purchase](docs/Model/Purchase.md)
 - [PurchaseConditions](docs/Model/PurchaseConditions.md)
 - [PurchaseItem](docs/Model/PurchaseItem.md)
 - [PurchaseItemType](docs/Model/PurchaseItemType.md)
 - [PurchaseType](docs/Model/PurchaseType.md)
 - [QualificationTurnover](docs/Model/QualificationTurnover.md)
 - [Recommendation](docs/Model/Recommendation.md)
 - [RecommendedReward](docs/Model/RecommendedReward.md)
 - [Reward](docs/Model/Reward.md)
 - [RewardProperties](docs/Model/RewardProperties.md)
 - [SearchResult](docs/Model/SearchResult.md)
 - [Segment](docs/Model/Segment.md)
 - [SegmentRecord](docs/Model/SegmentRecord.md)
 - [Setup](docs/Model/Setup.md)
 - [Skipass](docs/Model/Skipass.md)
 - [SkipassesSkipassIdBody](docs/Model/SkipassesSkipassIdBody.md)
 - [SocialNetworkCredentials](docs/Model/SocialNetworkCredentials.md)
 - [Status](docs/Model/Status.md)
 - [StatusRecord](docs/Model/StatusRecord.md)
 - [Store](docs/Model/Store.md)
 - [StoreGroup](docs/Model/StoreGroup.md)
 - [StoreGroupRecord](docs/Model/StoreGroupRecord.md)
 - [StoreIdPropertyrecordsBody](docs/Model/StoreIdPropertyrecordsBody.md)
 - [StoresBody](docs/Model/StoresBody.md)
 - [StoresStoreIdBody](docs/Model/StoresStoreIdBody.md)
 - [Tag](docs/Model/Tag.md)
 - [TimeInterval](docs/Model/TimeInterval.md)
 - [TokensBody](docs/Model/TokensBody.md)
 - [TokensTokenIdBody](docs/Model/TokensTokenIdBody.md)
 - [UTM](docs/Model/UTM.md)
 - [User](docs/Model/User.md)
 - [UserRole](docs/Model/UserRole.md)
 - [Voucher](docs/Model/Voucher.md)

## Documentation For Authorization


## basicAuth

- **Type**: HTTP basic authentication

## bearerAuth

- **Type**: HTTP bearer authentication


## Author

support@carecloud.cz

