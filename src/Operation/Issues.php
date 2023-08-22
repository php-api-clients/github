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

final class Issues
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function list(string $labels, string $since, bool $collab, bool $orgs, bool $owned, bool $pulls, string $filter, string $state, string $sort, string $direction, int $perPage, int $page): Schema\Issue
    {
        if (array_key_exists(Operator\Issues\List_::class, $this->operator) === false) {
            $this->operator[Operator\Issues\List_::class] = new Operator\Issues\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Issues());
        }

        return $this->operator[Operator\Issues\List_::class]->call($labels, $since, $collab, $orgs, $owned, $pulls, $filter, $state, $sort, $direction, $perPage, $page);
    }

    public function listListing(string $labels, string $since, bool $collab, bool $orgs, bool $owned, bool $pulls, string $filter, string $state, string $sort, string $direction, int $perPage, int $page): Schema\Issue
    {
        if (array_key_exists(Operator\Issues\ListListing::class, $this->operator) === false) {
            $this->operator[Operator\Issues\ListListing::class] = new Operator\Issues\ListListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Issues());
        }

        return $this->operator[Operator\Issues\ListListing::class]->call($labels, $since, $collab, $orgs, $owned, $pulls, $filter, $state, $sort, $direction, $perPage, $page);
    }

    public function listForOrg(string $org, string $labels, string $since, string $filter, string $state, string $sort, string $direction, int $perPage, int $page): Schema\Issue
    {
        if (array_key_exists(Operator\Issues\ListForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Issues\ListForOrg::class] = new Operator\Issues\ListForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Issues());
        }

        return $this->operator[Operator\Issues\ListForOrg::class]->call($org, $labels, $since, $filter, $state, $sort, $direction, $perPage, $page);
    }

    public function listForOrgListing(string $org, string $labels, string $since, string $filter, string $state, string $sort, string $direction, int $perPage, int $page): Schema\Issue
    {
        if (array_key_exists(Operator\Issues\ListForOrgListing::class, $this->operator) === false) {
            $this->operator[Operator\Issues\ListForOrgListing::class] = new Operator\Issues\ListForOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Issues());
        }

        return $this->operator[Operator\Issues\ListForOrgListing::class]->call($org, $labels, $since, $filter, $state, $sort, $direction, $perPage, $page);
    }

    public function listAssignees(string $owner, string $repo, int $perPage, int $page): Schema\SimpleUser
    {
        if (array_key_exists(Operator\Issues\ListAssignees::class, $this->operator) === false) {
            $this->operator[Operator\Issues\ListAssignees::class] = new Operator\Issues\ListAssignees($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Assignees());
        }

        return $this->operator[Operator\Issues\ListAssignees::class]->call($owner, $repo, $perPage, $page);
    }

    public function listAssigneesListing(string $owner, string $repo, int $perPage, int $page): Schema\SimpleUser
    {
        if (array_key_exists(Operator\Issues\ListAssigneesListing::class, $this->operator) === false) {
            $this->operator[Operator\Issues\ListAssigneesListing::class] = new Operator\Issues\ListAssigneesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Assignees());
        }

        return $this->operator[Operator\Issues\ListAssigneesListing::class]->call($owner, $repo, $perPage, $page);
    }

    public function checkUserCanBeAssigned(string $owner, string $repo, string $assignee): ResponseInterface
    {
        if (array_key_exists(Operator\Issues\CheckUserCanBeAssigned::class, $this->operator) === false) {
            $this->operator[Operator\Issues\CheckUserCanBeAssigned::class] = new Operator\Issues\CheckUserCanBeAssigned($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Assignees🌀Assignee());
        }

        return $this->operator[Operator\Issues\CheckUserCanBeAssigned::class]->call($owner, $repo, $assignee);
    }

    public function listForRepo(string $owner, string $repo, string $milestone, string $assignee, string $creator, string $mentioned, string $labels, string $since, string $state, string $sort, string $direction, int $perPage, int $page): Schema\Issue|Schema\BasicError
    {
        if (array_key_exists(Operator\Issues\ListForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Issues\ListForRepo::class] = new Operator\Issues\ListForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues());
        }

        return $this->operator[Operator\Issues\ListForRepo::class]->call($owner, $repo, $milestone, $assignee, $creator, $mentioned, $labels, $since, $state, $sort, $direction, $perPage, $page);
    }

    public function listForRepoListing(string $owner, string $repo, string $milestone, string $assignee, string $creator, string $mentioned, string $labels, string $since, string $state, string $sort, string $direction, int $perPage, int $page): Schema\Issue|Schema\BasicError
    {
        if (array_key_exists(Operator\Issues\ListForRepoListing::class, $this->operator) === false) {
            $this->operator[Operator\Issues\ListForRepoListing::class] = new Operator\Issues\ListForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues());
        }

        return $this->operator[Operator\Issues\ListForRepoListing::class]->call($owner, $repo, $milestone, $assignee, $creator, $mentioned, $labels, $since, $state, $sort, $direction, $perPage, $page);
    }

    public function create(string $owner, string $repo, array $params): Schema\Issue
    {
        if (array_key_exists(Operator\Issues\Create::class, $this->operator) === false) {
            $this->operator[Operator\Issues\Create::class] = new Operator\Issues\Create($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues());
        }

        return $this->operator[Operator\Issues\Create::class]->call($owner, $repo, $params);
    }

    public function listCommentsForRepo(string $owner, string $repo, string $direction, string $since, string $sort, int $perPage, int $page): Schema\IssueComment
    {
        if (array_key_exists(Operator\Issues\ListCommentsForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Issues\ListCommentsForRepo::class] = new Operator\Issues\ListCommentsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments());
        }

        return $this->operator[Operator\Issues\ListCommentsForRepo::class]->call($owner, $repo, $direction, $since, $sort, $perPage, $page);
    }

    public function listCommentsForRepoListing(string $owner, string $repo, string $direction, string $since, string $sort, int $perPage, int $page): Schema\IssueComment
    {
        if (array_key_exists(Operator\Issues\ListCommentsForRepoListing::class, $this->operator) === false) {
            $this->operator[Operator\Issues\ListCommentsForRepoListing::class] = new Operator\Issues\ListCommentsForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments());
        }

        return $this->operator[Operator\Issues\ListCommentsForRepoListing::class]->call($owner, $repo, $direction, $since, $sort, $perPage, $page);
    }

    public function getComment(string $owner, string $repo, int $commentId): Schema\IssueComment
    {
        if (array_key_exists(Operator\Issues\GetComment::class, $this->operator) === false) {
            $this->operator[Operator\Issues\GetComment::class] = new Operator\Issues\GetComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId());
        }

        return $this->operator[Operator\Issues\GetComment::class]->call($owner, $repo, $commentId);
    }

    public function deleteComment(string $owner, string $repo, int $commentId): ResponseInterface
    {
        if (array_key_exists(Operator\Issues\DeleteComment::class, $this->operator) === false) {
            $this->operator[Operator\Issues\DeleteComment::class] = new Operator\Issues\DeleteComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId());
        }

        return $this->operator[Operator\Issues\DeleteComment::class]->call($owner, $repo, $commentId);
    }

    public function updateComment(string $owner, string $repo, int $commentId, array $params): Schema\IssueComment
    {
        if (array_key_exists(Operator\Issues\UpdateComment::class, $this->operator) === false) {
            $this->operator[Operator\Issues\UpdateComment::class] = new Operator\Issues\UpdateComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId());
        }

        return $this->operator[Operator\Issues\UpdateComment::class]->call($owner, $repo, $commentId, $params);
    }

    public function listEventsForRepo(string $owner, string $repo, int $perPage, int $page): Schema\IssueEvent
    {
        if (array_key_exists(Operator\Issues\ListEventsForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Issues\ListEventsForRepo::class] = new Operator\Issues\ListEventsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events());
        }

        return $this->operator[Operator\Issues\ListEventsForRepo::class]->call($owner, $repo, $perPage, $page);
    }

    public function listEventsForRepoListing(string $owner, string $repo, int $perPage, int $page): Schema\IssueEvent
    {
        if (array_key_exists(Operator\Issues\ListEventsForRepoListing::class, $this->operator) === false) {
            $this->operator[Operator\Issues\ListEventsForRepoListing::class] = new Operator\Issues\ListEventsForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events());
        }

        return $this->operator[Operator\Issues\ListEventsForRepoListing::class]->call($owner, $repo, $perPage, $page);
    }

    public function getEvent(string $owner, string $repo, int $eventId): Schema\IssueEvent
    {
        if (array_key_exists(Operator\Issues\GetEvent::class, $this->operator) === false) {
            $this->operator[Operator\Issues\GetEvent::class] = new Operator\Issues\GetEvent($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events🌀EventId());
        }

        return $this->operator[Operator\Issues\GetEvent::class]->call($owner, $repo, $eventId);
    }

    public function get(string $owner, string $repo, int $issueNumber): Schema\Issue|Schema\BasicError
    {
        if (array_key_exists(Operator\Issues\Get::class, $this->operator) === false) {
            $this->operator[Operator\Issues\Get::class] = new Operator\Issues\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber());
        }

        return $this->operator[Operator\Issues\Get::class]->call($owner, $repo, $issueNumber);
    }

    public function update(string $owner, string $repo, int $issueNumber, array $params): Schema\Issue|Schema\BasicError
    {
        if (array_key_exists(Operator\Issues\Update::class, $this->operator) === false) {
            $this->operator[Operator\Issues\Update::class] = new Operator\Issues\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber());
        }

        return $this->operator[Operator\Issues\Update::class]->call($owner, $repo, $issueNumber, $params);
    }

    public function addAssignees(string $owner, string $repo, int $issueNumber, array $params): Schema\Issue
    {
        if (array_key_exists(Operator\Issues\AddAssignees::class, $this->operator) === false) {
            $this->operator[Operator\Issues\AddAssignees::class] = new Operator\Issues\AddAssignees($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees());
        }

        return $this->operator[Operator\Issues\AddAssignees::class]->call($owner, $repo, $issueNumber, $params);
    }

    public function removeAssignees(string $owner, string $repo, int $issueNumber, array $params): Schema\Issue
    {
        if (array_key_exists(Operator\Issues\RemoveAssignees::class, $this->operator) === false) {
            $this->operator[Operator\Issues\RemoveAssignees::class] = new Operator\Issues\RemoveAssignees($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees());
        }

        return $this->operator[Operator\Issues\RemoveAssignees::class]->call($owner, $repo, $issueNumber, $params);
    }

    public function checkUserCanBeAssignedToIssue(string $owner, string $repo, int $issueNumber, string $assignee): ResponseInterface
    {
        if (array_key_exists(Operator\Issues\CheckUserCanBeAssignedToIssue::class, $this->operator) === false) {
            $this->operator[Operator\Issues\CheckUserCanBeAssignedToIssue::class] = new Operator\Issues\CheckUserCanBeAssignedToIssue($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees🌀Assignee());
        }

        return $this->operator[Operator\Issues\CheckUserCanBeAssignedToIssue::class]->call($owner, $repo, $issueNumber, $assignee);
    }

    public function listComments(string $owner, string $repo, int $issueNumber, string $since, int $perPage, int $page): Schema\IssueComment
    {
        if (array_key_exists(Operator\Issues\ListComments::class, $this->operator) === false) {
            $this->operator[Operator\Issues\ListComments::class] = new Operator\Issues\ListComments($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Comments());
        }

        return $this->operator[Operator\Issues\ListComments::class]->call($owner, $repo, $issueNumber, $since, $perPage, $page);
    }

    public function listCommentsListing(string $owner, string $repo, int $issueNumber, string $since, int $perPage, int $page): Schema\IssueComment
    {
        if (array_key_exists(Operator\Issues\ListCommentsListing::class, $this->operator) === false) {
            $this->operator[Operator\Issues\ListCommentsListing::class] = new Operator\Issues\ListCommentsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Comments());
        }

        return $this->operator[Operator\Issues\ListCommentsListing::class]->call($owner, $repo, $issueNumber, $since, $perPage, $page);
    }

    public function createComment(string $owner, string $repo, int $issueNumber, array $params): Schema\IssueComment
    {
        if (array_key_exists(Operator\Issues\CreateComment::class, $this->operator) === false) {
            $this->operator[Operator\Issues\CreateComment::class] = new Operator\Issues\CreateComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Comments());
        }

        return $this->operator[Operator\Issues\CreateComment::class]->call($owner, $repo, $issueNumber, $params);
    }

    public function listEvents(string $owner, string $repo, int $issueNumber, int $perPage, int $page): Schema\IssueEventForIssue
    {
        if (array_key_exists(Operator\Issues\ListEvents::class, $this->operator) === false) {
            $this->operator[Operator\Issues\ListEvents::class] = new Operator\Issues\ListEvents($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Events());
        }

        return $this->operator[Operator\Issues\ListEvents::class]->call($owner, $repo, $issueNumber, $perPage, $page);
    }

    public function listEventsListing(string $owner, string $repo, int $issueNumber, int $perPage, int $page): Schema\IssueEventForIssue
    {
        if (array_key_exists(Operator\Issues\ListEventsListing::class, $this->operator) === false) {
            $this->operator[Operator\Issues\ListEventsListing::class] = new Operator\Issues\ListEventsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Events());
        }

        return $this->operator[Operator\Issues\ListEventsListing::class]->call($owner, $repo, $issueNumber, $perPage, $page);
    }

    public function listLabelsOnIssue(string $owner, string $repo, int $issueNumber, int $perPage, int $page): Schema\Label|Schema\BasicError
    {
        if (array_key_exists(Operator\Issues\ListLabelsOnIssue::class, $this->operator) === false) {
            $this->operator[Operator\Issues\ListLabelsOnIssue::class] = new Operator\Issues\ListLabelsOnIssue($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels());
        }

        return $this->operator[Operator\Issues\ListLabelsOnIssue::class]->call($owner, $repo, $issueNumber, $perPage, $page);
    }

    public function listLabelsOnIssueListing(string $owner, string $repo, int $issueNumber, int $perPage, int $page): Schema\Label|Schema\BasicError
    {
        if (array_key_exists(Operator\Issues\ListLabelsOnIssueListing::class, $this->operator) === false) {
            $this->operator[Operator\Issues\ListLabelsOnIssueListing::class] = new Operator\Issues\ListLabelsOnIssueListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels());
        }

        return $this->operator[Operator\Issues\ListLabelsOnIssueListing::class]->call($owner, $repo, $issueNumber, $perPage, $page);
    }

    public function setLabels(string $owner, string $repo, int $issueNumber, array $params): Schema\Label|Schema\BasicError
    {
        if (array_key_exists(Operator\Issues\SetLabels::class, $this->operator) === false) {
            $this->operator[Operator\Issues\SetLabels::class] = new Operator\Issues\SetLabels($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels());
        }

        return $this->operator[Operator\Issues\SetLabels::class]->call($owner, $repo, $issueNumber, $params);
    }

    public function addLabels(string $owner, string $repo, int $issueNumber, array $params): Schema\Label|Schema\BasicError
    {
        if (array_key_exists(Operator\Issues\AddLabels::class, $this->operator) === false) {
            $this->operator[Operator\Issues\AddLabels::class] = new Operator\Issues\AddLabels($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels());
        }

        return $this->operator[Operator\Issues\AddLabels::class]->call($owner, $repo, $issueNumber, $params);
    }

    public function removeAllLabels(string $owner, string $repo, int $issueNumber): Schema\BasicError
    {
        if (array_key_exists(Operator\Issues\RemoveAllLabels::class, $this->operator) === false) {
            $this->operator[Operator\Issues\RemoveAllLabels::class] = new Operator\Issues\RemoveAllLabels($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels());
        }

        return $this->operator[Operator\Issues\RemoveAllLabels::class]->call($owner, $repo, $issueNumber);
    }

    public function removeLabel(string $owner, string $repo, int $issueNumber, string $name): Schema\Label|Schema\BasicError
    {
        if (array_key_exists(Operator\Issues\RemoveLabel::class, $this->operator) === false) {
            $this->operator[Operator\Issues\RemoveLabel::class] = new Operator\Issues\RemoveLabel($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels🌀Name());
        }

        return $this->operator[Operator\Issues\RemoveLabel::class]->call($owner, $repo, $issueNumber, $name);
    }

    public function lock(string $owner, string $repo, int $issueNumber, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\Issues\Lock::class, $this->operator) === false) {
            $this->operator[Operator\Issues\Lock::class] = new Operator\Issues\Lock($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Lock());
        }

        return $this->operator[Operator\Issues\Lock::class]->call($owner, $repo, $issueNumber, $params);
    }

    public function unlock(string $owner, string $repo, int $issueNumber): ResponseInterface
    {
        if (array_key_exists(Operator\Issues\Unlock::class, $this->operator) === false) {
            $this->operator[Operator\Issues\Unlock::class] = new Operator\Issues\Unlock($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Lock());
        }

        return $this->operator[Operator\Issues\Unlock::class]->call($owner, $repo, $issueNumber);
    }

    public function listEventsForTimeline(string $owner, string $repo, int $issueNumber, int $perPage, int $page): Schema\TimelineIssueEvents
    {
        if (array_key_exists(Operator\Issues\ListEventsForTimeline::class, $this->operator) === false) {
            $this->operator[Operator\Issues\ListEventsForTimeline::class] = new Operator\Issues\ListEventsForTimeline($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Timeline());
        }

        return $this->operator[Operator\Issues\ListEventsForTimeline::class]->call($owner, $repo, $issueNumber, $perPage, $page);
    }

    public function listEventsForTimelineListing(string $owner, string $repo, int $issueNumber, int $perPage, int $page): Schema\TimelineIssueEvents
    {
        if (array_key_exists(Operator\Issues\ListEventsForTimelineListing::class, $this->operator) === false) {
            $this->operator[Operator\Issues\ListEventsForTimelineListing::class] = new Operator\Issues\ListEventsForTimelineListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Timeline());
        }

        return $this->operator[Operator\Issues\ListEventsForTimelineListing::class]->call($owner, $repo, $issueNumber, $perPage, $page);
    }

    public function listLabelsForRepo(string $owner, string $repo, int $perPage, int $page): Schema\Label
    {
        if (array_key_exists(Operator\Issues\ListLabelsForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Issues\ListLabelsForRepo::class] = new Operator\Issues\ListLabelsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels());
        }

        return $this->operator[Operator\Issues\ListLabelsForRepo::class]->call($owner, $repo, $perPage, $page);
    }

    public function listLabelsForRepoListing(string $owner, string $repo, int $perPage, int $page): Schema\Label
    {
        if (array_key_exists(Operator\Issues\ListLabelsForRepoListing::class, $this->operator) === false) {
            $this->operator[Operator\Issues\ListLabelsForRepoListing::class] = new Operator\Issues\ListLabelsForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels());
        }

        return $this->operator[Operator\Issues\ListLabelsForRepoListing::class]->call($owner, $repo, $perPage, $page);
    }

    public function createLabel(string $owner, string $repo, array $params): Schema\Label
    {
        if (array_key_exists(Operator\Issues\CreateLabel::class, $this->operator) === false) {
            $this->operator[Operator\Issues\CreateLabel::class] = new Operator\Issues\CreateLabel($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels());
        }

        return $this->operator[Operator\Issues\CreateLabel::class]->call($owner, $repo, $params);
    }

    public function getLabel(string $owner, string $repo, string $name): Schema\Label
    {
        if (array_key_exists(Operator\Issues\GetLabel::class, $this->operator) === false) {
            $this->operator[Operator\Issues\GetLabel::class] = new Operator\Issues\GetLabel($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels🌀Name());
        }

        return $this->operator[Operator\Issues\GetLabel::class]->call($owner, $repo, $name);
    }

    public function deleteLabel(string $owner, string $repo, string $name): ResponseInterface
    {
        if (array_key_exists(Operator\Issues\DeleteLabel::class, $this->operator) === false) {
            $this->operator[Operator\Issues\DeleteLabel::class] = new Operator\Issues\DeleteLabel($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels🌀Name());
        }

        return $this->operator[Operator\Issues\DeleteLabel::class]->call($owner, $repo, $name);
    }

    public function updateLabel(string $owner, string $repo, string $name, array $params): Schema\Label
    {
        if (array_key_exists(Operator\Issues\UpdateLabel::class, $this->operator) === false) {
            $this->operator[Operator\Issues\UpdateLabel::class] = new Operator\Issues\UpdateLabel($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels🌀Name());
        }

        return $this->operator[Operator\Issues\UpdateLabel::class]->call($owner, $repo, $name, $params);
    }

    public function listMilestones(string $owner, string $repo, string $state, string $sort, string $direction, int $perPage, int $page): Schema\Milestone
    {
        if (array_key_exists(Operator\Issues\ListMilestones::class, $this->operator) === false) {
            $this->operator[Operator\Issues\ListMilestones::class] = new Operator\Issues\ListMilestones($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones());
        }

        return $this->operator[Operator\Issues\ListMilestones::class]->call($owner, $repo, $state, $sort, $direction, $perPage, $page);
    }

    public function listMilestonesListing(string $owner, string $repo, string $state, string $sort, string $direction, int $perPage, int $page): Schema\Milestone
    {
        if (array_key_exists(Operator\Issues\ListMilestonesListing::class, $this->operator) === false) {
            $this->operator[Operator\Issues\ListMilestonesListing::class] = new Operator\Issues\ListMilestonesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones());
        }

        return $this->operator[Operator\Issues\ListMilestonesListing::class]->call($owner, $repo, $state, $sort, $direction, $perPage, $page);
    }

    public function createMilestone(string $owner, string $repo, array $params): Schema\Milestone
    {
        if (array_key_exists(Operator\Issues\CreateMilestone::class, $this->operator) === false) {
            $this->operator[Operator\Issues\CreateMilestone::class] = new Operator\Issues\CreateMilestone($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones());
        }

        return $this->operator[Operator\Issues\CreateMilestone::class]->call($owner, $repo, $params);
    }

    public function getMilestone(string $owner, string $repo, int $milestoneNumber): Schema\Milestone
    {
        if (array_key_exists(Operator\Issues\GetMilestone::class, $this->operator) === false) {
            $this->operator[Operator\Issues\GetMilestone::class] = new Operator\Issues\GetMilestone($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber());
        }

        return $this->operator[Operator\Issues\GetMilestone::class]->call($owner, $repo, $milestoneNumber);
    }

    public function deleteMilestone(string $owner, string $repo, int $milestoneNumber): ResponseInterface
    {
        if (array_key_exists(Operator\Issues\DeleteMilestone::class, $this->operator) === false) {
            $this->operator[Operator\Issues\DeleteMilestone::class] = new Operator\Issues\DeleteMilestone($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber());
        }

        return $this->operator[Operator\Issues\DeleteMilestone::class]->call($owner, $repo, $milestoneNumber);
    }

    public function updateMilestone(string $owner, string $repo, int $milestoneNumber, array $params): Schema\Milestone
    {
        if (array_key_exists(Operator\Issues\UpdateMilestone::class, $this->operator) === false) {
            $this->operator[Operator\Issues\UpdateMilestone::class] = new Operator\Issues\UpdateMilestone($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber());
        }

        return $this->operator[Operator\Issues\UpdateMilestone::class]->call($owner, $repo, $milestoneNumber, $params);
    }

    public function listLabelsForMilestone(string $owner, string $repo, int $milestoneNumber, int $perPage, int $page): Schema\Label
    {
        if (array_key_exists(Operator\Issues\ListLabelsForMilestone::class, $this->operator) === false) {
            $this->operator[Operator\Issues\ListLabelsForMilestone::class] = new Operator\Issues\ListLabelsForMilestone($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber🌀Labels());
        }

        return $this->operator[Operator\Issues\ListLabelsForMilestone::class]->call($owner, $repo, $milestoneNumber, $perPage, $page);
    }

    public function listLabelsForMilestoneListing(string $owner, string $repo, int $milestoneNumber, int $perPage, int $page): Schema\Label
    {
        if (array_key_exists(Operator\Issues\ListLabelsForMilestoneListing::class, $this->operator) === false) {
            $this->operator[Operator\Issues\ListLabelsForMilestoneListing::class] = new Operator\Issues\ListLabelsForMilestoneListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber🌀Labels());
        }

        return $this->operator[Operator\Issues\ListLabelsForMilestoneListing::class]->call($owner, $repo, $milestoneNumber, $perPage, $page);
    }

    public function listForAuthenticatedUser(string $labels, string $since, string $filter, string $state, string $sort, string $direction, int $perPage, int $page): Schema\Issue
    {
        if (array_key_exists(Operator\Issues\ListForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Issues\ListForAuthenticatedUser::class] = new Operator\Issues\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Issues());
        }

        return $this->operator[Operator\Issues\ListForAuthenticatedUser::class]->call($labels, $since, $filter, $state, $sort, $direction, $perPage, $page);
    }

    public function listForAuthenticatedUserListing(string $labels, string $since, string $filter, string $state, string $sort, string $direction, int $perPage, int $page): Schema\Issue
    {
        if (array_key_exists(Operator\Issues\ListForAuthenticatedUserListing::class, $this->operator) === false) {
            $this->operator[Operator\Issues\ListForAuthenticatedUserListing::class] = new Operator\Issues\ListForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Issues());
        }

        return $this->operator[Operator\Issues\ListForAuthenticatedUserListing::class]->call($labels, $since, $filter, $state, $sort, $direction, $perPage, $page);
    }
}
