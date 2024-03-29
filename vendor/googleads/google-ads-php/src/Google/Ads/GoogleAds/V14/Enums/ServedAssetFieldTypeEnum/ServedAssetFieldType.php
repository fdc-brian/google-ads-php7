<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/enums/served_asset_field_type.proto

namespace Google\Ads\GoogleAds\V14\Enums\ServedAssetFieldTypeEnum;

use UnexpectedValueException;

/**
 * The possible asset field types.
 *
 * Protobuf type <code>google.ads.googleads.v14.enums.ServedAssetFieldTypeEnum.ServedAssetFieldType</code>
 */
class ServedAssetFieldType
{
    /**
     * No value has been specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received value is not known in this version.
     * This is a response-only value.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The asset is used in headline 1.
     *
     * Generated from protobuf enum <code>HEADLINE_1 = 2;</code>
     */
    const HEADLINE_1 = 2;
    /**
     * The asset is used in headline 2.
     *
     * Generated from protobuf enum <code>HEADLINE_2 = 3;</code>
     */
    const HEADLINE_2 = 3;
    /**
     * The asset is used in headline 3.
     *
     * Generated from protobuf enum <code>HEADLINE_3 = 4;</code>
     */
    const HEADLINE_3 = 4;
    /**
     * The asset is used in description 1.
     *
     * Generated from protobuf enum <code>DESCRIPTION_1 = 5;</code>
     */
    const DESCRIPTION_1 = 5;
    /**
     * The asset is used in description 2.
     *
     * Generated from protobuf enum <code>DESCRIPTION_2 = 6;</code>
     */
    const DESCRIPTION_2 = 6;
    /**
     * This asset is used as a sitelink.
     *
     * Generated from protobuf enum <code>SITELINK = 22;</code>
     */
    const SITELINK = 22;
    /**
     * This asset is used as a call.
     *
     * Generated from protobuf enum <code>CALL = 23;</code>
     */
    const CALL = 23;
    /**
     * This asset is used as a mobile app.
     *
     * Generated from protobuf enum <code>MOBILE_APP = 24;</code>
     */
    const MOBILE_APP = 24;
    /**
     * This asset is used as a callout.
     *
     * Generated from protobuf enum <code>CALLOUT = 25;</code>
     */
    const CALLOUT = 25;
    /**
     * This asset is used as a structured snippet.
     *
     * Generated from protobuf enum <code>STRUCTURED_SNIPPET = 26;</code>
     */
    const STRUCTURED_SNIPPET = 26;
    /**
     * This asset is used as a price.
     *
     * Generated from protobuf enum <code>PRICE = 27;</code>
     */
    const PRICE = 27;
    /**
     * This asset is used as a promotion.
     *
     * Generated from protobuf enum <code>PROMOTION = 28;</code>
     */
    const PROMOTION = 28;
    /**
     * This asset is used as an image.
     *
     * Generated from protobuf enum <code>AD_IMAGE = 29;</code>
     */
    const AD_IMAGE = 29;
    /**
     * The asset is used as a lead form.
     *
     * Generated from protobuf enum <code>LEAD_FORM = 30;</code>
     */
    const LEAD_FORM = 30;
    /**
     * The asset is used as a business logo.
     *
     * Generated from protobuf enum <code>BUSINESS_LOGO = 31;</code>
     */
    const BUSINESS_LOGO = 31;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::HEADLINE_1 => 'HEADLINE_1',
        self::HEADLINE_2 => 'HEADLINE_2',
        self::HEADLINE_3 => 'HEADLINE_3',
        self::DESCRIPTION_1 => 'DESCRIPTION_1',
        self::DESCRIPTION_2 => 'DESCRIPTION_2',
        self::SITELINK => 'SITELINK',
        self::CALL => 'CALL',
        self::MOBILE_APP => 'MOBILE_APP',
        self::CALLOUT => 'CALLOUT',
        self::STRUCTURED_SNIPPET => 'STRUCTURED_SNIPPET',
        self::PRICE => 'PRICE',
        self::PROMOTION => 'PROMOTION',
        self::AD_IMAGE => 'AD_IMAGE',
        self::LEAD_FORM => 'LEAD_FORM',
        self::BUSINESS_LOGO => 'BUSINESS_LOGO',
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
class_alias(ServedAssetFieldType::class, \Google\Ads\GoogleAds\V14\Enums\ServedAssetFieldTypeEnum_ServedAssetFieldType::class);

