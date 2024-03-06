<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/resources/audience.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V13\Resources;

class Audience
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
�
0google/ads/googleads/v13/enums/gender_type.protogoogle.ads.googleads.v13.enums"d
GenderTypeEnum"R

GenderType
UNSPECIFIED 
UNKNOWN
MALE


FEMALE
UNDETERMINEDB�
"com.google.ads.googleads.v13.enumsBGenderTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
6google/ads/googleads/v13/enums/income_range_type.protogoogle.ads.googleads.v13.enums"�
IncomeRangeTypeEnum"�
IncomeRangeType
UNSPECIFIED 
UNKNOWN
INCOME_RANGE_0_50��
INCOME_RANGE_50_60��
INCOME_RANGE_60_70��
INCOME_RANGE_70_80��
INCOME_RANGE_80_90��
INCOME_RANGE_90_UP��
INCOME_RANGE_UNDETERMINED��B�
"com.google.ads.googleads.v13.enumsBIncomeRangeTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
9google/ads/googleads/v13/enums/parental_status_type.protogoogle.ads.googleads.v13.enums"
ParentalStatusTypeEnum"e
ParentalStatusType
UNSPECIFIED 
UNKNOWN
PARENT�
NOT_A_PARENT�
UNDETERMINED�B�
"com.google.ads.googleads.v13.enumsBParentalStatusTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
/google/ads/googleads/v13/common/audiences.protogoogle.ads.googleads.v13.common6google/ads/googleads/v13/enums/income_range_type.proto9google/ads/googleads/v13/enums/parental_status_type.proto"�
AudienceDimension<
age (2-.google.ads.googleads.v13.common.AgeDimensionH B
gender (20.google.ads.googleads.v13.common.GenderDimensionH U
household_income (29.google.ads.googleads.v13.common.HouseholdIncomeDimensionH S
parental_status (28.google.ads.googleads.v13.common.ParentalStatusDimensionH V
audience_segments (29.google.ads.googleads.v13.common.AudienceSegmentDimensionH B
	dimension"c
AudienceExclusionDimensionE

exclusions (21.google.ads.googleads.v13.common.ExclusionSegment"d
ExclusionSegmentE
	user_list (20.google.ads.googleads.v13.common.UserListSegmentH B	
segment"�
AgeDimension?

age_ranges (2+.google.ads.googleads.v13.common.AgeSegment!
include_undetermined (H �B
_include_undetermined"P

AgeSegment
min_age (H �
max_age (H�B

_min_ageB

_max_age"�
GenderDimensionJ
genders (29.google.ads.googleads.v13.enums.GenderTypeEnum.GenderType!
include_undetermined (H �B
_include_undetermined"�
HouseholdIncomeDimensionZ
income_ranges (2C.google.ads.googleads.v13.enums.IncomeRangeTypeEnum.IncomeRangeType!
include_undetermined (H �B
_include_undetermined"�
ParentalStatusDimensiond
parental_statuses (2I.google.ads.googleads.v13.enums.ParentalStatusTypeEnum.ParentalStatusType!
include_undetermined (H �B
_include_undetermined"^
AudienceSegmentDimensionB
segments (20.google.ads.googleads.v13.common.AudienceSegment"�
AudienceSegmentE
	user_list (20.google.ads.googleads.v13.common.UserListSegmentH M
user_interest (24.google.ads.googleads.v13.common.UserInterestSegmentH G

life_event (21.google.ads.googleads.v13.common.LifeEventSegmentH [
detailed_demographic (2;.google.ads.googleads.v13.common.DetailedDemographicSegmentH Q
custom_audience (26.google.ads.googleads.v13.common.CustomAudienceSegmentH B	
segment"7
UserListSegment
	user_list (	H �B

_user_list"U
UserInterestSegment#
user_interest_category (	H �B
_user_interest_category":
LifeEventSegment

life_event (	H �B
_life_event"X
DetailedDemographicSegment!
detailed_demographic (	H �B
_detailed_demographic"I
CustomAudienceSegment
custom_audience (	H �B
_custom_audienceB�
#com.google.ads.googleads.v13.commonBAudiencesProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v13/common;common�GAA�Google.Ads.GoogleAds.V13.Common�Google\\Ads\\GoogleAds\\V13\\Common�#Google::Ads::GoogleAds::V13::Commonbproto3
�
4google/ads/googleads/v13/enums/audience_status.protogoogle.ads.googleads.v13.enums"^
AudienceStatusEnum"H
AudienceStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
"com.google.ads.googleads.v13.enumsBAudienceStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
1google/ads/googleads/v13/resources/audience.proto"google.ads.googleads.v13.resources4google/ads/googleads/v13/enums/audience_status.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
Audience@
resource_name (	B)�A�A#
!googleads.googleapis.com/Audience
id (B�AV
status (2A.google.ads.googleads.v13.enums.AudienceStatusEnum.AudienceStatusB�A
name (	B�A
description (	F

dimensions (22.google.ads.googleads.v13.common.AudienceDimensionX
exclusion_dimension (2;.google.ads.googleads.v13.common.AudienceExclusionDimension:W�AT
!googleads.googleapis.com/Audience/customers/{customer_id}/audiences/{audience_id}B�
&com.google.ads.googleads.v13.resourcesBAudienceProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v13/resources;resources�GAA�"Google.Ads.GoogleAds.V13.Resources�"Google\\Ads\\GoogleAds\\V13\\Resources�&Google::Ads::GoogleAds::V13::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

