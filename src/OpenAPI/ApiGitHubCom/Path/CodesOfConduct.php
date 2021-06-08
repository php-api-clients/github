<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodesOfConduct\GetAllCodesOfConduct;

final class CodesOfConduct
{
    function get(): GetAllCodesOfConduct
    {
        return new GetAllCodesOfConduct();
    }
}
