<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path;

final class Emojis
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Emojis\GetOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Emojis\GetOperation();
    }
}
