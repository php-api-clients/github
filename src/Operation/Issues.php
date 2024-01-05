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
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Issues
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return iterable<int,Schema\Issue>|WithoutBody */
    public function list(string $labels, string $since, bool $collab, bool $orgs, bool $owned, bool $pulls, string $filter, string $state, string $sort, string $direction, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->issues👷List_()->call($labels, $since, $collab, $orgs, $owned, $pulls, $filter, $state, $sort, $direction, $perPage, $page);
    }

    /** @return iterable<int,Schema\Issue>|WithoutBody */
    public function listListing(string $labels, string $since, bool $collab, bool $orgs, bool $owned, bool $pulls, string $filter, string $state, string $sort, string $direction, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->issues👷ListListing()->call($labels, $since, $collab, $orgs, $owned, $pulls, $filter, $state, $sort, $direction, $perPage, $page);
    }

    /** @return iterable<int,Schema\Issue> */
    public function listForOrg(string $org, string $labels, string $since, string $filter, string $state, string $sort, string $direction, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListForOrg()->call($org, $labels, $since, $filter, $state, $sort, $direction, $perPage, $page);
    }

    /** @return iterable<int,Schema\Issue> */
    public function listForOrgListing(string $org, string $labels, string $since, string $filter, string $state, string $sort, string $direction, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListForOrgListing()->call($org, $labels, $since, $filter, $state, $sort, $direction, $perPage, $page);
    }

    /** @return iterable<int,Schema\SimpleUser> */
    public function listAssignees(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListAssignees()->call($owner, $repo, $perPage, $page);
    }

    /** @return iterable<int,Schema\SimpleUser> */
    public function listAssigneesListing(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListAssigneesListing()->call($owner, $repo, $perPage, $page);
    }

    /** @return */
    public function checkUserCanBeAssigned(string $owner, string $repo, string $assignee): WithoutBody
    {
        return $this->operators->issues👷CheckUserCanBeAssigned()->call($owner, $repo, $assignee);
    }

    /** @return iterable<int,Schema\Issue>|Schema\BasicError */
    public function listForRepo(string $owner, string $repo, string $milestone, string $assignee, string $creator, string $mentioned, string $labels, string $since, string $state, string $sort, string $direction, int $perPage, int $page): iterable|BasicError
    {
        return $this->operators->issues👷ListForRepo()->call($owner, $repo, $milestone, $assignee, $creator, $mentioned, $labels, $since, $state, $sort, $direction, $perPage, $page);
    }

    /** @return iterable<int,Schema\Issue>|Schema\BasicError */
    public function listForRepoListing(string $owner, string $repo, string $milestone, string $assignee, string $creator, string $mentioned, string $labels, string $since, string $state, string $sort, string $direction, int $perPage, int $page): iterable|BasicError
    {
        return $this->operators->issues👷ListForRepoListing()->call($owner, $repo, $milestone, $assignee, $creator, $mentioned, $labels, $since, $state, $sort, $direction, $perPage, $page);
    }

    /** @return */
    public function create(string $owner, string $repo, array $params): Issue
    {
        return $this->operators->issues👷Create()->call($owner, $repo, $params);
    }

    /** @return iterable<int,Schema\IssueComment> */
    public function listCommentsForRepo(string $owner, string $repo, string $direction, string $since, string $sort, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListCommentsForRepo()->call($owner, $repo, $direction, $since, $sort, $perPage, $page);
    }

    /** @return iterable<int,Schema\IssueComment> */
    public function listCommentsForRepoListing(string $owner, string $repo, string $direction, string $since, string $sort, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListCommentsForRepoListing()->call($owner, $repo, $direction, $since, $sort, $perPage, $page);
    }

    /** @return */
    public function getComment(string $owner, string $repo, int $commentId): IssueComment
    {
        return $this->operators->issues👷GetComment()->call($owner, $repo, $commentId);
    }

    /** @return */
    public function deleteComment(string $owner, string $repo, int $commentId): WithoutBody
    {
        return $this->operators->issues👷DeleteComment()->call($owner, $repo, $commentId);
    }

    /** @return */
    public function updateComment(string $owner, string $repo, int $commentId, array $params): IssueComment
    {
        return $this->operators->issues👷UpdateComment()->call($owner, $repo, $commentId, $params);
    }

    /** @return iterable<int,Schema\IssueEvent> */
    public function listEventsForRepo(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListEventsForRepo()->call($owner, $repo, $perPage, $page);
    }

    /** @return iterable<int,Schema\IssueEvent> */
    public function listEventsForRepoListing(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListEventsForRepoListing()->call($owner, $repo, $perPage, $page);
    }

    /** @return */
    public function getEvent(string $owner, string $repo, int $eventId): IssueEvent
    {
        return $this->operators->issues👷GetEvent()->call($owner, $repo, $eventId);
    }

    /** @return */
    public function get(string $owner, string $repo, int $issueNumber): Issue|BasicError|WithoutBody
    {
        return $this->operators->issues👷Get()->call($owner, $repo, $issueNumber);
    }

    /** @return */
    public function update(string $owner, string $repo, int $issueNumber, array $params): Issue|BasicError
    {
        return $this->operators->issues👷Update()->call($owner, $repo, $issueNumber, $params);
    }

    /** @return */
    public function addAssignees(string $owner, string $repo, int $issueNumber, array $params): Issue
    {
        return $this->operators->issues👷AddAssignees()->call($owner, $repo, $issueNumber, $params);
    }

    /** @return */
    public function removeAssignees(string $owner, string $repo, int $issueNumber, array $params): Issue
    {
        return $this->operators->issues👷RemoveAssignees()->call($owner, $repo, $issueNumber, $params);
    }

    /** @return */
    public function checkUserCanBeAssignedToIssue(string $owner, string $repo, int $issueNumber, string $assignee): WithoutBody
    {
        return $this->operators->issues👷CheckUserCanBeAssignedToIssue()->call($owner, $repo, $issueNumber, $assignee);
    }

    /** @return iterable<int,Schema\IssueComment> */
    public function listComments(string $owner, string $repo, int $issueNumber, string $since, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListComments()->call($owner, $repo, $issueNumber, $since, $perPage, $page);
    }

    /** @return iterable<int,Schema\IssueComment> */
    public function listCommentsListing(string $owner, string $repo, int $issueNumber, string $since, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListCommentsListing()->call($owner, $repo, $issueNumber, $since, $perPage, $page);
    }

    /** @return */
    public function createComment(string $owner, string $repo, int $issueNumber, array $params): IssueComment
    {
        return $this->operators->issues👷CreateComment()->call($owner, $repo, $issueNumber, $params);
    }

    /** @return iterable<int,Schema\LabeledIssueEvent|Schema\UnlabeledIssueEvent|Schema\AssignedIssueEvent|Schema\UnassignedIssueEvent|Schema\MilestonedIssueEvent|Schema\DemilestonedIssueEvent|Schema\RenamedIssueEvent|Schema\ReviewRequestedIssueEvent|Schema\ReviewRequestRemovedIssueEvent|Schema\ReviewDismissedIssueEvent|Schema\LockedIssueEvent|Schema\AddedToProjectIssueEvent|Schema\MovedColumnInProjectIssueEvent|Schema\RemovedFromProjectIssueEvent|Schema\ConvertedNoteToIssueIssueEvent> */
    public function listEvents(string $owner, string $repo, int $issueNumber, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListEvents()->call($owner, $repo, $issueNumber, $perPage, $page);
    }

    /** @return iterable<int,Schema\LabeledIssueEvent|Schema\UnlabeledIssueEvent|Schema\AssignedIssueEvent|Schema\UnassignedIssueEvent|Schema\MilestonedIssueEvent|Schema\DemilestonedIssueEvent|Schema\RenamedIssueEvent|Schema\ReviewRequestedIssueEvent|Schema\ReviewRequestRemovedIssueEvent|Schema\ReviewDismissedIssueEvent|Schema\LockedIssueEvent|Schema\AddedToProjectIssueEvent|Schema\MovedColumnInProjectIssueEvent|Schema\RemovedFromProjectIssueEvent|Schema\ConvertedNoteToIssueIssueEvent> */
    public function listEventsListing(string $owner, string $repo, int $issueNumber, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListEventsListing()->call($owner, $repo, $issueNumber, $perPage, $page);
    }

    /** @return iterable<int,Schema\Label>|Schema\BasicError */
    public function listLabelsOnIssue(string $owner, string $repo, int $issueNumber, int $perPage, int $page): iterable|BasicError
    {
        return $this->operators->issues👷ListLabelsOnIssue()->call($owner, $repo, $issueNumber, $perPage, $page);
    }

    /** @return iterable<int,Schema\Label>|Schema\BasicError */
    public function listLabelsOnIssueListing(string $owner, string $repo, int $issueNumber, int $perPage, int $page): iterable|BasicError
    {
        return $this->operators->issues👷ListLabelsOnIssueListing()->call($owner, $repo, $issueNumber, $perPage, $page);
    }

    /** @return Observable<Schema\Label>|Schema\BasicError */
    public function setLabels(string $owner, string $repo, int $issueNumber, array $params): iterable|BasicError
    {
        return $this->operators->issues👷SetLabels()->call($owner, $repo, $issueNumber, $params);
    }

    /** @return Observable<Schema\Label>|Schema\BasicError */
    public function addLabels(string $owner, string $repo, int $issueNumber, array $params): iterable|BasicError
    {
        return $this->operators->issues👷AddLabels()->call($owner, $repo, $issueNumber, $params);
    }

    /** @return */
    public function removeAllLabels(string $owner, string $repo, int $issueNumber): BasicError|WithoutBody
    {
        return $this->operators->issues👷RemoveAllLabels()->call($owner, $repo, $issueNumber);
    }

    /** @return Observable<Schema\Label>|Schema\BasicError */
    public function removeLabel(string $owner, string $repo, int $issueNumber, string $name): iterable|BasicError
    {
        return $this->operators->issues👷RemoveLabel()->call($owner, $repo, $issueNumber, $name);
    }

    /** @return */
    public function lock(string $owner, string $repo, int $issueNumber, array $params): WithoutBody
    {
        return $this->operators->issues👷Lock()->call($owner, $repo, $issueNumber, $params);
    }

    /** @return */
    public function unlock(string $owner, string $repo, int $issueNumber): WithoutBody
    {
        return $this->operators->issues👷Unlock()->call($owner, $repo, $issueNumber);
    }

    /** @return iterable<int,Schema\LabeledIssueEvent|Schema\UnlabeledIssueEvent|Schema\MilestonedIssueEvent|Schema\DemilestonedIssueEvent|Schema\RenamedIssueEvent|Schema\ReviewRequestedIssueEvent|Schema\ReviewRequestRemovedIssueEvent|Schema\ReviewDismissedIssueEvent|Schema\LockedIssueEvent|Schema\AddedToProjectIssueEvent|Schema\MovedColumnInProjectIssueEvent|Schema\RemovedFromProjectIssueEvent|Schema\ConvertedNoteToIssueIssueEvent|Schema\TimelineCommentEvent|Schema\TimelineCrossReferencedEvent|Schema\TimelineCommittedEvent|Schema\TimelineReviewedEvent|Schema\TimelineLineCommentedEvent|Schema\TimelineCommitCommentedEvent|Schema\TimelineAssignedIssueEvent|Schema\TimelineUnassignedIssueEvent|Schema\StateChangeIssueEvent> */
    public function listEventsForTimeline(string $owner, string $repo, int $issueNumber, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListEventsForTimeline()->call($owner, $repo, $issueNumber, $perPage, $page);
    }

    /** @return iterable<int,Schema\LabeledIssueEvent|Schema\UnlabeledIssueEvent|Schema\MilestonedIssueEvent|Schema\DemilestonedIssueEvent|Schema\RenamedIssueEvent|Schema\ReviewRequestedIssueEvent|Schema\ReviewRequestRemovedIssueEvent|Schema\ReviewDismissedIssueEvent|Schema\LockedIssueEvent|Schema\AddedToProjectIssueEvent|Schema\MovedColumnInProjectIssueEvent|Schema\RemovedFromProjectIssueEvent|Schema\ConvertedNoteToIssueIssueEvent|Schema\TimelineCommentEvent|Schema\TimelineCrossReferencedEvent|Schema\TimelineCommittedEvent|Schema\TimelineReviewedEvent|Schema\TimelineLineCommentedEvent|Schema\TimelineCommitCommentedEvent|Schema\TimelineAssignedIssueEvent|Schema\TimelineUnassignedIssueEvent|Schema\StateChangeIssueEvent> */
    public function listEventsForTimelineListing(string $owner, string $repo, int $issueNumber, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListEventsForTimelineListing()->call($owner, $repo, $issueNumber, $perPage, $page);
    }

    /** @return iterable<int,Schema\Label> */
    public function listLabelsForRepo(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListLabelsForRepo()->call($owner, $repo, $perPage, $page);
    }

    /** @return iterable<int,Schema\Label> */
    public function listLabelsForRepoListing(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListLabelsForRepoListing()->call($owner, $repo, $perPage, $page);
    }

    /** @return */
    public function createLabel(string $owner, string $repo, array $params): Label
    {
        return $this->operators->issues👷CreateLabel()->call($owner, $repo, $params);
    }

    /** @return */
    public function getLabel(string $owner, string $repo, string $name): Label
    {
        return $this->operators->issues👷GetLabel()->call($owner, $repo, $name);
    }

    /** @return */
    public function deleteLabel(string $owner, string $repo, string $name): WithoutBody
    {
        return $this->operators->issues👷DeleteLabel()->call($owner, $repo, $name);
    }

    /** @return */
    public function updateLabel(string $owner, string $repo, string $name, array $params): Label
    {
        return $this->operators->issues👷UpdateLabel()->call($owner, $repo, $name, $params);
    }

    /** @return iterable<int,Schema\Milestone> */
    public function listMilestones(string $owner, string $repo, string $state, string $sort, string $direction, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListMilestones()->call($owner, $repo, $state, $sort, $direction, $perPage, $page);
    }

    /** @return iterable<int,Schema\Milestone> */
    public function listMilestonesListing(string $owner, string $repo, string $state, string $sort, string $direction, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListMilestonesListing()->call($owner, $repo, $state, $sort, $direction, $perPage, $page);
    }

    /** @return */
    public function createMilestone(string $owner, string $repo, array $params): Milestone
    {
        return $this->operators->issues👷CreateMilestone()->call($owner, $repo, $params);
    }

    /** @return */
    public function getMilestone(string $owner, string $repo, int $milestoneNumber): Milestone
    {
        return $this->operators->issues👷GetMilestone()->call($owner, $repo, $milestoneNumber);
    }

    /** @return */
    public function deleteMilestone(string $owner, string $repo, int $milestoneNumber): WithoutBody
    {
        return $this->operators->issues👷DeleteMilestone()->call($owner, $repo, $milestoneNumber);
    }

    /** @return */
    public function updateMilestone(string $owner, string $repo, int $milestoneNumber, array $params): Milestone
    {
        return $this->operators->issues👷UpdateMilestone()->call($owner, $repo, $milestoneNumber, $params);
    }

    /** @return iterable<int,Schema\Label> */
    public function listLabelsForMilestone(string $owner, string $repo, int $milestoneNumber, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListLabelsForMilestone()->call($owner, $repo, $milestoneNumber, $perPage, $page);
    }

    /** @return iterable<int,Schema\Label> */
    public function listLabelsForMilestoneListing(string $owner, string $repo, int $milestoneNumber, int $perPage, int $page): iterable
    {
        return $this->operators->issues👷ListLabelsForMilestoneListing()->call($owner, $repo, $milestoneNumber, $perPage, $page);
    }

    /** @return iterable<int,Schema\Issue>|WithoutBody */
    public function listForAuthenticatedUser(string $labels, string $since, string $filter, string $state, string $sort, string $direction, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->issues👷ListForAuthenticatedUser()->call($labels, $since, $filter, $state, $sort, $direction, $perPage, $page);
    }

    /** @return iterable<int,Schema\Issue>|WithoutBody */
    public function listForAuthenticatedUserListing(string $labels, string $since, string $filter, string $state, string $sort, string $direction, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->issues👷ListForAuthenticatedUserListing()->call($labels, $since, $filter, $state, $sort, $direction, $perPage, $page);
    }
}
