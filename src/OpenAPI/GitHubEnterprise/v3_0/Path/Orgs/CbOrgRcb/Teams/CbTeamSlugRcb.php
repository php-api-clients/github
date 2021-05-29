<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Orgs\CbOrgRcb\Teams;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\DeleteInOrg;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\GetByName;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\UpdateInOrg;

final class CbTeamSlugRcb
{
    function get($org, $team_slug): GetByName
    {
        return new GetByName($org, $team_slug);
    }

    function delete($org, $team_slug): DeleteInOrg
    {
        return new DeleteInOrg($org, $team_slug);
    }

    function patch($org, $team_slug): UpdateInOrg
    {
        return new UpdateInOrg($org, $team_slug);
    }
}
