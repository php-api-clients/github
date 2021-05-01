<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Path\\Teams\CbTeamIdRcb\Projects;

final class CbProjectIdRcb
{
    function get(string $accept = 'application/vnd.github.inertia-preview+json', $team_id, $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Teams\CheckPermissionsForProjectOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Teams\CheckPermissionsForProjectOperation($accept, $team_id, $project_id);
    }
    function put(string $accept = 'application/vnd.github.inertia-preview+json', $team_id, $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Teams\AddOrUpdateProjectPermissionsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Teams\AddOrUpdateProjectPermissionsOperation($accept, $team_id, $project_id);
    }
    function delete($team_id, $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Teams\RemoveProjectOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Teams\RemoveProjectOperation($team_id, $project_id);
    }
}
