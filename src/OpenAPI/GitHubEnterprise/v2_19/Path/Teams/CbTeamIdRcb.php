<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Teams;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Teams\DeleteOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Teams\GetOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Teams\UpdateOperation;

final class CbTeamIdRcb
{
    function get($team_id): GetOperation
    {
        return new GetOperation($team_id);
    }

    function delete($team_id): DeleteOperation
    {
        return new DeleteOperation($team_id);
    }

    function patch($team_id): UpdateOperation
    {
        return new UpdateOperation($team_id);
    }
}
