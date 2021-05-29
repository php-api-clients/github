<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Search;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Search\LabelsOperation;

final class Labels
{
    function get($repository_id, $q, $sort, string $order = 'desc'): LabelsOperation
    {
        return new LabelsOperation($repository_id, $q, $sort, $order);
    }
}
