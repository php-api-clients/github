<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Admin\Ldap\Users\CbUsernameRcb;

final class Mapping
{
    function patch($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin\UpdateLdapMappingForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin\UpdateLdapMappingForUser($username);
    }
}
