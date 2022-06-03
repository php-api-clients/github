<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation;

final class CodesOfConduct
{
    public function getAllCodesOfConduct_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodesOfConduct\GetAllCodesOfConduct_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodesOfConduct\GetAllCodesOfConduct_();
    }
    public function getConductCode_($key) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodesOfConduct\GetConductCode_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodesOfConduct\GetConductCode_($key);
    }
}
