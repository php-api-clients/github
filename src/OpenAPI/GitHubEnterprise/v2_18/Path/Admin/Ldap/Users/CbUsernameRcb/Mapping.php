<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Admin\Ldap\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\EnterpriseAdmin\UpdateLdapMappingForUser;

final class Mapping
{
    function patch($username): UpdateLdapMappingForUser
    {
        return new UpdateLdapMappingForUser($username);
    }
}
