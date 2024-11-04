<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\List;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;
use function count;

final class ApiInsights
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return Observable<Schema\ApiInsightsUserStats> */
    public function getUserStatsListing(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('user_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: user_id');
        }

        $arguments['user_id'] = $params['user_id'];
        unset($params['user_id']);
        if (array_key_exists('min_timestamp', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: min_timestamp');
        }

        $arguments['min_timestamp'] = $params['min_timestamp'];
        unset($params['min_timestamp']);
        if (array_key_exists('max_timestamp', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: max_timestamp');
        }

        $arguments['max_timestamp'] = $params['max_timestamp'];
        unset($params['max_timestamp']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        $arguments['page'] = 1;
        do {
            $operator = new Internal\Operator\ApiInsights\GetUserStatsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Insights🌀Api🌀UserStats🌀UserId());
            $items    = [...$operator->call($arguments['org'], $arguments['user_id'], $arguments['min_timestamp'], $arguments['max_timestamp'], $arguments['sort'], $arguments['page'], $arguments['per_page'], $arguments['direction'])];

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return Observable<Schema\ApiInsightsSubjectStats> */
    public function getSubjectStatsListing(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('min_timestamp', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: min_timestamp');
        }

        $arguments['min_timestamp'] = $params['min_timestamp'];
        unset($params['min_timestamp']);
        if (array_key_exists('max_timestamp', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: max_timestamp');
        }

        $arguments['max_timestamp'] = $params['max_timestamp'];
        unset($params['max_timestamp']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        $arguments['page'] = 1;
        do {
            $operator = new Internal\Operator\ApiInsights\GetSubjectStatsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Insights🌀Api🌀SubjectStats());
            $items    = [...$operator->call($arguments['org'], $arguments['min_timestamp'], $arguments['max_timestamp'], $arguments['sort'], $arguments['page'], $arguments['per_page'], $arguments['direction'])];

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return Observable<Schema\ApiInsightsRouteStats> */
    public function getRouteStatsByActorListing(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('actor_type', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: actor_type');
        }

        $arguments['actor_type'] = $params['actor_type'];
        unset($params['actor_type']);
        if (array_key_exists('actor_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: actor_id');
        }

        $arguments['actor_id'] = $params['actor_id'];
        unset($params['actor_id']);
        if (array_key_exists('min_timestamp', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: min_timestamp');
        }

        $arguments['min_timestamp'] = $params['min_timestamp'];
        unset($params['min_timestamp']);
        if (array_key_exists('max_timestamp', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: max_timestamp');
        }

        $arguments['max_timestamp'] = $params['max_timestamp'];
        unset($params['max_timestamp']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        $arguments['page'] = 1;
        do {
            $operator = new Internal\Operator\ApiInsights\GetRouteStatsByActorListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Insights🌀Api🌀RouteStats🌀ActorType🌀ActorId());
            $items    = [...$operator->call($arguments['org'], $arguments['actor_type'], $arguments['actor_id'], $arguments['min_timestamp'], $arguments['max_timestamp'], $arguments['sort'], $arguments['page'], $arguments['per_page'], $arguments['direction'])];

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }
}
