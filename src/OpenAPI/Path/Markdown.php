<?php

namespace ApiClients\Client\Github\OpenAPI\Path;

final class Markdown
{
    function post() : \ApiClients\Client\Github\OpenAPI\Operation\Markdown\RenderOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Markdown\RenderOperation();
    }
}
