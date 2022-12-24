<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CD59Cbce9D9A10620Eeadbcc7Df43Da03
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"private_mode":{"type":"boolean"},"public_pages":{"type":"boolean"},"subdomain_isolation":{"type":"boolean"},"signup_enabled":{"type":"boolean"},"github_hostname":{"type":"string"},"identicons_host":{"type":"string"},"http_proxy":{"type":["string","null"]},"auth_mode":{"type":"string"},"expire_sessions":{"type":"boolean"},"admin_password":{"type":["string","null"]},"configuration_id":{"type":"integer"},"configuration_run_count":{"type":"integer"},"avatar":{"type":"object","properties":{"enabled":{"type":"boolean"},"uri":{"type":"string"}}},"customer":{"type":"object","properties":{"name":{"type":"string"},"email":{"type":"string"},"uuid":{"type":"string"},"secret_key_data":{"type":"string"},"public_key_data":{"type":"string"}}},"license":{"type":"object","properties":{"seats":{"type":"integer"},"evaluation":{"type":"boolean"},"perpetual":{"type":"boolean"},"unlimited_seating":{"type":"boolean"},"support_key":{"type":"string"},"ssh_allowed":{"type":"boolean"},"cluster_support":{"type":"boolean"},"expire_at":{"type":"string"}}},"github_ssl":{"type":"object","properties":{"enabled":{"type":"boolean"},"cert":{"type":["string","null"]},"key":{"type":["string","null"]}}},"ldap":{"type":"object","properties":{"host":{"type":["string","null"]},"port":{"type":"integer"},"base":{"type":"array","items":{}},"uid":{"type":["string","null"]},"bind_dn":{"type":["string","null"]},"password":{"type":["string","null"]},"method":{"type":"string"},"search_strategy":{"type":"string"},"user_groups":{"type":"array","items":{}},"admin_group":{"type":["string","null"]},"virtual_attribute_enabled":{"type":"boolean"},"recursive_group_search":{"type":"boolean"},"posix_support":{"type":"boolean"},"user_sync_emails":{"type":"boolean"},"user_sync_keys":{"type":"boolean"},"user_sync_interval":{"type":"integer"},"team_sync_interval":{"type":"integer"},"sync_enabled":{"type":"boolean"},"reconciliation":{"type":"object","properties":{"user":{"type":["string","null"]},"org":{"type":["string","null"]}}},"profile":{"type":"object","properties":{"uid":{"type":"string"},"name":{"type":["string","null"]},"mail":{"type":["string","null"]},"key":{"type":["string","null"]}}}}},"cas":{"type":"object","properties":{"url":{"type":["string","null"]}}},"saml":{"type":"object","properties":{"sso_url":{"type":["string","null"]},"certificate":{"type":["string","null"]},"certificate_path":{"type":["string","null"]},"issuer":{"type":["string","null"]},"idp_initiated_sso":{"type":"boolean"},"disable_admin_demote":{"type":"boolean"}}},"github_oauth":{"type":"object","properties":{"client_id":{"type":"string"},"client_secret":{"type":"string"},"organization_name":{"type":"string"},"organization_team":{"type":"string"}}},"smtp":{"type":"object","properties":{"enabled":{"type":"boolean"},"address":{"type":"string"},"authentication":{"type":"string"},"port":{"type":"string"},"domain":{"type":"string"},"username":{"type":"string"},"user_name":{"type":"string"},"enable_starttls_auto":{"type":"boolean"},"password":{"type":"string"},"discard-to-noreply-address":{"type":"boolean"},"support_address":{"type":"string"},"support_address_type":{"type":"string"},"noreply_address":{"type":"string"}}},"ntp":{"type":"object","properties":{"primary_server":{"type":"string"},"secondary_server":{"type":"string"}}},"timezone":{"type":["string","null"]},"snmp":{"type":"object","properties":{"enabled":{"type":"boolean"},"community":{"type":"string"}}},"syslog":{"type":"object","properties":{"enabled":{"type":"boolean"},"server":{"type":["string","null"]},"protocol_name":{"type":"string"}}},"assets":{"type":["string","null"]},"pages":{"type":"object","properties":{"enabled":{"type":"boolean"}}},"collectd":{"type":"object","properties":{"enabled":{"type":"boolean"},"server":{"type":["string","null"]},"port":{"type":"integer"},"encryption":{"type":["string","null"]},"username":{"type":["string","null"]},"password":{"type":["string","null"]}}},"mapping":{"type":"object","properties":{"enabled":{"type":"boolean"},"tileserver":{"type":["string","null"]},"basemap":{"type":"string"},"token":{"type":["string","null"]}}},"load_balancer":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = 'c_d59cbce9d9a10620eeadbcc7df43da03';
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
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5D631Edfbcc1E5F162A19183Bc9A2F0A::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5D631Edfbcc1E5F162A19183Bc9A2F0A $avatar;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C2A4Ae107E5E90187C4575Fddde6Ed7B8::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C2A4Ae107E5E90187C4575Fddde6Ed7B8 $customer;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CD93E79B72F629C2Ff32Da09E878D2614::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CD93E79B72F629C2Ff32Da09E878D2614 $license;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C77Ed2F96D25Ee7Bc724022F8861Cb1F9::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C77Ed2F96D25Ee7Bc724022F8861Cb1F9 $github_ssl;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C4F41F8E2C8B5Abade1A53D2D8Dc58A22::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C4F41F8E2C8B5Abade1A53D2D8Dc58A22 $ldap;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CA9468105Ef09E63B2D79D0C3B367230F::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CA9468105Ef09E63B2D79D0C3B367230F $cas;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C993B20B7F6Abc5421B4B5031A135A514::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C993B20B7F6Abc5421B4B5031A135A514 $saml;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CA97127916E9Ee59Af20D6Ddd75Ca50F4::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CA97127916E9Ee59Af20D6Ddd75Ca50F4 $github_oauth;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C911Ecfc2D2De69466B544F5246Db27Cd::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C911Ecfc2D2De69466B544F5246Db27Cd $smtp;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CF5Aa3629121710D520D1F773A8Be8B68::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CF5Aa3629121710D520D1F773A8Be8B68 $ntp;
    private $timezone;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C24Ef2936Eafa0Bce793B6F997E8E253E::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C24Ef2936Eafa0Bce793B6F997E8E253E $snmp;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C56F59Bedc34Decabcf8F00B007463941::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C56F59Bedc34Decabcf8F00B007463941 $syslog;
    private $assets;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C47C5Efdd650C68E60F894B5D312F53C8::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C47C5Efdd650C68E60F894B5D312F53C8 $pages;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CF7Fa6D2Aa76A3Ff61B1052Facbe10A4C::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CF7Fa6D2Aa76A3Ff61B1052Facbe10A4C $collectd;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CE7F6B30949C6Cd3C450432C8Ef86D196::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CE7F6B30949C6Cd3C450432C8Ef86D196 $mapping;
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
    public function avatar() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C5D631Edfbcc1E5F162A19183Bc9A2F0A
    {
        return $this->avatar;
    }
    public function customer() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C2A4Ae107E5E90187C4575Fddde6Ed7B8
    {
        return $this->customer;
    }
    public function license() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CD93E79B72F629C2Ff32Da09E878D2614
    {
        return $this->license;
    }
    public function github_ssl() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C77Ed2F96D25Ee7Bc724022F8861Cb1F9
    {
        return $this->github_ssl;
    }
    public function ldap() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C4F41F8E2C8B5Abade1A53D2D8Dc58A22
    {
        return $this->ldap;
    }
    public function cas() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CA9468105Ef09E63B2D79D0C3B367230F
    {
        return $this->cas;
    }
    public function saml() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C993B20B7F6Abc5421B4B5031A135A514
    {
        return $this->saml;
    }
    public function github_oauth() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CA97127916E9Ee59Af20D6Ddd75Ca50F4
    {
        return $this->github_oauth;
    }
    public function smtp() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C911Ecfc2D2De69466B544F5246Db27Cd
    {
        return $this->smtp;
    }
    public function ntp() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CF5Aa3629121710D520D1F773A8Be8B68
    {
        return $this->ntp;
    }
    public function timezone()
    {
        return $this->timezone;
    }
    public function snmp() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C24Ef2936Eafa0Bce793B6F997E8E253E
    {
        return $this->snmp;
    }
    public function syslog() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C56F59Bedc34Decabcf8F00B007463941
    {
        return $this->syslog;
    }
    public function assets()
    {
        return $this->assets;
    }
    public function pages() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C47C5Efdd650C68E60F894B5D312F53C8
    {
        return $this->pages;
    }
    public function collectd() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CF7Fa6D2Aa76A3Ff61B1052Facbe10A4C
    {
        return $this->collectd;
    }
    public function mapping() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CE7F6B30949C6Cd3C450432C8Ef86D196
    {
        return $this->mapping;
    }
    public function load_balancer()
    {
        return $this->load_balancer;
    }
}
