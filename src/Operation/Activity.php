<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\Feed;
use ApiClients\Client\GitHub\Schema\Operations\Activity\MarkNotificationsAsRead\Response\ApplicationJson\Accepted;
use ApiClients\Client\GitHub\Schema\Repository;
use ApiClients\Client\GitHub\Schema\RepositorySubscription;
use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\Stargazer;
use ApiClients\Client\GitHub\Schema\StarredRepository;
use ApiClients\Client\GitHub\Schema\Thread;
use ApiClients\Client\GitHub\Schema\ThreadSubscription;

final class Activity
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Observable<Schema\Event>|array{code:int} */
    public function listPublicEvents(int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListPublicEvents()->call($perPage, $page);
    }

    /** @return Observable<Schema\Event>|array{code:int} */
    public function listPublicEventsListing(int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListPublicEventsListing()->call($perPage, $page);
    }

    /** @return */
    public function getFeeds(): Feed|array
    {
        return $this->operators->activity👷GetFeeds()->call();
    }

    /** @return Observable<Schema\Event>|Schema\BasicError|array{code:int} */
    public function listPublicEventsForRepoNetwork(string $owner, string $repo, int $perPage, int $page): Traversable|BasicError|array
    {
        return $this->operators->activity👷ListPublicEventsForRepoNetwork()->call($owner, $repo, $perPage, $page);
    }

    /** @return Observable<Schema\Event>|Schema\BasicError|array{code:int} */
    public function listPublicEventsForRepoNetworkListing(string $owner, string $repo, int $perPage, int $page): Traversable|BasicError|array
    {
        return $this->operators->activity👷ListPublicEventsForRepoNetworkListing()->call($owner, $repo, $perPage, $page);
    }

    /** @return Observable<Schema\Thread>|array{code:int} */
    public function listNotificationsForAuthenticatedUser(string $since, string $before, bool $all, bool $participating, int $page, int $perPage): iterable
    {
        return $this->operators->activity👷ListNotificationsForAuthenticatedUser()->call($since, $before, $all, $participating, $page, $perPage);
    }

    /** @return Observable<Schema\Thread>|array{code:int} */
    public function listNotificationsForAuthenticatedUserListing(string $since, string $before, bool $all, bool $participating, int $page, int $perPage): iterable
    {
        return $this->operators->activity👷ListNotificationsForAuthenticatedUserListing()->call($since, $before, $all, $participating, $page, $perPage);
    }

    /** @return Schema\Operations\Activity\MarkNotificationsAsRead\Response\ApplicationJson\Accepted|array{code:int} */
    public function markNotificationsAsRead(array $params): Accepted|array
    {
        return $this->operators->activity👷MarkNotificationsAsRead()->call($params);
    }

    /** @return Schema\Thread|array{code:int} */
    public function getThread(int $threadId): Thread|array
    {
        return $this->operators->activity👷GetThread()->call($threadId);
    }

    /** @return array{code:int} */
    public function markThreadAsRead(int $threadId): array
    {
        return $this->operators->activity👷MarkThreadAsRead()->call($threadId);
    }

    /** @return Schema\ThreadSubscription|array{code:int} */
    public function getThreadSubscriptionForAuthenticatedUser(int $threadId): ThreadSubscription|array
    {
        return $this->operators->activity👷GetThreadSubscriptionForAuthenticatedUser()->call($threadId);
    }

    /** @return Schema\ThreadSubscription|array{code:int} */
    public function setThreadSubscription(int $threadId, array $params): ThreadSubscription|array
    {
        return $this->operators->activity👷SetThreadSubscription()->call($threadId, $params);
    }

    /** @return array{code:int} */
    public function deleteThreadSubscription(int $threadId): array
    {
        return $this->operators->activity👷DeleteThreadSubscription()->call($threadId);
    }

    /** @return Observable<Schema\Event> */
    public function listPublicOrgEvents(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListPublicOrgEvents()->call($org, $perPage, $page);
    }

    /** @return Observable<Schema\Event> */
    public function listPublicOrgEventsListing(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListPublicOrgEventsListing()->call($org, $perPage, $page);
    }

    /** @return Observable<Schema\Event> */
    public function listRepoEvents(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListRepoEvents()->call($owner, $repo, $perPage, $page);
    }

    /** @return Observable<Schema\Event> */
    public function listRepoEventsListing(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListRepoEventsListing()->call($owner, $repo, $perPage, $page);
    }

    /** @return Observable<Schema\Thread> */
    public function listRepoNotificationsForAuthenticatedUser(string $owner, string $repo, string $since, string $before, bool $all, bool $participating, int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListRepoNotificationsForAuthenticatedUser()->call($owner, $repo, $since, $before, $all, $participating, $perPage, $page);
    }

    /** @return Observable<Schema\Thread> */
    public function listRepoNotificationsForAuthenticatedUserListing(string $owner, string $repo, string $since, string $before, bool $all, bool $participating, int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListRepoNotificationsForAuthenticatedUserListing()->call($owner, $repo, $since, $before, $all, $participating, $perPage, $page);
    }

    /** @return Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted|array{code:int} */
    public function markRepoNotificationsAsRead(string $owner, string $repo, array $params): \ApiClients\Client\GitHub\Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted|array
    {
        return $this->operators->activity👷MarkRepoNotificationsAsRead()->call($owner, $repo, $params);
    }

    /** @return */
    public function listStargazersForRepo(string $owner, string $repo, int $perPage, int $page): SimpleUser|Stargazer|array
    {
        return $this->operators->activity👷ListStargazersForRepo()->call($owner, $repo, $perPage, $page);
    }

    /** @return Observable<Schema\SimpleUser> */
    public function listWatchersForRepo(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListWatchersForRepo()->call($owner, $repo, $perPage, $page);
    }

    /** @return Observable<Schema\SimpleUser> */
    public function listWatchersForRepoListing(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListWatchersForRepoListing()->call($owner, $repo, $perPage, $page);
    }

    /** @return Schema\RepositorySubscription|array{code:int} */
    public function getRepoSubscription(string $owner, string $repo): RepositorySubscription|array
    {
        return $this->operators->activity👷GetRepoSubscription()->call($owner, $repo);
    }

    /** @return */
    public function setRepoSubscription(string $owner, string $repo, array $params): RepositorySubscription|array
    {
        return $this->operators->activity👷SetRepoSubscription()->call($owner, $repo, $params);
    }

    /** @return array{code:int} */
    public function deleteRepoSubscription(string $owner, string $repo): array
    {
        return $this->operators->activity👷DeleteRepoSubscription()->call($owner, $repo);
    }

    /** @return Observable<Schema\Repository>|array{code:int} */
    public function listReposStarredByAuthenticatedUser(string $sort, string $direction, int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListReposStarredByAuthenticatedUser()->call($sort, $direction, $perPage, $page);
    }

    /** @return Observable<Schema\Repository>|array{code:int} */
    public function listReposStarredByAuthenticatedUserListing(string $sort, string $direction, int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListReposStarredByAuthenticatedUserListing()->call($sort, $direction, $perPage, $page);
    }

    /** @return array{code:int} */
    public function checkRepoIsStarredByAuthenticatedUser(string $owner, string $repo): array
    {
        return $this->operators->activity👷CheckRepoIsStarredByAuthenticatedUser()->call($owner, $repo);
    }

    /** @return array{code:int} */
    public function starRepoForAuthenticatedUser(string $owner, string $repo): array
    {
        return $this->operators->activity👷StarRepoForAuthenticatedUser()->call($owner, $repo);
    }

    /** @return array{code:int} */
    public function unstarRepoForAuthenticatedUser(string $owner, string $repo): array
    {
        return $this->operators->activity👷UnstarRepoForAuthenticatedUser()->call($owner, $repo);
    }

    /** @return Observable<Schema\MinimalRepository>|array{code:int} */
    public function listWatchedReposForAuthenticatedUser(int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListWatchedReposForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return Observable<Schema\MinimalRepository>|array{code:int} */
    public function listWatchedReposForAuthenticatedUserListing(int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListWatchedReposForAuthenticatedUserListing()->call($perPage, $page);
    }

    /** @return Observable<Schema\Event> */
    public function listEventsForAuthenticatedUser(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListEventsForAuthenticatedUser()->call($username, $perPage, $page);
    }

    /** @return Observable<Schema\Event> */
    public function listEventsForAuthenticatedUserListing(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListEventsForAuthenticatedUserListing()->call($username, $perPage, $page);
    }

    /** @return Observable<Schema\Event> */
    public function listOrgEventsForAuthenticatedUser(string $username, string $org, int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListOrgEventsForAuthenticatedUser()->call($username, $org, $perPage, $page);
    }

    /** @return Observable<Schema\Event> */
    public function listOrgEventsForAuthenticatedUserListing(string $username, string $org, int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListOrgEventsForAuthenticatedUserListing()->call($username, $org, $perPage, $page);
    }

    /** @return Observable<Schema\Event> */
    public function listPublicEventsForUser(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListPublicEventsForUser()->call($username, $perPage, $page);
    }

    /** @return Observable<Schema\Event> */
    public function listPublicEventsForUserListing(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListPublicEventsForUserListing()->call($username, $perPage, $page);
    }

    /** @return Observable<Schema\Event> */
    public function listReceivedEventsForUser(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListReceivedEventsForUser()->call($username, $perPage, $page);
    }

    /** @return Observable<Schema\Event> */
    public function listReceivedEventsForUserListing(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListReceivedEventsForUserListing()->call($username, $perPage, $page);
    }

    /** @return Observable<Schema\Event> */
    public function listReceivedPublicEventsForUser(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListReceivedPublicEventsForUser()->call($username, $perPage, $page);
    }

    /** @return Observable<Schema\Event> */
    public function listReceivedPublicEventsForUserListing(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListReceivedPublicEventsForUserListing()->call($username, $perPage, $page);
    }

    /** @return */
    public function listReposStarredByUser(string $username, string $sort, string $direction, int $perPage, int $page): StarredRepository|Repository|array
    {
        return $this->operators->activity👷ListReposStarredByUser()->call($username, $sort, $direction, $perPage, $page);
    }

    /** @return Observable<Schema\MinimalRepository> */
    public function listReposWatchedByUser(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListReposWatchedByUser()->call($username, $perPage, $page);
    }

    /** @return Observable<Schema\MinimalRepository> */
    public function listReposWatchedByUserListing(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->activity👷ListReposWatchedByUserListing()->call($username, $perPage, $page);
    }
}
