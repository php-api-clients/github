<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path;

final class Zen
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Meta\GetZen
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Meta\GetZen();
    }
}
