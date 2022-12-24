<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation;

final class Issues
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function list_(string $filter = 'assigned', string $state = 'open', string $labels, string $sort = 'created', string $direction = 'desc', string $since, bool $collab, bool $orgs, bool $owned, bool $pulls, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\List_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\List_($this->requestSchemaValidator, $this->responseSchemaValidator, $filter, $state, $labels, $sort, $direction, $since, $collab, $orgs, $owned, $pulls, $per_page, $page);
    }
    public function listForOrg_(string $org, string $filter = 'assigned', string $state = 'open', string $labels, string $sort = 'created', string $direction = 'desc', string $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListForOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $filter, $state, $labels, $sort, $direction, $since, $per_page, $page);
    }
    public function listAssignees_(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListAssignees_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListAssignees_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page);
    }
    public function checkUserCanBeAssigned_(string $owner, string $repo, string $assignee) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\CheckUserCanBeAssigned_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\CheckUserCanBeAssigned_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $assignee);
    }
    public function listForRepo_(string $owner, string $repo, string $milestone, string $state = 'open', string $assignee, string $creator, string $mentioned, string $labels, string $sort = 'created', string $direction = 'desc', string $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListForRepo_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $milestone, $state, $assignee, $creator, $mentioned, $labels, $sort, $direction, $since, $per_page, $page);
    }
    public function create_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\Create_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\Create_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function listCommentsForRepo_(string $owner, string $repo, string $sort = 'created', string $direction, string $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListCommentsForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListCommentsForRepo_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $sort, $direction, $since, $per_page, $page);
    }
    public function getComment_(string $owner, string $repo, int $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\GetComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\GetComment_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $comment_id);
    }
    public function deleteComment_(string $owner, string $repo, int $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\DeleteComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\DeleteComment_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $comment_id);
    }
    public function updateComment_(string $owner, string $repo, int $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\UpdateComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\UpdateComment_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $comment_id);
    }
    public function listEventsForRepo_(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListEventsForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListEventsForRepo_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page);
    }
    public function getEvent_(string $owner, string $repo, int $event_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\GetEvent_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\GetEvent_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $event_id);
    }
    public function get_(string $owner, string $repo, int $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\Get_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\Get_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $issue_number);
    }
    public function update_(string $owner, string $repo, int $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\Update_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\Update_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $issue_number);
    }
    public function addAssignees_(string $owner, string $repo, int $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\AddAssignees_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\AddAssignees_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $issue_number);
    }
    public function removeAssignees_(string $owner, string $repo, int $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\RemoveAssignees_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\RemoveAssignees_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $issue_number);
    }
    public function listComments_(string $owner, string $repo, int $issue_number, string $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListComments_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListComments_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $issue_number, $since, $per_page, $page);
    }
    public function createComment_(string $owner, string $repo, int $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\CreateComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\CreateComment_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $issue_number);
    }
    public function listEvents_(string $owner, string $repo, int $issue_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListEvents_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListEvents_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $issue_number, $per_page, $page);
    }
    public function listLabelsOnIssue_(string $owner, string $repo, int $issue_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListLabelsOnIssue_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListLabelsOnIssue_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $issue_number, $per_page, $page);
    }
    public function setLabels_(string $owner, string $repo, int $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\SetLabels_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\SetLabels_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $issue_number);
    }
    public function addLabels_(string $owner, string $repo, int $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\AddLabels_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\AddLabels_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $issue_number);
    }
    public function removeAllLabels_(string $owner, string $repo, int $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\RemoveAllLabels_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\RemoveAllLabels_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $issue_number);
    }
    public function removeLabel_(string $owner, string $repo, int $issue_number, string $name) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\RemoveLabel_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\RemoveLabel_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $issue_number, $name);
    }
    public function lock_(string $owner, string $repo, int $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\Lock_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\Lock_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $issue_number);
    }
    public function unlock_(string $owner, string $repo, int $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\Unlock_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\Unlock_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $issue_number);
    }
    public function listEventsForTimeline_(string $owner, string $repo, int $issue_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListEventsForTimeline_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListEventsForTimeline_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $issue_number, $per_page, $page);
    }
    public function listLabelsForRepo_(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListLabelsForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListLabelsForRepo_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page);
    }
    public function createLabel_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\CreateLabel_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\CreateLabel_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getLabel_(string $owner, string $repo, string $name) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\GetLabel_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\GetLabel_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $name);
    }
    public function deleteLabel_(string $owner, string $repo, string $name) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\DeleteLabel_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\DeleteLabel_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $name);
    }
    public function updateLabel_(string $owner, string $repo, string $name) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\UpdateLabel_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\UpdateLabel_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $name);
    }
    public function listMilestones_(string $owner, string $repo, string $state = 'open', string $sort = 'due_on', string $direction = 'asc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListMilestones_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListMilestones_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $state, $sort, $direction, $per_page, $page);
    }
    public function createMilestone_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\CreateMilestone_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\CreateMilestone_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getMilestone_(string $owner, string $repo, int $milestone_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\GetMilestone_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\GetMilestone_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $milestone_number);
    }
    public function deleteMilestone_(string $owner, string $repo, int $milestone_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\DeleteMilestone_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\DeleteMilestone_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $milestone_number);
    }
    public function updateMilestone_(string $owner, string $repo, int $milestone_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\UpdateMilestone_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\UpdateMilestone_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $milestone_number);
    }
    public function listLabelsForMilestone_(string $owner, string $repo, int $milestone_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListLabelsForMilestone_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListLabelsForMilestone_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $milestone_number, $per_page, $page);
    }
    public function listForAuthenticatedUser_(string $filter = 'assigned', string $state = 'open', string $labels, string $sort = 'created', string $direction = 'desc', string $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $filter, $state, $labels, $sort, $direction, $since, $per_page, $page);
    }
}
