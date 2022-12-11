<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation;

final class Reactions
{
    public function listForTeamDiscussionCommentInOrg_(string $org, string $team_slug, int $discussion_number, int $comment_number, string $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\ListForTeamDiscussionCommentInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\ListForTeamDiscussionCommentInOrg_($org, $team_slug, $discussion_number, $comment_number, $content, $per_page, $page);
    }
    public function createForTeamDiscussionCommentInOrg_(string $org, string $team_slug, int $discussion_number, int $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForTeamDiscussionCommentInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForTeamDiscussionCommentInOrg_($org, $team_slug, $discussion_number, $comment_number);
    }
    public function deleteForTeamDiscussionComment_(string $org, string $team_slug, int $discussion_number, int $comment_number, int $reaction_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\DeleteForTeamDiscussionComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\DeleteForTeamDiscussionComment_($org, $team_slug, $discussion_number, $comment_number, $reaction_id);
    }
    public function listForTeamDiscussionInOrg_(string $org, string $team_slug, int $discussion_number, string $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\ListForTeamDiscussionInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\ListForTeamDiscussionInOrg_($org, $team_slug, $discussion_number, $content, $per_page, $page);
    }
    public function createForTeamDiscussionInOrg_(string $org, string $team_slug, int $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForTeamDiscussionInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForTeamDiscussionInOrg_($org, $team_slug, $discussion_number);
    }
    public function deleteForTeamDiscussion_(string $org, string $team_slug, int $discussion_number, int $reaction_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\DeleteForTeamDiscussion_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\DeleteForTeamDiscussion_($org, $team_slug, $discussion_number, $reaction_id);
    }
    public function listForCommitComment_(string $owner, string $repo, int $comment_id, string $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\ListForCommitComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\ListForCommitComment_($owner, $repo, $comment_id, $content, $per_page, $page);
    }
    public function createForCommitComment_(string $owner, string $repo, int $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForCommitComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForCommitComment_($owner, $repo, $comment_id);
    }
    public function deleteForCommitComment_(string $owner, string $repo, int $comment_id, int $reaction_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\DeleteForCommitComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\DeleteForCommitComment_($owner, $repo, $comment_id, $reaction_id);
    }
    public function listForIssueComment_(string $owner, string $repo, int $comment_id, string $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\ListForIssueComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\ListForIssueComment_($owner, $repo, $comment_id, $content, $per_page, $page);
    }
    public function createForIssueComment_(string $owner, string $repo, int $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForIssueComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForIssueComment_($owner, $repo, $comment_id);
    }
    public function deleteForIssueComment_(string $owner, string $repo, int $comment_id, int $reaction_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\DeleteForIssueComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\DeleteForIssueComment_($owner, $repo, $comment_id, $reaction_id);
    }
    public function listForIssue_(string $owner, string $repo, int $issue_number, string $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\ListForIssue_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\ListForIssue_($owner, $repo, $issue_number, $content, $per_page, $page);
    }
    public function createForIssue_(string $owner, string $repo, int $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForIssue_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForIssue_($owner, $repo, $issue_number);
    }
    public function deleteForIssue_(string $owner, string $repo, int $issue_number, int $reaction_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\DeleteForIssue_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\DeleteForIssue_($owner, $repo, $issue_number, $reaction_id);
    }
    public function listForPullRequestReviewComment_(string $owner, string $repo, int $comment_id, string $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\ListForPullRequestReviewComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\ListForPullRequestReviewComment_($owner, $repo, $comment_id, $content, $per_page, $page);
    }
    public function createForPullRequestReviewComment_(string $owner, string $repo, int $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForPullRequestReviewComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForPullRequestReviewComment_($owner, $repo, $comment_id);
    }
    public function deleteForPullRequestComment_(string $owner, string $repo, int $comment_id, int $reaction_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\DeleteForPullRequestComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\DeleteForPullRequestComment_($owner, $repo, $comment_id, $reaction_id);
    }
    public function listForRelease_(string $owner, string $repo, int $release_id, string $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\ListForRelease_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\ListForRelease_($owner, $repo, $release_id, $content, $per_page, $page);
    }
    public function createForRelease_(string $owner, string $repo, int $release_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForRelease_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\CreateForRelease_($owner, $repo, $release_id);
    }
    public function deleteForRelease_(string $owner, string $repo, int $release_id, int $reaction_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\DeleteForRelease_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Reactions\DeleteForRelease_($owner, $repo, $release_id, $reaction_id);
    }
}
