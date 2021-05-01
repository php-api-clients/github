<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Path;

final class Octocat
{
    function get($s) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\Meta\GetOctocatOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\Meta\GetOctocatOperation($s);
    }
}
