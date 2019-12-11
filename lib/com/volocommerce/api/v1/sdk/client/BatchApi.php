<?php
/**
 * BatchApi
 * PHP version 5
 *
 * @category Class
 * @package  com.volocommerce.api.v1.sdk.invoker
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Volo Public APIs
 *
 * Volo Public APIs
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.client;

use \com.volocommerce.api.v1.sdk.invoker\ApiClient;
use \com.volocommerce.api.v1.sdk.invoker\ApiException;
use \com.volocommerce.api.v1.sdk.invoker\Configuration;
use \com.volocommerce.api.v1.sdk.invoker\ObjectSerializer;

/**
 * BatchApi Class Doc Comment
 *
 * @category Class
 * @package  com.volocommerce.api.v1.sdk.invoker
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BatchApi
{
    /**
     * API Client
     *
     * @var \com.volocommerce.api.v1.sdk.invoker\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \com.volocommerce.api.v1.sdk.invoker\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\com.volocommerce.api.v1.sdk.invoker\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \com.volocommerce.api.v1.sdk.invoker\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \com.volocommerce.api.v1.sdk.invoker\ApiClient $apiClient set the API client
     *
     * @return BatchApi
     */
    public function setApiClient(\com.volocommerce.api.v1.sdk.invoker\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getBatchStatus
     *
     * Returns status of a given batch. The batch ID is provided by the asynchronous methods
     *
     * @param string $batch_id Batch ID (required)
     * @param string $authorization Auth token (required)
     * @param string $x_api_key API Key (required)
     * @throws \com.volocommerce.api.v1.sdk.invoker\ApiException on non-2xx response
     * @return \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\BatchStatusResponse
     */
    public function getBatchStatus($batch_id, $authorization, $x_api_key)
    {
        list($response) = $this->getBatchStatusWithHttpInfo($batch_id, $authorization, $x_api_key);
        return $response;
    }

    /**
     * Operation getBatchStatusWithHttpInfo
     *
     * Returns status of a given batch. The batch ID is provided by the asynchronous methods
     *
     * @param string $batch_id Batch ID (required)
     * @param string $authorization Auth token (required)
     * @param string $x_api_key API Key (required)
     * @throws \com.volocommerce.api.v1.sdk.invoker\ApiException on non-2xx response
     * @return array of \com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\BatchStatusResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBatchStatusWithHttpInfo($batch_id, $authorization, $x_api_key)
    {
        // verify the required parameter 'batch_id' is set
        if ($batch_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $batch_id when calling getBatchStatus');
        }
        // verify the required parameter 'authorization' is set
        if ($authorization === null) {
            throw new \InvalidArgumentException('Missing the required parameter $authorization when calling getBatchStatus');
        }
        // verify the required parameter 'x_api_key' is set
        if ($x_api_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $x_api_key when calling getBatchStatus');
        }
        // parse inputs
        $resourcePath = "/batch/status/{batchId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = $this->apiClient->getSerializer()->toHeaderValue($authorization);
        }
        // header params
        if ($x_api_key !== null) {
            $headerParams['x-api-key'] = $this->apiClient->getSerializer()->toHeaderValue($x_api_key);
        }
        // path params
        if ($batch_id !== null) {
            $resourcePath = str_replace(
                "{" . "batchId" . "}",
                $this->apiClient->getSerializer()->toPathValue($batch_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\BatchStatusResponse',
                '/batch/status/{batchId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\BatchStatusResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\BatchStatusResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\com.volocommerce.api.v1.sdk.invoker\com.volocommerce.api.v1.sdk.model\VoloAPIErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
