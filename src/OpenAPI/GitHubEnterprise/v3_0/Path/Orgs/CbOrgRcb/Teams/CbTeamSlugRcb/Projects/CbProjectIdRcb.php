<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Projects;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\AddOrUpdateProjectPermissionsInOrgOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\CheckPermissionsForProjectInOrgOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\RemoveProjectInOrgOperation;

final class CbProjectIdRcb
{
    function get($org, $team_slug, $project_id): CheckPermissionsForProjectInOrgOperation
    {
        return new CheckPermissionsForProjectInOrgOperation($org, $team_slug, $project_id);
    }

    function put($org, $team_slug, $project_id): AddOrUpdateProjectPermissionsInOrgOperation
    {
        return new AddOrUpdateProjectPermissionsInOrgOperation($org, $team_slug, $project_id);
    }

    function delete($org, $team_slug, $project_id): RemoveProjectInOrgOperation
    {
        return new RemoveProjectInOrgOperation($org, $team_slug, $project_id);
    }
}
