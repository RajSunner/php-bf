# OpenAPI\Client\CardanoEpochsApi

All URIs are relative to https://cardano-mainnet.blockfrost.io/api/v0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**epochsLatestGet()**](CardanoEpochsApi.md#epochsLatestGet) | **GET** /epochs/latest | Latest epoch
[**epochsLatestParametersGet()**](CardanoEpochsApi.md#epochsLatestParametersGet) | **GET** /epochs/latest/parameters | Latest epoch protocol parameters
[**epochsNumberBlocksGet()**](CardanoEpochsApi.md#epochsNumberBlocksGet) | **GET** /epochs/{number}/blocks | Block distribution
[**epochsNumberBlocksPoolIdGet()**](CardanoEpochsApi.md#epochsNumberBlocksPoolIdGet) | **GET** /epochs/{number}/blocks/{pool_id} | Block distribution by pool
[**epochsNumberGet()**](CardanoEpochsApi.md#epochsNumberGet) | **GET** /epochs/{number} | Specific epoch
[**epochsNumberNextGet()**](CardanoEpochsApi.md#epochsNumberNextGet) | **GET** /epochs/{number}/next | Listing of next epochs
[**epochsNumberParametersGet()**](CardanoEpochsApi.md#epochsNumberParametersGet) | **GET** /epochs/{number}/parameters | Protocol parameters
[**epochsNumberPreviousGet()**](CardanoEpochsApi.md#epochsNumberPreviousGet) | **GET** /epochs/{number}/previous | Listing of previous epochs
[**epochsNumberStakesGet()**](CardanoEpochsApi.md#epochsNumberStakesGet) | **GET** /epochs/{number}/stakes | Stake distribution
[**epochsNumberStakesPoolIdGet()**](CardanoEpochsApi.md#epochsNumberStakesPoolIdGet) | **GET** /epochs/{number}/stakes/{pool_id} | Stake distribution by pool


## `epochsLatestGet()`

```php
epochsLatestGet(): \OpenAPI\Client\Model\EpochContent
```

Latest epoch

Return the information about the latest, therefore current, epoch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoEpochsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->epochsLatestGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoEpochsApi->epochsLatestGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\EpochContent**](../Model/EpochContent.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `epochsLatestParametersGet()`

```php
epochsLatestParametersGet(): \OpenAPI\Client\Model\EpochParamContent
```

Latest epoch protocol parameters

Return the protocol parameters for the latest epoch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoEpochsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->epochsLatestParametersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoEpochsApi->epochsLatestParametersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\EpochParamContent**](../Model/EpochParamContent.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `epochsNumberBlocksGet()`

```php
epochsNumberBlocksGet($number, $count, $page, $order): string[]
```

Block distribution

Return the blocks minted for the epoch specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoEpochsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = 225; // int | Number of the epoch
$count = 100; // int | The number of results displayed on one page.
$page = 1; // int | The page number for listing the results.
$order = 'asc'; // string | The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last.

try {
    $result = $apiInstance->epochsNumberBlocksGet($number, $count, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoEpochsApi->epochsNumberBlocksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **int**| Number of the epoch |
 **count** | **int**| The number of results displayed on one page. | [optional] [default to 100]
 **page** | **int**| The page number for listing the results. | [optional] [default to 1]
 **order** | **string**| The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. | [optional] [default to &#39;asc&#39;]

### Return type

**string[]**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `epochsNumberBlocksPoolIdGet()`

```php
epochsNumberBlocksPoolIdGet($number, $pool_id, $count, $page, $order): string[]
```

Block distribution by pool

Return the block minted for the epoch specified by stake pool.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoEpochsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = 225; // int | Number of the epoch
$pool_id = pool1pu5jlj4q9w9jlxeu370a3c9myx47md5j5m2str0naunn2q3lkdy; // string | Stake pool ID to filter
$count = 100; // int | The number of results displayed on one page.
$page = 1; // int | The page number for listing the results.
$order = 'asc'; // string | The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last.

try {
    $result = $apiInstance->epochsNumberBlocksPoolIdGet($number, $pool_id, $count, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoEpochsApi->epochsNumberBlocksPoolIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **int**| Number of the epoch |
 **pool_id** | **string**| Stake pool ID to filter |
 **count** | **int**| The number of results displayed on one page. | [optional] [default to 100]
 **page** | **int**| The page number for listing the results. | [optional] [default to 1]
 **order** | **string**| The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. | [optional] [default to &#39;asc&#39;]

### Return type

**string[]**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `epochsNumberGet()`

```php
epochsNumberGet($number): \OpenAPI\Client\Model\EpochContent
```

Specific epoch

Return the content of the requested epoch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoEpochsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = 225; // int | Number of the epoch

try {
    $result = $apiInstance->epochsNumberGet($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoEpochsApi->epochsNumberGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **int**| Number of the epoch |

### Return type

[**\OpenAPI\Client\Model\EpochContent**](../Model/EpochContent.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `epochsNumberNextGet()`

```php
epochsNumberNextGet($number, $count, $page): \OpenAPI\Client\Model\EpochContent[]
```

Listing of next epochs

Return the list of epochs following a specific epoch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoEpochsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = 225; // int | Number of the requested epoch.
$count = 100; // int | The number of results displayed on one page.
$page = 1; // int | The page number for listing the results.

try {
    $result = $apiInstance->epochsNumberNextGet($number, $count, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoEpochsApi->epochsNumberNextGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **int**| Number of the requested epoch. |
 **count** | **int**| The number of results displayed on one page. | [optional] [default to 100]
 **page** | **int**| The page number for listing the results. | [optional] [default to 1]

### Return type

[**\OpenAPI\Client\Model\EpochContent[]**](../Model/EpochContent.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `epochsNumberParametersGet()`

```php
epochsNumberParametersGet($number): \OpenAPI\Client\Model\EpochParamContent
```

Protocol parameters

Return the protocol parameters for the epoch specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoEpochsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = 225; // int | Number of the epoch

try {
    $result = $apiInstance->epochsNumberParametersGet($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoEpochsApi->epochsNumberParametersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **int**| Number of the epoch |

### Return type

[**\OpenAPI\Client\Model\EpochParamContent**](../Model/EpochParamContent.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `epochsNumberPreviousGet()`

```php
epochsNumberPreviousGet($number, $count, $page): \OpenAPI\Client\Model\EpochContent[]
```

Listing of previous epochs

Return the list of epochs preceding a specific epoch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoEpochsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = 225; // int | Number of the epoch
$count = 100; // int | The number of results displayed on one page.
$page = 1; // int | The page number for listing the results

try {
    $result = $apiInstance->epochsNumberPreviousGet($number, $count, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoEpochsApi->epochsNumberPreviousGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **int**| Number of the epoch |
 **count** | **int**| The number of results displayed on one page. | [optional] [default to 100]
 **page** | **int**| The page number for listing the results | [optional] [default to 1]

### Return type

[**\OpenAPI\Client\Model\EpochContent[]**](../Model/EpochContent.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `epochsNumberStakesGet()`

```php
epochsNumberStakesGet($number, $count, $page): object[]
```

Stake distribution

Return the active stake distribution for the specified epoch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoEpochsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = 225; // int | Number of the epoch
$count = 100; // int | The number of results displayed on one page.
$page = 1; // int | The page number for listing the results.

try {
    $result = $apiInstance->epochsNumberStakesGet($number, $count, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoEpochsApi->epochsNumberStakesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **int**| Number of the epoch |
 **count** | **int**| The number of results displayed on one page. | [optional] [default to 100]
 **page** | **int**| The page number for listing the results. | [optional] [default to 1]

### Return type

**object[]**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `epochsNumberStakesPoolIdGet()`

```php
epochsNumberStakesPoolIdGet($number, $pool_id, $count, $page): object[]
```

Stake distribution by pool

Return the active stake distribution for the epoch specified by stake pool.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoEpochsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = 225; // int | Number of the epoch
$pool_id = pool1pu5jlj4q9w9jlxeu370a3c9myx47md5j5m2str0naunn2q3lkdy; // string | Stake pool ID to filter
$count = 100; // int | The number of results displayed on one page.
$page = 1; // int | The page number for listing the results.

try {
    $result = $apiInstance->epochsNumberStakesPoolIdGet($number, $pool_id, $count, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoEpochsApi->epochsNumberStakesPoolIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **int**| Number of the epoch |
 **pool_id** | **string**| Stake pool ID to filter |
 **count** | **int**| The number of results displayed on one page. | [optional] [default to 100]
 **page** | **int**| The page number for listing the results. | [optional] [default to 1]

### Return type

**object[]**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
