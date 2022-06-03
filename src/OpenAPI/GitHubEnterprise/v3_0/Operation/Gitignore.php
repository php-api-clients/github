<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation;

final class Gitignore
{
    public function getAllTemplates_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Gitignore\GetAllTemplates_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Gitignore\GetAllTemplates_();
    }
    public function getTemplate_($name) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Gitignore\GetTemplate_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Gitignore\GetTemplate_($name);
    }
}
