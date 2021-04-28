<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Repos\CbOwnerRcb;

final class CbRepoRcb
{
    function get($org, $team_slug, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Teams\CheckPermissionsForRepoInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Teams\CheckPermissionsForRepoInOrgOperation($org, $team_slug, $owner, $repo);
    }
    function put($org, $team_slug, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Teams\AddOrUpdateRepoPermissionsInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Teams\AddOrUpdateRepoPermissionsInOrgOperation($org, $team_slug, $owner, $repo);
    }
    function delete($org, $team_slug, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Teams\RemoveRepoInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Teams\RemoveRepoInOrgOperation($org, $team_slug, $owner, $repo);
    }
}
