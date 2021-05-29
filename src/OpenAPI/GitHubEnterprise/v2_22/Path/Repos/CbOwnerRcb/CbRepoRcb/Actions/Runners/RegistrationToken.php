<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\CreateRegistrationTokenForRepo;

final class RegistrationToken
{
    function post($owner, $repo): CreateRegistrationTokenForRepo
    {
        return new CreateRegistrationTokenForRepo($owner, $repo);
    }
}
