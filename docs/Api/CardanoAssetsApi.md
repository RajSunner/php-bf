# OpenAPI\Client\CardanoAssetsApi

All URIs are relative to https://cardano-mainnet.blockfrost.io/api/v0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**assetsAssetAddressesGet()**](CardanoAssetsApi.md#assetsAssetAddressesGet) | **GET** /assets/{asset}/addresses | Asset addresses
[**assetsAssetGet()**](CardanoAssetsApi.md#assetsAssetGet) | **GET** /assets/{asset} | Specific asset
[**assetsAssetHistoryGet()**](CardanoAssetsApi.md#assetsAssetHistoryGet) | **GET** /assets/{asset}/history | Asset history
[**assetsAssetTransactionsGet()**](CardanoAssetsApi.md#assetsAssetTransactionsGet) | **GET** /assets/{asset}/transactions | Asset transactions
[**assetsAssetTxsGet()**](CardanoAssetsApi.md#assetsAssetTxsGet) | **GET** /assets/{asset}/txs | Asset transactions
[**assetsGet()**](CardanoAssetsApi.md#assetsGet) | **GET** /assets | Assets
[**assetsPolicyPolicyIdGet()**](CardanoAssetsApi.md#assetsPolicyPolicyIdGet) | **GET** /assets/policy/{policy_id} | Assets of a specific policy


## `assetsAssetAddressesGet()`

```php
assetsAssetAddressesGet($asset, $count, $page, $order): object[]
```

Asset addresses

List of a addresses containing a specific asset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoAssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset = b0d07d45fe9514f80213f4020e5a61241458be626841cde717cb38a76e7574636f696e; // string | Concatenation of the policy_id and hex-encoded asset_name
$count = 100; // int | The number of results displayed on one page.
$page = 1; // int | The page number for listing the results.
$order = 'asc'; // string | The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last.

try {
    $result = $apiInstance->assetsAssetAddressesGet($asset, $count, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoAssetsApi->assetsAssetAddressesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset** | **string**| Concatenation of the policy_id and hex-encoded asset_name |
 **count** | **int**| The number of results displayed on one page. | [optional] [default to 100]
 **page** | **int**| The page number for listing the results. | [optional] [default to 1]
 **order** | **string**| The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. | [optional] [default to &#39;asc&#39;]

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

## `assetsAssetGet()`

```php
assetsAssetGet($asset): \OpenAPI\Client\Model\Asset
```

Specific asset

Information about a specific asset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoAssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset = b0d07d45fe9514f80213f4020e5a61241458be626841cde717cb38a76e7574636f696e; // string | Concatenation of the policy_id and hex-encoded asset_name

try {
    $result = $apiInstance->assetsAssetGet($asset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoAssetsApi->assetsAssetGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset** | **string**| Concatenation of the policy_id and hex-encoded asset_name |

### Return type

[**\OpenAPI\Client\Model\Asset**](../Model/Asset.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assetsAssetHistoryGet()`

```php
assetsAssetHistoryGet($asset, $count, $page, $order): object[]
```

Asset history

History of a specific asset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoAssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset = b0d07d45fe9514f80213f4020e5a61241458be626841cde717cb38a76e7574636f696e; // string | Concatenation of the policy_id and hex-encoded asset_name
$count = 100; // int | The number of results displayed on one page.
$page = 1; // int | The page number for listing the results.
$order = 'asc'; // string | The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last.

try {
    $result = $apiInstance->assetsAssetHistoryGet($asset, $count, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoAssetsApi->assetsAssetHistoryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset** | **string**| Concatenation of the policy_id and hex-encoded asset_name |
 **count** | **int**| The number of results displayed on one page. | [optional] [default to 100]
 **page** | **int**| The page number for listing the results. | [optional] [default to 1]
 **order** | **string**| The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. | [optional] [default to &#39;asc&#39;]

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

## `assetsAssetTransactionsGet()`

```php
assetsAssetTransactionsGet($asset, $count, $page, $order): object[]
```

Asset transactions

List of a specific asset transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoAssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset = b0d07d45fe9514f80213f4020e5a61241458be626841cde717cb38a76e7574636f696e; // string | Concatenation of the policy_id and hex-encoded asset_name
$count = 100; // int | The number of results displayed on one page.
$page = 1; // int | The page number for listing the results.
$order = 'asc'; // string | The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last.

try {
    $result = $apiInstance->assetsAssetTransactionsGet($asset, $count, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoAssetsApi->assetsAssetTransactionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset** | **string**| Concatenation of the policy_id and hex-encoded asset_name |
 **count** | **int**| The number of results displayed on one page. | [optional] [default to 100]
 **page** | **int**| The page number for listing the results. | [optional] [default to 1]
 **order** | **string**| The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. | [optional] [default to &#39;asc&#39;]

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

## `assetsAssetTxsGet()`

```php
assetsAssetTxsGet($asset, $count, $page, $order): string[]
```

Asset transactions

List of a specific asset transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoAssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset = b0d07d45fe9514f80213f4020e5a61241458be626841cde717cb38a76e7574636f696e; // string | Concatenation of the policy_id and hex-encoded asset_name
$count = 100; // int | The number of results displayed on one page.
$page = 1; // int | The page number for listing the results.
$order = 'asc'; // string | The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last.

try {
    $result = $apiInstance->assetsAssetTxsGet($asset, $count, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoAssetsApi->assetsAssetTxsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset** | **string**| Concatenation of the policy_id and hex-encoded asset_name |
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

## `assetsGet()`

```php
assetsGet($count, $page, $order): object[]
```

Assets

List of assets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoAssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 100; // int | The number of results displayed on one page.
$page = 1; // int | The page number for listing the results.
$order = 'asc'; // string | The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last.

try {
    $result = $apiInstance->assetsGet($count, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoAssetsApi->assetsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| The number of results displayed on one page. | [optional] [default to 100]
 **page** | **int**| The page number for listing the results. | [optional] [default to 1]
 **order** | **string**| The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. | [optional] [default to &#39;asc&#39;]

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

## `assetsPolicyPolicyIdGet()`

```php
assetsPolicyPolicyIdGet($policy_id, $count, $page, $order): object[]
```

Assets of a specific policy

List of asset minted under a specific policy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoAssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$policy_id = 476039a0949cf0b22f6a800f56780184c44533887ca6e821007840c3; // string | Specific policy_id
$count = 100; // int | The number of results displayed on one page.
$page = 1; // int | The page number for listing the results.
$order = 'asc'; // string | The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last.

try {
    $result = $apiInstance->assetsPolicyPolicyIdGet($policy_id, $count, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoAssetsApi->assetsPolicyPolicyIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **policy_id** | **string**| Specific policy_id |
 **count** | **int**| The number of results displayed on one page. | [optional] [default to 100]
 **page** | **int**| The page number for listing the results. | [optional] [default to 1]
 **order** | **string**| The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. | [optional] [default to &#39;asc&#39;]

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
