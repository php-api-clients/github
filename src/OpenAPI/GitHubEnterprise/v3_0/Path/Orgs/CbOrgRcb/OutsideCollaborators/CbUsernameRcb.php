<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Orgs\CbOrgRcb\OutsideCollaborators;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\ConvertMemberToOutsideCollaboratorOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\RemoveOutsideCollaboratorOperation;

final class CbUsernameRcb
{
    function put($org, $username): ConvertMemberToOutsideCollaboratorOperation
    {
        return new ConvertMemberToOutsideCollaboratorOperation($org, $username);
    }

    function delete($org, $username): RemoveOutsideCollaboratorOperation
    {
        return new RemoveOutsideCollaboratorOperation($org, $username);
    }
}
