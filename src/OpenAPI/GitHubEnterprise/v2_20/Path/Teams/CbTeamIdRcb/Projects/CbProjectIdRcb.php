<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Teams\CbTeamIdRcb\Projects;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\AddOrUpdateProjectPermissionsOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\CheckPermissionsForProjectOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\RemoveProjectOperation;

final class CbProjectIdRcb
{
    function get(string $accept = 'application/vnd.github.inertia-preview+json', $team_id, $project_id): CheckPermissionsForProjectOperation
    {
        return new CheckPermissionsForProjectOperation($accept, $team_id, $project_id);
    }

    function put(string $accept = 'application/vnd.github.inertia-preview+json', $team_id, $project_id): AddOrUpdateProjectPermissionsOperation
    {
        return new AddOrUpdateProjectPermissionsOperation($accept, $team_id, $project_id);
    }

    function delete($team_id, $project_id): RemoveProjectOperation
    {
        return new RemoveProjectOperation($team_id, $project_id);
    }
}
