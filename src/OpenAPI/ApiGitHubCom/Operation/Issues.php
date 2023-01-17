<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Issues
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function list_(string $filter = 'assigned', string $state = 'open', string $labels, string $sort = 'created', string $direction = 'desc', string $since, bool $collab, bool $orgs, bool $owned, bool $pulls, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\List_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\List_($this->requestSchemaValidator, $this->responseSchemaValidator, $filter, $state, $labels, $sort, $direction, $since, $collab, $orgs, $owned, $pulls, $per_page, $page);
    }
    public function listForOrg(string $org, string $filter = 'assigned', string $state = 'open', string $labels, string $sort = 'created', string $direction = 'desc', string $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $filter, $state, $labels, $sort, $direction, $since, $per_page, $page);
    }
    public function listAssignees(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListAssignees
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListAssignees($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page);
    }
    public function checkUserCanBeAssigned(string $owner, string $repo, string $assignee) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CheckUserCanBeAssigned
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CheckUserCanBeAssigned($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $assignee);
    }
    public function listForRepo(string $owner, string $repo, string $milestone, string $state = 'open', string $assignee, string $creator, string $mentioned, string $labels, string $sort = 'created', string $direction = 'desc', string $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $milestone, $state, $assignee, $creator, $mentioned, $labels, $sort, $direction, $since, $per_page, $page);
    }
    public function create(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Create
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Create($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function listCommentsForRepo(string $owner, string $repo, string $sort = 'created', string $direction, string $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListCommentsForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListCommentsForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $sort, $direction, $since, $per_page, $page);
    }
    public function getComment(string $owner, string $repo, int $comment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\GetComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\GetComment($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $comment_id);
    }
    public function deleteComment(string $owner, string $repo, int $comment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\DeleteComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\DeleteComment($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $comment_id);
    }
    public function updateComment(string $owner, string $repo, int $comment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\UpdateComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\UpdateComment($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $comment_id);
    }
    public function listEventsForRepo(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListEventsForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListEventsForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page);
    }
    public function getEvent(string $owner, string $repo, int $event_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\GetEvent
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\GetEvent($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $event_id);
    }
    public function get(string $owner, string $repo, int $issue_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Get($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $issue_number);
    }
    public function update(string $owner, string $repo, int $issue_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Update
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Update($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $issue_number);
    }
    public function addAssignees(string $owner, string $repo, int $issue_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\AddAssignees
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\AddAssignees($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $issue_number);
    }
    public function removeAssignees(string $owner, string $repo, int $issue_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\RemoveAssignees
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\RemoveAssignees($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $issue_number);
    }
    public function checkUserCanBeAssignedToIssue(string $owner, string $repo, int $issue_number, string $assignee) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CheckUserCanBeAssignedToIssue
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CheckUserCanBeAssignedToIssue($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $issue_number, $assignee);
    }
    public function listComments(string $owner, string $repo, int $issue_number, string $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListComments
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListComments($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $issue_number, $since, $per_page, $page);
    }
    public function createComment(string $owner, string $repo, int $issue_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CreateComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CreateComment($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $issue_number);
    }
    public function listEvents(string $owner, string $repo, int $issue_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListEvents
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListEvents($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $issue_number, $per_page, $page);
    }
    public function listLabelsOnIssue(string $owner, string $repo, int $issue_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListLabelsOnIssue
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListLabelsOnIssue($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $issue_number, $per_page, $page);
    }
    public function setLabels(string $owner, string $repo, int $issue_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\SetLabels
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\SetLabels($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $issue_number);
    }
    public function addLabels(string $owner, string $repo, int $issue_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\AddLabels
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\AddLabels($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $issue_number);
    }
    public function removeAllLabels(string $owner, string $repo, int $issue_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\RemoveAllLabels
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\RemoveAllLabels($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $issue_number);
    }
    public function removeLabel(string $owner, string $repo, int $issue_number, string $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\RemoveLabel
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\RemoveLabel($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $issue_number, $name);
    }
    public function lock(string $owner, string $repo, int $issue_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Lock
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Lock($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $issue_number);
    }
    public function unlock(string $owner, string $repo, int $issue_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Unlock
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\Unlock($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $issue_number);
    }
    public function listEventsForTimeline(string $owner, string $repo, int $issue_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListEventsForTimeline
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListEventsForTimeline($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $issue_number, $per_page, $page);
    }
    public function listLabelsForRepo(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListLabelsForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListLabelsForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page);
    }
    public function createLabel(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CreateLabel
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CreateLabel($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getLabel(string $owner, string $repo, string $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\GetLabel
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\GetLabel($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $name);
    }
    public function deleteLabel(string $owner, string $repo, string $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\DeleteLabel
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\DeleteLabel($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $name);
    }
    public function updateLabel(string $owner, string $repo, string $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\UpdateLabel
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\UpdateLabel($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $name);
    }
    public function listMilestones(string $owner, string $repo, string $state = 'open', string $sort = 'due_on', string $direction = 'asc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListMilestones
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListMilestones($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $state, $sort, $direction, $per_page, $page);
    }
    public function createMilestone(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CreateMilestone
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CreateMilestone($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getMilestone(string $owner, string $repo, int $milestone_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\GetMilestone
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\GetMilestone($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $milestone_number);
    }
    public function deleteMilestone(string $owner, string $repo, int $milestone_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\DeleteMilestone
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\DeleteMilestone($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $milestone_number);
    }
    public function updateMilestone(string $owner, string $repo, int $milestone_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\UpdateMilestone
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\UpdateMilestone($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $milestone_number);
    }
    public function listLabelsForMilestone(string $owner, string $repo, int $milestone_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListLabelsForMilestone
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListLabelsForMilestone($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $milestone_number, $per_page, $page);
    }
    public function listForAuthenticatedUser(string $filter = 'assigned', string $state = 'open', string $labels, string $sort = 'created', string $direction = 'desc', string $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\ListForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $filter, $state, $labels, $sort, $direction, $since, $per_page, $page);
    }
}
