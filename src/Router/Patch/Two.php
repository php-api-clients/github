<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Patch;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\PrivateUser;
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

    /** @return (Schema\PrivateUser|array{code: int}) */
    public function call(string $call, array $params, array $pathChunks): PrivateUser|array
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'user') {
                if ($call === 'PATCH /user') {
                    $matched = true;
                    if (array_key_exists(Router\Patch\Users::class, $this->router) === false) {
                        $this->router[Router\Patch\Users::class] = new Router\Patch\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                    }

                    return $this->router[Router\Patch\Users::class]->updateAuthenticated($params);
                }
            }
        }

        if ($matched === false) {
            throw new InvalidArgumentException();
        }
    }
}
