<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseSettings;

final class Enterprise
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"private_mode":{"type":"boolean"},"public_pages":{"type":"boolean"},"subdomain_isolation":{"type":"boolean"},"signup_enabled":{"type":"boolean"},"github_hostname":{"type":"string"},"identicons_host":{"type":"string"},"http_proxy":{"type":["string","null"]},"auth_mode":{"type":"string"},"expire_sessions":{"type":"boolean"},"admin_password":{"type":["string","null"]},"configuration_id":{"type":"integer"},"configuration_run_count":{"type":"integer"},"avatar":{"type":"object","properties":{"enabled":{"type":"boolean"},"uri":{"type":"string"}}},"customer":{"type":"object","properties":{"name":{"type":"string"},"email":{"type":"string"},"uuid":{"type":"string"},"secret_key_data":{"type":"string"},"public_key_data":{"type":"string"}}},"license":{"type":"object","properties":{"seats":{"type":"integer"},"evaluation":{"type":"boolean"},"perpetual":{"type":"boolean"},"unlimited_seating":{"type":"boolean"},"support_key":{"type":"string"},"ssh_allowed":{"type":"boolean"},"cluster_support":{"type":"boolean"},"expire_at":{"type":"string"}}},"github_ssl":{"type":"object","properties":{"enabled":{"type":"boolean"},"cert":{"type":["string","null"]},"key":{"type":["string","null"]}}},"ldap":{"type":"object","properties":{"host":{"type":["string","null"]},"port":{"type":"integer"},"base":{"type":"array","items":{}},"uid":{"type":["string","null"]},"bind_dn":{"type":["string","null"]},"password":{"type":["string","null"]},"method":{"type":"string"},"search_strategy":{"type":"string"},"user_groups":{"type":"array","items":{}},"admin_group":{"type":["string","null"]},"virtual_attribute_enabled":{"type":"boolean"},"recursive_group_search":{"type":"boolean"},"posix_support":{"type":"boolean"},"user_sync_emails":{"type":"boolean"},"user_sync_keys":{"type":"boolean"},"user_sync_interval":{"type":"integer"},"team_sync_interval":{"type":"integer"},"sync_enabled":{"type":"boolean"},"reconciliation":{"type":"object","properties":{"user":{"type":["string","null"]},"org":{"type":["string","null"]}}},"profile":{"type":"object","properties":{"uid":{"type":"string"},"name":{"type":["string","null"]},"mail":{"type":["string","null"]},"key":{"type":["string","null"]}}}}},"cas":{"type":"object","properties":{"url":{"type":["string","null"]}}},"saml":{"type":"object","properties":{"sso_url":{"type":["string","null"]},"certificate":{"type":["string","null"]},"certificate_path":{"type":["string","null"]},"issuer":{"type":["string","null"]},"idp_initiated_sso":{"type":"boolean"},"disable_admin_demote":{"type":"boolean"}}},"github_oauth":{"type":"object","properties":{"client_id":{"type":"string"},"client_secret":{"type":"string"},"organization_name":{"type":"string"},"organization_team":{"type":"string"}}},"smtp":{"type":"object","properties":{"enabled":{"type":"boolean"},"address":{"type":"string"},"authentication":{"type":"string"},"port":{"type":"string"},"domain":{"type":"string"},"username":{"type":"string"},"user_name":{"type":"string"},"enable_starttls_auto":{"type":"boolean"},"password":{"type":"string"},"discard-to-noreply-address":{"type":"boolean"},"support_address":{"type":"string"},"support_address_type":{"type":"string"},"noreply_address":{"type":"string"}}},"ntp":{"type":"object","properties":{"primary_server":{"type":"string"},"secondary_server":{"type":"string"}}},"timezone":{"type":["string","null"]},"snmp":{"type":"object","properties":{"enabled":{"type":"boolean"},"community":{"type":"string"}}},"syslog":{"type":"object","properties":{"enabled":{"type":"boolean"},"server":{"type":["string","null"]},"protocol_name":{"type":"string"}}},"assets":{"type":["string","null"]},"pages":{"type":"object","properties":{"enabled":{"type":"boolean"}}},"collectd":{"type":"object","properties":{"enabled":{"type":"boolean"},"server":{"type":["string","null"]},"port":{"type":"integer"},"encryption":{"type":["string","null"]},"username":{"type":["string","null"]},"password":{"type":["string","null"]}}},"mapping":{"type":"object","properties":{"enabled":{"type":"boolean"},"tileserver":{"type":["string","null"]},"basemap":{"type":"string"},"token":{"type":["string","null"]}}},"load_balancer":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = 'EnterpriseSettings\\Enterprise';
    public const SCHEMA_DESCRIPTION = '';
    private bool $private_mode;
    private bool $public_pages;
    private bool $subdomain_isolation;
    private bool $signup_enabled;
    private string $github_hostname;
    private string $identicons_host;
    private $http_proxy;
    private string $auth_mode;
    private bool $expire_sessions;
    private $admin_password;
    private int $configuration_id;
    private int $configuration_run_count;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Avatar::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Avatar $avatar;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Customer::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Customer $customer;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\License::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\License $license;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\GithubSsl::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\GithubSsl $github_ssl;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Ldap::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Ldap $ldap;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Cas::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Cas $cas;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Saml::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Saml $saml;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\GithubOauth::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\GithubOauth $github_oauth;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Smtp::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Smtp $smtp;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Ntp::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Ntp $ntp;
    private $timezone;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Snmp::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Snmp $snmp;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Syslog::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Syslog $syslog;
    private $assets;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Pages::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Pages $pages;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Collectd::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Collectd $collectd;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Mapping::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Mapping $mapping;
    private $load_balancer;
    public function private_mode() : bool
    {
        return $this->private_mode;
    }
    public function public_pages() : bool
    {
        return $this->public_pages;
    }
    public function subdomain_isolation() : bool
    {
        return $this->subdomain_isolation;
    }
    public function signup_enabled() : bool
    {
        return $this->signup_enabled;
    }
    public function github_hostname() : string
    {
        return $this->github_hostname;
    }
    public function identicons_host() : string
    {
        return $this->identicons_host;
    }
    public function http_proxy()
    {
        return $this->http_proxy;
    }
    public function auth_mode() : string
    {
        return $this->auth_mode;
    }
    public function expire_sessions() : bool
    {
        return $this->expire_sessions;
    }
    public function admin_password()
    {
        return $this->admin_password;
    }
    public function configuration_id() : int
    {
        return $this->configuration_id;
    }
    public function configuration_run_count() : int
    {
        return $this->configuration_run_count;
    }
    public function avatar() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Avatar
    {
        return $this->avatar;
    }
    public function customer() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Customer
    {
        return $this->customer;
    }
    public function license() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\License
    {
        return $this->license;
    }
    public function github_ssl() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\GithubSsl
    {
        return $this->github_ssl;
    }
    public function ldap() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Ldap
    {
        return $this->ldap;
    }
    public function cas() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Cas
    {
        return $this->cas;
    }
    public function saml() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Saml
    {
        return $this->saml;
    }
    public function github_oauth() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\GithubOauth
    {
        return $this->github_oauth;
    }
    public function smtp() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Smtp
    {
        return $this->smtp;
    }
    public function ntp() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Ntp
    {
        return $this->ntp;
    }
    public function timezone()
    {
        return $this->timezone;
    }
    public function snmp() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Snmp
    {
        return $this->snmp;
    }
    public function syslog() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Syslog
    {
        return $this->syslog;
    }
    public function assets()
    {
        return $this->assets;
    }
    public function pages() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Pages
    {
        return $this->pages;
    }
    public function collectd() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Collectd
    {
        return $this->collectd;
    }
    public function mapping() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Enterprise\Mapping
    {
        return $this->mapping;
    }
    public function load_balancer()
    {
        return $this->load_balancer;
    }
}
