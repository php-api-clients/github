<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Path;

final class RateLimit
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\RateLimit\GetOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\RateLimit\GetOperation();
    }
}
