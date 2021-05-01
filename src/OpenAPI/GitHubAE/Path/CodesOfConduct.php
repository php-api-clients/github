<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path;

final class CodesOfConduct
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodesOfConduct\GetAllCodesOfConductOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodesOfConduct\GetAllCodesOfConductOperation();
    }
}
