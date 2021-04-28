<?php

namespace ApiClients\Client\Github\OpenAPI\Path;

final class Emojis
{
    function get() : \ApiClients\Client\Github\OpenAPI\Operation\Emojis\GetOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Emojis\GetOperation();
    }
}
