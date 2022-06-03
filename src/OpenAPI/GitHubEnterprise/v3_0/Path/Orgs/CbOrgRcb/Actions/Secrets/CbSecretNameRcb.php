<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Orgs\CbOrgRcb\Actions\Secrets;

final class CbSecretNameRcb
{
    function get($org, $secret_name) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\GetOrgSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\GetOrgSecret($org, $secret_name);
    }
    function put($org, $secret_name) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\CreateOrUpdateOrgSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\CreateOrUpdateOrgSecret($org, $secret_name);
    }
    function delete($org, $secret_name) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\DeleteOrgSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\DeleteOrgSecret($org, $secret_name);
    }
}
