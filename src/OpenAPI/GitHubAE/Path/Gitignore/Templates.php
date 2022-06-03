<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Gitignore;

final class Templates
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gitignore\GetAllTemplates
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gitignore\GetAllTemplates();
    }
}
