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
final class Search
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
    public function code(array $params)
    {
        $arguments = array();
        if (array_key_exists('q', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: q');
        }
        $arguments['q'] = $params['q'];
        unset($params['q']);
        if (array_key_exists('sort', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: sort');
        }
        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('order', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: order');
        }
        $arguments['order'] = $params['order'];
        unset($params['order']);
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
        if (\array_key_exists(Hydrator\Operation\Search\Code::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Search\Code::class] = $this->hydrators->getObjectMapperOperation🌀Search🌀Code();
        }
        $operation = new Operation\Search\Code($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Search\Code::class], $arguments['q'], $arguments['sort'], $arguments['order'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Operation\Search\Code\Response\Applicationjson\H200 {
            return $operation->createResponse($response);
        });
    }
    public function commits(array $params)
    {
        $arguments = array();
        if (array_key_exists('q', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: q');
        }
        $arguments['q'] = $params['q'];
        unset($params['q']);
        if (array_key_exists('sort', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: sort');
        }
        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('order', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: order');
        }
        $arguments['order'] = $params['order'];
        unset($params['order']);
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
        if (\array_key_exists(Hydrator\Operation\Search\Commits::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Search\Commits::class] = $this->hydrators->getObjectMapperOperation🌀Search🌀Commits();
        }
        $operation = new Operation\Search\Commits($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Search\Commits::class], $arguments['q'], $arguments['sort'], $arguments['order'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Operation\Search\Commits\Response\Applicationjson\H200 {
            return $operation->createResponse($response);
        });
    }
    public function issuesAndPullRequests(array $params)
    {
        $arguments = array();
        if (array_key_exists('q', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: q');
        }
        $arguments['q'] = $params['q'];
        unset($params['q']);
        if (array_key_exists('sort', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: sort');
        }
        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('order', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: order');
        }
        $arguments['order'] = $params['order'];
        unset($params['order']);
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
        if (\array_key_exists(Hydrator\Operation\Search\Issues::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Search\Issues::class] = $this->hydrators->getObjectMapperOperation🌀Search🌀Issues();
        }
        $operation = new Operation\Search\IssuesAndPullRequests($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Search\Issues::class], $arguments['q'], $arguments['sort'], $arguments['order'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Operation\Search\IssuesAndPullRequests\Response\Applicationjson\H200 {
            return $operation->createResponse($response);
        });
    }
    public function labels(array $params)
    {
        $arguments = array();
        if (array_key_exists('repository_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: repository_id');
        }
        $arguments['repository_id'] = $params['repository_id'];
        unset($params['repository_id']);
        if (array_key_exists('q', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: q');
        }
        $arguments['q'] = $params['q'];
        unset($params['q']);
        if (array_key_exists('sort', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: sort');
        }
        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('order', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: order');
        }
        $arguments['order'] = $params['order'];
        unset($params['order']);
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
        if (\array_key_exists(Hydrator\Operation\Search\Labels::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Search\Labels::class] = $this->hydrators->getObjectMapperOperation🌀Search🌀Labels();
        }
        $operation = new Operation\Search\Labels($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Search\Labels::class], $arguments['repository_id'], $arguments['q'], $arguments['sort'], $arguments['order'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Operation\Search\Labels\Response\Applicationjson\H200 {
            return $operation->createResponse($response);
        });
    }
    public function repos(array $params)
    {
        $arguments = array();
        if (array_key_exists('q', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: q');
        }
        $arguments['q'] = $params['q'];
        unset($params['q']);
        if (array_key_exists('sort', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: sort');
        }
        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('order', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: order');
        }
        $arguments['order'] = $params['order'];
        unset($params['order']);
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
        if (\array_key_exists(Hydrator\Operation\Search\Repositories::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Search\Repositories::class] = $this->hydrators->getObjectMapperOperation🌀Search🌀Repositories();
        }
        $operation = new Operation\Search\Repos($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Search\Repositories::class], $arguments['q'], $arguments['sort'], $arguments['order'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Operation\Search\Repos\Response\Applicationjson\H200 {
            return $operation->createResponse($response);
        });
    }
    public function topics(array $params)
    {
        $arguments = array();
        if (array_key_exists('q', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: q');
        }
        $arguments['q'] = $params['q'];
        unset($params['q']);
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
        if (\array_key_exists(Hydrator\Operation\Search\Topics::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Search\Topics::class] = $this->hydrators->getObjectMapperOperation🌀Search🌀Topics();
        }
        $operation = new Operation\Search\Topics($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Search\Topics::class], $arguments['q'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Operation\Search\Topics\Response\Applicationjson\H200 {
            return $operation->createResponse($response);
        });
    }
    public function users(array $params)
    {
        $arguments = array();
        if (array_key_exists('q', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: q');
        }
        $arguments['q'] = $params['q'];
        unset($params['q']);
        if (array_key_exists('sort', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: sort');
        }
        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('order', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: order');
        }
        $arguments['order'] = $params['order'];
        unset($params['order']);
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
        if (\array_key_exists(Hydrator\Operation\Search\Users::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Search\Users::class] = $this->hydrators->getObjectMapperOperation🌀Search🌀Users();
        }
        $operation = new Operation\Search\Users($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Search\Users::class], $arguments['q'], $arguments['sort'], $arguments['order'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Operation\Search\Users\Response\Applicationjson\H200 {
            return $operation->createResponse($response);
        });
    }
}
