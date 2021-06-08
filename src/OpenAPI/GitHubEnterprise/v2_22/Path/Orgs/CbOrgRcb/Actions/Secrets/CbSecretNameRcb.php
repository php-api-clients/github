<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Orgs\CbOrgRcb\Actions\Secrets;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\CreateOrUpdateOrgSecret;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\DeleteOrgSecret;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\GetOrgSecret;

final class CbSecretNameRcb
{
    function get($org, $secret_name): GetOrgSecret
    {
        return new GetOrgSecret($org, $secret_name);
    }

    function put($org, $secret_name): CreateOrUpdateOrgSecret
    {
        return new CreateOrUpdateOrgSecret($org, $secret_name);
    }

    function delete($org, $secret_name): DeleteOrgSecret
    {
        return new DeleteOrgSecret($org, $secret_name);
    }
}
