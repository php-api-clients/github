<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Teams\CbTeamIdRcb\Repos\CbOwnerRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateRepoPermissionsLegacyOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CheckPermissionsForRepoLegacyOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveRepoLegacyOperation;

final class CbRepoRcb
{
    function get($team_id, $owner, $repo): CheckPermissionsForRepoLegacyOperation
    {
        return new CheckPermissionsForRepoLegacyOperation($team_id, $owner, $repo);
    }

    function put($team_id, $owner, $repo): AddOrUpdateRepoPermissionsLegacyOperation
    {
        return new AddOrUpdateRepoPermissionsLegacyOperation($team_id, $owner, $repo);
    }

    function delete($team_id, $owner, $repo): RemoveRepoLegacyOperation
    {
        return new RemoveRepoLegacyOperation($team_id, $owner, $repo);
    }
}
