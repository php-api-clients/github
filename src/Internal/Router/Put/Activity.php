<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Put;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted;
use ApiClients\Client\GitHub\Schema\RepositorySubscription;
use ApiClients\Client\GitHub\Schema\ThreadSubscription;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Activity
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return Schema\ThreadSubscription|array{code:int} */
    public function setThreadSubscription(array $params): ThreadSubscription|array
    {
        $arguments = [];
        if (array_key_exists('thread_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: thread_id');
        }

        $arguments['thread_id'] = $params['thread_id'];
        unset($params['thread_id']);
        $operator = new Internal\Operator\Activity\SetThreadSubscription($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId🌀Subscription());

        return $operator->call($arguments['thread_id'], $params);
    }

    /** @return Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted|array{code:int} */
    public function markRepoNotificationsAsRead(array $params): Accepted|array
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
        $operator = new Internal\Operator\Activity\MarkRepoNotificationsAsRead($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Notifications());

        return $operator->call($arguments['owner'], $arguments['repo'], $params);
    }

    /** @return */
    public function setRepoSubscription(array $params): RepositorySubscription|array
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
        $operator = new Internal\Operator\Activity\SetRepoSubscription($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Subscription());

        return $operator->call($arguments['owner'], $arguments['repo'], $params);
    }

    /** @return array{code:int} */
    public function starRepoForAuthenticatedUser(array $params): array
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
        $operator = new Internal\Operator\Activity\StarRepoForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Starred🌀Owner🌀Repo());

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return Schema\Operations\Activity\MarkNotificationsAsRead\Response\ApplicationJson\Accepted|array{code:int} */
    public function markNotificationsAsRead(array $params): \ApiClients\Client\GitHub\Schema\Operations\Activity\MarkNotificationsAsRead\Response\ApplicationJson\Accepted|array
    {
        $operator = new Internal\Operator\Activity\MarkNotificationsAsRead($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications());

        return $operator->call($params);
    }
}
