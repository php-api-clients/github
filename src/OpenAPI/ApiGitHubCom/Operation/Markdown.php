<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Markdown
{
    public function render_() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Markdown\Render_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Markdown\Render_();
    }
    public function renderRaw_() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Markdown\RenderRaw_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Markdown\RenderRaw_();
    }
}
