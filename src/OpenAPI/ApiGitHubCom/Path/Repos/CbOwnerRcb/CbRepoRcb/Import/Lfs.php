<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Import;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\SetLfsPreference;

final class Lfs
{
    function patch($owner, $repo): SetLfsPreference
    {
        return new SetLfsPreference($owner, $repo);
    }
}
