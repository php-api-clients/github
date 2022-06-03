<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path;

final class RateLimit
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\RateLimit\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\RateLimit\Get();
    }
}
