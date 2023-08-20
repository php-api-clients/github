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

final class Gitignore
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function getAllTemplates(): Schema\Operations\Gitignore\GetAllTemplates\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Gitignore\GetAllTemplates::class, $this->operator) === false) {
            $this->operator[Operator\Gitignore\GetAllTemplates::class] = new Operator\Gitignore\GetAllTemplates($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gitignore🌀Templates());
        }

        return $this->operator[Operator\Gitignore\GetAllTemplates::class]->call();
    }

    public function getTemplate(string $name): Schema\GitignoreTemplate
    {
        if (array_key_exists(Operator\Gitignore\GetTemplate::class, $this->operator) === false) {
            $this->operator[Operator\Gitignore\GetTemplate::class] = new Operator\Gitignore\GetTemplate($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gitignore🌀Templates🌀Name());
        }

        return $this->operator[Operator\Gitignore\GetTemplate::class]->call($name);
    }
}
