<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class EnterpriseSettings
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"enterprise":{"type":"object","properties":{"private_mode":{"type":"boolean"},"public_pages":{"type":"boolean"},"subdomain_isolation":{"type":"boolean"},"signup_enabled":{"type":"boolean"},"github_hostname":{"type":"string"},"identicons_host":{"type":"string"},"http_proxy":{"type":["string","null"]},"auth_mode":{"type":"string"},"expire_sessions":{"type":"boolean"},"admin_password":{"type":["string","null"]},"configuration_id":{"type":"integer"},"configuration_run_count":{"type":"integer"},"avatar":{"type":"object","properties":{"enabled":{"type":"boolean"},"uri":{"type":"string"}}},"customer":{"type":"object","properties":{"name":{"type":"string"},"email":{"type":"string"},"uuid":{"type":"string"},"secret_key_data":{"type":"string"},"public_key_data":{"type":"string"}}},"license":{"type":"object","properties":{"seats":{"type":"integer"},"evaluation":{"type":"boolean"},"perpetual":{"type":"boolean"},"unlimited_seating":{"type":"boolean"},"support_key":{"type":"string"},"ssh_allowed":{"type":"boolean"},"cluster_support":{"type":"boolean"},"expire_at":{"type":"string"}}},"github_ssl":{"type":"object","properties":{"enabled":{"type":"boolean"},"cert":{"type":["string","null"]},"key":{"type":["string","null"]}}},"ldap":{"type":"object","properties":{"host":{"type":["string","null"]},"port":{"type":"integer"},"base":{"type":"array","items":{}},"uid":{"type":["string","null"]},"bind_dn":{"type":["string","null"]},"password":{"type":["string","null"]},"method":{"type":"string"},"search_strategy":{"type":"string"},"user_groups":{"type":"array","items":{}},"admin_group":{"type":["string","null"]},"virtual_attribute_enabled":{"type":"boolean"},"recursive_group_search":{"type":"boolean"},"posix_support":{"type":"boolean"},"user_sync_emails":{"type":"boolean"},"user_sync_keys":{"type":"boolean"},"user_sync_interval":{"type":"integer"},"team_sync_interval":{"type":"integer"},"sync_enabled":{"type":"boolean"},"reconciliation":{"type":"object","properties":{"user":{"type":["string","null"]},"org":{"type":["string","null"]}}},"profile":{"type":"object","properties":{"uid":{"type":"string"},"name":{"type":["string","null"]},"mail":{"type":["string","null"]},"key":{"type":["string","null"]}}}}},"cas":{"type":"object","properties":{"url":{"type":["string","null"]}}},"saml":{"type":"object","properties":{"sso_url":{"type":["string","null"]},"certificate":{"type":["string","null"]},"certificate_path":{"type":["string","null"]},"issuer":{"type":["string","null"]},"idp_initiated_sso":{"type":"boolean"},"disable_admin_demote":{"type":"boolean"}}},"github_oauth":{"type":"object","properties":{"client_id":{"type":"string"},"client_secret":{"type":"string"},"organization_name":{"type":"string"},"organization_team":{"type":"string"}}},"smtp":{"type":"object","properties":{"enabled":{"type":"boolean"},"address":{"type":"string"},"authentication":{"type":"string"},"port":{"type":"string"},"domain":{"type":"string"},"username":{"type":"string"},"user_name":{"type":"string"},"enable_starttls_auto":{"type":"boolean"},"password":{"type":"string"},"discard-to-noreply-address":{"type":"boolean"},"support_address":{"type":"string"},"support_address_type":{"type":"string"},"noreply_address":{"type":"string"}}},"ntp":{"type":"object","properties":{"primary_server":{"type":"string"},"secondary_server":{"type":"string"}}},"timezone":{"type":["string","null"]},"snmp":{"type":"object","properties":{"enabled":{"type":"boolean"},"community":{"type":"string"}}},"syslog":{"type":"object","properties":{"enabled":{"type":"boolean"},"server":{"type":["string","null"]},"protocol_name":{"type":"string"}}},"assets":{"type":["string","null"]},"pages":{"type":"object","properties":{"enabled":{"type":"boolean"}}},"collectd":{"type":"object","properties":{"enabled":{"type":"boolean"},"server":{"type":["string","null"]},"port":{"type":"integer"},"encryption":{"type":["string","null"]},"username":{"type":["string","null"]},"password":{"type":["string","null"]}}},"mapping":{"type":"object","properties":{"enabled":{"type":"boolean"},"tileserver":{"type":["string","null"]},"basemap":{"type":"string"},"token":{"type":["string","null"]}}},"load_balancer":{"type":["string","null"]}}},"run_list":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_TITLE = 'enterprise-settings';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseSettings\Enterprise::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseSettings\Enterprise $enterprise;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseSettings\RunList>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseSettings\RunList::class)
     */
    private array $run_list = array();
    public function enterprise() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseSettings\Enterprise
    {
        return $this->enterprise;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseSettings\RunList>
     */
    public function run_list() : array
    {
        return $this->run_list;
    }
}
