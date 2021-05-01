<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Path\\Search;

final class Topics
{
    function get($q) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\Search\TopicsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\Search\TopicsOperation($q);
    }
}
