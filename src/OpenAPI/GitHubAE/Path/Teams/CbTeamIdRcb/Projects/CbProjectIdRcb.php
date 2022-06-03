<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Teams\CbTeamIdRcb\Projects;

final class CbProjectIdRcb
{
    function get($team_id, $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CheckPermissionsForProjectLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CheckPermissionsForProjectLegacy($team_id, $project_id);
    }
    function put($team_id, $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddOrUpdateProjectPermissionsLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddOrUpdateProjectPermissionsLegacy($team_id, $project_id);
    }
    function delete($team_id, $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveProjectLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveProjectLegacy($team_id, $project_id);
    }
}
