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
final class Meta
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
    public function root(array $params)
    {
        $arguments = array();
        if (\array_key_exists(Hydrator\Operation\Root::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Root::class] = $this->hydrators->getObjectMapperOperation🌀Root();
        }
        $operation = new Operation\Meta\Root($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Root::class]);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Root {
            return $operation->createResponse($response);
        });
    }
    public function get(array $params)
    {
        $arguments = array();
        if (\array_key_exists(Hydrator\Operation\Meta::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Meta::class] = $this->hydrators->getObjectMapperOperation🌀Meta();
        }
        $operation = new Operation\Meta\Get($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Meta::class]);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\ApiOverview {
            return $operation->createResponse($response);
        });
    }
    public function getOctocat(array $params)
    {
        $arguments = array();
        if (array_key_exists('s', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: s');
        }
        $arguments['s'] = $params['s'];
        unset($params['s']);
        $operation = new Operation\Meta\GetOctocat($arguments['s']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Psr\Http\Message\ResponseInterface {
            return $operation->createResponse($response);
        });
    }
    public function getAllVersions(array $params)
    {
        $arguments = array();
        if (\array_key_exists(Hydrator\Operation\Versions::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Versions::class] = $this->hydrators->getObjectMapperOperation🌀Versions();
        }
        $operation = new Operation\Meta\GetAllVersions($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Versions::class]);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function getZen(array $params)
    {
        $arguments = array();
        if (\array_key_exists(Hydrator\Operation\Zen::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Zen::class] = $this->hydrators->getObjectMapperOperation🌀Zen();
        }
        $operation = new Operation\Meta\GetZen($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Zen::class]);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Operation\Meta\GetZen\Response\Textplain\H200 {
            return $operation->createResponse($response);
        });
    }
}
