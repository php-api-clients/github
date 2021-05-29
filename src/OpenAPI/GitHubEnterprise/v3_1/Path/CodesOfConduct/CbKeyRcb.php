<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\CodesOfConduct;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodesOfConduct\GetConductCodeOperation;

final class CbKeyRcb
{
    function get($key): GetConductCodeOperation
    {
        return new GetConductCodeOperation($key);
    }
}
