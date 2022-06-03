<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path;

final class RateLimit
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\RateLimit\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\RateLimit\Get();
    }
}
