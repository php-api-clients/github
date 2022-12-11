<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Issues
{
    public function list_(string $filter = 'assigned', string $state = 'open', string $labels, string $sort = 'created', string $direction = 'desc', string $since, bool $collab, bool $orgs, bool $owned, bool $pulls, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\List_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\List_($filter, $state, $labels, $sort, $direction, $since, $collab, $orgs, $owned, $pulls, $per_page, $page);
    }
    public function listForOrg_(string $org, string $filter = 'assigned', string $state = 'open', string $labels, string $sort = 'created', string $direction = 'desc', string $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListForOrg_($org, $filter, $state, $labels, $sort, $direction, $since, $per_page, $page);
    }
    public function listAssignees_(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListAssignees_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListAssignees_($owner, $repo, $per_page, $page);
    }
    public function checkUserCanBeAssigned_(string $owner, string $repo, string $assignee) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CheckUserCanBeAssigned_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CheckUserCanBeAssigned_($owner, $repo, $assignee);
    }
    public function listForRepo_(string $owner, string $repo, string $milestone, string $state = 'open', string $assignee, string $creator, string $mentioned, string $labels, string $sort = 'created', string $direction = 'desc', string $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListForRepo_($owner, $repo, $milestone, $state, $assignee, $creator, $mentioned, $labels, $sort, $direction, $since, $per_page, $page);
    }
    public function create_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Create_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Create_($owner, $repo);
    }
    public function listCommentsForRepo_(string $owner, string $repo, string $sort = 'created', string $direction, string $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListCommentsForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListCommentsForRepo_($owner, $repo, $sort, $direction, $since, $per_page, $page);
    }
    public function getComment_(string $owner, string $repo, int $comment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\GetComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\GetComment_($owner, $repo, $comment_id);
    }
    public function deleteComment_(string $owner, string $repo, int $comment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\DeleteComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\DeleteComment_($owner, $repo, $comment_id);
    }
    public function updateComment_(string $owner, string $repo, int $comment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\UpdateComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\UpdateComment_($owner, $repo, $comment_id);
    }
    public function listEventsForRepo_(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListEventsForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListEventsForRepo_($owner, $repo, $per_page, $page);
    }
    public function getEvent_(string $owner, string $repo, int $event_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\GetEvent_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\GetEvent_($owner, $repo, $event_id);
    }
    public function get_(string $owner, string $repo, int $issue_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Get_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Get_($owner, $repo, $issue_number);
    }
    public function update_(string $owner, string $repo, int $issue_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Update_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Update_($owner, $repo, $issue_number);
    }
    public function addAssignees_(string $owner, string $repo, int $issue_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\AddAssignees_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\AddAssignees_($owner, $repo, $issue_number);
    }
    public function removeAssignees_(string $owner, string $repo, int $issue_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\RemoveAssignees_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\RemoveAssignees_($owner, $repo, $issue_number);
    }
    public function listComments_(string $owner, string $repo, int $issue_number, string $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListComments_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListComments_($owner, $repo, $issue_number, $since, $per_page, $page);
    }
    public function createComment_(string $owner, string $repo, int $issue_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CreateComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CreateComment_($owner, $repo, $issue_number);
    }
    public function listEvents_(string $owner, string $repo, int $issue_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListEvents_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListEvents_($owner, $repo, $issue_number, $per_page, $page);
    }
    public function listLabelsOnIssue_(string $owner, string $repo, int $issue_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListLabelsOnIssue_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListLabelsOnIssue_($owner, $repo, $issue_number, $per_page, $page);
    }
    public function setLabels_(string $owner, string $repo, int $issue_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\SetLabels_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\SetLabels_($owner, $repo, $issue_number);
    }
    public function addLabels_(string $owner, string $repo, int $issue_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\AddLabels_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\AddLabels_($owner, $repo, $issue_number);
    }
    public function removeAllLabels_(string $owner, string $repo, int $issue_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\RemoveAllLabels_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\RemoveAllLabels_($owner, $repo, $issue_number);
    }
    public function removeLabel_(string $owner, string $repo, int $issue_number, string $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\RemoveLabel_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\RemoveLabel_($owner, $repo, $issue_number, $name);
    }
    public function lock_(string $owner, string $repo, int $issue_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Lock_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Lock_($owner, $repo, $issue_number);
    }
    public function unlock_(string $owner, string $repo, int $issue_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Unlock_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Unlock_($owner, $repo, $issue_number);
    }
    public function listEventsForTimeline_(string $owner, string $repo, int $issue_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListEventsForTimeline_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListEventsForTimeline_($owner, $repo, $issue_number, $per_page, $page);
    }
    public function listLabelsForRepo_(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListLabelsForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListLabelsForRepo_($owner, $repo, $per_page, $page);
    }
    public function createLabel_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CreateLabel_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CreateLabel_($owner, $repo);
    }
    public function getLabel_(string $owner, string $repo, string $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\GetLabel_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\GetLabel_($owner, $repo, $name);
    }
    public function deleteLabel_(string $owner, string $repo, string $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\DeleteLabel_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\DeleteLabel_($owner, $repo, $name);
    }
    public function updateLabel_(string $owner, string $repo, string $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\UpdateLabel_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\UpdateLabel_($owner, $repo, $name);
    }
    public function listMilestones_(string $owner, string $repo, string $state = 'open', string $sort = 'due_on', string $direction = 'asc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListMilestones_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListMilestones_($owner, $repo, $state, $sort, $direction, $per_page, $page);
    }
    public function createMilestone_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CreateMilestone_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CreateMilestone_($owner, $repo);
    }
    public function getMilestone_(string $owner, string $repo, int $milestone_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\GetMilestone_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\GetMilestone_($owner, $repo, $milestone_number);
    }
    public function deleteMilestone_(string $owner, string $repo, int $milestone_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\DeleteMilestone_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\DeleteMilestone_($owner, $repo, $milestone_number);
    }
    public function updateMilestone_(string $owner, string $repo, int $milestone_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\UpdateMilestone_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\UpdateMilestone_($owner, $repo, $milestone_number);
    }
    public function listLabelsForMilestone_(string $owner, string $repo, int $milestone_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListLabelsForMilestone_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListLabelsForMilestone_($owner, $repo, $milestone_number, $per_page, $page);
    }
    public function listForAuthenticatedUser_(string $filter = 'assigned', string $state = 'open', string $labels, string $sort = 'created', string $direction = 'desc', string $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListForAuthenticatedUser_($filter, $state, $labels, $sort, $direction, $since, $per_page, $page);
    }
}
