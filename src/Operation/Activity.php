<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;

use function array_key_exists;

final class Activity
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function listPublicEvents(int $perPage, int $page): Schema\Event
    {
        if (array_key_exists(Operator\Activity\ListPublicEvents::class, $this->operator) === false) {
            $this->operator[Operator\Activity\ListPublicEvents::class] = new Operator\Activity\ListPublicEvents($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Events());
        }

        return $this->operator[Operator\Activity\ListPublicEvents::class]->call($perPage, $page);
    }

    public function getFeeds(): Schema\Feed
    {
        if (array_key_exists(Operator\Activity\GetFeeds::class, $this->operator) === false) {
            $this->operator[Operator\Activity\GetFeeds::class] = new Operator\Activity\GetFeeds($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Feeds());
        }

        return $this->operator[Operator\Activity\GetFeeds::class]->call();
    }

    public function listPublicEventsForRepoNetwork(string $owner, string $repo, int $perPage, int $page): Schema\Event|Schema\BasicError
    {
        if (array_key_exists(Operator\Activity\ListPublicEventsForRepoNetwork::class, $this->operator) === false) {
            $this->operator[Operator\Activity\ListPublicEventsForRepoNetwork::class] = new Operator\Activity\ListPublicEventsForRepoNetwork($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Networks🌀Owner🌀Repo🌀Events());
        }

        return $this->operator[Operator\Activity\ListPublicEventsForRepoNetwork::class]->call($owner, $repo, $perPage, $page);
    }

    public function listNotificationsForAuthenticatedUser(string $since, string $before, bool $all, bool $participating, int $page, int $perPage): Schema\Thread
    {
        if (array_key_exists(Operator\Activity\ListNotificationsForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Activity\ListNotificationsForAuthenticatedUser::class] = new Operator\Activity\ListNotificationsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications());
        }

        return $this->operator[Operator\Activity\ListNotificationsForAuthenticatedUser::class]->call($since, $before, $all, $participating, $page, $perPage);
    }

    public function markNotificationsAsRead(array $params): Schema\Operations\Activity\MarkNotificationsAsRead\Response\ApplicationJson\Accepted
    {
        if (array_key_exists(Operator\Activity\MarkNotificationsAsRead::class, $this->operator) === false) {
            $this->operator[Operator\Activity\MarkNotificationsAsRead::class] = new Operator\Activity\MarkNotificationsAsRead($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications());
        }

        return $this->operator[Operator\Activity\MarkNotificationsAsRead::class]->call($params);
    }

    public function getThread(int $threadId): Schema\Thread
    {
        if (array_key_exists(Operator\Activity\GetThread::class, $this->operator) === false) {
            $this->operator[Operator\Activity\GetThread::class] = new Operator\Activity\GetThread($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId());
        }

        return $this->operator[Operator\Activity\GetThread::class]->call($threadId);
    }

    public function markThreadAsRead(int $threadId): ResponseInterface
    {
        if (array_key_exists(Operator\Activity\MarkThreadAsRead::class, $this->operator) === false) {
            $this->operator[Operator\Activity\MarkThreadAsRead::class] = new Operator\Activity\MarkThreadAsRead($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId());
        }

        return $this->operator[Operator\Activity\MarkThreadAsRead::class]->call($threadId);
    }

    public function getThreadSubscriptionForAuthenticatedUser(int $threadId): Schema\ThreadSubscription
    {
        if (array_key_exists(Operator\Activity\GetThreadSubscriptionForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Activity\GetThreadSubscriptionForAuthenticatedUser::class] = new Operator\Activity\GetThreadSubscriptionForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId🌀Subscription());
        }

        return $this->operator[Operator\Activity\GetThreadSubscriptionForAuthenticatedUser::class]->call($threadId);
    }

    public function setThreadSubscription(int $threadId, array $params): Schema\ThreadSubscription
    {
        if (array_key_exists(Operator\Activity\SetThreadSubscription::class, $this->operator) === false) {
            $this->operator[Operator\Activity\SetThreadSubscription::class] = new Operator\Activity\SetThreadSubscription($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId🌀Subscription());
        }

        return $this->operator[Operator\Activity\SetThreadSubscription::class]->call($threadId, $params);
    }

    public function deleteThreadSubscription(int $threadId): ResponseInterface
    {
        if (array_key_exists(Operator\Activity\DeleteThreadSubscription::class, $this->operator) === false) {
            $this->operator[Operator\Activity\DeleteThreadSubscription::class] = new Operator\Activity\DeleteThreadSubscription($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId🌀Subscription());
        }

        return $this->operator[Operator\Activity\DeleteThreadSubscription::class]->call($threadId);
    }

    public function listPublicOrgEvents(string $org, int $perPage, int $page): Schema\Event
    {
        if (array_key_exists(Operator\Activity\ListPublicOrgEvents::class, $this->operator) === false) {
            $this->operator[Operator\Activity\ListPublicOrgEvents::class] = new Operator\Activity\ListPublicOrgEvents($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Events());
        }

        return $this->operator[Operator\Activity\ListPublicOrgEvents::class]->call($org, $perPage, $page);
    }

    public function listRepoEvents(string $owner, string $repo, int $perPage, int $page): Schema\Event
    {
        if (array_key_exists(Operator\Activity\ListRepoEvents::class, $this->operator) === false) {
            $this->operator[Operator\Activity\ListRepoEvents::class] = new Operator\Activity\ListRepoEvents($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Events());
        }

        return $this->operator[Operator\Activity\ListRepoEvents::class]->call($owner, $repo, $perPage, $page);
    }

    public function listRepoNotificationsForAuthenticatedUser(string $owner, string $repo, string $since, string $before, bool $all, bool $participating, int $perPage, int $page): Schema\Thread
    {
        if (array_key_exists(Operator\Activity\ListRepoNotificationsForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Activity\ListRepoNotificationsForAuthenticatedUser::class] = new Operator\Activity\ListRepoNotificationsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Notifications());
        }

        return $this->operator[Operator\Activity\ListRepoNotificationsForAuthenticatedUser::class]->call($owner, $repo, $since, $before, $all, $participating, $perPage, $page);
    }

    public function markRepoNotificationsAsRead(string $owner, string $repo, array $params): Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted
    {
        if (array_key_exists(Operator\Activity\MarkRepoNotificationsAsRead::class, $this->operator) === false) {
            $this->operator[Operator\Activity\MarkRepoNotificationsAsRead::class] = new Operator\Activity\MarkRepoNotificationsAsRead($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Notifications());
        }

        return $this->operator[Operator\Activity\MarkRepoNotificationsAsRead::class]->call($owner, $repo, $params);
    }

    public function listStargazersForRepo(string $owner, string $repo, int $perPage, int $page): Schema\Operations\Activity\ListStargazersForRepo\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Activity\ListStargazersForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Activity\ListStargazersForRepo::class] = new Operator\Activity\ListStargazersForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stargazers());
        }

        return $this->operator[Operator\Activity\ListStargazersForRepo::class]->call($owner, $repo, $perPage, $page);
    }

    public function listWatchersForRepo(string $owner, string $repo, int $perPage, int $page): Schema\SimpleUser
    {
        if (array_key_exists(Operator\Activity\ListWatchersForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Activity\ListWatchersForRepo::class] = new Operator\Activity\ListWatchersForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Subscribers());
        }

        return $this->operator[Operator\Activity\ListWatchersForRepo::class]->call($owner, $repo, $perPage, $page);
    }

    public function getRepoSubscription(string $owner, string $repo): Schema\RepositorySubscription
    {
        if (array_key_exists(Operator\Activity\GetRepoSubscription::class, $this->operator) === false) {
            $this->operator[Operator\Activity\GetRepoSubscription::class] = new Operator\Activity\GetRepoSubscription($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Subscription());
        }

        return $this->operator[Operator\Activity\GetRepoSubscription::class]->call($owner, $repo);
    }

    public function setRepoSubscription(string $owner, string $repo, array $params): Schema\RepositorySubscription
    {
        if (array_key_exists(Operator\Activity\SetRepoSubscription::class, $this->operator) === false) {
            $this->operator[Operator\Activity\SetRepoSubscription::class] = new Operator\Activity\SetRepoSubscription($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Subscription());
        }

        return $this->operator[Operator\Activity\SetRepoSubscription::class]->call($owner, $repo, $params);
    }

    public function deleteRepoSubscription(string $owner, string $repo): ResponseInterface
    {
        if (array_key_exists(Operator\Activity\DeleteRepoSubscription::class, $this->operator) === false) {
            $this->operator[Operator\Activity\DeleteRepoSubscription::class] = new Operator\Activity\DeleteRepoSubscription($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Subscription());
        }

        return $this->operator[Operator\Activity\DeleteRepoSubscription::class]->call($owner, $repo);
    }

    public function listReposStarredByAuthenticatedUser(string $sort, string $direction, int $perPage, int $page): Schema\Repository|Schema\StarredRepository
    {
        if (array_key_exists(Operator\Activity\ListReposStarredByAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Activity\ListReposStarredByAuthenticatedUser::class] = new Operator\Activity\ListReposStarredByAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Starred());
        }

        return $this->operator[Operator\Activity\ListReposStarredByAuthenticatedUser::class]->call($sort, $direction, $perPage, $page);
    }

    public function checkRepoIsStarredByAuthenticatedUser(string $owner, string $repo): ResponseInterface
    {
        if (array_key_exists(Operator\Activity\CheckRepoIsStarredByAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Activity\CheckRepoIsStarredByAuthenticatedUser::class] = new Operator\Activity\CheckRepoIsStarredByAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Starred🌀Owner🌀Repo());
        }

        return $this->operator[Operator\Activity\CheckRepoIsStarredByAuthenticatedUser::class]->call($owner, $repo);
    }

    public function starRepoForAuthenticatedUser(string $owner, string $repo): ResponseInterface
    {
        if (array_key_exists(Operator\Activity\StarRepoForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Activity\StarRepoForAuthenticatedUser::class] = new Operator\Activity\StarRepoForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Starred🌀Owner🌀Repo());
        }

        return $this->operator[Operator\Activity\StarRepoForAuthenticatedUser::class]->call($owner, $repo);
    }

    public function unstarRepoForAuthenticatedUser(string $owner, string $repo): ResponseInterface
    {
        if (array_key_exists(Operator\Activity\UnstarRepoForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Activity\UnstarRepoForAuthenticatedUser::class] = new Operator\Activity\UnstarRepoForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Starred🌀Owner🌀Repo());
        }

        return $this->operator[Operator\Activity\UnstarRepoForAuthenticatedUser::class]->call($owner, $repo);
    }

    public function listWatchedReposForAuthenticatedUser(int $perPage, int $page): Schema\MinimalRepository
    {
        if (array_key_exists(Operator\Activity\ListWatchedReposForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Activity\ListWatchedReposForAuthenticatedUser::class] = new Operator\Activity\ListWatchedReposForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Subscriptions());
        }

        return $this->operator[Operator\Activity\ListWatchedReposForAuthenticatedUser::class]->call($perPage, $page);
    }

    public function listEventsForAuthenticatedUser(string $username, int $perPage, int $page): Schema\Event
    {
        if (array_key_exists(Operator\Activity\ListEventsForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Activity\ListEventsForAuthenticatedUser::class] = new Operator\Activity\ListEventsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Events());
        }

        return $this->operator[Operator\Activity\ListEventsForAuthenticatedUser::class]->call($username, $perPage, $page);
    }

    public function listOrgEventsForAuthenticatedUser(string $username, string $org, int $perPage, int $page): Schema\Event
    {
        if (array_key_exists(Operator\Activity\ListOrgEventsForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Activity\ListOrgEventsForAuthenticatedUser::class] = new Operator\Activity\ListOrgEventsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Events🌀Orgs🌀Org());
        }

        return $this->operator[Operator\Activity\ListOrgEventsForAuthenticatedUser::class]->call($username, $org, $perPage, $page);
    }

    public function listPublicEventsForUser(string $username, int $perPage, int $page): Schema\Event
    {
        if (array_key_exists(Operator\Activity\ListPublicEventsForUser::class, $this->operator) === false) {
            $this->operator[Operator\Activity\ListPublicEventsForUser::class] = new Operator\Activity\ListPublicEventsForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Events🌀Public_());
        }

        return $this->operator[Operator\Activity\ListPublicEventsForUser::class]->call($username, $perPage, $page);
    }

    public function listReceivedEventsForUser(string $username, int $perPage, int $page): Schema\Event
    {
        if (array_key_exists(Operator\Activity\ListReceivedEventsForUser::class, $this->operator) === false) {
            $this->operator[Operator\Activity\ListReceivedEventsForUser::class] = new Operator\Activity\ListReceivedEventsForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀ReceivedEvents());
        }

        return $this->operator[Operator\Activity\ListReceivedEventsForUser::class]->call($username, $perPage, $page);
    }

    public function listReceivedPublicEventsForUser(string $username, int $perPage, int $page): Schema\Event
    {
        if (array_key_exists(Operator\Activity\ListReceivedPublicEventsForUser::class, $this->operator) === false) {
            $this->operator[Operator\Activity\ListReceivedPublicEventsForUser::class] = new Operator\Activity\ListReceivedPublicEventsForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀ReceivedEvents🌀Public_());
        }

        return $this->operator[Operator\Activity\ListReceivedPublicEventsForUser::class]->call($username, $perPage, $page);
    }

    public function listReposStarredByUser(string $username, string $sort, string $direction, int $perPage, int $page): Schema\Operations\Activity\ListReposStarredByUser\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Activity\ListReposStarredByUser::class, $this->operator) === false) {
            $this->operator[Operator\Activity\ListReposStarredByUser::class] = new Operator\Activity\ListReposStarredByUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Starred());
        }

        return $this->operator[Operator\Activity\ListReposStarredByUser::class]->call($username, $sort, $direction, $perPage, $page);
    }

    public function listReposWatchedByUser(string $username, int $perPage, int $page): Schema\MinimalRepository
    {
        if (array_key_exists(Operator\Activity\ListReposWatchedByUser::class, $this->operator) === false) {
            $this->operator[Operator\Activity\ListReposWatchedByUser::class] = new Operator\Activity\ListReposWatchedByUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Subscriptions());
        }

        return $this->operator[Operator\Activity\ListReposWatchedByUser::class]->call($username, $perPage, $page);
    }
}
