<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\CodesOfConduct\GetAllCodesOfConductOperation;

final class CodesOfConduct
{
    function get(): GetAllCodesOfConductOperation
    {
        return new GetAllCodesOfConductOperation();
    }
}
