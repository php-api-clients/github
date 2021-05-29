<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\CheckSuites;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Checks\SetSuitesPreferencesOperation;

final class Preferences
{
    function patch($owner, $repo): SetSuitesPreferencesOperation
    {
        return new SetSuitesPreferencesOperation($owner, $repo);
    }
}
