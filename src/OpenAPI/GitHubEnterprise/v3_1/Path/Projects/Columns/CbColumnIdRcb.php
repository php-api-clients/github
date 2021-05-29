<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Projects\Columns;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\DeleteColumn;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\GetColumn;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\UpdateColumn;

final class CbColumnIdRcb
{
    function get($column_id): GetColumn
    {
        return new GetColumn($column_id);
    }

    function delete($column_id): DeleteColumn
    {
        return new DeleteColumn($column_id);
    }

    function patch($column_id): UpdateColumn
    {
        return new UpdateColumn($column_id);
    }
}