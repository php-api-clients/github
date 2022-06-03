<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\CheckSuites;

final class Preferences
{
    function patch($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\SetSuitesPreferences
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\SetSuitesPreferences($owner, $repo);
    }
}
