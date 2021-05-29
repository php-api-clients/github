<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Repos\CbOwnerRcb\CbRepoRcb\CheckSuites;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Checks\SetSuitesPreferences;

final class Preferences
{
    function patch($owner, $repo): SetSuitesPreferences
    {
        return new SetSuitesPreferences($owner, $repo);
    }
}
