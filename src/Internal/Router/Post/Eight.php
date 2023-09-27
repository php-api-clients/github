<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Post;

use ApiClients\Client\GitHub\Internal\Routers;
use ApiClients\Client\GitHub\Schema\Codespace;
use ApiClients\Client\GitHub\Schema\EmptyObject;
use ApiClients\Client\GitHub\Schema\Operations\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHub\Schema\Operations\Orgs\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Client\GitHub\Schema\ProtectedBranchAdminEnforced;
use ApiClients\Client\GitHub\Schema\Reaction;
use ApiClients\Client\GitHub\Schema\TeamDiscussionComment;
use InvalidArgumentException;

final class Eight
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return |Schema\Codespace|array{code:int}|Observable<Schema\Deployment> */
    public function call(string $call, array $params, array $pathChunks): Json|Codespace|TeamDiscussionComment|Reaction|EmptyObject|Ok|iterable|ProtectedBranchAdminEnforced
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'hooks') {
                        if ($pathChunks[4] === '{hook_id}') {
                            if ($pathChunks[5] === 'deliveries') {
                                if ($pathChunks[6] === '{delivery_id}') {
                                    if ($pathChunks[7] === 'attempts') {
                                        if ($call === 'POST /orgs/{org}/hooks/{hook_id}/deliveries/{delivery_id}/attempts') {
                                            return $this->routers->internal🔀Router🔀Post🔀Orgs()->redeliverWebhookDelivery($params);
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
                                            return $this->routers->internal🔀Router🔀Post🔀Codespaces()->stopInOrganization($params);
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
                                            return $this->routers->internal🔀Router🔀Post🔀Teams()->createDiscussionCommentInOrg($params);
                                        }
                                    } elseif ($pathChunks[7] === 'reactions') {
                                        if ($call === 'POST /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions') {
                                            return $this->routers->internal🔀Router🔀Post🔀Reactions()->createForTeamDiscussionInOrg($params);
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
                                            return $this->routers->internal🔀Router🔀Post🔀Actions()->reRunJobForWorkflowRun($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === 'runners') {
                                if ($pathChunks[6] === '{runner_id}') {
                                    if ($pathChunks[7] === 'labels') {
                                        if ($call === 'POST /repos/{owner}/{repo}/actions/runners/{runner_id}/labels') {
                                            return $this->routers->internal🔀Router🔀Post🔀Actions()->addCustomLabelsToSelfHostedRunnerForRepo($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === 'runs') {
                                if ($pathChunks[6] === '{run_id}') {
                                    if ($pathChunks[7] === 'approve') {
                                        if ($call === 'POST /repos/{owner}/{repo}/actions/runs/{run_id}/approve') {
                                            return $this->routers->internal🔀Router🔀Post🔀Actions()->approveWorkflowRun($params);
                                        }
                                    } elseif ($pathChunks[7] === 'cancel') {
                                        if ($call === 'POST /repos/{owner}/{repo}/actions/runs/{run_id}/cancel') {
                                            return $this->routers->internal🔀Router🔀Post🔀Actions()->cancelWorkflowRun($params);
                                        }
                                    } elseif ($pathChunks[7] === 'deployment_protection_rule') {
                                        if ($call === 'POST /repos/{owner}/{repo}/actions/runs/{run_id}/deployment_protection_rule') {
                                            return $this->routers->internal🔀Router🔀Post🔀Actions()->reviewCustomGatesForRun($params);
                                        }
                                    } elseif ($pathChunks[7] === 'force-cancel') {
                                        if ($call === 'POST /repos/{owner}/{repo}/actions/runs/{run_id}/force-cancel') {
                                            return $this->routers->internal🔀Router🔀Post🔀Actions()->forceCancelWorkflowRun($params);
                                        }
                                    } elseif ($pathChunks[7] === 'pending_deployments') {
                                        if ($call === 'POST /repos/{owner}/{repo}/actions/runs/{run_id}/pending_deployments') {
                                            return $this->routers->internal🔀Router🔀Post🔀Actions()->reviewPendingDeploymentsForRun($params);
                                        }
                                    } elseif ($pathChunks[7] === 'rerun') {
                                        if ($call === 'POST /repos/{owner}/{repo}/actions/runs/{run_id}/rerun') {
                                            return $this->routers->internal🔀Router🔀Post🔀Actions()->reRunWorkflow($params);
                                        }
                                    } elseif ($pathChunks[7] === 'rerun-failed-jobs') {
                                        if ($call === 'POST /repos/{owner}/{repo}/actions/runs/{run_id}/rerun-failed-jobs') {
                                            return $this->routers->internal🔀Router🔀Post🔀Actions()->reRunWorkflowFailedJobs($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === 'workflows') {
                                if ($pathChunks[6] === '{workflow_id}') {
                                    if ($pathChunks[7] === 'dispatches') {
                                        if ($call === 'POST /repos/{owner}/{repo}/actions/workflows/{workflow_id}/dispatches') {
                                            return $this->routers->internal🔀Router🔀Post🔀Actions()->createWorkflowDispatch($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'branches') {
                            if ($pathChunks[5] === '{branch}') {
                                if ($pathChunks[6] === 'protection') {
                                    if ($pathChunks[7] === 'enforce_admins') {
                                        if ($call === 'POST /repos/{owner}/{repo}/branches/{branch}/protection/enforce_admins') {
                                            return $this->routers->internal🔀Router🔀Post🔀Repos()->setAdminBranchProtection($params);
                                        }
                                    } elseif ($pathChunks[7] === 'required_signatures') {
                                        if ($call === 'POST /repos/{owner}/{repo}/branches/{branch}/protection/required_signatures') {
                                            return $this->routers->internal🔀Router🔀Post🔀Repos()->createCommitSignatureProtection($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === 'comments') {
                                if ($pathChunks[6] === '{comment_id}') {
                                    if ($pathChunks[7] === 'reactions') {
                                        if ($call === 'POST /repos/{owner}/{repo}/issues/comments/{comment_id}/reactions') {
                                            return $this->routers->internal🔀Router🔀Post🔀Reactions()->createForIssueComment($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === 'comments') {
                                if ($pathChunks[6] === '{comment_id}') {
                                    if ($pathChunks[7] === 'reactions') {
                                        if ($call === 'POST /repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions') {
                                            return $this->routers->internal🔀Router🔀Post🔀Reactions()->createForPullRequestReviewComment($params);
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
                                            return $this->routers->internal🔀Router🔀Post🔀Reactions()->createForTeamDiscussionCommentLegacy($params);
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
                                            return $this->routers->internal🔀Router🔀Post🔀Packages()->restorePackageVersionForAuthenticatedUser($params);
                                        }
                                    }
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
