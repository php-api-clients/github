<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Post;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema\Authorization;
use ApiClients\Client\GitHub\Schema\InstallationToken;
use ApiClients\Client\GitHub\Schema\Operation\Apps\CreateFromManifest\Response\Applicationjson\H201;
use ApiClients\Client\GitHub\Schema\Operation\Apps\RedeliverWebhookDelivery\Response\Applicationjson\H202;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;

use function array_key_exists;

final class Apps
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

    public function createFromManifest(array $params)
    {
        $arguments = [];
        if (array_key_exists('code', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: code');
        }

        $arguments['code'] = $params['code'];
        unset($params['code']);
        if (array_key_exists(Hydrator\Operation\AppManifests\CbCodeRcb\Conversions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\AppManifests\CbCodeRcb\Conversions::class] = $this->hydrators->getObjectMapperOperation🌀AppManifests🌀CbCodeRcb🌀Conversions();
        }

        $operation = new Operation\Apps\CreateFromManifest($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\AppManifests\CbCodeRcb\Conversions::class], $arguments['code']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): H201 {
            return $operation->createResponse($response);
        });
    }

    public function checkToken(array $params)
    {
        $arguments = [];
        if (array_key_exists('client_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: client_id');
        }

        $arguments['client_id'] = $params['client_id'];
        unset($params['client_id']);
        if (array_key_exists(Hydrator\Operation\Applications\CbClientIdRcb\Token::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Applications\CbClientIdRcb\Token::class] = $this->hydrators->getObjectMapperOperation🌀Applications🌀CbClientIdRcb🌀Token();
        }

        $operation = new Operation\Apps\CheckToken($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Applications\CbClientIdRcb\Token::class], $arguments['client_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Authorization {
            return $operation->createResponse($response);
        });
    }

    public function redeliverWebhookDelivery(array $params)
    {
        $arguments = [];
        if (array_key_exists('delivery_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: delivery_id');
        }

        $arguments['delivery_id'] = $params['delivery_id'];
        unset($params['delivery_id']);
        if (array_key_exists(Hydrator\Operation\App\Hook\Deliveries\CbDeliveryIdRcb\Attempts::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\App\Hook\Deliveries\CbDeliveryIdRcb\Attempts::class] = $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts();
        }

        $operation = new Operation\Apps\RedeliverWebhookDelivery($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\App\Hook\Deliveries\CbDeliveryIdRcb\Attempts::class], $arguments['delivery_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): H202 {
            return $operation->createResponse($response);
        });
    }

    public function createInstallationAccessToken(array $params)
    {
        $arguments = [];
        if (array_key_exists('installation_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: installation_id');
        }

        $arguments['installation_id'] = $params['installation_id'];
        unset($params['installation_id']);
        if (array_key_exists(Hydrator\Operation\App\Installations\CbInstallationIdRcb\AccessTokens::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\App\Installations\CbInstallationIdRcb\AccessTokens::class] = $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀CbInstallationIdRcb🌀AccessTokens();
        }

        $operation = new Operation\Apps\CreateInstallationAccessToken($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\App\Installations\CbInstallationIdRcb\AccessTokens::class], $arguments['installation_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): InstallationToken {
            return $operation->createResponse($response);
        });
    }

    public function scopeToken(array $params)
    {
        $arguments = [];
        if (array_key_exists('client_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: client_id');
        }

        $arguments['client_id'] = $params['client_id'];
        unset($params['client_id']);
        if (array_key_exists(Hydrator\Operation\Applications\CbClientIdRcb\Token\Scoped::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Applications\CbClientIdRcb\Token\Scoped::class] = $this->hydrators->getObjectMapperOperation🌀Applications🌀CbClientIdRcb🌀Token🌀Scoped();
        }

        $operation = new Operation\Apps\ScopeToken($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Applications\CbClientIdRcb\Token\Scoped::class], $arguments['client_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Authorization {
            return $operation->createResponse($response);
        });
    }
}
