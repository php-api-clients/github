<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Post;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\Schema\Authorization;
use ApiClients\Client\GitHub\Schema\Autolink;
use ApiClients\Client\GitHub\Schema\CheckRun;
use ApiClients\Client\GitHub\Schema\CheckSuite;
use ApiClients\Client\GitHub\Schema\Codespace;
use ApiClients\Client\GitHub\Schema\CodespaceExportDetails;
use ApiClients\Client\GitHub\Schema\CodespaceWithFullRepository;
use ApiClients\Client\GitHub\Schema\Commit;
use ApiClients\Client\GitHub\Schema\DeployKey;
use ApiClients\Client\GitHub\Schema\Deployment;
use ApiClients\Client\GitHub\Schema\EmptyObject;
use ApiClients\Client\GitHub\Schema\FullRepository;
use ApiClients\Client\GitHub\Schema\Hook;
use ApiClients\Client\GitHub\Schema\InstallationToken;
use ApiClients\Client\GitHub\Schema\Issue;
use ApiClients\Client\GitHub\Schema\Label;
use ApiClients\Client\GitHub\Schema\MergedUpstream;
use ApiClients\Client\GitHub\Schema\Milestone;
use ApiClients\Client\GitHub\Schema\MinimalRepository;
use ApiClients\Client\GitHub\Schema\Operations\Projects\MoveColumn\Response\ApplicationJson\Created\Application\Json;
use ApiClients\Client\GitHub\Schema\Page;
use ApiClients\Client\GitHub\Schema\Project;
use ApiClients\Client\GitHub\Schema\ProjectCard;
use ApiClients\Client\GitHub\Schema\PullRequest;
use ApiClients\Client\GitHub\Schema\Release;
use ApiClients\Client\GitHub\Schema\Repository;
use ApiClients\Client\GitHub\Schema\RepositoryAdvisory;
use ApiClients\Client\GitHub\Schema\RepositoryRuleset;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Five
{
    private array $router = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return |array{code: int}|(Schema\ProjectCard|array{code: int})|(Schema\Operations\Projects\MoveColumn\Response\ApplicationJson\Created\Application\Json|(Schema\Deployment|Schema\Operations\Repos\CreateDeployment\Response\ApplicationJson\Accepted\Application\Json|(Schema\MergedUpstream|(Schema\Commit|(Schema\Codespace */
    public function call(string $call, array $params, array $pathChunks): InstallationToken|Authorization|EmptyObject|ProjectCard|Json|Autolink|CheckRun|CheckSuite|Codespace|Deployment|\ApiClients\Client\GitHub\Schema\Operations\Repos\CreateDeployment\Response\ApplicationJson\Accepted\Application\Json|FullRepository|Hook|Issue|DeployKey|Label|MergedUpstream|Commit|Milestone|Page|Project|PullRequest|Release|RepositoryRuleset|RepositoryAdvisory|MinimalRepository|Repository|CodespaceExportDetails|CodespaceWithFullRepository|array
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'installations') {
                    if ($pathChunks[3] === '{installation_id}') {
                        if ($pathChunks[4] === 'access_tokens') {
                            if ($call === 'POST /app/installations/{installation_id}/access_tokens') {
                                $matched = true;
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
                                $matched = true;
                                if (array_key_exists(Router\Post\Apps::class, $this->router) === false) {
                                    $this->router[Router\Post\Apps::class] = new Router\Post\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Apps::class]->scopeToken($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'variables') {
                            if ($call === 'POST /orgs/{org}/actions/variables') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Actions::class, $this->router) === false) {
                                    $this->router[Router\Post\Actions::class] = new Router\Post\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Actions::class]->createOrgVariable($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'personal-access-token-requests') {
                        if ($pathChunks[4] === '{pat_request_id}') {
                            if ($call === 'POST /orgs/{org}/personal-access-token-requests/{pat_request_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Post\Orgs::class] = new Router\Post\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Orgs::class]->reviewPatGrantRequest($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'personal-access-tokens') {
                        if ($pathChunks[4] === '{pat_id}') {
                            if ($call === 'POST /orgs/{org}/personal-access-tokens/{pat_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Post\Orgs::class] = new Router\Post\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Orgs::class]->updatePatAccess($params);
                            }
                        }
                    } elseif ($pathChunks[3] === '{security_product}') {
                        if ($pathChunks[4] === '{enablement}') {
                            if ($call === 'POST /orgs/{org}/{security_product}/{enablement}') {
                                $matched = true;
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
                                $matched = true;
                                if (array_key_exists(Router\Post\Projects::class, $this->router) === false) {
                                    $this->router[Router\Post\Projects::class] = new Router\Post\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Projects::class]->createCard($params);
                            }
                        } elseif ($pathChunks[4] === 'moves') {
                            if ($call === 'POST /projects/columns/{column_id}/moves') {
                                $matched = true;
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
                                $matched = true;
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->createAutolink($params);
                            }
                        } elseif ($pathChunks[4] === 'check-runs') {
                            if ($call === 'POST /repos/{owner}/{repo}/check-runs') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Checks::class, $this->router) === false) {
                                    $this->router[Router\Post\Checks::class] = new Router\Post\Checks($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Checks::class]->create($params);
                            }
                        } elseif ($pathChunks[4] === 'check-suites') {
                            if ($call === 'POST /repos/{owner}/{repo}/check-suites') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Checks::class, $this->router) === false) {
                                    $this->router[Router\Post\Checks::class] = new Router\Post\Checks($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Checks::class]->createSuite($params);
                            }
                        } elseif ($pathChunks[4] === 'codespaces') {
                            if ($call === 'POST /repos/{owner}/{repo}/codespaces') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Codespaces::class, $this->router) === false) {
                                    $this->router[Router\Post\Codespaces::class] = new Router\Post\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Codespaces::class]->createWithRepoForAuthenticatedUser($params);
                            }
                        } elseif ($pathChunks[4] === 'deployments') {
                            if ($call === 'POST /repos/{owner}/{repo}/deployments') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->createDeployment($params);
                            }
                        } elseif ($pathChunks[4] === 'dispatches') {
                            if ($call === 'POST /repos/{owner}/{repo}/dispatches') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->createDispatchEvent($params);
                            }
                        } elseif ($pathChunks[4] === 'forks') {
                            if ($call === 'POST /repos/{owner}/{repo}/forks') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->createFork($params);
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($call === 'POST /repos/{owner}/{repo}/hooks') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->createWebhook($params);
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($call === 'POST /repos/{owner}/{repo}/issues') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Issues::class, $this->router) === false) {
                                    $this->router[Router\Post\Issues::class] = new Router\Post\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Issues::class]->create($params);
                            }
                        } elseif ($pathChunks[4] === 'keys') {
                            if ($call === 'POST /repos/{owner}/{repo}/keys') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->createDeployKey($params);
                            }
                        } elseif ($pathChunks[4] === 'labels') {
                            if ($call === 'POST /repos/{owner}/{repo}/labels') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Issues::class, $this->router) === false) {
                                    $this->router[Router\Post\Issues::class] = new Router\Post\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Issues::class]->createLabel($params);
                            }
                        } elseif ($pathChunks[4] === 'merge-upstream') {
                            if ($call === 'POST /repos/{owner}/{repo}/merge-upstream') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->mergeUpstream($params);
                            }
                        } elseif ($pathChunks[4] === 'merges') {
                            if ($call === 'POST /repos/{owner}/{repo}/merges') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->merge($params);
                            }
                        } elseif ($pathChunks[4] === 'milestones') {
                            if ($call === 'POST /repos/{owner}/{repo}/milestones') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Issues::class, $this->router) === false) {
                                    $this->router[Router\Post\Issues::class] = new Router\Post\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Issues::class]->createMilestone($params);
                            }
                        } elseif ($pathChunks[4] === 'pages') {
                            if ($call === 'POST /repos/{owner}/{repo}/pages') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->createPagesSite($params);
                            }
                        } elseif ($pathChunks[4] === 'projects') {
                            if ($call === 'POST /repos/{owner}/{repo}/projects') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Projects::class, $this->router) === false) {
                                    $this->router[Router\Post\Projects::class] = new Router\Post\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Projects::class]->createForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($call === 'POST /repos/{owner}/{repo}/pulls') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Pulls::class, $this->router) === false) {
                                    $this->router[Router\Post\Pulls::class] = new Router\Post\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Pulls::class]->create($params);
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($call === 'POST /repos/{owner}/{repo}/releases') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->createRelease($params);
                            }
                        } elseif ($pathChunks[4] === 'rulesets') {
                            if ($call === 'POST /repos/{owner}/{repo}/rulesets') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->createRepoRuleset($params);
                            }
                        } elseif ($pathChunks[4] === 'security-advisories') {
                            if ($call === 'POST /repos/{owner}/{repo}/security-advisories') {
                                $matched = true;
                                if (array_key_exists(Router\Post\SecurityAdvisories::class, $this->router) === false) {
                                    $this->router[Router\Post\SecurityAdvisories::class] = new Router\Post\SecurityAdvisories($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\SecurityAdvisories::class]->createRepositoryAdvisory($params);
                            }
                        } elseif ($pathChunks[4] === 'transfer') {
                            if ($call === 'POST /repos/{owner}/{repo}/transfer') {
                                $matched = true;
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
                                $matched = true;
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
                                $matched = true;
                                if (array_key_exists(Router\Post\Codespaces::class, $this->router) === false) {
                                    $this->router[Router\Post\Codespaces::class] = new Router\Post\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Codespaces::class]->exportForAuthenticatedUser($params);
                            }
                        } elseif ($pathChunks[4] === 'publish') {
                            if ($call === 'POST /user/codespaces/{codespace_name}/publish') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Codespaces::class, $this->router) === false) {
                                    $this->router[Router\Post\Codespaces::class] = new Router\Post\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Codespaces::class]->publishForAuthenticatedUser($params);
                            }
                        } elseif ($pathChunks[4] === 'start') {
                            if ($call === 'POST /user/codespaces/{codespace_name}/start') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Codespaces::class, $this->router) === false) {
                                    $this->router[Router\Post\Codespaces::class] = new Router\Post\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Codespaces::class]->startForAuthenticatedUser($params);
                            }
                        } elseif ($pathChunks[4] === 'stop') {
                            if ($call === 'POST /user/codespaces/{codespace_name}/stop') {
                                $matched = true;
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

        if ($matched === false) {
            throw new InvalidArgumentException();
        }
    }
}
