<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\GetFeedsOperation;

final class Feeds
{
    function get(): GetFeedsOperation
    {
        return new GetFeedsOperation();
    }
}
