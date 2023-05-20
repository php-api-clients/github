<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Put;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Eight
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
            if ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'required_workflows') {
                            if ($pathChunks[5] === '{required_workflow_id}') {
                                if ($pathChunks[6] === 'repositories') {
                                    if ($pathChunks[7] === '{repository_id}') {
                                        if ($call === 'PUT /orgs/{org}/actions/required_workflows/{required_workflow_id}/repositories/{repository_id}') {
                                            if (array_key_exists(Router\Put\Actions::class, $this->router) === false) {
                                                $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Put\Actions::class]->addSelectedRepoToRequiredWorkflow($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === '{secret_name}') {
                                if ($pathChunks[6] === 'repositories') {
                                    if ($pathChunks[7] === '{repository_id}') {
                                        if ($call === 'PUT /orgs/{org}/actions/secrets/{secret_name}/repositories/{repository_id}') {
                                            if (array_key_exists(Router\Put\Actions::class, $this->router) === false) {
                                                $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Put\Actions::class]->addSelectedRepoToOrgSecret($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'variables') {
                            if ($pathChunks[5] === '{name}') {
                                if ($pathChunks[6] === 'repositories') {
                                    if ($pathChunks[7] === '{repository_id}') {
                                        if ($call === 'PUT /orgs/{org}/actions/variables/{name}/repositories/{repository_id}') {
                                            if (array_key_exists(Router\Put\Actions::class, $this->router) === false) {
                                                $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Put\Actions::class]->addSelectedRepoToOrgVariable($params);
                                        }
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'codespaces') {
                        if ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === '{secret_name}') {
                                if ($pathChunks[6] === 'repositories') {
                                    if ($pathChunks[7] === '{repository_id}') {
                                        if ($call === 'PUT /orgs/{org}/codespaces/secrets/{secret_name}/repositories/{repository_id}') {
                                            if (array_key_exists(Router\Put\Codespaces::class, $this->router) === false) {
                                                $this->router[Router\Put\Codespaces::class] = new Router\Put\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Put\Codespaces::class]->addSelectedRepoToOrgSecret($params);
                                        }
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'dependabot') {
                        if ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === '{secret_name}') {
                                if ($pathChunks[6] === 'repositories') {
                                    if ($pathChunks[7] === '{repository_id}') {
                                        if ($call === 'PUT /orgs/{org}/dependabot/secrets/{secret_name}/repositories/{repository_id}') {
                                            if (array_key_exists(Router\Put\Dependabot::class, $this->router) === false) {
                                                $this->router[Router\Put\Dependabot::class] = new Router\Put\Dependabot($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Put\Dependabot::class]->addSelectedRepoToOrgSecret($params);
                                        }
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($pathChunks[5] === 'repos') {
                                if ($pathChunks[6] === '{owner}') {
                                    if ($pathChunks[7] === '{repo}') {
                                        if ($call === 'PUT /orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}') {
                                            if (array_key_exists(Router\Put\Teams::class, $this->router) === false) {
                                                $this->router[Router\Put\Teams::class] = new Router\Put\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Put\Teams::class]->addOrUpdateRepoPermissionsInOrg($params);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'actions') {
                            if ($pathChunks[5] === 'oidc') {
                                if ($pathChunks[6] === 'customization') {
                                    if ($pathChunks[7] === 'sub') {
                                        if ($call === 'PUT /repos/{owner}/{repo}/actions/oidc/customization/sub') {
                                            if (array_key_exists(Router\Put\Actions::class, $this->router) === false) {
                                                $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Put\Actions::class]->setCustomOidcSubClaimForRepo($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === 'runners') {
                                if ($pathChunks[6] === '{runner_id}') {
                                    if ($pathChunks[7] === 'labels') {
                                        if ($call === 'PUT /repos/{owner}/{repo}/actions/runners/{runner_id}/labels') {
                                            if (array_key_exists(Router\Put\Actions::class, $this->router) === false) {
                                                $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Put\Actions::class]->setCustomLabelsForSelfHostedRunnerForRepo($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === 'workflows') {
                                if ($pathChunks[6] === '{workflow_id}') {
                                    if ($pathChunks[7] === 'disable') {
                                        if ($call === 'PUT /repos/{owner}/{repo}/actions/workflows/{workflow_id}/disable') {
                                            if (array_key_exists(Router\Put\Actions::class, $this->router) === false) {
                                                $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Put\Actions::class]->disableWorkflow($params);
                                        }
                                    } elseif ($pathChunks[7] === 'enable') {
                                        if ($call === 'PUT /repos/{owner}/{repo}/actions/workflows/{workflow_id}/enable') {
                                            if (array_key_exists(Router\Put\Actions::class, $this->router) === false) {
                                                $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Put\Actions::class]->enableWorkflow($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'environments') {
                            if ($pathChunks[5] === '{environment_name}') {
                                if ($pathChunks[6] === 'deployment-branch-policies') {
                                    if ($pathChunks[7] === '{branch_policy_id}') {
                                        if ($call === 'PUT /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies/{branch_policy_id}') {
                                            if (array_key_exists(Router\Put\Repos::class, $this->router) === false) {
                                                $this->router[Router\Put\Repos::class] = new Router\Put\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Put\Repos::class]->updateDeploymentBranchPolicy($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === '{pull_number}') {
                                if ($pathChunks[6] === 'reviews') {
                                    if ($pathChunks[7] === '{review_id}') {
                                        if ($call === 'PUT /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}') {
                                            if (array_key_exists(Router\Put\Pulls::class, $this->router) === false) {
                                                $this->router[Router\Put\Pulls::class] = new Router\Put\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Put\Pulls::class]->updateReview($params);
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
