<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Teams\CbTeamIdRcb\Repos\CbOwnerRcb;

final class CbRepoRcb
{
    function get($team_id, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\CheckPermissionsForRepoLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\CheckPermissionsForRepoLegacy($team_id, $owner, $repo);
    }
    function put($team_id, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\AddOrUpdateRepoPermissionsLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\AddOrUpdateRepoPermissionsLegacy($team_id, $owner, $repo);
    }
    function delete($team_id, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\RemoveRepoLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\RemoveRepoLegacy($team_id, $owner, $repo);
    }
}
