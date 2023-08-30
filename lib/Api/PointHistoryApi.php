<?php
/**
 * PointHistoryApi
 * PHP version 5
 *
 * @category Class
 * @package  CrmCareCloud\Webservice\RestApi\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * REST API Reference
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@carecloud.cz
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.26
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CrmCareCloud\Webservice\RestApi\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use CrmCareCloud\Webservice\RestApi\Client\ApiException;
use CrmCareCloud\Webservice\RestApi\Client\Configuration;
use CrmCareCloud\Webservice\RestApi\Client\HeaderSelector;
use CrmCareCloud\Webservice\RestApi\Client\ObjectSerializer;

/**
 * PointHistoryApi Class Doc Comment
 *
 * @category Class
 * @package  CrmCareCloud\Webservice\RestApi\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PointHistoryApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getPointHistory
     *
     * Get point transaction history
     *
     * @param  string $customer_id The unique ID of the customer. (required)
     * @param  string $accept_language The unique ID of the language code by ISO 639-1. (optional, default to cs, en-gb;q=0.8)
     * @param  int $count The number of records to return. (optional, default to 100)
     * @param  int $offset The number of records from a collection to skip. (optional, default to 0)
     * @param  string $sort_field Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* (optional)
     * @param  string $sort_direction Direction of sorting the response list. (optional)
     * @param  string $store_id The unique ID of the store in CareCloud. (optional)
     * @param  string $partner_id Unique ID of the partner from the resource [GET /partners](/#tag/Partners). (optional)
     * @param  string $time_from Filter results on the start of the time interval. *(YYYY-MM-DD HH:MM:SS)* (optional)
     * @param  string $time_to Filter results on the end of the time interval. *(YYYY-MM-DD HH:MM:SS)* (optional)
     * @param  string $point_operation_type Search record by the operation type name or a part of the operation type name. (optional)
     * @param  string $point_operation_note Search record by the operation note or a part of the operation note. (optional)
     * @param  string $point_type_id The unique ID of a point type. (optional)
     *
     * @throws \CrmCareCloud\Webservice\RestApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20094
     */
    public function getPointHistory($customer_id, $accept_language = 'cs, en-gb;q=0.8', $count = '100', $offset = '0', $sort_field = null, $sort_direction = null, $store_id = null, $partner_id = null, $time_from = null, $time_to = null, $point_operation_type = null, $point_operation_note = null, $point_type_id = null)
    {
        list($response) = $this->getPointHistoryWithHttpInfo($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $store_id, $partner_id, $time_from, $time_to, $point_operation_type, $point_operation_note, $point_type_id);
        return $response;
    }

    /**
     * Operation getPointHistoryWithHttpInfo
     *
     * Get point transaction history
     *
     * @param  string $customer_id The unique ID of the customer. (required)
     * @param  string $accept_language The unique ID of the language code by ISO 639-1. (optional, default to cs, en-gb;q=0.8)
     * @param  int $count The number of records to return. (optional, default to 100)
     * @param  int $offset The number of records from a collection to skip. (optional, default to 0)
     * @param  string $sort_field Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* (optional)
     * @param  string $sort_direction Direction of sorting the response list. (optional)
     * @param  string $store_id The unique ID of the store in CareCloud. (optional)
     * @param  string $partner_id Unique ID of the partner from the resource [GET /partners](/#tag/Partners). (optional)
     * @param  string $time_from Filter results on the start of the time interval. *(YYYY-MM-DD HH:MM:SS)* (optional)
     * @param  string $time_to Filter results on the end of the time interval. *(YYYY-MM-DD HH:MM:SS)* (optional)
     * @param  string $point_operation_type Search record by the operation type name or a part of the operation type name. (optional)
     * @param  string $point_operation_note Search record by the operation note or a part of the operation note. (optional)
     * @param  string $point_type_id The unique ID of a point type. (optional)
     *
     * @throws \CrmCareCloud\Webservice\RestApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20094, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPointHistoryWithHttpInfo($customer_id, $accept_language = 'cs, en-gb;q=0.8', $count = '100', $offset = '0', $sort_field = null, $sort_direction = null, $store_id = null, $partner_id = null, $time_from = null, $time_to = null, $point_operation_type = null, $point_operation_note = null, $point_type_id = null)
    {
        $returnType = '\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20094';
        $request = $this->getPointHistoryRequest($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $store_id, $partner_id, $time_from, $time_to, $point_operation_type, $point_operation_note, $point_type_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20094',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse405',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPointHistoryAsync
     *
     * Get point transaction history
     *
     * @param  string $customer_id The unique ID of the customer. (required)
     * @param  string $accept_language The unique ID of the language code by ISO 639-1. (optional, default to cs, en-gb;q=0.8)
     * @param  int $count The number of records to return. (optional, default to 100)
     * @param  int $offset The number of records from a collection to skip. (optional, default to 0)
     * @param  string $sort_field Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* (optional)
     * @param  string $sort_direction Direction of sorting the response list. (optional)
     * @param  string $store_id The unique ID of the store in CareCloud. (optional)
     * @param  string $partner_id Unique ID of the partner from the resource [GET /partners](/#tag/Partners). (optional)
     * @param  string $time_from Filter results on the start of the time interval. *(YYYY-MM-DD HH:MM:SS)* (optional)
     * @param  string $time_to Filter results on the end of the time interval. *(YYYY-MM-DD HH:MM:SS)* (optional)
     * @param  string $point_operation_type Search record by the operation type name or a part of the operation type name. (optional)
     * @param  string $point_operation_note Search record by the operation note or a part of the operation note. (optional)
     * @param  string $point_type_id The unique ID of a point type. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPointHistoryAsync($customer_id, $accept_language = 'cs, en-gb;q=0.8', $count = '100', $offset = '0', $sort_field = null, $sort_direction = null, $store_id = null, $partner_id = null, $time_from = null, $time_to = null, $point_operation_type = null, $point_operation_note = null, $point_type_id = null)
    {
        return $this->getPointHistoryAsyncWithHttpInfo($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $store_id, $partner_id, $time_from, $time_to, $point_operation_type, $point_operation_note, $point_type_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPointHistoryAsyncWithHttpInfo
     *
     * Get point transaction history
     *
     * @param  string $customer_id The unique ID of the customer. (required)
     * @param  string|null $accept_language The unique ID of the language code by ISO 639-1. (optional, default to cs, en-gb;q=0.8)
     * @param  int|null $count The number of records to return. (optional, default to 100)
     * @param  int|null $offset The number of records from a collection to skip. (optional, default to 0)
     * @param  string|null $sort_field Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* (optional)
     * @param  string|null $sort_direction Direction of sorting the response list. (optional)
     * @param  string|null $store_id The unique ID of the store in CareCloud. (optional)
     * @param  string|null $partner_id Unique ID of the partner from the resource [GET /partners](/#tag/Partners). (optional)
     * @param  string|null $time_from Filter results on the start of the time interval. *(YYYY-MM-DD HH:MM:SS)* (optional)
     * @param  string|null $time_to Filter results on the end of the time interval. *(YYYY-MM-DD HH:MM:SS)* (optional)
     * @param  string|null $point_operation_type Search record by the operation type name or a part of the operation type name. (optional)
     * @param  string|null $point_operation_note Search record by the operation note or a part of the operation note. (optional)
     * @param  string|null $point_type_id The unique ID of a point type. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPointHistoryAsyncWithHttpInfo($customer_id, $accept_language = 'cs, en-gb;q=0.8', $count = '100', $offset = '0', $sort_field = null, $sort_direction = null, $store_id = null, $partner_id = null, $time_from = null, $time_to = null, $point_operation_type = null, $point_operation_note = null, $point_type_id = null)
    {
        $returnType = '\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20094';
        $request = $this->getPointHistoryRequest($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $store_id, $partner_id, $time_from, $time_to, $point_operation_type, $point_operation_note, $point_type_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getPointHistory'
     *
     * @param  string $customer_id The unique ID of the customer. (required)
     * @param  string $accept_language The unique ID of the language code by ISO 639-1. (optional, default to cs, en-gb;q=0.8)
     * @param  int $count The number of records to return. (optional, default to 100)
     * @param  int $offset The number of records from a collection to skip. (optional, default to 0)
     * @param  string $sort_field Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* (optional)
     * @param  string $sort_direction Direction of sorting the response list. (optional)
     * @param  string $store_id The unique ID of the store in CareCloud. (optional)
     * @param  string $partner_id Unique ID of the partner from the resource [GET /partners](/#tag/Partners). (optional)
     * @param  string $time_from Filter results on the start of the time interval. *(YYYY-MM-DD HH:MM:SS)* (optional)
     * @param  string $time_to Filter results on the end of the time interval. *(YYYY-MM-DD HH:MM:SS)* (optional)
     * @param  string $point_operation_type Search record by the operation type name or a part of the operation type name. (optional)
     * @param  string $point_operation_note Search record by the operation note or a part of the operation note. (optional)
     * @param  string $point_type_id The unique ID of a point type. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getPointHistoryRequest($customer_id, $accept_language = 'cs, en-gb;q=0.8', $count = '100', $offset = '0', $sort_field = null, $sort_direction = null, $store_id = null, $partner_id = null, $time_from = null, $time_to = null, $point_operation_type = null, $point_operation_note = null, $point_type_id = null)
    {
        // verify the required parameter 'customer_id' is set
        if ($customer_id === null || (is_array($customer_id) && count($customer_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $customer_id when calling getPointHistory'
            );
        }

        $resourcePath = '/point-history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($count !== null) {
            $queryParams['count'] = ObjectSerializer::toQueryValue($count, null);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = ObjectSerializer::toQueryValue($offset, null);
        }
        // query params
        if ($sort_field !== null) {
            $queryParams['sort_field'] = ObjectSerializer::toQueryValue($sort_field, null);
        }
        // query params
        if ($sort_direction !== null) {
            $queryParams['sort_direction'] = ObjectSerializer::toQueryValue($sort_direction, null);
        }
        // query params
        if ($customer_id !== null) {
            $queryParams['customer_id'] = ObjectSerializer::toQueryValue($customer_id, null);
        }
        // query params
        if ($store_id !== null) {
            $queryParams['store_id'] = ObjectSerializer::toQueryValue($store_id, null);
        }
        // query params
        if ($partner_id !== null) {
            $queryParams['partner_id'] = ObjectSerializer::toQueryValue($partner_id, null);
        }
        // query params
        if ($time_from !== null) {
            $queryParams['time_from'] = ObjectSerializer::toQueryValue($time_from, null);
        }
        // query params
        if ($time_to !== null) {
            $queryParams['time_to'] = ObjectSerializer::toQueryValue($time_to, null);
        }
        // query params
        if ($point_operation_type !== null) {
            $queryParams['point_operation_type'] = ObjectSerializer::toQueryValue($point_operation_type, null);
        }
        // query params
        if ($point_operation_note !== null) {
            $queryParams['point_operation_note'] = ObjectSerializer::toQueryValue($point_operation_note, null);
        }
        // query params
        if ($point_type_id !== null) {
            $queryParams['point_type_id'] = ObjectSerializer::toQueryValue($point_type_id, null);
        }
        // header params
        if ($accept_language !== null) {
            $headerParams['Accept-Language'] = ObjectSerializer::toHeaderValue($accept_language);
        }



        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // body params
        $_tempBody = null;

        // for model (json/xml)
        if ($_tempBody !== null) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires Bearer token
        if ($this->getConfig()->getBearerAuth() && ($this->getConfig()->getAccessToken() !== null)) {
            $headers['Authorization'] = 'Bearer ' . $this->getConfig()->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->getConfig()->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->getConfig()->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
