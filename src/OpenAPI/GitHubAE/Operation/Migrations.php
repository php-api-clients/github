<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation;

final class Migrations
{
    public function listForOrg_($org, int $per_page = 30, int $page = 1, $exclude) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\ListForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\ListForOrg_($org, $per_page, $page, $exclude);
    }
    public function startForOrg_($org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\StartForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\StartForOrg_($org);
    }
    public function getStatusForOrg_($org, $migration_id, $exclude) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\GetStatusForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\GetStatusForOrg_($org, $migration_id, $exclude);
    }
    public function listForAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\ListForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\ListForAuthenticatedUser_($per_page, $page);
    }
    public function startForAuthenticatedUser_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\StartForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\StartForAuthenticatedUser_();
    }
    public function getArchiveForAuthenticatedUser_($migration_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\GetArchiveForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\GetArchiveForAuthenticatedUser_($migration_id);
    }
    public function listReposForAuthenticatedUser_($migration_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\ListReposForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\ListReposForAuthenticatedUser_($migration_id, $per_page, $page);
    }
}
