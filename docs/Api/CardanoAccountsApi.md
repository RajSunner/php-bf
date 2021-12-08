# OpenAPI\Client\CardanoAccountsApi

All URIs are relative to https://cardano-mainnet.blockfrost.io/api/v0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountsStakeAddressAddressesAssetsGet()**](CardanoAccountsApi.md#accountsStakeAddressAddressesAssetsGet) | **GET** /accounts/{stake_address}/addresses/assets | Assets associated with the account addresses
[**accountsStakeAddressAddressesGet()**](CardanoAccountsApi.md#accountsStakeAddressAddressesGet) | **GET** /accounts/{stake_address}/addresses | Account associated addresses
[**accountsStakeAddressAddressesTotalGet()**](CardanoAccountsApi.md#accountsStakeAddressAddressesTotalGet) | **GET** /accounts/{stake_address}/addresses/total | Detailed information about account associated addresses
[**accountsStakeAddressDelegationsGet()**](CardanoAccountsApi.md#accountsStakeAddressDelegationsGet) | **GET** /accounts/{stake_address}/delegations | Account delegation history
[**accountsStakeAddressGet()**](CardanoAccountsApi.md#accountsStakeAddressGet) | **GET** /accounts/{stake_address} | Specific account address
[**accountsStakeAddressHistoryGet()**](CardanoAccountsApi.md#accountsStakeAddressHistoryGet) | **GET** /accounts/{stake_address}/history | Account history
[**accountsStakeAddressMirsGet()**](CardanoAccountsApi.md#accountsStakeAddressMirsGet) | **GET** /accounts/{stake_address}/mirs | Account MIR history
[**accountsStakeAddressRegistrationsGet()**](CardanoAccountsApi.md#accountsStakeAddressRegistrationsGet) | **GET** /accounts/{stake_address}/registrations | Account registration history
[**accountsStakeAddressRewardsGet()**](CardanoAccountsApi.md#accountsStakeAddressRewardsGet) | **GET** /accounts/{stake_address}/rewards | Account reward history
[**accountsStakeAddressWithdrawalsGet()**](CardanoAccountsApi.md#accountsStakeAddressWithdrawalsGet) | **GET** /accounts/{stake_address}/withdrawals | Account withdrawal history


## `accountsStakeAddressAddressesAssetsGet()`

```php
accountsStakeAddressAddressesAssetsGet($stake_address, $count, $page, $order): object[]
```

Assets associated with the account addresses

Obtain information about assets associated with addresses of a specific account. <b>Be careful</b>, as an account could be part of a mangled address and does not necessarily mean the addresses are owned by user as the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stake_address = stake1u9ylzsgxaa6xctf4juup682ar3juj85n8tx3hthnljg47zctvm3rc; // string | Bech32 stake address.
$count = 100; // int | The number of results displayed on one page.
$page = 1; // int | The page number for listing the results.
$order = 'asc'; // string | The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last.

try {
    $result = $apiInstance->accountsStakeAddressAddressesAssetsGet($stake_address, $count, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoAccountsApi->accountsStakeAddressAddressesAssetsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stake_address** | **string**| Bech32 stake address. |
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

## `accountsStakeAddressAddressesGet()`

```php
accountsStakeAddressAddressesGet($stake_address, $count, $page, $order): object[]
```

Account associated addresses

Obtain information about the addresses of a specific account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stake_address = stake1u9ylzsgxaa6xctf4juup682ar3juj85n8tx3hthnljg47zctvm3rc; // string | Bech32 stake address.
$count = 100; // int | The number of results displayed on one page.
$page = 1; // int | The page number for listing the results.
$order = 'asc'; // string | The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last.

try {
    $result = $apiInstance->accountsStakeAddressAddressesGet($stake_address, $count, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoAccountsApi->accountsStakeAddressAddressesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stake_address** | **string**| Bech32 stake address. |
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

## `accountsStakeAddressAddressesTotalGet()`

```php
accountsStakeAddressAddressesTotalGet($address): \OpenAPI\Client\Model\AccountAddressesTotal
```

Detailed information about account associated addresses

Obtain summed details about all addresses associated with a given account. <b>Be careful</b>, as an account could be part of a mangled address and does not necessarily mean the addresses are owned by user as the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = addr1qxqs59lphg8g6qndelq8xwqn60ag3aeyfcp33c2kdp46a09re5df3pzwwmyq946axfcejy5n4x0y99wqpgtp2gd0k09qsgy6pz; // string | Bech32 address.

try {
    $result = $apiInstance->accountsStakeAddressAddressesTotalGet($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoAccountsApi->accountsStakeAddressAddressesTotalGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Bech32 address. |

### Return type

[**\OpenAPI\Client\Model\AccountAddressesTotal**](../Model/AccountAddressesTotal.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountsStakeAddressDelegationsGet()`

```php
accountsStakeAddressDelegationsGet($stake_address, $count, $page, $order): object[]
```

Account delegation history

Obtain information about the delegation of a specific account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stake_address = stake1u9ylzsgxaa6xctf4juup682ar3juj85n8tx3hthnljg47zctvm3rc; // string | Bech32 stake address.
$count = 100; // int | The number of results displayed on one page.
$page = 1; // int | The page number for listing the results.
$order = 'asc'; // string | The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last.

try {
    $result = $apiInstance->accountsStakeAddressDelegationsGet($stake_address, $count, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoAccountsApi->accountsStakeAddressDelegationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stake_address** | **string**| Bech32 stake address. |
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

## `accountsStakeAddressGet()`

```php
accountsStakeAddressGet($stake_address): \OpenAPI\Client\Model\AccountContent
```

Specific account address

Obtain information about a specific stake account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stake_address = stake1u9ylzsgxaa6xctf4juup682ar3juj85n8tx3hthnljg47zctvm3rc; // string | Bech32 stake address.

try {
    $result = $apiInstance->accountsStakeAddressGet($stake_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoAccountsApi->accountsStakeAddressGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stake_address** | **string**| Bech32 stake address. |

### Return type

[**\OpenAPI\Client\Model\AccountContent**](../Model/AccountContent.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountsStakeAddressHistoryGet()`

```php
accountsStakeAddressHistoryGet($stake_address, $count, $page, $order): object[]
```

Account history

Obtain information about the history of a specific account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stake_address = stake1u9ylzsgxaa6xctf4juup682ar3juj85n8tx3hthnljg47zctvm3rc; // string | Bech32 stake address.
$count = 100; // int | The number of results displayed on one page.
$page = 1; // int | The page number for listing the results.
$order = 'asc'; // string | The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last.

try {
    $result = $apiInstance->accountsStakeAddressHistoryGet($stake_address, $count, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoAccountsApi->accountsStakeAddressHistoryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stake_address** | **string**| Bech32 stake address. |
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

## `accountsStakeAddressMirsGet()`

```php
accountsStakeAddressMirsGet($stake_address, $count, $page, $order): object[]
```

Account MIR history

Obtain information about the MIRs of a specific account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stake_address = stake1u9ylzsgxaa6xctf4juup682ar3juj85n8tx3hthnljg47zctvm3rc; // string | Bech32 stake address.
$count = 100; // int | The number of results displayed on one page.
$page = 1; // int | The page number for listing the results.
$order = 'asc'; // string | The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last.

try {
    $result = $apiInstance->accountsStakeAddressMirsGet($stake_address, $count, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoAccountsApi->accountsStakeAddressMirsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stake_address** | **string**| Bech32 stake address. |
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

## `accountsStakeAddressRegistrationsGet()`

```php
accountsStakeAddressRegistrationsGet($stake_address, $count, $page, $order): object[]
```

Account registration history

Obtain information about the registrations and deregistrations of a specific account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stake_address = stake1u9ylzsgxaa6xctf4juup682ar3juj85n8tx3hthnljg47zctvm3rc; // string | Bech32 stake address.
$count = 100; // int | The number of results displayed on one page.
$page = 1; // int | The page number for listing the results.
$order = 'asc'; // string | The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last.

try {
    $result = $apiInstance->accountsStakeAddressRegistrationsGet($stake_address, $count, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoAccountsApi->accountsStakeAddressRegistrationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stake_address** | **string**| Bech32 stake address. |
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

## `accountsStakeAddressRewardsGet()`

```php
accountsStakeAddressRewardsGet($stake_address, $count, $page, $order): object[]
```

Account reward history

Obtain information about the reward history of a specific account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stake_address = stake1u9ylzsgxaa6xctf4juup682ar3juj85n8tx3hthnljg47zctvm3rc; // string | Bech32 stake address.
$count = 100; // int | The number of results displayed on one page.
$page = 1; // int | The page number for listing the results.
$order = 'asc'; // string | The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last.

try {
    $result = $apiInstance->accountsStakeAddressRewardsGet($stake_address, $count, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoAccountsApi->accountsStakeAddressRewardsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stake_address** | **string**| Bech32 stake address. |
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

## `accountsStakeAddressWithdrawalsGet()`

```php
accountsStakeAddressWithdrawalsGet($stake_address, $count, $page, $order): object[]
```

Account withdrawal history

Obtain information about the withdrawals of a specific account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stake_address = stake1u9ylzsgxaa6xctf4juup682ar3juj85n8tx3hthnljg47zctvm3rc; // string | Bech32 stake address.
$count = 100; // int | The number of results displayed on one page.
$page = 1; // int | The page number for listing the results.
$order = 'asc'; // string | The ordering of items from the point of view of the blockchain, not the page listing itself. By default, we return oldest first, newest last.

try {
    $result = $apiInstance->accountsStakeAddressWithdrawalsGet($stake_address, $count, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoAccountsApi->accountsStakeAddressWithdrawalsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stake_address** | **string**| Bech32 stake address. |
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
