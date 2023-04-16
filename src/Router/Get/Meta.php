<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema\ApiOverview;
use ApiClients\Client\GitHub\Schema\Operation\Meta\GetZen\Response\Textplain\H200;
use ApiClients\Client\GitHub\Schema\Root;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function array_key_exists;

final class Meta
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

    public function root(array $params)
    {
        $arguments = [];
        if (array_key_exists(Hydrator\Operation\Root::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Root::class] = $this->hydrators->getObjectMapperOperation🌀Root();
        }

        $operation = new Operation\Meta\Root($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Root::class]);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Root {
            return $operation->createResponse($response);
        });
    }

    public function get(array $params)
    {
        $arguments = [];
        if (array_key_exists(Hydrator\Operation\Meta::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Meta::class] = $this->hydrators->getObjectMapperOperation🌀Meta();
        }

        $operation = new Operation\Meta\Get($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Meta::class]);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ApiOverview {
            return $operation->createResponse($response);
        });
    }

    public function getOctocat(array $params)
    {
        $arguments = [];
        if (array_key_exists('s', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: s');
        }

        $arguments['s'] = $params['s'];
        unset($params['s']);
        $operation = new Operation\Meta\GetOctocat($arguments['s']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ResponseInterface {
            return $operation->createResponse($response);
        });
    }

    public function getAllVersions(array $params)
    {
        $arguments = [];
        if (array_key_exists(Hydrator\Operation\Versions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Versions::class] = $this->hydrators->getObjectMapperOperation🌀Versions();
        }

        $operation = new Operation\Meta\GetAllVersions($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Versions::class]);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable {
            return $operation->createResponse($response);
        });
    }

    public function getZen(array $params)
    {
        $arguments = [];
        if (array_key_exists(Hydrator\Operation\Zen::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Zen::class] = $this->hydrators->getObjectMapperOperation🌀Zen();
        }

        $operation = new Operation\Meta\GetZen($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Zen::class]);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): H200 {
            return $operation->createResponse($response);
        });
    }
}
