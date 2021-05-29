<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Activity\DeleteRepoSubscription;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Activity\GetRepoSubscription;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Activity\SetRepoSubscription;

final class Subscription
{
    function get($owner, $repo): GetRepoSubscription
    {
        return new GetRepoSubscription($owner, $repo);
    }

    function put($owner, $repo): SetRepoSubscription
    {
        return new SetRepoSubscription($owner, $repo);
    }

    function delete($owner, $repo): DeleteRepoSubscription
    {
        return new DeleteRepoSubscription($owner, $repo);
    }
}
