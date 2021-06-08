<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CreateRegistrationTokenForRepo;

final class RegistrationToken
{
    function post($owner, $repo): CreateRegistrationTokenForRepo
    {
        return new CreateRegistrationTokenForRepo($owner, $repo);
    }
}
