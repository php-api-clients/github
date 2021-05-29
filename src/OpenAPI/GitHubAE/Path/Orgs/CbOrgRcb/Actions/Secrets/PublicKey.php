<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Actions\Secrets;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetOrgPublicKeyOperation;

final class PublicKey
{
    function get($org): GetOrgPublicKeyOperation
    {
        return new GetOrgPublicKeyOperation($org);
    }
}
