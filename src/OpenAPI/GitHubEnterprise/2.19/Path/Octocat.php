<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Path;

final class Octocat
{
    function get($s) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Meta\GetOctocatOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Meta\GetOctocatOperation($s);
    }
}
