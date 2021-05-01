<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\User;

final class Repos
{
    function get(string $visibility = 'all', string $affiliation = 'owner,collaborator,organization_member', string $type = 'all', string $sort = 'full_name', $direction, int $per_page = 30, int $page = 1, $since, $before) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListForAuthenticatedUserOperation($visibility, $affiliation, $type, $sort, $direction, $per_page, $page, $since, $before);
    }
    function post() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateForAuthenticatedUserOperation();
    }
}
