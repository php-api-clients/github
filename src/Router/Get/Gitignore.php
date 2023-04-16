<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema\GitignoreTemplate;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function array_key_exists;

final class Gitignore
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

    public function getTemplate(array $params)
    {
        $arguments = [];
        if (array_key_exists('name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: name');
        }

        $arguments['name'] = $params['name'];
        unset($params['name']);
        if (array_key_exists(Hydrator\Operation\Gitignore\Templates\CbNameRcb::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Gitignore\Templates\CbNameRcb::class] = $this->hydrators->getObjectMapperOperation🌀Gitignore🌀Templates🌀CbNameRcb();
        }

        $operation = new Operation\Gitignore\GetTemplate($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gitignore\Templates\CbNameRcb::class], $arguments['name']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): GitignoreTemplate {
            return $operation->createResponse($response);
        });
    }

    public function getAllTemplates(array $params)
    {
        $arguments = [];
        if (array_key_exists(Hydrator\Operation\Gitignore\Templates::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Gitignore\Templates::class] = $this->hydrators->getObjectMapperOperation🌀Gitignore🌀Templates();
        }

        $operation = new Operation\Gitignore\GetAllTemplates($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gitignore\Templates::class]);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable {
            return $operation->createResponse($response);
        });
    }
}
