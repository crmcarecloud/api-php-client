<?php
/**
 * OneTimePasswordApi
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
 * Swagger Codegen version: 3.0.55
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
 * OneTimePasswordApi Class Doc Comment
 *
 * @category Class
 * @package  CrmCareCloud\Webservice\RestApi\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OneTimePasswordApi
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
     * Operation postSendOtp
     *
     * Send a one-time password to a communication channel.
     *
     * @param  \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSendBody $body body (required)
     * @param  string $accept_language The unique ID of the language code by ISO 639-1. (optional, default to cs, en-gb;q=0.8)
     *
     * @throws \CrmCareCloud\Webservice\RestApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20094
     */
    public function postSendOtp($body, $accept_language = 'cs, en-gb;q=0.8')
    {
        list($response) = $this->postSendOtpWithHttpInfo($body, $accept_language);
        return $response;
    }

    /**
     * Operation postSendOtpWithHttpInfo
     *
     * Send a one-time password to a communication channel.
     *
     * @param  \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSendBody $body (required)
     * @param  string $accept_language The unique ID of the language code by ISO 639-1. (optional, default to cs, en-gb;q=0.8)
     *
     * @throws \CrmCareCloud\Webservice\RestApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20094, HTTP status code, HTTP response headers (array of strings)
     */
    public function postSendOtpWithHttpInfo($body, $accept_language = 'cs, en-gb;q=0.8')
    {
        $returnType = '\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20094';
        $request = $this->postSendOtpRequest($body, $accept_language);

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
     * Operation postSendOtpAsync
     *
     * Send a one-time password to a communication channel.
     *
     * @param  \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSendBody $body (required)
     * @param  string $accept_language The unique ID of the language code by ISO 639-1. (optional, default to cs, en-gb;q=0.8)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postSendOtpAsync($body, $accept_language = 'cs, en-gb;q=0.8')
    {
        return $this->postSendOtpAsyncWithHttpInfo($body, $accept_language)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postSendOtpAsyncWithHttpInfo
     *
     * Send a one-time password to a communication channel.
     *
     * @param  \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSendBody $body (required)
     * @param  string|null $accept_language The unique ID of the language code by ISO 639-1. (optional, default to cs, en-gb;q=0.8)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postSendOtpAsyncWithHttpInfo($body, $accept_language = 'cs, en-gb;q=0.8')
    {
        $returnType = '\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20094';
        $request = $this->postSendOtpRequest($body, $accept_language);

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
     * Create request for operation 'postSendOtp'
     *
     * @param  \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSendBody $body (required)
     * @param  string $accept_language The unique ID of the language code by ISO 639-1. (optional, default to cs, en-gb;q=0.8)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postSendOtpRequest($body, $accept_language = 'cs, en-gb;q=0.8')
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling postSendOtp'
            );
        }

        $resourcePath = '/one-time-password/actions/send';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

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
                ['application/json']
            );
        }

        // body params
        $_tempBody = $body;

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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if ($this->getConfig()->getBasicAuth() && ($this->getConfig()->getUsername() !== null || $this->getConfig()->getPassword() !== null)) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->getConfig()->getUsername() . ":" . $this->getConfig()->getPassword());
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

        $query = ObjectSerializer::customBuildQuery($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation postVerifyOtp
     *
     * Verify a one-time password
     *
     * @param  \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsVerifyBody $body body (required)
     * @param  string $accept_language The unique ID of the language code by ISO 639-1. (optional, default to cs, en-gb;q=0.8)
     *
     * @throws \CrmCareCloud\Webservice\RestApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20095
     */
    public function postVerifyOtp($body, $accept_language = 'cs, en-gb;q=0.8')
    {
        list($response) = $this->postVerifyOtpWithHttpInfo($body, $accept_language);
        return $response;
    }

    /**
     * Operation postVerifyOtpWithHttpInfo
     *
     * Verify a one-time password
     *
     * @param  \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsVerifyBody $body (required)
     * @param  string $accept_language The unique ID of the language code by ISO 639-1. (optional, default to cs, en-gb;q=0.8)
     *
     * @throws \CrmCareCloud\Webservice\RestApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20095, HTTP status code, HTTP response headers (array of strings)
     */
    public function postVerifyOtpWithHttpInfo($body, $accept_language = 'cs, en-gb;q=0.8')
    {
        $returnType = '\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20095';
        $request = $this->postVerifyOtpRequest($body, $accept_language);

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
                        '\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20095',
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
     * Operation postVerifyOtpAsync
     *
     * Verify a one-time password
     *
     * @param  \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsVerifyBody $body (required)
     * @param  string $accept_language The unique ID of the language code by ISO 639-1. (optional, default to cs, en-gb;q=0.8)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postVerifyOtpAsync($body, $accept_language = 'cs, en-gb;q=0.8')
    {
        return $this->postVerifyOtpAsyncWithHttpInfo($body, $accept_language)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postVerifyOtpAsyncWithHttpInfo
     *
     * Verify a one-time password
     *
     * @param  \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsVerifyBody $body (required)
     * @param  string|null $accept_language The unique ID of the language code by ISO 639-1. (optional, default to cs, en-gb;q=0.8)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postVerifyOtpAsyncWithHttpInfo($body, $accept_language = 'cs, en-gb;q=0.8')
    {
        $returnType = '\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20095';
        $request = $this->postVerifyOtpRequest($body, $accept_language);

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
     * Create request for operation 'postVerifyOtp'
     *
     * @param  \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsVerifyBody $body (required)
     * @param  string $accept_language The unique ID of the language code by ISO 639-1. (optional, default to cs, en-gb;q=0.8)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postVerifyOtpRequest($body, $accept_language = 'cs, en-gb;q=0.8')
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling postVerifyOtp'
            );
        }

        $resourcePath = '/one-time-password/actions/verify';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

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
                ['application/json']
            );
        }

        // body params
        $_tempBody = $body;

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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if ($this->getConfig()->getBasicAuth() && ($this->getConfig()->getUsername() !== null || $this->getConfig()->getPassword() !== null)) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->getConfig()->getUsername() . ":" . $this->getConfig()->getPassword());
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

        $query = ObjectSerializer::customBuildQuery($queryParams);
        return new Request(
            'POST',
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
