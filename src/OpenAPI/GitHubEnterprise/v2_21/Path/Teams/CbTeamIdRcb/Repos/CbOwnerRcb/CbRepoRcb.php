<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Teams\CbTeamIdRcb\Repos\CbOwnerRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Teams\AddOrUpdateRepoPermissionsLegacy;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Teams\CheckPermissionsForRepoLegacy;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Teams\RemoveRepoLegacy;

final class CbRepoRcb
{
    function get($team_id, $owner, $repo): CheckPermissionsForRepoLegacy
    {
        return new CheckPermissionsForRepoLegacy($team_id, $owner, $repo);
    }

    function put($team_id, $owner, $repo): AddOrUpdateRepoPermissionsLegacy
    {
        return new AddOrUpdateRepoPermissionsLegacy($team_id, $owner, $repo);
    }

    function delete($team_id, $owner, $repo): RemoveRepoLegacy
    {
        return new RemoveRepoLegacy($team_id, $owner, $repo);
    }
}
