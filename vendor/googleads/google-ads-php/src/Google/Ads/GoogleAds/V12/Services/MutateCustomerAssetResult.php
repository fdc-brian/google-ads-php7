<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/services/customer_asset_service.proto

namespace Google\Ads\GoogleAds\V12\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The result for the customer asset mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.services.MutateCustomerAssetResult</code>
 */
class MutateCustomerAssetResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * The mutated customer asset with only mutable fields after
     * mutate. The field will only be returned when response_content_type is set
     * to "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.resources.CustomerAsset customer_asset = 2;</code>
     */
    protected $customer_asset = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Returned for successful operations.
     *     @type \Google\Ads\GoogleAds\V12\Resources\CustomerAsset $customer_asset
     *           The mutated customer asset with only mutable fields after
     *           mutate. The field will only be returned when response_content_type is set
     *           to "MUTABLE_RESOURCE".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Services\CustomerAssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The mutated customer asset with only mutable fields after
     * mutate. The field will only be returned when response_content_type is set
     * to "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.resources.CustomerAsset customer_asset = 2;</code>
     * @return \Google\Ads\GoogleAds\V12\Resources\CustomerAsset|null
     */
    public function getCustomerAsset()
    {
        return $this->customer_asset;
    }

    public function hasCustomerAsset()
    {
        return isset($this->customer_asset);
    }

    public function clearCustomerAsset()
    {
        unset($this->customer_asset);
    }

    /**
     * The mutated customer asset with only mutable fields after
     * mutate. The field will only be returned when response_content_type is set
     * to "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.resources.CustomerAsset customer_asset = 2;</code>
     * @param \Google\Ads\GoogleAds\V12\Resources\CustomerAsset $var
     * @return $this
     */
    public function setCustomerAsset($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V12\Resources\CustomerAsset::class);
        $this->customer_asset = $var;

        return $this;
    }

}

