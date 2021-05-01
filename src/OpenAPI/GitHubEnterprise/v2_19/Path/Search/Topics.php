<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\\Search;

final class Topics
{
    function get($q) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Search\TopicsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Search\TopicsOperation($q);
    }
}