<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Search;

final class Topics
{
    function get($q) : \ApiClients\Client\Github\OpenAPI\Operation\Search\TopicsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Search\TopicsOperation($q);
    }
}
