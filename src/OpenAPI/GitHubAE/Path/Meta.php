<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path;

final class Meta
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Meta\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Meta\Get();
    }
}
