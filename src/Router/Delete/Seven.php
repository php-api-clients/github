<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Delete;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\CodeScanningAnalysisDeletion;
use ApiClients\Client\GitHub\Schema\Issue;
use ApiClients\Client\GitHub\Schema\Operations\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHub\Schema\PullRequestSimple;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Seven
{
    private array $router = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return array{code: int}||(Schema\Operations\Codespaces\DeleteFromOrganization\Response\ApplicationJson\Accepted\Application\Json|array{code: int})|(Schema\BasicError */
    public function call(string $call, array $params, array $pathChunks): Json|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\DeleteFromOrganization\Response\ApplicationJson\Accepted\Application\Json|CodeScanningAnalysisDeletion|Issue|BasicError|PullRequestSimple|array
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'permissions') {
                            if ($pathChunks[5] === 'repositories') {
                                if ($pathChunks[6] === '{repository_id}') {
                                    if ($call === 'DELETE /orgs/{org}/actions/permissions/repositories/{repository_id}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Delete\Actions::class, $this->router) === false) {
                                            $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Delete\Actions::class]->disableSelectedRepositoryGithubActionsOrganization($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'runners') {
                            if ($pathChunks[5] === '{runner_id}') {
                                if ($pathChunks[6] === 'labels') {
                                    if ($call === 'DELETE /orgs/{org}/actions/runners/{runner_id}/labels') {
                                        $matched = true;
                                        if (array_key_exists(Router\Delete\Actions::class, $this->router) === false) {
                                            $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Delete\Actions::class]->removeAllCustomLabelsFromSelfHostedRunnerForOrg($params);
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($pathChunks[4] === '{username}') {
                            if ($pathChunks[5] === 'codespaces') {
                                if ($pathChunks[6] === '{codespace_name}') {
                                    if ($call === 'DELETE /orgs/{org}/members/{username}/codespaces/{codespace_name}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Delete\Codespaces::class, $this->router) === false) {
                                            $this->router[Router\Delete\Codespaces::class] = new Router\Delete\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Delete\Codespaces::class]->deleteFromOrganization($params);
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($pathChunks[5] === 'discussions') {
                                if ($pathChunks[6] === '{discussion_number}') {
                                    if ($call === 'DELETE /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Delete\Teams::class, $this->router) === false) {
                                            $this->router[Router\Delete\Teams::class] = new Router\Delete\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Delete\Teams::class]->deleteDiscussionInOrg($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'memberships') {
                                if ($pathChunks[6] === '{username}') {
                                    if ($call === 'DELETE /orgs/{org}/teams/{team_slug}/memberships/{username}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Delete\Teams::class, $this->router) === false) {
                                            $this->router[Router\Delete\Teams::class] = new Router\Delete\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Delete\Teams::class]->removeMembershipForUserInOrg($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'projects') {
                                if ($pathChunks[6] === '{project_id}') {
                                    if ($call === 'DELETE /orgs/{org}/teams/{team_slug}/projects/{project_id}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Delete\Teams::class, $this->router) === false) {
                                            $this->router[Router\Delete\Teams::class] = new Router\Delete\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Delete\Teams::class]->removeProjectInOrg($params);
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
                            if ($pathChunks[5] === 'artifacts') {
                                if ($pathChunks[6] === '{artifact_id}') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/actions/artifacts/{artifact_id}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Delete\Actions::class, $this->router) === false) {
                                            $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Delete\Actions::class]->deleteArtifact($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'caches') {
                                if ($pathChunks[6] === '{cache_id}') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/actions/caches/{cache_id}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Delete\Actions::class, $this->router) === false) {
                                            $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Delete\Actions::class]->deleteActionsCacheById($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'runners') {
                                if ($pathChunks[6] === '{runner_id}') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/actions/runners/{runner_id}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Delete\Actions::class, $this->router) === false) {
                                            $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Delete\Actions::class]->deleteSelfHostedRunnerFromRepo($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'runs') {
                                if ($pathChunks[6] === '{run_id}') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/actions/runs/{run_id}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Delete\Actions::class, $this->router) === false) {
                                            $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Delete\Actions::class]->deleteWorkflowRun($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'secrets') {
                                if ($pathChunks[6] === '{secret_name}') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/actions/secrets/{secret_name}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Delete\Actions::class, $this->router) === false) {
                                            $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Delete\Actions::class]->deleteRepoSecret($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'variables') {
                                if ($pathChunks[6] === '{name}') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/actions/variables/{name}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Delete\Actions::class, $this->router) === false) {
                                            $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Delete\Actions::class]->deleteRepoVariable($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'branches') {
                            if ($pathChunks[5] === '{branch}') {
                                if ($pathChunks[6] === 'protection') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection') {
                                        $matched = true;
                                        if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                            $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Delete\Repos::class]->deleteBranchProtection($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'code-scanning') {
                            if ($pathChunks[5] === 'analyses') {
                                if ($pathChunks[6] === '{analysis_id}') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/code-scanning/analyses/{analysis_id}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Delete\CodeScanning::class, $this->router) === false) {
                                            $this->router[Router\Delete\CodeScanning::class] = new Router\Delete\CodeScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Delete\CodeScanning::class]->deleteAnalysis($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'codespaces') {
                            if ($pathChunks[5] === 'secrets') {
                                if ($pathChunks[6] === '{secret_name}') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/codespaces/secrets/{secret_name}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Delete\Codespaces::class, $this->router) === false) {
                                            $this->router[Router\Delete\Codespaces::class] = new Router\Delete\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Delete\Codespaces::class]->deleteRepoSecret($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'dependabot') {
                            if ($pathChunks[5] === 'secrets') {
                                if ($pathChunks[6] === '{secret_name}') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/dependabot/secrets/{secret_name}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Delete\Dependabot::class, $this->router) === false) {
                                            $this->router[Router\Delete\Dependabot::class] = new Router\Delete\Dependabot($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Delete\Dependabot::class]->deleteRepoSecret($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'git') {
                            if ($pathChunks[5] === 'refs') {
                                if ($pathChunks[6] === '{ref}') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/git/refs/{ref}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Delete\Git::class, $this->router) === false) {
                                            $this->router[Router\Delete\Git::class] = new Router\Delete\Git($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Delete\Git::class]->deleteRef($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === 'comments') {
                                if ($pathChunks[6] === '{comment_id}') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/issues/comments/{comment_id}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Delete\Issues::class, $this->router) === false) {
                                            $this->router[Router\Delete\Issues::class] = new Router\Delete\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Delete\Issues::class]->deleteComment($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === '{issue_number}') {
                                if ($pathChunks[6] === 'assignees') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/assignees') {
                                        $matched = true;
                                        if (array_key_exists(Router\Delete\Issues::class, $this->router) === false) {
                                            $this->router[Router\Delete\Issues::class] = new Router\Delete\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Delete\Issues::class]->removeAssignees($params);
                                    }
                                } elseif ($pathChunks[6] === 'labels') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/labels') {
                                        $matched = true;
                                        if (array_key_exists(Router\Delete\Issues::class, $this->router) === false) {
                                            $this->router[Router\Delete\Issues::class] = new Router\Delete\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Delete\Issues::class]->removeAllLabels($params);
                                    }
                                } elseif ($pathChunks[6] === 'lock') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/lock') {
                                        $matched = true;
                                        if (array_key_exists(Router\Delete\Issues::class, $this->router) === false) {
                                            $this->router[Router\Delete\Issues::class] = new Router\Delete\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Delete\Issues::class]->unlock($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === 'comments') {
                                if ($pathChunks[6] === '{comment_id}') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/pulls/comments/{comment_id}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Delete\Pulls::class, $this->router) === false) {
                                            $this->router[Router\Delete\Pulls::class] = new Router\Delete\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Delete\Pulls::class]->deleteReviewComment($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === '{pull_number}') {
                                if ($pathChunks[6] === 'requested_reviewers') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers') {
                                        $matched = true;
                                        if (array_key_exists(Router\Delete\Pulls::class, $this->router) === false) {
                                            $this->router[Router\Delete\Pulls::class] = new Router\Delete\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Delete\Pulls::class]->removeRequestedReviewers($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($pathChunks[5] === 'assets') {
                                if ($pathChunks[6] === '{asset_id}') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/releases/assets/{asset_id}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                            $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Delete\Repos::class]->deleteReleaseAsset($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'tags') {
                            if ($pathChunks[5] === 'protection') {
                                if ($pathChunks[6] === '{tag_protection_id}') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/tags/protection/{tag_protection_id}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                            $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Delete\Repos::class]->deleteTagProtection($params);
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repositories') {
                if ($pathChunks[2] === '{repository_id}') {
                    if ($pathChunks[3] === 'environments') {
                        if ($pathChunks[4] === '{environment_name}') {
                            if ($pathChunks[5] === 'secrets') {
                                if ($pathChunks[6] === '{secret_name}') {
                                    if ($call === 'DELETE /repositories/{repository_id}/environments/{environment_name}/secrets/{secret_name}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Delete\Actions::class, $this->router) === false) {
                                            $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Delete\Actions::class]->deleteEnvironmentSecret($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'variables') {
                                if ($pathChunks[6] === '{name}') {
                                    if ($call === 'DELETE /repositories/{repository_id}/environments/{environment_name}/variables/{name}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Delete\Actions::class, $this->router) === false) {
                                            $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Delete\Actions::class]->deleteEnvironmentVariable($params);
                                    }
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
                                if ($pathChunks[6] === '{comment_number}') {
                                    if ($call === 'DELETE /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Delete\Teams::class, $this->router) === false) {
                                            $this->router[Router\Delete\Teams::class] = new Router\Delete\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Delete\Teams::class]->deleteDiscussionCommentLegacy($params);
                                    }
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
                                if ($pathChunks[6] === '{repository_id}') {
                                    if ($call === 'DELETE /user/codespaces/secrets/{secret_name}/repositories/{repository_id}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Delete\Codespaces::class, $this->router) === false) {
                                            $this->router[Router\Delete\Codespaces::class] = new Router\Delete\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Delete\Codespaces::class]->removeRepositoryForSecretForAuthenticatedUser($params);
                                    }
                                }
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'migrations') {
                    if ($pathChunks[3] === '{migration_id}') {
                        if ($pathChunks[4] === 'repos') {
                            if ($pathChunks[5] === '{repo_name}') {
                                if ($pathChunks[6] === 'lock') {
                                    if ($call === 'DELETE /user/migrations/{migration_id}/repos/{repo_name}/lock') {
                                        $matched = true;
                                        if (array_key_exists(Router\Delete\Migrations::class, $this->router) === false) {
                                            $this->router[Router\Delete\Migrations::class] = new Router\Delete\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Delete\Migrations::class]->unlockRepoForAuthenticatedUser($params);
                                    }
                                }
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'packages') {
                    if ($pathChunks[3] === '{package_type}') {
                        if ($pathChunks[4] === '{package_name}') {
                            if ($pathChunks[5] === 'versions') {
                                if ($pathChunks[6] === '{package_version_id}') {
                                    if ($call === 'DELETE /user/packages/{package_type}/{package_name}/versions/{package_version_id}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Delete\Packages::class, $this->router) === false) {
                                            $this->router[Router\Delete\Packages::class] = new Router\Delete\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Delete\Packages::class]->deletePackageVersionForAuthenticatedUser($params);
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
