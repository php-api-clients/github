<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Reactions
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return iterable<Schema\Reaction> */
    public function listForTeamDiscussionLegacy(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('team_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: team_id');
        }

        $arguments['team_id'] = $params['team_id'];
        unset($params['team_id']);
        if (array_key_exists('discussion_number', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: discussion_number');
        }

        $arguments['discussion_number'] = $params['discussion_number'];
        unset($params['discussion_number']);
        if (array_key_exists('content', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: content');
        }

        $arguments['content'] = $params['content'];
        unset($params['content']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Reactions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Reactions::class] = $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Reactions();
        }

        $operator = new Operator\Reactions\ListForTeamDiscussionLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Reactions::class]);

        return $operator->call($arguments['team_id'], $arguments['discussion_number'], $arguments['content'], $arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<Schema\Reaction> */
    public function listForCommitComment(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('comment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: comment_id');
        }

        $arguments['comment_id'] = $params['comment_id'];
        unset($params['comment_id']);
        if (array_key_exists('content', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: content');
        }

        $arguments['content'] = $params['content'];
        unset($params['content']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId\Reactions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId\Reactions::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions();
        }

        $operator = new Operator\Reactions\ListForCommitComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId\Reactions::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['comment_id'], $arguments['content'], $arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<Schema\Reaction> */
    public function listForIssue(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('issue_number', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: issue_number');
        }

        $arguments['issue_number'] = $params['issue_number'];
        unset($params['issue_number']);
        if (array_key_exists('content', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: content');
        }

        $arguments['content'] = $params['content'];
        unset($params['content']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Reactions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Reactions::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions();
        }

        $operator = new Operator\Reactions\ListForIssue($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Reactions::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['issue_number'], $arguments['content'], $arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<Schema\Reaction> */
    public function listForRelease(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('release_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: release_id');
        }

        $arguments['release_id'] = $params['release_id'];
        unset($params['release_id']);
        if (array_key_exists('content', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: content');
        }

        $arguments['content'] = $params['content'];
        unset($params['content']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Reactions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Reactions::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions();
        }

        $operator = new Operator\Reactions\ListForRelease($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Reactions::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['release_id'], $arguments['content'], $arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<Schema\Reaction> */
    public function listForTeamDiscussionInOrg(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('team_slug', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: team_slug');
        }

        $arguments['team_slug'] = $params['team_slug'];
        unset($params['team_slug']);
        if (array_key_exists('discussion_number', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: discussion_number');
        }

        $arguments['discussion_number'] = $params['discussion_number'];
        unset($params['discussion_number']);
        if (array_key_exists('content', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: content');
        }

        $arguments['content'] = $params['content'];
        unset($params['content']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Reactions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Reactions::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions();
        }

        $operator = new Operator\Reactions\ListForTeamDiscussionInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Reactions::class]);

        return $operator->call($arguments['org'], $arguments['team_slug'], $arguments['discussion_number'], $arguments['content'], $arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<Schema\Reaction> */
    public function listForIssueComment(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('comment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: comment_id');
        }

        $arguments['comment_id'] = $params['comment_id'];
        unset($params['comment_id']);
        if (array_key_exists('content', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: content');
        }

        $arguments['content'] = $params['content'];
        unset($params['content']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId\Reactions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId\Reactions::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions();
        }

        $operator = new Operator\Reactions\ListForIssueComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId\Reactions::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['comment_id'], $arguments['content'], $arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<Schema\Reaction> */
    public function listForPullRequestReviewComment(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('comment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: comment_id');
        }

        $arguments['comment_id'] = $params['comment_id'];
        unset($params['comment_id']);
        if (array_key_exists('content', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: content');
        }

        $arguments['content'] = $params['content'];
        unset($params['content']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId\Reactions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId\Reactions::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions();
        }

        $operator = new Operator\Reactions\ListForPullRequestReviewComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId\Reactions::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['comment_id'], $arguments['content'], $arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<Schema\Reaction> */
    public function listForTeamDiscussionCommentLegacy(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('team_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: team_id');
        }

        $arguments['team_id'] = $params['team_id'];
        unset($params['team_id']);
        if (array_key_exists('discussion_number', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: discussion_number');
        }

        $arguments['discussion_number'] = $params['discussion_number'];
        unset($params['discussion_number']);
        if (array_key_exists('comment_number', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: comment_number');
        }

        $arguments['comment_number'] = $params['comment_number'];
        unset($params['comment_number']);
        if (array_key_exists('content', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: content');
        }

        $arguments['content'] = $params['content'];
        unset($params['content']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions::class] = $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions();
        }

        $operator = new Operator\Reactions\ListForTeamDiscussionCommentLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions::class]);

        return $operator->call($arguments['team_id'], $arguments['discussion_number'], $arguments['comment_number'], $arguments['content'], $arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<Schema\Reaction> */
    public function listForTeamDiscussionCommentInOrg(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('team_slug', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: team_slug');
        }

        $arguments['team_slug'] = $params['team_slug'];
        unset($params['team_slug']);
        if (array_key_exists('discussion_number', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: discussion_number');
        }

        $arguments['discussion_number'] = $params['discussion_number'];
        unset($params['discussion_number']);
        if (array_key_exists('comment_number', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: comment_number');
        }

        $arguments['comment_number'] = $params['comment_number'];
        unset($params['comment_number']);
        if (array_key_exists('content', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: content');
        }

        $arguments['content'] = $params['content'];
        unset($params['content']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions();
        }

        $operator = new Operator\Reactions\ListForTeamDiscussionCommentInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions::class]);

        return $operator->call($arguments['org'], $arguments['team_slug'], $arguments['discussion_number'], $arguments['comment_number'], $arguments['content'], $arguments['per_page'], $arguments['page']);
    }
}
