<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation;

final class Reactions
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function listForTeamDiscussionCommentInOrg_(string $org, string $team_slug, int $discussion_number, int $comment_number, string $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForTeamDiscussionCommentInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForTeamDiscussionCommentInOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $team_slug, $discussion_number, $comment_number, $content, $per_page, $page);
    }
    public function createForTeamDiscussionCommentInOrg_(string $org, string $team_slug, int $discussion_number, int $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForTeamDiscussionCommentInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForTeamDiscussionCommentInOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $team_slug, $discussion_number, $comment_number);
    }
    public function deleteForTeamDiscussionComment_(string $org, string $team_slug, int $discussion_number, int $comment_number, int $reaction_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteForTeamDiscussionComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteForTeamDiscussionComment_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $team_slug, $discussion_number, $comment_number, $reaction_id);
    }
    public function listForTeamDiscussionInOrg_(string $org, string $team_slug, int $discussion_number, string $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForTeamDiscussionInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForTeamDiscussionInOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $team_slug, $discussion_number, $content, $per_page, $page);
    }
    public function createForTeamDiscussionInOrg_(string $org, string $team_slug, int $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForTeamDiscussionInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForTeamDiscussionInOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $team_slug, $discussion_number);
    }
    public function deleteForTeamDiscussion_(string $org, string $team_slug, int $discussion_number, int $reaction_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteForTeamDiscussion_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteForTeamDiscussion_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $team_slug, $discussion_number, $reaction_id);
    }
    public function deleteLegacy_(int $reaction_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteLegacy_($this->requestSchemaValidator, $this->responseSchemaValidator, $reaction_id);
    }
    public function listForCommitComment_(string $owner, string $repo, int $comment_id, string $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForCommitComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForCommitComment_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $comment_id, $content, $per_page, $page);
    }
    public function createForCommitComment_(string $owner, string $repo, int $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForCommitComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForCommitComment_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $comment_id);
    }
    public function deleteForCommitComment_(string $owner, string $repo, int $comment_id, int $reaction_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteForCommitComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteForCommitComment_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $comment_id, $reaction_id);
    }
    public function listForIssueComment_(string $owner, string $repo, int $comment_id, string $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForIssueComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForIssueComment_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $comment_id, $content, $per_page, $page);
    }
    public function createForIssueComment_(string $owner, string $repo, int $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForIssueComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForIssueComment_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $comment_id);
    }
    public function deleteForIssueComment_(string $owner, string $repo, int $comment_id, int $reaction_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteForIssueComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteForIssueComment_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $comment_id, $reaction_id);
    }
    public function listForIssue_(string $owner, string $repo, int $issue_number, string $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForIssue_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForIssue_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $issue_number, $content, $per_page, $page);
    }
    public function createForIssue_(string $owner, string $repo, int $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForIssue_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForIssue_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $issue_number);
    }
    public function deleteForIssue_(string $owner, string $repo, int $issue_number, int $reaction_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteForIssue_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteForIssue_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $issue_number, $reaction_id);
    }
    public function listForPullRequestReviewComment_(string $owner, string $repo, int $comment_id, string $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForPullRequestReviewComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForPullRequestReviewComment_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $comment_id, $content, $per_page, $page);
    }
    public function createForPullRequestReviewComment_(string $owner, string $repo, int $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForPullRequestReviewComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForPullRequestReviewComment_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $comment_id);
    }
    public function deleteForPullRequestComment_(string $owner, string $repo, int $comment_id, int $reaction_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteForPullRequestComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteForPullRequestComment_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $comment_id, $reaction_id);
    }
    public function listForTeamDiscussionCommentLegacy_(int $team_id, int $discussion_number, int $comment_number, string $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForTeamDiscussionCommentLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForTeamDiscussionCommentLegacy_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id, $discussion_number, $comment_number, $content, $per_page, $page);
    }
    public function createForTeamDiscussionCommentLegacy_(int $team_id, int $discussion_number, int $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForTeamDiscussionCommentLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForTeamDiscussionCommentLegacy_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id, $discussion_number, $comment_number);
    }
    public function listForTeamDiscussionLegacy_(int $team_id, int $discussion_number, string $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForTeamDiscussionLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForTeamDiscussionLegacy_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id, $discussion_number, $content, $per_page, $page);
    }
    public function createForTeamDiscussionLegacy_(int $team_id, int $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForTeamDiscussionLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForTeamDiscussionLegacy_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id, $discussion_number);
    }
}