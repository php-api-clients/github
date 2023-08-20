<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Post;

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
    public function create(array $params): TeamFull|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Teams::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Teams::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams();
        }

        $operator = new Operator\Teams\Create($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Teams::class]);

        return $operator->call($arguments['org'], $params);
    }

    /** @return */
    public function createDiscussionLegacy(array $params): TeamDiscussion|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('team_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: team_id');
        }

        $arguments['team_id'] = $params['team_id'];
        unset($params['team_id']);
        if (array_key_exists(Hydrator\Operation\Teams\TeamId\Discussions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Teams\TeamId\Discussions::class] = $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions();
        }

        $operator = new Operator\Teams\CreateDiscussionLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Teams\TeamId\Discussions::class]);

        return $operator->call($arguments['team_id'], $params);
    }

    /** @return */
    public function createDiscussionInOrg(array $params): TeamDiscussion|array
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions();
        }

        $operator = new Operator\Teams\CreateDiscussionInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions::class]);

        return $operator->call($arguments['org'], $arguments['team_slug'], $params);
    }

    /** @return */
    public function createDiscussionCommentLegacy(array $params): TeamDiscussionComment|array
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
        if (array_key_exists(Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments::class] = $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments();
        }

        $operator = new Operator\Teams\CreateDiscussionCommentLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments::class]);

        return $operator->call($arguments['team_id'], $arguments['discussion_number'], $params);
    }

    /** @return */
    public function createDiscussionCommentInOrg(array $params): TeamDiscussionComment|array
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments();
        }

        $operator = new Operator\Teams\CreateDiscussionCommentInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments::class]);

        return $operator->call($arguments['org'], $arguments['team_slug'], $arguments['discussion_number'], $params);
    }
}
