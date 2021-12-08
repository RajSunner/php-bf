# OpenAPI\Client\IPFSPinsApi

All URIs are relative to https://cardano-mainnet.blockfrost.io/api/v0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**ipfsPinAddIPFSPathPost()**](IPFSPinsApi.md#ipfsPinAddIPFSPathPost) | **POST** /ipfs/pin/add/{IPFS_path} | Pin an object
[**ipfsPinListGet()**](IPFSPinsApi.md#ipfsPinListGet) | **GET** /ipfs/pin/list/ | List pinned objects
[**ipfsPinListIPFSPathGet()**](IPFSPinsApi.md#ipfsPinListIPFSPathGet) | **GET** /ipfs/pin/list/{IPFS_path} | Get details about pinned object
[**ipfsPinRemoveIPFSPathPost()**](IPFSPinsApi.md#ipfsPinRemoveIPFSPathPost) | **POST** /ipfs/pin/remove/{IPFS_path} | 


## `ipfsPinAddIPFSPathPost()`

```php
ipfsPinAddIPFSPathPost($ipfs_path): \OpenAPI\Client\Model\InlineResponse2004
```

Pin an object

Pinned objects are counted in your user storage quota.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IPFSPinsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ipfs_path = 'ipfs_path_example'; // string

try {
    $result = $apiInstance->ipfsPinAddIPFSPathPost($ipfs_path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IPFSPinsApi->ipfsPinAddIPFSPathPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ipfs_path** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipfsPinListGet()`

```php
ipfsPinListGet($count, $page, $order): \OpenAPI\Client\Model\InlineResponse2005[]
```

List pinned objects

List objects pinned to local storage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IPFSPinsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 100; // int | The number of results displayed on one page.
$page = 1; // int | The page number for listing the results.
$order = 'asc'; // string | The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last.

try {
    $result = $apiInstance->ipfsPinListGet($count, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IPFSPinsApi->ipfsPinListGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| The number of results displayed on one page. | [optional] [default to 100]
 **page** | **int**| The page number for listing the results. | [optional] [default to 1]
 **order** | **string**| The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. | [optional] [default to &#39;asc&#39;]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2005[]**](../Model/InlineResponse2005.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipfsPinListIPFSPathGet()`

```php
ipfsPinListIPFSPathGet($ipfs_path): \OpenAPI\Client\Model\InlineResponse2006
```

Get details about pinned object

Get information about locally pinned IPFS object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IPFSPinsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ipfs_path = 'ipfs_path_example'; // string

try {
    $result = $apiInstance->ipfsPinListIPFSPathGet($ipfs_path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IPFSPinsApi->ipfsPinListIPFSPathGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ipfs_path** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipfsPinRemoveIPFSPathPost()`

```php
ipfsPinRemoveIPFSPathPost($ipfs_path): \OpenAPI\Client\Model\InlineResponse2007
```



Remove pinned objects from local storage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IPFSPinsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ipfs_path = 'ipfs_path_example'; // string

try {
    $result = $apiInstance->ipfsPinRemoveIPFSPathPost($ipfs_path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IPFSPinsApi->ipfsPinRemoveIPFSPathPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ipfs_path** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
