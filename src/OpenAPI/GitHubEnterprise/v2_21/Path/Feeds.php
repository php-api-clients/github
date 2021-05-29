<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Activity\GetFeeds;

final class Feeds
{
    function get(): GetFeeds
    {
        return new GetFeeds();
    }
}
