# OpenAPI\Client\CardanoLedgerApi

All URIs are relative to https://cardano-mainnet.blockfrost.io/api/v0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**genesisGet()**](CardanoLedgerApi.md#genesisGet) | **GET** /genesis | Blockchain genesis


## `genesisGet()`

```php
genesisGet(): \OpenAPI\Client\Model\GenesisContent
```

Blockchain genesis

Return the information about blockchain genesis.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('project_id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CardanoLedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->genesisGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardanoLedgerApi->genesisGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\GenesisContent**](../Model/GenesisContent.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
