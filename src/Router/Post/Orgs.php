<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Router\Post;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final class Orgs
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
    public function reviewPatGrantRequestsInBulk(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (\array_key_exists(Hydrator\Operation\Organizations\CbOrgRcb\PersonalAccessTokenRequests::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Organizations\CbOrgRcb\PersonalAccessTokenRequests::class] = $this->hydrators->getObjectMapperOperation🌀Organizations🌀CbOrgRcb🌀PersonalAccessTokenRequests();
        }
        $operation = new Operation\Orgs\ReviewPatGrantRequestsInBulk($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Organizations\CbOrgRcb\PersonalAccessTokenRequests::class], $arguments['org']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Operation\Orgs\ReviewPatGrantRequestsInBulk\Response\Applicationjson\H202 {
            return $operation->createResponse($response);
        });
    }
    public function updatePatAccesses(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (\array_key_exists(Hydrator\Operation\Organizations\CbOrgRcb\PersonalAccessTokens::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Organizations\CbOrgRcb\PersonalAccessTokens::class] = $this->hydrators->getObjectMapperOperation🌀Organizations🌀CbOrgRcb🌀PersonalAccessTokens();
        }
        $operation = new Operation\Orgs\UpdatePatAccesses($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Organizations\CbOrgRcb\PersonalAccessTokens::class], $arguments['org']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Operation\Orgs\UpdatePatAccesses\Response\Applicationjson\H202 {
            return $operation->createResponse($response);
        });
    }
    public function createWebhook(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Hooks::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Hooks::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Hooks();
        }
        $operation = new Operation\Orgs\CreateWebhook($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Hooks::class], $arguments['org']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\OrgHook {
            return $operation->createResponse($response);
        });
    }
    public function createInvitation(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Invitations::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Invitations::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Invitations();
        }
        $operation = new Operation\Orgs\CreateInvitation($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Invitations::class], $arguments['org']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\OrganizationInvitation {
            return $operation->createResponse($response);
        });
    }
    public function pingWebhook(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('hook_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: hook_id');
        }
        $arguments['hook_id'] = $params['hook_id'];
        unset($params['hook_id']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Hooks\CbHookIdRcb\Pings::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Hooks\CbHookIdRcb\Pings::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb🌀Pings();
        }
        $operation = new Operation\Orgs\PingWebhook($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Hooks\CbHookIdRcb\Pings::class], $arguments['org'], $arguments['hook_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : mixed {
            return $operation->createResponse($response);
        });
    }
    public function reviewPatGrantRequest(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('pat_request_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: pat_request_id');
        }
        $arguments['pat_request_id'] = $params['pat_request_id'];
        unset($params['pat_request_id']);
        if (\array_key_exists(Hydrator\Operation\Organizations\CbOrgRcb\PersonalDashAccessDashTokenDashRequests\CbPatRequestIdRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Organizations\CbOrgRcb\PersonalDashAccessDashTokenDashRequests\CbPatRequestIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Organizations🌀CbOrgRcb🌀PersonalDashAccessDashTokenDashRequests🌀CbPatRequestIdRcb();
        }
        $operation = new Operation\Orgs\ReviewPatGrantRequest($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Organizations\CbOrgRcb\PersonalDashAccessDashTokenDashRequests\CbPatRequestIdRcb::class], $arguments['org'], $arguments['pat_request_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : mixed {
            return $operation->createResponse($response);
        });
    }
    public function updatePatAccess(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('pat_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: pat_id');
        }
        $arguments['pat_id'] = $params['pat_id'];
        unset($params['pat_id']);
        if (\array_key_exists(Hydrator\Operation\Organizations\CbOrgRcb\PersonalDashAccessDashTokens\CbPatIdRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Organizations\CbOrgRcb\PersonalDashAccessDashTokens\CbPatIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Organizations🌀CbOrgRcb🌀PersonalDashAccessDashTokens🌀CbPatIdRcb();
        }
        $operation = new Operation\Orgs\UpdatePatAccess($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Organizations\CbOrgRcb\PersonalDashAccessDashTokens\CbPatIdRcb::class], $arguments['org'], $arguments['pat_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : mixed {
            return $operation->createResponse($response);
        });
    }
    public function enableOrDisableSecurityProductOnAllOrgRepos(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('security_product', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: security_product');
        }
        $arguments['security_product'] = $params['security_product'];
        unset($params['security_product']);
        if (array_key_exists('enablement', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: enablement');
        }
        $arguments['enablement'] = $params['enablement'];
        unset($params['enablement']);
        $operation = new Operation\Orgs\EnableOrDisableSecurityProductOnAllOrgRepos($arguments['org'], $arguments['security_product'], $arguments['enablement']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Psr\Http\Message\ResponseInterface {
            return $operation->createResponse($response);
        });
    }
    public function redeliverWebhookDelivery(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('hook_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: hook_id');
        }
        $arguments['hook_id'] = $params['hook_id'];
        unset($params['hook_id']);
        if (array_key_exists('delivery_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: delivery_id');
        }
        $arguments['delivery_id'] = $params['delivery_id'];
        unset($params['delivery_id']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Hooks\CbHookIdRcb\Deliveries\CbDeliveryIdRcb\Attempts::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Hooks\CbHookIdRcb\Deliveries\CbDeliveryIdRcb\Attempts::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts();
        }
        $operation = new Operation\Orgs\RedeliverWebhookDelivery($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Hooks\CbHookIdRcb\Deliveries\CbDeliveryIdRcb\Attempts::class], $arguments['org'], $arguments['hook_id'], $arguments['delivery_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Operation\Orgs\RedeliverWebhookDelivery\Response\Applicationjson\H202 {
            return $operation->createResponse($response);
        });
    }
}
