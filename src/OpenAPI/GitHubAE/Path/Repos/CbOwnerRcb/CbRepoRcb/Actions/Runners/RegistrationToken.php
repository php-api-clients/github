<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners;

final class RegistrationToken
{
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CreateRegistrationTokenForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CreateRegistrationTokenForRepo($owner, $repo);
    }
}
