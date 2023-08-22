<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Delete;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\Operations\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHub\Schema\Operations\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHub\Schema\PullRequestReview;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Eight
{
    private array $router = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return |array{code: int}|(Observable<Schema\Label>|Schema\BasicError) */
    public function call(string $call, array $params, array $pathChunks): Ok|Json|iterable|BasicError|PullRequestReview
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'runners') {
                            if ($pathChunks[5] === '{runner_id}') {
                                if ($pathChunks[6] === 'labels') {
                                    if ($pathChunks[7] === '{name}') {
                                        if ($call === 'DELETE /orgs/{org}/actions/runners/{runner_id}/labels/{name}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Actions::class, $this->router) === false) {
                                                $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Actions::class]->RemoveCustomLabelFromSelfHostedRunnerForOrg($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === '{secret_name}') {
                                if ($pathChunks[6] === 'repositories') {
                                    if ($pathChunks[7] === '{repository_id}') {
                                        if ($call === 'DELETE /orgs/{org}/actions/secrets/{secret_name}/repositories/{repository_id}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Actions::class, $this->router) === false) {
                                                $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Actions::class]->RemoveSelectedRepoFromOrgSecret($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'variables') {
                            if ($pathChunks[5] === '{name}') {
                                if ($pathChunks[6] === 'repositories') {
                                    if ($pathChunks[7] === '{repository_id}') {
                                        if ($call === 'DELETE /orgs/{org}/actions/variables/{name}/repositories/{repository_id}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Actions::class, $this->router) === false) {
                                                $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Actions::class]->RemoveSelectedRepoFromOrgVariable($params);
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
                                        if ($call === 'DELETE /orgs/{org}/codespaces/secrets/{secret_name}/repositories/{repository_id}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Codespaces::class, $this->router) === false) {
                                                $this->router[Router\Delete\Codespaces::class] = new Router\Delete\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Codespaces::class]->RemoveSelectedRepoFromOrgSecret($params);
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
                                        if ($call === 'DELETE /orgs/{org}/dependabot/secrets/{secret_name}/repositories/{repository_id}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Dependabot::class, $this->router) === false) {
                                                $this->router[Router\Delete\Dependabot::class] = new Router\Delete\Dependabot($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Dependabot::class]->RemoveSelectedRepoFromOrgSecret($params);
                                        }
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'migrations') {
                        if ($pathChunks[4] === '{migration_id}') {
                            if ($pathChunks[5] === 'repos') {
                                if ($pathChunks[6] === '{repo_name}') {
                                    if ($pathChunks[7] === 'lock') {
                                        if ($call === 'DELETE /orgs/{org}/migrations/{migration_id}/repos/{repo_name}/lock') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Migrations::class, $this->router) === false) {
                                                $this->router[Router\Delete\Migrations::class] = new Router\Delete\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Migrations::class]->UnlockRepoForOrg($params);
                                        }
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'packages') {
                        if ($pathChunks[4] === '{package_type}') {
                            if ($pathChunks[5] === '{package_name}') {
                                if ($pathChunks[6] === 'versions') {
                                    if ($pathChunks[7] === '{package_version_id}') {
                                        if ($call === 'DELETE /orgs/{org}/packages/{package_type}/{package_name}/versions/{package_version_id}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Packages::class, $this->router) === false) {
                                                $this->router[Router\Delete\Packages::class] = new Router\Delete\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Packages::class]->DeletePackageVersionForOrg($params);
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
                                        if ($call === 'DELETE /orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Teams::class, $this->router) === false) {
                                                $this->router[Router\Delete\Teams::class] = new Router\Delete\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Teams::class]->RemoveRepoInOrg($params);
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
                            if ($pathChunks[5] === 'runners') {
                                if ($pathChunks[6] === '{runner_id}') {
                                    if ($pathChunks[7] === 'labels') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/actions/runners/{runner_id}/labels') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Actions::class, $this->router) === false) {
                                                $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Actions::class]->RemoveAllCustomLabelsFromSelfHostedRunnerForRepo($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === 'runs') {
                                if ($pathChunks[6] === '{run_id}') {
                                    if ($pathChunks[7] === 'logs') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/actions/runs/{run_id}/logs') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Actions::class, $this->router) === false) {
                                                $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Actions::class]->DeleteWorkflowRunLogs($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'branches') {
                            if ($pathChunks[5] === '{branch}') {
                                if ($pathChunks[6] === 'protection') {
                                    if ($pathChunks[7] === 'enforce_admins') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/enforce_admins') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                                $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Repos::class]->DeleteAdminBranchProtection($params);
                                        }
                                    } elseif ($pathChunks[7] === 'required_pull_request_reviews') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_pull_request_reviews') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                                $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Repos::class]->DeletePullRequestReviewProtection($params);
                                        }
                                    } elseif ($pathChunks[7] === 'required_signatures') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_signatures') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                                $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Repos::class]->DeleteCommitSignatureProtection($params);
                                        }
                                    } elseif ($pathChunks[7] === 'required_status_checks') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                                $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Repos::class]->RemoveStatusCheckProtection($params);
                                        }
                                    } elseif ($pathChunks[7] === 'restrictions') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/restrictions') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                                $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Repos::class]->DeleteAccessRestrictions($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'comments') {
                            if ($pathChunks[5] === '{comment_id}') {
                                if ($pathChunks[6] === 'reactions') {
                                    if ($pathChunks[7] === '{reaction_id}') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/comments/{comment_id}/reactions/{reaction_id}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Reactions::class, $this->router) === false) {
                                                $this->router[Router\Delete\Reactions::class] = new Router\Delete\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Reactions::class]->DeleteForCommitComment($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'environments') {
                            if ($pathChunks[5] === '{environment_name}') {
                                if ($pathChunks[6] === 'deployment-branch-policies') {
                                    if ($pathChunks[7] === '{branch_policy_id}') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies/{branch_policy_id}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                                $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Repos::class]->DeleteDeploymentBranchPolicy($params);
                                        }
                                    }
                                } elseif ($pathChunks[6] === 'deployment_protection_rules') {
                                    if ($pathChunks[7] === '{protection_rule_id}') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules/{protection_rule_id}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                                $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Repos::class]->DisableDeploymentProtectionRule($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === '{issue_number}') {
                                if ($pathChunks[6] === 'labels') {
                                    if ($pathChunks[7] === '{name}') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/labels/{name}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Issues::class, $this->router) === false) {
                                                $this->router[Router\Delete\Issues::class] = new Router\Delete\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Issues::class]->RemoveLabel($params);
                                        }
                                    }
                                } elseif ($pathChunks[6] === 'reactions') {
                                    if ($pathChunks[7] === '{reaction_id}') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/reactions/{reaction_id}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Reactions::class, $this->router) === false) {
                                                $this->router[Router\Delete\Reactions::class] = new Router\Delete\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Reactions::class]->DeleteForIssue($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === '{pull_number}') {
                                if ($pathChunks[6] === 'reviews') {
                                    if ($pathChunks[7] === '{review_id}') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Pulls::class, $this->router) === false) {
                                                $this->router[Router\Delete\Pulls::class] = new Router\Delete\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Pulls::class]->DeletePendingReview($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($pathChunks[5] === '{release_id}') {
                                if ($pathChunks[6] === 'reactions') {
                                    if ($pathChunks[7] === '{reaction_id}') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/releases/{release_id}/reactions/{reaction_id}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Reactions::class, $this->router) === false) {
                                                $this->router[Router\Delete\Reactions::class] = new Router\Delete\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Reactions::class]->DeleteForRelease($params);
                                        }
                                    }
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
                                if ($pathChunks[6] === 'versions') {
                                    if ($pathChunks[7] === '{package_version_id}') {
                                        if ($call === 'DELETE /users/{username}/packages/{package_type}/{package_name}/versions/{package_version_id}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Packages::class, $this->router) === false) {
                                                $this->router[Router\Delete\Packages::class] = new Router\Delete\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Packages::class]->DeletePackageVersionForUser($params);
                                        }
                                    }
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
