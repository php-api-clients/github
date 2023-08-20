<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Put;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\Schema\PullRequestReview;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Nine
{
    private array $router = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return iterable<string>|iterable<Schema\Integration>|iterable<Schema\Team>|iterable<Schema\SimpleUser>| */
    public function call(string $call, array $params, array $pathChunks): iterable|PullRequestReview
    {
        $matched = false;
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
                                                $matched = true;
                                                if (array_key_exists(Router\Put\Repos::class, $this->router) === false) {
                                                    $this->router[Router\Put\Repos::class] = new Router\Put\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                }

                                                return $this->router[Router\Put\Repos::class]->setStatusCheckContexts($params);
                                            }
                                        }
                                    } elseif ($pathChunks[7] === 'restrictions') {
                                        if ($pathChunks[8] === 'apps') {
                                            if ($call === 'PUT /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/apps') {
                                                $matched = true;
                                                if (array_key_exists(Router\Put\Repos::class, $this->router) === false) {
                                                    $this->router[Router\Put\Repos::class] = new Router\Put\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                }

                                                return $this->router[Router\Put\Repos::class]->setAppAccessRestrictions($params);
                                            }
                                        } elseif ($pathChunks[8] === 'teams') {
                                            if ($call === 'PUT /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams') {
                                                $matched = true;
                                                if (array_key_exists(Router\Put\Repos::class, $this->router) === false) {
                                                    $this->router[Router\Put\Repos::class] = new Router\Put\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                }

                                                return $this->router[Router\Put\Repos::class]->setTeamAccessRestrictions($params);
                                            }
                                        } elseif ($pathChunks[8] === 'users') {
                                            if ($call === 'PUT /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/users') {
                                                $matched = true;
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
                                                $matched = true;
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

        if ($matched === false) {
            throw new InvalidArgumentException();
        }
    }
}
