<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation;

final class Reactions
{
    public function listForTeamDiscussionCommentInOrg_($org, $team_slug, $discussion_number, $comment_number, $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForTeamDiscussionCommentInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForTeamDiscussionCommentInOrg_($org, $team_slug, $discussion_number, $comment_number, $content, $per_page, $page);
    }
    public function createForTeamDiscussionCommentInOrg_($org, $team_slug, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForTeamDiscussionCommentInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForTeamDiscussionCommentInOrg_($org, $team_slug, $discussion_number, $comment_number);
    }
    public function deleteForTeamDiscussionComment_($org, $team_slug, $discussion_number, $comment_number, $reaction_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteForTeamDiscussionComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteForTeamDiscussionComment_($org, $team_slug, $discussion_number, $comment_number, $reaction_id);
    }
    public function listForTeamDiscussionInOrg_($org, $team_slug, $discussion_number, $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForTeamDiscussionInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForTeamDiscussionInOrg_($org, $team_slug, $discussion_number, $content, $per_page, $page);
    }
    public function createForTeamDiscussionInOrg_($org, $team_slug, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForTeamDiscussionInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForTeamDiscussionInOrg_($org, $team_slug, $discussion_number);
    }
    public function deleteForTeamDiscussion_($org, $team_slug, $discussion_number, $reaction_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteForTeamDiscussion_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteForTeamDiscussion_($org, $team_slug, $discussion_number, $reaction_id);
    }
    public function deleteLegacy_($reaction_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteLegacy_($reaction_id);
    }
    public function listForCommitComment_($owner, $repo, $comment_id, $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForCommitComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForCommitComment_($owner, $repo, $comment_id, $content, $per_page, $page);
    }
    public function createForCommitComment_($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForCommitComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForCommitComment_($owner, $repo, $comment_id);
    }
    public function deleteForCommitComment_($owner, $repo, $comment_id, $reaction_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteForCommitComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteForCommitComment_($owner, $repo, $comment_id, $reaction_id);
    }
    public function listForIssueComment_($owner, $repo, $comment_id, $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForIssueComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForIssueComment_($owner, $repo, $comment_id, $content, $per_page, $page);
    }
    public function createForIssueComment_($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForIssueComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForIssueComment_($owner, $repo, $comment_id);
    }
    public function deleteForIssueComment_($owner, $repo, $comment_id, $reaction_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteForIssueComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteForIssueComment_($owner, $repo, $comment_id, $reaction_id);
    }
    public function listForIssue_($owner, $repo, $issue_number, $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForIssue_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForIssue_($owner, $repo, $issue_number, $content, $per_page, $page);
    }
    public function createForIssue_($owner, $repo, $issue_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForIssue_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForIssue_($owner, $repo, $issue_number);
    }
    public function deleteForIssue_($owner, $repo, $issue_number, $reaction_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteForIssue_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteForIssue_($owner, $repo, $issue_number, $reaction_id);
    }
    public function listForPullRequestReviewComment_($owner, $repo, $comment_id, $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForPullRequestReviewComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForPullRequestReviewComment_($owner, $repo, $comment_id, $content, $per_page, $page);
    }
    public function createForPullRequestReviewComment_($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForPullRequestReviewComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForPullRequestReviewComment_($owner, $repo, $comment_id);
    }
    public function deleteForPullRequestComment_($owner, $repo, $comment_id, $reaction_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteForPullRequestComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\DeleteForPullRequestComment_($owner, $repo, $comment_id, $reaction_id);
    }
    public function listForTeamDiscussionCommentLegacy_($team_id, $discussion_number, $comment_number, $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForTeamDiscussionCommentLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForTeamDiscussionCommentLegacy_($team_id, $discussion_number, $comment_number, $content, $per_page, $page);
    }
    public function createForTeamDiscussionCommentLegacy_($team_id, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForTeamDiscussionCommentLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForTeamDiscussionCommentLegacy_($team_id, $discussion_number, $comment_number);
    }
    public function listForTeamDiscussionLegacy_($team_id, $discussion_number, $content, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForTeamDiscussionLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\ListForTeamDiscussionLegacy_($team_id, $discussion_number, $content, $per_page, $page);
    }
    public function createForTeamDiscussionLegacy_($team_id, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForTeamDiscussionLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions\CreateForTeamDiscussionLegacy_($team_id, $discussion_number);
    }
}
