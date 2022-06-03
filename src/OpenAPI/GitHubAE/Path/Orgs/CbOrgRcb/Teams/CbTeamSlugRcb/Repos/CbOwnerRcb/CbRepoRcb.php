<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Repos\CbOwnerRcb;

final class CbRepoRcb
{
    function get($org, $team_slug, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CheckPermissionsForRepoInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CheckPermissionsForRepoInOrg($org, $team_slug, $owner, $repo);
    }
    function put($org, $team_slug, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddOrUpdateRepoPermissionsInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddOrUpdateRepoPermissionsInOrg($org, $team_slug, $owner, $repo);
    }
    function delete($org, $team_slug, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveRepoInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveRepoInOrg($org, $team_slug, $owner, $repo);
    }
}
