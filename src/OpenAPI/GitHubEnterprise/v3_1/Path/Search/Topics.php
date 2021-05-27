<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Search;

final class Topics
{
    function get($q) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Search\TopicsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Search\TopicsOperation($q);
    }
}
