<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\ChunkSize\Put;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final class Cc7
{
    private array $router = array();
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\GitHub\Hydrators $hydrators;
    private readonly \React\Http\Browser $browser;
    private readonly \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\GitHub\Hydrators $hydrators, \React\Http\Browser $browser, \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrators = $hydrators;
        $this->browser = $browser;
        $this->authentication = $authentication;
    }
    public function call(string $call, array $params, array $pathChunks)
    {
        if ($pathChunks[0] == '') {
            if ($pathChunks[1] == 'orgs') {
                if ($pathChunks[2] == '{org}') {
                    if ($pathChunks[3] == 'actions') {
                        if ($pathChunks[4] == 'oidc') {
                            if ($pathChunks[5] == 'customization') {
                                if ($pathChunks[6] == 'sub') {
                                    if ($call == 'PUT /orgs/{org}/actions/oidc/customization/sub') {
                                        if (\array_key_exists(Router\Put\Oidc::class, $this->router) == false) {
                                            $this->router[Router\Put\Oidc::class] = new Router\Put\Oidc($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Put\Oidc::class]->updateOidcCustomSubTemplateForOrg($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'permissions') {
                            if ($pathChunks[5] == 'repositories') {
                                if ($pathChunks[6] == '{repository_id}') {
                                    if ($call == 'PUT /orgs/{org}/actions/permissions/repositories/{repository_id}') {
                                        if (\array_key_exists(Router\Put\Actions::class, $this->router) == false) {
                                            $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Put\Actions::class]->enableSelectedRepositoryGithubActionsOrganization($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'required_workflows') {
                            if ($pathChunks[5] == '{required_workflow_id}') {
                                if ($pathChunks[6] == 'repositories') {
                                    if ($call == 'PUT /orgs/{org}/actions/required_workflows/{required_workflow_id}/repositories') {
                                        if (\array_key_exists(Router\Put\Actions::class, $this->router) == false) {
                                            $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Put\Actions::class]->setSelectedReposToRequiredWorkflow($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'runners') {
                            if ($pathChunks[5] == '{runner_id}') {
                                if ($pathChunks[6] == 'labels') {
                                    if ($call == 'PUT /orgs/{org}/actions/runners/{runner_id}/labels') {
                                        if (\array_key_exists(Router\Put\Actions::class, $this->router) == false) {
                                            $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Put\Actions::class]->setCustomLabelsForSelfHostedRunnerForOrg($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'secrets') {
                            if ($pathChunks[5] == '{secret_name}') {
                                if ($pathChunks[6] == 'repositories') {
                                    if ($call == 'PUT /orgs/{org}/actions/secrets/{secret_name}/repositories') {
                                        if (\array_key_exists(Router\Put\Actions::class, $this->router) == false) {
                                            $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Put\Actions::class]->setSelectedReposForOrgSecret($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'variables') {
                            if ($pathChunks[5] == '{name}') {
                                if ($pathChunks[6] == 'repositories') {
                                    if ($call == 'PUT /orgs/{org}/actions/variables/{name}/repositories') {
                                        if (\array_key_exists(Router\Put\Actions::class, $this->router) == false) {
                                            $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Put\Actions::class]->setSelectedReposForOrgVariable($params);
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] == 'codespaces') {
                        if ($pathChunks[4] == 'secrets') {
                            if ($pathChunks[5] == '{secret_name}') {
                                if ($pathChunks[6] == 'repositories') {
                                    if ($call == 'PUT /orgs/{org}/codespaces/secrets/{secret_name}/repositories') {
                                        if (\array_key_exists(Router\Put\Codespaces::class, $this->router) == false) {
                                            $this->router[Router\Put\Codespaces::class] = new Router\Put\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Put\Codespaces::class]->setSelectedReposForOrgSecret($params);
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] == 'dependabot') {
                        if ($pathChunks[4] == 'secrets') {
                            if ($pathChunks[5] == '{secret_name}') {
                                if ($pathChunks[6] == 'repositories') {
                                    if ($call == 'PUT /orgs/{org}/dependabot/secrets/{secret_name}/repositories') {
                                        if (\array_key_exists(Router\Put\Dependabot::class, $this->router) == false) {
                                            $this->router[Router\Put\Dependabot::class] = new Router\Put\Dependabot($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Put\Dependabot::class]->setSelectedReposForOrgSecret($params);
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] == 'teams') {
                        if ($pathChunks[4] == '{team_slug}') {
                            if ($pathChunks[5] == 'memberships') {
                                if ($pathChunks[6] == '{username}') {
                                    if ($call == 'PUT /orgs/{org}/teams/{team_slug}/memberships/{username}') {
                                        if (\array_key_exists(Router\Put\Teams::class, $this->router) == false) {
                                            $this->router[Router\Put\Teams::class] = new Router\Put\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Put\Teams::class]->addOrUpdateMembershipForUserInOrg($params);
                                    }
                                }
                            } elseif ($pathChunks[5] == 'projects') {
                                if ($pathChunks[6] == '{project_id}') {
                                    if ($call == 'PUT /orgs/{org}/teams/{team_slug}/projects/{project_id}') {
                                        if (\array_key_exists(Router\Put\Teams::class, $this->router) == false) {
                                            $this->router[Router\Put\Teams::class] = new Router\Put\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Put\Teams::class]->addOrUpdateProjectPermissionsInOrg($params);
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'repos') {
                if ($pathChunks[2] == '{owner}') {
                    if ($pathChunks[3] == '{repo}') {
                        if ($pathChunks[4] == 'actions') {
                            if ($pathChunks[5] == 'permissions') {
                                if ($pathChunks[6] == 'access') {
                                    if ($call == 'PUT /repos/{owner}/{repo}/actions/permissions/access') {
                                        if (\array_key_exists(Router\Put\Actions::class, $this->router) == false) {
                                            $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Put\Actions::class]->setWorkflowAccessToRepository($params);
                                    }
                                } elseif ($pathChunks[6] == 'selected-actions') {
                                    if ($call == 'PUT /repos/{owner}/{repo}/actions/permissions/selected-actions') {
                                        if (\array_key_exists(Router\Put\Actions::class, $this->router) == false) {
                                            $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Put\Actions::class]->setAllowedActionsRepository($params);
                                    }
                                } elseif ($pathChunks[6] == 'workflow') {
                                    if ($call == 'PUT /repos/{owner}/{repo}/actions/permissions/workflow') {
                                        if (\array_key_exists(Router\Put\Actions::class, $this->router) == false) {
                                            $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Put\Actions::class]->setGithubActionsDefaultWorkflowPermissionsRepository($params);
                                    }
                                }
                            } elseif ($pathChunks[5] == 'secrets') {
                                if ($pathChunks[6] == '{secret_name}') {
                                    if ($call == 'PUT /repos/{owner}/{repo}/actions/secrets/{secret_name}') {
                                        if (\array_key_exists(Router\Put\Actions::class, $this->router) == false) {
                                            $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Put\Actions::class]->createOrUpdateRepoSecret($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'branches') {
                            if ($pathChunks[5] == '{branch}') {
                                if ($pathChunks[6] == 'protection') {
                                    if ($call == 'PUT /repos/{owner}/{repo}/branches/{branch}/protection') {
                                        if (\array_key_exists(Router\Put\Repos::class, $this->router) == false) {
                                            $this->router[Router\Put\Repos::class] = new Router\Put\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Put\Repos::class]->updateBranchProtection($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'codespaces') {
                            if ($pathChunks[5] == 'secrets') {
                                if ($pathChunks[6] == '{secret_name}') {
                                    if ($call == 'PUT /repos/{owner}/{repo}/codespaces/secrets/{secret_name}') {
                                        if (\array_key_exists(Router\Put\Codespaces::class, $this->router) == false) {
                                            $this->router[Router\Put\Codespaces::class] = new Router\Put\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Put\Codespaces::class]->createOrUpdateRepoSecret($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'dependabot') {
                            if ($pathChunks[5] == 'secrets') {
                                if ($pathChunks[6] == '{secret_name}') {
                                    if ($call == 'PUT /repos/{owner}/{repo}/dependabot/secrets/{secret_name}') {
                                        if (\array_key_exists(Router\Put\Dependabot::class, $this->router) == false) {
                                            $this->router[Router\Put\Dependabot::class] = new Router\Put\Dependabot($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Put\Dependabot::class]->createOrUpdateRepoSecret($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'issues') {
                            if ($pathChunks[5] == '{issue_number}') {
                                if ($pathChunks[6] == 'labels') {
                                    if ($call == 'PUT /repos/{owner}/{repo}/issues/{issue_number}/labels') {
                                        if (\array_key_exists(Router\Put\Issues::class, $this->router) == false) {
                                            $this->router[Router\Put\Issues::class] = new Router\Put\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Put\Issues::class]->setLabels($params);
                                    }
                                } elseif ($pathChunks[6] == 'lock') {
                                    if ($call == 'PUT /repos/{owner}/{repo}/issues/{issue_number}/lock') {
                                        if (\array_key_exists(Router\Put\Issues::class, $this->router) == false) {
                                            $this->router[Router\Put\Issues::class] = new Router\Put\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Put\Issues::class]->lock($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'pulls') {
                            if ($pathChunks[5] == '{pull_number}') {
                                if ($pathChunks[6] == 'merge') {
                                    if ($call == 'PUT /repos/{owner}/{repo}/pulls/{pull_number}/merge') {
                                        if (\array_key_exists(Router\Put\Pulls::class, $this->router) == false) {
                                            $this->router[Router\Put\Pulls::class] = new Router\Put\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Put\Pulls::class]->merge($params);
                                    }
                                } elseif ($pathChunks[6] == 'update-branch') {
                                    if ($call == 'PUT /repos/{owner}/{repo}/pulls/{pull_number}/update-branch') {
                                        if (\array_key_exists(Router\Put\Pulls::class, $this->router) == false) {
                                            $this->router[Router\Put\Pulls::class] = new Router\Put\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Put\Pulls::class]->updateBranch($params);
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'repositories') {
                if ($pathChunks[2] == '{repository_id}') {
                    if ($pathChunks[3] == 'environments') {
                        if ($pathChunks[4] == '{environment_name}') {
                            if ($pathChunks[5] == 'secrets') {
                                if ($pathChunks[6] == '{secret_name}') {
                                    if ($call == 'PUT /repositories/{repository_id}/environments/{environment_name}/secrets/{secret_name}') {
                                        if (\array_key_exists(Router\Put\Actions::class, $this->router) == false) {
                                            $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Put\Actions::class]->createOrUpdateEnvironmentSecret($params);
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'user') {
                if ($pathChunks[2] == 'codespaces') {
                    if ($pathChunks[3] == 'secrets') {
                        if ($pathChunks[4] == '{secret_name}') {
                            if ($pathChunks[5] == 'repositories') {
                                if ($pathChunks[6] == '{repository_id}') {
                                    if ($call == 'PUT /user/codespaces/secrets/{secret_name}/repositories/{repository_id}') {
                                        if (\array_key_exists(Router\Put\Codespaces::class, $this->router) == false) {
                                            $this->router[Router\Put\Codespaces::class] = new Router\Put\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Put\Codespaces::class]->addRepositoryForSecretForAuthenticatedUser($params);
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        throw new \InvalidArgumentException();
    }
}
