<?php
/**
 * GetTxResponseVout
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
 * OpenAPI spec version: 1.2.2
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
 * GetTxResponseVout Class Doc Comment
 *
 * @category Class
 * @package  NeblioAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetTxResponseVout implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getTxResponse_vout';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'value' => 'float',
        'n' => 'float',
        'script_pub_key' => '\NeblioAPI\Model\GetTransactionInfoResponsePreviousOutput',
        'used' => 'bool',
        'blockheight' => 'float',
        'used_blockheight' => 'float',
        'used_txid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'value' => null,
        'n' => null,
        'script_pub_key' => null,
        'used' => null,
        'blockheight' => null,
        'used_blockheight' => null,
        'used_txid' => null
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
        'value' => 'value',
        'n' => 'n',
        'script_pub_key' => 'scriptPubKey',
        'used' => 'used',
        'blockheight' => 'blockheight',
        'used_blockheight' => 'usedBlockheight',
        'used_txid' => 'usedTxid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'value' => 'setValue',
        'n' => 'setN',
        'script_pub_key' => 'setScriptPubKey',
        'used' => 'setUsed',
        'blockheight' => 'setBlockheight',
        'used_blockheight' => 'setUsedBlockheight',
        'used_txid' => 'setUsedTxid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'value' => 'getValue',
        'n' => 'getN',
        'script_pub_key' => 'getScriptPubKey',
        'used' => 'getUsed',
        'blockheight' => 'getBlockheight',
        'used_blockheight' => 'getUsedBlockheight',
        'used_txid' => 'getUsedTxid'
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
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['n'] = isset($data['n']) ? $data['n'] : null;
        $this->container['script_pub_key'] = isset($data['script_pub_key']) ? $data['script_pub_key'] : null;
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
        $this->container['blockheight'] = isset($data['blockheight']) ? $data['blockheight'] : null;
        $this->container['used_blockheight'] = isset($data['used_blockheight']) ? $data['used_blockheight'] : null;
        $this->container['used_txid'] = isset($data['used_txid']) ? $data['used_txid'] : null;
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
     * Gets value
     *
     * @return float|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param float|null $value Value of the output in NEBL
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets n
     *
     * @return float|null
     */
    public function getN()
    {
        return $this->container['n'];
    }

    /**
     * Sets n
     *
     * @param float|null $n Output index
     *
     * @return $this
     */
    public function setN($n)
    {
        $this->container['n'] = $n;

        return $this;
    }

    /**
     * Gets script_pub_key
     *
     * @return \NeblioAPI\Model\GetTransactionInfoResponsePreviousOutput|null
     */
    public function getScriptPubKey()
    {
        return $this->container['script_pub_key'];
    }

    /**
     * Sets script_pub_key
     *
     * @param \NeblioAPI\Model\GetTransactionInfoResponsePreviousOutput|null $script_pub_key script_pub_key
     *
     * @return $this
     */
    public function setScriptPubKey($script_pub_key)
    {
        $this->container['script_pub_key'] = $script_pub_key;

        return $this;
    }

    /**
     * Gets used
     *
     * @return bool|null
     */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
     * Sets used
     *
     * @param bool|null $used Whether this output has now been used
     *
     * @return $this
     */
    public function setUsed($used)
    {
        $this->container['used'] = $used;

        return $this;
    }

    /**
     * Gets blockheight
     *
     * @return float|null
     */
    public function getBlockheight()
    {
        return $this->container['blockheight'];
    }

    /**
     * Sets blockheight
     *
     * @param float|null $blockheight Blockheight of this transaction
     *
     * @return $this
     */
    public function setBlockheight($blockheight)
    {
        $this->container['blockheight'] = $blockheight;

        return $this;
    }

    /**
     * Gets used_blockheight
     *
     * @return float|null
     */
    public function getUsedBlockheight()
    {
        return $this->container['used_blockheight'];
    }

    /**
     * Sets used_blockheight
     *
     * @param float|null $used_blockheight Blockheight this output was used in
     *
     * @return $this
     */
    public function setUsedBlockheight($used_blockheight)
    {
        $this->container['used_blockheight'] = $used_blockheight;

        return $this;
    }

    /**
     * Gets used_txid
     *
     * @return string|null
     */
    public function getUsedTxid()
    {
        return $this->container['used_txid'];
    }

    /**
     * Sets used_txid
     *
     * @param string|null $used_txid TXID this output was used in
     *
     * @return $this
     */
    public function setUsedTxid($used_txid)
    {
        $this->container['used_txid'] = $used_txid;

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


