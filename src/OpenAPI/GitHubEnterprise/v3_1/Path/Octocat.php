<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path;

final class Octocat
{
    function get($s) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Meta\GetOctocat
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Meta\GetOctocat($s);
    }
}
