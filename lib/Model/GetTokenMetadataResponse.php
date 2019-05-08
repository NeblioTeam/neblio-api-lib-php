<?php
/**
 * GetTokenMetadataResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  NeblioAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Neblio REST API Suite
 *
 * APIs for Interacting with NTP1 Tokens & The Neblio Blockchain
 *
 * OpenAPI spec version: 1.2.4
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace NeblioAPI\Model;

use \ArrayAccess;
use \NeblioAPI\ObjectSerializer;

/**
 * GetTokenMetadataResponse Class Doc Comment
 *
 * @category Class
 * @package  NeblioAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetTokenMetadataResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getTokenMetadataResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'token_id' => 'string',
        'some_utxo' => 'string',
        'divisibility' => 'float',
        'lock_status' => 'bool',
        'aggregation_policy' => 'string',
        'total_supply' => 'float',
        'num_of_holders' => 'float',
        'num_of_transfers' => 'float',
        'num_of_issuance' => 'float',
        'num_of_burns' => 'float',
        'first_block' => 'float',
        'issuance_txid' => 'string',
        'issue_address' => 'string',
        'metadata_of_issuence' => '\NeblioAPI\Model\GetTokenMetadataResponseMetadataOfIssuence',
        'metadata_of_utxo' => '\NeblioAPI\Model\GetTokenMetadataResponseMetadataOfUtxo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'token_id' => null,
        'some_utxo' => null,
        'divisibility' => null,
        'lock_status' => null,
        'aggregation_policy' => null,
        'total_supply' => null,
        'num_of_holders' => null,
        'num_of_transfers' => null,
        'num_of_issuance' => null,
        'num_of_burns' => null,
        'first_block' => null,
        'issuance_txid' => null,
        'issue_address' => null,
        'metadata_of_issuence' => null,
        'metadata_of_utxo' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'token_id' => 'tokenId',
        'some_utxo' => 'someUtxo',
        'divisibility' => 'divisibility',
        'lock_status' => 'lockStatus',
        'aggregation_policy' => 'aggregationPolicy',
        'total_supply' => 'totalSupply',
        'num_of_holders' => 'numOfHolders',
        'num_of_transfers' => 'numOfTransfers',
        'num_of_issuance' => 'numOfIssuance',
        'num_of_burns' => 'numOfBurns',
        'first_block' => 'firstBlock',
        'issuance_txid' => 'issuanceTxid',
        'issue_address' => 'issueAddress',
        'metadata_of_issuence' => 'metadataOfIssuence',
        'metadata_of_utxo' => 'metadataOfUtxo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'token_id' => 'setTokenId',
        'some_utxo' => 'setSomeUtxo',
        'divisibility' => 'setDivisibility',
        'lock_status' => 'setLockStatus',
        'aggregation_policy' => 'setAggregationPolicy',
        'total_supply' => 'setTotalSupply',
        'num_of_holders' => 'setNumOfHolders',
        'num_of_transfers' => 'setNumOfTransfers',
        'num_of_issuance' => 'setNumOfIssuance',
        'num_of_burns' => 'setNumOfBurns',
        'first_block' => 'setFirstBlock',
        'issuance_txid' => 'setIssuanceTxid',
        'issue_address' => 'setIssueAddress',
        'metadata_of_issuence' => 'setMetadataOfIssuence',
        'metadata_of_utxo' => 'setMetadataOfUtxo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'token_id' => 'getTokenId',
        'some_utxo' => 'getSomeUtxo',
        'divisibility' => 'getDivisibility',
        'lock_status' => 'getLockStatus',
        'aggregation_policy' => 'getAggregationPolicy',
        'total_supply' => 'getTotalSupply',
        'num_of_holders' => 'getNumOfHolders',
        'num_of_transfers' => 'getNumOfTransfers',
        'num_of_issuance' => 'getNumOfIssuance',
        'num_of_burns' => 'getNumOfBurns',
        'first_block' => 'getFirstBlock',
        'issuance_txid' => 'getIssuanceTxid',
        'issue_address' => 'getIssueAddress',
        'metadata_of_issuence' => 'getMetadataOfIssuence',
        'metadata_of_utxo' => 'getMetadataOfUtxo'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['token_id'] = isset($data['token_id']) ? $data['token_id'] : null;
        $this->container['some_utxo'] = isset($data['some_utxo']) ? $data['some_utxo'] : null;
        $this->container['divisibility'] = isset($data['divisibility']) ? $data['divisibility'] : null;
        $this->container['lock_status'] = isset($data['lock_status']) ? $data['lock_status'] : null;
        $this->container['aggregation_policy'] = isset($data['aggregation_policy']) ? $data['aggregation_policy'] : null;
        $this->container['total_supply'] = isset($data['total_supply']) ? $data['total_supply'] : null;
        $this->container['num_of_holders'] = isset($data['num_of_holders']) ? $data['num_of_holders'] : null;
        $this->container['num_of_transfers'] = isset($data['num_of_transfers']) ? $data['num_of_transfers'] : null;
        $this->container['num_of_issuance'] = isset($data['num_of_issuance']) ? $data['num_of_issuance'] : null;
        $this->container['num_of_burns'] = isset($data['num_of_burns']) ? $data['num_of_burns'] : null;
        $this->container['first_block'] = isset($data['first_block']) ? $data['first_block'] : null;
        $this->container['issuance_txid'] = isset($data['issuance_txid']) ? $data['issuance_txid'] : null;
        $this->container['issue_address'] = isset($data['issue_address']) ? $data['issue_address'] : null;
        $this->container['metadata_of_issuence'] = isset($data['metadata_of_issuence']) ? $data['metadata_of_issuence'] : null;
        $this->container['metadata_of_utxo'] = isset($data['metadata_of_utxo']) ? $data['metadata_of_utxo'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets token_id
     *
     * @return string|null
     */
    public function getTokenId()
    {
        return $this->container['token_id'];
    }

    /**
     * Sets token_id
     *
     * @param string|null $token_id ID of the token
     *
     * @return $this
     */
    public function setTokenId($token_id)
    {
        $this->container['token_id'] = $token_id;

        return $this;
    }

    /**
     * Gets some_utxo
     *
     * @return string|null
     */
    public function getSomeUtxo()
    {
        return $this->container['some_utxo'];
    }

    /**
     * Sets some_utxo
     *
     * @param string|null $some_utxo Example UTXO containing this token.
     *
     * @return $this
     */
    public function setSomeUtxo($some_utxo)
    {
        $this->container['some_utxo'] = $some_utxo;

        return $this;
    }

    /**
     * Gets divisibility
     *
     * @return float|null
     */
    public function getDivisibility()
    {
        return $this->container['divisibility'];
    }

    /**
     * Sets divisibility
     *
     * @param float|null $divisibility Decimal places the token is divisible to
     *
     * @return $this
     */
    public function setDivisibility($divisibility)
    {
        $this->container['divisibility'] = $divisibility;

        return $this;
    }

    /**
     * Gets lock_status
     *
     * @return bool|null
     */
    public function getLockStatus()
    {
        return $this->container['lock_status'];
    }

    /**
     * Sets lock_status
     *
     * @param bool|null $lock_status Whether issuance of more tokens is locked
     *
     * @return $this
     */
    public function setLockStatus($lock_status)
    {
        $this->container['lock_status'] = $lock_status;

        return $this;
    }

    /**
     * Gets aggregation_policy
     *
     * @return string|null
     */
    public function getAggregationPolicy()
    {
        return $this->container['aggregation_policy'];
    }

    /**
     * Sets aggregation_policy
     *
     * @param string|null $aggregation_policy Whether the tokens are aggregatable
     *
     * @return $this
     */
    public function setAggregationPolicy($aggregation_policy)
    {
        $this->container['aggregation_policy'] = $aggregation_policy;

        return $this;
    }

    /**
     * Gets total_supply
     *
     * @return float|null
     */
    public function getTotalSupply()
    {
        return $this->container['total_supply'];
    }

    /**
     * Sets total_supply
     *
     * @param float|null $total_supply Total number of tokens in supply
     *
     * @return $this
     */
    public function setTotalSupply($total_supply)
    {
        $this->container['total_supply'] = $total_supply;

        return $this;
    }

    /**
     * Gets num_of_holders
     *
     * @return float|null
     */
    public function getNumOfHolders()
    {
        return $this->container['num_of_holders'];
    }

    /**
     * Sets num_of_holders
     *
     * @param float|null $num_of_holders Total number of addresses this token is held at
     *
     * @return $this
     */
    public function setNumOfHolders($num_of_holders)
    {
        $this->container['num_of_holders'] = $num_of_holders;

        return $this;
    }

    /**
     * Gets num_of_transfers
     *
     * @return float|null
     */
    public function getNumOfTransfers()
    {
        return $this->container['num_of_transfers'];
    }

    /**
     * Sets num_of_transfers
     *
     * @param float|null $num_of_transfers Total number of transactions of this token
     *
     * @return $this
     */
    public function setNumOfTransfers($num_of_transfers)
    {
        $this->container['num_of_transfers'] = $num_of_transfers;

        return $this;
    }

    /**
     * Gets num_of_issuance
     *
     * @return float|null
     */
    public function getNumOfIssuance()
    {
        return $this->container['num_of_issuance'];
    }

    /**
     * Sets num_of_issuance
     *
     * @param float|null $num_of_issuance Total number of times this token has been issued
     *
     * @return $this
     */
    public function setNumOfIssuance($num_of_issuance)
    {
        $this->container['num_of_issuance'] = $num_of_issuance;

        return $this;
    }

    /**
     * Gets num_of_burns
     *
     * @return float|null
     */
    public function getNumOfBurns()
    {
        return $this->container['num_of_burns'];
    }

    /**
     * Sets num_of_burns
     *
     * @param float|null $num_of_burns Number of times tokens have been burned
     *
     * @return $this
     */
    public function setNumOfBurns($num_of_burns)
    {
        $this->container['num_of_burns'] = $num_of_burns;

        return $this;
    }

    /**
     * Gets first_block
     *
     * @return float|null
     */
    public function getFirstBlock()
    {
        return $this->container['first_block'];
    }

    /**
     * Sets first_block
     *
     * @param float|null $first_block Block number token was issued in
     *
     * @return $this
     */
    public function setFirstBlock($first_block)
    {
        $this->container['first_block'] = $first_block;

        return $this;
    }

    /**
     * Gets issuance_txid
     *
     * @return string|null
     */
    public function getIssuanceTxid()
    {
        return $this->container['issuance_txid'];
    }

    /**
     * Sets issuance_txid
     *
     * @param string|null $issuance_txid TXID the token was issued with
     *
     * @return $this
     */
    public function setIssuanceTxid($issuance_txid)
    {
        $this->container['issuance_txid'] = $issuance_txid;

        return $this;
    }

    /**
     * Gets issue_address
     *
     * @return string|null
     */
    public function getIssueAddress()
    {
        return $this->container['issue_address'];
    }

    /**
     * Sets issue_address
     *
     * @param string|null $issue_address Address that issued the tokens
     *
     * @return $this
     */
    public function setIssueAddress($issue_address)
    {
        $this->container['issue_address'] = $issue_address;

        return $this;
    }

    /**
     * Gets metadata_of_issuence
     *
     * @return \NeblioAPI\Model\GetTokenMetadataResponseMetadataOfIssuence|null
     */
    public function getMetadataOfIssuence()
    {
        return $this->container['metadata_of_issuence'];
    }

    /**
     * Sets metadata_of_issuence
     *
     * @param \NeblioAPI\Model\GetTokenMetadataResponseMetadataOfIssuence|null $metadata_of_issuence metadata_of_issuence
     *
     * @return $this
     */
    public function setMetadataOfIssuence($metadata_of_issuence)
    {
        $this->container['metadata_of_issuence'] = $metadata_of_issuence;

        return $this;
    }

    /**
     * Gets metadata_of_utxo
     *
     * @return \NeblioAPI\Model\GetTokenMetadataResponseMetadataOfUtxo|null
     */
    public function getMetadataOfUtxo()
    {
        return $this->container['metadata_of_utxo'];
    }

    /**
     * Sets metadata_of_utxo
     *
     * @param \NeblioAPI\Model\GetTokenMetadataResponseMetadataOfUtxo|null $metadata_of_utxo metadata_of_utxo
     *
     * @return $this
     */
    public function setMetadataOfUtxo($metadata_of_utxo)
    {
        $this->container['metadata_of_utxo'] = $metadata_of_utxo;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


