<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class Installation
{
    function get(string $accept = 'application/vnd.github.machine-man-preview+json', $owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Apps\GetRepoInstallation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Apps\GetRepoInstallation($accept, $owner, $repo);
    }
}
