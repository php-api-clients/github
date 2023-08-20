<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema\ActionsBillingUsage;
use ApiClients\Client\GitHub\Schema\CombinedBillingUsage;
use ApiClients\Client\GitHub\Schema\PackagesBillingUsage;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Billing
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function getGithubActionsBillingOrg(array $params): ActionsBillingUsage|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Settings\Billing\Actions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Settings\Billing\Actions::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀Actions();
        }

        $operator = new Operator\Billing\GetGithubActionsBillingOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Settings\Billing\Actions::class]);

        return $operator->call($arguments['org']);
    }

    /** @return */
    public function getGithubPackagesBillingOrg(array $params): PackagesBillingUsage|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Settings\Billing\Packages::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Settings\Billing\Packages::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀Packages();
        }

        $operator = new Operator\Billing\GetGithubPackagesBillingOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Settings\Billing\Packages::class]);

        return $operator->call($arguments['org']);
    }

    /** @return */
    public function getSharedStorageBillingOrg(array $params): CombinedBillingUsage|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Settings\Billing\SharedStorage::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Settings\Billing\SharedStorage::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀SharedStorage();
        }

        $operator = new Operator\Billing\GetSharedStorageBillingOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Settings\Billing\SharedStorage::class]);

        return $operator->call($arguments['org']);
    }

    /** @return */
    public function getGithubActionsBillingUser(array $params): ActionsBillingUsage|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\Users\Username\Settings\Billing\Actions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Users\Username\Settings\Billing\Actions::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀Actions();
        }

        $operator = new Operator\Billing\GetGithubActionsBillingUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\Username\Settings\Billing\Actions::class]);

        return $operator->call($arguments['username']);
    }

    /** @return */
    public function getGithubPackagesBillingUser(array $params): PackagesBillingUsage|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\Users\Username\Settings\Billing\Packages::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Users\Username\Settings\Billing\Packages::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀Packages();
        }

        $operator = new Operator\Billing\GetGithubPackagesBillingUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\Username\Settings\Billing\Packages::class]);

        return $operator->call($arguments['username']);
    }

    /** @return */
    public function getSharedStorageBillingUser(array $params): CombinedBillingUsage|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\Users\Username\Settings\Billing\SharedStorage::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Users\Username\Settings\Billing\SharedStorage::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀SharedStorage();
        }

        $operator = new Operator\Billing\GetSharedStorageBillingUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\Username\Settings\Billing\SharedStorage::class]);

        return $operator->call($arguments['username']);
    }
}
