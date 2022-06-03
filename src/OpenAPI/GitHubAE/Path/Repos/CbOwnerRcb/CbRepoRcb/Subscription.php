<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class Subscription
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\GetRepoSubscription
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\GetRepoSubscription($owner, $repo);
    }
    function put($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\SetRepoSubscription
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\SetRepoSubscription($owner, $repo);
    }
    function delete($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\DeleteRepoSubscription
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\DeleteRepoSubscription($owner, $repo);
    }
}
