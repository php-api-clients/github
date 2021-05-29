<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\DeleteRepoSubscriptionOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\GetRepoSubscriptionOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\SetRepoSubscriptionOperation;

final class Subscription
{
    function get($owner, $repo): GetRepoSubscriptionOperation
    {
        return new GetRepoSubscriptionOperation($owner, $repo);
    }

    function put($owner, $repo): SetRepoSubscriptionOperation
    {
        return new SetRepoSubscriptionOperation($owner, $repo);
    }

    function delete($owner, $repo): DeleteRepoSubscriptionOperation
    {
        return new DeleteRepoSubscriptionOperation($owner, $repo);
    }
}
