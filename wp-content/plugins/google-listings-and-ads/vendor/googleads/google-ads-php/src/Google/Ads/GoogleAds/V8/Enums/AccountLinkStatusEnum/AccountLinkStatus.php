<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/enums/account_link_status.proto

namespace Google\Ads\GoogleAds\V8\Enums\AccountLinkStatusEnum;

use UnexpectedValueException;

/**
 * Describes the possible statuses for a link between a Google Ads customer
 * and another account.
 *
 * Protobuf type <code>google.ads.googleads.v8.enums.AccountLinkStatusEnum.AccountLinkStatus</code>
 */
class AccountLinkStatus
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
     * The link is enabled.
     *
     * Generated from protobuf enum <code>ENABLED = 2;</code>
     */
    const ENABLED = 2;
    /**
     * The link is removed/disabled.
     *
     * Generated from protobuf enum <code>REMOVED = 3;</code>
     */
    const REMOVED = 3;
    /**
     * The link to the other account has been requested. A user on the other
     * account may now approve the link by setting the status to ENABLED.
     *
     * Generated from protobuf enum <code>REQUESTED = 4;</code>
     */
    const REQUESTED = 4;
    /**
     * This link has been requested by a user on the other account. It may be
     * approved by a user on this account by setting the status to ENABLED.
     *
     * Generated from protobuf enum <code>PENDING_APPROVAL = 5;</code>
     */
    const PENDING_APPROVAL = 5;
    /**
     * The link is rejected by the approver.
     *
     * Generated from protobuf enum <code>REJECTED = 6;</code>
     */
    const REJECTED = 6;
    /**
     * The link is revoked by the user who requested the link.
     *
     * Generated from protobuf enum <code>REVOKED = 7;</code>
     */
    const REVOKED = 7;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ENABLED => 'ENABLED',
        self::REMOVED => 'REMOVED',
        self::REQUESTED => 'REQUESTED',
        self::PENDING_APPROVAL => 'PENDING_APPROVAL',
        self::REJECTED => 'REJECTED',
        self::REVOKED => 'REVOKED',
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
class_alias(AccountLinkStatus::class, \Google\Ads\GoogleAds\V8\Enums\AccountLinkStatusEnum_AccountLinkStatus::class);

