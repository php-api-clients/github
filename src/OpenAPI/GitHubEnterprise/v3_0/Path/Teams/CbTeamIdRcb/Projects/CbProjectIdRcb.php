<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Teams\CbTeamIdRcb\Projects;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\AddOrUpdateProjectPermissionsLegacy;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\CheckPermissionsForProjectLegacy;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\RemoveProjectLegacy;

final class CbProjectIdRcb
{
    function get($team_id, $project_id): CheckPermissionsForProjectLegacy
    {
        return new CheckPermissionsForProjectLegacy($team_id, $project_id);
    }

    function put($team_id, $project_id): AddOrUpdateProjectPermissionsLegacy
    {
        return new AddOrUpdateProjectPermissionsLegacy($team_id, $project_id);
    }

    function delete($team_id, $project_id): RemoveProjectLegacy
    {
        return new RemoveProjectLegacy($team_id, $project_id);
    }
}
