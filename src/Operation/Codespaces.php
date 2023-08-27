<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Operators;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Codespace;
use ApiClients\Client\GitHub\Schema\CodespaceExportDetails;
use ApiClients\Client\GitHub\Schema\CodespacesOrgSecret;
use ApiClients\Client\GitHub\Schema\CodespacesPublicKey;
use ApiClients\Client\GitHub\Schema\CodespacesSecret;
use ApiClients\Client\GitHub\Schema\CodespacesUserPublicKey;
use ApiClients\Client\GitHub\Schema\CodespaceWithFullRepository;
use ApiClients\Client\GitHub\Schema\EmptyObject;
use ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListInOrganization\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHub\Schema\RepoCodespacesSecret;

final class Codespaces
{
    public function __construct(private Operators $operators)
    {
    }

    /** @return Schema\Operations\Codespaces\ListInOrganization\Response\ApplicationJson\Ok|array{code:int} */
    public function listInOrganization(string $org, int $perPage, int $page): Ok|array
    {
        return $this->operators->codespaces👷ListInOrganization()->call($org, $perPage, $page);
    }

    /** @return array{code:int} */
    public function setCodespacesAccess(string $org, array $params): array
    {
        return $this->operators->codespaces👷SetCodespacesAccess()->call($org, $params);
    }

    /** @return array{code:int} */
    public function setCodespacesAccessUsers(string $org, array $params): array
    {
        return $this->operators->codespaces👷SetCodespacesAccessUsers()->call($org, $params);
    }

    /** @return array{code:int} */
    public function deleteCodespacesAccessUsers(string $org, array $params): array
    {
        return $this->operators->codespaces👷DeleteCodespacesAccessUsers()->call($org, $params);
    }

    /** @return */
    public function listOrgSecrets(string $org, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListOrgSecrets\Response\ApplicationJson\Ok|array
    {
        return $this->operators->codespaces👷ListOrgSecrets()->call($org, $perPage, $page);
    }

    /** @return */
    public function getOrgPublicKey(string $org): CodespacesPublicKey|array
    {
        return $this->operators->codespaces👷GetOrgPublicKey()->call($org);
    }

    /** @return */
    public function getOrgSecret(string $org, string $secretName): CodespacesOrgSecret|array
    {
        return $this->operators->codespaces👷GetOrgSecret()->call($org, $secretName);
    }

    /** @return Schema\EmptyObject|array{code:int} */
    public function createOrUpdateOrgSecret(string $org, string $secretName, array $params): EmptyObject|array
    {
        return $this->operators->codespaces👷CreateOrUpdateOrgSecret()->call($org, $secretName, $params);
    }

    /** @return array{code:int} */
    public function deleteOrgSecret(string $org, string $secretName): array
    {
        return $this->operators->codespaces👷DeleteOrgSecret()->call($org, $secretName);
    }

    /** @return */
    public function listSelectedReposForOrgSecret(string $org, string $secretName, int $page, int $perPage): Json|array
    {
        return $this->operators->codespaces👷ListSelectedReposForOrgSecret()->call($org, $secretName, $page, $perPage);
    }

    /** @return array{code:int} */
    public function setSelectedReposForOrgSecret(string $org, string $secretName, array $params): array
    {
        return $this->operators->codespaces👷SetSelectedReposForOrgSecret()->call($org, $secretName, $params);
    }

    /** @return array{code:int} */
    public function addSelectedRepoToOrgSecret(string $org, string $secretName, int $repositoryId): array
    {
        return $this->operators->codespaces👷AddSelectedRepoToOrgSecret()->call($org, $secretName, $repositoryId);
    }

    /** @return array{code:int} */
    public function removeSelectedRepoFromOrgSecret(string $org, string $secretName, int $repositoryId): array
    {
        return $this->operators->codespaces👷RemoveSelectedRepoFromOrgSecret()->call($org, $secretName, $repositoryId);
    }

    /** @return Schema\Operations\Codespaces\GetCodespacesForUserInOrg\Response\ApplicationJson\Ok\Application\Json|array{code:int} */
    public function getCodespacesForUserInOrg(string $org, string $username, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\GetCodespacesForUserInOrg\Response\ApplicationJson\Ok\Application\Json|array
    {
        return $this->operators->codespaces👷GetCodespacesForUserInOrg()->call($org, $username, $perPage, $page);
    }

    /** @return Schema\Operations\Codespaces\DeleteFromOrganization\Response\ApplicationJson\Accepted\Application\Json|array{code:int} */
    public function deleteFromOrganization(string $org, string $username, string $codespaceName): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\DeleteFromOrganization\Response\ApplicationJson\Accepted\Application\Json|array
    {
        return $this->operators->codespaces👷DeleteFromOrganization()->call($org, $username, $codespaceName);
    }

    /** @return Schema\Codespace|array{code:int} */
    public function stopInOrganization(string $org, string $username, string $codespaceName): Codespace|array
    {
        return $this->operators->codespaces👷StopInOrganization()->call($org, $username, $codespaceName);
    }

    /** @return */
    public function listInRepositoryForAuthenticatedUser(string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListInRepositoryForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|array
    {
        return $this->operators->codespaces👷ListInRepositoryForAuthenticatedUser()->call($owner, $repo, $perPage, $page);
    }

    /** @return */
    public function createWithRepoForAuthenticatedUser(string $owner, string $repo, array $params): Codespace|array
    {
        return $this->operators->codespaces👷CreateWithRepoForAuthenticatedUser()->call($owner, $repo, $params);
    }

    /** @return */
    public function listDevcontainersInRepositoryForAuthenticatedUser(string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser\Response\ApplicationJson\Ok|array
    {
        return $this->operators->codespaces👷ListDevcontainersInRepositoryForAuthenticatedUser()->call($owner, $repo, $perPage, $page);
    }

    /** @return Schema\Operations\Codespaces\RepoMachinesForAuthenticatedUser\Response\ApplicationJson\Ok|array{code:int} */
    public function repoMachinesForAuthenticatedUser(string $owner, string $repo, string $location, string $clientIp): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\RepoMachinesForAuthenticatedUser\Response\ApplicationJson\Ok|array
    {
        return $this->operators->codespaces👷RepoMachinesForAuthenticatedUser()->call($owner, $repo, $location, $clientIp);
    }

    /** @return */
    public function preFlightWithRepoForAuthenticatedUser(string $owner, string $repo, string $ref, string $clientIp): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\PreFlightWithRepoForAuthenticatedUser\Response\ApplicationJson\Ok|array
    {
        return $this->operators->codespaces👷PreFlightWithRepoForAuthenticatedUser()->call($owner, $repo, $ref, $clientIp);
    }

    /** @return */
    public function listRepoSecrets(string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListRepoSecrets\Response\ApplicationJson\Ok|array
    {
        return $this->operators->codespaces👷ListRepoSecrets()->call($owner, $repo, $perPage, $page);
    }

    /** @return */
    public function getRepoPublicKey(string $owner, string $repo): CodespacesPublicKey|array
    {
        return $this->operators->codespaces👷GetRepoPublicKey()->call($owner, $repo);
    }

    /** @return */
    public function getRepoSecret(string $owner, string $repo, string $secretName): RepoCodespacesSecret|array
    {
        return $this->operators->codespaces👷GetRepoSecret()->call($owner, $repo, $secretName);
    }

    /** @return Schema\EmptyObject|array{code:int} */
    public function createOrUpdateRepoSecret(string $owner, string $repo, string $secretName, array $params): EmptyObject|array
    {
        return $this->operators->codespaces👷CreateOrUpdateRepoSecret()->call($owner, $repo, $secretName, $params);
    }

    /** @return array{code:int} */
    public function deleteRepoSecret(string $owner, string $repo, string $secretName): array
    {
        return $this->operators->codespaces👷DeleteRepoSecret()->call($owner, $repo, $secretName);
    }

    /** @return */
    public function createWithPrForAuthenticatedUser(string $owner, string $repo, int $pullNumber, array $params): Codespace|array
    {
        return $this->operators->codespaces👷CreateWithPrForAuthenticatedUser()->call($owner, $repo, $pullNumber, $params);
    }

    /** @return Schema\Operations\Codespaces\ListForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|array{code:int} */
    public function listForAuthenticatedUser(int $repositoryId, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|array
    {
        return $this->operators->codespaces👷ListForAuthenticatedUser()->call($repositoryId, $perPage, $page);
    }

    /** @return */
    public function createForAuthenticatedUser(array $params): Codespace|array
    {
        return $this->operators->codespaces👷CreateForAuthenticatedUser()->call($params);
    }

    /** @return */
    public function listSecretsForAuthenticatedUser(int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListSecretsForAuthenticatedUser\Response\ApplicationJson\Ok|array
    {
        return $this->operators->codespaces👷ListSecretsForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return */
    public function getPublicKeyForAuthenticatedUser(): CodespacesUserPublicKey|array
    {
        return $this->operators->codespaces👷GetPublicKeyForAuthenticatedUser()->call();
    }

    /** @return */
    public function getSecretForAuthenticatedUser(string $secretName): CodespacesSecret|array
    {
        return $this->operators->codespaces👷GetSecretForAuthenticatedUser()->call($secretName);
    }

    /** @return Schema\EmptyObject|array{code:int} */
    public function createOrUpdateSecretForAuthenticatedUser(string $secretName, array $params): EmptyObject|array
    {
        return $this->operators->codespaces👷CreateOrUpdateSecretForAuthenticatedUser()->call($secretName, $params);
    }

    /** @return array{code:int} */
    public function deleteSecretForAuthenticatedUser(string $secretName): array
    {
        return $this->operators->codespaces👷DeleteSecretForAuthenticatedUser()->call($secretName);
    }

    /** @return */
    public function listRepositoriesForSecretForAuthenticatedUser(string $secretName): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListRepositoriesForSecretForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|array
    {
        return $this->operators->codespaces👷ListRepositoriesForSecretForAuthenticatedUser()->call($secretName);
    }

    /** @return array{code:int} */
    public function setRepositoriesForSecretForAuthenticatedUser(string $secretName, array $params): array
    {
        return $this->operators->codespaces👷SetRepositoriesForSecretForAuthenticatedUser()->call($secretName, $params);
    }

    /** @return array{code:int} */
    public function addRepositoryForSecretForAuthenticatedUser(string $secretName, int $repositoryId): array
    {
        return $this->operators->codespaces👷AddRepositoryForSecretForAuthenticatedUser()->call($secretName, $repositoryId);
    }

    /** @return array{code:int} */
    public function removeRepositoryForSecretForAuthenticatedUser(string $secretName, int $repositoryId): array
    {
        return $this->operators->codespaces👷RemoveRepositoryForSecretForAuthenticatedUser()->call($secretName, $repositoryId);
    }

    /** @return Schema\Codespace|array{code:int} */
    public function getForAuthenticatedUser(string $codespaceName): Codespace|array
    {
        return $this->operators->codespaces👷GetForAuthenticatedUser()->call($codespaceName);
    }

    /** @return Schema\Operations\Codespaces\DeleteForAuthenticatedUser\Response\ApplicationJson\Accepted\Application\Json|array{code:int} */
    public function deleteForAuthenticatedUser(string $codespaceName): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\DeleteForAuthenticatedUser\Response\ApplicationJson\Accepted\Application\Json|array
    {
        return $this->operators->codespaces👷DeleteForAuthenticatedUser()->call($codespaceName);
    }

    /** @return */
    public function updateForAuthenticatedUser(string $codespaceName, array $params): Codespace|array
    {
        return $this->operators->codespaces👷UpdateForAuthenticatedUser()->call($codespaceName, $params);
    }

    /** @return */
    public function exportForAuthenticatedUser(string $codespaceName): CodespaceExportDetails|array
    {
        return $this->operators->codespaces👷ExportForAuthenticatedUser()->call($codespaceName);
    }

    /** @return */
    public function getExportDetailsForAuthenticatedUser(string $codespaceName, string $exportId): CodespaceExportDetails|array
    {
        return $this->operators->codespaces👷GetExportDetailsForAuthenticatedUser()->call($codespaceName, $exportId);
    }

    /** @return Schema\Operations\Codespaces\CodespaceMachinesForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|array{code:int} */
    public function codespaceMachinesForAuthenticatedUser(string $codespaceName): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\CodespaceMachinesForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|array
    {
        return $this->operators->codespaces👷CodespaceMachinesForAuthenticatedUser()->call($codespaceName);
    }

    /** @return */
    public function publishForAuthenticatedUser(string $codespaceName, array $params): CodespaceWithFullRepository|array
    {
        return $this->operators->codespaces👷PublishForAuthenticatedUser()->call($codespaceName, $params);
    }

    /** @return Schema\Codespace|array{code:int} */
    public function startForAuthenticatedUser(string $codespaceName): Codespace|array
    {
        return $this->operators->codespaces👷StartForAuthenticatedUser()->call($codespaceName);
    }

    /** @return */
    public function stopForAuthenticatedUser(string $codespaceName): Codespace|array
    {
        return $this->operators->codespaces👷StopForAuthenticatedUser()->call($codespaceName);
    }
}
