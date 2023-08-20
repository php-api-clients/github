<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Put;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\Schema\EmptyObject;
use ApiClients\Client\GitHub\Schema\Environment;
use ApiClients\Client\GitHub\Schema\FileCommit;
use ApiClients\Client\GitHub\Schema\RepositoryInvitation;
use ApiClients\Client\GitHub\Schema\RepositoryRuleset;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Six
{
    private array $router = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return array{code: int}|(Schema\EmptyObject|array{code: int})|(Schema\RepositoryInvitation| */
    public function call(string $call, array $params, array $pathChunks): EmptyObject|RepositoryInvitation|FileCommit|Environment|RepositoryRuleset|array
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'permissions') {
                            if ($pathChunks[5] === 'repositories') {
                                if ($call === 'PUT /orgs/{org}/actions/permissions/repositories') {
                                    $matched = true;
                                    if (array_key_exists(Router\Put\Actions::class, $this->router) === false) {
                                        $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Put\Actions::class]->setSelectedRepositoriesEnabledGithubActionsOrganization($params);
                                }
                            } elseif ($pathChunks[5] === 'selected-actions') {
                                if ($call === 'PUT /orgs/{org}/actions/permissions/selected-actions') {
                                    $matched = true;
                                    if (array_key_exists(Router\Put\Actions::class, $this->router) === false) {
                                        $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Put\Actions::class]->setAllowedActionsOrganization($params);
                                }
                            } elseif ($pathChunks[5] === 'workflow') {
                                if ($call === 'PUT /orgs/{org}/actions/permissions/workflow') {
                                    $matched = true;
                                    if (array_key_exists(Router\Put\Actions::class, $this->router) === false) {
                                        $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Put\Actions::class]->setGithubActionsDefaultWorkflowPermissionsOrganization($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === '{secret_name}') {
                                if ($call === 'PUT /orgs/{org}/actions/secrets/{secret_name}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Put\Actions::class, $this->router) === false) {
                                        $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Put\Actions::class]->createOrUpdateOrgSecret($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'codespaces') {
                        if ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === '{secret_name}') {
                                if ($call === 'PUT /orgs/{org}/codespaces/secrets/{secret_name}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Put\Codespaces::class, $this->router) === false) {
                                        $this->router[Router\Put\Codespaces::class] = new Router\Put\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Put\Codespaces::class]->createOrUpdateOrgSecret($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'dependabot') {
                        if ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === '{secret_name}') {
                                if ($call === 'PUT /orgs/{org}/dependabot/secrets/{secret_name}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Put\Dependabot::class, $this->router) === false) {
                                        $this->router[Router\Put\Dependabot::class] = new Router\Put\Dependabot($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Put\Dependabot::class]->createOrUpdateOrgSecret($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'security-managers') {
                        if ($pathChunks[4] === 'teams') {
                            if ($pathChunks[5] === '{team_slug}') {
                                if ($call === 'PUT /orgs/{org}/security-managers/teams/{team_slug}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Put\Orgs::class, $this->router) === false) {
                                        $this->router[Router\Put\Orgs::class] = new Router\Put\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Put\Orgs::class]->addSecurityManagerTeam($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'actions') {
                            if ($pathChunks[5] === 'permissions') {
                                if ($call === 'PUT /repos/{owner}/{repo}/actions/permissions') {
                                    $matched = true;
                                    if (array_key_exists(Router\Put\Actions::class, $this->router) === false) {
                                        $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Put\Actions::class]->setGithubActionsPermissionsRepository($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'collaborators') {
                            if ($pathChunks[5] === '{username}') {
                                if ($call === 'PUT /repos/{owner}/{repo}/collaborators/{username}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Put\Repos::class, $this->router) === false) {
                                        $this->router[Router\Put\Repos::class] = new Router\Put\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Put\Repos::class]->addCollaborator($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'contents') {
                            if ($pathChunks[5] === '{path}') {
                                if ($call === 'PUT /repos/{owner}/{repo}/contents/{path}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Put\Repos::class, $this->router) === false) {
                                        $this->router[Router\Put\Repos::class] = new Router\Put\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Put\Repos::class]->createOrUpdateFileContents($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'environments') {
                            if ($pathChunks[5] === '{environment_name}') {
                                if ($call === 'PUT /repos/{owner}/{repo}/environments/{environment_name}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Put\Repos::class, $this->router) === false) {
                                        $this->router[Router\Put\Repos::class] = new Router\Put\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Put\Repos::class]->createOrUpdateEnvironment($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'rulesets') {
                            if ($pathChunks[5] === '{ruleset_id}') {
                                if ($call === 'PUT /repos/{owner}/{repo}/rulesets/{ruleset_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Put\Repos::class, $this->router) === false) {
                                        $this->router[Router\Put\Repos::class] = new Router\Put\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Put\Repos::class]->updateRepoRuleset($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'repos') {
                        if ($pathChunks[4] === '{owner}') {
                            if ($pathChunks[5] === '{repo}') {
                                if ($call === 'PUT /teams/{team_id}/repos/{owner}/{repo}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Put\Teams::class, $this->router) === false) {
                                        $this->router[Router\Put\Teams::class] = new Router\Put\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Put\Teams::class]->addOrUpdateRepoPermissionsLegacy($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'codespaces') {
                    if ($pathChunks[3] === 'secrets') {
                        if ($pathChunks[4] === '{secret_name}') {
                            if ($pathChunks[5] === 'repositories') {
                                if ($call === 'PUT /user/codespaces/secrets/{secret_name}/repositories') {
                                    $matched = true;
                                    if (array_key_exists(Router\Put\Codespaces::class, $this->router) === false) {
                                        $this->router[Router\Put\Codespaces::class] = new Router\Put\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Put\Codespaces::class]->setRepositoriesForSecretForAuthenticatedUser($params);
                                }
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'installations') {
                    if ($pathChunks[3] === '{installation_id}') {
                        if ($pathChunks[4] === 'repositories') {
                            if ($pathChunks[5] === '{repository_id}') {
                                if ($call === 'PUT /user/installations/{installation_id}/repositories/{repository_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Put\Apps::class, $this->router) === false) {
                                        $this->router[Router\Put\Apps::class] = new Router\Put\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Put\Apps::class]->addRepoToInstallationForAuthenticatedUser($params);
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
