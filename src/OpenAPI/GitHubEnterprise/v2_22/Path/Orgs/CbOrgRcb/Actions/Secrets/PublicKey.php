<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Orgs\CbOrgRcb\Actions\Secrets;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\GetOrgPublicKeyOperation;

final class PublicKey
{
    function get($org): GetOrgPublicKeyOperation
    {
        return new GetOrgPublicKeyOperation($org);
    }
}
