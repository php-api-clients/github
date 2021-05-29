<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Activity\GetFeeds;

final class Feeds
{
    function get(): GetFeeds
    {
        return new GetFeeds();
    }
}
