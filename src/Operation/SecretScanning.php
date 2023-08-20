<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class SecretScanning
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function listAlertsForEnterprise(string $enterprise, string $state, string $secretType, string $resolution, string $before, string $after, string $sort, string $direction, int $perPage): Schema\OrganizationSecretScanningAlert
    {
        if (array_key_exists(Operator\SecretScanning\ListAlertsForEnterprise::class, $this->operator) === false) {
            $this->operator[Operator\SecretScanning\ListAlertsForEnterprise::class] = new Operator\SecretScanning\ListAlertsForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀SecretScanning🌀Alerts());
        }

        return $this->operator[Operator\SecretScanning\ListAlertsForEnterprise::class]->call($enterprise, $state, $secretType, $resolution, $before, $after, $sort, $direction, $perPage);
    }

    public function listAlertsForOrg(string $org, string $state, string $secretType, string $resolution, string $before, string $after, string $sort, string $direction, int $page, int $perPage): Schema\OrganizationSecretScanningAlert
    {
        if (array_key_exists(Operator\SecretScanning\ListAlertsForOrg::class, $this->operator) === false) {
            $this->operator[Operator\SecretScanning\ListAlertsForOrg::class] = new Operator\SecretScanning\ListAlertsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀SecretScanning🌀Alerts());
        }

        return $this->operator[Operator\SecretScanning\ListAlertsForOrg::class]->call($org, $state, $secretType, $resolution, $before, $after, $sort, $direction, $page, $perPage);
    }

    public function listAlertsForRepo(string $owner, string $repo, string $state, string $secretType, string $resolution, string $before, string $after, string $sort, string $direction, int $page, int $perPage): Schema\SecretScanningAlert
    {
        if (array_key_exists(Operator\SecretScanning\ListAlertsForRepo::class, $this->operator) === false) {
            $this->operator[Operator\SecretScanning\ListAlertsForRepo::class] = new Operator\SecretScanning\ListAlertsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts());
        }

        return $this->operator[Operator\SecretScanning\ListAlertsForRepo::class]->call($owner, $repo, $state, $secretType, $resolution, $before, $after, $sort, $direction, $page, $perPage);
    }

    public function getAlert(string $owner, string $repo, int $alertNumber): Schema\SecretScanningAlert
    {
        if (array_key_exists(Operator\SecretScanning\GetAlert::class, $this->operator) === false) {
            $this->operator[Operator\SecretScanning\GetAlert::class] = new Operator\SecretScanning\GetAlert($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber());
        }

        return $this->operator[Operator\SecretScanning\GetAlert::class]->call($owner, $repo, $alertNumber);
    }

    public function updateAlert(string $owner, string $repo, int $alertNumber, array $params): Schema\SecretScanningAlert
    {
        if (array_key_exists(Operator\SecretScanning\UpdateAlert::class, $this->operator) === false) {
            $this->operator[Operator\SecretScanning\UpdateAlert::class] = new Operator\SecretScanning\UpdateAlert($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber());
        }

        return $this->operator[Operator\SecretScanning\UpdateAlert::class]->call($owner, $repo, $alertNumber, $params);
    }

    public function listLocationsForAlert(string $owner, string $repo, int $alertNumber, int $page, int $perPage): Schema\SecretScanningLocation
    {
        if (array_key_exists(Operator\SecretScanning\ListLocationsForAlert::class, $this->operator) === false) {
            $this->operator[Operator\SecretScanning\ListLocationsForAlert::class] = new Operator\SecretScanning\ListLocationsForAlert($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber🌀Locations());
        }

        return $this->operator[Operator\SecretScanning\ListLocationsForAlert::class]->call($owner, $repo, $alertNumber, $page, $perPage);
    }
}
