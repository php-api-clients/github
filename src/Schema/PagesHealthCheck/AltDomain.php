<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\PagesHealthCheck;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class AltDomain
{
    public const SCHEMA_JSON         = '{
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "host": {
            "type": "string"
        },
        "uri": {
            "type": "string"
        },
        "nameservers": {
            "type": "string"
        },
        "dns_resolves": {
            "type": "boolean"
        },
        "is_proxied": {
            "type": [
                "boolean",
                "null"
            ]
        },
        "is_cloudflare_ip": {
            "type": [
                "boolean",
                "null"
            ]
        },
        "is_fastly_ip": {
            "type": [
                "boolean",
                "null"
            ]
        },
        "is_old_ip_address": {
            "type": [
                "boolean",
                "null"
            ]
        },
        "is_a_record": {
            "type": [
                "boolean",
                "null"
            ]
        },
        "has_cname_record": {
            "type": [
                "boolean",
                "null"
            ]
        },
        "has_mx_records_present": {
            "type": [
                "boolean",
                "null"
            ]
        },
        "is_valid_domain": {
            "type": "boolean"
        },
        "is_apex_domain": {
            "type": "boolean"
        },
        "should_be_a_record": {
            "type": [
                "boolean",
                "null"
            ]
        },
        "is_cname_to_github_user_domain": {
            "type": [
                "boolean",
                "null"
            ]
        },
        "is_cname_to_pages_dot_github_dot_com": {
            "type": [
                "boolean",
                "null"
            ]
        },
        "is_cname_to_fastly": {
            "type": [
                "boolean",
                "null"
            ]
        },
        "is_pointed_to_github_pages_ip": {
            "type": [
                "boolean",
                "null"
            ]
        },
        "is_non_github_pages_ip_present": {
            "type": [
                "boolean",
                "null"
            ]
        },
        "is_pages_domain": {
            "type": "boolean"
        },
        "is_served_by_pages": {
            "type": [
                "boolean",
                "null"
            ]
        },
        "is_valid": {
            "type": "boolean"
        },
        "reason": {
            "type": [
                "string",
                "null"
            ]
        },
        "responds_to_https": {
            "type": "boolean"
        },
        "enforces_https": {
            "type": "boolean"
        },
        "https_error": {
            "type": [
                "string",
                "null"
            ]
        },
        "is_https_eligible": {
            "type": [
                "boolean",
                "null"
            ]
        },
        "caa_error": {
            "type": [
                "string",
                "null"
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "host": "generated",
    "uri": "generated",
    "nameservers": "generated",
    "dns_resolves": false,
    "is_proxied": false,
    "is_cloudflare_ip": false,
    "is_fastly_ip": false,
    "is_old_ip_address": false,
    "is_a_record": false,
    "has_cname_record": false,
    "has_mx_records_present": false,
    "is_valid_domain": false,
    "is_apex_domain": false,
    "should_be_a_record": false,
    "is_cname_to_github_user_domain": false,
    "is_cname_to_pages_dot_github_dot_com": false,
    "is_cname_to_fastly": false,
    "is_pointed_to_github_pages_ip": false,
    "is_non_github_pages_ip_present": false,
    "is_pages_domain": false,
    "is_served_by_pages": false,
    "is_valid": false,
    "reason": "generated",
    "responds_to_https": false,
    "enforces_https": false,
    "https_error": "generated",
    "is_https_eligible": false,
    "caa_error": "generated"
}';

    public function __construct(public string|null $host, public string|null $uri, public string|null $nameservers, #[MapFrom('dns_resolves')]
    public bool|null $dnsResolves, #[MapFrom('is_proxied')]
    public bool|null $isProxied, #[MapFrom('is_cloudflare_ip')]
    public bool|null $isCloudflareIp, #[MapFrom('is_fastly_ip')]
    public bool|null $isFastlyIp, #[MapFrom('is_old_ip_address')]
    public bool|null $isOldIpAddress, #[MapFrom('is_a_record')]
    public bool|null $isARecord, #[MapFrom('has_cname_record')]
    public bool|null $hasCnameRecord, #[MapFrom('has_mx_records_present')]
    public bool|null $hasMxRecordsPresent, #[MapFrom('is_valid_domain')]
    public bool|null $isValidDomain, #[MapFrom('is_apex_domain')]
    public bool|null $isApexDomain, #[MapFrom('should_be_a_record')]
    public bool|null $shouldBeARecord, #[MapFrom('is_cname_to_github_user_domain')]
    public bool|null $isCnameToGithubUserDomain, #[MapFrom('is_cname_to_pages_dot_github_dot_com')]
    public bool|null $isCnameToPagesDotGithubDotCom, #[MapFrom('is_cname_to_fastly')]
    public bool|null $isCnameToFastly, #[MapFrom('is_pointed_to_github_pages_ip')]
    public bool|null $isPointedToGithubPagesIp, #[MapFrom('is_non_github_pages_ip_present')]
    public bool|null $isNonGithubPagesIpPresent, #[MapFrom('is_pages_domain')]
    public bool|null $isPagesDomain, #[MapFrom('is_served_by_pages')]
    public bool|null $isServedByPages, #[MapFrom('is_valid')]
    public bool|null $isValid, public string|null $reason, #[MapFrom('responds_to_https')]
    public bool|null $respondsToHttps, #[MapFrom('enforces_https')]
    public bool|null $enforcesHttps, #[MapFrom('https_error')]
    public string|null $httpsError, #[MapFrom('is_https_eligible')]
    public bool|null $isHttpsEligible, #[MapFrom('caa_error')]
    public string|null $caaError,)
    {
    }
}
