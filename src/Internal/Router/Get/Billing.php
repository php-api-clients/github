<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Get;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\ActionsBillingUsage;
use ApiClients\Client\GitHub\Schema\BillingUsageReport;
use ApiClients\Client\GitHub\Schema\CombinedBillingUsage;
use ApiClients\Client\GitHub\Schema\PackagesBillingUsage;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Billing
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    public function getGithubBillingUsageReportOrg(array $params): BillingUsageReport
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('year', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: year');
        }

        $arguments['year'] = $params['year'];
        unset($params['year']);
        if (array_key_exists('month', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: month');
        }

        $arguments['month'] = $params['month'];
        unset($params['month']);
        if (array_key_exists('day', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: day');
        }

        $arguments['day'] = $params['day'];
        unset($params['day']);
        if (array_key_exists('hour', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: hour');
        }

        $arguments['hour'] = $params['hour'];
        unset($params['hour']);
        $operator = new Internal\Operator\Billing\GetGithubBillingUsageReportOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Organizations🌀Org🌀Settings🌀Billing🌀Usage());

        return $operator->call($arguments['org'], $arguments['year'], $arguments['month'], $arguments['day'], $arguments['hour']);
    }

    /** @return */
    public function getGithubActionsBillingOrg(array $params): ActionsBillingUsage
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new Internal\Operator\Billing\GetGithubActionsBillingOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀Actions());

        return $operator->call($arguments['org']);
    }

    /** @return */
    public function getGithubPackagesBillingOrg(array $params): PackagesBillingUsage
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new Internal\Operator\Billing\GetGithubPackagesBillingOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀Packages());

        return $operator->call($arguments['org']);
    }

    /** @return */
    public function getSharedStorageBillingOrg(array $params): CombinedBillingUsage
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new Internal\Operator\Billing\GetSharedStorageBillingOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀SharedStorage());

        return $operator->call($arguments['org']);
    }

    /** @return */
    public function getGithubActionsBillingUser(array $params): ActionsBillingUsage
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operator = new Internal\Operator\Billing\GetGithubActionsBillingUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀Actions());

        return $operator->call($arguments['username']);
    }

    /** @return */
    public function getGithubPackagesBillingUser(array $params): PackagesBillingUsage
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operator = new Internal\Operator\Billing\GetGithubPackagesBillingUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀Packages());

        return $operator->call($arguments['username']);
    }

    /** @return */
    public function getSharedStorageBillingUser(array $params): CombinedBillingUsage
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operator = new Internal\Operator\Billing\GetSharedStorageBillingUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀SharedStorage());

        return $operator->call($arguments['username']);
    }
}
