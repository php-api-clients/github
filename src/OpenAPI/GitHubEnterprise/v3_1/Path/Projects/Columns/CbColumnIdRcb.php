<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Projects\Columns;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\DeleteColumnOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\GetColumnOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\UpdateColumnOperation;

final class CbColumnIdRcb
{
    function get($column_id): GetColumnOperation
    {
        return new GetColumnOperation($column_id);
    }

    function delete($column_id): DeleteColumnOperation
    {
        return new DeleteColumnOperation($column_id);
    }

    function patch($column_id): UpdateColumnOperation
    {
        return new UpdateColumnOperation($column_id);
    }
}
