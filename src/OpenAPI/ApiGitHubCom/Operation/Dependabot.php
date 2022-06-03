<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Dependabot
{
    public function listOrgSecrets_($org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListOrgSecrets_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListOrgSecrets_($org, $per_page, $page);
    }
    public function getOrgPublicKey_($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetOrgPublicKey_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetOrgPublicKey_($org);
    }
    public function getOrgSecret_($org, $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetOrgSecret_($org, $secret_name);
    }
    public function createOrUpdateOrgSecret_($org, $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\CreateOrUpdateOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\CreateOrUpdateOrgSecret_($org, $secret_name);
    }
    public function deleteOrgSecret_($org, $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\DeleteOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\DeleteOrgSecret_($org, $secret_name);
    }
    public function listSelectedReposForOrgSecret_($org, $secret_name, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListSelectedReposForOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListSelectedReposForOrgSecret_($org, $secret_name, $page, $per_page);
    }
    public function setSelectedReposForOrgSecret_($org, $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\SetSelectedReposForOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\SetSelectedReposForOrgSecret_($org, $secret_name);
    }
    public function addSelectedRepoToOrgSecret_($org, $secret_name, $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\AddSelectedRepoToOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\AddSelectedRepoToOrgSecret_($org, $secret_name, $repository_id);
    }
    public function removeSelectedRepoFromOrgSecret_($org, $secret_name, $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\RemoveSelectedRepoFromOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\RemoveSelectedRepoFromOrgSecret_($org, $secret_name, $repository_id);
    }
    public function listRepoSecrets_($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListRepoSecrets_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListRepoSecrets_($owner, $repo, $per_page, $page);
    }
    public function getRepoPublicKey_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetRepoPublicKey_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetRepoPublicKey_($owner, $repo);
    }
    public function getRepoSecret_($owner, $repo, $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetRepoSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetRepoSecret_($owner, $repo, $secret_name);
    }
    public function createOrUpdateRepoSecret_($owner, $repo, $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\CreateOrUpdateRepoSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\CreateOrUpdateRepoSecret_($owner, $repo, $secret_name);
    }
    public function deleteRepoSecret_($owner, $repo, $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\DeleteRepoSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\DeleteRepoSecret_($owner, $repo, $secret_name);
    }
}
