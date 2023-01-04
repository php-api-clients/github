<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PagesHealthCheck;

final class Domain
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"host":{"type":"string"},"uri":{"type":"string"},"nameservers":{"type":"string"},"dns_resolves":{"type":"boolean"},"is_proxied":{"type":["boolean","null"]},"is_cloudflare_ip":{"type":["boolean","null"]},"is_fastly_ip":{"type":["boolean","null"]},"is_old_ip_address":{"type":["boolean","null"]},"is_a_record":{"type":["boolean","null"]},"has_cname_record":{"type":["boolean","null"]},"has_mx_records_present":{"type":["boolean","null"]},"is_valid_domain":{"type":"boolean"},"is_apex_domain":{"type":"boolean"},"should_be_a_record":{"type":["boolean","null"]},"is_cname_to_github_user_domain":{"type":["boolean","null"]},"is_cname_to_pages_dot_github_dot_com":{"type":["boolean","null"]},"is_cname_to_fastly":{"type":["boolean","null"]},"is_pointed_to_github_pages_ip":{"type":["boolean","null"]},"is_non_github_pages_ip_present":{"type":["boolean","null"]},"is_pages_domain":{"type":"boolean"},"is_served_by_pages":{"type":["boolean","null"]},"is_valid":{"type":"boolean"},"reason":{"type":["string","null"]},"responds_to_https":{"type":"boolean"},"enforces_https":{"type":"boolean"},"https_error":{"type":["string","null"]},"is_https_eligible":{"type":["boolean","null"]},"caa_error":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = 'PagesHealthCheck\\Domain';
    public const SCHEMA_DESCRIPTION = '';
    private string $host;
    private string $uri;
    private string $nameservers;
    private bool $dns_resolves;
    private ?bool $is_proxied;
    private ?bool $is_cloudflare_ip;
    private ?bool $is_fastly_ip;
    private ?bool $is_old_ip_address;
    private ?bool $is_a_record;
    private ?bool $has_cname_record;
    private ?bool $has_mx_records_present;
    private bool $is_valid_domain;
    private bool $is_apex_domain;
    private ?bool $should_be_a_record;
    private ?bool $is_cname_to_github_user_domain;
    private ?bool $is_cname_to_pages_dot_github_dot_com;
    private ?bool $is_cname_to_fastly;
    private ?bool $is_pointed_to_github_pages_ip;
    private ?bool $is_non_github_pages_ip_present;
    private bool $is_pages_domain;
    private ?bool $is_served_by_pages;
    private bool $is_valid;
    private ?string $reason;
    private bool $responds_to_https;
    private bool $enforces_https;
    private ?string $https_error;
    private ?bool $is_https_eligible;
    private ?string $caa_error;
    public function host() : string
    {
        return $this->host;
    }
    public function uri() : string
    {
        return $this->uri;
    }
    public function nameservers() : string
    {
        return $this->nameservers;
    }
    public function dns_resolves() : bool
    {
        return $this->dns_resolves;
    }
    public function is_proxied() : ?bool
    {
        return $this->is_proxied;
    }
    public function is_cloudflare_ip() : ?bool
    {
        return $this->is_cloudflare_ip;
    }
    public function is_fastly_ip() : ?bool
    {
        return $this->is_fastly_ip;
    }
    public function is_old_ip_address() : ?bool
    {
        return $this->is_old_ip_address;
    }
    public function is_a_record() : ?bool
    {
        return $this->is_a_record;
    }
    public function has_cname_record() : ?bool
    {
        return $this->has_cname_record;
    }
    public function has_mx_records_present() : ?bool
    {
        return $this->has_mx_records_present;
    }
    public function is_valid_domain() : bool
    {
        return $this->is_valid_domain;
    }
    public function is_apex_domain() : bool
    {
        return $this->is_apex_domain;
    }
    public function should_be_a_record() : ?bool
    {
        return $this->should_be_a_record;
    }
    public function is_cname_to_github_user_domain() : ?bool
    {
        return $this->is_cname_to_github_user_domain;
    }
    public function is_cname_to_pages_dot_github_dot_com() : ?bool
    {
        return $this->is_cname_to_pages_dot_github_dot_com;
    }
    public function is_cname_to_fastly() : ?bool
    {
        return $this->is_cname_to_fastly;
    }
    public function is_pointed_to_github_pages_ip() : ?bool
    {
        return $this->is_pointed_to_github_pages_ip;
    }
    public function is_non_github_pages_ip_present() : ?bool
    {
        return $this->is_non_github_pages_ip_present;
    }
    public function is_pages_domain() : bool
    {
        return $this->is_pages_domain;
    }
    public function is_served_by_pages() : ?bool
    {
        return $this->is_served_by_pages;
    }
    public function is_valid() : bool
    {
        return $this->is_valid;
    }
    public function reason() : ?string
    {
        return $this->reason;
    }
    public function responds_to_https() : bool
    {
        return $this->responds_to_https;
    }
    public function enforces_https() : bool
    {
        return $this->enforces_https;
    }
    public function https_error() : ?string
    {
        return $this->https_error;
    }
    public function is_https_eligible() : ?bool
    {
        return $this->is_https_eligible;
    }
    public function caa_error() : ?string
    {
        return $this->caa_error;
    }
}
