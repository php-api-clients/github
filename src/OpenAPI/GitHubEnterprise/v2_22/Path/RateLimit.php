<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path;

final class RateLimit
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\RateLimit\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\RateLimit\Get();
    }
}
