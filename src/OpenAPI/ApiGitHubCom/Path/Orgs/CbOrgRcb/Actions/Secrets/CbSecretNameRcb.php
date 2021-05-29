<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Actions\Secrets;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateOrUpdateOrgSecretOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteOrgSecretOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetOrgSecretOperation;

final class CbSecretNameRcb
{
    function get($org, $secret_name): GetOrgSecretOperation
    {
        return new GetOrgSecretOperation($org, $secret_name);
    }

    function put($org, $secret_name): CreateOrUpdateOrgSecretOperation
    {
        return new CreateOrUpdateOrgSecretOperation($org, $secret_name);
    }

    function delete($org, $secret_name): DeleteOrgSecretOperation
    {
        return new DeleteOrgSecretOperation($org, $secret_name);
    }
}
