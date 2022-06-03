<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation;

final class Search
{
    public function code_($q, $sort, string $order = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Code_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Code_($q, $sort, $order, $per_page, $page);
    }
    public function commits_($q, $sort, string $order = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Commits_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Commits_($q, $sort, $order, $per_page, $page);
    }
    public function issuesAndPullRequests_($q, $sort, string $order = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\IssuesAndPullRequests_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\IssuesAndPullRequests_($q, $sort, $order, $per_page, $page);
    }
    public function labels_($repository_id, $q, $sort, string $order = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Labels_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Labels_($repository_id, $q, $sort, $order, $per_page, $page);
    }
    public function repos_($q, $sort, string $order = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Repos_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Repos_($q, $sort, $order, $per_page, $page);
    }
    public function topics_($q, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Topics_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Topics_($q, $per_page, $page);
    }
    public function users_($q, $sort, string $order = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Users_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Search\Users_($q, $sort, $order, $per_page, $page);
    }
}
