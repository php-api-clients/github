<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path;

final class Feeds
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\GetFeedsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\GetFeedsOperation();
    }
}
