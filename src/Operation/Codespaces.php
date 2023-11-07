<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\Codespace;
use ApiClients\Client\GitHub\Schema\CodespaceExportDetails;
use ApiClients\Client\GitHub\Schema\CodespacesOrgSecret;
use ApiClients\Client\GitHub\Schema\CodespacesPermissionsCheckForDevcontainer;
use ApiClients\Client\GitHub\Schema\CodespacesPublicKey;
use ApiClients\Client\GitHub\Schema\CodespacesSecret;
use ApiClients\Client\GitHub\Schema\CodespacesUserPublicKey;
use ApiClients\Client\GitHub\Schema\CodespaceWithFullRepository;
use ApiClients\Client\GitHub\Schema\EmptyObject;
use ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListInOrganization\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHub\Schema\RepoCodespacesSecret;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Codespaces
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    public function listInOrganization(string $org, int $perPage, int $page): Ok|WithoutBody
    {
        return $this->operators->codespaces👷ListInOrganization()->call($org, $perPage, $page);
    }

    public function setCodespacesAccess(string $org, array $params): WithoutBody
    {
        return $this->operators->codespaces👷SetCodespacesAccess()->call($org, $params);
    }

    public function setCodespacesAccessUsers(string $org, array $params): WithoutBody
    {
        return $this->operators->codespaces👷SetCodespacesAccessUsers()->call($org, $params);
    }

    public function deleteCodespacesAccessUsers(string $org, array $params): WithoutBody
    {
        return $this->operators->codespaces👷DeleteCodespacesAccessUsers()->call($org, $params);
    }

    public function listOrgSecrets(string $org, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListOrgSecrets\Response\ApplicationJson\Ok
    {
        return $this->operators->codespaces👷ListOrgSecrets()->call($org, $perPage, $page);
    }

    public function getOrgPublicKey(string $org): CodespacesPublicKey
    {
        return $this->operators->codespaces👷GetOrgPublicKey()->call($org);
    }

    public function getOrgSecret(string $org, string $secretName): CodespacesOrgSecret
    {
        return $this->operators->codespaces👷GetOrgSecret()->call($org, $secretName);
    }

    public function createOrUpdateOrgSecret(string $org, string $secretName, array $params): EmptyObject|WithoutBody
    {
        return $this->operators->codespaces👷CreateOrUpdateOrgSecret()->call($org, $secretName, $params);
    }

    public function deleteOrgSecret(string $org, string $secretName): WithoutBody
    {
        return $this->operators->codespaces👷DeleteOrgSecret()->call($org, $secretName);
    }

    public function listSelectedReposForOrgSecret(string $org, string $secretName, int $page, int $perPage): Json
    {
        return $this->operators->codespaces👷ListSelectedReposForOrgSecret()->call($org, $secretName, $page, $perPage);
    }

    public function setSelectedReposForOrgSecret(string $org, string $secretName, array $params): WithoutBody
    {
        return $this->operators->codespaces👷SetSelectedReposForOrgSecret()->call($org, $secretName, $params);
    }

    public function addSelectedRepoToOrgSecret(string $org, string $secretName, int $repositoryId): WithoutBody
    {
        return $this->operators->codespaces👷AddSelectedRepoToOrgSecret()->call($org, $secretName, $repositoryId);
    }

    public function removeSelectedRepoFromOrgSecret(string $org, string $secretName, int $repositoryId): WithoutBody
    {
        return $this->operators->codespaces👷RemoveSelectedRepoFromOrgSecret()->call($org, $secretName, $repositoryId);
    }

    public function getCodespacesForUserInOrg(string $org, string $username, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\GetCodespacesForUserInOrg\Response\ApplicationJson\Ok\Application\Json|WithoutBody
    {
        return $this->operators->codespaces👷GetCodespacesForUserInOrg()->call($org, $username, $perPage, $page);
    }

    public function deleteFromOrganization(string $org, string $username, string $codespaceName): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\DeleteFromOrganization\Response\ApplicationJson\Accepted\Application\Json|WithoutBody
    {
        return $this->operators->codespaces👷DeleteFromOrganization()->call($org, $username, $codespaceName);
    }

    public function stopInOrganization(string $org, string $username, string $codespaceName): Codespace|WithoutBody
    {
        return $this->operators->codespaces👷StopInOrganization()->call($org, $username, $codespaceName);
    }

    public function listInRepositoryForAuthenticatedUser(string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListInRepositoryForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json
    {
        return $this->operators->codespaces👷ListInRepositoryForAuthenticatedUser()->call($owner, $repo, $perPage, $page);
    }

    public function createWithRepoForAuthenticatedUser(string $owner, string $repo, array $params): Codespace
    {
        return $this->operators->codespaces👷CreateWithRepoForAuthenticatedUser()->call($owner, $repo, $params);
    }

    public function listDevcontainersInRepositoryForAuthenticatedUser(string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser\Response\ApplicationJson\Ok
    {
        return $this->operators->codespaces👷ListDevcontainersInRepositoryForAuthenticatedUser()->call($owner, $repo, $perPage, $page);
    }

    public function repoMachinesForAuthenticatedUser(string $owner, string $repo, string $location, string $clientIp, string $ref): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\RepoMachinesForAuthenticatedUser\Response\ApplicationJson\Ok|WithoutBody
    {
        return $this->operators->codespaces👷RepoMachinesForAuthenticatedUser()->call($owner, $repo, $location, $clientIp, $ref);
    }

    public function preFlightWithRepoForAuthenticatedUser(string $owner, string $repo, string $ref, string $clientIp): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\PreFlightWithRepoForAuthenticatedUser\Response\ApplicationJson\Ok
    {
        return $this->operators->codespaces👷PreFlightWithRepoForAuthenticatedUser()->call($owner, $repo, $ref, $clientIp);
    }

    public function checkPermissionsForDevcontainer(string $owner, string $repo, string $ref, string $devcontainerPath): CodespacesPermissionsCheckForDevcontainer
    {
        return $this->operators->codespaces👷CheckPermissionsForDevcontainer()->call($owner, $repo, $ref, $devcontainerPath);
    }

    public function listRepoSecrets(string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListRepoSecrets\Response\ApplicationJson\Ok
    {
        return $this->operators->codespaces👷ListRepoSecrets()->call($owner, $repo, $perPage, $page);
    }

    public function getRepoPublicKey(string $owner, string $repo): CodespacesPublicKey
    {
        return $this->operators->codespaces👷GetRepoPublicKey()->call($owner, $repo);
    }

    public function getRepoSecret(string $owner, string $repo, string $secretName): RepoCodespacesSecret
    {
        return $this->operators->codespaces👷GetRepoSecret()->call($owner, $repo, $secretName);
    }

    public function createOrUpdateRepoSecret(string $owner, string $repo, string $secretName, array $params): EmptyObject|WithoutBody
    {
        return $this->operators->codespaces👷CreateOrUpdateRepoSecret()->call($owner, $repo, $secretName, $params);
    }

    public function deleteRepoSecret(string $owner, string $repo, string $secretName): WithoutBody
    {
        return $this->operators->codespaces👷DeleteRepoSecret()->call($owner, $repo, $secretName);
    }

    public function createWithPrForAuthenticatedUser(string $owner, string $repo, int $pullNumber, array $params): Codespace
    {
        return $this->operators->codespaces👷CreateWithPrForAuthenticatedUser()->call($owner, $repo, $pullNumber, $params);
    }

    public function listForAuthenticatedUser(int $repositoryId, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|WithoutBody
    {
        return $this->operators->codespaces👷ListForAuthenticatedUser()->call($repositoryId, $perPage, $page);
    }

    public function createForAuthenticatedUser(array $params): Codespace
    {
        return $this->operators->codespaces👷CreateForAuthenticatedUser()->call($params);
    }

    public function listSecretsForAuthenticatedUser(int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListSecretsForAuthenticatedUser\Response\ApplicationJson\Ok
    {
        return $this->operators->codespaces👷ListSecretsForAuthenticatedUser()->call($perPage, $page);
    }

    public function getPublicKeyForAuthenticatedUser(): CodespacesUserPublicKey
    {
        return $this->operators->codespaces👷GetPublicKeyForAuthenticatedUser()->call();
    }

    public function getSecretForAuthenticatedUser(string $secretName): CodespacesSecret
    {
        return $this->operators->codespaces👷GetSecretForAuthenticatedUser()->call($secretName);
    }

    public function createOrUpdateSecretForAuthenticatedUser(string $secretName, array $params): EmptyObject|WithoutBody
    {
        return $this->operators->codespaces👷CreateOrUpdateSecretForAuthenticatedUser()->call($secretName, $params);
    }

    public function deleteSecretForAuthenticatedUser(string $secretName): WithoutBody
    {
        return $this->operators->codespaces👷DeleteSecretForAuthenticatedUser()->call($secretName);
    }

    public function listRepositoriesForSecretForAuthenticatedUser(string $secretName): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListRepositoriesForSecretForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json
    {
        return $this->operators->codespaces👷ListRepositoriesForSecretForAuthenticatedUser()->call($secretName);
    }

    public function setRepositoriesForSecretForAuthenticatedUser(string $secretName, array $params): WithoutBody
    {
        return $this->operators->codespaces👷SetRepositoriesForSecretForAuthenticatedUser()->call($secretName, $params);
    }

    public function addRepositoryForSecretForAuthenticatedUser(string $secretName, int $repositoryId): WithoutBody
    {
        return $this->operators->codespaces👷AddRepositoryForSecretForAuthenticatedUser()->call($secretName, $repositoryId);
    }

    public function removeRepositoryForSecretForAuthenticatedUser(string $secretName, int $repositoryId): WithoutBody
    {
        return $this->operators->codespaces👷RemoveRepositoryForSecretForAuthenticatedUser()->call($secretName, $repositoryId);
    }

    public function getForAuthenticatedUser(string $codespaceName): Codespace|WithoutBody
    {
        return $this->operators->codespaces👷GetForAuthenticatedUser()->call($codespaceName);
    }

    public function deleteForAuthenticatedUser(string $codespaceName): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\DeleteForAuthenticatedUser\Response\ApplicationJson\Accepted\Application\Json|WithoutBody
    {
        return $this->operators->codespaces👷DeleteForAuthenticatedUser()->call($codespaceName);
    }

    public function updateForAuthenticatedUser(string $codespaceName, array $params): Codespace
    {
        return $this->operators->codespaces👷UpdateForAuthenticatedUser()->call($codespaceName, $params);
    }

    public function exportForAuthenticatedUser(string $codespaceName): CodespaceExportDetails
    {
        return $this->operators->codespaces👷ExportForAuthenticatedUser()->call($codespaceName);
    }

    public function getExportDetailsForAuthenticatedUser(string $codespaceName, string $exportId): CodespaceExportDetails
    {
        return $this->operators->codespaces👷GetExportDetailsForAuthenticatedUser()->call($codespaceName, $exportId);
    }

    public function codespaceMachinesForAuthenticatedUser(string $codespaceName): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\CodespaceMachinesForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|WithoutBody
    {
        return $this->operators->codespaces👷CodespaceMachinesForAuthenticatedUser()->call($codespaceName);
    }

    public function publishForAuthenticatedUser(string $codespaceName, array $params): CodespaceWithFullRepository
    {
        return $this->operators->codespaces👷PublishForAuthenticatedUser()->call($codespaceName, $params);
    }

    public function startForAuthenticatedUser(string $codespaceName): Codespace|WithoutBody
    {
        return $this->operators->codespaces👷StartForAuthenticatedUser()->call($codespaceName);
    }

    public function stopForAuthenticatedUser(string $codespaceName): Codespace
    {
        return $this->operators->codespaces👷StopForAuthenticatedUser()->call($codespaceName);
    }
}
