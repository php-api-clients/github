<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path;

final class CodesOfConduct
{
    function get() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodesOfConduct\GetAllCodesOfConduct
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodesOfConduct\GetAllCodesOfConduct();
    }
}
