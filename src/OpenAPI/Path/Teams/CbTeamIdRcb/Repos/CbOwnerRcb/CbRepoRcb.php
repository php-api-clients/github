<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Teams\CbTeamIdRcb\Repos\CbOwnerRcb;

final class CbRepoRcb
{
    function get($team_id, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Teams\CheckPermissionsForRepoLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Teams\CheckPermissionsForRepoLegacyOperation($team_id, $owner, $repo);
    }
    function put($team_id, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Teams\AddOrUpdateRepoPermissionsLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Teams\AddOrUpdateRepoPermissionsLegacyOperation($team_id, $owner, $repo);
    }
    function delete($team_id, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Teams\RemoveRepoLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Teams\RemoveRepoLegacyOperation($team_id, $owner, $repo);
    }
}
