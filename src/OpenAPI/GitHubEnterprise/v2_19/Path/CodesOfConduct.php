<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\CodesOfConduct\GetAllCodesOfConductOperation;

final class CodesOfConduct
{
    function get(): GetAllCodesOfConductOperation
    {
        return new GetAllCodesOfConductOperation();
    }
}
