<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/services/campaign_bid_modifier_service.proto

namespace Google\Ads\GoogleAds\V12\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The result for the criterion mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.services.MutateCampaignBidModifierResult</code>
 */
class MutateCampaignBidModifierResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * The mutated campaign bid modifier with only mutable fields after mutate.
     * The field will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.resources.CampaignBidModifier campaign_bid_modifier = 2;</code>
     */
    protected $campaign_bid_modifier = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Returned for successful operations.
     *     @type \Google\Ads\GoogleAds\V12\Resources\CampaignBidModifier $campaign_bid_modifier
     *           The mutated campaign bid modifier with only mutable fields after mutate.
     *           The field will only be returned when response_content_type is set to
     *           "MUTABLE_RESOURCE".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Services\CampaignBidModifierService::initOnce();
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
     * The mutated campaign bid modifier with only mutable fields after mutate.
     * The field will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.resources.CampaignBidModifier campaign_bid_modifier = 2;</code>
     * @return \Google\Ads\GoogleAds\V12\Resources\CampaignBidModifier|null
     */
    public function getCampaignBidModifier()
    {
        return $this->campaign_bid_modifier;
    }

    public function hasCampaignBidModifier()
    {
        return isset($this->campaign_bid_modifier);
    }

    public function clearCampaignBidModifier()
    {
        unset($this->campaign_bid_modifier);
    }

    /**
     * The mutated campaign bid modifier with only mutable fields after mutate.
     * The field will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.resources.CampaignBidModifier campaign_bid_modifier = 2;</code>
     * @param \Google\Ads\GoogleAds\V12\Resources\CampaignBidModifier $var
     * @return $this
     */
    public function setCampaignBidModifier($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V12\Resources\CampaignBidModifier::class);
        $this->campaign_bid_modifier = $var;

        return $this;
    }

}

