<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodesOfConduct\GetAllCodesOfConductOperation;

final class CodesOfConduct
{
    function get(): GetAllCodesOfConductOperation
    {
        return new GetAllCodesOfConductOperation();
    }
}
