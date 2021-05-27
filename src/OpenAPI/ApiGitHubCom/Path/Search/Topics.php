<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Search;

final class Topics
{
    function get($q) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\TopicsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\TopicsOperation($q);
    }
}
