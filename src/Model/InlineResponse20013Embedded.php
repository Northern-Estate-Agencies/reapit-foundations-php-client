<?php
/**
 * InlineResponse20013Embedded
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  NorthernEstateAgencies\ReapitFoundationsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Foundations Interactive API Explorer
 *
 * <p>Technical documentation for the Reapit Foundations REST API endpoints. This tool is interactive and provides instant access to data hosted in our <strong><a href=\"https://foundations-documentation.reapit.cloud/api/api-documentation#sandbox-mode\">sandbox environment</a> </strong>with <strong>authentication</strong> and <strong>versioning</strong> headers pre-populated. Example requests and responses are shown by default but you can switch to view a fully documented schema - look for the&nbsp;<strong>model</strong> link.</p> <p>* To begin developing with the platform, consult our&nbsp;<strong><a href=\"https://foundations-documentation.reapit.cloud/api/api-documentation\">documentation</a></strong>&nbsp;<br />* To report a bug or request a new feature, see our <strong><a href=\"https://developers.reapit.cloud/help\">help pages</a>&nbsp;<br /></strong>* For information on terminology, see our&nbsp;<strong><a href=\"https://foundations-documentation.reapit.cloud/platform-glossary\">glossary</a></strong>&nbsp;<br />* Our APIs are located at&nbsp;<strong>https://platform.reapit.cloud<br /></strong>* The current API version is&nbsp;<strong>2020-01-31<br /></strong></p>
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace NorthernEstateAgencies\ReapitFoundationsClient\Model;

use \ArrayAccess;
use \NorthernEstateAgencies\ReapitFoundationsClient\ObjectSerializer;

/**
 * InlineResponse20013Embedded Class Doc Comment
 *
 * @category Class
 * @description Representation of a department
 * @package  NorthernEstateAgencies\ReapitFoundationsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineResponse20013Embedded implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_13__embedded';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'links' => 'array<string,\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Links>',
        'embedded' => 'array<string,object>',
        'id' => 'string',
        'created' => '\DateTime',
        'modified' => '\DateTime',
        'name' => 'string',
        'typeOptions' => 'string[]',
        'styleOptions' => 'string[]',
        'situationOptions' => 'string[]',
        'parkingOptions' => 'string[]',
        'ageOptions' => 'string[]',
        'localityOptions' => 'string[]',
        'eTag' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'links' => null,
        'embedded' => null,
        'id' => null,
        'created' => 'date-time',
        'modified' => 'date-time',
        'name' => null,
        'typeOptions' => null,
        'styleOptions' => null,
        'situationOptions' => null,
        'parkingOptions' => null,
        'ageOptions' => null,
        'localityOptions' => null,
        'eTag' => null
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
        'links' => '_links',
        'embedded' => '_embedded',
        'id' => 'id',
        'created' => 'created',
        'modified' => 'modified',
        'name' => 'name',
        'typeOptions' => 'typeOptions',
        'styleOptions' => 'styleOptions',
        'situationOptions' => 'situationOptions',
        'parkingOptions' => 'parkingOptions',
        'ageOptions' => 'ageOptions',
        'localityOptions' => 'localityOptions',
        'eTag' => '_eTag'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'embedded' => 'setEmbedded',
        'id' => 'setId',
        'created' => 'setCreated',
        'modified' => 'setModified',
        'name' => 'setName',
        'typeOptions' => 'setTypeOptions',
        'styleOptions' => 'setStyleOptions',
        'situationOptions' => 'setSituationOptions',
        'parkingOptions' => 'setParkingOptions',
        'ageOptions' => 'setAgeOptions',
        'localityOptions' => 'setLocalityOptions',
        'eTag' => 'setETag'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'embedded' => 'getEmbedded',
        'id' => 'getId',
        'created' => 'getCreated',
        'modified' => 'getModified',
        'name' => 'getName',
        'typeOptions' => 'getTypeOptions',
        'styleOptions' => 'getStyleOptions',
        'situationOptions' => 'getSituationOptions',
        'parkingOptions' => 'getParkingOptions',
        'ageOptions' => 'getAgeOptions',
        'localityOptions' => 'getLocalityOptions',
        'eTag' => 'getETag'
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
        $this->container['links'] = $data['links'] ?? null;
        $this->container['embedded'] = $data['embedded'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['created'] = $data['created'] ?? null;
        $this->container['modified'] = $data['modified'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['typeOptions'] = $data['typeOptions'] ?? null;
        $this->container['styleOptions'] = $data['styleOptions'] ?? null;
        $this->container['situationOptions'] = $data['situationOptions'] ?? null;
        $this->container['parkingOptions'] = $data['parkingOptions'] ?? null;
        $this->container['ageOptions'] = $data['ageOptions'] ?? null;
        $this->container['localityOptions'] = $data['localityOptions'] ?? null;
        $this->container['eTag'] = $data['eTag'] ?? null;
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
     * Gets links
     *
     * @return array<string,\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Links>|null
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param array<string,\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Links>|null $links links
     *
     * @return self
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets embedded
     *
     * @return array<string,object>|null
     */
    public function getEmbedded()
    {
        return $this->container['embedded'];
    }

    /**
     * Sets embedded
     *
     * @param array<string,object>|null $embedded embedded
     *
     * @return self
     */
    public function setEmbedded($embedded)
    {
        $this->container['embedded'] = $embedded;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The unique identifier of the department
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime|null
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime|null $created The date and time when the department was created
     *
     * @return self
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets modified
     *
     * @return \DateTime|null
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     *
     * @param \DateTime|null $modified The date and time when the department was last modified
     *
     * @return self
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the department
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets typeOptions
     *
     * @return string[]|null
     */
    public function getTypeOptions()
    {
        return $this->container['typeOptions'];
    }

    /**
     * Sets typeOptions
     *
     * @param string[]|null $typeOptions A collection of property type values that will be accepted by other services
     *
     * @return self
     */
    public function setTypeOptions($typeOptions)
    {
        $this->container['typeOptions'] = $typeOptions;

        return $this;
    }

    /**
     * Gets styleOptions
     *
     * @return string[]|null
     */
    public function getStyleOptions()
    {
        return $this->container['styleOptions'];
    }

    /**
     * Sets styleOptions
     *
     * @param string[]|null $styleOptions A collection of property style values that will be accepted by other services
     *
     * @return self
     */
    public function setStyleOptions($styleOptions)
    {
        $this->container['styleOptions'] = $styleOptions;

        return $this;
    }

    /**
     * Gets situationOptions
     *
     * @return string[]|null
     */
    public function getSituationOptions()
    {
        return $this->container['situationOptions'];
    }

    /**
     * Sets situationOptions
     *
     * @param string[]|null $situationOptions A collection of property situation values that will be accepted by other services
     *
     * @return self
     */
    public function setSituationOptions($situationOptions)
    {
        $this->container['situationOptions'] = $situationOptions;

        return $this;
    }

    /**
     * Gets parkingOptions
     *
     * @return string[]|null
     */
    public function getParkingOptions()
    {
        return $this->container['parkingOptions'];
    }

    /**
     * Sets parkingOptions
     *
     * @param string[]|null $parkingOptions A collection of property parking values that will be accepted by other services
     *
     * @return self
     */
    public function setParkingOptions($parkingOptions)
    {
        $this->container['parkingOptions'] = $parkingOptions;

        return $this;
    }

    /**
     * Gets ageOptions
     *
     * @return string[]|null
     */
    public function getAgeOptions()
    {
        return $this->container['ageOptions'];
    }

    /**
     * Sets ageOptions
     *
     * @param string[]|null $ageOptions A collection of property age values that will be accepted by other services
     *
     * @return self
     */
    public function setAgeOptions($ageOptions)
    {
        $this->container['ageOptions'] = $ageOptions;

        return $this;
    }

    /**
     * Gets localityOptions
     *
     * @return string[]|null
     */
    public function getLocalityOptions()
    {
        return $this->container['localityOptions'];
    }

    /**
     * Sets localityOptions
     *
     * @param string[]|null $localityOptions A collection of property locality values that will be accepted by other services
     *
     * @return self
     */
    public function setLocalityOptions($localityOptions)
    {
        $this->container['localityOptions'] = $localityOptions;

        return $this;
    }

    /**
     * Gets eTag
     *
     * @return string|null
     */
    public function getETag()
    {
        return $this->container['eTag'];
    }

    /**
     * Sets eTag
     *
     * @param string|null $eTag The ETag for the current version of the department. Used for managing update concurrency
     *
     * @return self
     */
    public function setETag($eTag)
    {
        $this->container['eTag'] = $eTag;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


