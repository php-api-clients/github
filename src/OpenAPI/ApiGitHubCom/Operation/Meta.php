<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Meta
{
    public function root_() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\Root_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\Root_();
    }
    public function get_() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\Get_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\Get_();
    }
    public function getOctocat_($s) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetOctocat_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetOctocat_($s);
    }
    public function getZen_() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetZen_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetZen_();
    }
}
