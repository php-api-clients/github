<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Search;

final class Topics
{
    function get($q, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Topics
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Topics($q, $per_page, $page);
    }
}
