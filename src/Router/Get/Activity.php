<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\Feed;
use ApiClients\Client\GitHub\Schema\Repository;
use ApiClients\Client\GitHub\Schema\RepositorySubscription;
use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\Stargazer;
use ApiClients\Client\GitHub\Schema\StarredRepository;
use ApiClients\Client\GitHub\Schema\Thread;
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

    /** @return (iterable<Schema\Event> | array{code: int}) */
    public function listPublicEvents(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
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
        if (array_key_exists(Hydrator\Operation\Events::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Events::class] = $this->hydrators->getObjectMapperOperation🌀Events();
        }

        $operator = new Operator\Activity\ListPublicEvents($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Events::class]);

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getFeeds(array $params): Feed|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\Feeds::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Feeds::class] = $this->hydrators->getObjectMapperOperation🌀Feeds();
        }

        $operator = new Operator\Activity\GetFeeds($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Feeds::class]);

        return $operator->call();
    }

    /** @return (iterable<Schema\Thread> | array{code: int}) */
    public function listNotificationsForAuthenticatedUser(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('since', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: since');
        }

        $arguments['since'] = $params['since'];
        unset($params['since']);
        if (array_key_exists('before', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: before');
        }

        $arguments['before'] = $params['before'];
        unset($params['before']);
        if (array_key_exists('all', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: all');
        }

        $arguments['all'] = $params['all'];
        unset($params['all']);
        if (array_key_exists('participating', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: participating');
        }

        $arguments['participating'] = $params['participating'];
        unset($params['participating']);
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
        if (array_key_exists(Hydrator\Operation\Notifications::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Notifications::class] = $this->hydrators->getObjectMapperOperation🌀Notifications();
        }

        $operator = new Operator\Activity\ListNotificationsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Notifications::class]);

        return $operator->call($arguments['since'], $arguments['before'], $arguments['all'], $arguments['participating'], $arguments['page'], $arguments['per_page']);
    }

    /** @return (iterable<Schema\Repository> | array{code: int}) */
    public function listReposStarredByAuthenticatedUser(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
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
        if (array_key_exists(Hydrator\Operation\User\Starred::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Starred::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Starred();
        }

        $operator = new Operator\Activity\ListReposStarredByAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Starred::class]);

        return $operator->call($arguments['sort'], $arguments['direction'], $arguments['per_page'], $arguments['page']);
    }

    /** @return (iterable<Schema\MinimalRepository> | array{code: int}) */
    public function listWatchedReposForAuthenticatedUser(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
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
        if (array_key_exists(Hydrator\Operation\User\Subscriptions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Subscriptions::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Subscriptions();
        }

        $operator = new Operator\Activity\ListWatchedReposForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Subscriptions::class]);

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return (Schema\Thread | array{code: int}) */
    public function getThread(array $params): Thread|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('thread_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: thread_id');
        }

        $arguments['thread_id'] = $params['thread_id'];
        unset($params['thread_id']);
        if (array_key_exists(Hydrator\Operation\Notifications\Threads\ThreadId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Notifications\Threads\ThreadId::class] = $this->hydrators->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId();
        }

        $operator = new Operator\Activity\GetThread($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Notifications\Threads\ThreadId::class]);

        return $operator->call($arguments['thread_id']);
    }

    /** @return iterable<Schema\Event> */
    public function listPublicOrgEvents(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Events::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Events::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Events();
        }

        $operator = new Operator\Activity\ListPublicOrgEvents($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Events::class]);

        return $operator->call($arguments['org'], $arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<Schema\Event> */
    public function listEventsForAuthenticatedUser(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
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
        if (array_key_exists(Hydrator\Operation\Users\Username\Events::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Users\Username\Events::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Events();
        }

        $operator = new Operator\Activity\ListEventsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\Username\Events::class]);

        return $operator->call($arguments['username'], $arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<Schema\Event> */
    public function listReceivedEventsForUser(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
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
        if (array_key_exists(Hydrator\Operation\Users\Username\ReceivedEvents::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Users\Username\ReceivedEvents::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀ReceivedEvents();
        }

        $operator = new Operator\Activity\ListReceivedEventsForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\Username\ReceivedEvents::class]);

        return $operator->call($arguments['username'], $arguments['per_page'], $arguments['page']);
    }

    /** @return (Schema\StarredRepository | Schema\Repository) */
    public function listReposStarredByUser(array $params): StarredRepository|Repository|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
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
        if (array_key_exists(Hydrator\Operation\Users\Username\Starred::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Users\Username\Starred::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Starred();
        }

        $operator = new Operator\Activity\ListReposStarredByUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\Username\Starred::class]);

        return $operator->call($arguments['username'], $arguments['sort'], $arguments['direction'], $arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<Schema\MinimalRepository> */
    public function listReposWatchedByUser(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
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
        if (array_key_exists(Hydrator\Operation\Users\Username\Subscriptions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Users\Username\Subscriptions::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Subscriptions();
        }

        $operator = new Operator\Activity\ListReposWatchedByUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\Username\Subscriptions::class]);

        return $operator->call($arguments['username'], $arguments['per_page'], $arguments['page']);
    }

    /** @return (iterable<Schema\Event> | Schema\BasicError | array{code: int}) */
    public function listPublicEventsForRepoNetwork(array $params): iterable|BasicError
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
        if (array_key_exists(Hydrator\Operation\Networks\Owner\Repo\Events::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Networks\Owner\Repo\Events::class] = $this->hydrators->getObjectMapperOperation🌀Networks🌀Owner🌀Repo🌀Events();
        }

        $operator = new Operator\Activity\ListPublicEventsForRepoNetwork($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Networks\Owner\Repo\Events::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);
    }

    /** @return (Schema\ThreadSubscription | array{code: int}) */
    public function getThreadSubscriptionForAuthenticatedUser(array $params): ThreadSubscription|array
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

        $operator = new Operator\Activity\GetThreadSubscriptionForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Notifications\Threads\ThreadId\Subscription::class]);

        return $operator->call($arguments['thread_id']);
    }

    /** @return iterable<Schema\Event> */
    public function listRepoEvents(array $params): iterable
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Events::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Events::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Events();
        }

        $operator = new Operator\Activity\ListRepoEvents($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Events::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<Schema\Thread> */
    public function listRepoNotificationsForAuthenticatedUser(array $params): iterable
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
        if (array_key_exists('since', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: since');
        }

        $arguments['since'] = $params['since'];
        unset($params['since']);
        if (array_key_exists('before', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: before');
        }

        $arguments['before'] = $params['before'];
        unset($params['before']);
        if (array_key_exists('all', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: all');
        }

        $arguments['all'] = $params['all'];
        unset($params['all']);
        if (array_key_exists('participating', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: participating');
        }

        $arguments['participating'] = $params['participating'];
        unset($params['participating']);
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Notifications::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Notifications::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Notifications();
        }

        $operator = new Operator\Activity\ListRepoNotificationsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Notifications::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['since'], $arguments['before'], $arguments['all'], $arguments['participating'], $arguments['per_page'], $arguments['page']);
    }

    /** @return (Schema\SimpleUser | Schema\Stargazer) */
    public function listStargazersForRepo(array $params): SimpleUser|Stargazer|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Stargazers::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Stargazers::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stargazers();
        }

        $operator = new Operator\Activity\ListStargazersForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Stargazers::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<Schema\SimpleUser> */
    public function listWatchersForRepo(array $params): iterable
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Subscribers::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Subscribers::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Subscribers();
        }

        $operator = new Operator\Activity\ListWatchersForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Subscribers::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);
    }

    /** @return (Schema\RepositorySubscription | array{code: int}) */
    public function getRepoSubscription(array $params): RepositorySubscription|array
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

        $operator = new Operator\Activity\GetRepoSubscription($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Subscription::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return array{code: int} */
    public function checkRepoIsStarredByAuthenticatedUser(array $params): array
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

        $operator = new Operator\Activity\CheckRepoIsStarredByAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Starred\Owner\Repo::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return iterable<Schema\Event> */
    public function listPublicEventsForUser(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
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
        if (array_key_exists(Hydrator\Operation\Users\Username\Events\Public_::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Users\Username\Events\Public_::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Events🌀Public_();
        }

        $operator = new Operator\Activity\ListPublicEventsForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\Username\Events\Public_::class]);

        return $operator->call($arguments['username'], $arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<Schema\Event> */
    public function listReceivedPublicEventsForUser(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
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
        if (array_key_exists(Hydrator\Operation\Users\Username\ReceivedEvents\Public_::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Users\Username\ReceivedEvents\Public_::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀ReceivedEvents🌀Public_();
        }

        $operator = new Operator\Activity\ListReceivedPublicEventsForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\Username\ReceivedEvents\Public_::class]);

        return $operator->call($arguments['username'], $arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<Schema\Event> */
    public function listOrgEventsForAuthenticatedUser(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
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
        if (array_key_exists(Hydrator\Operation\Users\Username\Events\Orgs\Org::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Users\Username\Events\Orgs\Org::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Events🌀Orgs🌀Org();
        }

        $operator = new Operator\Activity\ListOrgEventsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\Username\Events\Orgs\Org::class]);

        return $operator->call($arguments['username'], $arguments['org'], $arguments['per_page'], $arguments['page']);
    }
}
