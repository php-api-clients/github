<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class PagesHealthCheck
{
    public const SCHEMA_JSON         = '{
    "title": "Pages Health Check Status",
    "type": "object",
    "properties": {
        "domain": {
            "type": "object",
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
        },
        "alt_domain": {
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
        }
    },
    "description": "Pages Health Check Status"
}';
    public const SCHEMA_TITLE        = 'Pages Health Check Status';
    public const SCHEMA_DESCRIPTION  = 'Pages Health Check Status';
    public const SCHEMA_EXAMPLE_DATA = '{
    "domain": {
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
    },
    "alt_domain": {
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
    }
}';

    public function __construct(public Schema\PagesHealthCheck\Domain|null $domain, #[MapFrom('alt_domain')]
    public Schema\PagesHealthCheck\AltDomain|null $altDomain,)
    {
    }
}
