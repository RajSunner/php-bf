# # EpochParamContent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**epoch** | **int** | Epoch number |
**min_fee_a** | **int** | The linear factor for the minimum fee calculation for given epoch |
**min_fee_b** | **int** | The constant factor for the minimum fee calculation |
**max_block_size** | **int** | Maximum block body size in Bytes |
**max_tx_size** | **int** | Maximum transaction size |
**max_block_header_size** | **int** | Maximum block header size |
**key_deposit** | **string** | The amount of a key registration deposit in Lovelaces |
**pool_deposit** | **string** | The amount of a pool registration deposit in Lovelaces |
**e_max** | **int** | Epoch bound on pool retirement |
**n_opt** | **int** | Desired number of pools |
**a0** | **float** | Pool pledge influence |
**rho** | **float** | Monetary expansion |
**tau** | **float** | Treasury expansion |
**decentralisation_param** | **float** | Percentage of blocks produced by federated nodes |
**extra_entropy** | **object** | Seed for extra entropy |
**protocol_major_ver** | **int** | Accepted protocol major version |
**protocol_minor_ver** | **int** | Accepted protocol minor version |
**min_utxo** | **string** | Minimum UTXO value |
**min_pool_cost** | **string** | Minimum stake cost forced on the pool |
**nonce** | **string** | Epoch number only used once |
**price_mem** | **float** | The per word cost of script memory usage |
**price_step** | **float** | The cost of script execution step usage |
**max_tx_ex_mem** | **string** | The maximum number of execution memory allowed to be used in a single transaction |
**max_tx_ex_steps** | **string** | The maximum number of execution steps allowed to be used in a single transaction |
**max_block_ex_mem** | **string** | The maximum number of execution memory allowed to be used in a single block |
**max_block_ex_steps** | **string** | The maximum number of execution steps allowed to be used in a single block |
**max_val_size** | **string** | The maximum Val size |
**collateral_percent** | **int** | The percentage of the transactions fee which must be provided as collateral when including non-native scripts |
**max_collateral_inputs** | **int** | The maximum number of collateral inputs allowed in a transaction |
**coins_per_utxo_word** | **string** | The cost per UTxO word |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
