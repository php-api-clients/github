<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\GetFeeds;

final class Feeds
{
    function get(): GetFeeds
    {
        return new GetFeeds();
    }
}
