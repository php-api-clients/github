<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path;

final class Feeds
{
    function get() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\GetFeedsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\GetFeedsOperation();
    }
}
