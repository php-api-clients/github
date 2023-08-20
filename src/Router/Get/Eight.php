<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy;
use ApiClients\Client\GitHub\Schema\CodeScanningCodeqlDatabase;
use ApiClients\Client\GitHub\Schema\DeploymentBranchPolicy;
use ApiClients\Client\GitHub\Schema\DeploymentProtectionRule;
use ApiClients\Client\GitHub\Schema\DeploymentStatus;
use ApiClients\Client\GitHub\Schema\HookDelivery;
use ApiClients\Client\GitHub\Schema\OidcCustomSubRepo;
use ApiClients\Client\GitHub\Schema\Operations\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHub\Schema\Operations\Actions\ListWorkflowRunArtifacts\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHub\Schema\PackageVersion;
use ApiClients\Client\GitHub\Schema\ProtectedBranchAdminEnforced;
use ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview;
use ApiClients\Client\GitHub\Schema\PullRequestReview;
use ApiClients\Client\GitHub\Schema\StatusCheckPolicy;
use ApiClients\Client\GitHub\Schema\TeamRepository;
use ApiClients\Client\GitHub\Schema\WorkflowRunUsage;
use ApiClients\Client\GitHub\Schema\WorkflowUsage;
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

    /** @return |iterable<Schema\TeamDiscussionComment>|iterable<Schema\Reaction>|(Schema\TeamRepository|array{code: int})|array{code: int, location: string}|iterable<Schema\EnvironmentApprovals>|iterable<Schema\PendingDeployment>|iterable<Schema\CodeScanningAlertInstance>|(Schema\CodeScanningCodeqlDatabase|array{code: int}|(iterable<Schema\SecretScanningLocation> */
    public function call(string $call, array $params, array $pathChunks): PackageVersion|iterable|TeamRepository|OidcCustomSubRepo|Ok|Json|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListJobsForWorkflowRun\Response\ApplicationJson\Ok\Application\Json|WorkflowRunUsage|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListWorkflowRuns\Response\ApplicationJson\Ok\Application\Json|WorkflowUsage|ProtectedBranchAdminEnforced|ProtectedBranchPullRequestReview|StatusCheckPolicy|BranchRestrictionPolicy|CodeScanningCodeqlDatabase|DeploymentStatus|DeploymentBranchPolicy|\ApiClients\Client\GitHub\Schema\Operations\Repos\ListCustomDeploymentRuleIntegrations\Response\ApplicationJson\Ok|DeploymentProtectionRule|HookDelivery|PullRequestReview
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'packages') {
                        if ($pathChunks[4] === '{package_type}') {
                            if ($pathChunks[5] === '{package_name}') {
                                if ($pathChunks[6] === 'versions') {
                                    if ($pathChunks[7] === '{package_version_id}') {
                                        if ($call === 'GET /orgs/{org}/packages/{package_type}/{package_name}/versions/{package_version_id}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Packages::class, $this->router) === false) {
                                                $this->router[Router\Get\Packages::class] = new Router\Get\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\Packages::class]->getPackageVersionForOrganization($params);
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
                                        if ($call === 'GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                                $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\Teams::class]->listDiscussionCommentsInOrg($params);
                                        }
                                    } elseif ($pathChunks[7] === 'reactions') {
                                        if ($call === 'GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Reactions::class, $this->router) === false) {
                                                $this->router[Router\Get\Reactions::class] = new Router\Get\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\Reactions::class]->listForTeamDiscussionInOrg($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === 'repos') {
                                if ($pathChunks[6] === '{owner}') {
                                    if ($pathChunks[7] === '{repo}') {
                                        if ($call === 'GET /orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                                $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\Teams::class]->checkPermissionsForRepoInOrg($params);
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
                            if ($pathChunks[5] === 'artifacts') {
                                if ($pathChunks[6] === '{artifact_id}') {
                                    if ($pathChunks[7] === '{archive_format}') {
                                        if ($call === 'GET /repos/{owner}/{repo}/actions/artifacts/{artifact_id}/{archive_format}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                                $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\Actions::class]->downloadArtifact($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === 'jobs') {
                                if ($pathChunks[6] === '{job_id}') {
                                    if ($pathChunks[7] === 'logs') {
                                        if ($call === 'GET /repos/{owner}/{repo}/actions/jobs/{job_id}/logs') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                                $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\Actions::class]->downloadJobLogsForWorkflowRun($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === 'oidc') {
                                if ($pathChunks[6] === 'customization') {
                                    if ($pathChunks[7] === 'sub') {
                                        if ($call === 'GET /repos/{owner}/{repo}/actions/oidc/customization/sub') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                                $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\Actions::class]->getCustomOidcSubClaimForRepo($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === 'runners') {
                                if ($pathChunks[6] === '{runner_id}') {
                                    if ($pathChunks[7] === 'labels') {
                                        if ($call === 'GET /repos/{owner}/{repo}/actions/runners/{runner_id}/labels') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                                $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\Actions::class]->listLabelsForSelfHostedRunnerForRepo($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === 'runs') {
                                if ($pathChunks[6] === '{run_id}') {
                                    if ($pathChunks[7] === 'approvals') {
                                        if ($call === 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/approvals') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                                $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\Actions::class]->getReviewsForRun($params);
                                        }
                                    } elseif ($pathChunks[7] === 'artifacts') {
                                        if ($call === 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/artifacts') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                                $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\Actions::class]->listWorkflowRunArtifacts($params);
                                        }
                                    } elseif ($pathChunks[7] === 'jobs') {
                                        if ($call === 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/jobs') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                                $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\Actions::class]->listJobsForWorkflowRun($params);
                                        }
                                    } elseif ($pathChunks[7] === 'logs') {
                                        if ($call === 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/logs') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                                $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\Actions::class]->downloadWorkflowRunLogs($params);
                                        }
                                    } elseif ($pathChunks[7] === 'pending_deployments') {
                                        if ($call === 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/pending_deployments') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                                $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\Actions::class]->getPendingDeploymentsForRun($params);
                                        }
                                    } elseif ($pathChunks[7] === 'timing') {
                                        if ($call === 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/timing') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                                $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\Actions::class]->getWorkflowRunUsage($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === 'workflows') {
                                if ($pathChunks[6] === '{workflow_id}') {
                                    if ($pathChunks[7] === 'runs') {
                                        if ($call === 'GET /repos/{owner}/{repo}/actions/workflows/{workflow_id}/runs') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                                $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\Actions::class]->listWorkflowRuns($params);
                                        }
                                    } elseif ($pathChunks[7] === 'timing') {
                                        if ($call === 'GET /repos/{owner}/{repo}/actions/workflows/{workflow_id}/timing') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                                $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\Actions::class]->getWorkflowUsage($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'branches') {
                            if ($pathChunks[5] === '{branch}') {
                                if ($pathChunks[6] === 'protection') {
                                    if ($pathChunks[7] === 'enforce_admins') {
                                        if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}/protection/enforce_admins') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                                $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\Repos::class]->getAdminBranchProtection($params);
                                        }
                                    } elseif ($pathChunks[7] === 'required_pull_request_reviews') {
                                        if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}/protection/required_pull_request_reviews') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                                $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\Repos::class]->getPullRequestReviewProtection($params);
                                        }
                                    } elseif ($pathChunks[7] === 'required_signatures') {
                                        if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}/protection/required_signatures') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                                $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\Repos::class]->getCommitSignatureProtection($params);
                                        }
                                    } elseif ($pathChunks[7] === 'required_status_checks') {
                                        if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                                $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\Repos::class]->getStatusChecksProtection($params);
                                        }
                                    } elseif ($pathChunks[7] === 'restrictions') {
                                        if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}/protection/restrictions') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                                $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\Repos::class]->getAccessRestrictions($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'code-scanning') {
                            if ($pathChunks[5] === 'alerts') {
                                if ($pathChunks[6] === '{alert_number}') {
                                    if ($pathChunks[7] === 'instances') {
                                        if ($call === 'GET /repos/{owner}/{repo}/code-scanning/alerts/{alert_number}/instances') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\CodeScanning::class, $this->router) === false) {
                                                $this->router[Router\Get\CodeScanning::class] = new Router\Get\CodeScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\CodeScanning::class]->listAlertInstances($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === 'codeql') {
                                if ($pathChunks[6] === 'databases') {
                                    if ($pathChunks[7] === '{language}') {
                                        if ($call === 'GET /repos/{owner}/{repo}/code-scanning/codeql/databases/{language}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\CodeScanning::class, $this->router) === false) {
                                                $this->router[Router\Get\CodeScanning::class] = new Router\Get\CodeScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\CodeScanning::class]->getCodeqlDatabase($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'deployments') {
                            if ($pathChunks[5] === '{deployment_id}') {
                                if ($pathChunks[6] === 'statuses') {
                                    if ($pathChunks[7] === '{status_id}') {
                                        if ($call === 'GET /repos/{owner}/{repo}/deployments/{deployment_id}/statuses/{status_id}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                                $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\Repos::class]->getDeploymentStatus($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'environments') {
                            if ($pathChunks[5] === '{environment_name}') {
                                if ($pathChunks[6] === 'deployment-branch-policies') {
                                    if ($pathChunks[7] === '{branch_policy_id}') {
                                        if ($call === 'GET /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies/{branch_policy_id}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                                $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\Repos::class]->getDeploymentBranchPolicy($params);
                                        }
                                    }
                                } elseif ($pathChunks[6] === 'deployment_protection_rules') {
                                    if ($pathChunks[7] === 'apps') {
                                        if ($call === 'GET /repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules/apps') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                                $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\Repos::class]->listCustomDeploymentRuleIntegrations($params);
                                        }
                                    } elseif ($pathChunks[7] === '{protection_rule_id}') {
                                        if ($call === 'GET /repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules/{protection_rule_id}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                                $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\Repos::class]->getCustomDeploymentProtectionRule($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($pathChunks[5] === '{hook_id}') {
                                if ($pathChunks[6] === 'deliveries') {
                                    if ($pathChunks[7] === '{delivery_id}') {
                                        if ($call === 'GET /repos/{owner}/{repo}/hooks/{hook_id}/deliveries/{delivery_id}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                                $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\Repos::class]->getWebhookDelivery($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === 'comments') {
                                if ($pathChunks[6] === '{comment_id}') {
                                    if ($pathChunks[7] === 'reactions') {
                                        if ($call === 'GET /repos/{owner}/{repo}/issues/comments/{comment_id}/reactions') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Reactions::class, $this->router) === false) {
                                                $this->router[Router\Get\Reactions::class] = new Router\Get\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\Reactions::class]->listForIssueComment($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === '{issue_number}') {
                                if ($pathChunks[6] === 'assignees') {
                                    if ($pathChunks[7] === '{assignee}') {
                                        if ($call === 'GET /repos/{owner}/{repo}/issues/{issue_number}/assignees/{assignee}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                                                $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\Issues::class]->checkUserCanBeAssignedToIssue($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === 'comments') {
                                if ($pathChunks[6] === '{comment_id}') {
                                    if ($pathChunks[7] === 'reactions') {
                                        if ($call === 'GET /repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Reactions::class, $this->router) === false) {
                                                $this->router[Router\Get\Reactions::class] = new Router\Get\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\Reactions::class]->listForPullRequestReviewComment($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === '{pull_number}') {
                                if ($pathChunks[6] === 'reviews') {
                                    if ($pathChunks[7] === '{review_id}') {
                                        if ($call === 'GET /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Pulls::class, $this->router) === false) {
                                                $this->router[Router\Get\Pulls::class] = new Router\Get\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\Pulls::class]->getReview($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'secret-scanning') {
                            if ($pathChunks[5] === 'alerts') {
                                if ($pathChunks[6] === '{alert_number}') {
                                    if ($pathChunks[7] === 'locations') {
                                        if ($call === 'GET /repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}/locations') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\SecretScanning::class, $this->router) === false) {
                                                $this->router[Router\Get\SecretScanning::class] = new Router\Get\SecretScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\SecretScanning::class]->listLocationsForAlert($params);
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
                                        if ($call === 'GET /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}/reactions') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Reactions::class, $this->router) === false) {
                                                $this->router[Router\Get\Reactions::class] = new Router\Get\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\Reactions::class]->listForTeamDiscussionCommentLegacy($params);
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
                                        if ($call === 'GET /users/{username}/packages/{package_type}/{package_name}/versions/{package_version_id}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Packages::class, $this->router) === false) {
                                                $this->router[Router\Get\Packages::class] = new Router\Get\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\Packages::class]->getPackageVersionForUser($params);
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
