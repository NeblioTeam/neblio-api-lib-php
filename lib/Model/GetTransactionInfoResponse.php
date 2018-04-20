<?php
/**
 * GetTransactionInfoResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Neblio REST API Suite
 *
 * APIs for Interacting with NTP1 Tokens & The Neblio Blockchain
 *
 * OpenAPI spec version: 1.1.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * GetTransactionInfoResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetTransactionInfoResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'getTransactionInfoResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'hex' => 'string',
        'txid' => 'string',
        'version' => 'float',
        'locktime' => 'float',
        'vin' => '\Swagger\Client\Model\GetTransactionInfoResponseVin[]',
        'vout' => '\Swagger\Client\Model\GetTransactionInfoResponseVout[]',
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
    protected static $swaggerFormats = [
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
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
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
        return self::$swaggerModelName;
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

        return true;
    }


    /**
     * Gets hex
     *
     * @return string
     */
    public function getHex()
    {
        return $this->container['hex'];
    }

    /**
     * Sets hex
     *
     * @param string $hex Transaction in raw hex
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
     * @return string
     */
    public function getTxid()
    {
        return $this->container['txid'];
    }

    /**
     * Sets txid
     *
     * @param string $txid TXID of transaction
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
     * @return float
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param float $version Transaction version
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
     * @return float
     */
    public function getLocktime()
    {
        return $this->container['locktime'];
    }

    /**
     * Sets locktime
     *
     * @param float $locktime Transaction locktime
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
     * @return \Swagger\Client\Model\GetTransactionInfoResponseVin[]
     */
    public function getVin()
    {
        return $this->container['vin'];
    }

    /**
     * Sets vin
     *
     * @param \Swagger\Client\Model\GetTransactionInfoResponseVin[] $vin Array of transaction inputs
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
     * @return \Swagger\Client\Model\GetTransactionInfoResponseVout[]
     */
    public function getVout()
    {
        return $this->container['vout'];
    }

    /**
     * Sets vout
     *
     * @param \Swagger\Client\Model\GetTransactionInfoResponseVout[] $vout Array of transaction outputs
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
     * @return float
     */
    public function getBlocktime()
    {
        return $this->container['blocktime'];
    }

    /**
     * Sets blocktime
     *
     * @param float $blocktime Block time of this transaction
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
     * @return float
     */
    public function getBlockheight()
    {
        return $this->container['blockheight'];
    }

    /**
     * Sets blockheight
     *
     * @param float $blockheight Block height of this transaction
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
     * @return float
     */
    public function getTotalsent()
    {
        return $this->container['totalsent'];
    }

    /**
     * Sets totalsent
     *
     * @param float $totalsent Total NEBL sent in this transaction in satoshis
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
     * @return float
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param float $fee Total NEBL used as fee for this transcation in satoshis
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
     * @return string
     */
    public function getBlockhash()
    {
        return $this->container['blockhash'];
    }

    /**
     * Sets blockhash
     *
     * @param string $blockhash Hash of the block this transaction is in
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
     * @return float
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param float $time Transaction time
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
     * @return float
     */
    public function getConfirmations()
    {
        return $this->container['confirmations'];
    }

    /**
     * Sets confirmations
     *
     * @param float $confirmations Number of transaction confirmations
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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

