<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Get;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\Operations\Search\Code\Response\ApplicationJson\Ok;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Search
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function code(array $params): Ok|WithoutBody
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
        $operator = new Internal\Operator\Search\Code($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Code());

        return $operator->call($arguments['q'], $arguments['sort'], $arguments['order'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function commits(array $params): \ApiClients\Client\GitHub\Schema\Operations\Search\Commits\Response\ApplicationJson\Ok|WithoutBody
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
        $operator = new Internal\Operator\Search\Commits($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Commits());

        return $operator->call($arguments['q'], $arguments['sort'], $arguments['order'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function issuesAndPullRequests(array $params): \ApiClients\Client\GitHub\Schema\Operations\Search\IssuesAndPullRequests\Response\ApplicationJson\Ok|WithoutBody
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
        $operator = new Internal\Operator\Search\IssuesAndPullRequests($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Issues());

        return $operator->call($arguments['q'], $arguments['sort'], $arguments['order'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function labels(array $params): \ApiClients\Client\GitHub\Schema\Operations\Search\Labels\Response\ApplicationJson\Ok|WithoutBody
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
        $operator = new Internal\Operator\Search\Labels($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Labels());

        return $operator->call($arguments['repository_id'], $arguments['q'], $arguments['sort'], $arguments['order'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function repos(array $params): \ApiClients\Client\GitHub\Schema\Operations\Search\Repos\Response\ApplicationJson\Ok|WithoutBody
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
        $operator = new Internal\Operator\Search\Repos($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Repositories());

        return $operator->call($arguments['q'], $arguments['sort'], $arguments['order'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function topics(array $params): \ApiClients\Client\GitHub\Schema\Operations\Search\Topics\Response\ApplicationJson\Ok|WithoutBody
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
        $operator = new Internal\Operator\Search\Topics($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Topics());

        return $operator->call($arguments['q'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function users(array $params): \ApiClients\Client\GitHub\Schema\Operations\Search\Users\Response\ApplicationJson\Ok|WithoutBody
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
        $operator = new Internal\Operator\Search\Users($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Users());

        return $operator->call($arguments['q'], $arguments['sort'], $arguments['order'], $arguments['per_page'], $arguments['page']);
    }
}
