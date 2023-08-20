<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Post;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema\Authorization;
use ApiClients\Client\GitHub\Schema\InstallationToken;
use ApiClients\Client\GitHub\Schema\Integration;
use ApiClients\Client\GitHub\Schema\Operations\Apps\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Apps
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function createFromManifest(array $params): Integration|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('code', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: code');
        }

        $arguments['code'] = $params['code'];
        unset($params['code']);
        if (array_key_exists(Hydrator\Operation\AppManifests\Code\Conversions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\AppManifests\Code\Conversions::class] = $this->hydrators->getObjectMapperOperation🌀AppManifests🌀Code🌀Conversions();
        }

        $operator = new Operator\Apps\CreateFromManifest($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\AppManifests\Code\Conversions::class]);

        return $operator->call($arguments['code']);
    }

    /** @return */
    public function checkToken(array $params): Authorization|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('client_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: client_id');
        }

        $arguments['client_id'] = $params['client_id'];
        unset($params['client_id']);
        if (array_key_exists(Hydrator\Operation\Applications\ClientId\Token::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Applications\ClientId\Token::class] = $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Token();
        }

        $operator = new Operator\Apps\CheckToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Applications\ClientId\Token::class]);

        return $operator->call($arguments['client_id'], $params);
    }

    /** @return */
    public function redeliverWebhookDelivery(array $params): Json|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('delivery_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: delivery_id');
        }

        $arguments['delivery_id'] = $params['delivery_id'];
        unset($params['delivery_id']);
        if (array_key_exists(Hydrator\Operation\App\Hook\Deliveries\DeliveryId\Attempts::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\App\Hook\Deliveries\DeliveryId\Attempts::class] = $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀DeliveryId🌀Attempts();
        }

        $operator = new Operator\Apps\RedeliverWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\App\Hook\Deliveries\DeliveryId\Attempts::class]);

        return $operator->call($arguments['delivery_id']);
    }

    /** @return */
    public function createInstallationAccessToken(array $params): InstallationToken|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('installation_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: installation_id');
        }

        $arguments['installation_id'] = $params['installation_id'];
        unset($params['installation_id']);
        if (array_key_exists(Hydrator\Operation\App\Installations\InstallationId\AccessTokens::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\App\Installations\InstallationId\AccessTokens::class] = $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId🌀AccessTokens();
        }

        $operator = new Operator\Apps\CreateInstallationAccessToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\App\Installations\InstallationId\AccessTokens::class]);

        return $operator->call($arguments['installation_id'], $params);
    }

    /** @return */
    public function scopeToken(array $params): Authorization|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('client_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: client_id');
        }

        $arguments['client_id'] = $params['client_id'];
        unset($params['client_id']);
        if (array_key_exists(Hydrator\Operation\Applications\ClientId\Token\Scoped::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Applications\ClientId\Token\Scoped::class] = $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Token🌀Scoped();
        }

        $operator = new Operator\Apps\ScopeToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Applications\ClientId\Token\Scoped::class]);

        return $operator->call($arguments['client_id'], $params);
    }
}
