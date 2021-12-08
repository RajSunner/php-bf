# OpenAPI\Client\CardanoBlocksApi

All URIs are relative to https://cardano-mainnet.blockfrost.io/api/v0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**blocksEpochEpochNumberSlotSlotNumberGet()**](CardanoBlocksApi.md#blocksEpochEpochNumberSlotSlotNumberGet) | **GET** /blocks/epoch/{epoch_number}/slot/{slot_number} | Specific block in a slot in an epoch
[**blocksHashOrNumberGet()**](CardanoBlocksApi.md#blocksHashOrNumberGet) | **GET** /blocks/{hash_or_number} | Specific block
[**blocksHashOrNumberNextGet()**](CardanoBlocksApi.md#blocksHashOrNumberNextGet) | **GET** /blocks/{hash_or_number}/next | Listing of next blocks
[**blocksHashOrNumberPreviousGet()**](CardanoBlocksApi.md#blocksHashOrNumberPreviousGet) | **GET** /blocks/{hash_or_number}/previous | Listing of previous blocks
[**blocksHashOrNumberTxsGet()**](CardanoBlocksApi.md#blocksHashOrNumberTxsGet) | **GET** /blocks/{hash_or_number}/txs | Block transactions
[**blocksLatestGet()**](CardanoBlocksApi.md#blocksLatestGet) | **GET** /blocks/latest | Latest block
[**blocksLatestTxsGet()**](CardanoBlocksApi.md#blocksLatestTxsGet) | **GET** /blocks/latest/txs | Latest block transactions
[**blocksSlotSlotNumberGet()**](CardanoBlocksApi.md#blocksSlotSlotNumberGet) | **GET** /blocks/slot/{slot_number} | Specific block in a slot


## `blocksEpochEpochNumberSlotSlotNumberGet()`

```php
blocksEpochEpochNumberSlotSlotNumberGet($epoch_number, $slot_number): \OpenAPI\Client\Model\BlockContent
```

Specific block in a slot in an epoch

Return the content of a requested block for a specific slot in an epoch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoBlocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$epoch_number = 219; // int | Epoch for specific epoch slot.
$slot_number = 30895909; // int | Slot position for requested block.

try {
    $result = $apiInstance->blocksEpochEpochNumberSlotSlotNumberGet($epoch_number, $slot_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoBlocksApi->blocksEpochEpochNumberSlotSlotNumberGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **epoch_number** | **int**| Epoch for specific epoch slot. |
 **slot_number** | **int**| Slot position for requested block. |

### Return type

[**\OpenAPI\Client\Model\BlockContent**](../Model/BlockContent.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blocksHashOrNumberGet()`

```php
blocksHashOrNumberGet($hash_or_number): \OpenAPI\Client\Model\BlockContent
```

Specific block

Return the content of a requested block.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoBlocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hash_or_number = 4ea1ba291e8eef538635a53e59fddba7810d1679631cc3aed7c8e6c4091a516a; // string | Hash or number of the requested block.

try {
    $result = $apiInstance->blocksHashOrNumberGet($hash_or_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoBlocksApi->blocksHashOrNumberGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash_or_number** | **string**| Hash or number of the requested block. |

### Return type

[**\OpenAPI\Client\Model\BlockContent**](../Model/BlockContent.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blocksHashOrNumberNextGet()`

```php
blocksHashOrNumberNextGet($hash_or_number, $count, $page): \OpenAPI\Client\Model\BlockContent[]
```

Listing of next blocks

Return the list of blocks following a specific block.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoBlocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hash_or_number = 5ea1ba291e8eef538635a53e59fddba7810d1679631cc3aed7c8e6c4091a516a; // string | Hash of the requested block.
$count = 100; // int | The number of results displayed on one page.
$page = 1; // int | The page number for listing the results.

try {
    $result = $apiInstance->blocksHashOrNumberNextGet($hash_or_number, $count, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoBlocksApi->blocksHashOrNumberNextGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash_or_number** | **string**| Hash of the requested block. |
 **count** | **int**| The number of results displayed on one page. | [optional] [default to 100]
 **page** | **int**| The page number for listing the results. | [optional] [default to 1]

### Return type

[**\OpenAPI\Client\Model\BlockContent[]**](../Model/BlockContent.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blocksHashOrNumberPreviousGet()`

```php
blocksHashOrNumberPreviousGet($hash_or_number, $count, $page): \OpenAPI\Client\Model\BlockContent[]
```

Listing of previous blocks

Return the list of blocks preceding a specific block.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoBlocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hash_or_number = 4873401; // string | Hash of the requested block
$count = 100; // int | The number of results displayed on one page.
$page = 1; // int | The page number for listing the results.

try {
    $result = $apiInstance->blocksHashOrNumberPreviousGet($hash_or_number, $count, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoBlocksApi->blocksHashOrNumberPreviousGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash_or_number** | **string**| Hash of the requested block |
 **count** | **int**| The number of results displayed on one page. | [optional] [default to 100]
 **page** | **int**| The page number for listing the results. | [optional] [default to 1]

### Return type

[**\OpenAPI\Client\Model\BlockContent[]**](../Model/BlockContent.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blocksHashOrNumberTxsGet()`

```php
blocksHashOrNumberTxsGet($hash_or_number, $count, $page, $order): string[]
```

Block transactions

Return the transactions within the block.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoBlocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hash_or_number = 4873401; // string | Hash of the requested block.
$count = 100; // int | The number of results displayed on one page.
$page = 1; // int | The page number for listing the results.
$order = 'asc'; // string | Ordered by tx index in the block. The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last.

try {
    $result = $apiInstance->blocksHashOrNumberTxsGet($hash_or_number, $count, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoBlocksApi->blocksHashOrNumberTxsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash_or_number** | **string**| Hash of the requested block. |
 **count** | **int**| The number of results displayed on one page. | [optional] [default to 100]
 **page** | **int**| The page number for listing the results. | [optional] [default to 1]
 **order** | **string**| Ordered by tx index in the block. The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. | [optional] [default to &#39;asc&#39;]

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

## `blocksLatestGet()`

```php
blocksLatestGet(): \OpenAPI\Client\Model\BlockContent
```

Latest block

Return the latest block available to the backends, also known as the tip of the blockchain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoBlocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->blocksLatestGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoBlocksApi->blocksLatestGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\BlockContent**](../Model/BlockContent.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blocksLatestTxsGet()`

```php
blocksLatestTxsGet($count, $page, $order): string[]
```

Latest block transactions

Return the transactions within the latest block.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoBlocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 100; // int | The number of results displayed on one page.
$page = 1; // int | The page number for listing the results.
$order = 'asc'; // string | Ordered by tx index in the block. The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last.

try {
    $result = $apiInstance->blocksLatestTxsGet($count, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoBlocksApi->blocksLatestTxsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| The number of results displayed on one page. | [optional] [default to 100]
 **page** | **int**| The page number for listing the results. | [optional] [default to 1]
 **order** | **string**| Ordered by tx index in the block. The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. | [optional] [default to &#39;asc&#39;]

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

## `blocksSlotSlotNumberGet()`

```php
blocksSlotSlotNumberGet($slot_number): \OpenAPI\Client\Model\BlockContent
```

Specific block in a slot

Return the content of a requested block for a specific slot.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoBlocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$slot_number = 30895909; // int | Slot position for requested block.

try {
    $result = $apiInstance->blocksSlotSlotNumberGet($slot_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoBlocksApi->blocksSlotSlotNumberGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slot_number** | **int**| Slot position for requested block. |

### Return type

[**\OpenAPI\Client\Model\BlockContent**](../Model/BlockContent.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
