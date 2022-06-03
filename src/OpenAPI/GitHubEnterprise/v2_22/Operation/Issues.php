<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation;

final class Issues
{
    public function list_(string $filter = 'assigned', string $state = 'open', $labels, string $sort = 'created', string $direction = 'desc', $since, $collab, $orgs, $owned, $pulls, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\List_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\List_($filter, $state, $labels, $sort, $direction, $since, $collab, $orgs, $owned, $pulls, $per_page, $page);
    }
    public function listForOrg_($org, string $filter = 'assigned', string $state = 'open', $labels, string $sort = 'created', string $direction = 'desc', $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\ListForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\ListForOrg_($org, $filter, $state, $labels, $sort, $direction, $since, $per_page, $page);
    }
    public function listAssignees_($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\ListAssignees_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\ListAssignees_($owner, $repo, $per_page, $page);
    }
    public function checkUserCanBeAssigned_($owner, $repo, $assignee) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\CheckUserCanBeAssigned_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\CheckUserCanBeAssigned_($owner, $repo, $assignee);
    }
    public function listForRepo_($owner, $repo, $milestone, string $state = 'open', $assignee, $creator, $mentioned, $labels, string $sort = 'created', string $direction = 'desc', $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\ListForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\ListForRepo_($owner, $repo, $milestone, $state, $assignee, $creator, $mentioned, $labels, $sort, $direction, $since, $per_page, $page);
    }
    public function create_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\Create_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\Create_($owner, $repo);
    }
    public function listCommentsForRepo_($owner, $repo, string $sort = 'created', $direction, $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\ListCommentsForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\ListCommentsForRepo_($owner, $repo, $sort, $direction, $since, $per_page, $page);
    }
    public function getComment_($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\GetComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\GetComment_($owner, $repo, $comment_id);
    }
    public function deleteComment_($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\DeleteComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\DeleteComment_($owner, $repo, $comment_id);
    }
    public function updateComment_($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\UpdateComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\UpdateComment_($owner, $repo, $comment_id);
    }
    public function listEventsForRepo_($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\ListEventsForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\ListEventsForRepo_($owner, $repo, $per_page, $page);
    }
    public function getEvent_($owner, $repo, $event_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\GetEvent_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\GetEvent_($owner, $repo, $event_id);
    }
    public function get_($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\Get_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\Get_($owner, $repo, $issue_number);
    }
    public function update_($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\Update_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\Update_($owner, $repo, $issue_number);
    }
    public function addAssignees_($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\AddAssignees_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\AddAssignees_($owner, $repo, $issue_number);
    }
    public function removeAssignees_($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\RemoveAssignees_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\RemoveAssignees_($owner, $repo, $issue_number);
    }
    public function listComments_($owner, $repo, $issue_number, $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\ListComments_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\ListComments_($owner, $repo, $issue_number, $since, $per_page, $page);
    }
    public function createComment_($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\CreateComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\CreateComment_($owner, $repo, $issue_number);
    }
    public function listEvents_($owner, $repo, $issue_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\ListEvents_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\ListEvents_($owner, $repo, $issue_number, $per_page, $page);
    }
    public function listLabelsOnIssue_($owner, $repo, $issue_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\ListLabelsOnIssue_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\ListLabelsOnIssue_($owner, $repo, $issue_number, $per_page, $page);
    }
    public function setLabels_($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\SetLabels_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\SetLabels_($owner, $repo, $issue_number);
    }
    public function addLabels_($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\AddLabels_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\AddLabels_($owner, $repo, $issue_number);
    }
    public function removeAllLabels_($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\RemoveAllLabels_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\RemoveAllLabels_($owner, $repo, $issue_number);
    }
    public function removeLabel_($owner, $repo, $issue_number, $name) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\RemoveLabel_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\RemoveLabel_($owner, $repo, $issue_number, $name);
    }
    public function lock_($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\Lock_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\Lock_($owner, $repo, $issue_number);
    }
    public function unlock_($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\Unlock_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\Unlock_($owner, $repo, $issue_number);
    }
    public function listEventsForTimeline_($owner, $repo, $issue_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\ListEventsForTimeline_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\ListEventsForTimeline_($owner, $repo, $issue_number, $per_page, $page);
    }
    public function listLabelsForRepo_($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\ListLabelsForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\ListLabelsForRepo_($owner, $repo, $per_page, $page);
    }
    public function createLabel_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\CreateLabel_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\CreateLabel_($owner, $repo);
    }
    public function getLabel_($owner, $repo, $name) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\GetLabel_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\GetLabel_($owner, $repo, $name);
    }
    public function deleteLabel_($owner, $repo, $name) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\DeleteLabel_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\DeleteLabel_($owner, $repo, $name);
    }
    public function updateLabel_($owner, $repo, $name) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\UpdateLabel_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\UpdateLabel_($owner, $repo, $name);
    }
    public function listMilestones_($owner, $repo, string $state = 'open', string $sort = 'due_on', string $direction = 'asc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\ListMilestones_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\ListMilestones_($owner, $repo, $state, $sort, $direction, $per_page, $page);
    }
    public function createMilestone_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\CreateMilestone_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\CreateMilestone_($owner, $repo);
    }
    public function getMilestone_($owner, $repo, $milestone_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\GetMilestone_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\GetMilestone_($owner, $repo, $milestone_number);
    }
    public function deleteMilestone_($owner, $repo, $milestone_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\DeleteMilestone_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\DeleteMilestone_($owner, $repo, $milestone_number);
    }
    public function updateMilestone_($owner, $repo, $milestone_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\UpdateMilestone_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\UpdateMilestone_($owner, $repo, $milestone_number);
    }
    public function listLabelsForMilestone_($owner, $repo, $milestone_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\ListLabelsForMilestone_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\ListLabelsForMilestone_($owner, $repo, $milestone_number, $per_page, $page);
    }
    public function listForAuthenticatedUser_(string $filter = 'assigned', string $state = 'open', $labels, string $sort = 'created', string $direction = 'desc', $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\ListForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\ListForAuthenticatedUser_($filter, $state, $labels, $sort, $direction, $since, $per_page, $page);
    }
}
