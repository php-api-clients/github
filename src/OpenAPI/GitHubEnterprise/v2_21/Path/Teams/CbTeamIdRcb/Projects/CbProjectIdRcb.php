<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Teams\CbTeamIdRcb\Projects;

final class CbProjectIdRcb
{
    function get($team_id, $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Teams\CheckPermissionsForProjectLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Teams\CheckPermissionsForProjectLegacy($team_id, $project_id);
    }
    function put($team_id, $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Teams\AddOrUpdateProjectPermissionsLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Teams\AddOrUpdateProjectPermissionsLegacy($team_id, $project_id);
    }
    function delete($team_id, $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Teams\RemoveProjectLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Teams\RemoveProjectLegacy($team_id, $project_id);
    }
}
