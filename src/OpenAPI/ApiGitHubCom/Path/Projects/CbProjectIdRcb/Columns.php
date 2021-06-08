<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Projects\CbProjectIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\CreateColumn;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\ListColumns;

final class Columns
{
    function get($project_id, int $per_page = 30, int $page = 1): ListColumns
    {
        return new ListColumns($project_id, $per_page, $page);
    }

    function post($project_id): CreateColumn
    {
        return new CreateColumn($project_id);
    }
}
