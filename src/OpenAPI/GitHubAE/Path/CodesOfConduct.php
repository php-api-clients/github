<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodesOfConduct\GetAllCodesOfConduct;

final class CodesOfConduct
{
    function get(): GetAllCodesOfConduct
    {
        return new GetAllCodesOfConduct();
    }
}
