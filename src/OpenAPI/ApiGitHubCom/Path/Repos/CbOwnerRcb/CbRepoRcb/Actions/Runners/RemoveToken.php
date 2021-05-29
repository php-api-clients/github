<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRemoveTokenForRepo;

final class RemoveToken
{
    function post($owner, $repo): CreateRemoveTokenForRepo
    {
        return new CreateRemoveTokenForRepo($owner, $repo);
    }
}
