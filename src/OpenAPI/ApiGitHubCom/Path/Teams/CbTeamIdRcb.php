<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Teams;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteLegacyOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetLegacyOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateLegacyOperation;

final class CbTeamIdRcb
{
    function get($team_id): GetLegacyOperation
    {
        return new GetLegacyOperation($team_id);
    }

    function delete($team_id): DeleteLegacyOperation
    {
        return new DeleteLegacyOperation($team_id);
    }

    function patch($team_id): UpdateLegacyOperation
    {
        return new UpdateLegacyOperation($team_id);
    }
}
