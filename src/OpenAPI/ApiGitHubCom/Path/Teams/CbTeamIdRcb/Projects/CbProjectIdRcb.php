<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Teams\CbTeamIdRcb\Projects;

final class CbProjectIdRcb
{
    function get($team_id, $project_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CheckPermissionsForProjectLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CheckPermissionsForProjectLegacyOperation($team_id, $project_id);
    }
    function put($team_id, $project_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateProjectPermissionsLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateProjectPermissionsLegacyOperation($team_id, $project_id);
    }
    function delete($team_id, $project_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveProjectLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveProjectLegacyOperation($team_id, $project_id);
    }
}
