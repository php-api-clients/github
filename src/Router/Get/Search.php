<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Search
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

    public function code(array $params)
    {
        $arguments = [];
        if (array_key_exists('q', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: q');
        }

        $arguments['q'] = $params['q'];
        unset($params['q']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('order', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: order');
        }

        $arguments['order'] = $params['order'];
        unset($params['order']);
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
        if (array_key_exists(Hydrator\Operation\Search\Code::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Search\Code::class] = $this->hydrators->getObjectMapperOperation🌀Search🌀Code();
        }

        $operator = new Operator\Search\Code($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Search\Code::class]);

        return $operator->call($arguments['q'], $arguments['sort'], $arguments['order'], $arguments['per_page'], $arguments['page']);
    }

    public function commits(array $params)
    {
        $arguments = [];
        if (array_key_exists('q', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: q');
        }

        $arguments['q'] = $params['q'];
        unset($params['q']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('order', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: order');
        }

        $arguments['order'] = $params['order'];
        unset($params['order']);
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
        if (array_key_exists(Hydrator\Operation\Search\Commits::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Search\Commits::class] = $this->hydrators->getObjectMapperOperation🌀Search🌀Commits();
        }

        $operator = new Operator\Search\Commits($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Search\Commits::class]);

        return $operator->call($arguments['q'], $arguments['sort'], $arguments['order'], $arguments['per_page'], $arguments['page']);
    }

    public function issuesAndPullRequests(array $params)
    {
        $arguments = [];
        if (array_key_exists('q', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: q');
        }

        $arguments['q'] = $params['q'];
        unset($params['q']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('order', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: order');
        }

        $arguments['order'] = $params['order'];
        unset($params['order']);
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
        if (array_key_exists(Hydrator\Operation\Search\Issues::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Search\Issues::class] = $this->hydrators->getObjectMapperOperation🌀Search🌀Issues();
        }

        $operator = new Operator\Search\IssuesAndPullRequests($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Search\Issues::class]);

        return $operator->call($arguments['q'], $arguments['sort'], $arguments['order'], $arguments['per_page'], $arguments['page']);
    }

    public function labels(array $params)
    {
        $arguments = [];
        if (array_key_exists('repository_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repository_id');
        }

        $arguments['repository_id'] = $params['repository_id'];
        unset($params['repository_id']);
        if (array_key_exists('q', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: q');
        }

        $arguments['q'] = $params['q'];
        unset($params['q']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('order', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: order');
        }

        $arguments['order'] = $params['order'];
        unset($params['order']);
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
        if (array_key_exists(Hydrator\Operation\Search\Labels::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Search\Labels::class] = $this->hydrators->getObjectMapperOperation🌀Search🌀Labels();
        }

        $operator = new Operator\Search\Labels($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Search\Labels::class]);

        return $operator->call($arguments['repository_id'], $arguments['q'], $arguments['sort'], $arguments['order'], $arguments['per_page'], $arguments['page']);
    }

    public function repos(array $params)
    {
        $arguments = [];
        if (array_key_exists('q', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: q');
        }

        $arguments['q'] = $params['q'];
        unset($params['q']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('order', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: order');
        }

        $arguments['order'] = $params['order'];
        unset($params['order']);
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
        if (array_key_exists(Hydrator\Operation\Search\Repositories::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Search\Repositories::class] = $this->hydrators->getObjectMapperOperation🌀Search🌀Repositories();
        }

        $operator = new Operator\Search\Repos($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Search\Repositories::class]);

        return $operator->call($arguments['q'], $arguments['sort'], $arguments['order'], $arguments['per_page'], $arguments['page']);
    }

    public function topics(array $params)
    {
        $arguments = [];
        if (array_key_exists('q', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: q');
        }

        $arguments['q'] = $params['q'];
        unset($params['q']);
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
        if (array_key_exists(Hydrator\Operation\Search\Topics::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Search\Topics::class] = $this->hydrators->getObjectMapperOperation🌀Search🌀Topics();
        }

        $operator = new Operator\Search\Topics($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Search\Topics::class]);

        return $operator->call($arguments['q'], $arguments['per_page'], $arguments['page']);
    }

    public function users(array $params)
    {
        $arguments = [];
        if (array_key_exists('q', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: q');
        }

        $arguments['q'] = $params['q'];
        unset($params['q']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('order', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: order');
        }

        $arguments['order'] = $params['order'];
        unset($params['order']);
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
        if (array_key_exists(Hydrator\Operation\Search\Users::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Search\Users::class] = $this->hydrators->getObjectMapperOperation🌀Search🌀Users();
        }

        $operator = new Operator\Search\Users($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Search\Users::class]);

        return $operator->call($arguments['q'], $arguments['sort'], $arguments['order'], $arguments['per_page'], $arguments['page']);
    }
}
