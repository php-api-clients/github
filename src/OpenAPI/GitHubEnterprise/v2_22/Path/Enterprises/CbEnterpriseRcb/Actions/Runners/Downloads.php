<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Enterprises\CbEnterpriseRcb\Actions\Runners;

final class Downloads
{
    function get($enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\ListRunnerApplicationsForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\ListRunnerApplicationsForEnterprise($enterprise);
    }
}
