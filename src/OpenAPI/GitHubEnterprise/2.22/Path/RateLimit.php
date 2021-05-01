<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Path;

final class RateLimit
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\RateLimit\GetOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\RateLimit\GetOperation();
    }
}
