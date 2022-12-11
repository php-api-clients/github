<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class CodesOfConduct
{
    public function getAllCodesOfConduct_() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodesOfConduct\GetAllCodesOfConduct_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodesOfConduct\GetAllCodesOfConduct_();
    }
    public function getConductCode_(string $key) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodesOfConduct\GetConductCode_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodesOfConduct\GetConductCode_($key);
    }
}
