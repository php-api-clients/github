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

final class Interactions
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function getRestrictionsForOrg(string $org): PromiseInterface
    {
        if (array_key_exists(Operator\Interactions\GetRestrictionsForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Interactions\GetRestrictionsForOrg::class] = new Operator\Interactions\GetRestrictionsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀InteractionLimits());
        }

        return $this->operator[Operator\Interactions\GetRestrictionsForOrg::class]->call($org);
    }

    public function setRestrictionsForOrg(string $org, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Interactions\SetRestrictionsForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Interactions\SetRestrictionsForOrg::class] = new Operator\Interactions\SetRestrictionsForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀InteractionLimits());
        }

        return $this->operator[Operator\Interactions\SetRestrictionsForOrg::class]->call($org, $params);
    }

    public function removeRestrictionsForOrg(string $org): PromiseInterface
    {
        if (array_key_exists(Operator\Interactions\RemoveRestrictionsForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Interactions\RemoveRestrictionsForOrg::class] = new Operator\Interactions\RemoveRestrictionsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀InteractionLimits());
        }

        return $this->operator[Operator\Interactions\RemoveRestrictionsForOrg::class]->call($org);
    }

    public function getRestrictionsForRepo(string $owner, string $repo): PromiseInterface
    {
        if (array_key_exists(Operator\Interactions\GetRestrictionsForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Interactions\GetRestrictionsForRepo::class] = new Operator\Interactions\GetRestrictionsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀InteractionLimits());
        }

        return $this->operator[Operator\Interactions\GetRestrictionsForRepo::class]->call($owner, $repo);
    }

    public function setRestrictionsForRepo(string $owner, string $repo, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Interactions\SetRestrictionsForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Interactions\SetRestrictionsForRepo::class] = new Operator\Interactions\SetRestrictionsForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀InteractionLimits());
        }

        return $this->operator[Operator\Interactions\SetRestrictionsForRepo::class]->call($owner, $repo, $params);
    }

    public function removeRestrictionsForRepo(string $owner, string $repo): PromiseInterface
    {
        if (array_key_exists(Operator\Interactions\RemoveRestrictionsForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Interactions\RemoveRestrictionsForRepo::class] = new Operator\Interactions\RemoveRestrictionsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀InteractionLimits());
        }

        return $this->operator[Operator\Interactions\RemoveRestrictionsForRepo::class]->call($owner, $repo);
    }

    public function getRestrictionsForAuthenticatedUser(): PromiseInterface
    {
        if (array_key_exists(Operator\Interactions\GetRestrictionsForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Interactions\GetRestrictionsForAuthenticatedUser::class] = new Operator\Interactions\GetRestrictionsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀InteractionLimits());
        }

        return $this->operator[Operator\Interactions\GetRestrictionsForAuthenticatedUser::class]->call();
    }

    public function setRestrictionsForAuthenticatedUser(array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Interactions\SetRestrictionsForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Interactions\SetRestrictionsForAuthenticatedUser::class] = new Operator\Interactions\SetRestrictionsForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀InteractionLimits());
        }

        return $this->operator[Operator\Interactions\SetRestrictionsForAuthenticatedUser::class]->call($params);
    }

    public function removeRestrictionsForAuthenticatedUser(): PromiseInterface
    {
        if (array_key_exists(Operator\Interactions\RemoveRestrictionsForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Interactions\RemoveRestrictionsForAuthenticatedUser::class] = new Operator\Interactions\RemoveRestrictionsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀InteractionLimits());
        }

        return $this->operator[Operator\Interactions\RemoveRestrictionsForAuthenticatedUser::class]->call();
    }
}
