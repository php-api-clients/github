<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Teams\CbTeamIdRcb\Repos\CbOwnerRcb;

final class CbRepoRcb
{
    function get($team_id, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CheckPermissionsForRepoLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CheckPermissionsForRepoLegacy($team_id, $owner, $repo);
    }
    function put($team_id, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddOrUpdateRepoPermissionsLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddOrUpdateRepoPermissionsLegacy($team_id, $owner, $repo);
    }
    function delete($team_id, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveRepoLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveRepoLegacy($team_id, $owner, $repo);
    }
}
