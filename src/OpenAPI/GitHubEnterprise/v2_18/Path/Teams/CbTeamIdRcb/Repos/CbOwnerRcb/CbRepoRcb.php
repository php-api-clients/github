<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Teams\CbTeamIdRcb\Repos\CbOwnerRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\AddOrUpdateRepoPermissionsOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\CheckPermissionsForRepoOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\RemoveRepoOperation;

final class CbRepoRcb
{
    function get($team_id, $owner, $repo): CheckPermissionsForRepoOperation
    {
        return new CheckPermissionsForRepoOperation($team_id, $owner, $repo);
    }

    function put($team_id, $owner, $repo): AddOrUpdateRepoPermissionsOperation
    {
        return new AddOrUpdateRepoPermissionsOperation($team_id, $owner, $repo);
    }

    function delete($team_id, $owner, $repo): RemoveRepoOperation
    {
        return new RemoveRepoOperation($team_id, $owner, $repo);
    }
}
