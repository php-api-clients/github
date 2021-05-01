<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path;

final class Octocat
{
    function get($s) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetOctocatOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetOctocatOperation($s);
    }
}
