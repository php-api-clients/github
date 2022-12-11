<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation;

final class Gitignore
{
    public function getAllTemplates_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gitignore\GetAllTemplates_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gitignore\GetAllTemplates_();
    }
    public function getTemplate_(string $name) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gitignore\GetTemplate_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gitignore\GetTemplate_($name);
    }
}
