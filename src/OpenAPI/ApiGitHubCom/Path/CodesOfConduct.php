<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path;

final class CodesOfConduct
{
    function get() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodesOfConduct\GetAllCodesOfConductOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodesOfConduct\GetAllCodesOfConductOperation();
    }
}
