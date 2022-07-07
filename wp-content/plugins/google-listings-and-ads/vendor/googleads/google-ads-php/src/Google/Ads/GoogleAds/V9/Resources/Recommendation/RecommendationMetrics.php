<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V9\Resources\Recommendation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Weekly account performance metrics. For some recommendation types, these
 * are averaged over the past 90-day period and hence can be fractional.
 *
 * Generated from protobuf message <code>google.ads.googleads.v9.resources.Recommendation.RecommendationMetrics</code>
 */
class RecommendationMetrics extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Number of ad impressions.
     *
     * Generated from protobuf field <code>optional double impressions = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $impressions = null;
    /**
     * Output only. Number of ad clicks.
     *
     * Generated from protobuf field <code>optional double clicks = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $clicks = null;
    /**
     * Output only. Cost (in micros) for advertising, in the local currency for the account.
     *
     * Generated from protobuf field <code>optional int64 cost_micros = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $cost_micros = null;
    /**
     * Output only. Number of conversions.
     *
     * Generated from protobuf field <code>optional double conversions = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $conversions = null;
    /**
     * Output only. Number of video views for a video ad campaign.
     *
     * Generated from protobuf field <code>optional double video_views = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $video_views = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $impressions
     *           Output only. Number of ad impressions.
     *     @type float $clicks
     *           Output only. Number of ad clicks.
     *     @type int|string $cost_micros
     *           Output only. Cost (in micros) for advertising, in the local currency for the account.
     *     @type float $conversions
     *           Output only. Number of conversions.
     *     @type float $video_views
     *           Output only. Number of video views for a video ad campaign.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V9\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Number of ad impressions.
     *
     * Generated from protobuf field <code>optional double impressions = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return float
     */
    public function getImpressions()
    {
        return isset($this->impressions) ? $this->impressions : 0.0;
    }

    public function hasImpressions()
    {
        return isset($this->impressions);
    }

    public function clearImpressions()
    {
        unset($this->impressions);
    }

    /**
     * Output only. Number of ad impressions.
     *
     * Generated from protobuf field <code>optional double impressions = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param float $var
     * @return $this
     */
    public function setImpressions($var)
    {
        GPBUtil::checkDouble($var);
        $this->impressions = $var;

        return $this;
    }

    /**
     * Output only. Number of ad clicks.
     *
     * Generated from protobuf field <code>optional double clicks = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return float
     */
    public function getClicks()
    {
        return isset($this->clicks) ? $this->clicks : 0.0;
    }

    public function hasClicks()
    {
        return isset($this->clicks);
    }

    public function clearClicks()
    {
        unset($this->clicks);
    }

    /**
     * Output only. Number of ad clicks.
     *
     * Generated from protobuf field <code>optional double clicks = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param float $var
     * @return $this
     */
    public function setClicks($var)
    {
        GPBUtil::checkDouble($var);
        $this->clicks = $var;

        return $this;
    }

    /**
     * Output only. Cost (in micros) for advertising, in the local currency for the account.
     *
     * Generated from protobuf field <code>optional int64 cost_micros = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getCostMicros()
    {
        return isset($this->cost_micros) ? $this->cost_micros : 0;
    }

    public function hasCostMicros()
    {
        return isset($this->cost_micros);
    }

    public function clearCostMicros()
    {
        unset($this->cost_micros);
    }

    /**
     * Output only. Cost (in micros) for advertising, in the local currency for the account.
     *
     * Generated from protobuf field <code>optional int64 cost_micros = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCostMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->cost_micros = $var;

        return $this;
    }

    /**
     * Output only. Number of conversions.
     *
     * Generated from protobuf field <code>optional double conversions = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return float
     */
    public function getConversions()
    {
        return isset($this->conversions) ? $this->conversions : 0.0;
    }

    public function hasConversions()
    {
        return isset($this->conversions);
    }

    public function clearConversions()
    {
        unset($this->conversions);
    }

    /**
     * Output only. Number of conversions.
     *
     * Generated from protobuf field <code>optional double conversions = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param float $var
     * @return $this
     */
    public function setConversions($var)
    {
        GPBUtil::checkDouble($var);
        $this->conversions = $var;

        return $this;
    }

    /**
     * Output only. Number of video views for a video ad campaign.
     *
     * Generated from protobuf field <code>optional double video_views = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return float
     */
    public function getVideoViews()
    {
        return isset($this->video_views) ? $this->video_views : 0.0;
    }

    public function hasVideoViews()
    {
        return isset($this->video_views);
    }

    public function clearVideoViews()
    {
        unset($this->video_views);
    }

    /**
     * Output only. Number of video views for a video ad campaign.
     *
     * Generated from protobuf field <code>optional double video_views = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param float $var
     * @return $this
     */
    public function setVideoViews($var)
    {
        GPBUtil::checkDouble($var);
        $this->video_views = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RecommendationMetrics::class, \Google\Ads\GoogleAds\V9\Resources\Recommendation_RecommendationMetrics::class);

