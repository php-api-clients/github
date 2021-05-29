<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Activity\GetFeedsOperation;

final class Feeds
{
    function get(): GetFeedsOperation
    {
        return new GetFeedsOperation();
    }
}
