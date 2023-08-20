<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Post;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema\Operations\Orgs\ReviewPatGrantRequestsInBulk\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Client\GitHub\Schema\OrganizationInvitation;
use ApiClients\Client\GitHub\Schema\OrgHook;
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

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function createWebhook(array $params): OrgHook|array
    {
        $matched   = true;
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

    /** @return */
    public function createInvitation(array $params): OrganizationInvitation|array
    {
        $matched   = true;
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

    /** @return */
    public function reviewPatGrantRequestsInBulk(array $params): Json|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests();
        }

        $operator = new Operator\Orgs\ReviewPatGrantRequestsInBulk($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests::class]);

        return $operator->call($arguments['org'], $params);
    }

    /** @return */
    public function updatePatAccesses(array $params): \ApiClients\Client\GitHub\Schema\Operations\Orgs\UpdatePatAccesses\Response\ApplicationJson\Accepted\Application\Json|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\PersonalAccessTokens::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\PersonalAccessTokens::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens();
        }

        $operator = new Operator\Orgs\UpdatePatAccesses($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\PersonalAccessTokens::class]);

        return $operator->call($arguments['org'], $params);
    }

    /** @return array{code: int} */
    public function pingWebhook(array $params): array
    {
        $matched   = true;
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

    /** @return array{code: int} */
    public function reviewPatGrantRequest(array $params): array
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests\PatRequestId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests\PatRequestId::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests🌀PatRequestId();
        }

        $operator = new Operator\Orgs\ReviewPatGrantRequest($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests\PatRequestId::class]);

        return $operator->call($arguments['org'], $arguments['pat_request_id'], $params);
    }

    /** @return array{code: int} */
    public function updatePatAccess(array $params): array
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\PersonalAccessTokens\PatId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\PersonalAccessTokens\PatId::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens🌀PatId();
        }

        $operator = new Operator\Orgs\UpdatePatAccess($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\PersonalAccessTokens\PatId::class]);

        return $operator->call($arguments['org'], $arguments['pat_id'], $params);
    }

    /** @return array{code: int} */
    public function enableOrDisableSecurityProductOnAllOrgRepos(array $params): array
    {
        $matched   = true;
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
        $operator = new Operator\Orgs\EnableOrDisableSecurityProductOnAllOrgRepos($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['org'], $arguments['security_product'], $arguments['enablement'], $params);
    }

    /** @return */
    public function redeliverWebhookDelivery(array $params): \ApiClients\Client\GitHub\Schema\Operations\Orgs\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json|array
    {
        $matched   = true;
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
