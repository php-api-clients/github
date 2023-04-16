<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Patch;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema\Project;
use ApiClients\Client\GitHub\Schema\ProjectCard;
use ApiClients\Client\GitHub\Schema\ProjectColumn;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;

use function array_key_exists;

final class Projects
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

    public function updateColumn(array $params)
    {
        $arguments = [];
        if (array_key_exists('column_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: column_id');
        }

        $arguments['column_id'] = $params['column_id'];
        unset($params['column_id']);
        if (array_key_exists(Hydrator\Operation\Projects\Columns\CbColumnIdRcb::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Projects\Columns\CbColumnIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀CbColumnIdRcb();
        }

        $operation = new Operation\Projects\UpdateColumn($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Projects\Columns\CbColumnIdRcb::class], $arguments['column_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ProjectColumn {
            return $operation->createResponse($response);
        });
    }

    public function update(array $params)
    {
        $arguments = [];
        if (array_key_exists('project_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: project_id');
        }

        $arguments['project_id'] = $params['project_id'];
        unset($params['project_id']);
        if (array_key_exists(Hydrator\Operation\Projects\CbProjectIdRcb::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Projects\CbProjectIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Projects🌀CbProjectIdRcb();
        }

        $operation = new Operation\Projects\Update($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Projects\CbProjectIdRcb::class], $arguments['project_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Project {
            return $operation->createResponse($response);
        });
    }

    public function updateCard(array $params)
    {
        $arguments = [];
        if (array_key_exists('card_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: card_id');
        }

        $arguments['card_id'] = $params['card_id'];
        unset($params['card_id']);
        if (array_key_exists(Hydrator\Operation\Projects\Columns\Cards\CbCardIdRcb::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Projects\Columns\Cards\CbCardIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb();
        }

        $operation = new Operation\Projects\UpdateCard($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Projects\Columns\Cards\CbCardIdRcb::class], $arguments['card_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ProjectCard {
            return $operation->createResponse($response);
        });
    }
}
