<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Reactions
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\OptimizedHydratorMapper $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\OptimizedHydratorMapper $hydrator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function listForTeamDiscussionCommentInOrg(string $org, string $team_slug, int $discussion_number, int $comment_number, string $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForTeamDiscussionCommentInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForTeamDiscussionCommentInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $team_slug, $discussion_number, $comment_number, $content, $per_page, $page);
    }
    public function createForTeamDiscussionCommentInOrg(string $org, string $team_slug, int $discussion_number, int $comment_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForTeamDiscussionCommentInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForTeamDiscussionCommentInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $team_slug, $discussion_number, $comment_number);
    }
    public function deleteForTeamDiscussionComment(string $org, string $team_slug, int $discussion_number, int $comment_number, int $reaction_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForTeamDiscussionComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForTeamDiscussionComment($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $team_slug, $discussion_number, $comment_number, $reaction_id);
    }
    public function listForTeamDiscussionInOrg(string $org, string $team_slug, int $discussion_number, string $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForTeamDiscussionInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForTeamDiscussionInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $team_slug, $discussion_number, $content, $per_page, $page);
    }
    public function createForTeamDiscussionInOrg(string $org, string $team_slug, int $discussion_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForTeamDiscussionInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForTeamDiscussionInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $team_slug, $discussion_number);
    }
    public function deleteForTeamDiscussion(string $org, string $team_slug, int $discussion_number, int $reaction_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForTeamDiscussion
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForTeamDiscussion($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $team_slug, $discussion_number, $reaction_id);
    }
    public function listForCommitComment(string $owner, string $repo, int $comment_id, string $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForCommitComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForCommitComment($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $comment_id, $content, $per_page, $page);
    }
    public function createForCommitComment(string $owner, string $repo, int $comment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForCommitComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForCommitComment($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $comment_id);
    }
    public function deleteForCommitComment(string $owner, string $repo, int $comment_id, int $reaction_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForCommitComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForCommitComment($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $comment_id, $reaction_id);
    }
    public function listForIssueComment(string $owner, string $repo, int $comment_id, string $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForIssueComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForIssueComment($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $comment_id, $content, $per_page, $page);
    }
    public function createForIssueComment(string $owner, string $repo, int $comment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForIssueComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForIssueComment($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $comment_id);
    }
    public function deleteForIssueComment(string $owner, string $repo, int $comment_id, int $reaction_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForIssueComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForIssueComment($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $comment_id, $reaction_id);
    }
    public function listForIssue(string $owner, string $repo, int $issue_number, string $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForIssue
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForIssue($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $issue_number, $content, $per_page, $page);
    }
    public function createForIssue(string $owner, string $repo, int $issue_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForIssue
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForIssue($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $issue_number);
    }
    public function deleteForIssue(string $owner, string $repo, int $issue_number, int $reaction_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForIssue
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForIssue($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $issue_number, $reaction_id);
    }
    public function listForPullRequestReviewComment(string $owner, string $repo, int $comment_id, string $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForPullRequestReviewComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForPullRequestReviewComment($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $comment_id, $content, $per_page, $page);
    }
    public function createForPullRequestReviewComment(string $owner, string $repo, int $comment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForPullRequestReviewComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForPullRequestReviewComment($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $comment_id);
    }
    public function deleteForPullRequestComment(string $owner, string $repo, int $comment_id, int $reaction_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForPullRequestComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForPullRequestComment($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $comment_id, $reaction_id);
    }
    public function listForRelease(string $owner, string $repo, int $release_id, string $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForRelease
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForRelease($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $release_id, $content, $per_page, $page);
    }
    public function createForRelease(string $owner, string $repo, int $release_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForRelease
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForRelease($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $release_id);
    }
    public function deleteForRelease(string $owner, string $repo, int $release_id, int $reaction_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForRelease
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\DeleteForRelease($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $release_id, $reaction_id);
    }
    public function listForTeamDiscussionCommentLegacy(int $team_id, int $discussion_number, int $comment_number, string $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForTeamDiscussionCommentLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForTeamDiscussionCommentLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $team_id, $discussion_number, $comment_number, $content, $per_page, $page);
    }
    public function createForTeamDiscussionCommentLegacy(int $team_id, int $discussion_number, int $comment_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForTeamDiscussionCommentLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForTeamDiscussionCommentLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $team_id, $discussion_number, $comment_number);
    }
    public function listForTeamDiscussionLegacy(int $team_id, int $discussion_number, string $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForTeamDiscussionLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\ListForTeamDiscussionLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $team_id, $discussion_number, $content, $per_page, $page);
    }
    public function createForTeamDiscussionLegacy(int $team_id, int $discussion_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForTeamDiscussionLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions\CreateForTeamDiscussionLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $team_id, $discussion_number);
    }
}
