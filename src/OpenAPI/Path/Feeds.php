<?php

namespace ApiClients\Client\Github\OpenAPI\Path;

final class Feeds
{
    function get() : \ApiClients\Client\Github\OpenAPI\Operation\Activity\GetFeedsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Activity\GetFeedsOperation();
    }
}
