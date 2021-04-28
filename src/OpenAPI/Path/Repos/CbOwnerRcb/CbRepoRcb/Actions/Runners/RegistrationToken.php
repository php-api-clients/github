<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners;

final class RegistrationToken
{
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\CreateRegistrationTokenForRepoOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\CreateRegistrationTokenForRepoOperation($owner, $repo);
    }
}
