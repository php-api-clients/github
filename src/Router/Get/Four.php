<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

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
            if ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'hook') {
                    if ($pathChunks[3] === 'config') {
                        if ($call === 'GET /app/hook/config') {
                            if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Apps::class]->getWebhookConfigForApp($params);
                        }
                    } elseif ($pathChunks[3] === 'deliveries') {
                        if ($call === 'GET /app/hook/deliveries') {
                            if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Apps::class]->listWebhookDeliveries($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'installations') {
                    if ($pathChunks[3] === '{installation_id}') {
                        if ($call === 'GET /app/installations/{installation_id}') {
                            if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Apps::class]->getInstallation($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($pathChunks[3] === 'comments') {
                        if ($call === 'GET /gists/{gist_id}/comments') {
                            if (array_key_exists(Router\Get\Gists::class, $this->router) === false) {
                                $this->router[Router\Get\Gists::class] = new Router\Get\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Gists::class]->listComments($params);
                        }
                    } elseif ($pathChunks[3] === 'commits') {
                        if ($call === 'GET /gists/{gist_id}/commits') {
                            if (array_key_exists(Router\Get\Gists::class, $this->router) === false) {
                                $this->router[Router\Get\Gists::class] = new Router\Get\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Gists::class]->listCommits($params);
                        }
                    } elseif ($pathChunks[3] === 'forks') {
                        if ($call === 'GET /gists/{gist_id}/forks') {
                            if (array_key_exists(Router\Get\Gists::class, $this->router) === false) {
                                $this->router[Router\Get\Gists::class] = new Router\Get\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Gists::class]->listForks($params);
                        }
                    } elseif ($pathChunks[3] === 'star') {
                        if ($call === 'GET /gists/{gist_id}/star') {
                            if (array_key_exists(Router\Get\Gists::class, $this->router) === false) {
                                $this->router[Router\Get\Gists::class] = new Router\Get\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Gists::class]->checkIsStarred($params);
                        }
                    } elseif ($pathChunks[3] === '{sha}') {
                        if ($call === 'GET /gists/{gist_id}/{sha}') {
                            if (array_key_exists(Router\Get\Gists::class, $this->router) === false) {
                                $this->router[Router\Get\Gists::class] = new Router\Get\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Gists::class]->getRevision($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'gitignore') {
                if ($pathChunks[2] === 'templates') {
                    if ($pathChunks[3] === '{name}') {
                        if ($call === 'GET /gitignore/templates/{name}') {
                            if (array_key_exists(Router\Get\Gitignore::class, $this->router) === false) {
                                $this->router[Router\Get\Gitignore::class] = new Router\Get\Gitignore($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Gitignore::class]->getTemplate($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'marketplace_listing') {
                if ($pathChunks[2] === 'accounts') {
                    if ($pathChunks[3] === '{account_id}') {
                        if ($call === 'GET /marketplace_listing/accounts/{account_id}') {
                            if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Apps::class]->getSubscriptionPlanForAccount($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'stubbed') {
                    if ($pathChunks[3] === 'plans') {
                        if ($call === 'GET /marketplace_listing/stubbed/plans') {
                            if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Apps::class]->listPlansStubbed($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'notifications') {
                if ($pathChunks[2] === 'threads') {
                    if ($pathChunks[3] === '{thread_id}') {
                        if ($call === 'GET /notifications/threads/{thread_id}') {
                            if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Activity::class]->getThread($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'organizations') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'personal-access-token-requests') {
                        if ($call === 'GET /organizations/{org}/personal-access-token-requests') {
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->listPatGrantRequests($params);
                        }
                    } elseif ($pathChunks[3] === 'personal-access-tokens') {
                        if ($call === 'GET /organizations/{org}/personal-access-tokens') {
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->listPatGrants($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'blocks') {
                        if ($call === 'GET /orgs/{org}/blocks') {
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->listBlockedUsers($params);
                        }
                    } elseif ($pathChunks[3] === 'codespaces') {
                        if ($call === 'GET /orgs/{org}/codespaces') {
                            if (array_key_exists(Router\Get\Codespaces::class, $this->router) === false) {
                                $this->router[Router\Get\Codespaces::class] = new Router\Get\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Codespaces::class]->listInOrganization($params);
                        }
                    } elseif ($pathChunks[3] === 'events') {
                        if ($call === 'GET /orgs/{org}/events') {
                            if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Activity::class]->listPublicOrgEvents($params);
                        }
                    } elseif ($pathChunks[3] === 'failed_invitations') {
                        if ($call === 'GET /orgs/{org}/failed_invitations') {
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->listFailedInvitations($params);
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($call === 'GET /orgs/{org}/hooks') {
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->listWebhooks($params);
                        }
                    } elseif ($pathChunks[3] === 'installation') {
                        if ($call === 'GET /orgs/{org}/installation') {
                            if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Apps::class]->getOrgInstallation($params);
                        }
                    } elseif ($pathChunks[3] === 'installations') {
                        if ($call === 'GET /orgs/{org}/installations') {
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->listAppInstallations($params);
                        }
                    } elseif ($pathChunks[3] === 'interaction-limits') {
                        if ($call === 'GET /orgs/{org}/interaction-limits') {
                            if (array_key_exists(Router\Get\Interactions::class, $this->router) === false) {
                                $this->router[Router\Get\Interactions::class] = new Router\Get\Interactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Interactions::class]->getRestrictionsForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'invitations') {
                        if ($call === 'GET /orgs/{org}/invitations') {
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->listPendingInvitations($params);
                        }
                    } elseif ($pathChunks[3] === 'issues') {
                        if ($call === 'GET /orgs/{org}/issues') {
                            if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                                $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Issues::class]->listForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($call === 'GET /orgs/{org}/members') {
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->listMembers($params);
                        }
                    } elseif ($pathChunks[3] === 'migrations') {
                        if ($call === 'GET /orgs/{org}/migrations') {
                            if (array_key_exists(Router\Get\Migrations::class, $this->router) === false) {
                                $this->router[Router\Get\Migrations::class] = new Router\Get\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Migrations::class]->listForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'outside_collaborators') {
                        if ($call === 'GET /orgs/{org}/outside_collaborators') {
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->listOutsideCollaborators($params);
                        }
                    } elseif ($pathChunks[3] === 'packages') {
                        if ($call === 'GET /orgs/{org}/packages') {
                            if (array_key_exists(Router\Get\Packages::class, $this->router) === false) {
                                $this->router[Router\Get\Packages::class] = new Router\Get\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Packages::class]->listPackagesForOrganization($params);
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($call === 'GET /orgs/{org}/projects') {
                            if (array_key_exists(Router\Get\Projects::class, $this->router) === false) {
                                $this->router[Router\Get\Projects::class] = new Router\Get\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Projects::class]->listForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'public_members') {
                        if ($call === 'GET /orgs/{org}/public_members') {
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->listPublicMembers($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'GET /orgs/{org}/repos') {
                            if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Repos::class]->listForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'rulesets') {
                        if ($call === 'GET /orgs/{org}/rulesets') {
                            if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Repos::class]->getOrgRulesets($params);
                        }
                    } elseif ($pathChunks[3] === 'security-managers') {
                        if ($call === 'GET /orgs/{org}/security-managers') {
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->listSecurityManagerTeams($params);
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($call === 'GET /orgs/{org}/teams') {
                            if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Teams::class]->list_($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === '{column_id}') {
                        if ($call === 'GET /projects/columns/{column_id}') {
                            if (array_key_exists(Router\Get\Projects::class, $this->router) === false) {
                                $this->router[Router\Get\Projects::class] = new Router\Get\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Projects::class]->getColumn($params);
                        }
                    }
                } elseif ($pathChunks[2] === '{project_id}') {
                    if ($pathChunks[3] === 'collaborators') {
                        if ($call === 'GET /projects/{project_id}/collaborators') {
                            if (array_key_exists(Router\Get\Projects::class, $this->router) === false) {
                                $this->router[Router\Get\Projects::class] = new Router\Get\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Projects::class]->listCollaborators($params);
                        }
                    } elseif ($pathChunks[3] === 'columns') {
                        if ($call === 'GET /projects/{project_id}/columns') {
                            if (array_key_exists(Router\Get\Projects::class, $this->router) === false) {
                                $this->router[Router\Get\Projects::class] = new Router\Get\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Projects::class]->listColumns($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($call === 'GET /repos/{owner}/{repo}') {
                            if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Repos::class]->get($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'discussions') {
                        if ($call === 'GET /teams/{team_id}/discussions') {
                            if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Teams::class]->listDiscussionsLegacy($params);
                        }
                    } elseif ($pathChunks[3] === 'invitations') {
                        if ($call === 'GET /teams/{team_id}/invitations') {
                            if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Teams::class]->listPendingInvitationsLegacy($params);
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($call === 'GET /teams/{team_id}/members') {
                            if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Teams::class]->listMembersLegacy($params);
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($call === 'GET /teams/{team_id}/projects') {
                            if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Teams::class]->listProjectsLegacy($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'GET /teams/{team_id}/repos') {
                            if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Teams::class]->listReposLegacy($params);
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($call === 'GET /teams/{team_id}/teams') {
                            if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Teams::class]->listChildLegacy($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'blocks') {
                    if ($pathChunks[3] === '{username}') {
                        if ($call === 'GET /user/blocks/{username}') {
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->checkBlocked($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'codespaces') {
                    if ($pathChunks[3] === 'secrets') {
                        if ($call === 'GET /user/codespaces/secrets') {
                            if (array_key_exists(Router\Get\Codespaces::class, $this->router) === false) {
                                $this->router[Router\Get\Codespaces::class] = new Router\Get\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Codespaces::class]->listSecretsForAuthenticatedUser($params);
                        }
                    } elseif ($pathChunks[3] === '{codespace_name}') {
                        if ($call === 'GET /user/codespaces/{codespace_name}') {
                            if (array_key_exists(Router\Get\Codespaces::class, $this->router) === false) {
                                $this->router[Router\Get\Codespaces::class] = new Router\Get\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Codespaces::class]->getForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'docker') {
                    if ($pathChunks[3] === 'conflicts') {
                        if ($call === 'GET /user/docker/conflicts') {
                            if (array_key_exists(Router\Get\Packages::class, $this->router) === false) {
                                $this->router[Router\Get\Packages::class] = new Router\Get\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Packages::class]->listDockerMigrationConflictingPackagesForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'following') {
                    if ($pathChunks[3] === '{username}') {
                        if ($call === 'GET /user/following/{username}') {
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->checkPersonIsFollowedByAuthenticated($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'gpg_keys') {
                    if ($pathChunks[3] === '{gpg_key_id}') {
                        if ($call === 'GET /user/gpg_keys/{gpg_key_id}') {
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->getGpgKeyForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'keys') {
                    if ($pathChunks[3] === '{key_id}') {
                        if ($call === 'GET /user/keys/{key_id}') {
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->getPublicSshKeyForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'marketplace_purchases') {
                    if ($pathChunks[3] === 'stubbed') {
                        if ($call === 'GET /user/marketplace_purchases/stubbed') {
                            if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Apps::class]->listSubscriptionsForAuthenticatedUserStubbed($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'memberships') {
                    if ($pathChunks[3] === 'orgs') {
                        if ($call === 'GET /user/memberships/orgs') {
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->listMembershipsForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'migrations') {
                    if ($pathChunks[3] === '{migration_id}') {
                        if ($call === 'GET /user/migrations/{migration_id}') {
                            if (array_key_exists(Router\Get\Migrations::class, $this->router) === false) {
                                $this->router[Router\Get\Migrations::class] = new Router\Get\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Migrations::class]->getStatusForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'ssh_signing_keys') {
                    if ($pathChunks[3] === '{ssh_signing_key_id}') {
                        if ($call === 'GET /user/ssh_signing_keys/{ssh_signing_key_id}') {
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->getSshSigningKeyForAuthenticatedUser($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($pathChunks[2] === '{username}') {
                    if ($pathChunks[3] === 'events') {
                        if ($call === 'GET /users/{username}/events') {
                            if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Activity::class]->listEventsForAuthenticatedUser($params);
                        }
                    } elseif ($pathChunks[3] === 'followers') {
                        if ($call === 'GET /users/{username}/followers') {
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->listFollowersForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'following') {
                        if ($call === 'GET /users/{username}/following') {
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->listFollowingForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'gists') {
                        if ($call === 'GET /users/{username}/gists') {
                            if (array_key_exists(Router\Get\Gists::class, $this->router) === false) {
                                $this->router[Router\Get\Gists::class] = new Router\Get\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Gists::class]->listForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'gpg_keys') {
                        if ($call === 'GET /users/{username}/gpg_keys') {
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->listGpgKeysForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'hovercard') {
                        if ($call === 'GET /users/{username}/hovercard') {
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->getContextForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'installation') {
                        if ($call === 'GET /users/{username}/installation') {
                            if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Apps::class]->getUserInstallation($params);
                        }
                    } elseif ($pathChunks[3] === 'keys') {
                        if ($call === 'GET /users/{username}/keys') {
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->listPublicKeysForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'orgs') {
                        if ($call === 'GET /users/{username}/orgs') {
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->listForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'packages') {
                        if ($call === 'GET /users/{username}/packages') {
                            if (array_key_exists(Router\Get\Packages::class, $this->router) === false) {
                                $this->router[Router\Get\Packages::class] = new Router\Get\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Packages::class]->listPackagesForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($call === 'GET /users/{username}/projects') {
                            if (array_key_exists(Router\Get\Projects::class, $this->router) === false) {
                                $this->router[Router\Get\Projects::class] = new Router\Get\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Projects::class]->listForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'received_events') {
                        if ($call === 'GET /users/{username}/received_events') {
                            if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Activity::class]->listReceivedEventsForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'GET /users/{username}/repos') {
                            if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Repos::class]->listForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'social_accounts') {
                        if ($call === 'GET /users/{username}/social_accounts') {
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->listSocialAccountsForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'ssh_signing_keys') {
                        if ($call === 'GET /users/{username}/ssh_signing_keys') {
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->listSshSigningKeysForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'starred') {
                        if ($call === 'GET /users/{username}/starred') {
                            if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Activity::class]->listReposStarredByUser($params);
                        }
                    } elseif ($pathChunks[3] === 'subscriptions') {
                        if ($call === 'GET /users/{username}/subscriptions') {
                            if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Activity::class]->listReposWatchedByUser($params);
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
