<?php
/**
 * GetTransactionInfoResponse
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
 * GetTransactionInfoResponse Class Doc Comment
 *
 * @category Class
 * @package  NeblioAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetTransactionInfoResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getTransactionInfoResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'hex' => 'string',
        'txid' => 'string',
        'version' => 'float',
        'locktime' => 'float',
        'vin' => '\NeblioAPI\Model\GetTransactionInfoResponseVin[]',
        'vout' => '\NeblioAPI\Model\GetTransactionInfoResponseVout[]',
        'blocktime' => 'float',
        'blockheight' => 'float',
        'totalsent' => 'float',
        'fee' => 'float',
        'blockhash' => 'string',
        'time' => 'float',
        'confirmations' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'hex' => null,
        'txid' => null,
        'version' => null,
        'locktime' => null,
        'vin' => null,
        'vout' => null,
        'blocktime' => null,
        'blockheight' => null,
        'totalsent' => null,
        'fee' => null,
        'blockhash' => null,
        'time' => null,
        'confirmations' => null
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
        'hex' => 'hex',
        'txid' => 'txid',
        'version' => 'version',
        'locktime' => 'locktime',
        'vin' => 'vin',
        'vout' => 'vout',
        'blocktime' => 'blocktime',
        'blockheight' => 'blockheight',
        'totalsent' => 'totalsent',
        'fee' => 'fee',
        'blockhash' => 'blockhash',
        'time' => 'time',
        'confirmations' => 'confirmations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hex' => 'setHex',
        'txid' => 'setTxid',
        'version' => 'setVersion',
        'locktime' => 'setLocktime',
        'vin' => 'setVin',
        'vout' => 'setVout',
        'blocktime' => 'setBlocktime',
        'blockheight' => 'setBlockheight',
        'totalsent' => 'setTotalsent',
        'fee' => 'setFee',
        'blockhash' => 'setBlockhash',
        'time' => 'setTime',
        'confirmations' => 'setConfirmations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hex' => 'getHex',
        'txid' => 'getTxid',
        'version' => 'getVersion',
        'locktime' => 'getLocktime',
        'vin' => 'getVin',
        'vout' => 'getVout',
        'blocktime' => 'getBlocktime',
        'blockheight' => 'getBlockheight',
        'totalsent' => 'getTotalsent',
        'fee' => 'getFee',
        'blockhash' => 'getBlockhash',
        'time' => 'getTime',
        'confirmations' => 'getConfirmations'
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
        $this->container['hex'] = isset($data['hex']) ? $data['hex'] : null;
        $this->container['txid'] = isset($data['txid']) ? $data['txid'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['locktime'] = isset($data['locktime']) ? $data['locktime'] : null;
        $this->container['vin'] = isset($data['vin']) ? $data['vin'] : null;
        $this->container['vout'] = isset($data['vout']) ? $data['vout'] : null;
        $this->container['blocktime'] = isset($data['blocktime']) ? $data['blocktime'] : null;
        $this->container['blockheight'] = isset($data['blockheight']) ? $data['blockheight'] : null;
        $this->container['totalsent'] = isset($data['totalsent']) ? $data['totalsent'] : null;
        $this->container['fee'] = isset($data['fee']) ? $data['fee'] : null;
        $this->container['blockhash'] = isset($data['blockhash']) ? $data['blockhash'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['confirmations'] = isset($data['confirmations']) ? $data['confirmations'] : null;
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
     * Gets hex
     *
     * @return string|null
     */
    public function getHex()
    {
        return $this->container['hex'];
    }

    /**
     * Sets hex
     *
     * @param string|null $hex Transaction in raw hex
     *
     * @return $this
     */
    public function setHex($hex)
    {
        $this->container['hex'] = $hex;

        return $this;
    }

    /**
     * Gets txid
     *
     * @return string|null
     */
    public function getTxid()
    {
        return $this->container['txid'];
    }

    /**
     * Sets txid
     *
     * @param string|null $txid TXID of transaction
     *
     * @return $this
     */
    public function setTxid($txid)
    {
        $this->container['txid'] = $txid;

        return $this;
    }

    /**
     * Gets version
     *
     * @return float|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param float|null $version Transaction version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets locktime
     *
     * @return float|null
     */
    public function getLocktime()
    {
        return $this->container['locktime'];
    }

    /**
     * Sets locktime
     *
     * @param float|null $locktime Transaction locktime
     *
     * @return $this
     */
    public function setLocktime($locktime)
    {
        $this->container['locktime'] = $locktime;

        return $this;
    }

    /**
     * Gets vin
     *
     * @return \NeblioAPI\Model\GetTransactionInfoResponseVin[]|null
     */
    public function getVin()
    {
        return $this->container['vin'];
    }

    /**
     * Sets vin
     *
     * @param \NeblioAPI\Model\GetTransactionInfoResponseVin[]|null $vin Array of transaction inputs
     *
     * @return $this
     */
    public function setVin($vin)
    {
        $this->container['vin'] = $vin;

        return $this;
    }

    /**
     * Gets vout
     *
     * @return \NeblioAPI\Model\GetTransactionInfoResponseVout[]|null
     */
    public function getVout()
    {
        return $this->container['vout'];
    }

    /**
     * Sets vout
     *
     * @param \NeblioAPI\Model\GetTransactionInfoResponseVout[]|null $vout Array of transaction outputs
     *
     * @return $this
     */
    public function setVout($vout)
    {
        $this->container['vout'] = $vout;

        return $this;
    }

    /**
     * Gets blocktime
     *
     * @return float|null
     */
    public function getBlocktime()
    {
        return $this->container['blocktime'];
    }

    /**
     * Sets blocktime
     *
     * @param float|null $blocktime Block time of this transaction
     *
     * @return $this
     */
    public function setBlocktime($blocktime)
    {
        $this->container['blocktime'] = $blocktime;

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
     * @param float|null $blockheight Block height of this transaction
     *
     * @return $this
     */
    public function setBlockheight($blockheight)
    {
        $this->container['blockheight'] = $blockheight;

        return $this;
    }

    /**
     * Gets totalsent
     *
     * @return float|null
     */
    public function getTotalsent()
    {
        return $this->container['totalsent'];
    }

    /**
     * Sets totalsent
     *
     * @param float|null $totalsent Total NEBL sent in this transaction in satoshis
     *
     * @return $this
     */
    public function setTotalsent($totalsent)
    {
        $this->container['totalsent'] = $totalsent;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return float|null
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param float|null $fee Total NEBL used as fee for this transcation in satoshis
     *
     * @return $this
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets blockhash
     *
     * @return string|null
     */
    public function getBlockhash()
    {
        return $this->container['blockhash'];
    }

    /**
     * Sets blockhash
     *
     * @param string|null $blockhash Hash of the block this transaction is in
     *
     * @return $this
     */
    public function setBlockhash($blockhash)
    {
        $this->container['blockhash'] = $blockhash;

        return $this;
    }

    /**
     * Gets time
     *
     * @return float|null
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param float|null $time Transaction time
     *
     * @return $this
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets confirmations
     *
     * @return float|null
     */
    public function getConfirmations()
    {
        return $this->container['confirmations'];
    }

    /**
     * Sets confirmations
     *
     * @param float|null $confirmations Number of transaction confirmations
     *
     * @return $this
     */
    public function setConfirmations($confirmations)
    {
        $this->container['confirmations'] = $confirmations;

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


