<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;
use React\Promise\PromiseInterface;

use function array_key_exists;

final class Codespaces
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function listInOrganization(string $org, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\ListInOrganization::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\ListInOrganization::class] = new Operator\Codespaces\ListInOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces());
        }

        return $this->operator[Operator\Codespaces\ListInOrganization::class]->call($org, $perPage, $page);
    }

    public function setCodespacesBilling(string $org, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\SetCodespacesBilling::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\SetCodespacesBilling::class] = new Operator\Codespaces\SetCodespacesBilling($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Billing());
        }

        return $this->operator[Operator\Codespaces\SetCodespacesBilling::class]->call($org, $params);
    }

    public function setCodespacesBillingUsers(string $org, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\SetCodespacesBillingUsers::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\SetCodespacesBillingUsers::class] = new Operator\Codespaces\SetCodespacesBillingUsers($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Billing🌀SelectedUsers());
        }

        return $this->operator[Operator\Codespaces\SetCodespacesBillingUsers::class]->call($org, $params);
    }

    public function deleteCodespacesBillingUsers(string $org, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\DeleteCodespacesBillingUsers::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\DeleteCodespacesBillingUsers::class] = new Operator\Codespaces\DeleteCodespacesBillingUsers($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Billing🌀SelectedUsers());
        }

        return $this->operator[Operator\Codespaces\DeleteCodespacesBillingUsers::class]->call($org, $params);
    }

    public function listOrgSecrets(string $org, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\ListOrgSecrets::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\ListOrgSecrets::class] = new Operator\Codespaces\ListOrgSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets());
        }

        return $this->operator[Operator\Codespaces\ListOrgSecrets::class]->call($org, $perPage, $page);
    }

    public function getOrgPublicKey(string $org): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\GetOrgPublicKey::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\GetOrgPublicKey::class] = new Operator\Codespaces\GetOrgPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀PublicKey());
        }

        return $this->operator[Operator\Codespaces\GetOrgPublicKey::class]->call($org);
    }

    public function getOrgSecret(string $org, string $secretName): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\GetOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\GetOrgSecret::class] = new Operator\Codespaces\GetOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Codespaces\GetOrgSecret::class]->call($org, $secretName);
    }

    public function createOrUpdateOrgSecret(string $org, string $secretName, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\CreateOrUpdateOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\CreateOrUpdateOrgSecret::class] = new Operator\Codespaces\CreateOrUpdateOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Codespaces\CreateOrUpdateOrgSecret::class]->call($org, $secretName, $params);
    }

    public function deleteOrgSecret(string $org, string $secretName): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\DeleteOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\DeleteOrgSecret::class] = new Operator\Codespaces\DeleteOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Codespaces\DeleteOrgSecret::class]->call($org, $secretName);
    }

    public function listSelectedReposForOrgSecret(string $org, string $secretName, int $page, int $perPage): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\ListSelectedReposForOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\ListSelectedReposForOrgSecret::class] = new Operator\Codespaces\ListSelectedReposForOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories());
        }

        return $this->operator[Operator\Codespaces\ListSelectedReposForOrgSecret::class]->call($org, $secretName, $page, $perPage);
    }

    public function setSelectedReposForOrgSecret(string $org, string $secretName, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\SetSelectedReposForOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\SetSelectedReposForOrgSecret::class] = new Operator\Codespaces\SetSelectedReposForOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories());
        }

        return $this->operator[Operator\Codespaces\SetSelectedReposForOrgSecret::class]->call($org, $secretName, $params);
    }

    public function addSelectedRepoToOrgSecret(string $org, string $secretName, int $repositoryId): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\AddSelectedRepoToOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\AddSelectedRepoToOrgSecret::class] = new Operator\Codespaces\AddSelectedRepoToOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId());
        }

        return $this->operator[Operator\Codespaces\AddSelectedRepoToOrgSecret::class]->call($org, $secretName, $repositoryId);
    }

    public function removeSelectedRepoFromOrgSecret(string $org, string $secretName, int $repositoryId): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\RemoveSelectedRepoFromOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\RemoveSelectedRepoFromOrgSecret::class] = new Operator\Codespaces\RemoveSelectedRepoFromOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId());
        }

        return $this->operator[Operator\Codespaces\RemoveSelectedRepoFromOrgSecret::class]->call($org, $secretName, $repositoryId);
    }

    public function getCodespacesForUserInOrg(string $org, string $username, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\GetCodespacesForUserInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\GetCodespacesForUserInOrg::class] = new Operator\Codespaces\GetCodespacesForUserInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces());
        }

        return $this->operator[Operator\Codespaces\GetCodespacesForUserInOrg::class]->call($org, $username, $perPage, $page);
    }

    public function deleteFromOrganization(string $org, string $username, string $codespaceName): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\DeleteFromOrganization::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\DeleteFromOrganization::class] = new Operator\Codespaces\DeleteFromOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName());
        }

        return $this->operator[Operator\Codespaces\DeleteFromOrganization::class]->call($org, $username, $codespaceName);
    }

    public function stopInOrganization(string $org, string $username, string $codespaceName): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\StopInOrganization::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\StopInOrganization::class] = new Operator\Codespaces\StopInOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName🌀Stop());
        }

        return $this->operator[Operator\Codespaces\StopInOrganization::class]->call($org, $username, $codespaceName);
    }

    public function listInRepositoryForAuthenticatedUser(string $owner, string $repo, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\ListInRepositoryForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\ListInRepositoryForAuthenticatedUser::class] = new Operator\Codespaces\ListInRepositoryForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces());
        }

        return $this->operator[Operator\Codespaces\ListInRepositoryForAuthenticatedUser::class]->call($owner, $repo, $perPage, $page);
    }

    public function createWithRepoForAuthenticatedUser(string $owner, string $repo, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\CreateWithRepoForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\CreateWithRepoForAuthenticatedUser::class] = new Operator\Codespaces\CreateWithRepoForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces());
        }

        return $this->operator[Operator\Codespaces\CreateWithRepoForAuthenticatedUser::class]->call($owner, $repo, $params);
    }

    public function listDevcontainersInRepositoryForAuthenticatedUser(string $owner, string $repo, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser::class] = new Operator\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Devcontainers());
        }

        return $this->operator[Operator\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser::class]->call($owner, $repo, $perPage, $page);
    }

    public function repoMachinesForAuthenticatedUser(string $owner, string $repo, string $location, string $clientIp): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\RepoMachinesForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\RepoMachinesForAuthenticatedUser::class] = new Operator\Codespaces\RepoMachinesForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Machines());
        }

        return $this->operator[Operator\Codespaces\RepoMachinesForAuthenticatedUser::class]->call($owner, $repo, $location, $clientIp);
    }

    public function preFlightWithRepoForAuthenticatedUser(string $owner, string $repo, string $ref, string $clientIp): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\PreFlightWithRepoForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\PreFlightWithRepoForAuthenticatedUser::class] = new Operator\Codespaces\PreFlightWithRepoForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀New_());
        }

        return $this->operator[Operator\Codespaces\PreFlightWithRepoForAuthenticatedUser::class]->call($owner, $repo, $ref, $clientIp);
    }

    public function listRepoSecrets(string $owner, string $repo, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\ListRepoSecrets::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\ListRepoSecrets::class] = new Operator\Codespaces\ListRepoSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets());
        }

        return $this->operator[Operator\Codespaces\ListRepoSecrets::class]->call($owner, $repo, $perPage, $page);
    }

    public function getRepoPublicKey(string $owner, string $repo): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\GetRepoPublicKey::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\GetRepoPublicKey::class] = new Operator\Codespaces\GetRepoPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀PublicKey());
        }

        return $this->operator[Operator\Codespaces\GetRepoPublicKey::class]->call($owner, $repo);
    }

    public function getRepoSecret(string $owner, string $repo, string $secretName): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\GetRepoSecret::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\GetRepoSecret::class] = new Operator\Codespaces\GetRepoSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Codespaces\GetRepoSecret::class]->call($owner, $repo, $secretName);
    }

    public function createOrUpdateRepoSecret(string $owner, string $repo, string $secretName, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\CreateOrUpdateRepoSecret::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\CreateOrUpdateRepoSecret::class] = new Operator\Codespaces\CreateOrUpdateRepoSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Codespaces\CreateOrUpdateRepoSecret::class]->call($owner, $repo, $secretName, $params);
    }

    public function deleteRepoSecret(string $owner, string $repo, string $secretName): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\DeleteRepoSecret::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\DeleteRepoSecret::class] = new Operator\Codespaces\DeleteRepoSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Codespaces\DeleteRepoSecret::class]->call($owner, $repo, $secretName);
    }

    public function createWithPrForAuthenticatedUser(string $owner, string $repo, int $pullNumber, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\CreateWithPrForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\CreateWithPrForAuthenticatedUser::class] = new Operator\Codespaces\CreateWithPrForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Codespaces());
        }

        return $this->operator[Operator\Codespaces\CreateWithPrForAuthenticatedUser::class]->call($owner, $repo, $pullNumber, $params);
    }

    public function listForAuthenticatedUser(int $repositoryId, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\ListForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\ListForAuthenticatedUser::class] = new Operator\Codespaces\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces());
        }

        return $this->operator[Operator\Codespaces\ListForAuthenticatedUser::class]->call($repositoryId, $perPage, $page);
    }

    public function createForAuthenticatedUser(array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\CreateForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\CreateForAuthenticatedUser::class] = new Operator\Codespaces\CreateForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces());
        }

        return $this->operator[Operator\Codespaces\CreateForAuthenticatedUser::class]->call($params);
    }

    public function listSecretsForAuthenticatedUser(int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\ListSecretsForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\ListSecretsForAuthenticatedUser::class] = new Operator\Codespaces\ListSecretsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets());
        }

        return $this->operator[Operator\Codespaces\ListSecretsForAuthenticatedUser::class]->call($perPage, $page);
    }

    public function getPublicKeyForAuthenticatedUser(): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\GetPublicKeyForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\GetPublicKeyForAuthenticatedUser::class] = new Operator\Codespaces\GetPublicKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀PublicKey());
        }

        return $this->operator[Operator\Codespaces\GetPublicKeyForAuthenticatedUser::class]->call();
    }

    public function getSecretForAuthenticatedUser(string $secretName): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\GetSecretForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\GetSecretForAuthenticatedUser::class] = new Operator\Codespaces\GetSecretForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Codespaces\GetSecretForAuthenticatedUser::class]->call($secretName);
    }

    public function createOrUpdateSecretForAuthenticatedUser(string $secretName, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\CreateOrUpdateSecretForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\CreateOrUpdateSecretForAuthenticatedUser::class] = new Operator\Codespaces\CreateOrUpdateSecretForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Codespaces\CreateOrUpdateSecretForAuthenticatedUser::class]->call($secretName, $params);
    }

    public function deleteSecretForAuthenticatedUser(string $secretName): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\DeleteSecretForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\DeleteSecretForAuthenticatedUser::class] = new Operator\Codespaces\DeleteSecretForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Codespaces\DeleteSecretForAuthenticatedUser::class]->call($secretName);
    }

    public function listRepositoriesForSecretForAuthenticatedUser(string $secretName): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\ListRepositoriesForSecretForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\ListRepositoriesForSecretForAuthenticatedUser::class] = new Operator\Codespaces\ListRepositoriesForSecretForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories());
        }

        return $this->operator[Operator\Codespaces\ListRepositoriesForSecretForAuthenticatedUser::class]->call($secretName);
    }

    public function setRepositoriesForSecretForAuthenticatedUser(string $secretName, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\SetRepositoriesForSecretForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\SetRepositoriesForSecretForAuthenticatedUser::class] = new Operator\Codespaces\SetRepositoriesForSecretForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories());
        }

        return $this->operator[Operator\Codespaces\SetRepositoriesForSecretForAuthenticatedUser::class]->call($secretName, $params);
    }

    public function addRepositoryForSecretForAuthenticatedUser(string $secretName, int $repositoryId): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\AddRepositoryForSecretForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\AddRepositoryForSecretForAuthenticatedUser::class] = new Operator\Codespaces\AddRepositoryForSecretForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId());
        }

        return $this->operator[Operator\Codespaces\AddRepositoryForSecretForAuthenticatedUser::class]->call($secretName, $repositoryId);
    }

    public function removeRepositoryForSecretForAuthenticatedUser(string $secretName, int $repositoryId): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\RemoveRepositoryForSecretForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\RemoveRepositoryForSecretForAuthenticatedUser::class] = new Operator\Codespaces\RemoveRepositoryForSecretForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId());
        }

        return $this->operator[Operator\Codespaces\RemoveRepositoryForSecretForAuthenticatedUser::class]->call($secretName, $repositoryId);
    }

    public function getForAuthenticatedUser(string $codespaceName): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\GetForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\GetForAuthenticatedUser::class] = new Operator\Codespaces\GetForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName());
        }

        return $this->operator[Operator\Codespaces\GetForAuthenticatedUser::class]->call($codespaceName);
    }

    public function deleteForAuthenticatedUser(string $codespaceName): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\DeleteForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\DeleteForAuthenticatedUser::class] = new Operator\Codespaces\DeleteForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName());
        }

        return $this->operator[Operator\Codespaces\DeleteForAuthenticatedUser::class]->call($codespaceName);
    }

    public function updateForAuthenticatedUser(string $codespaceName, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\UpdateForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\UpdateForAuthenticatedUser::class] = new Operator\Codespaces\UpdateForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName());
        }

        return $this->operator[Operator\Codespaces\UpdateForAuthenticatedUser::class]->call($codespaceName, $params);
    }

    public function exportForAuthenticatedUser(string $codespaceName): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\ExportForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\ExportForAuthenticatedUser::class] = new Operator\Codespaces\ExportForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Exports());
        }

        return $this->operator[Operator\Codespaces\ExportForAuthenticatedUser::class]->call($codespaceName);
    }

    public function getExportDetailsForAuthenticatedUser(string $codespaceName, string $exportId): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\GetExportDetailsForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\GetExportDetailsForAuthenticatedUser::class] = new Operator\Codespaces\GetExportDetailsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Exports🌀ExportId());
        }

        return $this->operator[Operator\Codespaces\GetExportDetailsForAuthenticatedUser::class]->call($codespaceName, $exportId);
    }

    public function codespaceMachinesForAuthenticatedUser(string $codespaceName): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\CodespaceMachinesForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\CodespaceMachinesForAuthenticatedUser::class] = new Operator\Codespaces\CodespaceMachinesForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Machines());
        }

        return $this->operator[Operator\Codespaces\CodespaceMachinesForAuthenticatedUser::class]->call($codespaceName);
    }

    public function publishForAuthenticatedUser(string $codespaceName, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\PublishForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\PublishForAuthenticatedUser::class] = new Operator\Codespaces\PublishForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Publish());
        }

        return $this->operator[Operator\Codespaces\PublishForAuthenticatedUser::class]->call($codespaceName, $params);
    }

    public function startForAuthenticatedUser(string $codespaceName): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\StartForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\StartForAuthenticatedUser::class] = new Operator\Codespaces\StartForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Start());
        }

        return $this->operator[Operator\Codespaces\StartForAuthenticatedUser::class]->call($codespaceName);
    }

    public function stopForAuthenticatedUser(string $codespaceName): PromiseInterface
    {
        if (array_key_exists(Operator\Codespaces\StopForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Codespaces\StopForAuthenticatedUser::class] = new Operator\Codespaces\StopForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Stop());
        }

        return $this->operator[Operator\Codespaces\StopForAuthenticatedUser::class]->call($codespaceName);
    }
}
