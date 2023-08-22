<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\List;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;
use function count;

final class Apps
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return (iterable<Schema\IntegrationInstallationRequest> | array{code: int}) */
    public function listInstallationRequestsForAuthenticatedAppListing(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\App\InstallationRequests::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\App\InstallationRequests::class] = $this->hydrators->getObjectMapperOperation🌀App🌀InstallationRequests();
        }

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Apps\ListInstallationRequestsForAuthenticatedAppListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\App\InstallationRequests::class]);
            $items    = $operator->call($arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return iterable<Schema\Installation> */
    public function listInstallationsListing(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('since', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: since');
        }

        $arguments['since'] = $params['since'];
        unset($params['since']);
        if (array_key_exists('outdated', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: outdated');
        }

        $arguments['outdated'] = $params['outdated'];
        unset($params['outdated']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\App\Installations::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\App\Installations::class] = $this->hydrators->getObjectMapperOperation🌀App🌀Installations();
        }

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Apps\ListInstallationsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\App\Installations::class]);
            $items    = $operator->call($arguments['since'], $arguments['outdated'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return iterable<Schema\MarketplaceListingPlan> */
    public function listPlansListing(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\MarketplaceListing\Plans::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\MarketplaceListing\Plans::class] = $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Plans();
        }

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Apps\ListPlansListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\MarketplaceListing\Plans::class]);
            $items    = $operator->call($arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return (iterable<Schema\UserMarketplacePurchase> | array{code: int}) */
    public function listSubscriptionsForAuthenticatedUserListing(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\User\MarketplacePurchases::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\MarketplacePurchases::class] = $this->hydrators->getObjectMapperOperation🌀User🌀MarketplacePurchases();
        }

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Apps\ListSubscriptionsForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\MarketplacePurchases::class]);
            $items    = $operator->call($arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return iterable<Schema\MarketplaceListingPlan> */
    public function listPlansStubbedListing(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\MarketplaceListing\Stubbed\Plans::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\MarketplaceListing\Stubbed\Plans::class] = $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Stubbed🌀Plans();
        }

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Apps\ListPlansStubbedListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\MarketplaceListing\Stubbed\Plans::class]);
            $items    = $operator->call($arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return (iterable<Schema\UserMarketplacePurchase> | array{code: int}) */
    public function listSubscriptionsForAuthenticatedUserStubbedListing(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\User\MarketplacePurchases\Stubbed::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\MarketplacePurchases\Stubbed::class] = $this->hydrators->getObjectMapperOperation🌀User🌀MarketplacePurchases🌀Stubbed();
        }

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Apps\ListSubscriptionsForAuthenticatedUserStubbedListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\MarketplacePurchases\Stubbed::class]);
            $items    = $operator->call($arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return iterable<Schema\MarketplacePurchase> */
    public function listAccountsForPlanListing(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('plan_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: plan_id');
        }

        $arguments['plan_id'] = $params['plan_id'];
        unset($params['plan_id']);
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\MarketplaceListing\Plans\PlanId\Accounts::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\MarketplaceListing\Plans\PlanId\Accounts::class] = $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Plans🌀PlanId🌀Accounts();
        }

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Apps\ListAccountsForPlanListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\MarketplaceListing\Plans\PlanId\Accounts::class]);
            $items    = $operator->call($arguments['plan_id'], $arguments['direction'], $arguments['sort'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return iterable<Schema\MarketplacePurchase> */
    public function listAccountsForPlanStubbedListing(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('plan_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: plan_id');
        }

        $arguments['plan_id'] = $params['plan_id'];
        unset($params['plan_id']);
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\MarketplaceListing\Stubbed\Plans\PlanId\Accounts::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\MarketplaceListing\Stubbed\Plans\PlanId\Accounts::class] = $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Stubbed🌀Plans🌀PlanId🌀Accounts();
        }

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Apps\ListAccountsForPlanStubbedListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\MarketplaceListing\Stubbed\Plans\PlanId\Accounts::class]);
            $items    = $operator->call($arguments['plan_id'], $arguments['direction'], $arguments['sort'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }
}
