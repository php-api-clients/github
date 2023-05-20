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

final class Six
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
                if ($pathChunks[2] === 'hook') {
                    if ($pathChunks[3] === 'deliveries') {
                        if ($pathChunks[4] === '{delivery_id}') {
                            if ($pathChunks[5] === 'attempts') {
                                if ($call === 'POST /app/hook/deliveries/{delivery_id}/attempts') {
                                    if (array_key_exists(Router\Post\Apps::class, $this->router) === false) {
                                        $this->router[Router\Post\Apps::class] = new Router\Post\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Apps::class]->redeliverWebhookDelivery($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'runners') {
                            if ($pathChunks[5] === 'registration-token') {
                                if ($call === 'POST /orgs/{org}/actions/runners/registration-token') {
                                    if (array_key_exists(Router\Post\Actions::class, $this->router) === false) {
                                        $this->router[Router\Post\Actions::class] = new Router\Post\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Actions::class]->createRegistrationTokenForOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'remove-token') {
                                if ($call === 'POST /orgs/{org}/actions/runners/remove-token') {
                                    if (array_key_exists(Router\Post\Actions::class, $this->router) === false) {
                                        $this->router[Router\Post\Actions::class] = new Router\Post\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Actions::class]->createRemoveTokenForOrg($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'codespaces') {
                        if ($pathChunks[4] === 'billing') {
                            if ($pathChunks[5] === 'selected_users') {
                                if ($call === 'POST /orgs/{org}/codespaces/billing/selected_users') {
                                    if (array_key_exists(Router\Post\Codespaces::class, $this->router) === false) {
                                        $this->router[Router\Post\Codespaces::class] = new Router\Post\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Codespaces::class]->setCodespacesBillingUsers($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($pathChunks[4] === '{hook_id}') {
                            if ($pathChunks[5] === 'pings') {
                                if ($call === 'POST /orgs/{org}/hooks/{hook_id}/pings') {
                                    if (array_key_exists(Router\Post\Orgs::class, $this->router) === false) {
                                        $this->router[Router\Post\Orgs::class] = new Router\Post\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Orgs::class]->pingWebhook($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($pathChunks[5] === 'discussions') {
                                if ($call === 'POST /orgs/{org}/teams/{team_slug}/discussions') {
                                    if (array_key_exists(Router\Post\Teams::class, $this->router) === false) {
                                        $this->router[Router\Post\Teams::class] = new Router\Post\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Teams::class]->createDiscussionInOrg($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === 'cards') {
                        if ($pathChunks[4] === '{card_id}') {
                            if ($pathChunks[5] === 'moves') {
                                if ($call === 'POST /projects/columns/cards/{card_id}/moves') {
                                    if (array_key_exists(Router\Post\Projects::class, $this->router) === false) {
                                        $this->router[Router\Post\Projects::class] = new Router\Post\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Projects::class]->moveCard($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'actions') {
                            if ($pathChunks[5] === 'variables') {
                                if ($call === 'POST /repos/{owner}/{repo}/actions/variables') {
                                    if (array_key_exists(Router\Post\Actions::class, $this->router) === false) {
                                        $this->router[Router\Post\Actions::class] = new Router\Post\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Actions::class]->createRepoVariable($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'code-scanning') {
                            if ($pathChunks[5] === 'sarifs') {
                                if ($call === 'POST /repos/{owner}/{repo}/code-scanning/sarifs') {
                                    if (array_key_exists(Router\Post\CodeScanning::class, $this->router) === false) {
                                        $this->router[Router\Post\CodeScanning::class] = new Router\Post\CodeScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\CodeScanning::class]->uploadSarif($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'dependency-graph') {
                            if ($pathChunks[5] === 'snapshots') {
                                if ($call === 'POST /repos/{owner}/{repo}/dependency-graph/snapshots') {
                                    if (array_key_exists(Router\Post\DependencyGraph::class, $this->router) === false) {
                                        $this->router[Router\Post\DependencyGraph::class] = new Router\Post\DependencyGraph($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\DependencyGraph::class]->createRepositorySnapshot($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'git') {
                            if ($pathChunks[5] === 'blobs') {
                                if ($call === 'POST /repos/{owner}/{repo}/git/blobs') {
                                    if (array_key_exists(Router\Post\Git::class, $this->router) === false) {
                                        $this->router[Router\Post\Git::class] = new Router\Post\Git($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Git::class]->createBlob($params);
                                }
                            } elseif ($pathChunks[5] === 'commits') {
                                if ($call === 'POST /repos/{owner}/{repo}/git/commits') {
                                    if (array_key_exists(Router\Post\Git::class, $this->router) === false) {
                                        $this->router[Router\Post\Git::class] = new Router\Post\Git($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Git::class]->createCommit($params);
                                }
                            } elseif ($pathChunks[5] === 'refs') {
                                if ($call === 'POST /repos/{owner}/{repo}/git/refs') {
                                    if (array_key_exists(Router\Post\Git::class, $this->router) === false) {
                                        $this->router[Router\Post\Git::class] = new Router\Post\Git($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Git::class]->createRef($params);
                                }
                            } elseif ($pathChunks[5] === 'tags') {
                                if ($call === 'POST /repos/{owner}/{repo}/git/tags') {
                                    if (array_key_exists(Router\Post\Git::class, $this->router) === false) {
                                        $this->router[Router\Post\Git::class] = new Router\Post\Git($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Git::class]->createTag($params);
                                }
                            } elseif ($pathChunks[5] === 'trees') {
                                if ($call === 'POST /repos/{owner}/{repo}/git/trees') {
                                    if (array_key_exists(Router\Post\Git::class, $this->router) === false) {
                                        $this->router[Router\Post\Git::class] = new Router\Post\Git($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Git::class]->createTree($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'pages') {
                            if ($pathChunks[5] === 'builds') {
                                if ($call === 'POST /repos/{owner}/{repo}/pages/builds') {
                                    if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                        $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Repos::class]->requestPagesBuild($params);
                                }
                            } elseif ($pathChunks[5] === 'deployment') {
                                if ($call === 'POST /repos/{owner}/{repo}/pages/deployment') {
                                    if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                        $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Repos::class]->createPagesDeployment($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($pathChunks[5] === 'generate-notes') {
                                if ($call === 'POST /repos/{owner}/{repo}/releases/generate-notes') {
                                    if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                        $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Repos::class]->generateReleaseNotes($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'security-advisories') {
                            if ($pathChunks[5] === 'reports') {
                                if ($call === 'POST /repos/{owner}/{repo}/security-advisories/reports') {
                                    if (array_key_exists(Router\Post\SecurityAdvisories::class, $this->router) === false) {
                                        $this->router[Router\Post\SecurityAdvisories::class] = new Router\Post\SecurityAdvisories($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\SecurityAdvisories::class]->createPrivateVulnerabilityReport($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'statuses') {
                            if ($pathChunks[5] === '{sha}') {
                                if ($call === 'POST /repos/{owner}/{repo}/statuses/{sha}') {
                                    if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                        $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Repos::class]->createCommitStatus($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'tags') {
                            if ($pathChunks[5] === 'protection') {
                                if ($call === 'POST /repos/{owner}/{repo}/tags/protection') {
                                    if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                        $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Repos::class]->createTagProtection($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repositories') {
                if ($pathChunks[2] === '{repository_id}') {
                    if ($pathChunks[3] === 'environments') {
                        if ($pathChunks[4] === '{environment_name}') {
                            if ($pathChunks[5] === 'variables') {
                                if ($call === 'POST /repositories/{repository_id}/environments/{environment_name}/variables') {
                                    if (array_key_exists(Router\Post\Actions::class, $this->router) === false) {
                                        $this->router[Router\Post\Actions::class] = new Router\Post\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Actions::class]->createEnvironmentVariable($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'discussions') {
                        if ($pathChunks[4] === '{discussion_number}') {
                            if ($pathChunks[5] === 'comments') {
                                if ($call === 'POST /teams/{team_id}/discussions/{discussion_number}/comments') {
                                    if (array_key_exists(Router\Post\Teams::class, $this->router) === false) {
                                        $this->router[Router\Post\Teams::class] = new Router\Post\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Teams::class]->createDiscussionCommentLegacy($params);
                                }
                            } elseif ($pathChunks[5] === 'reactions') {
                                if ($call === 'POST /teams/{team_id}/discussions/{discussion_number}/reactions') {
                                    if (array_key_exists(Router\Post\Reactions::class, $this->router) === false) {
                                        $this->router[Router\Post\Reactions::class] = new Router\Post\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Reactions::class]->createForTeamDiscussionLegacy($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'packages') {
                    if ($pathChunks[3] === '{package_type}') {
                        if ($pathChunks[4] === '{package_name}') {
                            if ($pathChunks[5] === 'restore') {
                                if ($call === 'POST /user/packages/{package_type}/{package_name}/restore') {
                                    if (array_key_exists(Router\Post\Packages::class, $this->router) === false) {
                                        $this->router[Router\Post\Packages::class] = new Router\Post\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Post\Packages::class]->restorePackageForAuthenticatedUser($params);
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
