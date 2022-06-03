<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path;

final class Octocat
{
    function get($s) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Meta\GetOctocat
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Meta\GetOctocat($s);
    }
}
