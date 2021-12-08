# # InlineResponse2006

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**time_created** | **int** | Time of the creation of the IPFS object on our backends |
**time_pinned** | **int** | Time of the pin of the IPFS object on our backends |
**ipfs_hash** | **string** | IPFS hash of the pinned object |
**size** | **string** | Size of the object in Bytes |
**state** | **string** | State of the pinned object. We define 5 states: &#x60;queued&#x60;, &#x60;pinned&#x60;, &#x60;unpinned&#x60;, &#x60;failed&#x60;, &#x60;gc&#x60;. When the object is pending retrieval (i.e. after &#x60;/ipfs/pin/add/{IPFS_path}&#x60;), the state is &#x60;queued&#x60;. If the object is already successfully retrieved, state is changed to &#x60;pinned&#x60; or &#x60;failed&#x60; otherwise. When object is unpinned (i.e. after &#x60;/ipfs/pin/remove/{IPFS_path}&#x60;) it is marked for garbage collection. State &#x60;gc&#x60; means that a previously &#x60;unpinned&#x60; item has been garbage collected due to account being over storage quota. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
