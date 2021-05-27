<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Search;

final class Labels
{
    function get($repository_id, $q, $sort, string $order = 'desc') : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\LabelsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\LabelsOperation($repository_id, $q, $sort, $order);
    }
}
