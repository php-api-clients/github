<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Projects;

final class CbProjectIdRcb
{
    function get($org, $team_slug, $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\CheckPermissionsForProjectInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\CheckPermissionsForProjectInOrg($org, $team_slug, $project_id);
    }
    function put($org, $team_slug, $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\AddOrUpdateProjectPermissionsInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\AddOrUpdateProjectPermissionsInOrg($org, $team_slug, $project_id);
    }
    function delete($org, $team_slug, $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\RemoveProjectInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\RemoveProjectInOrg($org, $team_slug, $project_id);
    }
}
