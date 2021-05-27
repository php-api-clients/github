<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Gitignore;

final class Templates
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gitignore\GetAllTemplatesOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gitignore\GetAllTemplatesOperation();
    }
}
