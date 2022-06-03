<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path;

final class RateLimit
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\RateLimit\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\RateLimit\Get();
    }
}
