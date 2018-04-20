<?php
/**
 * GetTransactionInfoResponseVin
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
 * GetTransactionInfoResponseVin Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetTransactionInfoResponseVin implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'getTransactionInfoResponse_vin';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'txid' => 'string',
        'vout' => 'float',
        'script_sig' => '\Swagger\Client\Model\GetTransactionInfoResponseScriptSig',
        'sequence' => 'float',
        'previous_output' => '\Swagger\Client\Model\GetTransactionInfoResponsePreviousOutput',
        'tokens' => '\Swagger\Client\Model\GetTransactionInfoResponseTokens[]',
        'value' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'txid' => null,
        'vout' => null,
        'script_sig' => null,
        'sequence' => null,
        'previous_output' => null,
        'tokens' => null,
        'value' => null
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
        'txid' => 'txid',
        'vout' => 'vout',
        'script_sig' => 'scriptSig',
        'sequence' => 'sequence',
        'previous_output' => 'previousOutput',
        'tokens' => 'tokens',
        'value' => 'value'
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
        'previous_output' => 'setPreviousOutput',
        'tokens' => 'setTokens',
        'value' => 'setValue'
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
        'previous_output' => 'getPreviousOutput',
        'tokens' => 'getTokens',
        'value' => 'getValue'
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
        $this->container['txid'] = isset($data['txid']) ? $data['txid'] : null;
        $this->container['vout'] = isset($data['vout']) ? $data['vout'] : null;
        $this->container['script_sig'] = isset($data['script_sig']) ? $data['script_sig'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['previous_output'] = isset($data['previous_output']) ? $data['previous_output'] : null;
        $this->container['tokens'] = isset($data['tokens']) ? $data['tokens'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
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
     * @param string $txid TXID of the input
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
     * @return float
     */
    public function getVout()
    {
        return $this->container['vout'];
    }

    /**
     * Sets vout
     *
     * @param float $vout output index
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
     * @return \Swagger\Client\Model\GetTransactionInfoResponseScriptSig
     */
    public function getScriptSig()
    {
        return $this->container['script_sig'];
    }

    /**
     * Sets script_sig
     *
     * @param \Swagger\Client\Model\GetTransactionInfoResponseScriptSig $script_sig script_sig
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
     * @return float
     */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     *
     * @param float $sequence sequence
     *
     * @return $this
     */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;

        return $this;
    }

    /**
     * Gets previous_output
     *
     * @return \Swagger\Client\Model\GetTransactionInfoResponsePreviousOutput
     */
    public function getPreviousOutput()
    {
        return $this->container['previous_output'];
    }

    /**
     * Sets previous_output
     *
     * @param \Swagger\Client\Model\GetTransactionInfoResponsePreviousOutput $previous_output previous_output
     *
     * @return $this
     */
    public function setPreviousOutput($previous_output)
    {
        $this->container['previous_output'] = $previous_output;

        return $this;
    }

    /**
     * Gets tokens
     *
     * @return \Swagger\Client\Model\GetTransactionInfoResponseTokens[]
     */
    public function getTokens()
    {
        return $this->container['tokens'];
    }

    /**
     * Sets tokens
     *
     * @param \Swagger\Client\Model\GetTransactionInfoResponseTokens[] $tokens tokens
     *
     * @return $this
     */
    public function setTokens($tokens)
    {
        $this->container['tokens'] = $tokens;

        return $this;
    }

    /**
     * Gets value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param float $value Value of input in NEBL satoshi
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

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


