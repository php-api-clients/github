<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Popular;

final class Referrers
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetTopReferrersOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetTopReferrersOperation($owner, $repo);
    }
}
