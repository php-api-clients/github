<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Repos\CbOwnerRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Teams\AddOrUpdateRepoPermissionsInOrg;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Teams\CheckPermissionsForRepoInOrg;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Teams\RemoveRepoInOrg;

final class CbRepoRcb
{
    function get($org, $team_slug, $owner, $repo): CheckPermissionsForRepoInOrg
    {
        return new CheckPermissionsForRepoInOrg($org, $team_slug, $owner, $repo);
    }

    function put($org, $team_slug, $owner, $repo): AddOrUpdateRepoPermissionsInOrg
    {
        return new AddOrUpdateRepoPermissionsInOrg($org, $team_slug, $owner, $repo);
    }

    function delete($org, $team_slug, $owner, $repo): RemoveRepoInOrg
    {
        return new RemoveRepoInOrg($org, $team_slug, $owner, $repo);
    }
}
