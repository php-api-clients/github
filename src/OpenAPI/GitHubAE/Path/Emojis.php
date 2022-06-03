<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path;

final class Emojis
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Emojis\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Emojis\Get();
    }
}
