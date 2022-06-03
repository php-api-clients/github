<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Teams\CbTeamIdRcb\Projects;

final class CbProjectIdRcb
{
    function get(string $accept = 'application/vnd.github.inertia-preview+json', $team_id, $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\CheckPermissionsForProject
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\CheckPermissionsForProject($accept, $team_id, $project_id);
    }
    function put(string $accept = 'application/vnd.github.inertia-preview+json', $team_id, $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\AddOrUpdateProjectPermissions
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\AddOrUpdateProjectPermissions($accept, $team_id, $project_id);
    }
    function delete($team_id, $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\RemoveProject
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\RemoveProject($team_id, $project_id);
    }
}
