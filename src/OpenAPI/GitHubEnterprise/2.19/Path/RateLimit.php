<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Path;

final class RateLimit
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\RateLimit\GetOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\RateLimit\GetOperation();
    }
}
