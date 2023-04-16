<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\ChunkSize\Put;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Cc9
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
            if ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'branches') {
                            if ($pathChunks[5] === '{branch}') {
                                if ($pathChunks[6] === 'protection') {
                                    if ($pathChunks[7] === 'required_status_checks') {
                                        if ($pathChunks[8] === 'contexts') {
                                            if ($call === 'PUT /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks/contexts') {
                                                if (array_key_exists(Router\Put\Repos::class, $this->router) === false) {
                                                    $this->router[Router\Put\Repos::class] = new Router\Put\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                }

                                                return $this->router[Router\Put\Repos::class]->setStatusCheckContexts($params);
                                            }
                                        }
                                    } elseif ($pathChunks[7] === 'restrictions') {
                                        if ($pathChunks[8] === 'apps') {
                                            if ($call === 'PUT /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/apps') {
                                                if (array_key_exists(Router\Put\Repos::class, $this->router) === false) {
                                                    $this->router[Router\Put\Repos::class] = new Router\Put\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                }

                                                return $this->router[Router\Put\Repos::class]->setAppAccessRestrictions($params);
                                            }
                                        } elseif ($pathChunks[8] === 'teams') {
                                            if ($call === 'PUT /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams') {
                                                if (array_key_exists(Router\Put\Repos::class, $this->router) === false) {
                                                    $this->router[Router\Put\Repos::class] = new Router\Put\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                }

                                                return $this->router[Router\Put\Repos::class]->setTeamAccessRestrictions($params);
                                            }
                                        } elseif ($pathChunks[8] === 'users') {
                                            if ($call === 'PUT /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/users') {
                                                if (array_key_exists(Router\Put\Repos::class, $this->router) === false) {
                                                    $this->router[Router\Put\Repos::class] = new Router\Put\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                }

                                                return $this->router[Router\Put\Repos::class]->setUserAccessRestrictions($params);
                                            }
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === '{pull_number}') {
                                if ($pathChunks[6] === 'reviews') {
                                    if ($pathChunks[7] === '{review_id}') {
                                        if ($pathChunks[8] === 'dismissals') {
                                            if ($call === 'PUT /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/dismissals') {
                                                if (array_key_exists(Router\Put\Pulls::class, $this->router) === false) {
                                                    $this->router[Router\Put\Pulls::class] = new Router\Put\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                }

                                                return $this->router[Router\Put\Pulls::class]->dismissReview($params);
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
