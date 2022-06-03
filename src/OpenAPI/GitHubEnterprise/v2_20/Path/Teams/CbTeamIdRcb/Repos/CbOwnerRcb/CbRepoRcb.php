<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Teams\CbTeamIdRcb\Repos\CbOwnerRcb;

final class CbRepoRcb
{
    function get($team_id, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\CheckPermissionsForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\CheckPermissionsForRepo($team_id, $owner, $repo);
    }
    function put($team_id, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\AddOrUpdateRepoPermissions
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\AddOrUpdateRepoPermissions($team_id, $owner, $repo);
    }
    function delete($team_id, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\RemoveRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\RemoveRepo($team_id, $owner, $repo);
    }
}
