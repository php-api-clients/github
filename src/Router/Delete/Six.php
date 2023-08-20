<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Delete;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\Schema\ActionsCacheList;
use ApiClients\Client\GitHub\Schema\FileCommit;
use ApiClients\Client\GitHub\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForTeams\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHub\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForUsers\Response\ApplicationJson\Ok\Application\Json;
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

    /** @return array{code: int}|(Schema\Operations\Copilot\CancelCopilotSeatAssignmentForTeams\Response\ApplicationJson\Ok|array{code: int})|(Schema\Operations\Copilot\CancelCopilotSeatAssignmentForUsers\Response\ApplicationJson\Ok\Application\Json| */
    public function call(string $call, array $params, array $pathChunks): Ok|Json|ActionsCacheList|FileCommit|array
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'runners') {
                            if ($pathChunks[5] === '{runner_id}') {
                                if ($call === 'DELETE /orgs/{org}/actions/runners/{runner_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Actions::class, $this->router) === false) {
                                        $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Actions::class]->deleteSelfHostedRunnerFromOrg($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === '{secret_name}') {
                                if ($call === 'DELETE /orgs/{org}/actions/secrets/{secret_name}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Actions::class, $this->router) === false) {
                                        $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Actions::class]->deleteOrgSecret($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'variables') {
                            if ($pathChunks[5] === '{name}') {
                                if ($call === 'DELETE /orgs/{org}/actions/variables/{name}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Actions::class, $this->router) === false) {
                                        $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Actions::class]->deleteOrgVariable($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'codespaces') {
                        if ($pathChunks[4] === 'access') {
                            if ($pathChunks[5] === 'selected_users') {
                                if ($call === 'DELETE /orgs/{org}/codespaces/access/selected_users') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Codespaces::class, $this->router) === false) {
                                        $this->router[Router\Delete\Codespaces::class] = new Router\Delete\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Codespaces::class]->deleteCodespacesAccessUsers($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === '{secret_name}') {
                                if ($call === 'DELETE /orgs/{org}/codespaces/secrets/{secret_name}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Codespaces::class, $this->router) === false) {
                                        $this->router[Router\Delete\Codespaces::class] = new Router\Delete\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Codespaces::class]->deleteOrgSecret($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'copilot') {
                        if ($pathChunks[4] === 'billing') {
                            if ($pathChunks[5] === 'selected_teams') {
                                if ($call === 'DELETE /orgs/{org}/copilot/billing/selected_teams') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Copilot::class, $this->router) === false) {
                                        $this->router[Router\Delete\Copilot::class] = new Router\Delete\Copilot($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Copilot::class]->cancelCopilotSeatAssignmentForTeams($params);
                                }
                            } elseif ($pathChunks[5] === 'selected_users') {
                                if ($call === 'DELETE /orgs/{org}/copilot/billing/selected_users') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Copilot::class, $this->router) === false) {
                                        $this->router[Router\Delete\Copilot::class] = new Router\Delete\Copilot($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Copilot::class]->cancelCopilotSeatAssignmentForUsers($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'dependabot') {
                        if ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === '{secret_name}') {
                                if ($call === 'DELETE /orgs/{org}/dependabot/secrets/{secret_name}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Dependabot::class, $this->router) === false) {
                                        $this->router[Router\Delete\Dependabot::class] = new Router\Delete\Dependabot($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Dependabot::class]->deleteOrgSecret($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'migrations') {
                        if ($pathChunks[4] === '{migration_id}') {
                            if ($pathChunks[5] === 'archive') {
                                if ($call === 'DELETE /orgs/{org}/migrations/{migration_id}/archive') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Migrations::class, $this->router) === false) {
                                        $this->router[Router\Delete\Migrations::class] = new Router\Delete\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Migrations::class]->deleteArchiveForOrg($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'packages') {
                        if ($pathChunks[4] === '{package_type}') {
                            if ($pathChunks[5] === '{package_name}') {
                                if ($call === 'DELETE /orgs/{org}/packages/{package_type}/{package_name}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Packages::class, $this->router) === false) {
                                        $this->router[Router\Delete\Packages::class] = new Router\Delete\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Packages::class]->deletePackageForOrg($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'security-managers') {
                        if ($pathChunks[4] === 'teams') {
                            if ($pathChunks[5] === '{team_slug}') {
                                if ($call === 'DELETE /orgs/{org}/security-managers/teams/{team_slug}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Orgs::class, $this->router) === false) {
                                        $this->router[Router\Delete\Orgs::class] = new Router\Delete\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Orgs::class]->removeSecurityManagerTeam($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'actions') {
                            if ($pathChunks[5] === 'caches') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/actions/caches') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Actions::class, $this->router) === false) {
                                        $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Actions::class]->deleteActionsCacheByKey($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'autolinks') {
                            if ($pathChunks[5] === '{autolink_id}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/autolinks/{autolink_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                        $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Repos::class]->deleteAutolink($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'collaborators') {
                            if ($pathChunks[5] === '{username}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/collaborators/{username}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                        $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Repos::class]->removeCollaborator($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'comments') {
                            if ($pathChunks[5] === '{comment_id}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/comments/{comment_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                        $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Repos::class]->deleteCommitComment($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'contents') {
                            if ($pathChunks[5] === '{path}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/contents/{path}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                        $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Repos::class]->deleteFile($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'deployments') {
                            if ($pathChunks[5] === '{deployment_id}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/deployments/{deployment_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                        $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Repos::class]->deleteDeployment($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'environments') {
                            if ($pathChunks[5] === '{environment_name}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/environments/{environment_name}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                        $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Repos::class]->deleteAnEnvironment($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($pathChunks[5] === '{hook_id}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/hooks/{hook_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                        $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Repos::class]->deleteWebhook($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'invitations') {
                            if ($pathChunks[5] === '{invitation_id}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/invitations/{invitation_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                        $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Repos::class]->deleteInvitation($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'keys') {
                            if ($pathChunks[5] === '{key_id}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/keys/{key_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                        $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Repos::class]->deleteDeployKey($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'labels') {
                            if ($pathChunks[5] === '{name}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/labels/{name}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Issues::class, $this->router) === false) {
                                        $this->router[Router\Delete\Issues::class] = new Router\Delete\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Issues::class]->deleteLabel($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'milestones') {
                            if ($pathChunks[5] === '{milestone_number}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/milestones/{milestone_number}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Issues::class, $this->router) === false) {
                                        $this->router[Router\Delete\Issues::class] = new Router\Delete\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Issues::class]->deleteMilestone($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($pathChunks[5] === '{release_id}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/releases/{release_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                        $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Repos::class]->deleteRelease($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'rulesets') {
                            if ($pathChunks[5] === '{ruleset_id}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/rulesets/{ruleset_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                        $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Repos::class]->deleteRepoRuleset($params);
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
                                if ($call === 'DELETE /teams/{team_id}/repos/{owner}/{repo}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Teams::class, $this->router) === false) {
                                        $this->router[Router\Delete\Teams::class] = new Router\Delete\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Teams::class]->removeRepoLegacy($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'installations') {
                    if ($pathChunks[3] === '{installation_id}') {
                        if ($pathChunks[4] === 'repositories') {
                            if ($pathChunks[5] === '{repository_id}') {
                                if ($call === 'DELETE /user/installations/{installation_id}/repositories/{repository_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Apps::class, $this->router) === false) {
                                        $this->router[Router\Delete\Apps::class] = new Router\Delete\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Apps::class]->removeRepoFromInstallationForAuthenticatedUser($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($pathChunks[2] === '{username}') {
                    if ($pathChunks[3] === 'packages') {
                        if ($pathChunks[4] === '{package_type}') {
                            if ($pathChunks[5] === '{package_name}') {
                                if ($call === 'DELETE /users/{username}/packages/{package_type}/{package_name}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Packages::class, $this->router) === false) {
                                        $this->router[Router\Delete\Packages::class] = new Router\Delete\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Packages::class]->deletePackageForUser($params);
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
