<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Delete;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\Schema\Operations\Orgs\Delete\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Three
{
    private array $router = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return array{code: int}| */
    public function call(string $call, array $params, array $pathChunks): Json|array
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($call === 'DELETE /gists/{gist_id}') {
                        $matched = true;
                        if (array_key_exists(Router\Delete\Gists::class, $this->router) === false) {
                            $this->router[Router\Delete\Gists::class] = new Router\Delete\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Delete\Gists::class]->delete($params);
                    }
                }
            } elseif ($pathChunks[1] === 'installation') {
                if ($pathChunks[2] === 'token') {
                    if ($call === 'DELETE /installation/token') {
                        $matched = true;
                        if (array_key_exists(Router\Delete\Apps::class, $this->router) === false) {
                            $this->router[Router\Delete\Apps::class] = new Router\Delete\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Delete\Apps::class]->revokeInstallationAccessToken($params);
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($call === 'DELETE /orgs/{org}') {
                        $matched = true;
                        if (array_key_exists(Router\Delete\Orgs::class, $this->router) === false) {
                            $this->router[Router\Delete\Orgs::class] = new Router\Delete\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Delete\Orgs::class]->delete($params);
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === '{project_id}') {
                    if ($call === 'DELETE /projects/{project_id}') {
                        $matched = true;
                        if (array_key_exists(Router\Delete\Projects::class, $this->router) === false) {
                            $this->router[Router\Delete\Projects::class] = new Router\Delete\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Delete\Projects::class]->delete($params);
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($call === 'DELETE /teams/{team_id}') {
                        $matched = true;
                        if (array_key_exists(Router\Delete\Teams::class, $this->router) === false) {
                            $this->router[Router\Delete\Teams::class] = new Router\Delete\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Delete\Teams::class]->deleteLegacy($params);
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'emails') {
                    if ($call === 'DELETE /user/emails') {
                        $matched = true;
                        if (array_key_exists(Router\Delete\Users::class, $this->router) === false) {
                            $this->router[Router\Delete\Users::class] = new Router\Delete\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Delete\Users::class]->deleteEmailForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'interaction-limits') {
                    if ($call === 'DELETE /user/interaction-limits') {
                        $matched = true;
                        if (array_key_exists(Router\Delete\Interactions::class, $this->router) === false) {
                            $this->router[Router\Delete\Interactions::class] = new Router\Delete\Interactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Delete\Interactions::class]->removeRestrictionsForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'social_accounts') {
                    if ($call === 'DELETE /user/social_accounts') {
                        $matched = true;
                        if (array_key_exists(Router\Delete\Users::class, $this->router) === false) {
                            $this->router[Router\Delete\Users::class] = new Router\Delete\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Delete\Users::class]->deleteSocialAccountForAuthenticatedUser($params);
                    }
                }
            }
        }

        if ($matched === false) {
            throw new InvalidArgumentException();
        }
    }
}
