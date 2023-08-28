<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\Issue;
use ApiClients\Client\GitHub\Schema\IssueComment;
use ApiClients\Client\GitHub\Schema\IssueEvent;
use ApiClients\Client\GitHub\Schema\Label;
use ApiClients\Client\GitHub\Schema\Milestone;

final class Issues
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return iterable<Schema\Issue>|array{code:int} */
    public function list(string $labels, string $since, bool $collab, bool $orgs, bool $owned, bool $pulls, string $filter, string $state, string $sort, string $direction, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷List_()->call($labels, $since, $collab, $orgs, $owned, $pulls, $filter, $state, $sort, $direction, $perPage, $page);
    }

    /** @return iterable<Schema\Issue>|array{code:int} */
    public function listListing(string $labels, string $since, bool $collab, bool $orgs, bool $owned, bool $pulls, string $filter, string $state, string $sort, string $direction, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListListing()->call($labels, $since, $collab, $orgs, $owned, $pulls, $filter, $state, $sort, $direction, $perPage, $page);
    }

    /** @return iterable<Schema\Issue> */
    public function listForOrg(string $org, string $labels, string $since, string $filter, string $state, string $sort, string $direction, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListForOrg()->call($org, $labels, $since, $filter, $state, $sort, $direction, $perPage, $page);
    }

    /** @return iterable<Schema\Issue> */
    public function listForOrgListing(string $org, string $labels, string $since, string $filter, string $state, string $sort, string $direction, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListForOrgListing()->call($org, $labels, $since, $filter, $state, $sort, $direction, $perPage, $page);
    }

    /** @return iterable<Schema\SimpleUser> */
    public function listAssignees(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListAssignees()->call($owner, $repo, $perPage, $page);
    }

    /** @return iterable<Schema\SimpleUser> */
    public function listAssigneesListing(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListAssigneesListing()->call($owner, $repo, $perPage, $page);
    }

    /** @return array{code:int} */
    public function checkUserCanBeAssigned(string $owner, string $repo, string $assignee): array
    {
        return $this->operators->issues👷CheckUserCanBeAssigned()->call($owner, $repo, $assignee);
    }

    /** @return iterable<Schema\Issue>|Schema\BasicError */
    public function listForRepo(string $owner, string $repo, string $milestone, string $assignee, string $creator, string $mentioned, string $labels, string $since, string $state, string $sort, string $direction, int $perPage, int $page): Traversable|BasicError|array
    {
        return $this->operators->issues👷ListForRepo()->call($owner, $repo, $milestone, $assignee, $creator, $mentioned, $labels, $since, $state, $sort, $direction, $perPage, $page);
    }

    /** @return iterable<Schema\Issue>|Schema\BasicError */
    public function listForRepoListing(string $owner, string $repo, string $milestone, string $assignee, string $creator, string $mentioned, string $labels, string $since, string $state, string $sort, string $direction, int $perPage, int $page): Traversable|BasicError|array
    {
        return $this->operators->issues👷ListForRepoListing()->call($owner, $repo, $milestone, $assignee, $creator, $mentioned, $labels, $since, $state, $sort, $direction, $perPage, $page);
    }

    /** @return Schema\Issue */
    public function create(string $owner, string $repo, array $params): Issue|array
    {
        return $this->operators->issues👷Create()->call($owner, $repo, $params);
    }

    /** @return iterable<Schema\IssueComment> */
    public function listCommentsForRepo(string $owner, string $repo, string $direction, string $since, string $sort, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListCommentsForRepo()->call($owner, $repo, $direction, $since, $sort, $perPage, $page);
    }

    /** @return iterable<Schema\IssueComment> */
    public function listCommentsForRepoListing(string $owner, string $repo, string $direction, string $since, string $sort, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListCommentsForRepoListing()->call($owner, $repo, $direction, $since, $sort, $perPage, $page);
    }

    /** @return Schema\IssueComment */
    public function getComment(string $owner, string $repo, int $commentId): IssueComment|array
    {
        return $this->operators->issues👷GetComment()->call($owner, $repo, $commentId);
    }

    /** @return array{code:int} */
    public function deleteComment(string $owner, string $repo, int $commentId): array
    {
        return $this->operators->issues👷DeleteComment()->call($owner, $repo, $commentId);
    }

    /** @return Schema\IssueComment */
    public function updateComment(string $owner, string $repo, int $commentId, array $params): IssueComment|array
    {
        return $this->operators->issues👷UpdateComment()->call($owner, $repo, $commentId, $params);
    }

    /** @return iterable<Schema\IssueEvent> */
    public function listEventsForRepo(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListEventsForRepo()->call($owner, $repo, $perPage, $page);
    }

    /** @return iterable<Schema\IssueEvent> */
    public function listEventsForRepoListing(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListEventsForRepoListing()->call($owner, $repo, $perPage, $page);
    }

    /** @return Schema\IssueEvent */
    public function getEvent(string $owner, string $repo, int $eventId): IssueEvent|array
    {
        return $this->operators->issues👷GetEvent()->call($owner, $repo, $eventId);
    }

    /** @return Schema\Issue|Schema\BasicError|array{code:int} */
    public function get(string $owner, string $repo, int $issueNumber): Issue|BasicError|array
    {
        return $this->operators->issues👷Get()->call($owner, $repo, $issueNumber);
    }

    /** @return Schema\Issue|Schema\BasicError */
    public function update(string $owner, string $repo, int $issueNumber, array $params): Issue|BasicError|array
    {
        return $this->operators->issues👷Update()->call($owner, $repo, $issueNumber, $params);
    }

    /** @return Schema\Issue */
    public function addAssignees(string $owner, string $repo, int $issueNumber, array $params): Issue|array
    {
        return $this->operators->issues👷AddAssignees()->call($owner, $repo, $issueNumber, $params);
    }

    /** @return Schema\Issue */
    public function removeAssignees(string $owner, string $repo, int $issueNumber, array $params): Issue|array
    {
        return $this->operators->issues👷RemoveAssignees()->call($owner, $repo, $issueNumber, $params);
    }

    /** @return array{code:int} */
    public function checkUserCanBeAssignedToIssue(string $owner, string $repo, int $issueNumber, string $assignee): array
    {
        return $this->operators->issues👷CheckUserCanBeAssignedToIssue()->call($owner, $repo, $issueNumber, $assignee);
    }

    /** @return iterable<Schema\IssueComment> */
    public function listComments(string $owner, string $repo, int $issueNumber, string $since, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListComments()->call($owner, $repo, $issueNumber, $since, $perPage, $page);
    }

    /** @return iterable<Schema\IssueComment> */
    public function listCommentsListing(string $owner, string $repo, int $issueNumber, string $since, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListCommentsListing()->call($owner, $repo, $issueNumber, $since, $perPage, $page);
    }

    /** @return Schema\IssueComment */
    public function createComment(string $owner, string $repo, int $issueNumber, array $params): IssueComment|array
    {
        return $this->operators->issues👷CreateComment()->call($owner, $repo, $issueNumber, $params);
    }

    /** @return iterable<Schema\LabeledIssueEvent|Schema\UnlabeledIssueEvent|Schema\AssignedIssueEvent|Schema\UnassignedIssueEvent|Schema\MilestonedIssueEvent|Schema\DemilestonedIssueEvent|Schema\RenamedIssueEvent|Schema\ReviewRequestedIssueEvent|Schema\ReviewRequestRemovedIssueEvent|Schema\ReviewDismissedIssueEvent|Schema\LockedIssueEvent|Schema\AddedToProjectIssueEvent|Schema\MovedColumnInProjectIssueEvent|Schema\RemovedFromProjectIssueEvent|Schema\ConvertedNoteToIssueIssueEvent> */
    public function listEvents(string $owner, string $repo, int $issueNumber, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListEvents()->call($owner, $repo, $issueNumber, $perPage, $page);
    }

    /** @return iterable<Schema\LabeledIssueEvent|Schema\UnlabeledIssueEvent|Schema\AssignedIssueEvent|Schema\UnassignedIssueEvent|Schema\MilestonedIssueEvent|Schema\DemilestonedIssueEvent|Schema\RenamedIssueEvent|Schema\ReviewRequestedIssueEvent|Schema\ReviewRequestRemovedIssueEvent|Schema\ReviewDismissedIssueEvent|Schema\LockedIssueEvent|Schema\AddedToProjectIssueEvent|Schema\MovedColumnInProjectIssueEvent|Schema\RemovedFromProjectIssueEvent|Schema\ConvertedNoteToIssueIssueEvent> */
    public function listEventsListing(string $owner, string $repo, int $issueNumber, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListEventsListing()->call($owner, $repo, $issueNumber, $perPage, $page);
    }

    /** @return iterable<Schema\Label>|Schema\BasicError */
    public function listLabelsOnIssue(string $owner, string $repo, int $issueNumber, int $perPage, int $page): Traversable|BasicError|array
    {
        return $this->operators->issues👷ListLabelsOnIssue()->call($owner, $repo, $issueNumber, $perPage, $page);
    }

    /** @return iterable<Schema\Label>|Schema\BasicError */
    public function listLabelsOnIssueListing(string $owner, string $repo, int $issueNumber, int $perPage, int $page): Traversable|BasicError|array
    {
        return $this->operators->issues👷ListLabelsOnIssueListing()->call($owner, $repo, $issueNumber, $perPage, $page);
    }

    /** @return iterable<Schema\Label>|Schema\BasicError */
    public function setLabels(string $owner, string $repo, int $issueNumber, array $params): Traversable|BasicError|array
    {
        return $this->operators->issues👷SetLabels()->call($owner, $repo, $issueNumber, $params);
    }

    /** @return iterable<Schema\Label>|Schema\BasicError */
    public function addLabels(string $owner, string $repo, int $issueNumber, array $params): Traversable|BasicError|array
    {
        return $this->operators->issues👷AddLabels()->call($owner, $repo, $issueNumber, $params);
    }

    /** @return Schema\BasicError|array{code:int} */
    public function removeAllLabels(string $owner, string $repo, int $issueNumber): BasicError|array
    {
        return $this->operators->issues👷RemoveAllLabels()->call($owner, $repo, $issueNumber);
    }

    /** @return iterable<Schema\Label>|Schema\BasicError */
    public function removeLabel(string $owner, string $repo, int $issueNumber, string $name): Traversable|BasicError|array
    {
        return $this->operators->issues👷RemoveLabel()->call($owner, $repo, $issueNumber, $name);
    }

    /** @return array{code:int} */
    public function lock(string $owner, string $repo, int $issueNumber, array $params): array
    {
        return $this->operators->issues👷Lock()->call($owner, $repo, $issueNumber, $params);
    }

    /** @return array{code:int} */
    public function unlock(string $owner, string $repo, int $issueNumber): array
    {
        return $this->operators->issues👷Unlock()->call($owner, $repo, $issueNumber);
    }

    /** @return iterable<Schema\LabeledIssueEvent|Schema\UnlabeledIssueEvent|Schema\MilestonedIssueEvent|Schema\DemilestonedIssueEvent|Schema\RenamedIssueEvent|Schema\ReviewRequestedIssueEvent|Schema\ReviewRequestRemovedIssueEvent|Schema\ReviewDismissedIssueEvent|Schema\LockedIssueEvent|Schema\AddedToProjectIssueEvent|Schema\MovedColumnInProjectIssueEvent|Schema\RemovedFromProjectIssueEvent|Schema\ConvertedNoteToIssueIssueEvent|Schema\TimelineCommentEvent|Schema\TimelineCrossReferencedEvent|Schema\TimelineCommittedEvent|Schema\TimelineReviewedEvent|Schema\TimelineLineCommentedEvent|Schema\TimelineCommitCommentedEvent|Schema\TimelineAssignedIssueEvent|Schema\TimelineUnassignedIssueEvent|Schema\StateChangeIssueEvent> */
    public function listEventsForTimeline(string $owner, string $repo, int $issueNumber, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListEventsForTimeline()->call($owner, $repo, $issueNumber, $perPage, $page);
    }

    /** @return iterable<Schema\LabeledIssueEvent|Schema\UnlabeledIssueEvent|Schema\MilestonedIssueEvent|Schema\DemilestonedIssueEvent|Schema\RenamedIssueEvent|Schema\ReviewRequestedIssueEvent|Schema\ReviewRequestRemovedIssueEvent|Schema\ReviewDismissedIssueEvent|Schema\LockedIssueEvent|Schema\AddedToProjectIssueEvent|Schema\MovedColumnInProjectIssueEvent|Schema\RemovedFromProjectIssueEvent|Schema\ConvertedNoteToIssueIssueEvent|Schema\TimelineCommentEvent|Schema\TimelineCrossReferencedEvent|Schema\TimelineCommittedEvent|Schema\TimelineReviewedEvent|Schema\TimelineLineCommentedEvent|Schema\TimelineCommitCommentedEvent|Schema\TimelineAssignedIssueEvent|Schema\TimelineUnassignedIssueEvent|Schema\StateChangeIssueEvent> */
    public function listEventsForTimelineListing(string $owner, string $repo, int $issueNumber, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListEventsForTimelineListing()->call($owner, $repo, $issueNumber, $perPage, $page);
    }

    /** @return iterable<Schema\Label> */
    public function listLabelsForRepo(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListLabelsForRepo()->call($owner, $repo, $perPage, $page);
    }

    /** @return iterable<Schema\Label> */
    public function listLabelsForRepoListing(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListLabelsForRepoListing()->call($owner, $repo, $perPage, $page);
    }

    /** @return Schema\Label */
    public function createLabel(string $owner, string $repo, array $params): Label|array
    {
        return $this->operators->issues👷CreateLabel()->call($owner, $repo, $params);
    }

    /** @return Schema\Label */
    public function getLabel(string $owner, string $repo, string $name): Label|array
    {
        return $this->operators->issues👷GetLabel()->call($owner, $repo, $name);
    }

    /** @return array{code:int} */
    public function deleteLabel(string $owner, string $repo, string $name): array
    {
        return $this->operators->issues👷DeleteLabel()->call($owner, $repo, $name);
    }

    /** @return Schema\Label */
    public function updateLabel(string $owner, string $repo, string $name, array $params): Label|array
    {
        return $this->operators->issues👷UpdateLabel()->call($owner, $repo, $name, $params);
    }

    /** @return iterable<Schema\Milestone> */
    public function listMilestones(string $owner, string $repo, string $state, string $sort, string $direction, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListMilestones()->call($owner, $repo, $state, $sort, $direction, $perPage, $page);
    }

    /** @return iterable<Schema\Milestone> */
    public function listMilestonesListing(string $owner, string $repo, string $state, string $sort, string $direction, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListMilestonesListing()->call($owner, $repo, $state, $sort, $direction, $perPage, $page);
    }

    /** @return Schema\Milestone */
    public function createMilestone(string $owner, string $repo, array $params): Milestone|array
    {
        return $this->operators->issues👷CreateMilestone()->call($owner, $repo, $params);
    }

    /** @return Schema\Milestone */
    public function getMilestone(string $owner, string $repo, int $milestoneNumber): Milestone|array
    {
        return $this->operators->issues👷GetMilestone()->call($owner, $repo, $milestoneNumber);
    }

    /** @return array{code:int} */
    public function deleteMilestone(string $owner, string $repo, int $milestoneNumber): array
    {
        return $this->operators->issues👷DeleteMilestone()->call($owner, $repo, $milestoneNumber);
    }

    /** @return Schema\Milestone */
    public function updateMilestone(string $owner, string $repo, int $milestoneNumber, array $params): Milestone|array
    {
        return $this->operators->issues👷UpdateMilestone()->call($owner, $repo, $milestoneNumber, $params);
    }

    /** @return iterable<Schema\Label> */
    public function listLabelsForMilestone(string $owner, string $repo, int $milestoneNumber, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListLabelsForMilestone()->call($owner, $repo, $milestoneNumber, $perPage, $page);
    }

    /** @return iterable<Schema\Label> */
    public function listLabelsForMilestoneListing(string $owner, string $repo, int $milestoneNumber, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListLabelsForMilestoneListing()->call($owner, $repo, $milestoneNumber, $perPage, $page);
    }

    /** @return iterable<Schema\Issue>|array{code:int} */
    public function listForAuthenticatedUser(string $labels, string $since, string $filter, string $state, string $sort, string $direction, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListForAuthenticatedUser()->call($labels, $since, $filter, $state, $sort, $direction, $perPage, $page);
    }

    /** @return iterable<Schema\Issue>|array{code:int} */
    public function listForAuthenticatedUserListing(string $labels, string $since, string $filter, string $state, string $sort, string $direction, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListForAuthenticatedUserListing()->call($labels, $since, $filter, $state, $sort, $direction, $perPage, $page);
    }
}
