<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PagesHealthCheck\AltDomain;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PagesHealthCheck\Domain;

final readonly class PagesHealthCheck
{
    public const SCHEMA_JSON        = '{"title":"Pages Health Check Status","type":"object","properties":{"domain":{"type":"object","properties":{"host":{"type":"string"},"uri":{"type":"string"},"nameservers":{"type":"string"},"dns_resolves":{"type":"boolean"},"is_proxied":{"type":["boolean","null"]},"is_cloudflare_ip":{"type":["boolean","null"]},"is_fastly_ip":{"type":["boolean","null"]},"is_old_ip_address":{"type":["boolean","null"]},"is_a_record":{"type":["boolean","null"]},"has_cname_record":{"type":["boolean","null"]},"has_mx_records_present":{"type":["boolean","null"]},"is_valid_domain":{"type":"boolean"},"is_apex_domain":{"type":"boolean"},"should_be_a_record":{"type":["boolean","null"]},"is_cname_to_github_user_domain":{"type":["boolean","null"]},"is_cname_to_pages_dot_github_dot_com":{"type":["boolean","null"]},"is_cname_to_fastly":{"type":["boolean","null"]},"is_pointed_to_github_pages_ip":{"type":["boolean","null"]},"is_non_github_pages_ip_present":{"type":["boolean","null"]},"is_pages_domain":{"type":"boolean"},"is_served_by_pages":{"type":["boolean","null"]},"is_valid":{"type":"boolean"},"reason":{"type":["string","null"]},"responds_to_https":{"type":"boolean"},"enforces_https":{"type":"boolean"},"https_error":{"type":["string","null"]},"is_https_eligible":{"type":["boolean","null"]},"caa_error":{"type":["string","null"]}}},"alt_domain":{"type":["object","null"],"properties":{"host":{"type":"string"},"uri":{"type":"string"},"nameservers":{"type":"string"},"dns_resolves":{"type":"boolean"},"is_proxied":{"type":["boolean","null"]},"is_cloudflare_ip":{"type":["boolean","null"]},"is_fastly_ip":{"type":["boolean","null"]},"is_old_ip_address":{"type":["boolean","null"]},"is_a_record":{"type":["boolean","null"]},"has_cname_record":{"type":["boolean","null"]},"has_mx_records_present":{"type":["boolean","null"]},"is_valid_domain":{"type":"boolean"},"is_apex_domain":{"type":"boolean"},"should_be_a_record":{"type":["boolean","null"]},"is_cname_to_github_user_domain":{"type":["boolean","null"]},"is_cname_to_pages_dot_github_dot_com":{"type":["boolean","null"]},"is_cname_to_fastly":{"type":["boolean","null"]},"is_pointed_to_github_pages_ip":{"type":["boolean","null"]},"is_non_github_pages_ip_present":{"type":["boolean","null"]},"is_pages_domain":{"type":"boolean"},"is_served_by_pages":{"type":["boolean","null"]},"is_valid":{"type":"boolean"},"reason":{"type":["string","null"]},"responds_to_https":{"type":"boolean"},"enforces_https":{"type":"boolean"},"https_error":{"type":["string","null"]},"is_https_eligible":{"type":["boolean","null"]},"caa_error":{"type":["string","null"]}}}},"description":"Pages Health Check Status"}';
    public const SCHEMA_TITLE       = 'Pages Health Check Status';
    public const SCHEMA_DESCRIPTION = 'Pages Health Check Status';
    public ?Domain $domain;
    public ?AltDomain $alt_domain;

    public function __construct(Domain $domain, AltDomain $alt_domain)
    {
        $this->domain     = $domain;
        $this->alt_domain = $alt_domain;
    }
}
