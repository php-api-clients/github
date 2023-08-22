<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;

use function array_key_exists;

final class Reactions
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function listForTeamDiscussionCommentInOrg(string $org, string $teamSlug, int $discussionNumber, int $commentNumber, string $content, int $perPage, int $page): Schema\Reaction
    {
        if (array_key_exists(Operator\Reactions\ListForTeamDiscussionCommentInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Reactions\ListForTeamDiscussionCommentInOrg::class] = new Operator\Reactions\ListForTeamDiscussionCommentInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions());
        }

        return $this->operator[Operator\Reactions\ListForTeamDiscussionCommentInOrg::class]->call($org, $teamSlug, $discussionNumber, $commentNumber, $content, $perPage, $page);
    }

    public function listForTeamDiscussionCommentInOrgListing(string $org, string $teamSlug, int $discussionNumber, int $commentNumber, string $content, int $perPage, int $page): Schema\Reaction
    {
        if (array_key_exists(Operator\Reactions\ListForTeamDiscussionCommentInOrgListing::class, $this->operator) === false) {
            $this->operator[Operator\Reactions\ListForTeamDiscussionCommentInOrgListing::class] = new Operator\Reactions\ListForTeamDiscussionCommentInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions());
        }

        return $this->operator[Operator\Reactions\ListForTeamDiscussionCommentInOrgListing::class]->call($org, $teamSlug, $discussionNumber, $commentNumber, $content, $perPage, $page);
    }

    public function createForTeamDiscussionCommentInOrg(string $org, string $teamSlug, int $discussionNumber, int $commentNumber, array $params): Schema\Reaction
    {
        if (array_key_exists(Operator\Reactions\CreateForTeamDiscussionCommentInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Reactions\CreateForTeamDiscussionCommentInOrg::class] = new Operator\Reactions\CreateForTeamDiscussionCommentInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions());
        }

        return $this->operator[Operator\Reactions\CreateForTeamDiscussionCommentInOrg::class]->call($org, $teamSlug, $discussionNumber, $commentNumber, $params);
    }

    public function deleteForTeamDiscussionComment(string $org, string $teamSlug, int $discussionNumber, int $commentNumber, int $reactionId): ResponseInterface
    {
        if (array_key_exists(Operator\Reactions\DeleteForTeamDiscussionComment::class, $this->operator) === false) {
            $this->operator[Operator\Reactions\DeleteForTeamDiscussionComment::class] = new Operator\Reactions\DeleteForTeamDiscussionComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions🌀ReactionId());
        }

        return $this->operator[Operator\Reactions\DeleteForTeamDiscussionComment::class]->call($org, $teamSlug, $discussionNumber, $commentNumber, $reactionId);
    }

    public function listForTeamDiscussionInOrg(string $org, string $teamSlug, int $discussionNumber, string $content, int $perPage, int $page): Schema\Reaction
    {
        if (array_key_exists(Operator\Reactions\ListForTeamDiscussionInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Reactions\ListForTeamDiscussionInOrg::class] = new Operator\Reactions\ListForTeamDiscussionInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions());
        }

        return $this->operator[Operator\Reactions\ListForTeamDiscussionInOrg::class]->call($org, $teamSlug, $discussionNumber, $content, $perPage, $page);
    }

    public function listForTeamDiscussionInOrgListing(string $org, string $teamSlug, int $discussionNumber, string $content, int $perPage, int $page): Schema\Reaction
    {
        if (array_key_exists(Operator\Reactions\ListForTeamDiscussionInOrgListing::class, $this->operator) === false) {
            $this->operator[Operator\Reactions\ListForTeamDiscussionInOrgListing::class] = new Operator\Reactions\ListForTeamDiscussionInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions());
        }

        return $this->operator[Operator\Reactions\ListForTeamDiscussionInOrgListing::class]->call($org, $teamSlug, $discussionNumber, $content, $perPage, $page);
    }

    public function createForTeamDiscussionInOrg(string $org, string $teamSlug, int $discussionNumber, array $params): Schema\Reaction
    {
        if (array_key_exists(Operator\Reactions\CreateForTeamDiscussionInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Reactions\CreateForTeamDiscussionInOrg::class] = new Operator\Reactions\CreateForTeamDiscussionInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions());
        }

        return $this->operator[Operator\Reactions\CreateForTeamDiscussionInOrg::class]->call($org, $teamSlug, $discussionNumber, $params);
    }

    public function deleteForTeamDiscussion(string $org, string $teamSlug, int $discussionNumber, int $reactionId): ResponseInterface
    {
        if (array_key_exists(Operator\Reactions\DeleteForTeamDiscussion::class, $this->operator) === false) {
            $this->operator[Operator\Reactions\DeleteForTeamDiscussion::class] = new Operator\Reactions\DeleteForTeamDiscussion($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions🌀ReactionId());
        }

        return $this->operator[Operator\Reactions\DeleteForTeamDiscussion::class]->call($org, $teamSlug, $discussionNumber, $reactionId);
    }

    public function listForCommitComment(string $owner, string $repo, int $commentId, string $content, int $perPage, int $page): Schema\Reaction
    {
        if (array_key_exists(Operator\Reactions\ListForCommitComment::class, $this->operator) === false) {
            $this->operator[Operator\Reactions\ListForCommitComment::class] = new Operator\Reactions\ListForCommitComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->operator[Operator\Reactions\ListForCommitComment::class]->call($owner, $repo, $commentId, $content, $perPage, $page);
    }

    public function listForCommitCommentListing(string $owner, string $repo, int $commentId, string $content, int $perPage, int $page): Schema\Reaction
    {
        if (array_key_exists(Operator\Reactions\ListForCommitCommentListing::class, $this->operator) === false) {
            $this->operator[Operator\Reactions\ListForCommitCommentListing::class] = new Operator\Reactions\ListForCommitCommentListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->operator[Operator\Reactions\ListForCommitCommentListing::class]->call($owner, $repo, $commentId, $content, $perPage, $page);
    }

    public function createForCommitComment(string $owner, string $repo, int $commentId, array $params): Schema\Reaction
    {
        if (array_key_exists(Operator\Reactions\CreateForCommitComment::class, $this->operator) === false) {
            $this->operator[Operator\Reactions\CreateForCommitComment::class] = new Operator\Reactions\CreateForCommitComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->operator[Operator\Reactions\CreateForCommitComment::class]->call($owner, $repo, $commentId, $params);
    }

    public function deleteForCommitComment(string $owner, string $repo, int $commentId, int $reactionId): ResponseInterface
    {
        if (array_key_exists(Operator\Reactions\DeleteForCommitComment::class, $this->operator) === false) {
            $this->operator[Operator\Reactions\DeleteForCommitComment::class] = new Operator\Reactions\DeleteForCommitComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions🌀ReactionId());
        }

        return $this->operator[Operator\Reactions\DeleteForCommitComment::class]->call($owner, $repo, $commentId, $reactionId);
    }

    public function listForIssueComment(string $owner, string $repo, int $commentId, string $content, int $perPage, int $page): Schema\Reaction
    {
        if (array_key_exists(Operator\Reactions\ListForIssueComment::class, $this->operator) === false) {
            $this->operator[Operator\Reactions\ListForIssueComment::class] = new Operator\Reactions\ListForIssueComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->operator[Operator\Reactions\ListForIssueComment::class]->call($owner, $repo, $commentId, $content, $perPage, $page);
    }

    public function listForIssueCommentListing(string $owner, string $repo, int $commentId, string $content, int $perPage, int $page): Schema\Reaction
    {
        if (array_key_exists(Operator\Reactions\ListForIssueCommentListing::class, $this->operator) === false) {
            $this->operator[Operator\Reactions\ListForIssueCommentListing::class] = new Operator\Reactions\ListForIssueCommentListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->operator[Operator\Reactions\ListForIssueCommentListing::class]->call($owner, $repo, $commentId, $content, $perPage, $page);
    }

    public function createForIssueComment(string $owner, string $repo, int $commentId, array $params): Schema\Reaction
    {
        if (array_key_exists(Operator\Reactions\CreateForIssueComment::class, $this->operator) === false) {
            $this->operator[Operator\Reactions\CreateForIssueComment::class] = new Operator\Reactions\CreateForIssueComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->operator[Operator\Reactions\CreateForIssueComment::class]->call($owner, $repo, $commentId, $params);
    }

    public function deleteForIssueComment(string $owner, string $repo, int $commentId, int $reactionId): ResponseInterface
    {
        if (array_key_exists(Operator\Reactions\DeleteForIssueComment::class, $this->operator) === false) {
            $this->operator[Operator\Reactions\DeleteForIssueComment::class] = new Operator\Reactions\DeleteForIssueComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions🌀ReactionId());
        }

        return $this->operator[Operator\Reactions\DeleteForIssueComment::class]->call($owner, $repo, $commentId, $reactionId);
    }

    public function listForIssue(string $owner, string $repo, int $issueNumber, string $content, int $perPage, int $page): Schema\Reaction
    {
        if (array_key_exists(Operator\Reactions\ListForIssue::class, $this->operator) === false) {
            $this->operator[Operator\Reactions\ListForIssue::class] = new Operator\Reactions\ListForIssue($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions());
        }

        return $this->operator[Operator\Reactions\ListForIssue::class]->call($owner, $repo, $issueNumber, $content, $perPage, $page);
    }

    public function listForIssueListing(string $owner, string $repo, int $issueNumber, string $content, int $perPage, int $page): Schema\Reaction
    {
        if (array_key_exists(Operator\Reactions\ListForIssueListing::class, $this->operator) === false) {
            $this->operator[Operator\Reactions\ListForIssueListing::class] = new Operator\Reactions\ListForIssueListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions());
        }

        return $this->operator[Operator\Reactions\ListForIssueListing::class]->call($owner, $repo, $issueNumber, $content, $perPage, $page);
    }

    public function createForIssue(string $owner, string $repo, int $issueNumber, array $params): Schema\Reaction
    {
        if (array_key_exists(Operator\Reactions\CreateForIssue::class, $this->operator) === false) {
            $this->operator[Operator\Reactions\CreateForIssue::class] = new Operator\Reactions\CreateForIssue($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions());
        }

        return $this->operator[Operator\Reactions\CreateForIssue::class]->call($owner, $repo, $issueNumber, $params);
    }

    public function deleteForIssue(string $owner, string $repo, int $issueNumber, int $reactionId): ResponseInterface
    {
        if (array_key_exists(Operator\Reactions\DeleteForIssue::class, $this->operator) === false) {
            $this->operator[Operator\Reactions\DeleteForIssue::class] = new Operator\Reactions\DeleteForIssue($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions🌀ReactionId());
        }

        return $this->operator[Operator\Reactions\DeleteForIssue::class]->call($owner, $repo, $issueNumber, $reactionId);
    }

    public function listForPullRequestReviewComment(string $owner, string $repo, int $commentId, string $content, int $perPage, int $page): Schema\Reaction
    {
        if (array_key_exists(Operator\Reactions\ListForPullRequestReviewComment::class, $this->operator) === false) {
            $this->operator[Operator\Reactions\ListForPullRequestReviewComment::class] = new Operator\Reactions\ListForPullRequestReviewComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->operator[Operator\Reactions\ListForPullRequestReviewComment::class]->call($owner, $repo, $commentId, $content, $perPage, $page);
    }

    public function listForPullRequestReviewCommentListing(string $owner, string $repo, int $commentId, string $content, int $perPage, int $page): Schema\Reaction
    {
        if (array_key_exists(Operator\Reactions\ListForPullRequestReviewCommentListing::class, $this->operator) === false) {
            $this->operator[Operator\Reactions\ListForPullRequestReviewCommentListing::class] = new Operator\Reactions\ListForPullRequestReviewCommentListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->operator[Operator\Reactions\ListForPullRequestReviewCommentListing::class]->call($owner, $repo, $commentId, $content, $perPage, $page);
    }

    public function createForPullRequestReviewComment(string $owner, string $repo, int $commentId, array $params): Schema\Reaction
    {
        if (array_key_exists(Operator\Reactions\CreateForPullRequestReviewComment::class, $this->operator) === false) {
            $this->operator[Operator\Reactions\CreateForPullRequestReviewComment::class] = new Operator\Reactions\CreateForPullRequestReviewComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->operator[Operator\Reactions\CreateForPullRequestReviewComment::class]->call($owner, $repo, $commentId, $params);
    }

    public function deleteForPullRequestComment(string $owner, string $repo, int $commentId, int $reactionId): ResponseInterface
    {
        if (array_key_exists(Operator\Reactions\DeleteForPullRequestComment::class, $this->operator) === false) {
            $this->operator[Operator\Reactions\DeleteForPullRequestComment::class] = new Operator\Reactions\DeleteForPullRequestComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions🌀ReactionId());
        }

        return $this->operator[Operator\Reactions\DeleteForPullRequestComment::class]->call($owner, $repo, $commentId, $reactionId);
    }

    public function listForRelease(string $owner, string $repo, int $releaseId, string $content, int $perPage, int $page): Schema\Reaction
    {
        if (array_key_exists(Operator\Reactions\ListForRelease::class, $this->operator) === false) {
            $this->operator[Operator\Reactions\ListForRelease::class] = new Operator\Reactions\ListForRelease($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions());
        }

        return $this->operator[Operator\Reactions\ListForRelease::class]->call($owner, $repo, $releaseId, $content, $perPage, $page);
    }

    public function listForReleaseListing(string $owner, string $repo, int $releaseId, string $content, int $perPage, int $page): Schema\Reaction
    {
        if (array_key_exists(Operator\Reactions\ListForReleaseListing::class, $this->operator) === false) {
            $this->operator[Operator\Reactions\ListForReleaseListing::class] = new Operator\Reactions\ListForReleaseListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions());
        }

        return $this->operator[Operator\Reactions\ListForReleaseListing::class]->call($owner, $repo, $releaseId, $content, $perPage, $page);
    }

    public function createForRelease(string $owner, string $repo, int $releaseId, array $params): Schema\Reaction
    {
        if (array_key_exists(Operator\Reactions\CreateForRelease::class, $this->operator) === false) {
            $this->operator[Operator\Reactions\CreateForRelease::class] = new Operator\Reactions\CreateForRelease($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions());
        }

        return $this->operator[Operator\Reactions\CreateForRelease::class]->call($owner, $repo, $releaseId, $params);
    }

    public function deleteForRelease(string $owner, string $repo, int $releaseId, int $reactionId): ResponseInterface
    {
        if (array_key_exists(Operator\Reactions\DeleteForRelease::class, $this->operator) === false) {
            $this->operator[Operator\Reactions\DeleteForRelease::class] = new Operator\Reactions\DeleteForRelease($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions🌀ReactionId());
        }

        return $this->operator[Operator\Reactions\DeleteForRelease::class]->call($owner, $repo, $releaseId, $reactionId);
    }

    public function listForTeamDiscussionCommentLegacy(int $teamId, int $discussionNumber, int $commentNumber, string $content, int $perPage, int $page): Schema\Reaction
    {
        if (array_key_exists(Operator\Reactions\ListForTeamDiscussionCommentLegacy::class, $this->operator) === false) {
            $this->operator[Operator\Reactions\ListForTeamDiscussionCommentLegacy::class] = new Operator\Reactions\ListForTeamDiscussionCommentLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions());
        }

        return $this->operator[Operator\Reactions\ListForTeamDiscussionCommentLegacy::class]->call($teamId, $discussionNumber, $commentNumber, $content, $perPage, $page);
    }

    public function listForTeamDiscussionCommentLegacyListing(int $teamId, int $discussionNumber, int $commentNumber, string $content, int $perPage, int $page): Schema\Reaction
    {
        if (array_key_exists(Operator\Reactions\ListForTeamDiscussionCommentLegacyListing::class, $this->operator) === false) {
            $this->operator[Operator\Reactions\ListForTeamDiscussionCommentLegacyListing::class] = new Operator\Reactions\ListForTeamDiscussionCommentLegacyListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions());
        }

        return $this->operator[Operator\Reactions\ListForTeamDiscussionCommentLegacyListing::class]->call($teamId, $discussionNumber, $commentNumber, $content, $perPage, $page);
    }

    public function createForTeamDiscussionCommentLegacy(int $teamId, int $discussionNumber, int $commentNumber, array $params): Schema\Reaction
    {
        if (array_key_exists(Operator\Reactions\CreateForTeamDiscussionCommentLegacy::class, $this->operator) === false) {
            $this->operator[Operator\Reactions\CreateForTeamDiscussionCommentLegacy::class] = new Operator\Reactions\CreateForTeamDiscussionCommentLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions());
        }

        return $this->operator[Operator\Reactions\CreateForTeamDiscussionCommentLegacy::class]->call($teamId, $discussionNumber, $commentNumber, $params);
    }

    public function listForTeamDiscussionLegacy(int $teamId, int $discussionNumber, string $content, int $perPage, int $page): Schema\Reaction
    {
        if (array_key_exists(Operator\Reactions\ListForTeamDiscussionLegacy::class, $this->operator) === false) {
            $this->operator[Operator\Reactions\ListForTeamDiscussionLegacy::class] = new Operator\Reactions\ListForTeamDiscussionLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Reactions());
        }

        return $this->operator[Operator\Reactions\ListForTeamDiscussionLegacy::class]->call($teamId, $discussionNumber, $content, $perPage, $page);
    }

    public function listForTeamDiscussionLegacyListing(int $teamId, int $discussionNumber, string $content, int $perPage, int $page): Schema\Reaction
    {
        if (array_key_exists(Operator\Reactions\ListForTeamDiscussionLegacyListing::class, $this->operator) === false) {
            $this->operator[Operator\Reactions\ListForTeamDiscussionLegacyListing::class] = new Operator\Reactions\ListForTeamDiscussionLegacyListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Reactions());
        }

        return $this->operator[Operator\Reactions\ListForTeamDiscussionLegacyListing::class]->call($teamId, $discussionNumber, $content, $perPage, $page);
    }

    public function createForTeamDiscussionLegacy(int $teamId, int $discussionNumber, array $params): Schema\Reaction
    {
        if (array_key_exists(Operator\Reactions\CreateForTeamDiscussionLegacy::class, $this->operator) === false) {
            $this->operator[Operator\Reactions\CreateForTeamDiscussionLegacy::class] = new Operator\Reactions\CreateForTeamDiscussionLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Reactions());
        }

        return $this->operator[Operator\Reactions\CreateForTeamDiscussionLegacy::class]->call($teamId, $discussionNumber, $params);
    }
}
