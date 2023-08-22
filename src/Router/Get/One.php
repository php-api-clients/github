<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\Schema\Root;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class One
{
    private array $router = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    public function call(string $call, array $params, array $pathChunks): Root|array
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($call === 'GET /') {
                $matched = true;
                if (array_key_exists(Router\Get\Meta::class, $this->router) === false) {
                    $this->router[Router\Get\Meta::class] = new Router\Get\Meta($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                }

                return $this->router[Router\Get\Meta::class]->Root($params);
            }
        }

        if ($matched === false) {
            throw new InvalidArgumentException();
        }
    }
}
