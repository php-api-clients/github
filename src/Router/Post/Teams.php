<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Router\Post;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final class Teams
{
    /**
     * @var array<class-string, \EventSauce\ObjectHydrator\ObjectMapper>
     */
    private array $hydrator = array();
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\GitHub\Hydrators $hydrators;
    private readonly \React\Http\Browser $browser;
    private readonly \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\GitHub\Hydrators $hydrators, \React\Http\Browser $browser, \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrators = $hydrators;
        $this->browser = $browser;
        $this->authentication = $authentication;
    }
    public function create(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Teams::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Teams::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams();
        }
        $operation = new Operation\Teams\Create($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Teams::class], $arguments['org']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\TeamFull {
            return $operation->createResponse($response);
        });
    }
    public function createDiscussionLegacy(array $params)
    {
        $arguments = array();
        if (array_key_exists('team_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: team_id');
        }
        $arguments['team_id'] = $params['team_id'];
        unset($params['team_id']);
        if (\array_key_exists(Hydrator\Operation\Teams\CbTeamIdRcb\Discussions::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Teams\CbTeamIdRcb\Discussions::class] = $this->hydrators->getObjectMapperOperation🌀Teams🌀CbTeamIdRcb🌀Discussions();
        }
        $operation = new Operation\Teams\CreateDiscussionLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Teams\CbTeamIdRcb\Discussions::class], $arguments['team_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\TeamDiscussion {
            return $operation->createResponse($response);
        });
    }
    public function createDiscussionInOrg(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('team_slug', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: team_slug');
        }
        $arguments['team_slug'] = $params['team_slug'];
        unset($params['team_slug']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions();
        }
        $operation = new Operation\Teams\CreateDiscussionInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions::class], $arguments['org'], $arguments['team_slug']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\TeamDiscussion {
            return $operation->createResponse($response);
        });
    }
    public function createDiscussionCommentLegacy(array $params)
    {
        $arguments = array();
        if (array_key_exists('team_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: team_id');
        }
        $arguments['team_id'] = $params['team_id'];
        unset($params['team_id']);
        if (array_key_exists('discussion_number', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: discussion_number');
        }
        $arguments['discussion_number'] = $params['discussion_number'];
        unset($params['discussion_number']);
        if (\array_key_exists(Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments::class] = $this->hydrators->getObjectMapperOperation🌀Teams🌀CbTeamIdRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments();
        }
        $operation = new Operation\Teams\CreateDiscussionCommentLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments::class], $arguments['team_id'], $arguments['discussion_number']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\TeamDiscussionComment {
            return $operation->createResponse($response);
        });
    }
    public function createDiscussionCommentInOrg(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('team_slug', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: team_slug');
        }
        $arguments['team_slug'] = $params['team_slug'];
        unset($params['team_slug']);
        if (array_key_exists('discussion_number', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: discussion_number');
        }
        $arguments['discussion_number'] = $params['discussion_number'];
        unset($params['discussion_number']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments();
        }
        $operation = new Operation\Teams\CreateDiscussionCommentInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments::class], $arguments['org'], $arguments['team_slug'], $arguments['discussion_number']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\TeamDiscussionComment {
            return $operation->createResponse($response);
        });
    }
}
