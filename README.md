# OpenAPIClient-php

Blockfrost is an API as a service that allows users to interact with the Cardano blockchain and parts of its ecosystem.

## Tokens

After signing up on https://blockfrost.io, a `project_id` token is automatically generated for each project.
HTTP header of your request MUST include this `project_id` in order to authenticate against Blockfrost servers.

## Available networks

At the moment, you can use the following networks. Please, note that each network has its own `project_id`.

<table>
  <tr><td><b>Network</b></td><td><b>Endpoint</b></td></tr>
  <tr><td>Cardano mainnet</td><td><tt>https://cardano-mainnet.blockfrost.io/api/v0</td></tt></tr>
  <tr><td>Cardano testnet</td><td><tt>https://cardano-testnet.blockfrost.io/api/v0</tt></td></tr>
  <tr><td>InterPlanetary File System</td><td><tt>https://ipfs.blockfrost.io/api/v0</tt></td></tr>
</table>

## Concepts

* All endpoints return either a JSON object or an array.
* Data is returned in *ascending* (oldest first, newest last) order.
  * You might use the `?order=desc` query parameter to reverse this order.
* By default, we return 100 results at a time. You have to use `?page=2` to list through the results.
* All time and timestamp related fields (except `server_time`) are in seconds of UNIX time.
* All amounts are returned in Lovelaces, where 1 ADA = 1 000 000 Lovelaces.
* Addresses, accounts and pool IDs are in Bech32 format.
* All values are case sensitive.
* All hex encoded values are lower case.
* Examples are not based on real data. Any resemblance to actual events is purely coincidental.
* We allow to upload files up to 100MB of size to IPFS. This might increase in the future.

## Errors

### HTTP Status codes

The following are HTTP status code your application might receive when reaching Blockfrost endpoints and
it should handle all of these cases.

* HTTP `400` return code is used when the request is not valid.
* HTTP `402` return code is used when the projects exceed their daily request limit.
* HTTP `403` return code is used when the request is not authenticated.
* HTTP `404` return code is used when the resource doesn't exist.
* HTTP `418` return code is used when the user has been auto-banned for flooding too much after previously receiving error code `402` or `429`.
* HTTP `425` return code is used when the user has submitted a transaction when the mempool is already full, not accepting new txs straight away.
* HTTP `429` return code is used when the user has sent too many requests in a given amount of time and therefore has been rate-limited.
* HTTP `500` return code is used when our endpoints are having a problem.

### Error codes

An internal error code number is used for better indication of the error in question. It is passed using the following payload.

```json
{
  \"status_code\": 403,
  \"error\": \"Forbidden\",
  \"message\": \"Invalid project token.\"
}
```
## Limits

 There are two types of limits we are enforcing:

 The first depends on your plan and is the number of request we allow per day. We defined the day from midnight to midnight of UTC time.

 The second is rate limiting. We limit an end user, distinguished by IP address, to 10 requests per second. On top of that, we allow
 each user to send burst of 500 requests, which cools off at rate of 10 requests per second. In essence, a user is allowed to make another
 whole burst after (currently) 500/10 = 50 seconds. E.g. if a user attemtps to make a call 3 seconds after whole burst, 30 requests will be processed.
 We believe this should be sufficient for most of the use cases. If it is not and you have a specific use case, please get in touch with us, and
 we will make sure to take it into account as much as we can.

## SDKs

We support a number of SDKs that will help you in developing your application on top of Blockfrost.

<table>
  <tr><td><b>Programming language</b></td><td><b>SDK</b></td></tr>
  <tr><td>JavaScript</td><td><a href=\"https://github.com/blockfrost/blockfrost-js\">blockfrost-js</a></tr>
  <tr><td>Haskell</td><td><a href=\"https://github.com/blockfrost/blockfrost-haskell\">blockfrost-haskell</a></tr>
  <tr><td>Java</td><td><a href=\"https://github.com/blockfrost/blockfrost-java\">blockfrost-java</a></tr>
  <tr><td>Python</td><td><a href=\"https://github.com/blockfrost/blockfrost-python\">blockfrost-python</a></tr>
  <tr><td>Rust</td><td><a href=\"https://github.com/blockfrost/blockfrost-rust\">blockfrost-rust</a></tr>
  <tr><td>Golang</td><td><a href=\"https://github.com/blockfrost/blockfrost-go\">blockfrost-go</a></tr>
  <tr><td>Ruby</td><td><a href=\"https://github.com/blockfrost/blockfrost-ruby\">blockfrost-ruby</a></tr>
  <tr><td>Swift</td><td><a href=\"https://github.com/blockfrost/blockfrost-swift\">blockfrost-swift</a></tr>
  <tr><td>Kotlin</td><td><a href=\"https://github.com/blockfrost/blockfrost-kotlin\">blockfrost-kotlin</a></tr>
  <tr><td>Scala</td><td><a href=\"https://github.com/blockfrost/blockfrost-scala\">blockfrost-scala</a></tr>
  <tr><td>Elixir</td><td><a href=\"https://github.com/blockfrost/blockfrost-elixir\">blockfrost-elixir</a></tr>
</table>


For more information, please visit [https://blockfrost.io](https://blockfrost.io).

## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('project_id', 'testnet3mzQ2iitKr2doEck7XF8XgcQITOP4sqa');


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

## API Endpoints

All URIs are relative to *https://cardano-mainnet.blockfrost.io/api/v0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CardanoAccountsApi* | [**accountsStakeAddressAddressesAssetsGet**](docs/Api/CardanoAccountsApi.md#accountsstakeaddressaddressesassetsget) | **GET** /accounts/{stake_address}/addresses/assets | Assets associated with the account addresses
*CardanoAccountsApi* | [**accountsStakeAddressAddressesGet**](docs/Api/CardanoAccountsApi.md#accountsstakeaddressaddressesget) | **GET** /accounts/{stake_address}/addresses | Account associated addresses
*CardanoAccountsApi* | [**accountsStakeAddressAddressesTotalGet**](docs/Api/CardanoAccountsApi.md#accountsstakeaddressaddressestotalget) | **GET** /accounts/{stake_address}/addresses/total | Detailed information about account associated addresses
*CardanoAccountsApi* | [**accountsStakeAddressDelegationsGet**](docs/Api/CardanoAccountsApi.md#accountsstakeaddressdelegationsget) | **GET** /accounts/{stake_address}/delegations | Account delegation history
*CardanoAccountsApi* | [**accountsStakeAddressGet**](docs/Api/CardanoAccountsApi.md#accountsstakeaddressget) | **GET** /accounts/{stake_address} | Specific account address
*CardanoAccountsApi* | [**accountsStakeAddressHistoryGet**](docs/Api/CardanoAccountsApi.md#accountsstakeaddresshistoryget) | **GET** /accounts/{stake_address}/history | Account history
*CardanoAccountsApi* | [**accountsStakeAddressMirsGet**](docs/Api/CardanoAccountsApi.md#accountsstakeaddressmirsget) | **GET** /accounts/{stake_address}/mirs | Account MIR history
*CardanoAccountsApi* | [**accountsStakeAddressRegistrationsGet**](docs/Api/CardanoAccountsApi.md#accountsstakeaddressregistrationsget) | **GET** /accounts/{stake_address}/registrations | Account registration history
*CardanoAccountsApi* | [**accountsStakeAddressRewardsGet**](docs/Api/CardanoAccountsApi.md#accountsstakeaddressrewardsget) | **GET** /accounts/{stake_address}/rewards | Account reward history
*CardanoAccountsApi* | [**accountsStakeAddressWithdrawalsGet**](docs/Api/CardanoAccountsApi.md#accountsstakeaddresswithdrawalsget) | **GET** /accounts/{stake_address}/withdrawals | Account withdrawal history
*CardanoAddressesApi* | [**addressesAddressExtendedGet**](docs/Api/CardanoAddressesApi.md#addressesaddressextendedget) | **GET** /addresses/{address}/extended | Extended information of a specific address
*CardanoAddressesApi* | [**addressesAddressGet**](docs/Api/CardanoAddressesApi.md#addressesaddressget) | **GET** /addresses/{address} | Specific address
*CardanoAddressesApi* | [**addressesAddressTotalGet**](docs/Api/CardanoAddressesApi.md#addressesaddresstotalget) | **GET** /addresses/{address}/total | Address details
*CardanoAddressesApi* | [**addressesAddressTransactionsGet**](docs/Api/CardanoAddressesApi.md#addressesaddresstransactionsget) | **GET** /addresses/{address}/transactions | Address transactions
*CardanoAddressesApi* | [**addressesAddressTxsGet**](docs/Api/CardanoAddressesApi.md#addressesaddresstxsget) | **GET** /addresses/{address}/txs | Address transactions
*CardanoAddressesApi* | [**addressesAddressUtxosAssetGet**](docs/Api/CardanoAddressesApi.md#addressesaddressutxosassetget) | **GET** /addresses/{address}/utxos/{asset} | Address UTXOs of a given asset
*CardanoAddressesApi* | [**addressesAddressUtxosGet**](docs/Api/CardanoAddressesApi.md#addressesaddressutxosget) | **GET** /addresses/{address}/utxos | Address UTXOs
*CardanoAssetsApi* | [**assetsAssetAddressesGet**](docs/Api/CardanoAssetsApi.md#assetsassetaddressesget) | **GET** /assets/{asset}/addresses | Asset addresses
*CardanoAssetsApi* | [**assetsAssetGet**](docs/Api/CardanoAssetsApi.md#assetsassetget) | **GET** /assets/{asset} | Specific asset
*CardanoAssetsApi* | [**assetsAssetHistoryGet**](docs/Api/CardanoAssetsApi.md#assetsassethistoryget) | **GET** /assets/{asset}/history | Asset history
*CardanoAssetsApi* | [**assetsAssetTransactionsGet**](docs/Api/CardanoAssetsApi.md#assetsassettransactionsget) | **GET** /assets/{asset}/transactions | Asset transactions
*CardanoAssetsApi* | [**assetsAssetTxsGet**](docs/Api/CardanoAssetsApi.md#assetsassettxsget) | **GET** /assets/{asset}/txs | Asset transactions
*CardanoAssetsApi* | [**assetsGet**](docs/Api/CardanoAssetsApi.md#assetsget) | **GET** /assets | Assets
*CardanoAssetsApi* | [**assetsPolicyPolicyIdGet**](docs/Api/CardanoAssetsApi.md#assetspolicypolicyidget) | **GET** /assets/policy/{policy_id} | Assets of a specific policy
*CardanoBlocksApi* | [**blocksEpochEpochNumberSlotSlotNumberGet**](docs/Api/CardanoBlocksApi.md#blocksepochepochnumberslotslotnumberget) | **GET** /blocks/epoch/{epoch_number}/slot/{slot_number} | Specific block in a slot in an epoch
*CardanoBlocksApi* | [**blocksHashOrNumberGet**](docs/Api/CardanoBlocksApi.md#blockshashornumberget) | **GET** /blocks/{hash_or_number} | Specific block
*CardanoBlocksApi* | [**blocksHashOrNumberNextGet**](docs/Api/CardanoBlocksApi.md#blockshashornumbernextget) | **GET** /blocks/{hash_or_number}/next | Listing of next blocks
*CardanoBlocksApi* | [**blocksHashOrNumberPreviousGet**](docs/Api/CardanoBlocksApi.md#blockshashornumberpreviousget) | **GET** /blocks/{hash_or_number}/previous | Listing of previous blocks
*CardanoBlocksApi* | [**blocksHashOrNumberTxsGet**](docs/Api/CardanoBlocksApi.md#blockshashornumbertxsget) | **GET** /blocks/{hash_or_number}/txs | Block transactions
*CardanoBlocksApi* | [**blocksLatestGet**](docs/Api/CardanoBlocksApi.md#blockslatestget) | **GET** /blocks/latest | Latest block
*CardanoBlocksApi* | [**blocksLatestTxsGet**](docs/Api/CardanoBlocksApi.md#blockslatesttxsget) | **GET** /blocks/latest/txs | Latest block transactions
*CardanoBlocksApi* | [**blocksSlotSlotNumberGet**](docs/Api/CardanoBlocksApi.md#blocksslotslotnumberget) | **GET** /blocks/slot/{slot_number} | Specific block in a slot
*CardanoEpochsApi* | [**epochsLatestGet**](docs/Api/CardanoEpochsApi.md#epochslatestget) | **GET** /epochs/latest | Latest epoch
*CardanoEpochsApi* | [**epochsLatestParametersGet**](docs/Api/CardanoEpochsApi.md#epochslatestparametersget) | **GET** /epochs/latest/parameters | Latest epoch protocol parameters
*CardanoEpochsApi* | [**epochsNumberBlocksGet**](docs/Api/CardanoEpochsApi.md#epochsnumberblocksget) | **GET** /epochs/{number}/blocks | Block distribution
*CardanoEpochsApi* | [**epochsNumberBlocksPoolIdGet**](docs/Api/CardanoEpochsApi.md#epochsnumberblockspoolidget) | **GET** /epochs/{number}/blocks/{pool_id} | Block distribution by pool
*CardanoEpochsApi* | [**epochsNumberGet**](docs/Api/CardanoEpochsApi.md#epochsnumberget) | **GET** /epochs/{number} | Specific epoch
*CardanoEpochsApi* | [**epochsNumberNextGet**](docs/Api/CardanoEpochsApi.md#epochsnumbernextget) | **GET** /epochs/{number}/next | Listing of next epochs
*CardanoEpochsApi* | [**epochsNumberParametersGet**](docs/Api/CardanoEpochsApi.md#epochsnumberparametersget) | **GET** /epochs/{number}/parameters | Protocol parameters
*CardanoEpochsApi* | [**epochsNumberPreviousGet**](docs/Api/CardanoEpochsApi.md#epochsnumberpreviousget) | **GET** /epochs/{number}/previous | Listing of previous epochs
*CardanoEpochsApi* | [**epochsNumberStakesGet**](docs/Api/CardanoEpochsApi.md#epochsnumberstakesget) | **GET** /epochs/{number}/stakes | Stake distribution
*CardanoEpochsApi* | [**epochsNumberStakesPoolIdGet**](docs/Api/CardanoEpochsApi.md#epochsnumberstakespoolidget) | **GET** /epochs/{number}/stakes/{pool_id} | Stake distribution by pool
*CardanoLedgerApi* | [**genesisGet**](docs/Api/CardanoLedgerApi.md#genesisget) | **GET** /genesis | Blockchain genesis
*CardanoMetadataApi* | [**metadataTxsLabelsGet**](docs/Api/CardanoMetadataApi.md#metadatatxslabelsget) | **GET** /metadata/txs/labels | Transaction metadata labels
*CardanoMetadataApi* | [**metadataTxsLabelsLabelCborGet**](docs/Api/CardanoMetadataApi.md#metadatatxslabelslabelcborget) | **GET** /metadata/txs/labels/{label}/cbor | Transaction metadata content in CBOR
*CardanoMetadataApi* | [**metadataTxsLabelsLabelGet**](docs/Api/CardanoMetadataApi.md#metadatatxslabelslabelget) | **GET** /metadata/txs/labels/{label} | Transaction metadata content in JSON
*CardanoNetworkApi* | [**networkGet**](docs/Api/CardanoNetworkApi.md#networkget) | **GET** /network | Network information
*CardanoPoolsApi* | [**poolsExtendedGet**](docs/Api/CardanoPoolsApi.md#poolsextendedget) | **GET** /pools/extended | List of stake pools with additional information
*CardanoPoolsApi* | [**poolsGet**](docs/Api/CardanoPoolsApi.md#poolsget) | **GET** /pools | List of stake pools
*CardanoPoolsApi* | [**poolsPoolIdBlocksGet**](docs/Api/CardanoPoolsApi.md#poolspoolidblocksget) | **GET** /pools/{pool_id}/blocks | Stake pool blocks
*CardanoPoolsApi* | [**poolsPoolIdDelegatorsGet**](docs/Api/CardanoPoolsApi.md#poolspooliddelegatorsget) | **GET** /pools/{pool_id}/delegators | Stake pool delegators
*CardanoPoolsApi* | [**poolsPoolIdGet**](docs/Api/CardanoPoolsApi.md#poolspoolidget) | **GET** /pools/{pool_id} | Specific stake pool
*CardanoPoolsApi* | [**poolsPoolIdHistoryGet**](docs/Api/CardanoPoolsApi.md#poolspoolidhistoryget) | **GET** /pools/{pool_id}/history | Stake pool history
*CardanoPoolsApi* | [**poolsPoolIdMetadataGet**](docs/Api/CardanoPoolsApi.md#poolspoolidmetadataget) | **GET** /pools/{pool_id}/metadata | Stake pool metadata
*CardanoPoolsApi* | [**poolsPoolIdRelaysGet**](docs/Api/CardanoPoolsApi.md#poolspoolidrelaysget) | **GET** /pools/{pool_id}/relays | Stake pool relays
*CardanoPoolsApi* | [**poolsPoolIdUpdatesGet**](docs/Api/CardanoPoolsApi.md#poolspoolidupdatesget) | **GET** /pools/{pool_id}/updates | Stake pool updates
*CardanoPoolsApi* | [**poolsRetiredGet**](docs/Api/CardanoPoolsApi.md#poolsretiredget) | **GET** /pools/retired | List of retired stake pools
*CardanoPoolsApi* | [**poolsRetiringGet**](docs/Api/CardanoPoolsApi.md#poolsretiringget) | **GET** /pools/retiring | List of retiring stake pools
*CardanoScriptsApi* | [**scriptsDatumDatumHashGet**](docs/Api/CardanoScriptsApi.md#scriptsdatumdatumhashget) | **GET** /scripts/datum/{datum_hash} | Datum value
*CardanoScriptsApi* | [**scriptsGet**](docs/Api/CardanoScriptsApi.md#scriptsget) | **GET** /scripts | Scripts
*CardanoScriptsApi* | [**scriptsScriptHashCborGet**](docs/Api/CardanoScriptsApi.md#scriptsscripthashcborget) | **GET** /scripts/{script_hash}/cbor | Script CBOR
*CardanoScriptsApi* | [**scriptsScriptHashGet**](docs/Api/CardanoScriptsApi.md#scriptsscripthashget) | **GET** /scripts/{script_hash} | Specific script
*CardanoScriptsApi* | [**scriptsScriptHashJsonGet**](docs/Api/CardanoScriptsApi.md#scriptsscripthashjsonget) | **GET** /scripts/{script_hash}/json | Script JSON
*CardanoScriptsApi* | [**scriptsScriptHashRedeemersGet**](docs/Api/CardanoScriptsApi.md#scriptsscripthashredeemersget) | **GET** /scripts/{script_hash}/redeemers | Redeemers of a specific script
*CardanoTransactionsApi* | [**txSubmitPost**](docs/Api/CardanoTransactionsApi.md#txsubmitpost) | **POST** /tx/submit | Submit a transaction
*CardanoTransactionsApi* | [**txsHashDelegationsGet**](docs/Api/CardanoTransactionsApi.md#txshashdelegationsget) | **GET** /txs/{hash}/delegations | Transaction delegation certificates
*CardanoTransactionsApi* | [**txsHashGet**](docs/Api/CardanoTransactionsApi.md#txshashget) | **GET** /txs/{hash} | Specific transaction
*CardanoTransactionsApi* | [**txsHashMetadataCborGet**](docs/Api/CardanoTransactionsApi.md#txshashmetadatacborget) | **GET** /txs/{hash}/metadata/cbor | Transaction metadata in CBOR
*CardanoTransactionsApi* | [**txsHashMetadataGet**](docs/Api/CardanoTransactionsApi.md#txshashmetadataget) | **GET** /txs/{hash}/metadata | Transaction metadata
*CardanoTransactionsApi* | [**txsHashMirsGet**](docs/Api/CardanoTransactionsApi.md#txshashmirsget) | **GET** /txs/{hash}/mirs | Transaction MIRs
*CardanoTransactionsApi* | [**txsHashPoolRetiresGet**](docs/Api/CardanoTransactionsApi.md#txshashpoolretiresget) | **GET** /txs/{hash}/pool_retires | Transaction stake pool retirement certificates
*CardanoTransactionsApi* | [**txsHashPoolUpdatesGet**](docs/Api/CardanoTransactionsApi.md#txshashpoolupdatesget) | **GET** /txs/{hash}/pool_updates | Transaction stake pool registration and update certificates
*CardanoTransactionsApi* | [**txsHashRedeemersGet**](docs/Api/CardanoTransactionsApi.md#txshashredeemersget) | **GET** /txs/{hash}/redeemers | Transaction redeemers
*CardanoTransactionsApi* | [**txsHashStakesGet**](docs/Api/CardanoTransactionsApi.md#txshashstakesget) | **GET** /txs/{hash}/stakes | Transaction stake addresses certificates
*CardanoTransactionsApi* | [**txsHashUtxosGet**](docs/Api/CardanoTransactionsApi.md#txshashutxosget) | **GET** /txs/{hash}/utxos | Transaction UTXOs
*CardanoTransactionsApi* | [**txsHashWithdrawalsGet**](docs/Api/CardanoTransactionsApi.md#txshashwithdrawalsget) | **GET** /txs/{hash}/withdrawals | Transaction withdrawal
*CardanoUtilitiesApi* | [**utilsAddressesXpubXpubRoleIndexGet**](docs/Api/CardanoUtilitiesApi.md#utilsaddressesxpubxpubroleindexget) | **GET** /utils/addresses/xpub/{xpub}/{role}/{index} | Derive an address
*HealthApi* | [**healthClockGet**](docs/Api/HealthApi.md#healthclockget) | **GET** /health/clock | Current backend time
*HealthApi* | [**healthGet**](docs/Api/HealthApi.md#healthget) | **GET** /health | Backend health status
*HealthApi* | [**rootGet**](docs/Api/HealthApi.md#rootget) | **GET** / | Root endpoint
*IPFSAddApi* | [**ipfsAddPost**](docs/Api/IPFSAddApi.md#ipfsaddpost) | **POST** /ipfs/add | Add a file to IPFS
*IPFSGatewayApi* | [**ipfsGatewayIPFSPathGet**](docs/Api/IPFSGatewayApi.md#ipfsgatewayipfspathget) | **GET** /ipfs/gateway/{IPFS_path} | Relay to an IPFS gateway
*IPFSPinsApi* | [**ipfsPinAddIPFSPathPost**](docs/Api/IPFSPinsApi.md#ipfspinaddipfspathpost) | **POST** /ipfs/pin/add/{IPFS_path} | Pin an object
*IPFSPinsApi* | [**ipfsPinListGet**](docs/Api/IPFSPinsApi.md#ipfspinlistget) | **GET** /ipfs/pin/list/ | List pinned objects
*IPFSPinsApi* | [**ipfsPinListIPFSPathGet**](docs/Api/IPFSPinsApi.md#ipfspinlistipfspathget) | **GET** /ipfs/pin/list/{IPFS_path} | Get details about pinned object
*IPFSPinsApi* | [**ipfsPinRemoveIPFSPathPost**](docs/Api/IPFSPinsApi.md#ipfspinremoveipfspathpost) | **POST** /ipfs/pin/remove/{IPFS_path} | 
*MetricsApi* | [**metricsEndpointsGet**](docs/Api/MetricsApi.md#metricsendpointsget) | **GET** /metrics/endpoints | Blockfrost endpoint usage metrics
*MetricsApi* | [**metricsGet**](docs/Api/MetricsApi.md#metricsget) | **GET** /metrics/ | Blockfrost usage metrics
*NutLinkApi* | [**nutlinkAddressGet**](docs/Api/NutLinkApi.md#nutlinkaddressget) | **GET** /nutlink/{address} | 
*NutLinkApi* | [**nutlinkAddressTickersGet**](docs/Api/NutLinkApi.md#nutlinkaddresstickersget) | **GET** /nutlink/{address}/tickers | 
*NutLinkApi* | [**nutlinkAddressTickersTickerGet**](docs/Api/NutLinkApi.md#nutlinkaddresstickerstickerget) | **GET** /nutlink/{address}/tickers/{ticker} | 
*NutLinkApi* | [**nutlinkTickersTickerGet**](docs/Api/NutLinkApi.md#nutlinktickerstickerget) | **GET** /nutlink/tickers/{ticker} | 

## Models

- [AccountAddressesTotal](docs/Model/AccountAddressesTotal.md)
- [AccountAddressesTotalReceivedSum](docs/Model/AccountAddressesTotalReceivedSum.md)
- [AccountContent](docs/Model/AccountContent.md)
- [AddressContent](docs/Model/AddressContent.md)
- [AddressContentExtended](docs/Model/AddressContentExtended.md)
- [AddressContentExtendedAmount](docs/Model/AddressContentExtendedAmount.md)
- [AddressContentTotal](docs/Model/AddressContentTotal.md)
- [Asset](docs/Model/Asset.md)
- [AssetMetadata](docs/Model/AssetMetadata.md)
- [BlockContent](docs/Model/BlockContent.md)
- [EpochContent](docs/Model/EpochContent.md)
- [EpochParamContent](docs/Model/EpochParamContent.md)
- [GenesisContent](docs/Model/GenesisContent.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [InlineResponse2001](docs/Model/InlineResponse2001.md)
- [InlineResponse2002](docs/Model/InlineResponse2002.md)
- [InlineResponse2003](docs/Model/InlineResponse2003.md)
- [InlineResponse2004](docs/Model/InlineResponse2004.md)
- [InlineResponse2005](docs/Model/InlineResponse2005.md)
- [InlineResponse2006](docs/Model/InlineResponse2006.md)
- [InlineResponse2007](docs/Model/InlineResponse2007.md)
- [InlineResponse400](docs/Model/InlineResponse400.md)
- [InlineResponse403](docs/Model/InlineResponse403.md)
- [InlineResponse404](docs/Model/InlineResponse404.md)
- [InlineResponse418](docs/Model/InlineResponse418.md)
- [InlineResponse425](docs/Model/InlineResponse425.md)
- [InlineResponse429](docs/Model/InlineResponse429.md)
- [InlineResponse500](docs/Model/InlineResponse500.md)
- [Network](docs/Model/Network.md)
- [NetworkStake](docs/Model/NetworkStake.md)
- [NetworkSupply](docs/Model/NetworkSupply.md)
- [NutlinkAddress](docs/Model/NutlinkAddress.md)
- [Pool](docs/Model/Pool.md)
- [PoolMetadata](docs/Model/PoolMetadata.md)
- [Script](docs/Model/Script.md)
- [ScriptCbor](docs/Model/ScriptCbor.md)
- [ScriptDatum](docs/Model/ScriptDatum.md)
- [ScriptJson](docs/Model/ScriptJson.md)
- [TxContent](docs/Model/TxContent.md)
- [TxContentOutputAmount](docs/Model/TxContentOutputAmount.md)
- [TxContentUtxo](docs/Model/TxContentUtxo.md)
- [TxContentUtxoInputs](docs/Model/TxContentUtxoInputs.md)
- [TxContentUtxoOutputs](docs/Model/TxContentUtxoOutputs.md)
- [UtilsAddressesXpub](docs/Model/UtilsAddressesXpub.md)

## Authorization

### ApiKeyAuth

- **Type**: API key
- **API key parameter name**: project_id
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

contact@blockfrost.io

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `0.1.34`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
