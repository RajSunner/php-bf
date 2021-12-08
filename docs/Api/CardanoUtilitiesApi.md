# OpenAPI\Client\CardanoUtilitiesApi

All URIs are relative to https://cardano-mainnet.blockfrost.io/api/v0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**utilsAddressesXpubXpubRoleIndexGet()**](CardanoUtilitiesApi.md#utilsAddressesXpubXpubRoleIndexGet) | **GET** /utils/addresses/xpub/{xpub}/{role}/{index} | Derive an address


## `utilsAddressesXpubXpubRoleIndexGet()`

```php
utilsAddressesXpubXpubRoleIndexGet($xpub, $role, $index): \OpenAPI\Client\Model\UtilsAddressesXpub
```

Derive an address

Derive Shelley address from an xpub

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoUtilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xpub = d507c8f866691bd96e131334c355188b1a1d0b2fa0ab11545075aab332d77d9eb19657ad13ee581b56b0f8d744d66ca356b93d42fe176b3de007d53e9c4c4e7a; // string | Hex xpub
$role = 0; // int | Account role
$index = 2; // int | Address index

try {
    $result = $apiInstance->utilsAddressesXpubXpubRoleIndexGet($xpub, $role, $index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoUtilitiesApi->utilsAddressesXpubXpubRoleIndexGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xpub** | **string**| Hex xpub |
 **role** | **int**| Account role |
 **index** | **int**| Address index |

### Return type

[**\OpenAPI\Client\Model\UtilsAddressesXpub**](../Model/UtilsAddressesXpub.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
