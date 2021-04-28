<?php

namespace ApiClients\Client\Github\OpenAPI\Path;

final class Zen
{
    function get() : \ApiClients\Client\Github\OpenAPI\Operation\Meta\GetZenOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Meta\GetZenOperation();
    }
}
