<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path;

final class RateLimit
{
    function get() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\RateLimit\GetOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\RateLimit\GetOperation();
    }
}
