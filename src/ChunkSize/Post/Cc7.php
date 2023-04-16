<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\ChunkSize\Post;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final class Cc7
{
    private array $router = array();
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\GitHub\Hydrators $hydrators;
    private readonly \React\Http\Browser $browser;
    private readonly \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\GitHub\Hydrators $hydrators, \React\Http\Browser $browser, \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrators = $hydrators;
        $this->browser = $browser;
        $this->authentication = $authentication;
    }
    public function call(string $call, array $params, array $pathChunks)
    {
        if ($pathChunks[0] == '') {
            if ($pathChunks[1] == 'orgs') {
                if ($pathChunks[2] == '{org}') {
                    if ($pathChunks[3] == 'actions') {
                        if ($pathChunks[4] == 'runners') {
                            if ($pathChunks[5] == '{runner_id}') {
                                if ($pathChunks[6] == 'labels') {
                                    if ($call == 'POST /orgs/{org}/actions/runners/{runner_id}/labels') {
                                        if (\array_key_exists(Router\Post\Actions::class, $this->router) == false) {
                                            $this->router[Router\Post\Actions::class] = new Router\Post\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Post\Actions::class]->addCustomLabelsToSelfHostedRunnerForOrg($params);
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] == 'packages') {
                        if ($pathChunks[4] == '{package_type}') {
                            if ($pathChunks[5] == '{package_name}') {
                                if ($pathChunks[6] == 'restore') {
                                    if ($call == 'POST /orgs/{org}/packages/{package_type}/{package_name}/restore') {
                                        if (\array_key_exists(Router\Post\Packages::class, $this->router) == false) {
                                            $this->router[Router\Post\Packages::class] = new Router\Post\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Post\Packages::class]->restorePackageForOrg($params);
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'repos') {
                if ($pathChunks[2] == '{owner}') {
                    if ($pathChunks[3] == '{repo}') {
                        if ($pathChunks[4] == 'actions') {
                            if ($pathChunks[5] == 'runners') {
                                if ($pathChunks[6] == 'registration-token') {
                                    if ($call == 'POST /repos/{owner}/{repo}/actions/runners/registration-token') {
                                        if (\array_key_exists(Router\Post\Actions::class, $this->router) == false) {
                                            $this->router[Router\Post\Actions::class] = new Router\Post\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Post\Actions::class]->createRegistrationTokenForRepo($params);
                                    }
                                } elseif ($pathChunks[6] == 'remove-token') {
                                    if ($call == 'POST /repos/{owner}/{repo}/actions/runners/remove-token') {
                                        if (\array_key_exists(Router\Post\Actions::class, $this->router) == false) {
                                            $this->router[Router\Post\Actions::class] = new Router\Post\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Post\Actions::class]->createRemoveTokenForRepo($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'branches') {
                            if ($pathChunks[5] == '{branch}') {
                                if ($pathChunks[6] == 'rename') {
                                    if ($call == 'POST /repos/{owner}/{repo}/branches/{branch}/rename') {
                                        if (\array_key_exists(Router\Post\Repos::class, $this->router) == false) {
                                            $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Post\Repos::class]->renameBranch($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'check-runs') {
                            if ($pathChunks[5] == '{check_run_id}') {
                                if ($pathChunks[6] == 'rerequest') {
                                    if ($call == 'POST /repos/{owner}/{repo}/check-runs/{check_run_id}/rerequest') {
                                        if (\array_key_exists(Router\Post\Checks::class, $this->router) == false) {
                                            $this->router[Router\Post\Checks::class] = new Router\Post\Checks($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Post\Checks::class]->rerequestRun($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'check-suites') {
                            if ($pathChunks[5] == '{check_suite_id}') {
                                if ($pathChunks[6] == 'rerequest') {
                                    if ($call == 'POST /repos/{owner}/{repo}/check-suites/{check_suite_id}/rerequest') {
                                        if (\array_key_exists(Router\Post\Checks::class, $this->router) == false) {
                                            $this->router[Router\Post\Checks::class] = new Router\Post\Checks($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Post\Checks::class]->rerequestSuite($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'comments') {
                            if ($pathChunks[5] == '{comment_id}') {
                                if ($pathChunks[6] == 'reactions') {
                                    if ($call == 'POST /repos/{owner}/{repo}/comments/{comment_id}/reactions') {
                                        if (\array_key_exists(Router\Post\Reactions::class, $this->router) == false) {
                                            $this->router[Router\Post\Reactions::class] = new Router\Post\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Post\Reactions::class]->createForCommitComment($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'commits') {
                            if ($pathChunks[5] == '{commit_sha}') {
                                if ($pathChunks[6] == 'comments') {
                                    if ($call == 'POST /repos/{owner}/{repo}/commits/{commit_sha}/comments') {
                                        if (\array_key_exists(Router\Post\Repos::class, $this->router) == false) {
                                            $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Post\Repos::class]->createCommitComment($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'deployments') {
                            if ($pathChunks[5] == '{deployment_id}') {
                                if ($pathChunks[6] == 'statuses') {
                                    if ($call == 'POST /repos/{owner}/{repo}/deployments/{deployment_id}/statuses') {
                                        if (\array_key_exists(Router\Post\Repos::class, $this->router) == false) {
                                            $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Post\Repos::class]->createDeploymentStatus($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'environments') {
                            if ($pathChunks[5] == '{environment_name}') {
                                if ($pathChunks[6] == 'deployment-branch-policies') {
                                    if ($call == 'POST /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies') {
                                        if (\array_key_exists(Router\Post\Repos::class, $this->router) == false) {
                                            $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Post\Repos::class]->createDeploymentBranchPolicy($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'hooks') {
                            if ($pathChunks[5] == '{hook_id}') {
                                if ($pathChunks[6] == 'pings') {
                                    if ($call == 'POST /repos/{owner}/{repo}/hooks/{hook_id}/pings') {
                                        if (\array_key_exists(Router\Post\Repos::class, $this->router) == false) {
                                            $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Post\Repos::class]->pingWebhook($params);
                                    }
                                } elseif ($pathChunks[6] == 'tests') {
                                    if ($call == 'POST /repos/{owner}/{repo}/hooks/{hook_id}/tests') {
                                        if (\array_key_exists(Router\Post\Repos::class, $this->router) == false) {
                                            $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Post\Repos::class]->testPushWebhook($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'issues') {
                            if ($pathChunks[5] == '{issue_number}') {
                                if ($pathChunks[6] == 'assignees') {
                                    if ($call == 'POST /repos/{owner}/{repo}/issues/{issue_number}/assignees') {
                                        if (\array_key_exists(Router\Post\Issues::class, $this->router) == false) {
                                            $this->router[Router\Post\Issues::class] = new Router\Post\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Post\Issues::class]->addAssignees($params);
                                    }
                                } elseif ($pathChunks[6] == 'comments') {
                                    if ($call == 'POST /repos/{owner}/{repo}/issues/{issue_number}/comments') {
                                        if (\array_key_exists(Router\Post\Issues::class, $this->router) == false) {
                                            $this->router[Router\Post\Issues::class] = new Router\Post\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Post\Issues::class]->createComment($params);
                                    }
                                } elseif ($pathChunks[6] == 'labels') {
                                    if ($call == 'POST /repos/{owner}/{repo}/issues/{issue_number}/labels') {
                                        if (\array_key_exists(Router\Post\Issues::class, $this->router) == false) {
                                            $this->router[Router\Post\Issues::class] = new Router\Post\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Post\Issues::class]->addLabels($params);
                                    }
                                } elseif ($pathChunks[6] == 'reactions') {
                                    if ($call == 'POST /repos/{owner}/{repo}/issues/{issue_number}/reactions') {
                                        if (\array_key_exists(Router\Post\Reactions::class, $this->router) == false) {
                                            $this->router[Router\Post\Reactions::class] = new Router\Post\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Post\Reactions::class]->createForIssue($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'pulls') {
                            if ($pathChunks[5] == '{pull_number}') {
                                if ($pathChunks[6] == 'codespaces') {
                                    if ($call == 'POST /repos/{owner}/{repo}/pulls/{pull_number}/codespaces') {
                                        if (\array_key_exists(Router\Post\Codespaces::class, $this->router) == false) {
                                            $this->router[Router\Post\Codespaces::class] = new Router\Post\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Post\Codespaces::class]->createWithPrForAuthenticatedUser($params);
                                    }
                                } elseif ($pathChunks[6] == 'comments') {
                                    if ($call == 'POST /repos/{owner}/{repo}/pulls/{pull_number}/comments') {
                                        if (\array_key_exists(Router\Post\Pulls::class, $this->router) == false) {
                                            $this->router[Router\Post\Pulls::class] = new Router\Post\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Post\Pulls::class]->createReviewComment($params);
                                    }
                                } elseif ($pathChunks[6] == 'requested_reviewers') {
                                    if ($call == 'POST /repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers') {
                                        if (\array_key_exists(Router\Post\Pulls::class, $this->router) == false) {
                                            $this->router[Router\Post\Pulls::class] = new Router\Post\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Post\Pulls::class]->requestReviewers($params);
                                    }
                                } elseif ($pathChunks[6] == 'reviews') {
                                    if ($call == 'POST /repos/{owner}/{repo}/pulls/{pull_number}/reviews') {
                                        if (\array_key_exists(Router\Post\Pulls::class, $this->router) == false) {
                                            $this->router[Router\Post\Pulls::class] = new Router\Post\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Post\Pulls::class]->createReview($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'releases') {
                            if ($pathChunks[5] == '{release_id}') {
                                if ($pathChunks[6] == 'assets') {
                                    if ($call == 'POST /repos/{owner}/{repo}/releases/{release_id}/assets') {
                                        if (\array_key_exists(Router\Post\Repos::class, $this->router) == false) {
                                            $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Post\Repos::class]->uploadReleaseAsset($params);
                                    }
                                } elseif ($pathChunks[6] == 'reactions') {
                                    if ($call == 'POST /repos/{owner}/{repo}/releases/{release_id}/reactions') {
                                        if (\array_key_exists(Router\Post\Reactions::class, $this->router) == false) {
                                            $this->router[Router\Post\Reactions::class] = new Router\Post\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Post\Reactions::class]->createForRelease($params);
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'users') {
                if ($pathChunks[2] == '{username}') {
                    if ($pathChunks[3] == 'packages') {
                        if ($pathChunks[4] == '{package_type}') {
                            if ($pathChunks[5] == '{package_name}') {
                                if ($pathChunks[6] == 'restore') {
                                    if ($call == 'POST /users/{username}/packages/{package_type}/{package_name}/restore') {
                                        if (\array_key_exists(Router\Post\Packages::class, $this->router) == false) {
                                            $this->router[Router\Post\Packages::class] = new Router\Post\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Post\Packages::class]->restorePackageForUser($params);
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        throw new \InvalidArgumentException();
    }
}
