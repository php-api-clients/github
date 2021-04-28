<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb;

final class AutomatedSecurityFixes
{
    function put($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\EnableAutomatedSecurityFixesOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\EnableAutomatedSecurityFixesOperation($owner, $repo);
    }
    function delete($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\DisableAutomatedSecurityFixesOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\DisableAutomatedSecurityFixesOperation($owner, $repo);
    }
}
