<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/enums/conversion_custom_variable_status.proto

namespace Google\Ads\GoogleAds\V8\Enums\ConversionCustomVariableStatusEnum;

use UnexpectedValueException;

/**
 * Possible statuses of a conversion custom variable.
 *
 * Protobuf type <code>google.ads.googleads.v8.enums.ConversionCustomVariableStatusEnum.ConversionCustomVariableStatus</code>
 */
class ConversionCustomVariableStatus
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
     * The conversion custom variable is pending activation and will not
     * accrue stats until set to ENABLED.
     * This status can't be used in CREATE and UPDATE requests.
     *
     * Generated from protobuf enum <code>ACTIVATION_NEEDED = 2;</code>
     */
    const ACTIVATION_NEEDED = 2;
    /**
     * The conversion custom variable is enabled and will accrue stats.
     *
     * Generated from protobuf enum <code>ENABLED = 3;</code>
     */
    const ENABLED = 3;
    /**
     * The conversion custom variable is paused and will not accrue stats
     * until set to ENABLED again.
     *
     * Generated from protobuf enum <code>PAUSED = 4;</code>
     */
    const PAUSED = 4;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ACTIVATION_NEEDED => 'ACTIVATION_NEEDED',
        self::ENABLED => 'ENABLED',
        self::PAUSED => 'PAUSED',
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
class_alias(ConversionCustomVariableStatus::class, \Google\Ads\GoogleAds\V8\Enums\ConversionCustomVariableStatusEnum_ConversionCustomVariableStatus::class);

