<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\ChunkSize\Post;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Cc5
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
            if ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'installations') {
                    if ($pathChunks[3] === '{installation_id}') {
                        if ($pathChunks[4] === 'access_tokens') {
                            if ($call === 'POST /app/installations/{installation_id}/access_tokens') {
                                if (array_key_exists(Router\Post\Apps::class, $this->router) === false) {
                                    $this->router[Router\Post\Apps::class] = new Router\Post\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Apps::class]->createInstallationAccessToken($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'applications') {
                if ($pathChunks[2] === '{client_id}') {
                    if ($pathChunks[3] === 'token') {
                        if ($pathChunks[4] === 'scoped') {
                            if ($call === 'POST /applications/{client_id}/token/scoped') {
                                if (array_key_exists(Router\Post\Apps::class, $this->router) === false) {
                                    $this->router[Router\Post\Apps::class] = new Router\Post\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Apps::class]->scopeToken($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'organizations') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'personal-access-token-requests') {
                        if ($pathChunks[4] === '{pat_request_id}') {
                            if ($call === 'POST /organizations/{org}/personal-access-token-requests/{pat_request_id}') {
                                if (array_key_exists(Router\Post\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Post\Orgs::class] = new Router\Post\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Orgs::class]->reviewPatGrantRequest($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'personal-access-tokens') {
                        if ($pathChunks[4] === '{pat_id}') {
                            if ($call === 'POST /organizations/{org}/personal-access-tokens/{pat_id}') {
                                if (array_key_exists(Router\Post\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Post\Orgs::class] = new Router\Post\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Orgs::class]->updatePatAccess($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'required_workflows') {
                            if ($call === 'POST /orgs/{org}/actions/required_workflows') {
                                if (array_key_exists(Router\Post\Actions::class, $this->router) === false) {
                                    $this->router[Router\Post\Actions::class] = new Router\Post\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Actions::class]->createRequiredWorkflow($params);
                            }
                        } elseif ($pathChunks[4] === 'variables') {
                            if ($call === 'POST /orgs/{org}/actions/variables') {
                                if (array_key_exists(Router\Post\Actions::class, $this->router) === false) {
                                    $this->router[Router\Post\Actions::class] = new Router\Post\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Actions::class]->createOrgVariable($params);
                            }
                        }
                    } elseif ($pathChunks[3] === '{security_product}') {
                        if ($pathChunks[4] === '{enablement}') {
                            if ($call === 'POST /orgs/{org}/{security_product}/{enablement}') {
                                if (array_key_exists(Router\Post\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Post\Orgs::class] = new Router\Post\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Orgs::class]->enableOrDisableSecurityProductOnAllOrgRepos($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === '{column_id}') {
                        if ($pathChunks[4] === 'cards') {
                            if ($call === 'POST /projects/columns/{column_id}/cards') {
                                if (array_key_exists(Router\Post\Projects::class, $this->router) === false) {
                                    $this->router[Router\Post\Projects::class] = new Router\Post\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Projects::class]->createCard($params);
                            }
                        } elseif ($pathChunks[4] === 'moves') {
                            if ($call === 'POST /projects/columns/{column_id}/moves') {
                                if (array_key_exists(Router\Post\Projects::class, $this->router) === false) {
                                    $this->router[Router\Post\Projects::class] = new Router\Post\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Projects::class]->moveColumn($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'autolinks') {
                            if ($call === 'POST /repos/{owner}/{repo}/autolinks') {
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->createAutolink($params);
                            }
                        } elseif ($pathChunks[4] === 'check-runs') {
                            if ($call === 'POST /repos/{owner}/{repo}/check-runs') {
                                if (array_key_exists(Router\Post\Checks::class, $this->router) === false) {
                                    $this->router[Router\Post\Checks::class] = new Router\Post\Checks($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Checks::class]->create($params);
                            }
                        } elseif ($pathChunks[4] === 'check-suites') {
                            if ($call === 'POST /repos/{owner}/{repo}/check-suites') {
                                if (array_key_exists(Router\Post\Checks::class, $this->router) === false) {
                                    $this->router[Router\Post\Checks::class] = new Router\Post\Checks($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Checks::class]->createSuite($params);
                            }
                        } elseif ($pathChunks[4] === 'codespaces') {
                            if ($call === 'POST /repos/{owner}/{repo}/codespaces') {
                                if (array_key_exists(Router\Post\Codespaces::class, $this->router) === false) {
                                    $this->router[Router\Post\Codespaces::class] = new Router\Post\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Codespaces::class]->createWithRepoForAuthenticatedUser($params);
                            }
                        } elseif ($pathChunks[4] === 'deployments') {
                            if ($call === 'POST /repos/{owner}/{repo}/deployments') {
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->createDeployment($params);
                            }
                        } elseif ($pathChunks[4] === 'dispatches') {
                            if ($call === 'POST /repos/{owner}/{repo}/dispatches') {
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->createDispatchEvent($params);
                            }
                        } elseif ($pathChunks[4] === 'forks') {
                            if ($call === 'POST /repos/{owner}/{repo}/forks') {
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->createFork($params);
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($call === 'POST /repos/{owner}/{repo}/hooks') {
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->createWebhook($params);
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($call === 'POST /repos/{owner}/{repo}/issues') {
                                if (array_key_exists(Router\Post\Issues::class, $this->router) === false) {
                                    $this->router[Router\Post\Issues::class] = new Router\Post\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Issues::class]->create($params);
                            }
                        } elseif ($pathChunks[4] === 'keys') {
                            if ($call === 'POST /repos/{owner}/{repo}/keys') {
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->createDeployKey($params);
                            }
                        } elseif ($pathChunks[4] === 'labels') {
                            if ($call === 'POST /repos/{owner}/{repo}/labels') {
                                if (array_key_exists(Router\Post\Issues::class, $this->router) === false) {
                                    $this->router[Router\Post\Issues::class] = new Router\Post\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Issues::class]->createLabel($params);
                            }
                        } elseif ($pathChunks[4] === 'merge-upstream') {
                            if ($call === 'POST /repos/{owner}/{repo}/merge-upstream') {
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->mergeUpstream($params);
                            }
                        } elseif ($pathChunks[4] === 'merges') {
                            if ($call === 'POST /repos/{owner}/{repo}/merges') {
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->merge($params);
                            }
                        } elseif ($pathChunks[4] === 'milestones') {
                            if ($call === 'POST /repos/{owner}/{repo}/milestones') {
                                if (array_key_exists(Router\Post\Issues::class, $this->router) === false) {
                                    $this->router[Router\Post\Issues::class] = new Router\Post\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Issues::class]->createMilestone($params);
                            }
                        } elseif ($pathChunks[4] === 'pages') {
                            if ($call === 'POST /repos/{owner}/{repo}/pages') {
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->createPagesSite($params);
                            }
                        } elseif ($pathChunks[4] === 'projects') {
                            if ($call === 'POST /repos/{owner}/{repo}/projects') {
                                if (array_key_exists(Router\Post\Projects::class, $this->router) === false) {
                                    $this->router[Router\Post\Projects::class] = new Router\Post\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Projects::class]->createForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($call === 'POST /repos/{owner}/{repo}/pulls') {
                                if (array_key_exists(Router\Post\Pulls::class, $this->router) === false) {
                                    $this->router[Router\Post\Pulls::class] = new Router\Post\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Pulls::class]->create($params);
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($call === 'POST /repos/{owner}/{repo}/releases') {
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->createRelease($params);
                            }
                        } elseif ($pathChunks[4] === 'security-advisories') {
                            if ($call === 'POST /repos/{owner}/{repo}/security-advisories') {
                                if (array_key_exists(Router\Post\SecurityAdvisories::class, $this->router) === false) {
                                    $this->router[Router\Post\SecurityAdvisories::class] = new Router\Post\SecurityAdvisories($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\SecurityAdvisories::class]->createRepositoryAdvisory($params);
                            }
                        } elseif ($pathChunks[4] === 'transfer') {
                            if ($call === 'POST /repos/{owner}/{repo}/transfer') {
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->transfer($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === '{template_owner}') {
                    if ($pathChunks[3] === '{template_repo}') {
                        if ($pathChunks[4] === 'generate') {
                            if ($call === 'POST /repos/{template_owner}/{template_repo}/generate') {
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->createUsingTemplate($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'codespaces') {
                    if ($pathChunks[3] === '{codespace_name}') {
                        if ($pathChunks[4] === 'exports') {
                            if ($call === 'POST /user/codespaces/{codespace_name}/exports') {
                                if (array_key_exists(Router\Post\Codespaces::class, $this->router) === false) {
                                    $this->router[Router\Post\Codespaces::class] = new Router\Post\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Codespaces::class]->exportForAuthenticatedUser($params);
                            }
                        } elseif ($pathChunks[4] === 'publish') {
                            if ($call === 'POST /user/codespaces/{codespace_name}/publish') {
                                if (array_key_exists(Router\Post\Codespaces::class, $this->router) === false) {
                                    $this->router[Router\Post\Codespaces::class] = new Router\Post\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Codespaces::class]->publishForAuthenticatedUser($params);
                            }
                        } elseif ($pathChunks[4] === 'start') {
                            if ($call === 'POST /user/codespaces/{codespace_name}/start') {
                                if (array_key_exists(Router\Post\Codespaces::class, $this->router) === false) {
                                    $this->router[Router\Post\Codespaces::class] = new Router\Post\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Codespaces::class]->startForAuthenticatedUser($params);
                            }
                        } elseif ($pathChunks[4] === 'stop') {
                            if ($call === 'POST /user/codespaces/{codespace_name}/stop') {
                                if (array_key_exists(Router\Post\Codespaces::class, $this->router) === false) {
                                    $this->router[Router\Post\Codespaces::class] = new Router\Post\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Codespaces::class]->stopForAuthenticatedUser($params);
                            }
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
