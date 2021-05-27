<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Admin\Ldap\Users\CbUsernameRcb;

final class Mapping
{
    function patch($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdateLdapMappingForUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdateLdapMappingForUserOperation($username);
    }
}
