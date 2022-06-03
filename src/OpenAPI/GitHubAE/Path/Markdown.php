<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path;

final class Markdown
{
    function post() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Markdown\Render
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Markdown\Render();
    }
}
