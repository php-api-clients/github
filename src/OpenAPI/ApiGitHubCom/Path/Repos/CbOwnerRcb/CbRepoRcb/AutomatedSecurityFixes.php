<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DisableAutomatedSecurityFixes;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\EnableAutomatedSecurityFixes;

final class AutomatedSecurityFixes
{
    function put($owner, $repo): EnableAutomatedSecurityFixes
    {
        return new EnableAutomatedSecurityFixes($owner, $repo);
    }

    function delete($owner, $repo): DisableAutomatedSecurityFixes
    {
        return new DisableAutomatedSecurityFixes($owner, $repo);
    }
}
