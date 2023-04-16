<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema\CodeOfConduct;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function array_key_exists;

final class CodesOfConduct
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

    public function getAllCodesOfConduct(array $params)
    {
        $arguments = [];
        if (array_key_exists(Hydrator\Operation\CodesOfConduct::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\CodesOfConduct::class] = $this->hydrators->getObjectMapperOperation🌀CodesOfConduct();
        }

        $operation = new Operation\CodesOfConduct\GetAllCodesOfConduct($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\CodesOfConduct::class]);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable {
            return $operation->createResponse($response);
        });
    }

    public function getConductCode(array $params)
    {
        $arguments = [];
        if (array_key_exists('key', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: key');
        }

        $arguments['key'] = $params['key'];
        unset($params['key']);
        if (array_key_exists(Hydrator\Operation\CodesOfConduct\CbKeyRcb::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\CodesOfConduct\CbKeyRcb::class] = $this->hydrators->getObjectMapperOperation🌀CodesOfConduct🌀CbKeyRcb();
        }

        $operation = new Operation\CodesOfConduct\GetConductCode($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\CodesOfConduct\CbKeyRcb::class], $arguments['key']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CodeOfConduct {
            return $operation->createResponse($response);
        });
    }
}
