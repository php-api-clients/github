<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Projects;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddOrUpdateProjectPermissionsInOrg;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CheckPermissionsForProjectInOrg;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveProjectInOrg;

final class CbProjectIdRcb
{
    function get($org, $team_slug, $project_id): CheckPermissionsForProjectInOrg
    {
        return new CheckPermissionsForProjectInOrg($org, $team_slug, $project_id);
    }

    function put($org, $team_slug, $project_id): AddOrUpdateProjectPermissionsInOrg
    {
        return new AddOrUpdateProjectPermissionsInOrg($org, $team_slug, $project_id);
    }

    function delete($org, $team_slug, $project_id): RemoveProjectInOrg
    {
        return new RemoveProjectInOrg($org, $team_slug, $project_id);
    }
}
