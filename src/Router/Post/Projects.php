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
    public function createForOrg(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Projects::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Projects::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Projects();
        }
        $operation = new Operation\Projects\CreateForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Projects::class], $arguments['org']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Project {
            return $operation->createResponse($response);
        });
    }
    public function createColumn(array $params)
    {
        $arguments = array();
        if (array_key_exists('project_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: project_id');
        }
        $arguments['project_id'] = $params['project_id'];
        unset($params['project_id']);
        if (\array_key_exists(Hydrator\Operation\Projects\CbProjectIdRcb\Columns::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Projects\CbProjectIdRcb\Columns::class] = $this->hydrators->getObjectMapperOperation🌀Projects🌀CbProjectIdRcb🌀Columns();
        }
        $operation = new Operation\Projects\CreateColumn($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Projects\CbProjectIdRcb\Columns::class], $arguments['project_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\ProjectColumn {
            return $operation->createResponse($response);
        });
    }
    public function moveCard(array $params)
    {
        $arguments = array();
        if (array_key_exists('card_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: card_id');
        }
        $arguments['card_id'] = $params['card_id'];
        unset($params['card_id']);
        if (\array_key_exists(Hydrator\Operation\Projects\Columns\Cards\CbCardIdRcb\Moves::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Projects\Columns\Cards\CbCardIdRcb\Moves::class] = $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb🌀Moves();
        }
        $operation = new Operation\Projects\MoveCard($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Projects\Columns\Cards\CbCardIdRcb\Moves::class], $arguments['card_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Operation\Projects\MoveCard\Response\Applicationjson\H201 {
            return $operation->createResponse($response);
        });
    }
    public function createCard(array $params)
    {
        $arguments = array();
        if (array_key_exists('column_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: column_id');
        }
        $arguments['column_id'] = $params['column_id'];
        unset($params['column_id']);
        if (\array_key_exists(Hydrator\Operation\Projects\Columns\CbColumnIdRcb\Cards::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Projects\Columns\CbColumnIdRcb\Cards::class] = $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀CbColumnIdRcb🌀Cards();
        }
        $operation = new Operation\Projects\CreateCard($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Projects\Columns\CbColumnIdRcb\Cards::class], $arguments['column_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\ProjectCard {
            return $operation->createResponse($response);
        });
    }
    public function moveColumn(array $params)
    {
        $arguments = array();
        if (array_key_exists('column_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: column_id');
        }
        $arguments['column_id'] = $params['column_id'];
        unset($params['column_id']);
        if (\array_key_exists(Hydrator\Operation\Projects\Columns\CbColumnIdRcb\Moves::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Projects\Columns\CbColumnIdRcb\Moves::class] = $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀CbColumnIdRcb🌀Moves();
        }
        $operation = new Operation\Projects\MoveColumn($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Projects\Columns\CbColumnIdRcb\Moves::class], $arguments['column_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Operation\Projects\MoveColumn\Response\Applicationjson\H201 {
            return $operation->createResponse($response);
        });
    }
    public function createForRepo(array $params)
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
        if (\array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Projects::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Projects::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Projects();
        }
        $operation = new Operation\Projects\CreateForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Projects::class], $arguments['owner'], $arguments['repo']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Project {
            return $operation->createResponse($response);
        });
    }
    public function createForAuthenticatedUser(array $params)
    {
        $arguments = array();
        if (\array_key_exists(Hydrator\Operation\User\Projects::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\User\Projects::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Projects();
        }
        $operation = new Operation\Projects\CreateForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Projects::class]);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Project {
            return $operation->createResponse($response);
        });
    }
}
