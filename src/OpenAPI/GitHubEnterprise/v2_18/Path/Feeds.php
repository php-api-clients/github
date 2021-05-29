<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Activity\GetFeedsOperation;

final class Feeds
{
    function get(): GetFeedsOperation
    {
        return new GetFeedsOperation();
    }
}
