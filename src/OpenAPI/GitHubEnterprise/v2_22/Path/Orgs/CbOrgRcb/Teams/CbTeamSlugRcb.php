<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Orgs\CbOrgRcb\Teams;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Teams\DeleteInOrg;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Teams\GetByName;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Teams\UpdateInOrg;

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
