<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Search
{
    public function code_(string $q, string $sort, string $order = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Code_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Code_($q, $sort, $order, $per_page, $page);
    }
    public function commits_(string $q, string $sort, string $order = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Commits_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Commits_($q, $sort, $order, $per_page, $page);
    }
    public function issuesAndPullRequests_(string $q, string $sort, string $order = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\IssuesAndPullRequests_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\IssuesAndPullRequests_($q, $sort, $order, $per_page, $page);
    }
    public function labels_(int $repository_id, string $q, string $sort, string $order = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Labels_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Labels_($repository_id, $q, $sort, $order, $per_page, $page);
    }
    public function repos_(string $q, string $sort, string $order = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Repos_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Repos_($q, $sort, $order, $per_page, $page);
    }
    public function topics_(string $q, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Topics_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Topics_($q, $per_page, $page);
    }
    public function users_(string $q, string $sort, string $order = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Users_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Users_($q, $sort, $order, $per_page, $page);
    }
}
