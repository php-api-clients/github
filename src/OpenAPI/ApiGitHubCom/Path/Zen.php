<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path;

final class Zen
{
    function get() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetZen
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetZen();
    }
}
