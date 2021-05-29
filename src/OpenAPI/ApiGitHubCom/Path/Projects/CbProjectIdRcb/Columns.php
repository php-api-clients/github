<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Projects\CbProjectIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateColumnOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListColumnsOperation;

final class Columns
{
    function get($project_id, int $per_page = 30, int $page = 1): ListColumnsOperation
    {
        return new ListColumnsOperation($project_id, $per_page, $page);
    }

    function post($project_id): CreateColumnOperation
    {
        return new CreateColumnOperation($project_id);
    }
}
