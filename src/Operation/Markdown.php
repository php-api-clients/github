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

final class Markdown
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function render(array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Markdown\Render::class, $this->operator) === false) {
            $this->operator[Operator\Markdown\Render::class] = new Operator\Markdown\Render($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Markdown());
        }

        return $this->operator[Operator\Markdown\Render::class]->call($params);
    }

    public function renderRaw(array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Markdown\RenderRaw::class, $this->operator) === false) {
            $this->operator[Operator\Markdown\RenderRaw::class] = new Operator\Markdown\RenderRaw($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Markdown🌀Raw());
        }

        return $this->operator[Operator\Markdown\RenderRaw::class]->call($params);
    }
}
