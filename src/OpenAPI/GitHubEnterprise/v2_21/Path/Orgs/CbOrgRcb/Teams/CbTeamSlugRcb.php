<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Orgs\CbOrgRcb\Teams;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Teams\DeleteInOrgOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Teams\GetByNameOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Teams\UpdateInOrgOperation;

final class CbTeamSlugRcb
{
    function get($org, $team_slug): GetByNameOperation
    {
        return new GetByNameOperation($org, $team_slug);
    }

    function delete($org, $team_slug): DeleteInOrgOperation
    {
        return new DeleteInOrgOperation($org, $team_slug);
    }

    function patch($org, $team_slug): UpdateInOrgOperation
    {
        return new UpdateInOrgOperation($org, $team_slug);
    }
}
