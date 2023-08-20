<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Emojis
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function get(): Schema\Operations\Emojis\Get\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Emojis\Get::class, $this->operator) === false) {
            $this->operator[Operator\Emojis\Get::class] = new Operator\Emojis\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Emojis());
        }

        return $this->operator[Operator\Emojis\Get::class]->call();
    }
}
