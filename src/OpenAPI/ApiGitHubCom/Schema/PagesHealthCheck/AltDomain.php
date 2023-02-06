<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PagesHealthCheck;

final class AltDomain
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"host":{"type":"string"},"uri":{"type":"string"},"nameservers":{"type":"string"},"dns_resolves":{"type":"boolean"},"is_proxied":{"type":["boolean","null"]},"is_cloudflare_ip":{"type":["boolean","null"]},"is_fastly_ip":{"type":["boolean","null"]},"is_old_ip_address":{"type":["boolean","null"]},"is_a_record":{"type":["boolean","null"]},"has_cname_record":{"type":["boolean","null"]},"has_mx_records_present":{"type":["boolean","null"]},"is_valid_domain":{"type":"boolean"},"is_apex_domain":{"type":"boolean"},"should_be_a_record":{"type":["boolean","null"]},"is_cname_to_github_user_domain":{"type":["boolean","null"]},"is_cname_to_pages_dot_github_dot_com":{"type":["boolean","null"]},"is_cname_to_fastly":{"type":["boolean","null"]},"is_pointed_to_github_pages_ip":{"type":["boolean","null"]},"is_non_github_pages_ip_present":{"type":["boolean","null"]},"is_pages_domain":{"type":"boolean"},"is_served_by_pages":{"type":["boolean","null"]},"is_valid":{"type":"boolean"},"reason":{"type":["string","null"]},"responds_to_https":{"type":"boolean"},"enforces_https":{"type":"boolean"},"https_error":{"type":["string","null"]},"is_https_eligible":{"type":["boolean","null"]},"caa_error":{"type":["string","null"]}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'PagesHealthCheck\\AltDomain';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $host;
    public readonly string $uri;
    public readonly string $nameservers;
    public readonly bool $dns_resolves;
    public readonly ?bool $is_proxied;
    public readonly ?bool $is_cloudflare_ip;
    public readonly ?bool $is_fastly_ip;
    public readonly ?bool $is_old_ip_address;
    public readonly ?bool $is_a_record;
    public readonly ?bool $has_cname_record;
    public readonly ?bool $has_mx_records_present;
    public readonly bool $is_valid_domain;
    public readonly bool $is_apex_domain;
    public readonly ?bool $should_be_a_record;
    public readonly ?bool $is_cname_to_github_user_domain;
    public readonly ?bool $is_cname_to_pages_dot_github_dot_com;
    public readonly ?bool $is_cname_to_fastly;
    public readonly ?bool $is_pointed_to_github_pages_ip;
    public readonly ?bool $is_non_github_pages_ip_present;
    public readonly bool $is_pages_domain;
    public readonly ?bool $is_served_by_pages;
    public readonly bool $is_valid;
    public readonly ?string $reason;
    public readonly bool $responds_to_https;
    public readonly bool $enforces_https;
    public readonly ?string $https_error;
    public readonly ?bool $is_https_eligible;
    public readonly ?string $caa_error;
    public function __construct(string $host, string $uri, string $nameservers, bool $dns_resolves, bool $is_proxied, bool $is_cloudflare_ip, bool $is_fastly_ip, bool $is_old_ip_address, bool $is_a_record, bool $has_cname_record, bool $has_mx_records_present, bool $is_valid_domain, bool $is_apex_domain, bool $should_be_a_record, bool $is_cname_to_github_user_domain, bool $is_cname_to_pages_dot_github_dot_com, bool $is_cname_to_fastly, bool $is_pointed_to_github_pages_ip, bool $is_non_github_pages_ip_present, bool $is_pages_domain, bool $is_served_by_pages, bool $is_valid, string $reason, bool $responds_to_https, bool $enforces_https, string $https_error, bool $is_https_eligible, string $caa_error)
    {
        $this->host = $host;
        $this->uri = $uri;
        $this->nameservers = $nameservers;
        $this->dns_resolves = $dns_resolves;
        $this->is_proxied = $is_proxied;
        $this->is_cloudflare_ip = $is_cloudflare_ip;
        $this->is_fastly_ip = $is_fastly_ip;
        $this->is_old_ip_address = $is_old_ip_address;
        $this->is_a_record = $is_a_record;
        $this->has_cname_record = $has_cname_record;
        $this->has_mx_records_present = $has_mx_records_present;
        $this->is_valid_domain = $is_valid_domain;
        $this->is_apex_domain = $is_apex_domain;
        $this->should_be_a_record = $should_be_a_record;
        $this->is_cname_to_github_user_domain = $is_cname_to_github_user_domain;
        $this->is_cname_to_pages_dot_github_dot_com = $is_cname_to_pages_dot_github_dot_com;
        $this->is_cname_to_fastly = $is_cname_to_fastly;
        $this->is_pointed_to_github_pages_ip = $is_pointed_to_github_pages_ip;
        $this->is_non_github_pages_ip_present = $is_non_github_pages_ip_present;
        $this->is_pages_domain = $is_pages_domain;
        $this->is_served_by_pages = $is_served_by_pages;
        $this->is_valid = $is_valid;
        $this->reason = $reason;
        $this->responds_to_https = $responds_to_https;
        $this->enforces_https = $enforces_https;
        $this->https_error = $https_error;
        $this->is_https_eligible = $is_https_eligible;
        $this->caa_error = $caa_error;
    }
}
