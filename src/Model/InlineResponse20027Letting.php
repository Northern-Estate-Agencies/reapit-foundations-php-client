<?php
/**
 * InlineResponse20027Letting
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
 * InlineResponse20027Letting Class Doc Comment
 *
 * @category Class
 * @description Representation of property details specific to lettings marketing
 * @package  NorthernEstateAgencies\ReapitFoundationsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineResponse20027Letting implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_27_letting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'instructed' => '\DateTime',
        'availableFrom' => '\DateTime',
        'availableTo' => '\DateTime',
        'rent' => 'double',
        'rentFrequency' => 'string',
        'furnishing' => 'string[]',
        'term' => 'string',
        'status' => 'string',
        'agentRole' => 'string',
        'landlordId' => 'string',
        'brochureId' => 'string',
        'managementFee' => '\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20027SellingFee',
        'lettingFee' => '\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20027SellingFee',
        'qualifier' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'instructed' => 'date',
        'availableFrom' => 'date',
        'availableTo' => 'date',
        'rent' => 'double',
        'rentFrequency' => null,
        'furnishing' => null,
        'term' => null,
        'status' => null,
        'agentRole' => null,
        'landlordId' => null,
        'brochureId' => null,
        'managementFee' => null,
        'lettingFee' => null,
        'qualifier' => null
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
        'instructed' => 'instructed',
        'availableFrom' => 'availableFrom',
        'availableTo' => 'availableTo',
        'rent' => 'rent',
        'rentFrequency' => 'rentFrequency',
        'furnishing' => 'furnishing',
        'term' => 'term',
        'status' => 'status',
        'agentRole' => 'agentRole',
        'landlordId' => 'landlordId',
        'brochureId' => 'brochureId',
        'managementFee' => 'managementFee',
        'lettingFee' => 'lettingFee',
        'qualifier' => 'qualifier'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'instructed' => 'setInstructed',
        'availableFrom' => 'setAvailableFrom',
        'availableTo' => 'setAvailableTo',
        'rent' => 'setRent',
        'rentFrequency' => 'setRentFrequency',
        'furnishing' => 'setFurnishing',
        'term' => 'setTerm',
        'status' => 'setStatus',
        'agentRole' => 'setAgentRole',
        'landlordId' => 'setLandlordId',
        'brochureId' => 'setBrochureId',
        'managementFee' => 'setManagementFee',
        'lettingFee' => 'setLettingFee',
        'qualifier' => 'setQualifier'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'instructed' => 'getInstructed',
        'availableFrom' => 'getAvailableFrom',
        'availableTo' => 'getAvailableTo',
        'rent' => 'getRent',
        'rentFrequency' => 'getRentFrequency',
        'furnishing' => 'getFurnishing',
        'term' => 'getTerm',
        'status' => 'getStatus',
        'agentRole' => 'getAgentRole',
        'landlordId' => 'getLandlordId',
        'brochureId' => 'getBrochureId',
        'managementFee' => 'getManagementFee',
        'lettingFee' => 'getLettingFee',
        'qualifier' => 'getQualifier'
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
        $this->container['instructed'] = $data['instructed'] ?? null;
        $this->container['availableFrom'] = $data['availableFrom'] ?? null;
        $this->container['availableTo'] = $data['availableTo'] ?? null;
        $this->container['rent'] = $data['rent'] ?? null;
        $this->container['rentFrequency'] = $data['rentFrequency'] ?? null;
        $this->container['furnishing'] = $data['furnishing'] ?? null;
        $this->container['term'] = $data['term'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['agentRole'] = $data['agentRole'] ?? null;
        $this->container['landlordId'] = $data['landlordId'] ?? null;
        $this->container['brochureId'] = $data['brochureId'] ?? null;
        $this->container['managementFee'] = $data['managementFee'] ?? null;
        $this->container['lettingFee'] = $data['lettingFee'] ?? null;
        $this->container['qualifier'] = $data['qualifier'] ?? null;
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
     * Gets instructed
     *
     * @return \DateTime|null
     */
    public function getInstructed()
    {
        return $this->container['instructed'];
    }

    /**
     * Sets instructed
     *
     * @param \DateTime|null $instructed The date the property was marked as to let
     *
     * @return self
     */
    public function setInstructed($instructed)
    {
        $this->container['instructed'] = $instructed;

        return $this;
    }

    /**
     * Gets availableFrom
     *
     * @return \DateTime|null
     */
    public function getAvailableFrom()
    {
        return $this->container['availableFrom'];
    }

    /**
     * Sets availableFrom
     *
     * @param \DateTime|null $availableFrom The date the property is next available from
     *
     * @return self
     */
    public function setAvailableFrom($availableFrom)
    {
        $this->container['availableFrom'] = $availableFrom;

        return $this;
    }

    /**
     * Gets availableTo
     *
     * @return \DateTime|null
     */
    public function getAvailableTo()
    {
        return $this->container['availableTo'];
    }

    /**
     * Sets availableTo
     *
     * @param \DateTime|null $availableTo The date the property is available to
     *
     * @return self
     */
    public function setAvailableTo($availableTo)
    {
        $this->container['availableTo'] = $availableTo;

        return $this;
    }

    /**
     * Gets rent
     *
     * @return double|null
     */
    public function getRent()
    {
        return $this->container['rent'];
    }

    /**
     * Sets rent
     *
     * @param double|null $rent The rent being charged for the property
     *
     * @return self
     */
    public function setRent($rent)
    {
        $this->container['rent'] = $rent;

        return $this;
    }

    /**
     * Gets rentFrequency
     *
     * @return string|null
     */
    public function getRentFrequency()
    {
        return $this->container['rentFrequency'];
    }

    /**
     * Sets rentFrequency
     *
     * @param string|null $rentFrequency The frequency at which rent will be collected (weekly/monthly/yearly)
     *
     * @return self
     */
    public function setRentFrequency($rentFrequency)
    {
        $this->container['rentFrequency'] = $rentFrequency;

        return $this;
    }

    /**
     * Gets furnishing
     *
     * @return string[]|null
     */
    public function getFurnishing()
    {
        return $this->container['furnishing'];
    }

    /**
     * Sets furnishing
     *
     * @param string[]|null $furnishing The furnishing state that the property can be offered in (furnished/unfurnished/partFurnished)
     *
     * @return self
     */
    public function setFurnishing($furnishing)
    {
        $this->container['furnishing'] = $furnishing;

        return $this;
    }

    /**
     * Gets term
     *
     * @return string|null
     */
    public function getTerm()
    {
        return $this->container['term'];
    }

    /**
     * Sets term
     *
     * @param string|null $term The acceptable letting terms (short/long/any)
     *
     * @return self
     */
    public function setTerm($term)
    {
        $this->container['term'] = $term;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The current status of the let (valuation/toLet/toLetUnavailable/underOffer/underOfferUnavailable/arrangingTenancyUnavailable/arrangingTenancy/tenancyCurrentUnavailable/tenancyCurrent/tenancyFinished/tenancyCancelled/sold/letByOtherAgent/letPrivately/provisional/withdrawn)
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets agentRole
     *
     * @return string|null
     */
    public function getAgentRole()
    {
        return $this->container['agentRole'];
    }

    /**
     * Sets agentRole
     *
     * @param string|null $agentRole The role that the agent will be performing for this lettings property (managed/rentCollection/collectFirstPayment/collectRentToDate/lettingOnly/introducingTenant)
     *
     * @return self
     */
    public function setAgentRole($agentRole)
    {
        $this->container['agentRole'] = $agentRole;

        return $this;
    }

    /**
     * Gets landlordId
     *
     * @return string|null
     */
    public function getLandlordId()
    {
        return $this->container['landlordId'];
    }

    /**
     * Sets landlordId
     *
     * @param string|null $landlordId The unique identifier of the landlord letting the property
     *
     * @return self
     */
    public function setLandlordId($landlordId)
    {
        $this->container['landlordId'] = $landlordId;

        return $this;
    }

    /**
     * Gets brochureId
     *
     * @return string|null
     */
    public function getBrochureId()
    {
        return $this->container['brochureId'];
    }

    /**
     * Sets brochureId
     *
     * @param string|null $brochureId The unique identifier of the document used for the lettings brochure
     *
     * @return self
     */
    public function setBrochureId($brochureId)
    {
        $this->container['brochureId'] = $brochureId;

        return $this;
    }

    /**
     * Gets managementFee
     *
     * @return \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20027SellingFee|null
     */
    public function getManagementFee()
    {
        return $this->container['managementFee'];
    }

    /**
     * Sets managementFee
     *
     * @param \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20027SellingFee|null $managementFee managementFee
     *
     * @return self
     */
    public function setManagementFee($managementFee)
    {
        $this->container['managementFee'] = $managementFee;

        return $this;
    }

    /**
     * Gets lettingFee
     *
     * @return \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20027SellingFee|null
     */
    public function getLettingFee()
    {
        return $this->container['lettingFee'];
    }

    /**
     * Sets lettingFee
     *
     * @param \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20027SellingFee|null $lettingFee lettingFee
     *
     * @return self
     */
    public function setLettingFee($lettingFee)
    {
        $this->container['lettingFee'] = $lettingFee;

        return $this;
    }

    /**
     * Gets qualifier
     *
     * @return string|null
     */
    public function getQualifier()
    {
        return $this->container['qualifier'];
    }

    /**
     * Sets qualifier
     *
     * @param string|null $qualifier The rent qualifier (rentOnApplication/askingRent)
     *
     * @return self
     */
    public function setQualifier($qualifier)
    {
        $this->container['qualifier'] = $qualifier;

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


