<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Patch;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema\TeamDiscussion;
use ApiClients\Client\GitHub\Schema\TeamDiscussionComment;
use ApiClients\Client\GitHub\Schema\TeamFull;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Teams
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function updateLegacy(array $params): TeamFull|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('team_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: team_id');
        }

        $arguments['team_id'] = $params['team_id'];
        unset($params['team_id']);
        if (array_key_exists(Hydrator\Operation\Teams\TeamId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Teams\TeamId::class] = $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId();
        }

        $operator = new Operator\Teams\UpdateLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Teams\TeamId::class]);

        return $operator->call($arguments['team_id'], $params);
    }

    /** @return */
    public function updateInOrg(array $params): TeamFull|array
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Teams\TeamSlug::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Teams\TeamSlug::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug();
        }

        $operator = new Operator\Teams\UpdateInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Teams\TeamSlug::class]);

        return $operator->call($arguments['org'], $arguments['team_slug'], $params);
    }

    /** @return */
    public function updateDiscussionLegacy(array $params): TeamDiscussion|array
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
        if (array_key_exists(Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber::class] = $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber();
        }

        $operator = new Operator\Teams\UpdateDiscussionLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber::class]);

        return $operator->call($arguments['team_id'], $arguments['discussion_number'], $params);
    }

    /** @return */
    public function updateDiscussionInOrg(array $params): TeamDiscussion|array
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber();
        }

        $operator = new Operator\Teams\UpdateDiscussionInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber::class]);

        return $operator->call($arguments['org'], $arguments['team_slug'], $arguments['discussion_number'], $params);
    }

    /** @return */
    public function updateDiscussionCommentLegacy(array $params): TeamDiscussionComment|array
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
        if (array_key_exists(Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments\CommentNumber::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments\CommentNumber::class] = $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber();
        }

        $operator = new Operator\Teams\UpdateDiscussionCommentLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments\CommentNumber::class]);

        return $operator->call($arguments['team_id'], $arguments['discussion_number'], $arguments['comment_number'], $params);
    }

    /** @return */
    public function updateDiscussionCommentInOrg(array $params): TeamDiscussionComment|array
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber();
        }

        $operator = new Operator\Teams\UpdateDiscussionCommentInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber::class]);

        return $operator->call($arguments['org'], $arguments['team_slug'], $arguments['discussion_number'], $arguments['comment_number'], $params);
    }
}
