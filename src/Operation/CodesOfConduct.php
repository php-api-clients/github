<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;
use React\Promise\PromiseInterface;

use function array_key_exists;

final class CodesOfConduct
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function getAllCodesOfConduct(): PromiseInterface
    {
        if (array_key_exists(Operator\CodesOfConduct\GetAllCodesOfConduct::class, $this->operator) === false) {
            $this->operator[Operator\CodesOfConduct\GetAllCodesOfConduct::class] = new Operator\CodesOfConduct\GetAllCodesOfConduct($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀CodesOfConduct());
        }

        return $this->operator[Operator\CodesOfConduct\GetAllCodesOfConduct::class]->call();
    }

    public function getConductCode(string $key): PromiseInterface
    {
        if (array_key_exists(Operator\CodesOfConduct\GetConductCode::class, $this->operator) === false) {
            $this->operator[Operator\CodesOfConduct\GetConductCode::class] = new Operator\CodesOfConduct\GetConductCode($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀CodesOfConduct🌀Key());
        }

        return $this->operator[Operator\CodesOfConduct\GetConductCode::class]->call($key);
    }
}
