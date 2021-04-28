<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Search;

final class Labels
{
    function get($repository_id, $q, $sort, string $order = 'desc') : \ApiClients\Client\Github\OpenAPI\Operation\Search\LabelsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Search\LabelsOperation($repository_id, $q, $sort, $order);
    }
}
