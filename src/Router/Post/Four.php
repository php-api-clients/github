<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Post;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Four
{
    private array $router = [];
    private readonly SchemaValidator $requestSchemaValidator;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrators $hydrators;
    private readonly Browser $browser;
    private readonly AuthenticationInterface $authentication;

    public function __construct(SchemaValidator $requestSchemaValidator, SchemaValidator $responseSchemaValidator, Hydrators $hydrators, Browser $browser, AuthenticationInterface $authentication)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrators               = $hydrators;
        $this->browser                 = $browser;
        $this->authentication          = $authentication;
    }

    public function call(string $call, array $params, array $pathChunks)
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'app-manifests') {
                if ($pathChunks[2] === '{code}') {
                    if ($pathChunks[3] === 'conversions') {
                        if ($call === 'POST /app-manifests/{code}/conversions') {
                            if (array_key_exists(Router\Post\Apps::class, $this->router) === false) {
                                $this->router[Router\Post\Apps::class] = new Router\Post\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Apps::class]->createFromManifest($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'applications') {
                if ($pathChunks[2] === '{client_id}') {
                    if ($pathChunks[3] === 'token') {
                        if ($call === 'POST /applications/{client_id}/token') {
                            if (array_key_exists(Router\Post\Apps::class, $this->router) === false) {
                                $this->router[Router\Post\Apps::class] = new Router\Post\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Apps::class]->checkToken($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($pathChunks[3] === 'comments') {
                        if ($call === 'POST /gists/{gist_id}/comments') {
                            if (array_key_exists(Router\Post\Gists::class, $this->router) === false) {
                                $this->router[Router\Post\Gists::class] = new Router\Post\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Gists::class]->createComment($params);
                        }
                    } elseif ($pathChunks[3] === 'forks') {
                        if ($call === 'POST /gists/{gist_id}/forks') {
                            if (array_key_exists(Router\Post\Gists::class, $this->router) === false) {
                                $this->router[Router\Post\Gists::class] = new Router\Post\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Gists::class]->fork($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'organizations') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'personal-access-token-requests') {
                        if ($call === 'POST /organizations/{org}/personal-access-token-requests') {
                            if (array_key_exists(Router\Post\Orgs::class, $this->router) === false) {
                                $this->router[Router\Post\Orgs::class] = new Router\Post\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Orgs::class]->reviewPatGrantRequestsInBulk($params);
                        }
                    } elseif ($pathChunks[3] === 'personal-access-tokens') {
                        if ($call === 'POST /organizations/{org}/personal-access-tokens') {
                            if (array_key_exists(Router\Post\Orgs::class, $this->router) === false) {
                                $this->router[Router\Post\Orgs::class] = new Router\Post\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Orgs::class]->updatePatAccesses($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'hooks') {
                        if ($call === 'POST /orgs/{org}/hooks') {
                            if (array_key_exists(Router\Post\Orgs::class, $this->router) === false) {
                                $this->router[Router\Post\Orgs::class] = new Router\Post\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Orgs::class]->createWebhook($params);
                        }
                    } elseif ($pathChunks[3] === 'invitations') {
                        if ($call === 'POST /orgs/{org}/invitations') {
                            if (array_key_exists(Router\Post\Orgs::class, $this->router) === false) {
                                $this->router[Router\Post\Orgs::class] = new Router\Post\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Orgs::class]->createInvitation($params);
                        }
                    } elseif ($pathChunks[3] === 'migrations') {
                        if ($call === 'POST /orgs/{org}/migrations') {
                            if (array_key_exists(Router\Post\Migrations::class, $this->router) === false) {
                                $this->router[Router\Post\Migrations::class] = new Router\Post\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Migrations::class]->startForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($call === 'POST /orgs/{org}/projects') {
                            if (array_key_exists(Router\Post\Projects::class, $this->router) === false) {
                                $this->router[Router\Post\Projects::class] = new Router\Post\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Projects::class]->createForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'POST /orgs/{org}/repos') {
                            if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Repos::class]->createInOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'rulesets') {
                        if ($call === 'POST /orgs/{org}/rulesets') {
                            if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Repos::class]->createOrgRuleset($params);
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($call === 'POST /orgs/{org}/teams') {
                            if (array_key_exists(Router\Post\Teams::class, $this->router) === false) {
                                $this->router[Router\Post\Teams::class] = new Router\Post\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Teams::class]->create($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === '{project_id}') {
                    if ($pathChunks[3] === 'columns') {
                        if ($call === 'POST /projects/{project_id}/columns') {
                            if (array_key_exists(Router\Post\Projects::class, $this->router) === false) {
                                $this->router[Router\Post\Projects::class] = new Router\Post\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Projects::class]->createColumn($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'discussions') {
                        if ($call === 'POST /teams/{team_id}/discussions') {
                            if (array_key_exists(Router\Post\Teams::class, $this->router) === false) {
                                $this->router[Router\Post\Teams::class] = new Router\Post\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Teams::class]->createDiscussionLegacy($params);
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
