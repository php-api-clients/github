<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final class Apps
{
    /**
     * @var array<class-string, \EventSauce\ObjectHydrator\ObjectMapper>
     */
    private array $hydrator = array();
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\GitHub\Hydrators $hydrators;
    private readonly \React\Http\Browser $browser;
    private readonly \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\GitHub\Hydrators $hydrators, \React\Http\Browser $browser, \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrators = $hydrators;
        $this->browser = $browser;
        $this->authentication = $authentication;
    }
    public function getAuthenticated(array $params)
    {
        $arguments = array();
        if (\array_key_exists(Hydrator\Operation\App::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\App::class] = $this->hydrators->getObjectMapperOperation🌀App();
        }
        $operation = new Operation\Apps\GetAuthenticated($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\App::class]);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Integration {
            return $operation->createResponse($response);
        });
    }
    public function getWebhookConfigForApp(array $params)
    {
        $arguments = array();
        if (\array_key_exists(Hydrator\Operation\App\Hook\Config::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\App\Hook\Config::class] = $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Config();
        }
        $operation = new Operation\Apps\GetWebhookConfigForApp($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\App\Hook\Config::class]);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\WebhookConfig {
            return $operation->createResponse($response);
        });
    }
    public function listWebhookDeliveries(array $params)
    {
        $arguments = array();
        if (array_key_exists('cursor', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: cursor');
        }
        $arguments['cursor'] = $params['cursor'];
        unset($params['cursor']);
        if (array_key_exists('redelivery', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: redelivery');
        }
        $arguments['redelivery'] = $params['redelivery'];
        unset($params['redelivery']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (\array_key_exists(Hydrator\Operation\App\Hook\Deliveries::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\App\Hook\Deliveries::class] = $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Deliveries();
        }
        $operation = new Operation\Apps\ListWebhookDeliveries($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\App\Hook\Deliveries::class], $arguments['cursor'], $arguments['redelivery'], $arguments['per_page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function getInstallation(array $params)
    {
        $arguments = array();
        if (array_key_exists('installation_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: installation_id');
        }
        $arguments['installation_id'] = $params['installation_id'];
        unset($params['installation_id']);
        if (\array_key_exists(Hydrator\Operation\App\Installations\CbInstallationIdRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\App\Installations\CbInstallationIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀CbInstallationIdRcb();
        }
        $operation = new Operation\Apps\GetInstallation($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\App\Installations\CbInstallationIdRcb::class], $arguments['installation_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Installation {
            return $operation->createResponse($response);
        });
    }
    public function getSubscriptionPlanForAccount(array $params)
    {
        $arguments = array();
        if (array_key_exists('account_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: account_id');
        }
        $arguments['account_id'] = $params['account_id'];
        unset($params['account_id']);
        if (\array_key_exists(Hydrator\Operation\MarketplaceListing\Accounts\CbAccountIdRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\MarketplaceListing\Accounts\CbAccountIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Accounts🌀CbAccountIdRcb();
        }
        $operation = new Operation\Apps\GetSubscriptionPlanForAccount($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\MarketplaceListing\Accounts\CbAccountIdRcb::class], $arguments['account_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\MarketplacePurchase {
            return $operation->createResponse($response);
        });
    }
    public function listPlansStubbed(array $params)
    {
        $arguments = array();
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\MarketplaceListing\Stubbed\Plans::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\MarketplaceListing\Stubbed\Plans::class] = $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Stubbed🌀Plans();
        }
        $operation = new Operation\Apps\ListPlansStubbed($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\MarketplaceListing\Stubbed\Plans::class], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function getOrgInstallation(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Installation::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Installation::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Installation();
        }
        $operation = new Operation\Apps\GetOrgInstallation($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Installation::class], $arguments['org']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Installation {
            return $operation->createResponse($response);
        });
    }
    public function listSubscriptionsForAuthenticatedUserStubbed(array $params)
    {
        $arguments = array();
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\User\MarketplacePurchases\Stubbed::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\User\MarketplacePurchases\Stubbed::class] = $this->hydrators->getObjectMapperOperation🌀User🌀MarketplacePurchases🌀Stubbed();
        }
        $operation = new Operation\Apps\ListSubscriptionsForAuthenticatedUserStubbed($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\MarketplacePurchases\Stubbed::class], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function getUserInstallation(array $params)
    {
        $arguments = array();
        if (array_key_exists('username', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: username');
        }
        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (\array_key_exists(Hydrator\Operation\Users\CbUsernameRcb\Installation::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Users\CbUsernameRcb\Installation::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Installation();
        }
        $operation = new Operation\Apps\GetUserInstallation($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\CbUsernameRcb\Installation::class], $arguments['username']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Installation {
            return $operation->createResponse($response);
        });
    }
    public function getWebhookDelivery(array $params)
    {
        $arguments = array();
        if (array_key_exists('delivery_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: delivery_id');
        }
        $arguments['delivery_id'] = $params['delivery_id'];
        unset($params['delivery_id']);
        if (\array_key_exists(Hydrator\Operation\App\Hook\Deliveries\CbDeliveryIdRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\App\Hook\Deliveries\CbDeliveryIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb();
        }
        $operation = new Operation\Apps\GetWebhookDelivery($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\App\Hook\Deliveries\CbDeliveryIdRcb::class], $arguments['delivery_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\HookDelivery {
            return $operation->createResponse($response);
        });
    }
    public function listAccountsForPlan(array $params)
    {
        $arguments = array();
        if (array_key_exists('plan_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: plan_id');
        }
        $arguments['plan_id'] = $params['plan_id'];
        unset($params['plan_id']);
        if (array_key_exists('direction', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: direction');
        }
        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('sort', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: sort');
        }
        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\MarketplaceListing\Plans\CbPlanIdRcb\Accounts::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\MarketplaceListing\Plans\CbPlanIdRcb\Accounts::class] = $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Plans🌀CbPlanIdRcb🌀Accounts();
        }
        $operation = new Operation\Apps\ListAccountsForPlan($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\MarketplaceListing\Plans\CbPlanIdRcb\Accounts::class], $arguments['plan_id'], $arguments['direction'], $arguments['sort'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function getSubscriptionPlanForAccountStubbed(array $params)
    {
        $arguments = array();
        if (array_key_exists('account_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: account_id');
        }
        $arguments['account_id'] = $params['account_id'];
        unset($params['account_id']);
        if (\array_key_exists(Hydrator\Operation\MarketplaceListing\Stubbed\Accounts\CbAccountIdRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\MarketplaceListing\Stubbed\Accounts\CbAccountIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Stubbed🌀Accounts🌀CbAccountIdRcb();
        }
        $operation = new Operation\Apps\GetSubscriptionPlanForAccountStubbed($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\MarketplaceListing\Stubbed\Accounts\CbAccountIdRcb::class], $arguments['account_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\MarketplacePurchase {
            return $operation->createResponse($response);
        });
    }
    public function getRepoInstallation(array $params)
    {
        $arguments = array();
        if (array_key_exists('owner', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: owner');
        }
        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: repo');
        }
        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (\array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Installation::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Installation::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Installation();
        }
        $operation = new Operation\Apps\GetRepoInstallation($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Installation::class], $arguments['owner'], $arguments['repo']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Installation|\ApiClients\Client\GitHub\Schema\BasicError {
            return $operation->createResponse($response);
        });
    }
    public function listInstallationReposForAuthenticatedUser(array $params)
    {
        $arguments = array();
        if (array_key_exists('installation_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: installation_id');
        }
        $arguments['installation_id'] = $params['installation_id'];
        unset($params['installation_id']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\User\Installations\CbInstallationIdRcb\Repositories::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\User\Installations\CbInstallationIdRcb\Repositories::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories();
        }
        $operation = new Operation\Apps\ListInstallationReposForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Installations\CbInstallationIdRcb\Repositories::class], $arguments['installation_id'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Operation\Apps\ListInstallationReposForAuthenticatedUser\Response\Applicationjson\H200 {
            return $operation->createResponse($response);
        });
    }
    public function listInstallationRequestsForAuthenticatedApp(array $params)
    {
        $arguments = array();
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\App\InstallationRequests::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\App\InstallationRequests::class] = $this->hydrators->getObjectMapperOperation🌀App🌀InstallationRequests();
        }
        $operation = new Operation\Apps\ListInstallationRequestsForAuthenticatedApp($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\App\InstallationRequests::class], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function listInstallations(array $params)
    {
        $arguments = array();
        if (array_key_exists('since', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: since');
        }
        $arguments['since'] = $params['since'];
        unset($params['since']);
        if (array_key_exists('outdated', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: outdated');
        }
        $arguments['outdated'] = $params['outdated'];
        unset($params['outdated']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\App\Installations::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\App\Installations::class] = $this->hydrators->getObjectMapperOperation🌀App🌀Installations();
        }
        $operation = new Operation\Apps\ListInstallations($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\App\Installations::class], $arguments['since'], $arguments['outdated'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function getBySlug(array $params)
    {
        $arguments = array();
        if (array_key_exists('app_slug', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: app_slug');
        }
        $arguments['app_slug'] = $params['app_slug'];
        unset($params['app_slug']);
        if (\array_key_exists(Hydrator\Operation\Apps\CbAppSlugRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Apps\CbAppSlugRcb::class] = $this->hydrators->getObjectMapperOperation🌀Apps🌀CbAppSlugRcb();
        }
        $operation = new Operation\Apps\GetBySlug($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Apps\CbAppSlugRcb::class], $arguments['app_slug']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Integration {
            return $operation->createResponse($response);
        });
    }
    public function listReposAccessibleToInstallation(array $params)
    {
        $arguments = array();
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\Installation\Repositories::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Installation\Repositories::class] = $this->hydrators->getObjectMapperOperation🌀Installation🌀Repositories();
        }
        $operation = new Operation\Apps\ListReposAccessibleToInstallation($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Installation\Repositories::class], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Operation\Apps\ListReposAccessibleToInstallation\Response\Applicationjson\H200 {
            return $operation->createResponse($response);
        });
    }
    public function listPlans(array $params)
    {
        $arguments = array();
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\MarketplaceListing\Plans::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\MarketplaceListing\Plans::class] = $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Plans();
        }
        $operation = new Operation\Apps\ListPlans($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\MarketplaceListing\Plans::class], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function listInstallationsForAuthenticatedUser(array $params)
    {
        $arguments = array();
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\User\Installations::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\User\Installations::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Installations();
        }
        $operation = new Operation\Apps\ListInstallationsForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Installations::class], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Operation\Apps\ListInstallationsForAuthenticatedUser\Response\Applicationjson\H200 {
            return $operation->createResponse($response);
        });
    }
    public function listSubscriptionsForAuthenticatedUser(array $params)
    {
        $arguments = array();
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\User\MarketplacePurchases::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\User\MarketplacePurchases::class] = $this->hydrators->getObjectMapperOperation🌀User🌀MarketplacePurchases();
        }
        $operation = new Operation\Apps\ListSubscriptionsForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\MarketplacePurchases::class], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function listAccountsForPlanStubbed(array $params)
    {
        $arguments = array();
        if (array_key_exists('plan_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: plan_id');
        }
        $arguments['plan_id'] = $params['plan_id'];
        unset($params['plan_id']);
        if (array_key_exists('direction', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: direction');
        }
        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('sort', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: sort');
        }
        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\MarketplaceListing\Stubbed\Plans\CbPlanIdRcb\Accounts::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\MarketplaceListing\Stubbed\Plans\CbPlanIdRcb\Accounts::class] = $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Stubbed🌀Plans🌀CbPlanIdRcb🌀Accounts();
        }
        $operation = new Operation\Apps\ListAccountsForPlanStubbed($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\MarketplaceListing\Stubbed\Plans\CbPlanIdRcb\Accounts::class], $arguments['plan_id'], $arguments['direction'], $arguments['sort'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
}
