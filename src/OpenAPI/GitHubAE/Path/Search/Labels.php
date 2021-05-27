<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Search;

final class Labels
{
    function get($repository_id, $q, $sort, string $order = 'desc') : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\LabelsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\LabelsOperation($repository_id, $q, $sort, $order);
    }
}
