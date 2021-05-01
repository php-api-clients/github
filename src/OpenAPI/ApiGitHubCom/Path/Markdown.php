<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path;

final class Markdown
{
    function post() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Markdown\RenderOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Markdown\RenderOperation();
    }
}
