<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Router\Patch;

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
    public function updateColumn(array $params)
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
        $operation = new Operation\Projects\UpdateColumn($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Projects\Columns\CbColumnIdRcb::class], $arguments['column_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\ProjectColumn {
            return $operation->createResponse($response);
        });
    }
    public function update(array $params)
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
        $operation = new Operation\Projects\Update($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Projects\CbProjectIdRcb::class], $arguments['project_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Project {
            return $operation->createResponse($response);
        });
    }
    public function updateCard(array $params)
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
        $operation = new Operation\Projects\UpdateCard($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Projects\Columns\Cards\CbCardIdRcb::class], $arguments['card_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\ProjectCard {
            return $operation->createResponse($response);
        });
    }
}
