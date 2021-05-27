<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Search;

final class Topics
{
    function get($q) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Search\TopicsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Search\TopicsOperation($q);
    }
}
