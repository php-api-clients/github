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
final class Projects
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
    public function listForOrg(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('state', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: state');
        }
        $arguments['state'] = $params['state'];
        unset($params['state']);
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
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Projects::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Projects::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Projects();
        }
        $operation = new Operation\Projects\ListForOrg($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Projects::class], $arguments['org'], $arguments['state'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function getColumn(array $params)
    {
        $arguments = array();
        if (array_key_exists('column_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: column_id');
        }
        $arguments['column_id'] = $params['column_id'];
        unset($params['column_id']);
        if (\array_key_exists(Hydrator\Operation\Projects\Columns\CbColumnIdRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Projects\Columns\CbColumnIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀CbColumnIdRcb();
        }
        $operation = new Operation\Projects\GetColumn($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Projects\Columns\CbColumnIdRcb::class], $arguments['column_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\ProjectColumn {
            return $operation->createResponse($response);
        });
    }
    public function listCollaborators(array $params)
    {
        $arguments = array();
        if (array_key_exists('project_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: project_id');
        }
        $arguments['project_id'] = $params['project_id'];
        unset($params['project_id']);
        if (array_key_exists('affiliation', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: affiliation');
        }
        $arguments['affiliation'] = $params['affiliation'];
        unset($params['affiliation']);
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
        if (\array_key_exists(Hydrator\Operation\Projects\CbProjectIdRcb\Collaborators::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Projects\CbProjectIdRcb\Collaborators::class] = $this->hydrators->getObjectMapperOperation🌀Projects🌀CbProjectIdRcb🌀Collaborators();
        }
        $operation = new Operation\Projects\ListCollaborators($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Projects\CbProjectIdRcb\Collaborators::class], $arguments['project_id'], $arguments['affiliation'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function listColumns(array $params)
    {
        $arguments = array();
        if (array_key_exists('project_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: project_id');
        }
        $arguments['project_id'] = $params['project_id'];
        unset($params['project_id']);
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
        if (\array_key_exists(Hydrator\Operation\Projects\CbProjectIdRcb\Columns::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Projects\CbProjectIdRcb\Columns::class] = $this->hydrators->getObjectMapperOperation🌀Projects🌀CbProjectIdRcb🌀Columns();
        }
        $operation = new Operation\Projects\ListColumns($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Projects\CbProjectIdRcb\Columns::class], $arguments['project_id'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function listForUser(array $params)
    {
        $arguments = array();
        if (array_key_exists('username', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: username');
        }
        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists('state', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: state');
        }
        $arguments['state'] = $params['state'];
        unset($params['state']);
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
        if (\array_key_exists(Hydrator\Operation\Users\CbUsernameRcb\Projects::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Users\CbUsernameRcb\Projects::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Projects();
        }
        $operation = new Operation\Projects\ListForUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\CbUsernameRcb\Projects::class], $arguments['username'], $arguments['state'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function getCard(array $params)
    {
        $arguments = array();
        if (array_key_exists('card_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: card_id');
        }
        $arguments['card_id'] = $params['card_id'];
        unset($params['card_id']);
        if (\array_key_exists(Hydrator\Operation\Projects\Columns\Cards\CbCardIdRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Projects\Columns\Cards\CbCardIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb();
        }
        $operation = new Operation\Projects\GetCard($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Projects\Columns\Cards\CbCardIdRcb::class], $arguments['card_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\ProjectCard {
            return $operation->createResponse($response);
        });
    }
    public function listCards(array $params)
    {
        $arguments = array();
        if (array_key_exists('column_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: column_id');
        }
        $arguments['column_id'] = $params['column_id'];
        unset($params['column_id']);
        if (array_key_exists('archived_state', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: archived_state');
        }
        $arguments['archived_state'] = $params['archived_state'];
        unset($params['archived_state']);
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
        if (\array_key_exists(Hydrator\Operation\Projects\Columns\CbColumnIdRcb\Cards::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Projects\Columns\CbColumnIdRcb\Cards::class] = $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀CbColumnIdRcb🌀Cards();
        }
        $operation = new Operation\Projects\ListCards($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Projects\Columns\CbColumnIdRcb\Cards::class], $arguments['column_id'], $arguments['archived_state'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function listForRepo(array $params)
    {
        $arguments = array();
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
        if (array_key_exists('state', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: state');
        }
        $arguments['state'] = $params['state'];
        unset($params['state']);
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
        if (\array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Projects::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Projects::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Projects();
        }
        $operation = new Operation\Projects\ListForRepo($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Projects::class], $arguments['owner'], $arguments['repo'], $arguments['state'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function get(array $params)
    {
        $arguments = array();
        if (array_key_exists('project_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: project_id');
        }
        $arguments['project_id'] = $params['project_id'];
        unset($params['project_id']);
        if (\array_key_exists(Hydrator\Operation\Projects\CbProjectIdRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Projects\CbProjectIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Projects🌀CbProjectIdRcb();
        }
        $operation = new Operation\Projects\Get($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Projects\CbProjectIdRcb::class], $arguments['project_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Project {
            return $operation->createResponse($response);
        });
    }
    public function getPermissionForUser(array $params)
    {
        $arguments = array();
        if (array_key_exists('project_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: project_id');
        }
        $arguments['project_id'] = $params['project_id'];
        unset($params['project_id']);
        if (array_key_exists('username', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: username');
        }
        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (\array_key_exists(Hydrator\Operation\Projects\CbProjectIdRcb\Collaborators\CbUsernameRcb\Permission::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Projects\CbProjectIdRcb\Collaborators\CbUsernameRcb\Permission::class] = $this->hydrators->getObjectMapperOperation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb🌀Permission();
        }
        $operation = new Operation\Projects\GetPermissionForUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Projects\CbProjectIdRcb\Collaborators\CbUsernameRcb\Permission::class], $arguments['project_id'], $arguments['username']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\ProjectCollaboratorPermission {
            return $operation->createResponse($response);
        });
    }
}
