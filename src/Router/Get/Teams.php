<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Router\Get;

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
    public function list_(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Teams::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Teams::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams();
        }
        $operation = new Operation\Teams\List_($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Teams::class], $arguments['org'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function listDiscussionsLegacy(array $params)
    {
        $arguments = array();
        if (array_key_exists('team_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: team_id');
        }
        $arguments['team_id'] = $params['team_id'];
        unset($params['team_id']);
        if (array_key_exists('direction', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: direction');
        }
        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\Teams\CbTeamIdRcb\Discussions::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Teams\CbTeamIdRcb\Discussions::class] = $this->hydrators->getObjectMapperOperation🌀Teams🌀CbTeamIdRcb🌀Discussions();
        }
        $operation = new Operation\Teams\ListDiscussionsLegacy($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Teams\CbTeamIdRcb\Discussions::class], $arguments['team_id'], $arguments['direction'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function listPendingInvitationsLegacy(array $params)
    {
        $arguments = array();
        if (array_key_exists('team_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: team_id');
        }
        $arguments['team_id'] = $params['team_id'];
        unset($params['team_id']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\Teams\CbTeamIdRcb\Invitations::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Teams\CbTeamIdRcb\Invitations::class] = $this->hydrators->getObjectMapperOperation🌀Teams🌀CbTeamIdRcb🌀Invitations();
        }
        $operation = new Operation\Teams\ListPendingInvitationsLegacy($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Teams\CbTeamIdRcb\Invitations::class], $arguments['team_id'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function listMembersLegacy(array $params)
    {
        $arguments = array();
        if (array_key_exists('team_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: team_id');
        }
        $arguments['team_id'] = $params['team_id'];
        unset($params['team_id']);
        if (array_key_exists('role', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: role');
        }
        $arguments['role'] = $params['role'];
        unset($params['role']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\Teams\CbTeamIdRcb\Members::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Teams\CbTeamIdRcb\Members::class] = $this->hydrators->getObjectMapperOperation🌀Teams🌀CbTeamIdRcb🌀Members();
        }
        $operation = new Operation\Teams\ListMembersLegacy($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Teams\CbTeamIdRcb\Members::class], $arguments['team_id'], $arguments['role'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function listProjectsLegacy(array $params)
    {
        $arguments = array();
        if (array_key_exists('team_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: team_id');
        }
        $arguments['team_id'] = $params['team_id'];
        unset($params['team_id']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\Teams\CbTeamIdRcb\Projects::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Teams\CbTeamIdRcb\Projects::class] = $this->hydrators->getObjectMapperOperation🌀Teams🌀CbTeamIdRcb🌀Projects();
        }
        $operation = new Operation\Teams\ListProjectsLegacy($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Teams\CbTeamIdRcb\Projects::class], $arguments['team_id'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function listReposLegacy(array $params)
    {
        $arguments = array();
        if (array_key_exists('team_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: team_id');
        }
        $arguments['team_id'] = $params['team_id'];
        unset($params['team_id']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\Teams\CbTeamIdRcb\Repos::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Teams\CbTeamIdRcb\Repos::class] = $this->hydrators->getObjectMapperOperation🌀Teams🌀CbTeamIdRcb🌀Repos();
        }
        $operation = new Operation\Teams\ListReposLegacy($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Teams\CbTeamIdRcb\Repos::class], $arguments['team_id'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function listChildLegacy(array $params)
    {
        $arguments = array();
        if (array_key_exists('team_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: team_id');
        }
        $arguments['team_id'] = $params['team_id'];
        unset($params['team_id']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\Teams\CbTeamIdRcb\Teams::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Teams\CbTeamIdRcb\Teams::class] = $this->hydrators->getObjectMapperOperation🌀Teams🌀CbTeamIdRcb🌀Teams();
        }
        $operation = new Operation\Teams\ListChildLegacy($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Teams\CbTeamIdRcb\Teams::class], $arguments['team_id'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function getByName(array $params)
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
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb();
        }
        $operation = new Operation\Teams\GetByName($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb::class], $arguments['org'], $arguments['team_slug']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\TeamFull {
            return $operation->createResponse($response);
        });
    }
    public function getDiscussionLegacy(array $params)
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
        if (\array_key_exists(Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb::class] = $this->hydrators->getObjectMapperOperation🌀Teams🌀CbTeamIdRcb🌀Discussions🌀CbDiscussionNumberRcb();
        }
        $operation = new Operation\Teams\GetDiscussionLegacy($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb::class], $arguments['team_id'], $arguments['discussion_number']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\TeamDiscussion {
            return $operation->createResponse($response);
        });
    }
    public function getMemberLegacy(array $params)
    {
        $arguments = array();
        if (array_key_exists('team_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: team_id');
        }
        $arguments['team_id'] = $params['team_id'];
        unset($params['team_id']);
        if (array_key_exists('username', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: username');
        }
        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operation = new Operation\Teams\GetMemberLegacy($arguments['team_id'], $arguments['username']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Psr\Http\Message\ResponseInterface {
            return $operation->createResponse($response);
        });
    }
    public function getMembershipForUserLegacy(array $params)
    {
        $arguments = array();
        if (array_key_exists('team_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: team_id');
        }
        $arguments['team_id'] = $params['team_id'];
        unset($params['team_id']);
        if (array_key_exists('username', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: username');
        }
        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (\array_key_exists(Hydrator\Operation\Teams\CbTeamIdRcb\Memberships\CbUsernameRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Teams\CbTeamIdRcb\Memberships\CbUsernameRcb::class] = $this->hydrators->getObjectMapperOperation🌀Teams🌀CbTeamIdRcb🌀Memberships🌀CbUsernameRcb();
        }
        $operation = new Operation\Teams\GetMembershipForUserLegacy($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Teams\CbTeamIdRcb\Memberships\CbUsernameRcb::class], $arguments['team_id'], $arguments['username']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\TeamMembership {
            return $operation->createResponse($response);
        });
    }
    public function checkPermissionsForProjectLegacy(array $params)
    {
        $arguments = array();
        if (array_key_exists('team_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: team_id');
        }
        $arguments['team_id'] = $params['team_id'];
        unset($params['team_id']);
        if (array_key_exists('project_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: project_id');
        }
        $arguments['project_id'] = $params['project_id'];
        unset($params['project_id']);
        if (\array_key_exists(Hydrator\Operation\Teams\CbTeamIdRcb\Projects\CbProjectIdRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Teams\CbTeamIdRcb\Projects\CbProjectIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Teams🌀CbTeamIdRcb🌀Projects🌀CbProjectIdRcb();
        }
        $operation = new Operation\Teams\CheckPermissionsForProjectLegacy($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Teams\CbTeamIdRcb\Projects\CbProjectIdRcb::class], $arguments['team_id'], $arguments['project_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\TeamProject {
            return $operation->createResponse($response);
        });
    }
    public function getLegacy(array $params)
    {
        $arguments = array();
        if (array_key_exists('team_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: team_id');
        }
        $arguments['team_id'] = $params['team_id'];
        unset($params['team_id']);
        if (\array_key_exists(Hydrator\Operation\Teams\CbTeamIdRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Teams\CbTeamIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Teams🌀CbTeamIdRcb();
        }
        $operation = new Operation\Teams\GetLegacy($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Teams\CbTeamIdRcb::class], $arguments['team_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\TeamFull {
            return $operation->createResponse($response);
        });
    }
    public function listForAuthenticatedUser(array $params)
    {
        $arguments = array();
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\User\Teams::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\User\Teams::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Teams();
        }
        $operation = new Operation\Teams\ListForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Teams::class], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function listDiscussionsInOrg(array $params)
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
        if (array_key_exists('pinned', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: pinned');
        }
        $arguments['pinned'] = $params['pinned'];
        unset($params['pinned']);
        if (array_key_exists('direction', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: direction');
        }
        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions();
        }
        $operation = new Operation\Teams\ListDiscussionsInOrg($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions::class], $arguments['org'], $arguments['team_slug'], $arguments['pinned'], $arguments['direction'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function listPendingInvitationsInOrg(array $params)
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
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Invitations::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Invitations::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Invitations();
        }
        $operation = new Operation\Teams\ListPendingInvitationsInOrg($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Invitations::class], $arguments['org'], $arguments['team_slug'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function listMembersInOrg(array $params)
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
        if (array_key_exists('role', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: role');
        }
        $arguments['role'] = $params['role'];
        unset($params['role']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Members::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Members::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Members();
        }
        $operation = new Operation\Teams\ListMembersInOrg($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Members::class], $arguments['org'], $arguments['team_slug'], $arguments['role'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function listProjectsInOrg(array $params)
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
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Projects::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Projects::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects();
        }
        $operation = new Operation\Teams\ListProjectsInOrg($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Projects::class], $arguments['org'], $arguments['team_slug'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function listReposInOrg(array $params)
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
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Repos::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Repos::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos();
        }
        $operation = new Operation\Teams\ListReposInOrg($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Repos::class], $arguments['org'], $arguments['team_slug'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function listChildInOrg(array $params)
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
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Teams::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Teams::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Teams();
        }
        $operation = new Operation\Teams\ListChildInOrg($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Teams::class], $arguments['org'], $arguments['team_slug'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function listDiscussionCommentsLegacy(array $params)
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
        if (array_key_exists('direction', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: direction');
        }
        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments::class] = $this->hydrators->getObjectMapperOperation🌀Teams🌀CbTeamIdRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments();
        }
        $operation = new Operation\Teams\ListDiscussionCommentsLegacy($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments::class], $arguments['team_id'], $arguments['discussion_number'], $arguments['direction'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function checkPermissionsForRepoLegacy(array $params)
    {
        $arguments = array();
        if (array_key_exists('team_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: team_id');
        }
        $arguments['team_id'] = $params['team_id'];
        unset($params['team_id']);
        if (array_key_exists('owner', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: owner');
        }
        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: repo');
        }
        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (\array_key_exists(Hydrator\Operation\Teams\CbTeamIdRcb\Repos\CbOwnerRcb\CbRepoRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Teams\CbTeamIdRcb\Repos\CbOwnerRcb\CbRepoRcb::class] = $this->hydrators->getObjectMapperOperation🌀Teams🌀CbTeamIdRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb();
        }
        $operation = new Operation\Teams\CheckPermissionsForRepoLegacy($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Teams\CbTeamIdRcb\Repos\CbOwnerRcb\CbRepoRcb::class], $arguments['team_id'], $arguments['owner'], $arguments['repo']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\TeamRepository {
            return $operation->createResponse($response);
        });
    }
    public function getDiscussionInOrg(array $params)
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
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb();
        }
        $operation = new Operation\Teams\GetDiscussionInOrg($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb::class], $arguments['org'], $arguments['team_slug'], $arguments['discussion_number']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\TeamDiscussion {
            return $operation->createResponse($response);
        });
    }
    public function getMembershipForUserInOrg(array $params)
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
        if (array_key_exists('username', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: username');
        }
        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Memberships\CbUsernameRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Memberships\CbUsernameRcb::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Memberships🌀CbUsernameRcb();
        }
        $operation = new Operation\Teams\GetMembershipForUserInOrg($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Memberships\CbUsernameRcb::class], $arguments['org'], $arguments['team_slug'], $arguments['username']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\TeamMembership {
            return $operation->createResponse($response);
        });
    }
    public function checkPermissionsForProjectInOrg(array $params)
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
        if (array_key_exists('project_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: project_id');
        }
        $arguments['project_id'] = $params['project_id'];
        unset($params['project_id']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Projects\CbProjectIdRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Projects\CbProjectIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects🌀CbProjectIdRcb();
        }
        $operation = new Operation\Teams\CheckPermissionsForProjectInOrg($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Projects\CbProjectIdRcb::class], $arguments['org'], $arguments['team_slug'], $arguments['project_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\TeamProject {
            return $operation->createResponse($response);
        });
    }
    public function getDiscussionCommentLegacy(array $params)
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
        if (array_key_exists('comment_number', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: comment_number');
        }
        $arguments['comment_number'] = $params['comment_number'];
        unset($params['comment_number']);
        if (\array_key_exists(Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb::class] = $this->hydrators->getObjectMapperOperation🌀Teams🌀CbTeamIdRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb();
        }
        $operation = new Operation\Teams\GetDiscussionCommentLegacy($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb::class], $arguments['team_id'], $arguments['discussion_number'], $arguments['comment_number']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\TeamDiscussionComment {
            return $operation->createResponse($response);
        });
    }
    public function listDiscussionCommentsInOrg(array $params)
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
        if (array_key_exists('direction', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: direction');
        }
        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments();
        }
        $operation = new Operation\Teams\ListDiscussionCommentsInOrg($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments::class], $arguments['org'], $arguments['team_slug'], $arguments['discussion_number'], $arguments['direction'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function checkPermissionsForRepoInOrg(array $params)
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
        if (array_key_exists('owner', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: owner');
        }
        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: repo');
        }
        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Repos\CbOwnerRcb\CbRepoRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Repos\CbOwnerRcb\CbRepoRcb::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb();
        }
        $operation = new Operation\Teams\CheckPermissionsForRepoInOrg($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Repos\CbOwnerRcb\CbRepoRcb::class], $arguments['org'], $arguments['team_slug'], $arguments['owner'], $arguments['repo']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\TeamRepository {
            return $operation->createResponse($response);
        });
    }
    public function getDiscussionCommentInOrg(array $params)
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
        if (array_key_exists('comment_number', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: comment_number');
        }
        $arguments['comment_number'] = $params['comment_number'];
        unset($params['comment_number']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb();
        }
        $operation = new Operation\Teams\GetDiscussionCommentInOrg($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb::class], $arguments['org'], $arguments['team_slug'], $arguments['discussion_number'], $arguments['comment_number']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\TeamDiscussionComment {
            return $operation->createResponse($response);
        });
    }
}
