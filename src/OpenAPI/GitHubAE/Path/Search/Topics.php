<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Search;

final class Topics
{
    function get($q): \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Topics
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Topics($q);
    }
}
