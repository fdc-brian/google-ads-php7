<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/enums/value_rule_geo_location_match_type.proto

namespace Google\Ads\GoogleAds\V14\Enums\ValueRuleGeoLocationMatchTypeEnum;

use UnexpectedValueException;

/**
 * Possible geographic location matching types.
 *
 * Protobuf type <code>google.ads.googleads.v14.enums.ValueRuleGeoLocationMatchTypeEnum.ValueRuleGeoLocationMatchType</code>
 */
class ValueRuleGeoLocationMatchType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Either Area of Interest or Location of Presence can be used to match.
     *
     * Generated from protobuf enum <code>ANY = 2;</code>
     */
    const ANY = 2;
    /**
     * Only Location of Presence can be used to match.
     *
     * Generated from protobuf enum <code>LOCATION_OF_PRESENCE = 3;</code>
     */
    const LOCATION_OF_PRESENCE = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ANY => 'ANY',
        self::LOCATION_OF_PRESENCE => 'LOCATION_OF_PRESENCE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ValueRuleGeoLocationMatchType::class, \Google\Ads\GoogleAds\V14\Enums\ValueRuleGeoLocationMatchTypeEnum_ValueRuleGeoLocationMatchType::class);

