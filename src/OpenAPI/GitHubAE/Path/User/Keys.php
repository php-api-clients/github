<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\\User;

final class Keys
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListPublicSshKeysForAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListPublicSshKeysForAuthenticatedOperation($per_page, $page);
    }
    function post() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\CreatePublicSshKeyForAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\CreatePublicSshKeyForAuthenticatedOperation();
    }
}
