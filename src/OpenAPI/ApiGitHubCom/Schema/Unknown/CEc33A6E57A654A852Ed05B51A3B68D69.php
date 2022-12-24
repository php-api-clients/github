<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CEc33A6E57A654A852Ed05B51A3B68D69
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"host":{"type":"string"},"uri":{"type":"string"},"nameservers":{"type":"string"},"dns_resolves":{"type":"boolean"},"is_proxied":{"type":["boolean","null"]},"is_cloudflare_ip":{"type":["boolean","null"]},"is_fastly_ip":{"type":["boolean","null"]},"is_old_ip_address":{"type":["boolean","null"]},"is_a_record":{"type":["boolean","null"]},"has_cname_record":{"type":["boolean","null"]},"has_mx_records_present":{"type":["boolean","null"]},"is_valid_domain":{"type":"boolean"},"is_apex_domain":{"type":"boolean"},"should_be_a_record":{"type":["boolean","null"]},"is_cname_to_github_user_domain":{"type":["boolean","null"]},"is_cname_to_pages_dot_github_dot_com":{"type":["boolean","null"]},"is_cname_to_fastly":{"type":["boolean","null"]},"is_pointed_to_github_pages_ip":{"type":["boolean","null"]},"is_non_github_pages_ip_present":{"type":["boolean","null"]},"is_pages_domain":{"type":"boolean"},"is_served_by_pages":{"type":["boolean","null"]},"is_valid":{"type":"boolean"},"reason":{"type":["string","null"]},"responds_to_https":{"type":"boolean"},"enforces_https":{"type":"boolean"},"https_error":{"type":["string","null"]},"is_https_eligible":{"type":["boolean","null"]},"caa_error":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = 'c_ec33a6e57a654a852ed05b51a3b68d69';
    public const SCHEMA_DESCRIPTION = '';
    private string $host;
    private string $uri;
    private string $nameservers;
    private bool $dns_resolves;
    private $is_proxied;
    private $is_cloudflare_ip;
    private $is_fastly_ip;
    private $is_old_ip_address;
    private $is_a_record;
    private $has_cname_record;
    private $has_mx_records_present;
    private bool $is_valid_domain;
    private bool $is_apex_domain;
    private $should_be_a_record;
    private $is_cname_to_github_user_domain;
    private $is_cname_to_pages_dot_github_dot_com;
    private $is_cname_to_fastly;
    private $is_pointed_to_github_pages_ip;
    private $is_non_github_pages_ip_present;
    private bool $is_pages_domain;
    private $is_served_by_pages;
    private bool $is_valid;
    private $reason;
    private bool $responds_to_https;
    private bool $enforces_https;
    private $https_error;
    private $is_https_eligible;
    private $caa_error;
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
    public function is_proxied()
    {
        return $this->is_proxied;
    }
    public function is_cloudflare_ip()
    {
        return $this->is_cloudflare_ip;
    }
    public function is_fastly_ip()
    {
        return $this->is_fastly_ip;
    }
    public function is_old_ip_address()
    {
        return $this->is_old_ip_address;
    }
    public function is_a_record()
    {
        return $this->is_a_record;
    }
    public function has_cname_record()
    {
        return $this->has_cname_record;
    }
    public function has_mx_records_present()
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
    public function should_be_a_record()
    {
        return $this->should_be_a_record;
    }
    public function is_cname_to_github_user_domain()
    {
        return $this->is_cname_to_github_user_domain;
    }
    public function is_cname_to_pages_dot_github_dot_com()
    {
        return $this->is_cname_to_pages_dot_github_dot_com;
    }
    public function is_cname_to_fastly()
    {
        return $this->is_cname_to_fastly;
    }
    public function is_pointed_to_github_pages_ip()
    {
        return $this->is_pointed_to_github_pages_ip;
    }
    public function is_non_github_pages_ip_present()
    {
        return $this->is_non_github_pages_ip_present;
    }
    public function is_pages_domain() : bool
    {
        return $this->is_pages_domain;
    }
    public function is_served_by_pages()
    {
        return $this->is_served_by_pages;
    }
    public function is_valid() : bool
    {
        return $this->is_valid;
    }
    public function reason()
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
    public function https_error()
    {
        return $this->https_error;
    }
    public function is_https_eligible()
    {
        return $this->is_https_eligible;
    }
    public function caa_error()
    {
        return $this->caa_error;
    }
}
