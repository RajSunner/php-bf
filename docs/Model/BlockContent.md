# # BlockContent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**time** | **int** | Block creation time in UNIX time |
**height** | **int** | Block number |
**hash** | **string** | Hash of the block |
**slot** | **int** | Slot number |
**epoch** | **int** | Epoch number |
**epoch_slot** | **int** | Slot within the epoch |
**slot_leader** | **string** | Bech32 ID of the slot leader or specific block description in case there is no slot leader |
**size** | **int** | Block size in Bytes |
**tx_count** | **int** | Number of transactions in the block |
**output** | **string** | Total output within the block in Lovelaces |
**fees** | **string** | Total fees within the block in Lovelaces |
**block_vrf** | **string** | VRF key of the block |
**previous_block** | **string** | Hash of the previous block |
**next_block** | **string** | Hash of the next block |
**confirmations** | **int** | Number of block confirmations |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
