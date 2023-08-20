<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Put;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\Schema\EmptyObject;
use ApiClients\Client\GitHub\Schema\Import;
use ApiClients\Client\GitHub\Schema\InteractionLimitResponse;
use ApiClients\Client\GitHub\Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted;
use ApiClients\Client\GitHub\Schema\Operations\Orgs\ConvertMemberToOutsideCollaborator\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Client\GitHub\Schema\OrgMembership;
use ApiClients\Client\GitHub\Schema\RepositoryRuleset;
use ApiClients\Client\GitHub\Schema\RepositorySubscription;
use ApiClients\Client\GitHub\Schema\TeamMembership;
use ApiClients\Client\GitHub\Schema\ThreadSubscription;
use ApiClients\Client\GitHub\Schema\Topic;
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

    /** @return array{code: int}|(Schema\ThreadSubscription|array{code: int})||(Schema\Operations\Orgs\ConvertMemberToOutsideCollaborator\Response\ApplicationJson\Accepted\Application\Json|(Schema\InteractionLimitResponse|(Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted|(Schema\TeamMembership|(Schema\EmptyObject */
    public function call(string $call, array $params, array $pathChunks): ThreadSubscription|OrgMembership|Json|RepositoryRuleset|Import|InteractionLimitResponse|Accepted|RepositorySubscription|Topic|TeamMembership|EmptyObject|array
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'installations') {
                    if ($pathChunks[3] === '{installation_id}') {
                        if ($pathChunks[4] === 'suspended') {
                            if ($call === 'PUT /app/installations/{installation_id}/suspended') {
                                $matched = true;
                                if (array_key_exists(Router\Put\Apps::class, $this->router) === false) {
                                    $this->router[Router\Put\Apps::class] = new Router\Put\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Put\Apps::class]->suspendInstallation($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'notifications') {
                if ($pathChunks[2] === 'threads') {
                    if ($pathChunks[3] === '{thread_id}') {
                        if ($pathChunks[4] === 'subscription') {
                            if ($call === 'PUT /notifications/threads/{thread_id}/subscription') {
                                $matched = true;
                                if (array_key_exists(Router\Put\Activity::class, $this->router) === false) {
                                    $this->router[Router\Put\Activity::class] = new Router\Put\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Put\Activity::class]->setThreadSubscription($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'permissions') {
                            if ($call === 'PUT /orgs/{org}/actions/permissions') {
                                $matched = true;
                                if (array_key_exists(Router\Put\Actions::class, $this->router) === false) {
                                    $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Put\Actions::class]->setGithubActionsPermissionsOrganization($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'blocks') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'PUT /orgs/{org}/blocks/{username}') {
                                $matched = true;
                                if (array_key_exists(Router\Put\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Put\Orgs::class] = new Router\Put\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Put\Orgs::class]->blockUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'codespaces') {
                        if ($pathChunks[4] === 'access') {
                            if ($call === 'PUT /orgs/{org}/codespaces/access') {
                                $matched = true;
                                if (array_key_exists(Router\Put\Codespaces::class, $this->router) === false) {
                                    $this->router[Router\Put\Codespaces::class] = new Router\Put\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Put\Codespaces::class]->setCodespacesAccess($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'memberships') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'PUT /orgs/{org}/memberships/{username}') {
                                $matched = true;
                                if (array_key_exists(Router\Put\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Put\Orgs::class] = new Router\Put\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Put\Orgs::class]->setMembershipForUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'outside_collaborators') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'PUT /orgs/{org}/outside_collaborators/{username}') {
                                $matched = true;
                                if (array_key_exists(Router\Put\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Put\Orgs::class] = new Router\Put\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Put\Orgs::class]->convertMemberToOutsideCollaborator($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'public_members') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'PUT /orgs/{org}/public_members/{username}') {
                                $matched = true;
                                if (array_key_exists(Router\Put\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Put\Orgs::class] = new Router\Put\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Put\Orgs::class]->setPublicMembershipForAuthenticatedUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'rulesets') {
                        if ($pathChunks[4] === '{ruleset_id}') {
                            if ($call === 'PUT /orgs/{org}/rulesets/{ruleset_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Put\Repos::class, $this->router) === false) {
                                    $this->router[Router\Put\Repos::class] = new Router\Put\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Put\Repos::class]->updateOrgRuleset($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === '{project_id}') {
                    if ($pathChunks[3] === 'collaborators') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'PUT /projects/{project_id}/collaborators/{username}') {
                                $matched = true;
                                if (array_key_exists(Router\Put\Projects::class, $this->router) === false) {
                                    $this->router[Router\Put\Projects::class] = new Router\Put\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Put\Projects::class]->addCollaborator($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'automated-security-fixes') {
                            if ($call === 'PUT /repos/{owner}/{repo}/automated-security-fixes') {
                                $matched = true;
                                if (array_key_exists(Router\Put\Repos::class, $this->router) === false) {
                                    $this->router[Router\Put\Repos::class] = new Router\Put\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Put\Repos::class]->enableAutomatedSecurityFixes($params);
                            }
                        } elseif ($pathChunks[4] === 'import') {
                            if ($call === 'PUT /repos/{owner}/{repo}/import') {
                                $matched = true;
                                if (array_key_exists(Router\Put\Migrations::class, $this->router) === false) {
                                    $this->router[Router\Put\Migrations::class] = new Router\Put\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Put\Migrations::class]->startImport($params);
                            }
                        } elseif ($pathChunks[4] === 'interaction-limits') {
                            if ($call === 'PUT /repos/{owner}/{repo}/interaction-limits') {
                                $matched = true;
                                if (array_key_exists(Router\Put\Interactions::class, $this->router) === false) {
                                    $this->router[Router\Put\Interactions::class] = new Router\Put\Interactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Put\Interactions::class]->setRestrictionsForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'notifications') {
                            if ($call === 'PUT /repos/{owner}/{repo}/notifications') {
                                $matched = true;
                                if (array_key_exists(Router\Put\Activity::class, $this->router) === false) {
                                    $this->router[Router\Put\Activity::class] = new Router\Put\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Put\Activity::class]->markRepoNotificationsAsRead($params);
                            }
                        } elseif ($pathChunks[4] === 'pages') {
                            if ($call === 'PUT /repos/{owner}/{repo}/pages') {
                                $matched = true;
                                if (array_key_exists(Router\Put\Repos::class, $this->router) === false) {
                                    $this->router[Router\Put\Repos::class] = new Router\Put\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Put\Repos::class]->updateInformationAboutPagesSite($params);
                            }
                        } elseif ($pathChunks[4] === 'private-vulnerability-reporting') {
                            if ($call === 'PUT /repos/{owner}/{repo}/private-vulnerability-reporting') {
                                $matched = true;
                                if (array_key_exists(Router\Put\Repos::class, $this->router) === false) {
                                    $this->router[Router\Put\Repos::class] = new Router\Put\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Put\Repos::class]->enablePrivateVulnerabilityReporting($params);
                            }
                        } elseif ($pathChunks[4] === 'subscription') {
                            if ($call === 'PUT /repos/{owner}/{repo}/subscription') {
                                $matched = true;
                                if (array_key_exists(Router\Put\Activity::class, $this->router) === false) {
                                    $this->router[Router\Put\Activity::class] = new Router\Put\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Put\Activity::class]->setRepoSubscription($params);
                            }
                        } elseif ($pathChunks[4] === 'topics') {
                            if ($call === 'PUT /repos/{owner}/{repo}/topics') {
                                $matched = true;
                                if (array_key_exists(Router\Put\Repos::class, $this->router) === false) {
                                    $this->router[Router\Put\Repos::class] = new Router\Put\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Put\Repos::class]->replaceAllTopics($params);
                            }
                        } elseif ($pathChunks[4] === 'vulnerability-alerts') {
                            if ($call === 'PUT /repos/{owner}/{repo}/vulnerability-alerts') {
                                $matched = true;
                                if (array_key_exists(Router\Put\Repos::class, $this->router) === false) {
                                    $this->router[Router\Put\Repos::class] = new Router\Put\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Put\Repos::class]->enableVulnerabilityAlerts($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'members') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'PUT /teams/{team_id}/members/{username}') {
                                $matched = true;
                                if (array_key_exists(Router\Put\Teams::class, $this->router) === false) {
                                    $this->router[Router\Put\Teams::class] = new Router\Put\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Put\Teams::class]->addMemberLegacy($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'memberships') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'PUT /teams/{team_id}/memberships/{username}') {
                                $matched = true;
                                if (array_key_exists(Router\Put\Teams::class, $this->router) === false) {
                                    $this->router[Router\Put\Teams::class] = new Router\Put\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Put\Teams::class]->addOrUpdateMembershipForUserLegacy($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($pathChunks[4] === '{project_id}') {
                            if ($call === 'PUT /teams/{team_id}/projects/{project_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Put\Teams::class, $this->router) === false) {
                                    $this->router[Router\Put\Teams::class] = new Router\Put\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Put\Teams::class]->addOrUpdateProjectPermissionsLegacy($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'codespaces') {
                    if ($pathChunks[3] === 'secrets') {
                        if ($pathChunks[4] === '{secret_name}') {
                            if ($call === 'PUT /user/codespaces/secrets/{secret_name}') {
                                $matched = true;
                                if (array_key_exists(Router\Put\Codespaces::class, $this->router) === false) {
                                    $this->router[Router\Put\Codespaces::class] = new Router\Put\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Put\Codespaces::class]->createOrUpdateSecretForAuthenticatedUser($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'starred') {
                    if ($pathChunks[3] === '{owner}') {
                        if ($pathChunks[4] === '{repo}') {
                            if ($call === 'PUT /user/starred/{owner}/{repo}') {
                                $matched = true;
                                if (array_key_exists(Router\Put\Activity::class, $this->router) === false) {
                                    $this->router[Router\Put\Activity::class] = new Router\Put\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Put\Activity::class]->starRepoForAuthenticatedUser($params);
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
