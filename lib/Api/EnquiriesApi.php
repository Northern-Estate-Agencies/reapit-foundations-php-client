<?php
/**
 * EnquiriesApi
 * PHP version 7.3
 *
 * @category Class
 * @package  NorthernEstateAgencies\ReapitFoundationsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Foundations Interactive API Explorer
 *
 * <p>Technical documentation for the Reapit Foundations REST API endpoints. This tool is interactive and provides instant access to data hosted in our <strong><a href=\"https://foundations-documentation.reapit.cloud/api/api-documentation#sandbox-mode\">sandbox environment</a> </strong>with <strong>authentication</strong> and <strong>versioning</strong> headers pre-populated. Example requests and responses are shown by default but you can switch to view a fully documented schema - look for the&nbsp;<strong>model</strong> link.</p> <p>* To begin developing with the platform, consult our&nbsp;<strong><a href=\"https://foundations-documentation.reapit.cloud/api/api-documentation\">documentation</a></strong>&nbsp;<br />* To report a bug or request a new feature, see our <strong><a href=\"https://developers.reapit.cloud/help\">help pages</a>&nbsp;<br /></strong>* For information on terminology, see our&nbsp;<strong><a href=\"https://foundations-documentation.reapit.cloud/platform-glossary\">glossary</a></strong>&nbsp;<br />* Our APIs are located at&nbsp;<strong>https://platform.reapit.cloud<br /></strong>* The current API version is&nbsp;<strong>2020-01-31<br /></strong></p>
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace NorthernEstateAgencies\ReapitFoundationsClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use NorthernEstateAgencies\ReapitFoundationsClient\ApiException;
use NorthernEstateAgencies\ReapitFoundationsClient\Configuration;
use NorthernEstateAgencies\ReapitFoundationsClient\HeaderSelector;
use NorthernEstateAgencies\ReapitFoundationsClient\ObjectSerializer;

/**
 * EnquiriesApi Class Doc Comment
 *
 * @category Class
 * @package  NorthernEstateAgencies\ReapitFoundationsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EnquiriesApi
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
     * Operation enquiriesGet
     *
     * Retrieves a collection of enquiries from prospective vendors, landlords or applicants
     *
     * @param  int $pageSize A limit on the number of enquiries to be returned per page. Value can range between 1 and 100, and the default is 25 (optional)
     * @param  int $pageNumber The page number to return (must be greater than 0) (optional)
     * @param  string $sortBy Sort results by the value specified. Prefix string with &#39;-&#39; to indicate descending direction (created/modified) (optional)
     * @param  string $enquiryType Only return enquiries where the &#x60;enquiryType&#x60; matches this value (salesApplicant/lettingsApplicant/salesProperty/lettingsProperty) (optional)
     * @param  \DateTime $createdFrom Only return enquiries where the &#x60;created&#x60; field is on or after the ISO8601 date and time value provided (optional)
     * @param  \DateTime $createdTo Only return enquiries where the &#x60;created&#x60; field is on or before the ISO8601 date and time value provided (optional)
     * @param  \DateTime $modifiedFrom Only return enquiries where the &#x60;modified&#x60; field is on or after the ISO8601 date and time value provided (optional)
     * @param  \DateTime $modifiedTo Only return enquiries where the &#x60;modified&#x60; field is on or before the ISO8601 date and time value provided (optional)
     *
     * @throws \NorthernEstateAgencies\ReapitFoundationsClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20015
     */
    public function enquiriesGet($pageSize = null, $pageNumber = null, $sortBy = null, $enquiryType = null, $createdFrom = null, $createdTo = null, $modifiedFrom = null, $modifiedTo = null)
    {
        list($response) = $this->enquiriesGetWithHttpInfo($pageSize, $pageNumber, $sortBy, $enquiryType, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo);
        return $response;
    }

    /**
     * Operation enquiriesGetWithHttpInfo
     *
     * Retrieves a collection of enquiries from prospective vendors, landlords or applicants
     *
     * @param  int $pageSize A limit on the number of enquiries to be returned per page. Value can range between 1 and 100, and the default is 25 (optional)
     * @param  int $pageNumber The page number to return (must be greater than 0) (optional)
     * @param  string $sortBy Sort results by the value specified. Prefix string with &#39;-&#39; to indicate descending direction (created/modified) (optional)
     * @param  string $enquiryType Only return enquiries where the &#x60;enquiryType&#x60; matches this value (salesApplicant/lettingsApplicant/salesProperty/lettingsProperty) (optional)
     * @param  \DateTime $createdFrom Only return enquiries where the &#x60;created&#x60; field is on or after the ISO8601 date and time value provided (optional)
     * @param  \DateTime $createdTo Only return enquiries where the &#x60;created&#x60; field is on or before the ISO8601 date and time value provided (optional)
     * @param  \DateTime $modifiedFrom Only return enquiries where the &#x60;modified&#x60; field is on or after the ISO8601 date and time value provided (optional)
     * @param  \DateTime $modifiedTo Only return enquiries where the &#x60;modified&#x60; field is on or before the ISO8601 date and time value provided (optional)
     *
     * @throws \NorthernEstateAgencies\ReapitFoundationsClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20015, HTTP status code, HTTP response headers (array of strings)
     */
    public function enquiriesGetWithHttpInfo($pageSize = null, $pageNumber = null, $sortBy = null, $enquiryType = null, $createdFrom = null, $createdTo = null, $modifiedFrom = null, $modifiedTo = null)
    {
        $request = $this->enquiriesGetRequest($pageSize, $pageNumber, $sortBy, $enquiryType, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo);

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
                    if ('\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20015' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20015', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20015';
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
                        '\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20015',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation enquiriesGetAsync
     *
     * Retrieves a collection of enquiries from prospective vendors, landlords or applicants
     *
     * @param  int $pageSize A limit on the number of enquiries to be returned per page. Value can range between 1 and 100, and the default is 25 (optional)
     * @param  int $pageNumber The page number to return (must be greater than 0) (optional)
     * @param  string $sortBy Sort results by the value specified. Prefix string with &#39;-&#39; to indicate descending direction (created/modified) (optional)
     * @param  string $enquiryType Only return enquiries where the &#x60;enquiryType&#x60; matches this value (salesApplicant/lettingsApplicant/salesProperty/lettingsProperty) (optional)
     * @param  \DateTime $createdFrom Only return enquiries where the &#x60;created&#x60; field is on or after the ISO8601 date and time value provided (optional)
     * @param  \DateTime $createdTo Only return enquiries where the &#x60;created&#x60; field is on or before the ISO8601 date and time value provided (optional)
     * @param  \DateTime $modifiedFrom Only return enquiries where the &#x60;modified&#x60; field is on or after the ISO8601 date and time value provided (optional)
     * @param  \DateTime $modifiedTo Only return enquiries where the &#x60;modified&#x60; field is on or before the ISO8601 date and time value provided (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function enquiriesGetAsync($pageSize = null, $pageNumber = null, $sortBy = null, $enquiryType = null, $createdFrom = null, $createdTo = null, $modifiedFrom = null, $modifiedTo = null)
    {
        return $this->enquiriesGetAsyncWithHttpInfo($pageSize, $pageNumber, $sortBy, $enquiryType, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation enquiriesGetAsyncWithHttpInfo
     *
     * Retrieves a collection of enquiries from prospective vendors, landlords or applicants
     *
     * @param  int $pageSize A limit on the number of enquiries to be returned per page. Value can range between 1 and 100, and the default is 25 (optional)
     * @param  int $pageNumber The page number to return (must be greater than 0) (optional)
     * @param  string $sortBy Sort results by the value specified. Prefix string with &#39;-&#39; to indicate descending direction (created/modified) (optional)
     * @param  string $enquiryType Only return enquiries where the &#x60;enquiryType&#x60; matches this value (salesApplicant/lettingsApplicant/salesProperty/lettingsProperty) (optional)
     * @param  \DateTime $createdFrom Only return enquiries where the &#x60;created&#x60; field is on or after the ISO8601 date and time value provided (optional)
     * @param  \DateTime $createdTo Only return enquiries where the &#x60;created&#x60; field is on or before the ISO8601 date and time value provided (optional)
     * @param  \DateTime $modifiedFrom Only return enquiries where the &#x60;modified&#x60; field is on or after the ISO8601 date and time value provided (optional)
     * @param  \DateTime $modifiedTo Only return enquiries where the &#x60;modified&#x60; field is on or before the ISO8601 date and time value provided (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function enquiriesGetAsyncWithHttpInfo($pageSize = null, $pageNumber = null, $sortBy = null, $enquiryType = null, $createdFrom = null, $createdTo = null, $modifiedFrom = null, $modifiedTo = null)
    {
        $returnType = '\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20015';
        $request = $this->enquiriesGetRequest($pageSize, $pageNumber, $sortBy, $enquiryType, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo);

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
     * Create request for operation 'enquiriesGet'
     *
     * @param  int $pageSize A limit on the number of enquiries to be returned per page. Value can range between 1 and 100, and the default is 25 (optional)
     * @param  int $pageNumber The page number to return (must be greater than 0) (optional)
     * @param  string $sortBy Sort results by the value specified. Prefix string with &#39;-&#39; to indicate descending direction (created/modified) (optional)
     * @param  string $enquiryType Only return enquiries where the &#x60;enquiryType&#x60; matches this value (salesApplicant/lettingsApplicant/salesProperty/lettingsProperty) (optional)
     * @param  \DateTime $createdFrom Only return enquiries where the &#x60;created&#x60; field is on or after the ISO8601 date and time value provided (optional)
     * @param  \DateTime $createdTo Only return enquiries where the &#x60;created&#x60; field is on or before the ISO8601 date and time value provided (optional)
     * @param  \DateTime $modifiedFrom Only return enquiries where the &#x60;modified&#x60; field is on or after the ISO8601 date and time value provided (optional)
     * @param  \DateTime $modifiedTo Only return enquiries where the &#x60;modified&#x60; field is on or before the ISO8601 date and time value provided (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function enquiriesGetRequest($pageSize = null, $pageNumber = null, $sortBy = null, $enquiryType = null, $createdFrom = null, $createdTo = null, $modifiedFrom = null, $modifiedTo = null)
    {

        $resourcePath = '/enquiries/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($pageSize)) {
            $pageSize = ObjectSerializer::serializeCollection($pageSize, '', true);
        }
        if ($pageSize !== null) {
            $queryParams['pageSize'] = $pageSize;
        }
        // query params
        if (is_array($pageNumber)) {
            $pageNumber = ObjectSerializer::serializeCollection($pageNumber, '', true);
        }
        if ($pageNumber !== null) {
            $queryParams['pageNumber'] = $pageNumber;
        }
        // query params
        if (is_array($sortBy)) {
            $sortBy = ObjectSerializer::serializeCollection($sortBy, '', true);
        }
        if ($sortBy !== null) {
            $queryParams['sortBy'] = $sortBy;
        }
        // query params
        if (is_array($enquiryType)) {
            $enquiryType = ObjectSerializer::serializeCollection($enquiryType, '', true);
        }
        if ($enquiryType !== null) {
            $queryParams['enquiryType'] = $enquiryType;
        }
        // query params
        if (is_array($createdFrom)) {
            $createdFrom = ObjectSerializer::serializeCollection($createdFrom, '', true);
        }
        if ($createdFrom !== null) {
            $queryParams['createdFrom'] = $createdFrom;
        }
        // query params
        if (is_array($createdTo)) {
            $createdTo = ObjectSerializer::serializeCollection($createdTo, '', true);
        }
        if ($createdTo !== null) {
            $queryParams['createdTo'] = $createdTo;
        }
        // query params
        if (is_array($modifiedFrom)) {
            $modifiedFrom = ObjectSerializer::serializeCollection($modifiedFrom, '', true);
        }
        if ($modifiedFrom !== null) {
            $queryParams['modifiedFrom'] = $modifiedFrom;
        }
        // query params
        if (is_array($modifiedTo)) {
            $modifiedTo = ObjectSerializer::serializeCollection($modifiedTo, '', true);
        }
        if ($modifiedTo !== null) {
            $queryParams['modifiedTo'] = $modifiedTo;
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation enquiriesIdGet
     *
     * Get a single enquiry by its&#39; unique identifier
     *
     * @param  int $id Unique identifier of the enquiry to return (required)
     *
     * @throws \NorthernEstateAgencies\ReapitFoundationsClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20015Embedded
     */
    public function enquiriesIdGet($id)
    {
        list($response) = $this->enquiriesIdGetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation enquiriesIdGetWithHttpInfo
     *
     * Get a single enquiry by its&#39; unique identifier
     *
     * @param  int $id Unique identifier of the enquiry to return (required)
     *
     * @throws \NorthernEstateAgencies\ReapitFoundationsClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20015Embedded, HTTP status code, HTTP response headers (array of strings)
     */
    public function enquiriesIdGetWithHttpInfo($id)
    {
        $request = $this->enquiriesIdGetRequest($id);

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
                    if ('\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20015Embedded' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20015Embedded', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20015Embedded';
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
                        '\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20015Embedded',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation enquiriesIdGetAsync
     *
     * Get a single enquiry by its&#39; unique identifier
     *
     * @param  int $id Unique identifier of the enquiry to return (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function enquiriesIdGetAsync($id)
    {
        return $this->enquiriesIdGetAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation enquiriesIdGetAsyncWithHttpInfo
     *
     * Get a single enquiry by its&#39; unique identifier
     *
     * @param  int $id Unique identifier of the enquiry to return (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function enquiriesIdGetAsyncWithHttpInfo($id)
    {
        $returnType = '\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20015Embedded';
        $request = $this->enquiriesIdGetRequest($id);

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
     * Create request for operation 'enquiriesIdGet'
     *
     * @param  int $id Unique identifier of the enquiry to return (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function enquiriesIdGetRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling enquiriesIdGet'
            );
        }

        $resourcePath = '/enquiries/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation enquiriesPost
     *
     * Create a new enquiry
     *
     * @param  \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject18 $body body (optional)
     *
     * @throws \NorthernEstateAgencies\ReapitFoundationsClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function enquiriesPost($body = null)
    {
        $this->enquiriesPostWithHttpInfo($body);
    }

    /**
     * Operation enquiriesPostWithHttpInfo
     *
     * Create a new enquiry
     *
     * @param  \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject18 $body (optional)
     *
     * @throws \NorthernEstateAgencies\ReapitFoundationsClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function enquiriesPostWithHttpInfo($body = null)
    {
        $request = $this->enquiriesPostRequest($body);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation enquiriesPostAsync
     *
     * Create a new enquiry
     *
     * @param  \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject18 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function enquiriesPostAsync($body = null)
    {
        return $this->enquiriesPostAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation enquiriesPostAsyncWithHttpInfo
     *
     * Create a new enquiry
     *
     * @param  \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject18 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function enquiriesPostAsyncWithHttpInfo($body = null)
    {
        $returnType = '';
        $request = $this->enquiriesPostRequest($body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'enquiriesPost'
     *
     * @param  \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject18 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function enquiriesPostRequest($body = null)
    {

        $resourcePath = '/enquiries/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json-patch+json', 'application/json', 'application/_*+json']
            );
        }

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
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