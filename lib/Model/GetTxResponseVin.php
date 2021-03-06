<?php
/**
 * GetTxResponseVin
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
 * OpenAPI spec version: 1.3.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: unset
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
 * GetTxResponseVin Class Doc Comment
 *
 * @category Class
 * @package  NeblioAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetTxResponseVin implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getTxResponse_vin';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'txid' => 'string',
        'vout' => 'float',
        'script_sig' => '\NeblioAPI\Model\GetTransactionInfoResponseScriptSig',
        'sequence' => 'float',
        'value' => 'float',
        'value_sat' => 'float',
        'n' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'txid' => null,
        'vout' => null,
        'script_sig' => null,
        'sequence' => null,
        'value' => null,
        'value_sat' => null,
        'n' => null
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
        'txid' => 'txid',
        'vout' => 'vout',
        'script_sig' => 'scriptSig',
        'sequence' => 'sequence',
        'value' => 'value',
        'value_sat' => 'valueSat',
        'n' => 'n'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'txid' => 'setTxid',
        'vout' => 'setVout',
        'script_sig' => 'setScriptSig',
        'sequence' => 'setSequence',
        'value' => 'setValue',
        'value_sat' => 'setValueSat',
        'n' => 'setN'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'txid' => 'getTxid',
        'vout' => 'getVout',
        'script_sig' => 'getScriptSig',
        'sequence' => 'getSequence',
        'value' => 'getValue',
        'value_sat' => 'getValueSat',
        'n' => 'getN'
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
        $this->container['txid'] = isset($data['txid']) ? $data['txid'] : null;
        $this->container['vout'] = isset($data['vout']) ? $data['vout'] : null;
        $this->container['script_sig'] = isset($data['script_sig']) ? $data['script_sig'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['value_sat'] = isset($data['value_sat']) ? $data['value_sat'] : null;
        $this->container['n'] = isset($data['n']) ? $data['n'] : null;
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
     * @param string|null $txid TXID of the input
     *
     * @return $this
     */
    public function setTxid($txid)
    {
        $this->container['txid'] = $txid;

        return $this;
    }

    /**
     * Gets vout
     *
     * @return float|null
     */
    public function getVout()
    {
        return $this->container['vout'];
    }

    /**
     * Sets vout
     *
     * @param float|null $vout output index
     *
     * @return $this
     */
    public function setVout($vout)
    {
        $this->container['vout'] = $vout;

        return $this;
    }

    /**
     * Gets script_sig
     *
     * @return \NeblioAPI\Model\GetTransactionInfoResponseScriptSig|null
     */
    public function getScriptSig()
    {
        return $this->container['script_sig'];
    }

    /**
     * Sets script_sig
     *
     * @param \NeblioAPI\Model\GetTransactionInfoResponseScriptSig|null $script_sig script_sig
     *
     * @return $this
     */
    public function setScriptSig($script_sig)
    {
        $this->container['script_sig'] = $script_sig;

        return $this;
    }

    /**
     * Gets sequence
     *
     * @return float|null
     */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     *
     * @param float|null $sequence sequence
     *
     * @return $this
     */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;

        return $this;
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
     * @param float|null $value Value of input in NEBL
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets value_sat
     *
     * @return float|null
     */
    public function getValueSat()
    {
        return $this->container['value_sat'];
    }

    /**
     * Sets value_sat
     *
     * @param float|null $value_sat Value of input in NEBL satoshi
     *
     * @return $this
     */
    public function setValueSat($value_sat)
    {
        $this->container['value_sat'] = $value_sat;

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
     * @param float|null $n input index
     *
     * @return $this
     */
    public function setN($n)
    {
        $this->container['n'] = $n;

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


