<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\CodesOfConduct;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\CodesOfConduct\GetConductCodeOperation;

final class CbKeyRcb
{
    function get($key): GetConductCodeOperation
    {
        return new GetConductCodeOperation($key);
    }
}
