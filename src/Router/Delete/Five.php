<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Delete;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
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

    /** @return array{code: int} */
    public function call(string $call, array $params, array $pathChunks): array
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'installations') {
                    if ($pathChunks[3] === '{installation_id}') {
                        if ($pathChunks[4] === 'suspended') {
                            if ($call === 'DELETE /app/installations/{installation_id}/suspended') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Apps::class, $this->router) === false) {
                                    $this->router[Router\Delete\Apps::class] = new Router\Delete\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Apps::class]->UnsuspendInstallation($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($pathChunks[3] === 'comments') {
                        if ($pathChunks[4] === '{comment_id}') {
                            if ($call === 'DELETE /gists/{gist_id}/comments/{comment_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Gists::class, $this->router) === false) {
                                    $this->router[Router\Delete\Gists::class] = new Router\Delete\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Gists::class]->DeleteComment($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'notifications') {
                if ($pathChunks[2] === 'threads') {
                    if ($pathChunks[3] === '{thread_id}') {
                        if ($pathChunks[4] === 'subscription') {
                            if ($call === 'DELETE /notifications/threads/{thread_id}/subscription') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Activity::class, $this->router) === false) {
                                    $this->router[Router\Delete\Activity::class] = new Router\Delete\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Activity::class]->DeleteThreadSubscription($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'blocks') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'DELETE /orgs/{org}/blocks/{username}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Delete\Orgs::class] = new Router\Delete\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Orgs::class]->UnblockUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($pathChunks[4] === '{hook_id}') {
                            if ($call === 'DELETE /orgs/{org}/hooks/{hook_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Delete\Orgs::class] = new Router\Delete\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Orgs::class]->DeleteWebhook($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'invitations') {
                        if ($pathChunks[4] === '{invitation_id}') {
                            if ($call === 'DELETE /orgs/{org}/invitations/{invitation_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Delete\Orgs::class] = new Router\Delete\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Orgs::class]->CancelInvitation($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'DELETE /orgs/{org}/members/{username}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Delete\Orgs::class] = new Router\Delete\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Orgs::class]->RemoveMember($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'memberships') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'DELETE /orgs/{org}/memberships/{username}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Delete\Orgs::class] = new Router\Delete\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Orgs::class]->RemoveMembershipForUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'outside_collaborators') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'DELETE /orgs/{org}/outside_collaborators/{username}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Delete\Orgs::class] = new Router\Delete\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Orgs::class]->RemoveOutsideCollaborator($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'public_members') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'DELETE /orgs/{org}/public_members/{username}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Delete\Orgs::class] = new Router\Delete\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Orgs::class]->RemovePublicMembershipForAuthenticatedUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'rulesets') {
                        if ($pathChunks[4] === '{ruleset_id}') {
                            if ($call === 'DELETE /orgs/{org}/rulesets/{ruleset_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                    $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Repos::class]->DeleteOrgRuleset($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($call === 'DELETE /orgs/{org}/teams/{team_slug}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Teams::class, $this->router) === false) {
                                    $this->router[Router\Delete\Teams::class] = new Router\Delete\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Teams::class]->DeleteInOrg($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === 'cards') {
                        if ($pathChunks[4] === '{card_id}') {
                            if ($call === 'DELETE /projects/columns/cards/{card_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Projects::class, $this->router) === false) {
                                    $this->router[Router\Delete\Projects::class] = new Router\Delete\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Projects::class]->DeleteCard($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === '{project_id}') {
                    if ($pathChunks[3] === 'collaborators') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'DELETE /projects/{project_id}/collaborators/{username}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Projects::class, $this->router) === false) {
                                    $this->router[Router\Delete\Projects::class] = new Router\Delete\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Projects::class]->RemoveCollaborator($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'automated-security-fixes') {
                            if ($call === 'DELETE /repos/{owner}/{repo}/automated-security-fixes') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                    $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Repos::class]->DisableAutomatedSecurityFixes($params);
                            }
                        } elseif ($pathChunks[4] === 'import') {
                            if ($call === 'DELETE /repos/{owner}/{repo}/import') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Migrations::class, $this->router) === false) {
                                    $this->router[Router\Delete\Migrations::class] = new Router\Delete\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Migrations::class]->CancelImport($params);
                            }
                        } elseif ($pathChunks[4] === 'interaction-limits') {
                            if ($call === 'DELETE /repos/{owner}/{repo}/interaction-limits') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Interactions::class, $this->router) === false) {
                                    $this->router[Router\Delete\Interactions::class] = new Router\Delete\Interactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Interactions::class]->RemoveRestrictionsForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'pages') {
                            if ($call === 'DELETE /repos/{owner}/{repo}/pages') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                    $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Repos::class]->DeletePagesSite($params);
                            }
                        } elseif ($pathChunks[4] === 'private-vulnerability-reporting') {
                            if ($call === 'DELETE /repos/{owner}/{repo}/private-vulnerability-reporting') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                    $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Repos::class]->DisablePrivateVulnerabilityReporting($params);
                            }
                        } elseif ($pathChunks[4] === 'subscription') {
                            if ($call === 'DELETE /repos/{owner}/{repo}/subscription') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Activity::class, $this->router) === false) {
                                    $this->router[Router\Delete\Activity::class] = new Router\Delete\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Activity::class]->DeleteRepoSubscription($params);
                            }
                        } elseif ($pathChunks[4] === 'vulnerability-alerts') {
                            if ($call === 'DELETE /repos/{owner}/{repo}/vulnerability-alerts') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                    $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Repos::class]->DisableVulnerabilityAlerts($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'discussions') {
                        if ($pathChunks[4] === '{discussion_number}') {
                            if ($call === 'DELETE /teams/{team_id}/discussions/{discussion_number}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Teams::class, $this->router) === false) {
                                    $this->router[Router\Delete\Teams::class] = new Router\Delete\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Teams::class]->DeleteDiscussionLegacy($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'DELETE /teams/{team_id}/members/{username}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Teams::class, $this->router) === false) {
                                    $this->router[Router\Delete\Teams::class] = new Router\Delete\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Teams::class]->RemoveMemberLegacy($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'memberships') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'DELETE /teams/{team_id}/memberships/{username}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Teams::class, $this->router) === false) {
                                    $this->router[Router\Delete\Teams::class] = new Router\Delete\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Teams::class]->RemoveMembershipForUserLegacy($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($pathChunks[4] === '{project_id}') {
                            if ($call === 'DELETE /teams/{team_id}/projects/{project_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Teams::class, $this->router) === false) {
                                    $this->router[Router\Delete\Teams::class] = new Router\Delete\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Teams::class]->RemoveProjectLegacy($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'codespaces') {
                    if ($pathChunks[3] === 'secrets') {
                        if ($pathChunks[4] === '{secret_name}') {
                            if ($call === 'DELETE /user/codespaces/secrets/{secret_name}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Codespaces::class, $this->router) === false) {
                                    $this->router[Router\Delete\Codespaces::class] = new Router\Delete\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Codespaces::class]->DeleteSecretForAuthenticatedUser($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'migrations') {
                    if ($pathChunks[3] === '{migration_id}') {
                        if ($pathChunks[4] === 'archive') {
                            if ($call === 'DELETE /user/migrations/{migration_id}/archive') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Migrations::class, $this->router) === false) {
                                    $this->router[Router\Delete\Migrations::class] = new Router\Delete\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Migrations::class]->DeleteArchiveForAuthenticatedUser($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'packages') {
                    if ($pathChunks[3] === '{package_type}') {
                        if ($pathChunks[4] === '{package_name}') {
                            if ($call === 'DELETE /user/packages/{package_type}/{package_name}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Packages::class, $this->router) === false) {
                                    $this->router[Router\Delete\Packages::class] = new Router\Delete\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Packages::class]->DeletePackageForAuthenticatedUser($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'starred') {
                    if ($pathChunks[3] === '{owner}') {
                        if ($pathChunks[4] === '{repo}') {
                            if ($call === 'DELETE /user/starred/{owner}/{repo}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Activity::class, $this->router) === false) {
                                    $this->router[Router\Delete\Activity::class] = new Router\Delete\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Activity::class]->UnstarRepoForAuthenticatedUser($params);
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
