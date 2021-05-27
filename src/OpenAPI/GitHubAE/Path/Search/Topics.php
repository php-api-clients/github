<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Search;

final class Topics
{
    function get($q) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\TopicsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\TopicsOperation($q);
    }
}
