<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Teams\CbTeamIdRcb\Projects;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\AddOrUpdateProjectPermissionsLegacyOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\CheckPermissionsForProjectLegacyOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\RemoveProjectLegacyOperation;

final class CbProjectIdRcb
{
    function get($team_id, $project_id): CheckPermissionsForProjectLegacyOperation
    {
        return new CheckPermissionsForProjectLegacyOperation($team_id, $project_id);
    }

    function put($team_id, $project_id): AddOrUpdateProjectPermissionsLegacyOperation
    {
        return new AddOrUpdateProjectPermissionsLegacyOperation($team_id, $project_id);
    }

    function delete($team_id, $project_id): RemoveProjectLegacyOperation
    {
        return new RemoveProjectLegacyOperation($team_id, $project_id);
    }
}
