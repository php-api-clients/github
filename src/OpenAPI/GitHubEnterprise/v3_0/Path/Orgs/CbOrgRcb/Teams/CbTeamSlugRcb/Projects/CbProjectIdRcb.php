<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Projects;

final class CbProjectIdRcb
{
    function get($org, $team_slug, $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\CheckPermissionsForProjectInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\CheckPermissionsForProjectInOrgOperation($org, $team_slug, $project_id);
    }
    function put($org, $team_slug, $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\AddOrUpdateProjectPermissionsInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\AddOrUpdateProjectPermissionsInOrgOperation($org, $team_slug, $project_id);
    }
    function delete($org, $team_slug, $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\RemoveProjectInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\RemoveProjectInOrgOperation($org, $team_slug, $project_id);
    }
}