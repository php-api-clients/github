<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Search;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\TopicsOperation;

final class Topics
{
    function get($q): TopicsOperation
    {
        return new TopicsOperation($q);
    }
}
