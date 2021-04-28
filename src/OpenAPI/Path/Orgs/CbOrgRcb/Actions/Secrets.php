<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Actions;

final class Secrets
{
    function get($org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\ListOrgSecretsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\ListOrgSecretsOperation($org, $per_page, $page);
    }
}
