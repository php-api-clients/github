<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation;

final class Markdown
{
    public function render_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Markdown\Render_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Markdown\Render_();
    }
    public function renderRaw_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Markdown\RenderRaw_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Markdown\RenderRaw_();
    }
}
