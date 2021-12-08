# # Asset

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**asset** | **string** | Hex-encoded asset full name |
**policy_id** | **string** | Policy ID of the asset |
**asset_name** | **string** | Hex-encoded asset name of the asset |
**fingerprint** | **string** | CIP14 based user-facing fingerprint |
**quantity** | **string** | Current asset quantity |
**initial_mint_tx_hash** | **string** | ID of the initial minting transaction |
**mint_or_burn_count** | **int** | Count of mint and burn transactions |
**onchain_metadata** | **array<string,object>** | On-chain metadata stored in the minting transaction under label 721, community discussion around the standard ongoing at https://github.com/cardano-foundation/CIPs/pull/85 |
**metadata** | [**\OpenAPI\Client\Model\AssetMetadata**](AssetMetadata.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
