<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path;

final class Octocat
{
    function get($s) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Meta\GetOctocatOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Meta\GetOctocatOperation($s);
    }
}
