<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Post;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
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
    private readonly SchemaValidator $requestSchemaValidator;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrators $hydrators;
    private readonly Browser $browser;
    private readonly AuthenticationInterface $authentication;

    public function __construct(SchemaValidator $requestSchemaValidator, SchemaValidator $responseSchemaValidator, Hydrators $hydrators, Browser $browser, AuthenticationInterface $authentication)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrators               = $hydrators;
        $this->browser                 = $browser;
        $this->authentication          = $authentication;
    }

    public function create(array $params)
    {
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

    public function createDiscussionLegacy(array $params)
    {
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

    public function createDiscussionInOrg(array $params)
    {
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

    public function createDiscussionCommentLegacy(array $params)
    {
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

    public function createDiscussionCommentInOrg(array $params)
    {
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
