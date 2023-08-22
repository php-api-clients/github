<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;

use function array_key_exists;

final class Dependabot
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function listAlertsForEnterprise(string $enterprise, string $state, string $severity, string $ecosystem, string $package, string $scope, string $before, string $after, int $last, string $sort, string $direction, int $first, int $perPage): Schema\DependabotAlertWithRepository
    {
        if (array_key_exists(Operator\Dependabot\ListAlertsForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\Dependabot\ListAlertsForEnterprise::class] = new Operator\Dependabot\ListAlertsForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Dependabot🌀Alerts());
        }

        return $this->operator[Operator\Dependabot\ListAlertsForEnterprise::class]->call($enterprise, $state, $severity, $ecosystem, $package, $scope, $before, $after, $last, $sort, $direction, $first, $perPage);
    }

    public function listAlertsForOrg(string $org, string $state, string $severity, string $ecosystem, string $package, string $scope, string $before, string $after, int $last, string $sort, string $direction, int $first, int $perPage): Schema\DependabotAlertWithRepository
    {
        if (array_key_exists(Operator\Dependabot\ListAlertsForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Dependabot\ListAlertsForOrg::class] = new Operator\Dependabot\ListAlertsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Alerts());
        }

        return $this->operator[Operator\Dependabot\ListAlertsForOrg::class]->call($org, $state, $severity, $ecosystem, $package, $scope, $before, $after, $last, $sort, $direction, $first, $perPage);
    }

    public function listOrgSecrets(string $org, int $perPage, int $page): Schema\Operations\Dependabot\ListOrgSecrets\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Dependabot\ListOrgSecrets::class, $this->operator) === false) {
            $this->operator[Operator\Dependabot\ListOrgSecrets::class] = new Operator\Dependabot\ListOrgSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets());
        }

        return $this->operator[Operator\Dependabot\ListOrgSecrets::class]->call($org, $perPage, $page);
    }

    public function getOrgPublicKey(string $org): Schema\DependabotPublicKey
    {
        if (array_key_exists(Operator\Dependabot\GetOrgPublicKey::class, $this->operator) === false) {
            $this->operator[Operator\Dependabot\GetOrgPublicKey::class] = new Operator\Dependabot\GetOrgPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀PublicKey());
        }

        return $this->operator[Operator\Dependabot\GetOrgPublicKey::class]->call($org);
    }

    public function getOrgSecret(string $org, string $secretName): Schema\OrganizationDependabotSecret
    {
        if (array_key_exists(Operator\Dependabot\GetOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Dependabot\GetOrgSecret::class] = new Operator\Dependabot\GetOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Dependabot\GetOrgSecret::class]->call($org, $secretName);
    }

    public function createOrUpdateOrgSecret(string $org, string $secretName, array $params): Schema\EmptyObject
    {
        if (array_key_exists(Operator\Dependabot\CreateOrUpdateOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Dependabot\CreateOrUpdateOrgSecret::class] = new Operator\Dependabot\CreateOrUpdateOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Dependabot\CreateOrUpdateOrgSecret::class]->call($org, $secretName, $params);
    }

    public function deleteOrgSecret(string $org, string $secretName): ResponseInterface
    {
        if (array_key_exists(Operator\Dependabot\DeleteOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Dependabot\DeleteOrgSecret::class] = new Operator\Dependabot\DeleteOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Dependabot\DeleteOrgSecret::class]->call($org, $secretName);
    }

    public function listSelectedReposForOrgSecret(string $org, string $secretName, int $page, int $perPage): Schema\Operations\Dependabot\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Dependabot\ListSelectedReposForOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Dependabot\ListSelectedReposForOrgSecret::class] = new Operator\Dependabot\ListSelectedReposForOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories());
        }

        return $this->operator[Operator\Dependabot\ListSelectedReposForOrgSecret::class]->call($org, $secretName, $page, $perPage);
    }

    public function setSelectedReposForOrgSecret(string $org, string $secretName, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\Dependabot\SetSelectedReposForOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Dependabot\SetSelectedReposForOrgSecret::class] = new Operator\Dependabot\SetSelectedReposForOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories());
        }

        return $this->operator[Operator\Dependabot\SetSelectedReposForOrgSecret::class]->call($org, $secretName, $params);
    }

    public function addSelectedRepoToOrgSecret(string $org, string $secretName, int $repositoryId): ResponseInterface
    {
        if (array_key_exists(Operator\Dependabot\AddSelectedRepoToOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Dependabot\AddSelectedRepoToOrgSecret::class] = new Operator\Dependabot\AddSelectedRepoToOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId());
        }

        return $this->operator[Operator\Dependabot\AddSelectedRepoToOrgSecret::class]->call($org, $secretName, $repositoryId);
    }

    public function removeSelectedRepoFromOrgSecret(string $org, string $secretName, int $repositoryId): ResponseInterface
    {
        if (array_key_exists(Operator\Dependabot\RemoveSelectedRepoFromOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Dependabot\RemoveSelectedRepoFromOrgSecret::class] = new Operator\Dependabot\RemoveSelectedRepoFromOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId());
        }

        return $this->operator[Operator\Dependabot\RemoveSelectedRepoFromOrgSecret::class]->call($org, $secretName, $repositoryId);
    }

    public function listAlertsForRepo(string $owner, string $repo, string $state, string $severity, string $ecosystem, string $package, string $manifest, string $scope, string $before, string $after, int $last, string $sort, string $direction, int $page, int $perPage, int $first): Schema\DependabotAlert
    {
        if (array_key_exists(Operator\Dependabot\ListAlertsForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Dependabot\ListAlertsForRepo::class] = new Operator\Dependabot\ListAlertsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts());
        }

        return $this->operator[Operator\Dependabot\ListAlertsForRepo::class]->call($owner, $repo, $state, $severity, $ecosystem, $package, $manifest, $scope, $before, $after, $last, $sort, $direction, $page, $perPage, $first);
    }

    public function listAlertsForRepoListing(string $owner, string $repo, string $state, string $severity, string $ecosystem, string $package, string $manifest, string $scope, string $before, string $after, int $last, string $sort, string $direction, int $page, int $perPage, int $first): Schema\DependabotAlert
    {
        if (array_key_exists(Operator\Dependabot\ListAlertsForRepoListing::class, $this->operator) === false) {
            $this->operator[Operator\Dependabot\ListAlertsForRepoListing::class] = new Operator\Dependabot\ListAlertsForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts());
        }

        return $this->operator[Operator\Dependabot\ListAlertsForRepoListing::class]->call($owner, $repo, $state, $severity, $ecosystem, $package, $manifest, $scope, $before, $after, $last, $sort, $direction, $page, $perPage, $first);
    }

    public function getAlert(string $owner, string $repo, int $alertNumber): Schema\DependabotAlert
    {
        if (array_key_exists(Operator\Dependabot\GetAlert::class, $this->operator) === false) {
            $this->operator[Operator\Dependabot\GetAlert::class] = new Operator\Dependabot\GetAlert($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts🌀AlertNumber());
        }

        return $this->operator[Operator\Dependabot\GetAlert::class]->call($owner, $repo, $alertNumber);
    }

    public function updateAlert(string $owner, string $repo, int $alertNumber, array $params): Schema\DependabotAlert
    {
        if (array_key_exists(Operator\Dependabot\UpdateAlert::class, $this->operator) === false) {
            $this->operator[Operator\Dependabot\UpdateAlert::class] = new Operator\Dependabot\UpdateAlert($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts🌀AlertNumber());
        }

        return $this->operator[Operator\Dependabot\UpdateAlert::class]->call($owner, $repo, $alertNumber, $params);
    }

    public function listRepoSecrets(string $owner, string $repo, int $perPage, int $page): Schema\Operations\Dependabot\ListRepoSecrets\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Dependabot\ListRepoSecrets::class, $this->operator) === false) {
            $this->operator[Operator\Dependabot\ListRepoSecrets::class] = new Operator\Dependabot\ListRepoSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets());
        }

        return $this->operator[Operator\Dependabot\ListRepoSecrets::class]->call($owner, $repo, $perPage, $page);
    }

    public function getRepoPublicKey(string $owner, string $repo): Schema\DependabotPublicKey
    {
        if (array_key_exists(Operator\Dependabot\GetRepoPublicKey::class, $this->operator) === false) {
            $this->operator[Operator\Dependabot\GetRepoPublicKey::class] = new Operator\Dependabot\GetRepoPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀PublicKey());
        }

        return $this->operator[Operator\Dependabot\GetRepoPublicKey::class]->call($owner, $repo);
    }

    public function getRepoSecret(string $owner, string $repo, string $secretName): Schema\DependabotSecret
    {
        if (array_key_exists(Operator\Dependabot\GetRepoSecret::class, $this->operator) === false) {
            $this->operator[Operator\Dependabot\GetRepoSecret::class] = new Operator\Dependabot\GetRepoSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Dependabot\GetRepoSecret::class]->call($owner, $repo, $secretName);
    }

    public function createOrUpdateRepoSecret(string $owner, string $repo, string $secretName, array $params): Schema\EmptyObject
    {
        if (array_key_exists(Operator\Dependabot\CreateOrUpdateRepoSecret::class, $this->operator) === false) {
            $this->operator[Operator\Dependabot\CreateOrUpdateRepoSecret::class] = new Operator\Dependabot\CreateOrUpdateRepoSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Dependabot\CreateOrUpdateRepoSecret::class]->call($owner, $repo, $secretName, $params);
    }

    public function deleteRepoSecret(string $owner, string $repo, string $secretName): ResponseInterface
    {
        if (array_key_exists(Operator\Dependabot\DeleteRepoSecret::class, $this->operator) === false) {
            $this->operator[Operator\Dependabot\DeleteRepoSecret::class] = new Operator\Dependabot\DeleteRepoSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Dependabot\DeleteRepoSecret::class]->call($owner, $repo, $secretName);
    }
}
