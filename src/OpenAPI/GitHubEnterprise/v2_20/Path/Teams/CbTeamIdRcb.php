<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Teams;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\Delete;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\Get;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\Update;

final class CbTeamIdRcb
{
    function get($team_id): Get
    {
        return new Get($team_id);
    }

    function delete($team_id): Delete
    {
        return new Delete($team_id);
    }

    function patch($team_id): Update
    {
        return new Update($team_id);
    }
}
