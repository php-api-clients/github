<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path;

final class RateLimit
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\RateLimit\GetOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\RateLimit\GetOperation();
    }
}
