<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation;

final class Reactions
{
    public function delete_(string $accept = 'application/vnd.github.squirrel-girl-preview+json', $reaction_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\Delete_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\Delete_($accept, $reaction_id);
    }
    public function listForCommitComment_($owner, $repo, $comment_id, $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\ListForCommitComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\ListForCommitComment_($owner, $repo, $comment_id, $content, $per_page, $page);
    }
    public function createForCommitComment_($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\CreateForCommitComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\CreateForCommitComment_($owner, $repo, $comment_id);
    }
    public function listForIssueComment_($owner, $repo, $comment_id, $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\ListForIssueComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\ListForIssueComment_($owner, $repo, $comment_id, $content, $per_page, $page);
    }
    public function createForIssueComment_($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\CreateForIssueComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\CreateForIssueComment_($owner, $repo, $comment_id);
    }
    public function listForIssue_($owner, $repo, $issue_number, $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\ListForIssue_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\ListForIssue_($owner, $repo, $issue_number, $content, $per_page, $page);
    }
    public function createForIssue_($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\CreateForIssue_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\CreateForIssue_($owner, $repo, $issue_number);
    }
    public function listForPullRequestReviewComment_($owner, $repo, $comment_id, $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\ListForPullRequestReviewComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\ListForPullRequestReviewComment_($owner, $repo, $comment_id, $content, $per_page, $page);
    }
    public function createForPullRequestReviewComment_($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\CreateForPullRequestReviewComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\CreateForPullRequestReviewComment_($owner, $repo, $comment_id);
    }
    public function listForTeamDiscussionComment_(string $accept = 'application/vnd.github.squirrel-girl-preview+json', $team_id, $discussion_number, $comment_number, $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\ListForTeamDiscussionComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\ListForTeamDiscussionComment_($accept, $team_id, $discussion_number, $comment_number, $content, $per_page, $page);
    }
    public function createForTeamDiscussionComment_(string $accept = 'application/vnd.github.squirrel-girl-preview+json', $team_id, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\CreateForTeamDiscussionComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\CreateForTeamDiscussionComment_($accept, $team_id, $discussion_number, $comment_number);
    }
    public function listForTeamDiscussion_(string $accept = 'application/vnd.github.squirrel-girl-preview+json', $team_id, $discussion_number, $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\ListForTeamDiscussion_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\ListForTeamDiscussion_($accept, $team_id, $discussion_number, $content, $per_page, $page);
    }
    public function createForTeamDiscussion_(string $accept = 'application/vnd.github.squirrel-girl-preview+json', $team_id, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\CreateForTeamDiscussion_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Reactions\CreateForTeamDiscussion_($accept, $team_id, $discussion_number);
    }
}
