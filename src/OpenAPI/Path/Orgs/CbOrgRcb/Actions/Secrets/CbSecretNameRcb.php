<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Actions\Secrets;

final class CbSecretNameRcb
{
    function get($org, $secret_name) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\GetOrgSecretOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\GetOrgSecretOperation($org, $secret_name);
    }
    function put($org, $secret_name) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\CreateOrUpdateOrgSecretOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\CreateOrUpdateOrgSecretOperation($org, $secret_name);
    }
    function delete($org, $secret_name) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\DeleteOrgSecretOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\DeleteOrgSecretOperation($org, $secret_name);
    }
}
