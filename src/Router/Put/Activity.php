<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Put;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted;
use ApiClients\Client\GitHub\Schema\RepositorySubscription;
use ApiClients\Client\GitHub\Schema\ThreadSubscription;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Activity
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return (Schema\ThreadSubscription | array{code: int}) */
    public function setThreadSubscription(array $params): ThreadSubscription|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('thread_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: thread_id');
        }

        $arguments['thread_id'] = $params['thread_id'];
        unset($params['thread_id']);
        if (array_key_exists(Hydrator\Operation\Notifications\Threads\ThreadId\Subscription::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Notifications\Threads\ThreadId\Subscription::class] = $this->hydrators->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId🌀Subscription();
        }

        $operator = new Operator\Activity\SetThreadSubscription($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Notifications\Threads\ThreadId\Subscription::class]);

        return $operator->call($arguments['thread_id'], $params);
    }

    /** @return (Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted | array{code: int}) */
    public function markRepoNotificationsAsRead(array $params): Accepted|array
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Notifications::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Notifications::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Notifications();
        }

        $operator = new Operator\Activity\MarkRepoNotificationsAsRead($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Notifications::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $params);
    }

    /** @return */
    public function setRepoSubscription(array $params): RepositorySubscription|array
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Subscription::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Subscription::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Subscription();
        }

        $operator = new Operator\Activity\SetRepoSubscription($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Subscription::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $params);
    }

    /** @return array{code: int} */
    public function starRepoForAuthenticatedUser(array $params): array
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\User\Starred\Owner\Repo::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Starred\Owner\Repo::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Starred🌀Owner🌀Repo();
        }

        $operator = new Operator\Activity\StarRepoForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Starred\Owner\Repo::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return (Schema\Operations\Activity\MarkNotificationsAsRead\Response\ApplicationJson\Accepted | array{code: int}) */
    public function markNotificationsAsRead(array $params): \ApiClients\Client\GitHub\Schema\Operations\Activity\MarkNotificationsAsRead\Response\ApplicationJson\Accepted|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Notifications::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Notifications::class] = $this->hydrators->getObjectMapperOperation🌀Notifications();
        }

        $operator = new Operator\Activity\MarkNotificationsAsRead($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Notifications::class]);

        return $operator->call($params);
    }
}
