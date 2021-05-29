<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Search;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Search\TopicsOperation;

final class Topics
{
    function get($q): TopicsOperation
    {
        return new TopicsOperation($q);
    }
}
