<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C13B495F0Fb087B4C6F3F0Af64B857A97
{
    public const SCHEMA_JSON = '{"required":["ldap_dn"],"type":"object","properties":{"ldap_dn":{"type":"string","description":"The [distinguished name](https:\\/\\/www.ldap.com\\/ldap-dns-and-rdns) (DN) of the LDAP entry to map to a team."}}}';
    public const SCHEMA_TITLE = 'c_13b495f0fb087b4c6f3f0af64b857a97';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The [distinguished name](https://www.ldap.com/ldap-dns-and-rdns) (DN) of the LDAP entry to map to a team.
     */
    private string $ldap_dn;
    /**
     * The [distinguished name](https://www.ldap.com/ldap-dns-and-rdns) (DN) of the LDAP entry to map to a team.
     */
    public function ldap_dn() : string
    {
        return $this->ldap_dn;
    }
}
