<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Path\\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Projects;

final class CbProjectIdRcb
{
    function get($org, $team_slug, $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\Teams\CheckPermissionsForProjectInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\Teams\CheckPermissionsForProjectInOrgOperation($org, $team_slug, $project_id);
    }
    function put($org, $team_slug, $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\Teams\AddOrUpdateProjectPermissionsInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\Teams\AddOrUpdateProjectPermissionsInOrgOperation($org, $team_slug, $project_id);
    }
    function delete($org, $team_slug, $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\Teams\RemoveProjectInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\Teams\RemoveProjectInOrgOperation($org, $team_slug, $project_id);
    }
}
