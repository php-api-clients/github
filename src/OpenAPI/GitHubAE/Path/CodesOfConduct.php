<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path;

final class CodesOfConduct
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodesOfConduct\GetAllCodesOfConduct
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodesOfConduct\GetAllCodesOfConduct();
    }
}
