<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Teams\CbTeamIdRcb\Repos\CbOwnerRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\AddOrUpdateRepoPermissions;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\CheckPermissionsForRepo;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\RemoveRepo;

final class CbRepoRcb
{
    function get($team_id, $owner, $repo): CheckPermissionsForRepo
    {
        return new CheckPermissionsForRepo($team_id, $owner, $repo);
    }

    function put($team_id, $owner, $repo): AddOrUpdateRepoPermissions
    {
        return new AddOrUpdateRepoPermissions($team_id, $owner, $repo);
    }

    function delete($team_id, $owner, $repo): RemoveRepo
    {
        return new RemoveRepo($team_id, $owner, $repo);
    }
}
