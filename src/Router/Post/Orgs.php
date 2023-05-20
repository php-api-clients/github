<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Post;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Orgs
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];
    private readonly SchemaValidator $requestSchemaValidator;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrators $hydrators;
    private readonly Browser $browser;
    private readonly AuthenticationInterface $authentication;

    public function __construct(SchemaValidator $requestSchemaValidator, SchemaValidator $responseSchemaValidator, Hydrators $hydrators, Browser $browser, AuthenticationInterface $authentication)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrators               = $hydrators;
        $this->browser                 = $browser;
        $this->authentication          = $authentication;
    }

    public function reviewPatGrantRequestsInBulk(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Organizations\Org\PersonalAccessTokenRequests::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Organizations\Org\PersonalAccessTokenRequests::class] = $this->hydrators->getObjectMapperOperation🌀Organizations🌀Org🌀PersonalAccessTokenRequests();
        }

        $operator = new Operator\Orgs\ReviewPatGrantRequestsInBulk($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Organizations\Org\PersonalAccessTokenRequests::class]);

        return $operator->call($arguments['org'], $params);
    }

    public function updatePatAccesses(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Organizations\Org\PersonalAccessTokens::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Organizations\Org\PersonalAccessTokens::class] = $this->hydrators->getObjectMapperOperation🌀Organizations🌀Org🌀PersonalAccessTokens();
        }

        $operator = new Operator\Orgs\UpdatePatAccesses($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Organizations\Org\PersonalAccessTokens::class]);

        return $operator->call($arguments['org'], $params);
    }

    public function createWebhook(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Hooks::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Hooks::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks();
        }

        $operator = new Operator\Orgs\CreateWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Hooks::class]);

        return $operator->call($arguments['org'], $params);
    }

    public function createInvitation(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Invitations::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Invitations::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Invitations();
        }

        $operator = new Operator\Orgs\CreateInvitation($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Invitations::class]);

        return $operator->call($arguments['org'], $params);
    }

    public function pingWebhook(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('hook_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: hook_id');
        }

        $arguments['hook_id'] = $params['hook_id'];
        unset($params['hook_id']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Hooks\HookId\Pings::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Hooks\HookId\Pings::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Pings();
        }

        $operator = new Operator\Orgs\PingWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Hooks\HookId\Pings::class]);

        return $operator->call($arguments['org'], $arguments['hook_id']);
    }

    public function reviewPatGrantRequest(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('pat_request_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pat_request_id');
        }

        $arguments['pat_request_id'] = $params['pat_request_id'];
        unset($params['pat_request_id']);
        if (array_key_exists(Hydrator\Operation\Organizations\Org\PersonalAccessTokenRequests\PatRequestId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Organizations\Org\PersonalAccessTokenRequests\PatRequestId::class] = $this->hydrators->getObjectMapperOperation🌀Organizations🌀Org🌀PersonalAccessTokenRequests🌀PatRequestId();
        }

        $operator = new Operator\Orgs\ReviewPatGrantRequest($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Organizations\Org\PersonalAccessTokenRequests\PatRequestId::class]);

        return $operator->call($arguments['org'], $arguments['pat_request_id'], $params);
    }

    public function updatePatAccess(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('pat_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pat_id');
        }

        $arguments['pat_id'] = $params['pat_id'];
        unset($params['pat_id']);
        if (array_key_exists(Hydrator\Operation\Organizations\Org\PersonalAccessTokens\PatId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Organizations\Org\PersonalAccessTokens\PatId::class] = $this->hydrators->getObjectMapperOperation🌀Organizations🌀Org🌀PersonalAccessTokens🌀PatId();
        }

        $operator = new Operator\Orgs\UpdatePatAccess($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Organizations\Org\PersonalAccessTokens\PatId::class]);

        return $operator->call($arguments['org'], $arguments['pat_id'], $params);
    }

    public function enableOrDisableSecurityProductOnAllOrgRepos(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('security_product', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: security_product');
        }

        $arguments['security_product'] = $params['security_product'];
        unset($params['security_product']);
        if (array_key_exists('enablement', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enablement');
        }

        $arguments['enablement'] = $params['enablement'];
        unset($params['enablement']);
        $operator = new Operator\Orgs\EnableOrDisableSecurityProductOnAllOrgRepos($this->browser, $this->authentication);

        return $operator->call($arguments['org'], $arguments['security_product'], $arguments['enablement']);
    }

    public function redeliverWebhookDelivery(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('hook_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: hook_id');
        }

        $arguments['hook_id'] = $params['hook_id'];
        unset($params['hook_id']);
        if (array_key_exists('delivery_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: delivery_id');
        }

        $arguments['delivery_id'] = $params['delivery_id'];
        unset($params['delivery_id']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries\DeliveryId\Attempts::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries\DeliveryId\Attempts::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts();
        }

        $operator = new Operator\Orgs\RedeliverWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries\DeliveryId\Attempts::class]);

        return $operator->call($arguments['org'], $arguments['hook_id'], $arguments['delivery_id']);
    }
}
