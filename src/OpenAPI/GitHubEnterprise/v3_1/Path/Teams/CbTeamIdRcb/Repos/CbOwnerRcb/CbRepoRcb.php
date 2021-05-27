<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Teams\CbTeamIdRcb\Repos\CbOwnerRcb;

final class CbRepoRcb
{
    function get($team_id, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\CheckPermissionsForRepoLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\CheckPermissionsForRepoLegacyOperation($team_id, $owner, $repo);
    }
    function put($team_id, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\AddOrUpdateRepoPermissionsLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\AddOrUpdateRepoPermissionsLegacyOperation($team_id, $owner, $repo);
    }
    function delete($team_id, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\RemoveRepoLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\RemoveRepoLegacyOperation($team_id, $owner, $repo);
    }
}
