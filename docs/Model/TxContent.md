# # TxContent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hash** | **string** | Transaction hash |
**block** | **string** | Block hash |
**block_height** | **int** | Block number |
**block_time** | **int** | Block creation time in UNIX time |
**slot** | **int** | Slot number |
**index** | **int** | Transaction index within the block |
**output_amount** | [**\OpenAPI\Client\Model\TxContentOutputAmount[]**](TxContentOutputAmount.md) |  |
**fees** | **string** | Fees of the transaction in Lovelaces |
**deposit** | **string** | Deposit within the transaction in Lovelaces |
**size** | **int** | Size of the transaction in Bytes |
**invalid_before** | **string** | Left (included) endpoint of the timelock validity intervals |
**invalid_hereafter** | **string** | Right (excluded) endpoint of the timelock validity intervals |
**utxo_count** | **int** | Count of UTXOs within the transaction |
**withdrawal_count** | **int** | Count of the withdrawals within the transaction |
**mir_cert_count** | **int** | Count of the MIR certificates within the transaction |
**delegation_count** | **int** | Count of the delegations within the transaction |
**stake_cert_count** | **int** | Count of the stake keys (de)registration within the transaction |
**pool_update_count** | **int** | Count of the stake pool registration and update certificates within the transaction |
**pool_retire_count** | **int** | Count of the stake pool retirement certificates within the transaction |
**asset_mint_or_burn_count** | **int** | Count of asset mints and burns within the transaction |
**redeemer_count** | **int** | Count of redeemers within the transaction |
**valid_contract** | **bool** | True if contract script passed validation |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
