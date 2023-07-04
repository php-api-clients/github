<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Post;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Markdown
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Hydrators $hydrators, private readonly Browser $browser, private readonly AuthenticationInterface $authentication)
    {
    }

    public function render(array $params)
    {
        if (array_key_exists(Hydrator\Operation\Markdown::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Markdown::class] = $this->hydrators->getObjectMapperOperation🌀Markdown();
        }

        $operator = new Operator\Markdown\Render($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Markdown::class]);

        return $operator->call($params);
    }

    public function renderRaw(array $params)
    {
        if (array_key_exists(Hydrator\Operation\Markdown\Raw::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Markdown\Raw::class] = $this->hydrators->getObjectMapperOperation🌀Markdown🌀Raw();
        }

        $operator = new Operator\Markdown\RenderRaw($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Markdown\Raw::class]);

        return $operator->call($params);
    }
}
