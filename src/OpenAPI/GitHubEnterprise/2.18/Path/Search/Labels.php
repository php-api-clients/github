<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Path\\Search;

final class Labels
{
    function get($repository_id, $q, $sort, string $order = 'desc') : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Search\LabelsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Search\LabelsOperation($repository_id, $q, $sort, $order);
    }
}
