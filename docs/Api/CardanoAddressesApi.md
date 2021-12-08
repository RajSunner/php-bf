# OpenAPI\Client\CardanoAddressesApi

All URIs are relative to https://cardano-mainnet.blockfrost.io/api/v0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addressesAddressExtendedGet()**](CardanoAddressesApi.md#addressesAddressExtendedGet) | **GET** /addresses/{address}/extended | Extended information of a specific address
[**addressesAddressGet()**](CardanoAddressesApi.md#addressesAddressGet) | **GET** /addresses/{address} | Specific address
[**addressesAddressTotalGet()**](CardanoAddressesApi.md#addressesAddressTotalGet) | **GET** /addresses/{address}/total | Address details
[**addressesAddressTransactionsGet()**](CardanoAddressesApi.md#addressesAddressTransactionsGet) | **GET** /addresses/{address}/transactions | Address transactions
[**addressesAddressTxsGet()**](CardanoAddressesApi.md#addressesAddressTxsGet) | **GET** /addresses/{address}/txs | Address transactions
[**addressesAddressUtxosAssetGet()**](CardanoAddressesApi.md#addressesAddressUtxosAssetGet) | **GET** /addresses/{address}/utxos/{asset} | Address UTXOs of a given asset
[**addressesAddressUtxosGet()**](CardanoAddressesApi.md#addressesAddressUtxosGet) | **GET** /addresses/{address}/utxos | Address UTXOs


## `addressesAddressExtendedGet()`

```php
addressesAddressExtendedGet($address): \OpenAPI\Client\Model\AddressContentExtended
```

Extended information of a specific address

Obtain extended information about a specific address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = addr1qxqs59lphg8g6qndelq8xwqn60ag3aeyfcp33c2kdp46a09re5df3pzwwmyq946axfcejy5n4x0y99wqpgtp2gd0k09qsgy6pz; // string | Bech32 address.

try {
    $result = $apiInstance->addressesAddressExtendedGet($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoAddressesApi->addressesAddressExtendedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Bech32 address. |

### Return type

[**\OpenAPI\Client\Model\AddressContentExtended**](../Model/AddressContentExtended.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addressesAddressGet()`

```php
addressesAddressGet($address): \OpenAPI\Client\Model\AddressContent
```

Specific address

Obtain information about a specific address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = addr1qxqs59lphg8g6qndelq8xwqn60ag3aeyfcp33c2kdp46a09re5df3pzwwmyq946axfcejy5n4x0y99wqpgtp2gd0k09qsgy6pz; // string | Bech32 address.

try {
    $result = $apiInstance->addressesAddressGet($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoAddressesApi->addressesAddressGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Bech32 address. |

### Return type

[**\OpenAPI\Client\Model\AddressContent**](../Model/AddressContent.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addressesAddressTotalGet()`

```php
addressesAddressTotalGet($address): \OpenAPI\Client\Model\AddressContentTotal
```

Address details

Obtain details about an address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = addr1qxqs59lphg8g6qndelq8xwqn60ag3aeyfcp33c2kdp46a09re5df3pzwwmyq946axfcejy5n4x0y99wqpgtp2gd0k09qsgy6pz; // string | Bech32 address.

try {
    $result = $apiInstance->addressesAddressTotalGet($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoAddressesApi->addressesAddressTotalGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Bech32 address. |

### Return type

[**\OpenAPI\Client\Model\AddressContentTotal**](../Model/AddressContentTotal.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addressesAddressTransactionsGet()`

```php
addressesAddressTransactionsGet($address, $count, $page, $order, $from, $to): object[]
```

Address transactions

Transactions on the address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = addr1qxqs59lphg8g6qndelq8xwqn60ag3aeyfcp33c2kdp46a09re5df3pzwwmyq946axfcejy5n4x0y99wqpgtp2gd0k09qsgy6pz; // string | Bech32 address.
$count = 100; // int | The numbers of pools per page.
$page = 1; // int | The page number for listing the results.
$order = 'asc'; // string | The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last.
$from = 8929261; // string | The block number and optionally also index from which (inclusive) to start search for results, concatenated using colon. Has to be lower than or equal to `to` parameter.
$to = 9999269:10; // string | The block number and optionally also index where (inclusive) to end the search for results, concatenated using colon. Has to be higher than or equal to `from` parameter.

try {
    $result = $apiInstance->addressesAddressTransactionsGet($address, $count, $page, $order, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoAddressesApi->addressesAddressTransactionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Bech32 address. |
 **count** | **int**| The numbers of pools per page. | [optional] [default to 100]
 **page** | **int**| The page number for listing the results. | [optional] [default to 1]
 **order** | **string**| The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last. | [optional] [default to &#39;asc&#39;]
 **from** | **string**| The block number and optionally also index from which (inclusive) to start search for results, concatenated using colon. Has to be lower than or equal to &#x60;to&#x60; parameter. | [optional]
 **to** | **string**| The block number and optionally also index where (inclusive) to end the search for results, concatenated using colon. Has to be higher than or equal to &#x60;from&#x60; parameter. | [optional]

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

## `addressesAddressTxsGet()`

```php
addressesAddressTxsGet($address, $count, $page, $order): string[]
```

Address transactions

Transactions on the address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = addr1qxqs59lphg8g6qndelq8xwqn60ag3aeyfcp33c2kdp46a09re5df3pzwwmyq946axfcejy5n4x0y99wqpgtp2gd0k09qsgy6pz; // string | Bech32 address.
$count = 100; // int | The number of transactions per page.
$page = 1; // int | The page number for listing the results.
$order = 'asc'; // string | The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last.

try {
    $result = $apiInstance->addressesAddressTxsGet($address, $count, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoAddressesApi->addressesAddressTxsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Bech32 address. |
 **count** | **int**| The number of transactions per page. | [optional] [default to 100]
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

## `addressesAddressUtxosAssetGet()`

```php
addressesAddressUtxosAssetGet($address, $asset, $count, $page, $order): object[]
```

Address UTXOs of a given asset

UTXOs of the address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = addr1qxqs59lphg8g6qndelq8xwqn60ag3aeyfcp33c2kdp46a09re5df3pzwwmyq946axfcejy5n4x0y99wqpgtp2gd0k09qsgy6pz; // string | Bech32 address.
$asset = b0d07d45fe9514f80213f4020e5a61241458be626841cde717cb38a76e7574636f696e; // string | Concatenation of the policy_id and hex-encoded asset_name
$count = 100; // int | The number of results displayed on one page.
$page = 1; // int | The page number for listing the results.
$order = 'asc'; // string | The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last.

try {
    $result = $apiInstance->addressesAddressUtxosAssetGet($address, $asset, $count, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoAddressesApi->addressesAddressUtxosAssetGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Bech32 address. |
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

## `addressesAddressUtxosGet()`

```php
addressesAddressUtxosGet($address, $count, $page, $order): object[]
```

Address UTXOs

UTXOs of the address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = addr1qxqs59lphg8g6qndelq8xwqn60ag3aeyfcp33c2kdp46a09re5df3pzwwmyq946axfcejy5n4x0y99wqpgtp2gd0k09qsgy6pz; // string | Bech32 address.
$count = 100; // int | The number of results displayed on one page.
$page = 1; // int | The page number for listing the results.
$order = 'asc'; // string | The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last.

try {
    $result = $apiInstance->addressesAddressUtxosGet($address, $count, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoAddressesApi->addressesAddressUtxosGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Bech32 address. |
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
