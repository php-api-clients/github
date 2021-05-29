<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Repos\CbOwnerRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Teams\AddOrUpdateRepoPermissionsInOrgOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Teams\CheckPermissionsForRepoInOrgOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Teams\RemoveRepoInOrgOperation;

final class CbRepoRcb
{
    function get($org, $team_slug, $owner, $repo): CheckPermissionsForRepoInOrgOperation
    {
        return new CheckPermissionsForRepoInOrgOperation($org, $team_slug, $owner, $repo);
    }

    function put($org, $team_slug, $owner, $repo): AddOrUpdateRepoPermissionsInOrgOperation
    {
        return new AddOrUpdateRepoPermissionsInOrgOperation($org, $team_slug, $owner, $repo);
    }

    function delete($org, $team_slug, $owner, $repo): RemoveRepoInOrgOperation
    {
        return new RemoveRepoInOrgOperation($org, $team_slug, $owner, $repo);
    }
}
