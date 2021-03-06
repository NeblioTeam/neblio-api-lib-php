<?php
/**
 * SendTokenResponse
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
 * SendTokenResponse Class Doc Comment
 *
 * @category Class
 * @package  NeblioAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SendTokenResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'sendTokenResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tx_hex' => 'string',
        'ntp1_output_indexes' => 'float[]',
        'multisig_outputs' => 'float[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'tx_hex' => null,
        'ntp1_output_indexes' => null,
        'multisig_outputs' => null
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
        'tx_hex' => 'txHex',
        'ntp1_output_indexes' => 'ntp1OutputIndexes',
        'multisig_outputs' => 'multisigOutputs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tx_hex' => 'setTxHex',
        'ntp1_output_indexes' => 'setNtp1OutputIndexes',
        'multisig_outputs' => 'setMultisigOutputs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tx_hex' => 'getTxHex',
        'ntp1_output_indexes' => 'getNtp1OutputIndexes',
        'multisig_outputs' => 'getMultisigOutputs'
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
        $this->container['tx_hex'] = isset($data['tx_hex']) ? $data['tx_hex'] : null;
        $this->container['ntp1_output_indexes'] = isset($data['ntp1_output_indexes']) ? $data['ntp1_output_indexes'] : null;
        $this->container['multisig_outputs'] = isset($data['multisig_outputs']) ? $data['multisig_outputs'] : null;
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
     * Gets tx_hex
     *
     * @return string|null
     */
    public function getTxHex()
    {
        return $this->container['tx_hex'];
    }

    /**
     * Sets tx_hex
     *
     * @param string|null $tx_hex Unsigned, raw transaction hex of the transaction to send the token
     *
     * @return $this
     */
    public function setTxHex($tx_hex)
    {
        $this->container['tx_hex'] = $tx_hex;

        return $this;
    }

    /**
     * Gets ntp1_output_indexes
     *
     * @return float[]|null
     */
    public function getNtp1OutputIndexes()
    {
        return $this->container['ntp1_output_indexes'];
    }

    /**
     * Sets ntp1_output_indexes
     *
     * @param float[]|null $ntp1_output_indexes Array of indexes transfering NTP1 tokens
     *
     * @return $this
     */
    public function setNtp1OutputIndexes($ntp1_output_indexes)
    {
        $this->container['ntp1_output_indexes'] = $ntp1_output_indexes;

        return $this;
    }

    /**
     * Gets multisig_outputs
     *
     * @return float[]|null
     */
    public function getMultisigOutputs()
    {
        return $this->container['multisig_outputs'];
    }

    /**
     * Sets multisig_outputs
     *
     * @param float[]|null $multisig_outputs Array of indexes of multisig outputs
     *
     * @return $this
     */
    public function setMultisigOutputs($multisig_outputs)
    {
        $this->container['multisig_outputs'] = $multisig_outputs;

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


