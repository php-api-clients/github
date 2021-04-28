<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\User;

final class Blocks
{
    function get() : \ApiClients\Client\Github\OpenAPI\Operation\Users\ListBlockedByAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Users\ListBlockedByAuthenticatedOperation();
    }
}
