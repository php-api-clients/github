<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

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
        $operator = new Operator\CodesOfConduct\GetAllCodesOfConduct($this->browser, $this->authentication);

        return $operator->call();
    }

    public function getConductCode(array $params)
    {
        $arguments = [];
        if (array_key_exists('key', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: key');
        }

        $arguments['key'] = $params['key'];
        unset($params['key']);
        if (array_key_exists(Hydrator\Operation\CodesOfConduct\Key::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\CodesOfConduct\Key::class] = $this->hydrators->getObjectMapperOperation🌀CodesOfConduct🌀Key();
        }

        $operator = new Operator\CodesOfConduct\GetConductCode($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\CodesOfConduct\Key::class]);

        return $operator->call($arguments['key']);
    }
}
