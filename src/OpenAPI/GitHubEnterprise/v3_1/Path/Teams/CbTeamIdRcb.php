<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Teams;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\DeleteLegacy;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\GetLegacy;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\UpdateLegacy;

final class CbTeamIdRcb
{
    function get($team_id): GetLegacy
    {
        return new GetLegacy($team_id);
    }

    function delete($team_id): DeleteLegacy
    {
        return new DeleteLegacy($team_id);
    }

    function patch($team_id): UpdateLegacy
    {
        return new UpdateLegacy($team_id);
    }
}
