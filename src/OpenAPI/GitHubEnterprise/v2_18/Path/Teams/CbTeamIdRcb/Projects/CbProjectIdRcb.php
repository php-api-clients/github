<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Teams\CbTeamIdRcb\Projects;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\AddOrUpdateProjectPermissions;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\CheckPermissionsForProject;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\RemoveProject;

final class CbProjectIdRcb
{
    function get(string $accept = 'application/vnd.github.inertia-preview+json', $team_id, $project_id): CheckPermissionsForProject
    {
        return new CheckPermissionsForProject($accept, $team_id, $project_id);
    }

    function put(string $accept = 'application/vnd.github.inertia-preview+json', $team_id, $project_id): AddOrUpdateProjectPermissions
    {
        return new AddOrUpdateProjectPermissions($accept, $team_id, $project_id);
    }

    function delete($team_id, $project_id): RemoveProject
    {
        return new RemoveProject($team_id, $project_id);
    }
}
