<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Markdown;

final class Raw
{
    function post() : \ApiClients\Client\Github\OpenAPI\Operation\Markdown\RenderRawOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Markdown\RenderRawOperation();
    }
}
