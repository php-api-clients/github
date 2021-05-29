<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\CreateRegistrationTokenForRepoOperation;

final class RegistrationToken
{
    function post($owner, $repo): CreateRegistrationTokenForRepoOperation
    {
        return new CreateRegistrationTokenForRepoOperation($owner, $repo);
    }
}
