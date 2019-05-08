<?php
/**
 * GetBlockResponse
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
 * GetBlockResponse Class Doc Comment
 *
 * @category Class
 * @package  NeblioAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetBlockResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getBlockResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'hash' => 'string',
        'confirmations' => 'float',
        'size' => 'float',
        'height' => 'float',
        'version' => 'float',
        'merkleroot' => 'string',
        'tx' => 'string[]',
        'time' => 'float',
        'nonce' => 'float',
        'bits' => 'string',
        'difficulty' => 'float',
        'previousblockhash' => 'string',
        'nextblockhash' => 'string',
        'reward' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'hash' => null,
        'confirmations' => null,
        'size' => null,
        'height' => null,
        'version' => null,
        'merkleroot' => null,
        'tx' => null,
        'time' => null,
        'nonce' => null,
        'bits' => null,
        'difficulty' => null,
        'previousblockhash' => null,
        'nextblockhash' => null,
        'reward' => null
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
        'hash' => 'hash',
        'confirmations' => 'confirmations',
        'size' => 'size',
        'height' => 'height',
        'version' => 'version',
        'merkleroot' => 'merkleroot',
        'tx' => 'tx',
        'time' => 'time',
        'nonce' => 'nonce',
        'bits' => 'bits',
        'difficulty' => 'difficulty',
        'previousblockhash' => 'previousblockhash',
        'nextblockhash' => 'nextblockhash',
        'reward' => 'reward'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hash' => 'setHash',
        'confirmations' => 'setConfirmations',
        'size' => 'setSize',
        'height' => 'setHeight',
        'version' => 'setVersion',
        'merkleroot' => 'setMerkleroot',
        'tx' => 'setTx',
        'time' => 'setTime',
        'nonce' => 'setNonce',
        'bits' => 'setBits',
        'difficulty' => 'setDifficulty',
        'previousblockhash' => 'setPreviousblockhash',
        'nextblockhash' => 'setNextblockhash',
        'reward' => 'setReward'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hash' => 'getHash',
        'confirmations' => 'getConfirmations',
        'size' => 'getSize',
        'height' => 'getHeight',
        'version' => 'getVersion',
        'merkleroot' => 'getMerkleroot',
        'tx' => 'getTx',
        'time' => 'getTime',
        'nonce' => 'getNonce',
        'bits' => 'getBits',
        'difficulty' => 'getDifficulty',
        'previousblockhash' => 'getPreviousblockhash',
        'nextblockhash' => 'getNextblockhash',
        'reward' => 'getReward'
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
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['confirmations'] = isset($data['confirmations']) ? $data['confirmations'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['merkleroot'] = isset($data['merkleroot']) ? $data['merkleroot'] : null;
        $this->container['tx'] = isset($data['tx']) ? $data['tx'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['nonce'] = isset($data['nonce']) ? $data['nonce'] : null;
        $this->container['bits'] = isset($data['bits']) ? $data['bits'] : null;
        $this->container['difficulty'] = isset($data['difficulty']) ? $data['difficulty'] : null;
        $this->container['previousblockhash'] = isset($data['previousblockhash']) ? $data['previousblockhash'] : null;
        $this->container['nextblockhash'] = isset($data['nextblockhash']) ? $data['nextblockhash'] : null;
        $this->container['reward'] = isset($data['reward']) ? $data['reward'] : null;
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
     * Gets hash
     *
     * @return string|null
     */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
     * Sets hash
     *
     * @param string|null $hash Block hash
     *
     * @return $this
     */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;

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
     * @param float|null $confirmations Number of confirmations block has
     *
     * @return $this
     */
    public function setConfirmations($confirmations)
    {
        $this->container['confirmations'] = $confirmations;

        return $this;
    }

    /**
     * Gets size
     *
     * @return float|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param float|null $size Block size in bytes
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets height
     *
     * @return float|null
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param float|null $height Block height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

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
     * @param float|null $version Block version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets merkleroot
     *
     * @return string|null
     */
    public function getMerkleroot()
    {
        return $this->container['merkleroot'];
    }

    /**
     * Sets merkleroot
     *
     * @param string|null $merkleroot Merkleroot of block
     *
     * @return $this
     */
    public function setMerkleroot($merkleroot)
    {
        $this->container['merkleroot'] = $merkleroot;

        return $this;
    }

    /**
     * Gets tx
     *
     * @return string[]|null
     */
    public function getTx()
    {
        return $this->container['tx'];
    }

    /**
     * Sets tx
     *
     * @param string[]|null $tx Array of tx ids in the block
     *
     * @return $this
     */
    public function setTx($tx)
    {
        $this->container['tx'] = $tx;

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
     * @param float|null $time Block time relative to epoch
     *
     * @return $this
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets nonce
     *
     * @return float|null
     */
    public function getNonce()
    {
        return $this->container['nonce'];
    }

    /**
     * Sets nonce
     *
     * @param float|null $nonce Block nonce
     *
     * @return $this
     */
    public function setNonce($nonce)
    {
        $this->container['nonce'] = $nonce;

        return $this;
    }

    /**
     * Gets bits
     *
     * @return string|null
     */
    public function getBits()
    {
        return $this->container['bits'];
    }

    /**
     * Sets bits
     *
     * @param string|null $bits Block bits
     *
     * @return $this
     */
    public function setBits($bits)
    {
        $this->container['bits'] = $bits;

        return $this;
    }

    /**
     * Gets difficulty
     *
     * @return float|null
     */
    public function getDifficulty()
    {
        return $this->container['difficulty'];
    }

    /**
     * Sets difficulty
     *
     * @param float|null $difficulty Block difficulty
     *
     * @return $this
     */
    public function setDifficulty($difficulty)
    {
        $this->container['difficulty'] = $difficulty;

        return $this;
    }

    /**
     * Gets previousblockhash
     *
     * @return string|null
     */
    public function getPreviousblockhash()
    {
        return $this->container['previousblockhash'];
    }

    /**
     * Sets previousblockhash
     *
     * @param string|null $previousblockhash Hash of the previous block on the chain
     *
     * @return $this
     */
    public function setPreviousblockhash($previousblockhash)
    {
        $this->container['previousblockhash'] = $previousblockhash;

        return $this;
    }

    /**
     * Gets nextblockhash
     *
     * @return string|null
     */
    public function getNextblockhash()
    {
        return $this->container['nextblockhash'];
    }

    /**
     * Sets nextblockhash
     *
     * @param string|null $nextblockhash Hash of the next block on the chain
     *
     * @return $this
     */
    public function setNextblockhash($nextblockhash)
    {
        $this->container['nextblockhash'] = $nextblockhash;

        return $this;
    }

    /**
     * Gets reward
     *
     * @return float|null
     */
    public function getReward()
    {
        return $this->container['reward'];
    }

    /**
     * Sets reward
     *
     * @param float|null $reward Number of NEBL awarded in this block
     *
     * @return $this
     */
    public function setReward($reward)
    {
        $this->container['reward'] = $reward;

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


