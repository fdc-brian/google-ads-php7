<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/resources/campaign_asset.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V12\Resources;

class CampaignAsset
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
5google/ads/googleads/v12/enums/asset_field_type.protogoogle.ads.googleads.v12.enums"�
AssetFieldTypeEnum"�
AssetFieldType
UNSPECIFIED 
UNKNOWN
HEADLINE
DESCRIPTION
MANDATORY_AD_TEXT
MARKETING_IMAGE
MEDIA_BUNDLE
YOUTUBE_VIDEO
BOOK_ON_GOOGLE
	LEAD_FORM	
	PROMOTION

CALLOUT
STRUCTURED_SNIPPET
SITELINK

MOBILE_APP
HOTEL_CALLOUT
CALL	
PRICE
LONG_HEADLINE
BUSINESS_NAME
SQUARE_MARKETING_IMAGE
PORTRAIT_MARKETING_IMAGE
LOGO
LANDSCAPE_LOGO	
VIDEO
CALL_TO_ACTION_SELECTION
AD_IMAGEB�
"com.google.ads.googleads.v12.enumsBAssetFieldTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v12/enums;enums�GAA�Google.Ads.GoogleAds.V12.Enums�Google\\Ads\\GoogleAds\\V12\\Enums�"Google::Ads::GoogleAds::V12::Enumsbproto3
�
6google/ads/googleads/v12/enums/asset_link_status.protogoogle.ads.googleads.v12.enums"l
AssetLinkStatusEnum"U
AssetLinkStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVED

PAUSEDB�
"com.google.ads.googleads.v12.enumsBAssetLinkStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v12/enums;enums�GAA�Google.Ads.GoogleAds.V12.Enums�Google\\Ads\\GoogleAds\\V12\\Enums�"Google::Ads::GoogleAds::V12::Enumsbproto3
�
1google/ads/googleads/v12/enums/asset_source.protogoogle.ads.googleads.v12.enums"i
AssetSourceEnum"V
AssetSource
UNSPECIFIED 
UNKNOWN

ADVERTISER
AUTOMATICALLY_CREATEDB�
"com.google.ads.googleads.v12.enumsBAssetSourceProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v12/enums;enums�GAA�Google.Ads.GoogleAds.V12.Enums�Google\\Ads\\GoogleAds\\V12\\Enums�"Google::Ads::GoogleAds::V12::Enumsbproto3
�
7google/ads/googleads/v12/resources/campaign_asset.proto"google.ads.googleads.v12.resources6google/ads/googleads/v12/enums/asset_link_status.proto1google/ads/googleads/v12/enums/asset_source.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
CampaignAssetE
resource_name (	B.�A�A(
&googleads.googleapis.com/CampaignAsset@
campaign (	B)�A�A#
!googleads.googleapis.com/CampaignH �:
asset (	B&�A�A 
googleads.googleapis.com/AssetH�Z

field_type (2A.google.ads.googleads.v12.enums.AssetFieldTypeEnum.AssetFieldTypeB�AP
source (2;.google.ads.googleads.v12.enums.AssetSourceEnum.AssetSourceB�AS
status (2C.google.ads.googleads.v12.enums.AssetLinkStatusEnum.AssetLinkStatus:y�Av
&googleads.googleapis.com/CampaignAssetLcustomers/{customer_id}/campaignAssets/{campaign_id}~{asset_id}~{field_type}B
	_campaignB
_assetB�
&com.google.ads.googleads.v12.resourcesBCampaignAssetProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v12/resources;resources�GAA�"Google.Ads.GoogleAds.V12.Resources�"Google\\Ads\\GoogleAds\\V12\\Resources�&Google::Ads::GoogleAds::V12::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

