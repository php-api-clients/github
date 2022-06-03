<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path;

final class RateLimit
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\RateLimit\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\RateLimit\Get();
    }
}
