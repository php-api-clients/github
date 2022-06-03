<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path;

final class Feeds
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\GetFeeds
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\GetFeeds();
    }
}
