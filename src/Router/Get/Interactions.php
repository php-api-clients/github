<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema\Operation\Interactions\GetRestrictionsForOrg\Response\Applicationjson\H200;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;

use function array_key_exists;

final class Interactions
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

    public function getRestrictionsForOrg(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\InteractionLimits::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\InteractionLimits::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀InteractionLimits();
        }

        $operation = new Operation\Interactions\GetRestrictionsForOrg($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\InteractionLimits::class], $arguments['org']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): H200 {
            return $operation->createResponse($response);
        });
    }

    public function getRestrictionsForRepo(array $params)
    {
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
        if (array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\InteractionLimits::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\InteractionLimits::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀InteractionLimits();
        }

        $operation = new Operation\Interactions\GetRestrictionsForRepo($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\InteractionLimits::class], $arguments['owner'], $arguments['repo']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): \ApiClients\Client\GitHub\Schema\Operation\Interactions\GetRestrictionsForRepo\Response\Applicationjson\H200 {
            return $operation->createResponse($response);
        });
    }

    public function getRestrictionsForAuthenticatedUser(array $params)
    {
        $arguments = [];
        if (array_key_exists(Hydrator\Operation\User\InteractionLimits::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\InteractionLimits::class] = $this->hydrators->getObjectMapperOperation🌀User🌀InteractionLimits();
        }

        $operation = new Operation\Interactions\GetRestrictionsForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\InteractionLimits::class]);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): \ApiClients\Client\GitHub\Schema\Operation\Interactions\GetRestrictionsForAuthenticatedUser\Response\Applicationjson\H200 {
            return $operation->createResponse($response);
        });
    }
}
