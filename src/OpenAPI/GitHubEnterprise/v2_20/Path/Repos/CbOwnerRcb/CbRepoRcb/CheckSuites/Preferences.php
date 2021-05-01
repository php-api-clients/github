<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\\Repos\CbOwnerRcb\CbRepoRcb\CheckSuites;

final class Preferences
{
    function patch($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Checks\SetSuitesPreferencesOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Checks\SetSuitesPreferencesOperation($owner, $repo);
    }
}