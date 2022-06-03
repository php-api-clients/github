<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path;

final class Octocat
{
    function get($s) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Meta\GetOctocat
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Meta\GetOctocat($s);
    }
}
