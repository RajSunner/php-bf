# OpenAPI\Client\CardanoScriptsApi

All URIs are relative to https://cardano-mainnet.blockfrost.io/api/v0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**scriptsDatumDatumHashGet()**](CardanoScriptsApi.md#scriptsDatumDatumHashGet) | **GET** /scripts/datum/{datum_hash} | Datum value
[**scriptsGet()**](CardanoScriptsApi.md#scriptsGet) | **GET** /scripts | Scripts
[**scriptsScriptHashCborGet()**](CardanoScriptsApi.md#scriptsScriptHashCborGet) | **GET** /scripts/{script_hash}/cbor | Script CBOR
[**scriptsScriptHashGet()**](CardanoScriptsApi.md#scriptsScriptHashGet) | **GET** /scripts/{script_hash} | Specific script
[**scriptsScriptHashJsonGet()**](CardanoScriptsApi.md#scriptsScriptHashJsonGet) | **GET** /scripts/{script_hash}/json | Script JSON
[**scriptsScriptHashRedeemersGet()**](CardanoScriptsApi.md#scriptsScriptHashRedeemersGet) | **GET** /scripts/{script_hash}/redeemers | Redeemers of a specific script


## `scriptsDatumDatumHashGet()`

```php
scriptsDatumDatumHashGet($datum_hash): \OpenAPI\Client\Model\ScriptDatum
```

Datum value

Query JSON value of a datum by its hash

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoScriptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$datum_hash = db583ad85881a96c73fbb26ab9e24d1120bb38f45385664bb9c797a2ea8d9a2d; // string | Hash of the datum

try {
    $result = $apiInstance->scriptsDatumDatumHashGet($datum_hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoScriptsApi->scriptsDatumDatumHashGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datum_hash** | **string**| Hash of the datum |

### Return type

[**\OpenAPI\Client\Model\ScriptDatum**](../Model/ScriptDatum.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `scriptsGet()`

```php
scriptsGet($count, $page, $order): object[]
```

Scripts

List of scripts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoScriptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 100; // int | The number of results displayed on one page.
$page = 1; // int | The page number for listing the results.
$order = 'asc'; // string | The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last.

try {
    $result = $apiInstance->scriptsGet($count, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoScriptsApi->scriptsGet: ', $e->getMessage(), PHP_EOL;
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

## `scriptsScriptHashCborGet()`

```php
scriptsScriptHashCborGet($script_hash): \OpenAPI\Client\Model\ScriptCbor
```

Script CBOR

CBOR representation of a `plutus` script

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoScriptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$script_hash = e1457a0c47dfb7a2f6b8fbb059bdceab163c05d34f195b87b9f2b30e; // string | Hash of the script

try {
    $result = $apiInstance->scriptsScriptHashCborGet($script_hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoScriptsApi->scriptsScriptHashCborGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **script_hash** | **string**| Hash of the script |

### Return type

[**\OpenAPI\Client\Model\ScriptCbor**](../Model/ScriptCbor.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `scriptsScriptHashGet()`

```php
scriptsScriptHashGet($script_hash): \OpenAPI\Client\Model\Script
```

Specific script

Information about a specific script

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoScriptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$script_hash = e1457a0c47dfb7a2f6b8fbb059bdceab163c05d34f195b87b9f2b30e; // string | Hash of the script

try {
    $result = $apiInstance->scriptsScriptHashGet($script_hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoScriptsApi->scriptsScriptHashGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **script_hash** | **string**| Hash of the script |

### Return type

[**\OpenAPI\Client\Model\Script**](../Model/Script.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `scriptsScriptHashJsonGet()`

```php
scriptsScriptHashJsonGet($script_hash): \OpenAPI\Client\Model\ScriptJson
```

Script JSON

JSON representation of a `timelock` script

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoScriptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$script_hash = e1457a0c47dfb7a2f6b8fbb059bdceab163c05d34f195b87b9f2b30e; // string | Hash of the script

try {
    $result = $apiInstance->scriptsScriptHashJsonGet($script_hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoScriptsApi->scriptsScriptHashJsonGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **script_hash** | **string**| Hash of the script |

### Return type

[**\OpenAPI\Client\Model\ScriptJson**](../Model/ScriptJson.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `scriptsScriptHashRedeemersGet()`

```php
scriptsScriptHashRedeemersGet($script_hash, $count, $page, $order): object[]
```

Redeemers of a specific script

List of redeemers of a specific script

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoScriptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$script_hash = e1457a0c47dfb7a2f6b8fbb059bdceab163c05d34f195b87b9f2b30e; // string | Hash of the script
$count = 100; // int | The number of results displayed on one page.
$page = 1; // int | The page number for listing the results.
$order = 'asc'; // string | The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last.

try {
    $result = $apiInstance->scriptsScriptHashRedeemersGet($script_hash, $count, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoScriptsApi->scriptsScriptHashRedeemersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **script_hash** | **string**| Hash of the script |
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
