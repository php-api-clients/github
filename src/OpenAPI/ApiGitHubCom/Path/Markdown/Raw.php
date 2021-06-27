<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Markdown;

final class Raw
{
    function post() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Markdown\RenderRaw
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Markdown\RenderRaw();
    }
}
