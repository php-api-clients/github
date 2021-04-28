<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Actions;

final class Secrets
{
    function get($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\ListRepoSecretsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\ListRepoSecretsOperation($owner, $repo, $per_page, $page);
    }
}
