<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Actions\Secrets;

final class CbSecretNameRcb
{
    function get($org, $secret_name) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetOrgSecretOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetOrgSecretOperation($org, $secret_name);
    }
    function put($org, $secret_name) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CreateOrUpdateOrgSecretOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CreateOrUpdateOrgSecretOperation($org, $secret_name);
    }
    function delete($org, $secret_name) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteOrgSecretOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteOrgSecretOperation($org, $secret_name);
    }
}
