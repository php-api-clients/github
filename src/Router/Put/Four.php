<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Put;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\Schema\InteractionLimitResponse;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Four
{
    private array $router = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return array{code: int}| */
    public function call(string $call, array $params, array $pathChunks): InteractionLimitResponse|array
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($pathChunks[3] === 'star') {
                        if ($call === 'PUT /gists/{gist_id}/star') {
                            $matched = true;
                            if (array_key_exists(Router\Put\Gists::class, $this->router) === false) {
                                $this->router[Router\Put\Gists::class] = new Router\Put\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Put\Gists::class]->Star($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'interaction-limits') {
                        if ($call === 'PUT /orgs/{org}/interaction-limits') {
                            $matched = true;
                            if (array_key_exists(Router\Put\Interactions::class, $this->router) === false) {
                                $this->router[Router\Put\Interactions::class] = new Router\Put\Interactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Put\Interactions::class]->SetRestrictionsForOrg($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'blocks') {
                    if ($pathChunks[3] === '{username}') {
                        if ($call === 'PUT /user/blocks/{username}') {
                            $matched = true;
                            if (array_key_exists(Router\Put\Users::class, $this->router) === false) {
                                $this->router[Router\Put\Users::class] = new Router\Put\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Put\Users::class]->Block($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'following') {
                    if ($pathChunks[3] === '{username}') {
                        if ($call === 'PUT /user/following/{username}') {
                            $matched = true;
                            if (array_key_exists(Router\Put\Users::class, $this->router) === false) {
                                $this->router[Router\Put\Users::class] = new Router\Put\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Put\Users::class]->Follow($params);
                        }
                    }
                }
            }
        }

        if ($matched === false) {
            throw new InvalidArgumentException();
        }
    }
}
