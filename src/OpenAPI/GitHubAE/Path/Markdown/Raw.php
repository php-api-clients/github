<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Markdown;

final class Raw
{
    function post() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Markdown\RenderRaw
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Markdown\RenderRaw();
    }
}
