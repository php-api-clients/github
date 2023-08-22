<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Post;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\Schema\GistSimple;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Two
{
    private array $router = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return (Schema\GistSimple|array{code: int})|(string */
    public function call(string $call, array $params, array $pathChunks): GistSimple|string|array
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'gists') {
                if ($call === 'POST /gists') {
                    $matched = true;
                    if (array_key_exists(Router\Post\Gists::class, $this->router) === false) {
                        $this->router[Router\Post\Gists::class] = new Router\Post\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Post\Gists::class]->Create($params);
                }
            } elseif ($pathChunks[1] === 'markdown') {
                if ($call === 'POST /markdown') {
                    $matched = true;
                    if (array_key_exists(Router\Post\Markdown::class, $this->router) === false) {
                        $this->router[Router\Post\Markdown::class] = new Router\Post\Markdown($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Post\Markdown::class]->Render($params);
                }
            }
        }

        if ($matched === false) {
            throw new InvalidArgumentException();
        }
    }
}
