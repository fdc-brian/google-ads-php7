<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/enums/user_interest_taxonomy_type.proto

namespace Google\Ads\GoogleAds\V13\Enums\UserInterestTaxonomyTypeEnum;

use UnexpectedValueException;

/**
 * Enum containing the possible UserInterestTaxonomyTypes.
 *
 * Protobuf type <code>google.ads.googleads.v13.enums.UserInterestTaxonomyTypeEnum.UserInterestTaxonomyType</code>
 */
class UserInterestTaxonomyType
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
     * The affinity for this user interest.
     *
     * Generated from protobuf enum <code>AFFINITY = 2;</code>
     */
    const AFFINITY = 2;
    /**
     * The market for this user interest.
     *
     * Generated from protobuf enum <code>IN_MARKET = 3;</code>
     */
    const IN_MARKET = 3;
    /**
     * Users known to have installed applications in the specified categories.
     *
     * Generated from protobuf enum <code>MOBILE_APP_INSTALL_USER = 4;</code>
     */
    const MOBILE_APP_INSTALL_USER = 4;
    /**
     * The geographical location of the interest-based vertical.
     *
     * Generated from protobuf enum <code>VERTICAL_GEO = 5;</code>
     */
    const VERTICAL_GEO = 5;
    /**
     * User interest criteria for new smart phone users.
     *
     * Generated from protobuf enum <code>NEW_SMART_PHONE_USER = 6;</code>
     */
    const NEW_SMART_PHONE_USER = 6;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::AFFINITY => 'AFFINITY',
        self::IN_MARKET => 'IN_MARKET',
        self::MOBILE_APP_INSTALL_USER => 'MOBILE_APP_INSTALL_USER',
        self::VERTICAL_GEO => 'VERTICAL_GEO',
        self::NEW_SMART_PHONE_USER => 'NEW_SMART_PHONE_USER',
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
class_alias(UserInterestTaxonomyType::class, \Google\Ads\GoogleAds\V13\Enums\UserInterestTaxonomyTypeEnum_UserInterestTaxonomyType::class);

