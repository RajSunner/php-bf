<?php
/**
 * CardanoPoolsApi
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Blockfrost.io ~ API Documentation
 *
 * Blockfrost is an API as a service that allows users to interact with the Cardano blockchain and parts of its ecosystem.  ## Tokens  After signing up on https://blockfrost.io, a `project_id` token is automatically generated for each project. HTTP header of your request MUST include this `project_id` in order to authenticate against Blockfrost servers.  ## Available networks  At the moment, you can use the following networks. Please, note that each network has its own `project_id`.  <table>   <tr><td><b>Network</b></td><td><b>Endpoint</b></td></tr>   <tr><td>Cardano mainnet</td><td><tt>https://cardano-mainnet.blockfrost.io/api/v0</td></tt></tr>   <tr><td>Cardano testnet</td><td><tt>https://cardano-testnet.blockfrost.io/api/v0</tt></td></tr>   <tr><td>InterPlanetary File System</td><td><tt>https://ipfs.blockfrost.io/api/v0</tt></td></tr> </table>  ## Concepts  * All endpoints return either a JSON object or an array. * Data is returned in *ascending* (oldest first, newest last) order.   * You might use the `?order=desc` query parameter to reverse this order. * By default, we return 100 results at a time. You have to use `?page=2` to list through the results. * All time and timestamp related fields (except `server_time`) are in seconds of UNIX time. * All amounts are returned in Lovelaces, where 1 ADA = 1 000 000 Lovelaces. * Addresses, accounts and pool IDs are in Bech32 format. * All values are case sensitive. * All hex encoded values are lower case. * Examples are not based on real data. Any resemblance to actual events is purely coincidental. * We allow to upload files up to 100MB of size to IPFS. This might increase in the future.  ## Errors  ### HTTP Status codes  The following are HTTP status code your application might receive when reaching Blockfrost endpoints and it should handle all of these cases.  * HTTP `400` return code is used when the request is not valid. * HTTP `402` return code is used when the projects exceed their daily request limit. * HTTP `403` return code is used when the request is not authenticated. * HTTP `404` return code is used when the resource doesn't exist. * HTTP `418` return code is used when the user has been auto-banned for flooding too much after previously receiving error code `402` or `429`. * HTTP `425` return code is used when the user has submitted a transaction when the mempool is already full, not accepting new txs straight away. * HTTP `429` return code is used when the user has sent too many requests in a given amount of time and therefore has been rate-limited. * HTTP `500` return code is used when our endpoints are having a problem.  ### Error codes  An internal error code number is used for better indication of the error in question. It is passed using the following payload.  ```json {   \"status_code\": 403,   \"error\": \"Forbidden\",   \"message\": \"Invalid project token.\" } ``` ## Limits   There are two types of limits we are enforcing:   The first depends on your plan and is the number of request we allow per day. We defined the day from midnight to midnight of UTC time.   The second is rate limiting. We limit an end user, distinguished by IP address, to 10 requests per second. On top of that, we allow  each user to send burst of 500 requests, which cools off at rate of 10 requests per second. In essence, a user is allowed to make another  whole burst after (currently) 500/10 = 50 seconds. E.g. if a user attemtps to make a call 3 seconds after whole burst, 30 requests will be processed.  We believe this should be sufficient for most of the use cases. If it is not and you have a specific use case, please get in touch with us, and  we will make sure to take it into account as much as we can.  ## SDKs  We support a number of SDKs that will help you in developing your application on top of Blockfrost.  <table>   <tr><td><b>Programming language</b></td><td><b>SDK</b></td></tr>   <tr><td>JavaScript</td><td><a href=\"https://github.com/blockfrost/blockfrost-js\">blockfrost-js</a></tr>   <tr><td>Haskell</td><td><a href=\"https://github.com/blockfrost/blockfrost-haskell\">blockfrost-haskell</a></tr>   <tr><td>Java</td><td><a href=\"https://github.com/blockfrost/blockfrost-java\">blockfrost-java</a></tr>   <tr><td>Python</td><td><a href=\"https://github.com/blockfrost/blockfrost-python\">blockfrost-python</a></tr>   <tr><td>Rust</td><td><a href=\"https://github.com/blockfrost/blockfrost-rust\">blockfrost-rust</a></tr>   <tr><td>Golang</td><td><a href=\"https://github.com/blockfrost/blockfrost-go\">blockfrost-go</a></tr>   <tr><td>Ruby</td><td><a href=\"https://github.com/blockfrost/blockfrost-ruby\">blockfrost-ruby</a></tr>   <tr><td>Swift</td><td><a href=\"https://github.com/blockfrost/blockfrost-swift\">blockfrost-swift</a></tr>   <tr><td>Kotlin</td><td><a href=\"https://github.com/blockfrost/blockfrost-kotlin\">blockfrost-kotlin</a></tr>   <tr><td>Scala</td><td><a href=\"https://github.com/blockfrost/blockfrost-scala\">blockfrost-scala</a></tr>   <tr><td>Elixir</td><td><a href=\"https://github.com/blockfrost/blockfrost-elixir\">blockfrost-elixir</a></tr> </table>
 *
 * The version of the OpenAPI document: 0.1.34
 * Contact: contact@blockfrost.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * CardanoPoolsApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CardanoPoolsApi
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
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation poolsExtendedGet
     *
     * List of stake pools with additional information
     *
     * @param  int $count The numbers of pools per page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object[]|\OpenAPI\Client\Model\InlineResponse400|\OpenAPI\Client\Model\InlineResponse403|\OpenAPI\Client\Model\InlineResponse404|\OpenAPI\Client\Model\InlineResponse429|\OpenAPI\Client\Model\InlineResponse418|\OpenAPI\Client\Model\InlineResponse500
     */
    public function poolsExtendedGet($count = 100, $page = 1, $order = 'asc')
    {
        list($response) = $this->poolsExtendedGetWithHttpInfo($count, $page, $order);
        return $response;
    }

    /**
     * Operation poolsExtendedGetWithHttpInfo
     *
     * List of stake pools with additional information
     *
     * @param  int $count The numbers of pools per page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object[]|\OpenAPI\Client\Model\InlineResponse400|\OpenAPI\Client\Model\InlineResponse403|\OpenAPI\Client\Model\InlineResponse404|\OpenAPI\Client\Model\InlineResponse429|\OpenAPI\Client\Model\InlineResponse418|\OpenAPI\Client\Model\InlineResponse500, HTTP status code, HTTP response headers (array of strings)
     */
    public function poolsExtendedGetWithHttpInfo($count = 100, $page = 1, $order = 'asc')
    {
        $request = $this->poolsExtendedGetRequest($count, $page, $order);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('object[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\OpenAPI\Client\Model\InlineResponse400' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse400', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\OpenAPI\Client\Model\InlineResponse403' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse403', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\OpenAPI\Client\Model\InlineResponse404' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse404', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\OpenAPI\Client\Model\InlineResponse429' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse429', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 418:
                    if ('\OpenAPI\Client\Model\InlineResponse418' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse418', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\OpenAPI\Client\Model\InlineResponse500' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse500', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'object[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        'object[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse429',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 418:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse418',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation poolsExtendedGetAsync
     *
     * List of stake pools with additional information
     *
     * @param  int $count The numbers of pools per page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function poolsExtendedGetAsync($count = 100, $page = 1, $order = 'asc')
    {
        return $this->poolsExtendedGetAsyncWithHttpInfo($count, $page, $order)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation poolsExtendedGetAsyncWithHttpInfo
     *
     * List of stake pools with additional information
     *
     * @param  int $count The numbers of pools per page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function poolsExtendedGetAsyncWithHttpInfo($count = 100, $page = 1, $order = 'asc')
    {
        $returnType = 'object[]';
        $request = $this->poolsExtendedGetRequest($count, $page, $order);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'poolsExtendedGet'
     *
     * @param  int $count The numbers of pools per page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function poolsExtendedGetRequest($count = 100, $page = 1, $order = 'asc')
    {
        if ($count !== null && $count > 100) {
            throw new \InvalidArgumentException('invalid value for "$count" when calling CardanoPoolsApi.poolsExtendedGet, must be smaller than or equal to 100.');
        }
        if ($count !== null && $count < 1) {
            throw new \InvalidArgumentException('invalid value for "$count" when calling CardanoPoolsApi.poolsExtendedGet, must be bigger than or equal to 1.');
        }

        if ($page !== null && $page > 21474836) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling CardanoPoolsApi.poolsExtendedGet, must be smaller than or equal to 21474836.');
        }
        if ($page !== null && $page < 1) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling CardanoPoolsApi.poolsExtendedGet, must be bigger than or equal to 1.');
        }


        $resourcePath = '/pools/extended';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($count !== null) {
            if('form' === 'form' && is_array($count)) {
                foreach($count as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['count'] = $count;
            }
        }
        // query params
        if ($page !== null) {
            if('form' === 'form' && is_array($page)) {
                foreach($page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['page'] = $page;
            }
        }
        // query params
        if ($order !== null) {
            if('form' === 'form' && is_array($order)) {
                foreach($order as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['order'] = $order;
            }
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

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('project_id');
        if ($apiKey !== null) {
            $headers['project_id'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation poolsGet
     *
     * List of stake pools
     *
     * @param  int $count The numbers of pools per page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string[]|\OpenAPI\Client\Model\InlineResponse400|\OpenAPI\Client\Model\InlineResponse403|\OpenAPI\Client\Model\InlineResponse404|\OpenAPI\Client\Model\InlineResponse429|\OpenAPI\Client\Model\InlineResponse418|\OpenAPI\Client\Model\InlineResponse500
     */
    public function poolsGet($count = 100, $page = 1, $order = 'asc')
    {
        list($response) = $this->poolsGetWithHttpInfo($count, $page, $order);
        return $response;
    }

    /**
     * Operation poolsGetWithHttpInfo
     *
     * List of stake pools
     *
     * @param  int $count The numbers of pools per page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string[]|\OpenAPI\Client\Model\InlineResponse400|\OpenAPI\Client\Model\InlineResponse403|\OpenAPI\Client\Model\InlineResponse404|\OpenAPI\Client\Model\InlineResponse429|\OpenAPI\Client\Model\InlineResponse418|\OpenAPI\Client\Model\InlineResponse500, HTTP status code, HTTP response headers (array of strings)
     */
    public function poolsGetWithHttpInfo($count = 100, $page = 1, $order = 'asc')
    {
        $request = $this->poolsGetRequest($count, $page, $order);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('string[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'string[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\OpenAPI\Client\Model\InlineResponse400' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse400', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\OpenAPI\Client\Model\InlineResponse403' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse403', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\OpenAPI\Client\Model\InlineResponse404' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse404', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\OpenAPI\Client\Model\InlineResponse429' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse429', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 418:
                    if ('\OpenAPI\Client\Model\InlineResponse418' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse418', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\OpenAPI\Client\Model\InlineResponse500' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse500', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'string[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        'string[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse429',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 418:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse418',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation poolsGetAsync
     *
     * List of stake pools
     *
     * @param  int $count The numbers of pools per page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function poolsGetAsync($count = 100, $page = 1, $order = 'asc')
    {
        return $this->poolsGetAsyncWithHttpInfo($count, $page, $order)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation poolsGetAsyncWithHttpInfo
     *
     * List of stake pools
     *
     * @param  int $count The numbers of pools per page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function poolsGetAsyncWithHttpInfo($count = 100, $page = 1, $order = 'asc')
    {
        $returnType = 'string[]';
        $request = $this->poolsGetRequest($count, $page, $order);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'poolsGet'
     *
     * @param  int $count The numbers of pools per page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function poolsGetRequest($count = 100, $page = 1, $order = 'asc')
    {
        if ($count !== null && $count > 100) {
            throw new \InvalidArgumentException('invalid value for "$count" when calling CardanoPoolsApi.poolsGet, must be smaller than or equal to 100.');
        }
        if ($count !== null && $count < 1) {
            throw new \InvalidArgumentException('invalid value for "$count" when calling CardanoPoolsApi.poolsGet, must be bigger than or equal to 1.');
        }

        if ($page !== null && $page > 21474836) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling CardanoPoolsApi.poolsGet, must be smaller than or equal to 21474836.');
        }
        if ($page !== null && $page < 1) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling CardanoPoolsApi.poolsGet, must be bigger than or equal to 1.');
        }


        $resourcePath = '/pools';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($count !== null) {
            if('form' === 'form' && is_array($count)) {
                foreach($count as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['count'] = $count;
            }
        }
        // query params
        if ($page !== null) {
            if('form' === 'form' && is_array($page)) {
                foreach($page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['page'] = $page;
            }
        }
        // query params
        if ($order !== null) {
            if('form' === 'form' && is_array($order)) {
                foreach($order as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['order'] = $order;
            }
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

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('project_id');
        if ($apiKey !== null) {
            $headers['project_id'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation poolsPoolIdBlocksGet
     *
     * Stake pool blocks
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     * @param  int $count The number of results displayed on one page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string[]|\OpenAPI\Client\Model\InlineResponse400|\OpenAPI\Client\Model\InlineResponse403|\OpenAPI\Client\Model\InlineResponse404|\OpenAPI\Client\Model\InlineResponse429|\OpenAPI\Client\Model\InlineResponse418|\OpenAPI\Client\Model\InlineResponse500
     */
    public function poolsPoolIdBlocksGet($pool_id, $count = 100, $page = 1, $order = 'asc')
    {
        list($response) = $this->poolsPoolIdBlocksGetWithHttpInfo($pool_id, $count, $page, $order);
        return $response;
    }

    /**
     * Operation poolsPoolIdBlocksGetWithHttpInfo
     *
     * Stake pool blocks
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     * @param  int $count The number of results displayed on one page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string[]|\OpenAPI\Client\Model\InlineResponse400|\OpenAPI\Client\Model\InlineResponse403|\OpenAPI\Client\Model\InlineResponse404|\OpenAPI\Client\Model\InlineResponse429|\OpenAPI\Client\Model\InlineResponse418|\OpenAPI\Client\Model\InlineResponse500, HTTP status code, HTTP response headers (array of strings)
     */
    public function poolsPoolIdBlocksGetWithHttpInfo($pool_id, $count = 100, $page = 1, $order = 'asc')
    {
        $request = $this->poolsPoolIdBlocksGetRequest($pool_id, $count, $page, $order);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('string[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'string[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\OpenAPI\Client\Model\InlineResponse400' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse400', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\OpenAPI\Client\Model\InlineResponse403' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse403', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\OpenAPI\Client\Model\InlineResponse404' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse404', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\OpenAPI\Client\Model\InlineResponse429' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse429', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 418:
                    if ('\OpenAPI\Client\Model\InlineResponse418' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse418', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\OpenAPI\Client\Model\InlineResponse500' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse500', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'string[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        'string[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse429',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 418:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse418',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation poolsPoolIdBlocksGetAsync
     *
     * Stake pool blocks
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     * @param  int $count The number of results displayed on one page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function poolsPoolIdBlocksGetAsync($pool_id, $count = 100, $page = 1, $order = 'asc')
    {
        return $this->poolsPoolIdBlocksGetAsyncWithHttpInfo($pool_id, $count, $page, $order)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation poolsPoolIdBlocksGetAsyncWithHttpInfo
     *
     * Stake pool blocks
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     * @param  int $count The number of results displayed on one page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function poolsPoolIdBlocksGetAsyncWithHttpInfo($pool_id, $count = 100, $page = 1, $order = 'asc')
    {
        $returnType = 'string[]';
        $request = $this->poolsPoolIdBlocksGetRequest($pool_id, $count, $page, $order);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'poolsPoolIdBlocksGet'
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     * @param  int $count The number of results displayed on one page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function poolsPoolIdBlocksGetRequest($pool_id, $count = 100, $page = 1, $order = 'asc')
    {
        // verify the required parameter 'pool_id' is set
        if ($pool_id === null || (is_array($pool_id) && count($pool_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $pool_id when calling poolsPoolIdBlocksGet'
            );
        }
        if ($count !== null && $count > 100) {
            throw new \InvalidArgumentException('invalid value for "$count" when calling CardanoPoolsApi.poolsPoolIdBlocksGet, must be smaller than or equal to 100.');
        }
        if ($count !== null && $count < 1) {
            throw new \InvalidArgumentException('invalid value for "$count" when calling CardanoPoolsApi.poolsPoolIdBlocksGet, must be bigger than or equal to 1.');
        }

        if ($page !== null && $page > 21474836) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling CardanoPoolsApi.poolsPoolIdBlocksGet, must be smaller than or equal to 21474836.');
        }
        if ($page !== null && $page < 1) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling CardanoPoolsApi.poolsPoolIdBlocksGet, must be bigger than or equal to 1.');
        }


        $resourcePath = '/pools/{pool_id}/blocks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($count !== null) {
            if('form' === 'form' && is_array($count)) {
                foreach($count as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['count'] = $count;
            }
        }
        // query params
        if ($page !== null) {
            if('form' === 'form' && is_array($page)) {
                foreach($page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['page'] = $page;
            }
        }
        // query params
        if ($order !== null) {
            if('form' === 'form' && is_array($order)) {
                foreach($order as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['order'] = $order;
            }
        }


        // path params
        if ($pool_id !== null) {
            $resourcePath = str_replace(
                '{' . 'pool_id' . '}',
                ObjectSerializer::toPathValue($pool_id),
                $resourcePath
            );
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

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('project_id');
        if ($apiKey !== null) {
            $headers['project_id'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation poolsPoolIdDelegatorsGet
     *
     * Stake pool delegators
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     * @param  int $count The number of results displayed on one page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object[]|\OpenAPI\Client\Model\InlineResponse400|\OpenAPI\Client\Model\InlineResponse403|\OpenAPI\Client\Model\InlineResponse404|\OpenAPI\Client\Model\InlineResponse429|\OpenAPI\Client\Model\InlineResponse418|\OpenAPI\Client\Model\InlineResponse500
     */
    public function poolsPoolIdDelegatorsGet($pool_id, $count = 100, $page = 1, $order = 'asc')
    {
        list($response) = $this->poolsPoolIdDelegatorsGetWithHttpInfo($pool_id, $count, $page, $order);
        return $response;
    }

    /**
     * Operation poolsPoolIdDelegatorsGetWithHttpInfo
     *
     * Stake pool delegators
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     * @param  int $count The number of results displayed on one page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object[]|\OpenAPI\Client\Model\InlineResponse400|\OpenAPI\Client\Model\InlineResponse403|\OpenAPI\Client\Model\InlineResponse404|\OpenAPI\Client\Model\InlineResponse429|\OpenAPI\Client\Model\InlineResponse418|\OpenAPI\Client\Model\InlineResponse500, HTTP status code, HTTP response headers (array of strings)
     */
    public function poolsPoolIdDelegatorsGetWithHttpInfo($pool_id, $count = 100, $page = 1, $order = 'asc')
    {
        $request = $this->poolsPoolIdDelegatorsGetRequest($pool_id, $count, $page, $order);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('object[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\OpenAPI\Client\Model\InlineResponse400' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse400', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\OpenAPI\Client\Model\InlineResponse403' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse403', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\OpenAPI\Client\Model\InlineResponse404' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse404', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\OpenAPI\Client\Model\InlineResponse429' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse429', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 418:
                    if ('\OpenAPI\Client\Model\InlineResponse418' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse418', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\OpenAPI\Client\Model\InlineResponse500' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse500', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'object[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        'object[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse429',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 418:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse418',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation poolsPoolIdDelegatorsGetAsync
     *
     * Stake pool delegators
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     * @param  int $count The number of results displayed on one page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function poolsPoolIdDelegatorsGetAsync($pool_id, $count = 100, $page = 1, $order = 'asc')
    {
        return $this->poolsPoolIdDelegatorsGetAsyncWithHttpInfo($pool_id, $count, $page, $order)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation poolsPoolIdDelegatorsGetAsyncWithHttpInfo
     *
     * Stake pool delegators
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     * @param  int $count The number of results displayed on one page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function poolsPoolIdDelegatorsGetAsyncWithHttpInfo($pool_id, $count = 100, $page = 1, $order = 'asc')
    {
        $returnType = 'object[]';
        $request = $this->poolsPoolIdDelegatorsGetRequest($pool_id, $count, $page, $order);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'poolsPoolIdDelegatorsGet'
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     * @param  int $count The number of results displayed on one page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function poolsPoolIdDelegatorsGetRequest($pool_id, $count = 100, $page = 1, $order = 'asc')
    {
        // verify the required parameter 'pool_id' is set
        if ($pool_id === null || (is_array($pool_id) && count($pool_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $pool_id when calling poolsPoolIdDelegatorsGet'
            );
        }
        if ($count !== null && $count > 100) {
            throw new \InvalidArgumentException('invalid value for "$count" when calling CardanoPoolsApi.poolsPoolIdDelegatorsGet, must be smaller than or equal to 100.');
        }
        if ($count !== null && $count < 1) {
            throw new \InvalidArgumentException('invalid value for "$count" when calling CardanoPoolsApi.poolsPoolIdDelegatorsGet, must be bigger than or equal to 1.');
        }

        if ($page !== null && $page > 21474836) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling CardanoPoolsApi.poolsPoolIdDelegatorsGet, must be smaller than or equal to 21474836.');
        }
        if ($page !== null && $page < 1) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling CardanoPoolsApi.poolsPoolIdDelegatorsGet, must be bigger than or equal to 1.');
        }


        $resourcePath = '/pools/{pool_id}/delegators';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($count !== null) {
            if('form' === 'form' && is_array($count)) {
                foreach($count as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['count'] = $count;
            }
        }
        // query params
        if ($page !== null) {
            if('form' === 'form' && is_array($page)) {
                foreach($page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['page'] = $page;
            }
        }
        // query params
        if ($order !== null) {
            if('form' === 'form' && is_array($order)) {
                foreach($order as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['order'] = $order;
            }
        }


        // path params
        if ($pool_id !== null) {
            $resourcePath = str_replace(
                '{' . 'pool_id' . '}',
                ObjectSerializer::toPathValue($pool_id),
                $resourcePath
            );
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

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('project_id');
        if ($apiKey !== null) {
            $headers['project_id'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation poolsPoolIdGet
     *
     * Specific stake pool
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\Pool|\OpenAPI\Client\Model\InlineResponse400|\OpenAPI\Client\Model\InlineResponse403|\OpenAPI\Client\Model\InlineResponse404|\OpenAPI\Client\Model\InlineResponse429|\OpenAPI\Client\Model\InlineResponse418|\OpenAPI\Client\Model\InlineResponse500
     */
    public function poolsPoolIdGet($pool_id)
    {
        list($response) = $this->poolsPoolIdGetWithHttpInfo($pool_id);
        return $response;
    }

    /**
     * Operation poolsPoolIdGetWithHttpInfo
     *
     * Specific stake pool
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\Pool|\OpenAPI\Client\Model\InlineResponse400|\OpenAPI\Client\Model\InlineResponse403|\OpenAPI\Client\Model\InlineResponse404|\OpenAPI\Client\Model\InlineResponse429|\OpenAPI\Client\Model\InlineResponse418|\OpenAPI\Client\Model\InlineResponse500, HTTP status code, HTTP response headers (array of strings)
     */
    public function poolsPoolIdGetWithHttpInfo($pool_id)
    {
        $request = $this->poolsPoolIdGetRequest($pool_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\Pool' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\Pool', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\OpenAPI\Client\Model\InlineResponse400' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse400', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\OpenAPI\Client\Model\InlineResponse403' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse403', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\OpenAPI\Client\Model\InlineResponse404' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse404', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\OpenAPI\Client\Model\InlineResponse429' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse429', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 418:
                    if ('\OpenAPI\Client\Model\InlineResponse418' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse418', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\OpenAPI\Client\Model\InlineResponse500' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse500', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\Pool';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\OpenAPI\Client\Model\Pool',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse429',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 418:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse418',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation poolsPoolIdGetAsync
     *
     * Specific stake pool
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function poolsPoolIdGetAsync($pool_id)
    {
        return $this->poolsPoolIdGetAsyncWithHttpInfo($pool_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation poolsPoolIdGetAsyncWithHttpInfo
     *
     * Specific stake pool
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function poolsPoolIdGetAsyncWithHttpInfo($pool_id)
    {
        $returnType = '\OpenAPI\Client\Model\Pool';
        $request = $this->poolsPoolIdGetRequest($pool_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'poolsPoolIdGet'
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function poolsPoolIdGetRequest($pool_id)
    {
        // verify the required parameter 'pool_id' is set
        if ($pool_id === null || (is_array($pool_id) && count($pool_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $pool_id when calling poolsPoolIdGet'
            );
        }

        $resourcePath = '/pools/{pool_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($pool_id !== null) {
            $resourcePath = str_replace(
                '{' . 'pool_id' . '}',
                ObjectSerializer::toPathValue($pool_id),
                $resourcePath
            );
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

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('project_id');
        if ($apiKey !== null) {
            $headers['project_id'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation poolsPoolIdHistoryGet
     *
     * Stake pool history
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     * @param  int $count The number of results displayed on one page. (optional, default to 100)
     * @param  int $page The page number for listing the results (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object[]|\OpenAPI\Client\Model\InlineResponse400|\OpenAPI\Client\Model\InlineResponse403|\OpenAPI\Client\Model\InlineResponse404|\OpenAPI\Client\Model\InlineResponse429|\OpenAPI\Client\Model\InlineResponse418|\OpenAPI\Client\Model\InlineResponse500
     */
    public function poolsPoolIdHistoryGet($pool_id, $count = 100, $page = 1, $order = 'asc')
    {
        list($response) = $this->poolsPoolIdHistoryGetWithHttpInfo($pool_id, $count, $page, $order);
        return $response;
    }

    /**
     * Operation poolsPoolIdHistoryGetWithHttpInfo
     *
     * Stake pool history
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     * @param  int $count The number of results displayed on one page. (optional, default to 100)
     * @param  int $page The page number for listing the results (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object[]|\OpenAPI\Client\Model\InlineResponse400|\OpenAPI\Client\Model\InlineResponse403|\OpenAPI\Client\Model\InlineResponse404|\OpenAPI\Client\Model\InlineResponse429|\OpenAPI\Client\Model\InlineResponse418|\OpenAPI\Client\Model\InlineResponse500, HTTP status code, HTTP response headers (array of strings)
     */
    public function poolsPoolIdHistoryGetWithHttpInfo($pool_id, $count = 100, $page = 1, $order = 'asc')
    {
        $request = $this->poolsPoolIdHistoryGetRequest($pool_id, $count, $page, $order);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('object[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\OpenAPI\Client\Model\InlineResponse400' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse400', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\OpenAPI\Client\Model\InlineResponse403' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse403', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\OpenAPI\Client\Model\InlineResponse404' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse404', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\OpenAPI\Client\Model\InlineResponse429' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse429', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 418:
                    if ('\OpenAPI\Client\Model\InlineResponse418' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse418', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\OpenAPI\Client\Model\InlineResponse500' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse500', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'object[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        'object[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse429',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 418:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse418',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation poolsPoolIdHistoryGetAsync
     *
     * Stake pool history
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     * @param  int $count The number of results displayed on one page. (optional, default to 100)
     * @param  int $page The page number for listing the results (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function poolsPoolIdHistoryGetAsync($pool_id, $count = 100, $page = 1, $order = 'asc')
    {
        return $this->poolsPoolIdHistoryGetAsyncWithHttpInfo($pool_id, $count, $page, $order)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation poolsPoolIdHistoryGetAsyncWithHttpInfo
     *
     * Stake pool history
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     * @param  int $count The number of results displayed on one page. (optional, default to 100)
     * @param  int $page The page number for listing the results (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function poolsPoolIdHistoryGetAsyncWithHttpInfo($pool_id, $count = 100, $page = 1, $order = 'asc')
    {
        $returnType = 'object[]';
        $request = $this->poolsPoolIdHistoryGetRequest($pool_id, $count, $page, $order);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'poolsPoolIdHistoryGet'
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     * @param  int $count The number of results displayed on one page. (optional, default to 100)
     * @param  int $page The page number for listing the results (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function poolsPoolIdHistoryGetRequest($pool_id, $count = 100, $page = 1, $order = 'asc')
    {
        // verify the required parameter 'pool_id' is set
        if ($pool_id === null || (is_array($pool_id) && count($pool_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $pool_id when calling poolsPoolIdHistoryGet'
            );
        }
        if ($count !== null && $count > 100) {
            throw new \InvalidArgumentException('invalid value for "$count" when calling CardanoPoolsApi.poolsPoolIdHistoryGet, must be smaller than or equal to 100.');
        }
        if ($count !== null && $count < 1) {
            throw new \InvalidArgumentException('invalid value for "$count" when calling CardanoPoolsApi.poolsPoolIdHistoryGet, must be bigger than or equal to 1.');
        }

        if ($page !== null && $page > 21474836) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling CardanoPoolsApi.poolsPoolIdHistoryGet, must be smaller than or equal to 21474836.');
        }
        if ($page !== null && $page < 1) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling CardanoPoolsApi.poolsPoolIdHistoryGet, must be bigger than or equal to 1.');
        }


        $resourcePath = '/pools/{pool_id}/history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($count !== null) {
            if('form' === 'form' && is_array($count)) {
                foreach($count as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['count'] = $count;
            }
        }
        // query params
        if ($page !== null) {
            if('form' === 'form' && is_array($page)) {
                foreach($page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['page'] = $page;
            }
        }
        // query params
        if ($order !== null) {
            if('form' === 'form' && is_array($order)) {
                foreach($order as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['order'] = $order;
            }
        }


        // path params
        if ($pool_id !== null) {
            $resourcePath = str_replace(
                '{' . 'pool_id' . '}',
                ObjectSerializer::toPathValue($pool_id),
                $resourcePath
            );
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

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('project_id');
        if ($apiKey !== null) {
            $headers['project_id'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation poolsPoolIdMetadataGet
     *
     * Stake pool metadata
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return AnyOfPoolMetadataObject|\OpenAPI\Client\Model\InlineResponse400|\OpenAPI\Client\Model\InlineResponse403|\OpenAPI\Client\Model\InlineResponse404|\OpenAPI\Client\Model\InlineResponse429|\OpenAPI\Client\Model\InlineResponse418|\OpenAPI\Client\Model\InlineResponse500
     */
    public function poolsPoolIdMetadataGet($pool_id)
    {
        list($response) = $this->poolsPoolIdMetadataGetWithHttpInfo($pool_id);
        return $response;
    }

    /**
     * Operation poolsPoolIdMetadataGetWithHttpInfo
     *
     * Stake pool metadata
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of AnyOfPoolMetadataObject|\OpenAPI\Client\Model\InlineResponse400|\OpenAPI\Client\Model\InlineResponse403|\OpenAPI\Client\Model\InlineResponse404|\OpenAPI\Client\Model\InlineResponse429|\OpenAPI\Client\Model\InlineResponse418|\OpenAPI\Client\Model\InlineResponse500, HTTP status code, HTTP response headers (array of strings)
     */
    public function poolsPoolIdMetadataGetWithHttpInfo($pool_id)
    {
        $request = $this->poolsPoolIdMetadataGetRequest($pool_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('AnyOfPoolMetadataObject' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'AnyOfPoolMetadataObject', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\OpenAPI\Client\Model\InlineResponse400' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse400', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\OpenAPI\Client\Model\InlineResponse403' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse403', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\OpenAPI\Client\Model\InlineResponse404' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse404', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\OpenAPI\Client\Model\InlineResponse429' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse429', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 418:
                    if ('\OpenAPI\Client\Model\InlineResponse418' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse418', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\OpenAPI\Client\Model\InlineResponse500' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse500', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'AnyOfPoolMetadataObject';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        'AnyOfPoolMetadataObject',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse429',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 418:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse418',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation poolsPoolIdMetadataGetAsync
     *
     * Stake pool metadata
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function poolsPoolIdMetadataGetAsync($pool_id)
    {
        return $this->poolsPoolIdMetadataGetAsyncWithHttpInfo($pool_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation poolsPoolIdMetadataGetAsyncWithHttpInfo
     *
     * Stake pool metadata
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function poolsPoolIdMetadataGetAsyncWithHttpInfo($pool_id)
    {
        $returnType = 'AnyOfPoolMetadataObject';
        $request = $this->poolsPoolIdMetadataGetRequest($pool_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'poolsPoolIdMetadataGet'
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function poolsPoolIdMetadataGetRequest($pool_id)
    {
        // verify the required parameter 'pool_id' is set
        if ($pool_id === null || (is_array($pool_id) && count($pool_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $pool_id when calling poolsPoolIdMetadataGet'
            );
        }

        $resourcePath = '/pools/{pool_id}/metadata';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($pool_id !== null) {
            $resourcePath = str_replace(
                '{' . 'pool_id' . '}',
                ObjectSerializer::toPathValue($pool_id),
                $resourcePath
            );
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

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('project_id');
        if ($apiKey !== null) {
            $headers['project_id'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation poolsPoolIdRelaysGet
     *
     * Stake pool relays
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object[]|\OpenAPI\Client\Model\InlineResponse400|\OpenAPI\Client\Model\InlineResponse403|\OpenAPI\Client\Model\InlineResponse404|\OpenAPI\Client\Model\InlineResponse429|\OpenAPI\Client\Model\InlineResponse418|\OpenAPI\Client\Model\InlineResponse500
     */
    public function poolsPoolIdRelaysGet($pool_id)
    {
        list($response) = $this->poolsPoolIdRelaysGetWithHttpInfo($pool_id);
        return $response;
    }

    /**
     * Operation poolsPoolIdRelaysGetWithHttpInfo
     *
     * Stake pool relays
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object[]|\OpenAPI\Client\Model\InlineResponse400|\OpenAPI\Client\Model\InlineResponse403|\OpenAPI\Client\Model\InlineResponse404|\OpenAPI\Client\Model\InlineResponse429|\OpenAPI\Client\Model\InlineResponse418|\OpenAPI\Client\Model\InlineResponse500, HTTP status code, HTTP response headers (array of strings)
     */
    public function poolsPoolIdRelaysGetWithHttpInfo($pool_id)
    {
        $request = $this->poolsPoolIdRelaysGetRequest($pool_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('object[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\OpenAPI\Client\Model\InlineResponse400' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse400', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\OpenAPI\Client\Model\InlineResponse403' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse403', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\OpenAPI\Client\Model\InlineResponse404' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse404', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\OpenAPI\Client\Model\InlineResponse429' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse429', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 418:
                    if ('\OpenAPI\Client\Model\InlineResponse418' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse418', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\OpenAPI\Client\Model\InlineResponse500' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse500', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'object[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        'object[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse429',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 418:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse418',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation poolsPoolIdRelaysGetAsync
     *
     * Stake pool relays
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function poolsPoolIdRelaysGetAsync($pool_id)
    {
        return $this->poolsPoolIdRelaysGetAsyncWithHttpInfo($pool_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation poolsPoolIdRelaysGetAsyncWithHttpInfo
     *
     * Stake pool relays
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function poolsPoolIdRelaysGetAsyncWithHttpInfo($pool_id)
    {
        $returnType = 'object[]';
        $request = $this->poolsPoolIdRelaysGetRequest($pool_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'poolsPoolIdRelaysGet'
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function poolsPoolIdRelaysGetRequest($pool_id)
    {
        // verify the required parameter 'pool_id' is set
        if ($pool_id === null || (is_array($pool_id) && count($pool_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $pool_id when calling poolsPoolIdRelaysGet'
            );
        }

        $resourcePath = '/pools/{pool_id}/relays';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($pool_id !== null) {
            $resourcePath = str_replace(
                '{' . 'pool_id' . '}',
                ObjectSerializer::toPathValue($pool_id),
                $resourcePath
            );
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

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('project_id');
        if ($apiKey !== null) {
            $headers['project_id'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation poolsPoolIdUpdatesGet
     *
     * Stake pool updates
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     * @param  int $count The number of results displayed on one page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object[]|\OpenAPI\Client\Model\InlineResponse400|\OpenAPI\Client\Model\InlineResponse403|\OpenAPI\Client\Model\InlineResponse404|\OpenAPI\Client\Model\InlineResponse429|\OpenAPI\Client\Model\InlineResponse418|\OpenAPI\Client\Model\InlineResponse500
     */
    public function poolsPoolIdUpdatesGet($pool_id, $count = 100, $page = 1, $order = 'asc')
    {
        list($response) = $this->poolsPoolIdUpdatesGetWithHttpInfo($pool_id, $count, $page, $order);
        return $response;
    }

    /**
     * Operation poolsPoolIdUpdatesGetWithHttpInfo
     *
     * Stake pool updates
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     * @param  int $count The number of results displayed on one page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object[]|\OpenAPI\Client\Model\InlineResponse400|\OpenAPI\Client\Model\InlineResponse403|\OpenAPI\Client\Model\InlineResponse404|\OpenAPI\Client\Model\InlineResponse429|\OpenAPI\Client\Model\InlineResponse418|\OpenAPI\Client\Model\InlineResponse500, HTTP status code, HTTP response headers (array of strings)
     */
    public function poolsPoolIdUpdatesGetWithHttpInfo($pool_id, $count = 100, $page = 1, $order = 'asc')
    {
        $request = $this->poolsPoolIdUpdatesGetRequest($pool_id, $count, $page, $order);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('object[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\OpenAPI\Client\Model\InlineResponse400' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse400', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\OpenAPI\Client\Model\InlineResponse403' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse403', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\OpenAPI\Client\Model\InlineResponse404' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse404', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\OpenAPI\Client\Model\InlineResponse429' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse429', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 418:
                    if ('\OpenAPI\Client\Model\InlineResponse418' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse418', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\OpenAPI\Client\Model\InlineResponse500' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse500', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'object[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        'object[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse429',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 418:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse418',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation poolsPoolIdUpdatesGetAsync
     *
     * Stake pool updates
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     * @param  int $count The number of results displayed on one page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function poolsPoolIdUpdatesGetAsync($pool_id, $count = 100, $page = 1, $order = 'asc')
    {
        return $this->poolsPoolIdUpdatesGetAsyncWithHttpInfo($pool_id, $count, $page, $order)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation poolsPoolIdUpdatesGetAsyncWithHttpInfo
     *
     * Stake pool updates
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     * @param  int $count The number of results displayed on one page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function poolsPoolIdUpdatesGetAsyncWithHttpInfo($pool_id, $count = 100, $page = 1, $order = 'asc')
    {
        $returnType = 'object[]';
        $request = $this->poolsPoolIdUpdatesGetRequest($pool_id, $count, $page, $order);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'poolsPoolIdUpdatesGet'
     *
     * @param  string $pool_id Bech32 or hexadecimal pool ID. (required)
     * @param  int $count The number of results displayed on one page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function poolsPoolIdUpdatesGetRequest($pool_id, $count = 100, $page = 1, $order = 'asc')
    {
        // verify the required parameter 'pool_id' is set
        if ($pool_id === null || (is_array($pool_id) && count($pool_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $pool_id when calling poolsPoolIdUpdatesGet'
            );
        }
        if ($count !== null && $count > 100) {
            throw new \InvalidArgumentException('invalid value for "$count" when calling CardanoPoolsApi.poolsPoolIdUpdatesGet, must be smaller than or equal to 100.');
        }
        if ($count !== null && $count < 1) {
            throw new \InvalidArgumentException('invalid value for "$count" when calling CardanoPoolsApi.poolsPoolIdUpdatesGet, must be bigger than or equal to 1.');
        }

        if ($page !== null && $page > 21474836) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling CardanoPoolsApi.poolsPoolIdUpdatesGet, must be smaller than or equal to 21474836.');
        }
        if ($page !== null && $page < 1) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling CardanoPoolsApi.poolsPoolIdUpdatesGet, must be bigger than or equal to 1.');
        }


        $resourcePath = '/pools/{pool_id}/updates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($count !== null) {
            if('form' === 'form' && is_array($count)) {
                foreach($count as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['count'] = $count;
            }
        }
        // query params
        if ($page !== null) {
            if('form' === 'form' && is_array($page)) {
                foreach($page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['page'] = $page;
            }
        }
        // query params
        if ($order !== null) {
            if('form' === 'form' && is_array($order)) {
                foreach($order as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['order'] = $order;
            }
        }


        // path params
        if ($pool_id !== null) {
            $resourcePath = str_replace(
                '{' . 'pool_id' . '}',
                ObjectSerializer::toPathValue($pool_id),
                $resourcePath
            );
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

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('project_id');
        if ($apiKey !== null) {
            $headers['project_id'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation poolsRetiredGet
     *
     * List of retired stake pools
     *
     * @param  int $count The numbers of pools per page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object[]|\OpenAPI\Client\Model\InlineResponse400|\OpenAPI\Client\Model\InlineResponse403|\OpenAPI\Client\Model\InlineResponse404|\OpenAPI\Client\Model\InlineResponse429|\OpenAPI\Client\Model\InlineResponse418|\OpenAPI\Client\Model\InlineResponse500
     */
    public function poolsRetiredGet($count = 100, $page = 1, $order = 'asc')
    {
        list($response) = $this->poolsRetiredGetWithHttpInfo($count, $page, $order);
        return $response;
    }

    /**
     * Operation poolsRetiredGetWithHttpInfo
     *
     * List of retired stake pools
     *
     * @param  int $count The numbers of pools per page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object[]|\OpenAPI\Client\Model\InlineResponse400|\OpenAPI\Client\Model\InlineResponse403|\OpenAPI\Client\Model\InlineResponse404|\OpenAPI\Client\Model\InlineResponse429|\OpenAPI\Client\Model\InlineResponse418|\OpenAPI\Client\Model\InlineResponse500, HTTP status code, HTTP response headers (array of strings)
     */
    public function poolsRetiredGetWithHttpInfo($count = 100, $page = 1, $order = 'asc')
    {
        $request = $this->poolsRetiredGetRequest($count, $page, $order);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('object[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\OpenAPI\Client\Model\InlineResponse400' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse400', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\OpenAPI\Client\Model\InlineResponse403' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse403', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\OpenAPI\Client\Model\InlineResponse404' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse404', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\OpenAPI\Client\Model\InlineResponse429' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse429', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 418:
                    if ('\OpenAPI\Client\Model\InlineResponse418' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse418', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\OpenAPI\Client\Model\InlineResponse500' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse500', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'object[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        'object[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse429',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 418:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse418',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation poolsRetiredGetAsync
     *
     * List of retired stake pools
     *
     * @param  int $count The numbers of pools per page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function poolsRetiredGetAsync($count = 100, $page = 1, $order = 'asc')
    {
        return $this->poolsRetiredGetAsyncWithHttpInfo($count, $page, $order)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation poolsRetiredGetAsyncWithHttpInfo
     *
     * List of retired stake pools
     *
     * @param  int $count The numbers of pools per page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function poolsRetiredGetAsyncWithHttpInfo($count = 100, $page = 1, $order = 'asc')
    {
        $returnType = 'object[]';
        $request = $this->poolsRetiredGetRequest($count, $page, $order);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'poolsRetiredGet'
     *
     * @param  int $count The numbers of pools per page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function poolsRetiredGetRequest($count = 100, $page = 1, $order = 'asc')
    {
        if ($count !== null && $count > 100) {
            throw new \InvalidArgumentException('invalid value for "$count" when calling CardanoPoolsApi.poolsRetiredGet, must be smaller than or equal to 100.');
        }
        if ($count !== null && $count < 1) {
            throw new \InvalidArgumentException('invalid value for "$count" when calling CardanoPoolsApi.poolsRetiredGet, must be bigger than or equal to 1.');
        }

        if ($page !== null && $page > 21474836) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling CardanoPoolsApi.poolsRetiredGet, must be smaller than or equal to 21474836.');
        }
        if ($page !== null && $page < 1) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling CardanoPoolsApi.poolsRetiredGet, must be bigger than or equal to 1.');
        }


        $resourcePath = '/pools/retired';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($count !== null) {
            if('form' === 'form' && is_array($count)) {
                foreach($count as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['count'] = $count;
            }
        }
        // query params
        if ($page !== null) {
            if('form' === 'form' && is_array($page)) {
                foreach($page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['page'] = $page;
            }
        }
        // query params
        if ($order !== null) {
            if('form' === 'form' && is_array($order)) {
                foreach($order as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['order'] = $order;
            }
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

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('project_id');
        if ($apiKey !== null) {
            $headers['project_id'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation poolsRetiringGet
     *
     * List of retiring stake pools
     *
     * @param  int $count The number of results displayed on one page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object[]|\OpenAPI\Client\Model\InlineResponse400|\OpenAPI\Client\Model\InlineResponse403|\OpenAPI\Client\Model\InlineResponse404|\OpenAPI\Client\Model\InlineResponse429|\OpenAPI\Client\Model\InlineResponse418|\OpenAPI\Client\Model\InlineResponse500
     */
    public function poolsRetiringGet($count = 100, $page = 1, $order = 'asc')
    {
        list($response) = $this->poolsRetiringGetWithHttpInfo($count, $page, $order);
        return $response;
    }

    /**
     * Operation poolsRetiringGetWithHttpInfo
     *
     * List of retiring stake pools
     *
     * @param  int $count The number of results displayed on one page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object[]|\OpenAPI\Client\Model\InlineResponse400|\OpenAPI\Client\Model\InlineResponse403|\OpenAPI\Client\Model\InlineResponse404|\OpenAPI\Client\Model\InlineResponse429|\OpenAPI\Client\Model\InlineResponse418|\OpenAPI\Client\Model\InlineResponse500, HTTP status code, HTTP response headers (array of strings)
     */
    public function poolsRetiringGetWithHttpInfo($count = 100, $page = 1, $order = 'asc')
    {
        $request = $this->poolsRetiringGetRequest($count, $page, $order);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('object[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\OpenAPI\Client\Model\InlineResponse400' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse400', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\OpenAPI\Client\Model\InlineResponse403' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse403', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\OpenAPI\Client\Model\InlineResponse404' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse404', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\OpenAPI\Client\Model\InlineResponse429' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse429', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 418:
                    if ('\OpenAPI\Client\Model\InlineResponse418' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse418', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\OpenAPI\Client\Model\InlineResponse500' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InlineResponse500', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'object[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        'object[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse429',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 418:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse418',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InlineResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation poolsRetiringGetAsync
     *
     * List of retiring stake pools
     *
     * @param  int $count The number of results displayed on one page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function poolsRetiringGetAsync($count = 100, $page = 1, $order = 'asc')
    {
        return $this->poolsRetiringGetAsyncWithHttpInfo($count, $page, $order)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation poolsRetiringGetAsyncWithHttpInfo
     *
     * List of retiring stake pools
     *
     * @param  int $count The number of results displayed on one page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function poolsRetiringGetAsyncWithHttpInfo($count = 100, $page = 1, $order = 'asc')
    {
        $returnType = 'object[]';
        $request = $this->poolsRetiringGetRequest($count, $page, $order);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'poolsRetiringGet'
     *
     * @param  int $count The number of results displayed on one page. (optional, default to 100)
     * @param  int $page The page number for listing the results. (optional, default to 1)
     * @param  string $order The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. (optional, default to 'asc')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function poolsRetiringGetRequest($count = 100, $page = 1, $order = 'asc')
    {
        if ($count !== null && $count > 100) {
            throw new \InvalidArgumentException('invalid value for "$count" when calling CardanoPoolsApi.poolsRetiringGet, must be smaller than or equal to 100.');
        }
        if ($count !== null && $count < 1) {
            throw new \InvalidArgumentException('invalid value for "$count" when calling CardanoPoolsApi.poolsRetiringGet, must be bigger than or equal to 1.');
        }

        if ($page !== null && $page > 21474836) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling CardanoPoolsApi.poolsRetiringGet, must be smaller than or equal to 21474836.');
        }
        if ($page !== null && $page < 1) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling CardanoPoolsApi.poolsRetiringGet, must be bigger than or equal to 1.');
        }


        $resourcePath = '/pools/retiring';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($count !== null) {
            if('form' === 'form' && is_array($count)) {
                foreach($count as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['count'] = $count;
            }
        }
        // query params
        if ($page !== null) {
            if('form' === 'form' && is_array($page)) {
                foreach($page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['page'] = $page;
            }
        }
        // query params
        if ($order !== null) {
            if('form' === 'form' && is_array($order)) {
                foreach($order as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['order'] = $order;
            }
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

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('project_id');
        if ($apiKey !== null) {
            $headers['project_id'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
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
