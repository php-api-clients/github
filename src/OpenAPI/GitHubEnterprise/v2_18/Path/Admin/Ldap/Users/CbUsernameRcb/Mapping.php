<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Admin\Ldap\Users\CbUsernameRcb;

final class Mapping
{
    function patch($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\EnterpriseAdmin\UpdateLdapMappingForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\EnterpriseAdmin\UpdateLdapMappingForUser($username);
    }
}
