<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Admin\Ldap\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin\UpdateLdapMappingForUserOperation;

final class Mapping
{
    function patch($username): UpdateLdapMappingForUserOperation
    {
        return new UpdateLdapMappingForUserOperation($username);
    }
}
