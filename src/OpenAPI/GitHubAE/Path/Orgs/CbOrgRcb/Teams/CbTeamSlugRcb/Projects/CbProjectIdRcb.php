<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Projects;

final class CbProjectIdRcb
{
    function get($org, $team_slug, $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CheckPermissionsForProjectInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CheckPermissionsForProjectInOrg($org, $team_slug, $project_id);
    }
    function put($org, $team_slug, $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddOrUpdateProjectPermissionsInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddOrUpdateProjectPermissionsInOrg($org, $team_slug, $project_id);
    }
    function delete($org, $team_slug, $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveProjectInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveProjectInOrg($org, $team_slug, $project_id);
    }
}
