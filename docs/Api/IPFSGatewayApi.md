# OpenAPI\Client\IPFSGatewayApi

All URIs are relative to https://cardano-mainnet.blockfrost.io/api/v0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**ipfsGatewayIPFSPathGet()**](IPFSGatewayApi.md#ipfsGatewayIPFSPathGet) | **GET** /ipfs/gateway/{IPFS_path} | Relay to an IPFS gateway


## `ipfsGatewayIPFSPathGet()`

```php
ipfsGatewayIPFSPathGet($ipfs_path)
```

Relay to an IPFS gateway

Retrieve an object from the IFPS gateway (useful if you do not want to rely on a public gateway, such as `ipfs.blockfrost.dev`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IPFSGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ipfs_path = 'ipfs_path_example'; // string

try {
    $apiInstance->ipfsGatewayIPFSPathGet($ipfs_path);
} catch (Exception $e) {
    echo 'Exception when calling IPFSGatewayApi->ipfsGatewayIPFSPathGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ipfs_path** | **string**|  |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
