<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Teams\CbTeamIdRcb\Repos\CbOwnerRcb;

final class CbRepoRcb
{
    function get($team_id, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CheckPermissionsForRepoLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CheckPermissionsForRepoLegacy($team_id, $owner, $repo);
    }
    function put($team_id, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateRepoPermissionsLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateRepoPermissionsLegacy($team_id, $owner, $repo);
    }
    function delete($team_id, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveRepoLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveRepoLegacy($team_id, $owner, $repo);
    }
}
