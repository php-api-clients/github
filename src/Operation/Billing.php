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

final class Billing
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function getGithubActionsBillingOrg(string $org): PromiseInterface
    {
        if (array_key_exists(Operator\Billing\GetGithubActionsBillingOrg::class, $this->operator) === false) {
            $this->operator[Operator\Billing\GetGithubActionsBillingOrg::class] = new Operator\Billing\GetGithubActionsBillingOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀Actions());
        }

        return $this->operator[Operator\Billing\GetGithubActionsBillingOrg::class]->call($org);
    }

    public function getGithubPackagesBillingOrg(string $org): PromiseInterface
    {
        if (array_key_exists(Operator\Billing\GetGithubPackagesBillingOrg::class, $this->operator) === false) {
            $this->operator[Operator\Billing\GetGithubPackagesBillingOrg::class] = new Operator\Billing\GetGithubPackagesBillingOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀Packages());
        }

        return $this->operator[Operator\Billing\GetGithubPackagesBillingOrg::class]->call($org);
    }

    public function getSharedStorageBillingOrg(string $org): PromiseInterface
    {
        if (array_key_exists(Operator\Billing\GetSharedStorageBillingOrg::class, $this->operator) === false) {
            $this->operator[Operator\Billing\GetSharedStorageBillingOrg::class] = new Operator\Billing\GetSharedStorageBillingOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀SharedStorage());
        }

        return $this->operator[Operator\Billing\GetSharedStorageBillingOrg::class]->call($org);
    }

    public function getGithubActionsBillingUser(string $username): PromiseInterface
    {
        if (array_key_exists(Operator\Billing\GetGithubActionsBillingUser::class, $this->operator) === false) {
            $this->operator[Operator\Billing\GetGithubActionsBillingUser::class] = new Operator\Billing\GetGithubActionsBillingUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀Actions());
        }

        return $this->operator[Operator\Billing\GetGithubActionsBillingUser::class]->call($username);
    }

    public function getGithubPackagesBillingUser(string $username): PromiseInterface
    {
        if (array_key_exists(Operator\Billing\GetGithubPackagesBillingUser::class, $this->operator) === false) {
            $this->operator[Operator\Billing\GetGithubPackagesBillingUser::class] = new Operator\Billing\GetGithubPackagesBillingUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀Packages());
        }

        return $this->operator[Operator\Billing\GetGithubPackagesBillingUser::class]->call($username);
    }

    public function getSharedStorageBillingUser(string $username): PromiseInterface
    {
        if (array_key_exists(Operator\Billing\GetSharedStorageBillingUser::class, $this->operator) === false) {
            $this->operator[Operator\Billing\GetSharedStorageBillingUser::class] = new Operator\Billing\GetSharedStorageBillingUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀SharedStorage());
        }

        return $this->operator[Operator\Billing\GetSharedStorageBillingUser::class]->call($username);
    }
}
