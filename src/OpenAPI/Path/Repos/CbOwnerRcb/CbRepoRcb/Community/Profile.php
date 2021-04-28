<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Community;

final class Profile
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetCommunityProfileMetricsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetCommunityProfileMetricsOperation($owner, $repo);
    }
}
