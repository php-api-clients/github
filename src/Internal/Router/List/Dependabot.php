<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\List;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;
use function count;

final class Dependabot
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return Observable<Schema\DependabotAlert>|WithoutBody */
    public function listAlertsForRepoListing(array $params): iterable|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('state', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: state');
        }

        $arguments['state'] = $params['state'];
        unset($params['state']);
        if (array_key_exists('severity', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: severity');
        }

        $arguments['severity'] = $params['severity'];
        unset($params['severity']);
        if (array_key_exists('ecosystem', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: ecosystem');
        }

        $arguments['ecosystem'] = $params['ecosystem'];
        unset($params['ecosystem']);
        if (array_key_exists('package', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: package');
        }

        $arguments['package'] = $params['package'];
        unset($params['package']);
        if (array_key_exists('manifest', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: manifest');
        }

        $arguments['manifest'] = $params['manifest'];
        unset($params['manifest']);
        if (array_key_exists('scope', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: scope');
        }

        $arguments['scope'] = $params['scope'];
        unset($params['scope']);
        if (array_key_exists('before', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: before');
        }

        $arguments['before'] = $params['before'];
        unset($params['before']);
        if (array_key_exists('after', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: after');
        }

        $arguments['after'] = $params['after'];
        unset($params['after']);
        if (array_key_exists('last', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: last');
        }

        $arguments['last'] = $params['last'];
        unset($params['last']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
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
        if (array_key_exists('first', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: first');
        }

        $arguments['first'] = $params['first'];
        unset($params['first']);
        $arguments['page'] = 1;
        do {
            $operator = new Internal\Operator\Dependabot\ListAlertsForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts());
            $items    = [...$operator->call($arguments['owner'], $arguments['repo'], $arguments['state'], $arguments['severity'], $arguments['ecosystem'], $arguments['package'], $arguments['manifest'], $arguments['scope'], $arguments['before'], $arguments['after'], $arguments['last'], $arguments['sort'], $arguments['direction'], $arguments['page'], $arguments['per_page'], $arguments['first'])];

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }
}
