<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Orgs\CbOrgRcb\OutsideCollaborators;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Orgs\ConvertMemberToOutsideCollaborator;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Orgs\RemoveOutsideCollaborator;

final class CbUsernameRcb
{
    function put($org, $username): ConvertMemberToOutsideCollaborator
    {
        return new ConvertMemberToOutsideCollaborator($org, $username);
    }

    function delete($org, $username): RemoveOutsideCollaborator
    {
        return new RemoveOutsideCollaborator($org, $username);
    }
}
