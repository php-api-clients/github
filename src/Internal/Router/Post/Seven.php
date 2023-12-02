<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Post;

use ApiClients\Client\GitHub\Internal\Routers;
use ApiClients\Client\GitHub\Schema\AuthenticationToken;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\BranchWithProtection;
use ApiClients\Client\GitHub\Schema\Codespace;
use ApiClients\Client\GitHub\Schema\CommitComment;
use ApiClients\Client\GitHub\Schema\DeploymentBranchPolicy;
use ApiClients\Client\GitHub\Schema\DeploymentProtectionRule;
use ApiClients\Client\GitHub\Schema\DeploymentStatus;
use ApiClients\Client\GitHub\Schema\EmptyObject;
use ApiClients\Client\GitHub\Schema\FullRepository;
use ApiClients\Client\GitHub\Schema\Issue;
use ApiClients\Client\GitHub\Schema\IssueComment;
use ApiClients\Client\GitHub\Schema\Operations\Actions\GenerateRunnerJitconfigForOrg\Response\ApplicationJson\Created;
use ApiClients\Client\GitHub\Schema\Operations\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHub\Schema\Operations\SecurityAdvisories\CreateRepositoryAdvisoryCveRequest\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Client\GitHub\Schema\PullRequestReview;
use ApiClients\Client\GitHub\Schema\PullRequestReviewComment;
use ApiClients\Client\GitHub\Schema\PullRequestSimple;
use ApiClients\Client\GitHub\Schema\Reaction;
use ApiClients\Client\GitHub\Schema\ReleaseAsset;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Seven
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return |Observable<Schema\Label>|Schema\BasicError */
    public function call(string $call, array $params, array $pathChunks): Ok|WithoutBody|Created|AuthenticationToken|BranchWithProtection|EmptyObject|Reaction|CommitComment|DeploymentStatus|DeploymentBranchPolicy|DeploymentProtectionRule|Issue|IssueComment|iterable|BasicError|Codespace|PullRequestReviewComment|PullRequestSimple|PullRequestReview|ReleaseAsset|Json|FullRepository
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'runners') {
                            if ($pathChunks[5] === '{runner_id}') {
                                if ($pathChunks[6] === 'labels') {
                                    if ($call === 'POST /orgs/{org}/actions/runners/{runner_id}/labels') {
                                        return $this->routers->internal🔀Router🔀Post🔀Actions()->addCustomLabelsToSelfHostedRunnerForOrg($params);
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'packages') {
                        if ($pathChunks[4] === '{package_type}') {
                            if ($pathChunks[5] === '{package_name}') {
                                if ($pathChunks[6] === 'restore') {
                                    if ($call === 'POST /orgs/{org}/packages/{package_type}/{package_name}/restore') {
                                        return $this->routers->internal🔀Router🔀Post🔀Packages()->restorePackageForOrg($params);
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
                                if ($pathChunks[6] === 'generate-jitconfig') {
                                    if ($call === 'POST /repos/{owner}/{repo}/actions/runners/generate-jitconfig') {
                                        return $this->routers->internal🔀Router🔀Post🔀Actions()->generateRunnerJitconfigForRepo($params);
                                    }
                                } elseif ($pathChunks[6] === 'registration-token') {
                                    if ($call === 'POST /repos/{owner}/{repo}/actions/runners/registration-token') {
                                        return $this->routers->internal🔀Router🔀Post🔀Actions()->createRegistrationTokenForRepo($params);
                                    }
                                } elseif ($pathChunks[6] === 'remove-token') {
                                    if ($call === 'POST /repos/{owner}/{repo}/actions/runners/remove-token') {
                                        return $this->routers->internal🔀Router🔀Post🔀Actions()->createRemoveTokenForRepo($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'branches') {
                            if ($pathChunks[5] === '{branch}') {
                                if ($pathChunks[6] === 'rename') {
                                    if ($call === 'POST /repos/{owner}/{repo}/branches/{branch}/rename') {
                                        return $this->routers->internal🔀Router🔀Post🔀Repos()->renameBranch($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'check-runs') {
                            if ($pathChunks[5] === '{check_run_id}') {
                                if ($pathChunks[6] === 'rerequest') {
                                    if ($call === 'POST /repos/{owner}/{repo}/check-runs/{check_run_id}/rerequest') {
                                        return $this->routers->internal🔀Router🔀Post🔀Checks()->rerequestRun($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'check-suites') {
                            if ($pathChunks[5] === '{check_suite_id}') {
                                if ($pathChunks[6] === 'rerequest') {
                                    if ($call === 'POST /repos/{owner}/{repo}/check-suites/{check_suite_id}/rerequest') {
                                        return $this->routers->internal🔀Router🔀Post🔀Checks()->rerequestSuite($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'comments') {
                            if ($pathChunks[5] === '{comment_id}') {
                                if ($pathChunks[6] === 'reactions') {
                                    if ($call === 'POST /repos/{owner}/{repo}/comments/{comment_id}/reactions') {
                                        return $this->routers->internal🔀Router🔀Post🔀Reactions()->createForCommitComment($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'commits') {
                            if ($pathChunks[5] === '{commit_sha}') {
                                if ($pathChunks[6] === 'comments') {
                                    if ($call === 'POST /repos/{owner}/{repo}/commits/{commit_sha}/comments') {
                                        return $this->routers->internal🔀Router🔀Post🔀Repos()->createCommitComment($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'deployments') {
                            if ($pathChunks[5] === '{deployment_id}') {
                                if ($pathChunks[6] === 'statuses') {
                                    if ($call === 'POST /repos/{owner}/{repo}/deployments/{deployment_id}/statuses') {
                                        return $this->routers->internal🔀Router🔀Post🔀Repos()->createDeploymentStatus($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'environments') {
                            if ($pathChunks[5] === '{environment_name}') {
                                if ($pathChunks[6] === 'deployment-branch-policies') {
                                    if ($call === 'POST /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies') {
                                        return $this->routers->internal🔀Router🔀Post🔀Repos()->createDeploymentBranchPolicy($params);
                                    }
                                } elseif ($pathChunks[6] === 'deployment_protection_rules') {
                                    if ($call === 'POST /repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules') {
                                        return $this->routers->internal🔀Router🔀Post🔀Repos()->createDeploymentProtectionRule($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($pathChunks[5] === '{hook_id}') {
                                if ($pathChunks[6] === 'pings') {
                                    if ($call === 'POST /repos/{owner}/{repo}/hooks/{hook_id}/pings') {
                                        return $this->routers->internal🔀Router🔀Post🔀Repos()->pingWebhook($params);
                                    }
                                } elseif ($pathChunks[6] === 'tests') {
                                    if ($call === 'POST /repos/{owner}/{repo}/hooks/{hook_id}/tests') {
                                        return $this->routers->internal🔀Router🔀Post🔀Repos()->testPushWebhook($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === '{issue_number}') {
                                if ($pathChunks[6] === 'assignees') {
                                    if ($call === 'POST /repos/{owner}/{repo}/issues/{issue_number}/assignees') {
                                        return $this->routers->internal🔀Router🔀Post🔀Issues()->addAssignees($params);
                                    }
                                } elseif ($pathChunks[6] === 'comments') {
                                    if ($call === 'POST /repos/{owner}/{repo}/issues/{issue_number}/comments') {
                                        return $this->routers->internal🔀Router🔀Post🔀Issues()->createComment($params);
                                    }
                                } elseif ($pathChunks[6] === 'labels') {
                                    if ($call === 'POST /repos/{owner}/{repo}/issues/{issue_number}/labels') {
                                        return $this->routers->internal🔀Router🔀Post🔀Issues()->addLabels($params);
                                    }
                                } elseif ($pathChunks[6] === 'reactions') {
                                    if ($call === 'POST /repos/{owner}/{repo}/issues/{issue_number}/reactions') {
                                        return $this->routers->internal🔀Router🔀Post🔀Reactions()->createForIssue($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === '{pull_number}') {
                                if ($pathChunks[6] === 'codespaces') {
                                    if ($call === 'POST /repos/{owner}/{repo}/pulls/{pull_number}/codespaces') {
                                        return $this->routers->internal🔀Router🔀Post🔀Codespaces()->createWithPrForAuthenticatedUser($params);
                                    }
                                } elseif ($pathChunks[6] === 'comments') {
                                    if ($call === 'POST /repos/{owner}/{repo}/pulls/{pull_number}/comments') {
                                        return $this->routers->internal🔀Router🔀Post🔀Pulls()->createReviewComment($params);
                                    }
                                } elseif ($pathChunks[6] === 'requested_reviewers') {
                                    if ($call === 'POST /repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers') {
                                        return $this->routers->internal🔀Router🔀Post🔀Pulls()->requestReviewers($params);
                                    }
                                } elseif ($pathChunks[6] === 'reviews') {
                                    if ($call === 'POST /repos/{owner}/{repo}/pulls/{pull_number}/reviews') {
                                        return $this->routers->internal🔀Router🔀Post🔀Pulls()->createReview($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($pathChunks[5] === '{release_id}') {
                                if ($pathChunks[6] === 'assets') {
                                    if ($call === 'POST /repos/{owner}/{repo}/releases/{release_id}/assets') {
                                        return $this->routers->internal🔀Router🔀Post🔀Repos()->uploadReleaseAsset($params);
                                    }
                                } elseif ($pathChunks[6] === 'reactions') {
                                    if ($call === 'POST /repos/{owner}/{repo}/releases/{release_id}/reactions') {
                                        return $this->routers->internal🔀Router🔀Post🔀Reactions()->createForRelease($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'security-advisories') {
                            if ($pathChunks[5] === '{ghsa_id}') {
                                if ($pathChunks[6] === 'cve') {
                                    if ($call === 'POST /repos/{owner}/{repo}/security-advisories/{ghsa_id}/cve') {
                                        return $this->routers->internal🔀Router🔀Post🔀SecurityAdvisories()->createRepositoryAdvisoryCveRequest($params);
                                    }
                                } elseif ($pathChunks[6] === 'forks') {
                                    if ($call === 'POST /repos/{owner}/{repo}/security-advisories/{ghsa_id}/forks') {
                                        return $this->routers->internal🔀Router🔀Post🔀SecurityAdvisories()->createFork($params);
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
                                if ($pathChunks[6] === 'restore') {
                                    if ($call === 'POST /users/{username}/packages/{package_type}/{package_name}/restore') {
                                        return $this->routers->internal🔀Router🔀Post🔀Packages()->restorePackageForUser($params);
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
