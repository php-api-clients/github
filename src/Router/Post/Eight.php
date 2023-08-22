<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Post;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\Schema\Codespace;
use ApiClients\Client\GitHub\Schema\EmptyObject;
use ApiClients\Client\GitHub\Schema\Operations\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHub\Schema\Operations\Orgs\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Client\GitHub\Schema\ProtectedBranchAdminEnforced;
use ApiClients\Client\GitHub\Schema\Reaction;
use ApiClients\Client\GitHub\Schema\TeamDiscussionComment;
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

    /** @return |(Schema\Codespace|array{code: int})|array{code: int}|Observable<Schema\Deployment> */
    public function call(string $call, array $params, array $pathChunks): Json|Codespace|TeamDiscussionComment|Reaction|EmptyObject|Ok|iterable|ProtectedBranchAdminEnforced
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'hooks') {
                        if ($pathChunks[4] === '{hook_id}') {
                            if ($pathChunks[5] === 'deliveries') {
                                if ($pathChunks[6] === '{delivery_id}') {
                                    if ($pathChunks[7] === 'attempts') {
                                        if ($call === 'POST /orgs/{org}/hooks/{hook_id}/deliveries/{delivery_id}/attempts') {
                                            $matched = true;
                                            if (array_key_exists(Router\Post\Orgs::class, $this->router) === false) {
                                                $this->router[Router\Post\Orgs::class] = new Router\Post\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Post\Orgs::class]->RedeliverWebhookDelivery($params);
                                        }
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($pathChunks[4] === '{username}') {
                            if ($pathChunks[5] === 'codespaces') {
                                if ($pathChunks[6] === '{codespace_name}') {
                                    if ($pathChunks[7] === 'stop') {
                                        if ($call === 'POST /orgs/{org}/members/{username}/codespaces/{codespace_name}/stop') {
                                            $matched = true;
                                            if (array_key_exists(Router\Post\Codespaces::class, $this->router) === false) {
                                                $this->router[Router\Post\Codespaces::class] = new Router\Post\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Post\Codespaces::class]->StopInOrganization($params);
                                        }
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($pathChunks[5] === 'discussions') {
                                if ($pathChunks[6] === '{discussion_number}') {
                                    if ($pathChunks[7] === 'comments') {
                                        if ($call === 'POST /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments') {
                                            $matched = true;
                                            if (array_key_exists(Router\Post\Teams::class, $this->router) === false) {
                                                $this->router[Router\Post\Teams::class] = new Router\Post\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Post\Teams::class]->CreateDiscussionCommentInOrg($params);
                                        }
                                    } elseif ($pathChunks[7] === 'reactions') {
                                        if ($call === 'POST /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions') {
                                            $matched = true;
                                            if (array_key_exists(Router\Post\Reactions::class, $this->router) === false) {
                                                $this->router[Router\Post\Reactions::class] = new Router\Post\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Post\Reactions::class]->CreateForTeamDiscussionInOrg($params);
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
                            if ($pathChunks[5] === 'jobs') {
                                if ($pathChunks[6] === '{job_id}') {
                                    if ($pathChunks[7] === 'rerun') {
                                        if ($call === 'POST /repos/{owner}/{repo}/actions/jobs/{job_id}/rerun') {
                                            $matched = true;
                                            if (array_key_exists(Router\Post\Actions::class, $this->router) === false) {
                                                $this->router[Router\Post\Actions::class] = new Router\Post\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Post\Actions::class]->ReRunJobForWorkflowRun($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === 'runners') {
                                if ($pathChunks[6] === '{runner_id}') {
                                    if ($pathChunks[7] === 'labels') {
                                        if ($call === 'POST /repos/{owner}/{repo}/actions/runners/{runner_id}/labels') {
                                            $matched = true;
                                            if (array_key_exists(Router\Post\Actions::class, $this->router) === false) {
                                                $this->router[Router\Post\Actions::class] = new Router\Post\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Post\Actions::class]->AddCustomLabelsToSelfHostedRunnerForRepo($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === 'runs') {
                                if ($pathChunks[6] === '{run_id}') {
                                    if ($pathChunks[7] === 'approve') {
                                        if ($call === 'POST /repos/{owner}/{repo}/actions/runs/{run_id}/approve') {
                                            $matched = true;
                                            if (array_key_exists(Router\Post\Actions::class, $this->router) === false) {
                                                $this->router[Router\Post\Actions::class] = new Router\Post\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Post\Actions::class]->ApproveWorkflowRun($params);
                                        }
                                    } elseif ($pathChunks[7] === 'cancel') {
                                        if ($call === 'POST /repos/{owner}/{repo}/actions/runs/{run_id}/cancel') {
                                            $matched = true;
                                            if (array_key_exists(Router\Post\Actions::class, $this->router) === false) {
                                                $this->router[Router\Post\Actions::class] = new Router\Post\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Post\Actions::class]->CancelWorkflowRun($params);
                                        }
                                    } elseif ($pathChunks[7] === 'deployment_protection_rule') {
                                        if ($call === 'POST /repos/{owner}/{repo}/actions/runs/{run_id}/deployment_protection_rule') {
                                            $matched = true;
                                            if (array_key_exists(Router\Post\Actions::class, $this->router) === false) {
                                                $this->router[Router\Post\Actions::class] = new Router\Post\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Post\Actions::class]->ReviewCustomGatesForRun($params);
                                        }
                                    } elseif ($pathChunks[7] === 'pending_deployments') {
                                        if ($call === 'POST /repos/{owner}/{repo}/actions/runs/{run_id}/pending_deployments') {
                                            $matched = true;
                                            if (array_key_exists(Router\Post\Actions::class, $this->router) === false) {
                                                $this->router[Router\Post\Actions::class] = new Router\Post\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Post\Actions::class]->ReviewPendingDeploymentsForRun($params);
                                        }
                                    } elseif ($pathChunks[7] === 'rerun') {
                                        if ($call === 'POST /repos/{owner}/{repo}/actions/runs/{run_id}/rerun') {
                                            $matched = true;
                                            if (array_key_exists(Router\Post\Actions::class, $this->router) === false) {
                                                $this->router[Router\Post\Actions::class] = new Router\Post\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Post\Actions::class]->ReRunWorkflow($params);
                                        }
                                    } elseif ($pathChunks[7] === 'rerun-failed-jobs') {
                                        if ($call === 'POST /repos/{owner}/{repo}/actions/runs/{run_id}/rerun-failed-jobs') {
                                            $matched = true;
                                            if (array_key_exists(Router\Post\Actions::class, $this->router) === false) {
                                                $this->router[Router\Post\Actions::class] = new Router\Post\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Post\Actions::class]->ReRunWorkflowFailedJobs($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === 'workflows') {
                                if ($pathChunks[6] === '{workflow_id}') {
                                    if ($pathChunks[7] === 'dispatches') {
                                        if ($call === 'POST /repos/{owner}/{repo}/actions/workflows/{workflow_id}/dispatches') {
                                            $matched = true;
                                            if (array_key_exists(Router\Post\Actions::class, $this->router) === false) {
                                                $this->router[Router\Post\Actions::class] = new Router\Post\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Post\Actions::class]->CreateWorkflowDispatch($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'branches') {
                            if ($pathChunks[5] === '{branch}') {
                                if ($pathChunks[6] === 'protection') {
                                    if ($pathChunks[7] === 'enforce_admins') {
                                        if ($call === 'POST /repos/{owner}/{repo}/branches/{branch}/protection/enforce_admins') {
                                            $matched = true;
                                            if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                                $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Post\Repos::class]->SetAdminBranchProtection($params);
                                        }
                                    } elseif ($pathChunks[7] === 'required_signatures') {
                                        if ($call === 'POST /repos/{owner}/{repo}/branches/{branch}/protection/required_signatures') {
                                            $matched = true;
                                            if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                                $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Post\Repos::class]->CreateCommitSignatureProtection($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === 'comments') {
                                if ($pathChunks[6] === '{comment_id}') {
                                    if ($pathChunks[7] === 'reactions') {
                                        if ($call === 'POST /repos/{owner}/{repo}/issues/comments/{comment_id}/reactions') {
                                            $matched = true;
                                            if (array_key_exists(Router\Post\Reactions::class, $this->router) === false) {
                                                $this->router[Router\Post\Reactions::class] = new Router\Post\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Post\Reactions::class]->CreateForIssueComment($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === 'comments') {
                                if ($pathChunks[6] === '{comment_id}') {
                                    if ($pathChunks[7] === 'reactions') {
                                        if ($call === 'POST /repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions') {
                                            $matched = true;
                                            if (array_key_exists(Router\Post\Reactions::class, $this->router) === false) {
                                                $this->router[Router\Post\Reactions::class] = new Router\Post\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Post\Reactions::class]->CreateForPullRequestReviewComment($params);
                                        }
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
                                    if ($pathChunks[7] === 'reactions') {
                                        if ($call === 'POST /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}/reactions') {
                                            $matched = true;
                                            if (array_key_exists(Router\Post\Reactions::class, $this->router) === false) {
                                                $this->router[Router\Post\Reactions::class] = new Router\Post\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Post\Reactions::class]->CreateForTeamDiscussionCommentLegacy($params);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'packages') {
                    if ($pathChunks[3] === '{package_type}') {
                        if ($pathChunks[4] === '{package_name}') {
                            if ($pathChunks[5] === 'versions') {
                                if ($pathChunks[6] === '{package_version_id}') {
                                    if ($pathChunks[7] === 'restore') {
                                        if ($call === 'POST /user/packages/{package_type}/{package_name}/versions/{package_version_id}/restore') {
                                            $matched = true;
                                            if (array_key_exists(Router\Post\Packages::class, $this->router) === false) {
                                                $this->router[Router\Post\Packages::class] = new Router\Post\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Post\Packages::class]->RestorePackageVersionForAuthenticatedUser($params);
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
