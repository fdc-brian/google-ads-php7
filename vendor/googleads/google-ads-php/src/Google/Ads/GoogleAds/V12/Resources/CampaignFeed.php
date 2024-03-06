<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/resources/campaign_feed.proto

namespace Google\Ads\GoogleAds\V12\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A campaign feed.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.resources.CampaignFeed</code>
 */
class CampaignFeed extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the campaign feed.
     * Campaign feed resource names have the form:
     * `customers/{customer_id}/campaignFeeds/{campaign_id}~{feed_id}
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Immutable. The feed to which the CampaignFeed belongs.
     *
     * Generated from protobuf field <code>optional string feed = 7 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $feed = null;
    /**
     * Immutable. The campaign to which the CampaignFeed belongs.
     *
     * Generated from protobuf field <code>optional string campaign = 8 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $campaign = null;
    /**
     * Indicates which placeholder types the feed may populate under the connected
     * campaign. Required.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.enums.PlaceholderTypeEnum.PlaceholderType placeholder_types = 4;</code>
     */
    private $placeholder_types;
    /**
     * Matching function associated with the CampaignFeed.
     * The matching function is used to filter the set of feed items selected.
     * Required.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.common.MatchingFunction matching_function = 5;</code>
     */
    protected $matching_function = null;
    /**
     * Output only. Status of the campaign feed.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.FeedLinkStatusEnum.FeedLinkStatus status = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the campaign feed.
     *           Campaign feed resource names have the form:
     *           `customers/{customer_id}/campaignFeeds/{campaign_id}~{feed_id}
     *     @type string $feed
     *           Immutable. The feed to which the CampaignFeed belongs.
     *     @type string $campaign
     *           Immutable. The campaign to which the CampaignFeed belongs.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $placeholder_types
     *           Indicates which placeholder types the feed may populate under the connected
     *           campaign. Required.
     *     @type \Google\Ads\GoogleAds\V12\Common\MatchingFunction $matching_function
     *           Matching function associated with the CampaignFeed.
     *           The matching function is used to filter the set of feed items selected.
     *           Required.
     *     @type int $status
     *           Output only. Status of the campaign feed.
     *           This field is read-only.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Resources\CampaignFeed::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the campaign feed.
     * Campaign feed resource names have the form:
     * `customers/{customer_id}/campaignFeeds/{campaign_id}~{feed_id}
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the campaign feed.
     * Campaign feed resource names have the form:
     * `customers/{customer_id}/campaignFeeds/{campaign_id}~{feed_id}
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
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
     * Immutable. The feed to which the CampaignFeed belongs.
     *
     * Generated from protobuf field <code>optional string feed = 7 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getFeed()
    {
        return isset($this->feed) ? $this->feed : '';
    }

    public function hasFeed()
    {
        return isset($this->feed);
    }

    public function clearFeed()
    {
        unset($this->feed);
    }

    /**
     * Immutable. The feed to which the CampaignFeed belongs.
     *
     * Generated from protobuf field <code>optional string feed = 7 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setFeed($var)
    {
        GPBUtil::checkString($var, True);
        $this->feed = $var;

        return $this;
    }

    /**
     * Immutable. The campaign to which the CampaignFeed belongs.
     *
     * Generated from protobuf field <code>optional string campaign = 8 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getCampaign()
    {
        return isset($this->campaign) ? $this->campaign : '';
    }

    public function hasCampaign()
    {
        return isset($this->campaign);
    }

    public function clearCampaign()
    {
        unset($this->campaign);
    }

    /**
     * Immutable. The campaign to which the CampaignFeed belongs.
     *
     * Generated from protobuf field <code>optional string campaign = 8 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCampaign($var)
    {
        GPBUtil::checkString($var, True);
        $this->campaign = $var;

        return $this;
    }

    /**
     * Indicates which placeholder types the feed may populate under the connected
     * campaign. Required.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.enums.PlaceholderTypeEnum.PlaceholderType placeholder_types = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPlaceholderTypes()
    {
        return $this->placeholder_types;
    }

    /**
     * Indicates which placeholder types the feed may populate under the connected
     * campaign. Required.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.enums.PlaceholderTypeEnum.PlaceholderType placeholder_types = 4;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPlaceholderTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Ads\GoogleAds\V12\Enums\PlaceholderTypeEnum\PlaceholderType::class);
        $this->placeholder_types = $arr;

        return $this;
    }

    /**
     * Matching function associated with the CampaignFeed.
     * The matching function is used to filter the set of feed items selected.
     * Required.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.common.MatchingFunction matching_function = 5;</code>
     * @return \Google\Ads\GoogleAds\V12\Common\MatchingFunction|null
     */
    public function getMatchingFunction()
    {
        return $this->matching_function;
    }

    public function hasMatchingFunction()
    {
        return isset($this->matching_function);
    }

    public function clearMatchingFunction()
    {
        unset($this->matching_function);
    }

    /**
     * Matching function associated with the CampaignFeed.
     * The matching function is used to filter the set of feed items selected.
     * Required.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.common.MatchingFunction matching_function = 5;</code>
     * @param \Google\Ads\GoogleAds\V12\Common\MatchingFunction $var
     * @return $this
     */
    public function setMatchingFunction($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V12\Common\MatchingFunction::class);
        $this->matching_function = $var;

        return $this;
    }

    /**
     * Output only. Status of the campaign feed.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.FeedLinkStatusEnum.FeedLinkStatus status = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Output only. Status of the campaign feed.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.FeedLinkStatusEnum.FeedLinkStatus status = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V12\Enums\FeedLinkStatusEnum\FeedLinkStatus::class);
        $this->status = $var;

        return $this;
    }

}

