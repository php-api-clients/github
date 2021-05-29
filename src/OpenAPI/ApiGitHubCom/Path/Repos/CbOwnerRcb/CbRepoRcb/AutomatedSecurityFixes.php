<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DisableAutomatedSecurityFixesOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\EnableAutomatedSecurityFixesOperation;

final class AutomatedSecurityFixes
{
    function put($owner, $repo): EnableAutomatedSecurityFixesOperation
    {
        return new EnableAutomatedSecurityFixesOperation($owner, $repo);
    }

    function delete($owner, $repo): DisableAutomatedSecurityFixesOperation
    {
        return new DisableAutomatedSecurityFixesOperation($owner, $repo);
    }
}
