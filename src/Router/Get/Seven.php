<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\Schema\ActionsCacheUsageByRepository;
use ApiClients\Client\GitHub\Schema\ActionsGetDefaultWorkflowPermissions;
use ApiClients\Client\GitHub\Schema\ActionsPublicKey;
use ApiClients\Client\GitHub\Schema\ActionsSecret;
use ApiClients\Client\GitHub\Schema\ActionsVariable;
use ApiClients\Client\GitHub\Schema\ActionsWorkflowAccessToRepository;
use ApiClients\Client\GitHub\Schema\Artifact;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\Blob;
use ApiClients\Client\GitHub\Schema\BranchProtection;
use ApiClients\Client\GitHub\Schema\CodeScanningAlert;
use ApiClients\Client\GitHub\Schema\CodeScanningAnalysis;
use ApiClients\Client\GitHub\Schema\CodeScanningSarifsStatus;
use ApiClients\Client\GitHub\Schema\CodespacesPublicKey;
use ApiClients\Client\GitHub\Schema\CombinedCommitStatus;
use ApiClients\Client\GitHub\Schema\DependabotAlert;
use ApiClients\Client\GitHub\Schema\DependabotPublicKey;
use ApiClients\Client\GitHub\Schema\DependabotSecret;
use ApiClients\Client\GitHub\Schema\GitCommit;
use ApiClients\Client\GitHub\Schema\GitRef;
use ApiClients\Client\GitHub\Schema\GitTag;
use ApiClients\Client\GitHub\Schema\GitTree;
use ApiClients\Client\GitHub\Schema\HookDelivery;
use ApiClients\Client\GitHub\Schema\IssueComment;
use ApiClients\Client\GitHub\Schema\IssueEvent;
use ApiClients\Client\GitHub\Schema\Job;
use ApiClients\Client\GitHub\Schema\OidcCustomSub;
use ApiClients\Client\GitHub\Schema\Operations\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelectedReposForOrgVariable\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHub\Schema\PackageVersion;
use ApiClients\Client\GitHub\Schema\PageBuild;
use ApiClients\Client\GitHub\Schema\PullRequestReviewComment;
use ApiClients\Client\GitHub\Schema\PullRequestReviewRequest;
use ApiClients\Client\GitHub\Schema\Release;
use ApiClients\Client\GitHub\Schema\ReleaseAsset;
use ApiClients\Client\GitHub\Schema\RepoCodespacesSecret;
use ApiClients\Client\GitHub\Schema\RepositoryCollaboratorPermission;
use ApiClients\Client\GitHub\Schema\Runner;
use ApiClients\Client\GitHub\Schema\SecretScanningAlert;
use ApiClients\Client\GitHub\Schema\SelectedActions;
use ApiClients\Client\GitHub\Schema\TeamDiscussion;
use ApiClients\Client\GitHub\Schema\TeamDiscussionComment;
use ApiClients\Client\GitHub\Schema\TeamMembership;
use ApiClients\Client\GitHub\Schema\TeamProject;
use ApiClients\Client\GitHub\Schema\WebhookConfig;
use ApiClients\Client\GitHub\Schema\Workflow;
use ApiClients\Client\GitHub\Schema\WorkflowRun;
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

    /** @return |(Schema\Operations\Actions\ListSelectedReposForOrgVariable\Response\ApplicationJson\Ok\Application\Json|array{code: int})|Observable<Schema\PackageVersion>|(Schema\TeamMembership|(Schema\TeamProject|Observable<Schema\RunnerApplication>|Observable<Schema\CheckAnnotation>|(Schema\CodeScanningAlert|Observable<Schema\CodeScanningCodeqlDatabase>|(Schema\CodeScanningSarifsStatus|Observable<Schema\Reaction>|Observable<Schema\BranchShort>|Observable<Schema\CommitComment>|Observable<Schema\PullRequestSimple>|(Observable<Schema\Status>|Schema\BasicError)|(Schema\DependabotAlert|Observable<Schema\DependencyGraphDiff>|Observable<Schema\DeploymentStatus>|Observable<Schema\GitRef>|Observable<Schema\HookDeliveryItem>|Observable<Schema\IssueComment>|Observable<(Schema\LabeledIssueEvent|Schema\UnlabeledIssueEvent|Schema\AssignedIssueEvent|Schema\UnassignedIssueEvent|Schema\MilestonedIssueEvent|Schema\DemilestonedIssueEvent|Schema\RenamedIssueEvent|Schema\ReviewRequestedIssueEvent|Schema\ReviewRequestRemovedIssueEvent|Schema\ReviewDismissedIssueEvent|Schema\LockedIssueEvent|Schema\AddedToProjectIssueEvent|Schema\MovedColumnInProjectIssueEvent|Schema\RemovedFromProjectIssueEvent|Schema\ConvertedNoteToIssueIssueEvent)>|(Observable<Schema\Label>|Schema\ConvertedNoteToIssueIssueEvent|Schema\TimelineCommentEvent|Schema\TimelineCrossReferencedEvent|Schema\TimelineCommittedEvent|Schema\TimelineReviewedEvent|Schema\TimelineLineCommentedEvent|Schema\TimelineCommitCommentedEvent|Schema\TimelineAssignedIssueEvent|Schema\TimelineUnassignedIssueEvent|Schema\StateChangeIssueEvent)>|Observable<Schema\Label>|Observable<Schema\PullRequestReviewComment>|Observable<Schema\Commit>|Observable<Schema\DiffEntry>|array{code: int}|Observable<Schema\PullRequestReview>|(Schema\ReleaseAsset|Observable<Schema\ReleaseAsset>|Observable<(Schema\RepositoryRuleCreation|Schema\RepositoryRuleUpdate|Schema\RepositoryRuleDeletion|Schema\RepositoryRuleRequiredLinearHistory|Schema\RepositoryRuleRequiredDeployments|Schema\RepositoryRuleRequiredSignatures|Schema\RepositoryRulePullRequest|Schema\RepositoryRuleRequiredStatusChecks|Schema\RepositoryRuleNonFastForward|Schema\RepositoryRuleCommitMessagePattern|Schema\RepositoryRuleCommitAuthorEmailPattern|Schema\RepositoryRuleCommitterEmailPattern|Schema\RepositoryRuleBranchNamePattern|Schema\RepositoryRuleTagNamePattern)>|(Schema\SecretScanningAlert|Observable<Schema\ContentTraffic>|Observable<Schema\ReferrerTraffic> */
    public function call(string $call, array $params, array $pathChunks): OidcCustomSub|Ok|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok|Json|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Dependabot\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok\Application\Json|HookDelivery|iterable|TeamDiscussion|TeamMembership|TeamProject|Artifact|ActionsCacheUsageByRepository|Job|ActionsWorkflowAccessToRepository|SelectedActions|ActionsGetDefaultWorkflowPermissions|Runner|WorkflowRun|ActionsPublicKey|ActionsSecret|ActionsVariable|Workflow|BranchProtection|\ApiClients\Client\GitHub\Schema\Operations\Checks\ListForSuite\Response\ApplicationJson\Ok|CodeScanningAlert|CodeScanningAnalysis|CodeScanningSarifsStatus|CodespacesPublicKey|RepoCodespacesSecret|RepositoryCollaboratorPermission|\ApiClients\Client\GitHub\Schema\Operations\Checks\ListForRef\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Checks\ListSuitesForRef\Response\ApplicationJson\Ok|CombinedCommitStatus|BasicError|DependabotAlert|DependabotPublicKey|DependabotSecret|\ApiClients\Client\GitHub\Schema\Operations\Repos\ListDeploymentBranchPolicies\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Repos\GetAllDeploymentProtectionRules\Response\ApplicationJson\Ok|Blob|GitCommit|GitRef|GitTag|GitTree|WebhookConfig|IssueComment|IssueEvent|PageBuild|PullRequestReviewComment|PullRequestReviewRequest|ReleaseAsset|Release|SecretScanningAlert|TeamDiscussionComment|PackageVersion
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'oidc') {
                            if ($pathChunks[5] === 'customization') {
                                if ($pathChunks[6] === 'sub') {
                                    if ($call === 'GET /orgs/{org}/actions/oidc/customization/sub') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Oidc::class, $this->router) === false) {
                                            $this->router[Router\Get\Oidc::class] = new Router\Get\Oidc($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Oidc::class]->GetOidcCustomSubTemplateForOrg($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'runners') {
                            if ($pathChunks[5] === '{runner_id}') {
                                if ($pathChunks[6] === 'labels') {
                                    if ($call === 'GET /orgs/{org}/actions/runners/{runner_id}/labels') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                            $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Actions::class]->ListLabelsForSelfHostedRunnerForOrg($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === '{secret_name}') {
                                if ($pathChunks[6] === 'repositories') {
                                    if ($call === 'GET /orgs/{org}/actions/secrets/{secret_name}/repositories') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                            $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Actions::class]->ListSelectedReposForOrgSecret($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'variables') {
                            if ($pathChunks[5] === '{name}') {
                                if ($pathChunks[6] === 'repositories') {
                                    if ($call === 'GET /orgs/{org}/actions/variables/{name}/repositories') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                            $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Actions::class]->ListSelectedReposForOrgVariable($params);
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'codespaces') {
                        if ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === '{secret_name}') {
                                if ($pathChunks[6] === 'repositories') {
                                    if ($call === 'GET /orgs/{org}/codespaces/secrets/{secret_name}/repositories') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Codespaces::class, $this->router) === false) {
                                            $this->router[Router\Get\Codespaces::class] = new Router\Get\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Codespaces::class]->ListSelectedReposForOrgSecret($params);
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'dependabot') {
                        if ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === '{secret_name}') {
                                if ($pathChunks[6] === 'repositories') {
                                    if ($call === 'GET /orgs/{org}/dependabot/secrets/{secret_name}/repositories') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Dependabot::class, $this->router) === false) {
                                            $this->router[Router\Get\Dependabot::class] = new Router\Get\Dependabot($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Dependabot::class]->ListSelectedReposForOrgSecret($params);
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($pathChunks[4] === '{hook_id}') {
                            if ($pathChunks[5] === 'deliveries') {
                                if ($pathChunks[6] === '{delivery_id}') {
                                    if ($call === 'GET /orgs/{org}/hooks/{hook_id}/deliveries/{delivery_id}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                            $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Orgs::class]->GetWebhookDelivery($params);
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'packages') {
                        if ($pathChunks[4] === '{package_type}') {
                            if ($pathChunks[5] === '{package_name}') {
                                if ($pathChunks[6] === 'versions') {
                                    if ($call === 'GET /orgs/{org}/packages/{package_type}/{package_name}/versions') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Packages::class, $this->router) === false) {
                                            $this->router[Router\Get\Packages::class] = new Router\Get\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Packages::class]->GetAllPackageVersionsForPackageOwnedByOrg($params);
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($pathChunks[5] === 'discussions') {
                                if ($pathChunks[6] === '{discussion_number}') {
                                    if ($call === 'GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                            $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Teams::class]->GetDiscussionInOrg($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'memberships') {
                                if ($pathChunks[6] === '{username}') {
                                    if ($call === 'GET /orgs/{org}/teams/{team_slug}/memberships/{username}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                            $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Teams::class]->GetMembershipForUserInOrg($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'projects') {
                                if ($pathChunks[6] === '{project_id}') {
                                    if ($call === 'GET /orgs/{org}/teams/{team_slug}/projects/{project_id}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                            $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Teams::class]->CheckPermissionsForProjectInOrg($params);
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
                                    if ($call === 'GET /repos/{owner}/{repo}/actions/artifacts/{artifact_id}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                            $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Actions::class]->GetArtifact($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'cache') {
                                if ($pathChunks[6] === 'usage') {
                                    if ($call === 'GET /repos/{owner}/{repo}/actions/cache/usage') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                            $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Actions::class]->GetActionsCacheUsage($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'jobs') {
                                if ($pathChunks[6] === '{job_id}') {
                                    if ($call === 'GET /repos/{owner}/{repo}/actions/jobs/{job_id}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                            $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Actions::class]->GetJobForWorkflowRun($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'permissions') {
                                if ($pathChunks[6] === 'access') {
                                    if ($call === 'GET /repos/{owner}/{repo}/actions/permissions/access') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                            $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Actions::class]->GetWorkflowAccessToRepository($params);
                                    }
                                } elseif ($pathChunks[6] === 'selected-actions') {
                                    if ($call === 'GET /repos/{owner}/{repo}/actions/permissions/selected-actions') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                            $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Actions::class]->GetAllowedActionsRepository($params);
                                    }
                                } elseif ($pathChunks[6] === 'workflow') {
                                    if ($call === 'GET /repos/{owner}/{repo}/actions/permissions/workflow') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                            $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Actions::class]->GetGithubActionsDefaultWorkflowPermissionsRepository($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'runners') {
                                if ($pathChunks[6] === 'downloads') {
                                    if ($call === 'GET /repos/{owner}/{repo}/actions/runners/downloads') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                            $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Actions::class]->ListRunnerApplicationsForRepo($params);
                                    }
                                } elseif ($pathChunks[6] === '{runner_id}') {
                                    if ($call === 'GET /repos/{owner}/{repo}/actions/runners/{runner_id}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                            $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Actions::class]->GetSelfHostedRunnerForRepo($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'runs') {
                                if ($pathChunks[6] === '{run_id}') {
                                    if ($call === 'GET /repos/{owner}/{repo}/actions/runs/{run_id}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                            $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Actions::class]->GetWorkflowRun($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'secrets') {
                                if ($pathChunks[6] === 'public-key') {
                                    if ($call === 'GET /repos/{owner}/{repo}/actions/secrets/public-key') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                            $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Actions::class]->GetRepoPublicKey($params);
                                    }
                                } elseif ($pathChunks[6] === '{secret_name}') {
                                    if ($call === 'GET /repos/{owner}/{repo}/actions/secrets/{secret_name}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                            $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Actions::class]->GetRepoSecret($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'variables') {
                                if ($pathChunks[6] === '{name}') {
                                    if ($call === 'GET /repos/{owner}/{repo}/actions/variables/{name}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                            $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Actions::class]->GetRepoVariable($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'workflows') {
                                if ($pathChunks[6] === '{workflow_id}') {
                                    if ($call === 'GET /repos/{owner}/{repo}/actions/workflows/{workflow_id}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                            $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Actions::class]->GetWorkflow($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'branches') {
                            if ($pathChunks[5] === '{branch}') {
                                if ($pathChunks[6] === 'protection') {
                                    if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}/protection') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                            $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Repos::class]->GetBranchProtection($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'check-runs') {
                            if ($pathChunks[5] === '{check_run_id}') {
                                if ($pathChunks[6] === 'annotations') {
                                    if ($call === 'GET /repos/{owner}/{repo}/check-runs/{check_run_id}/annotations') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Checks::class, $this->router) === false) {
                                            $this->router[Router\Get\Checks::class] = new Router\Get\Checks($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Checks::class]->ListAnnotations($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'check-suites') {
                            if ($pathChunks[5] === '{check_suite_id}') {
                                if ($pathChunks[6] === 'check-runs') {
                                    if ($call === 'GET /repos/{owner}/{repo}/check-suites/{check_suite_id}/check-runs') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Checks::class, $this->router) === false) {
                                            $this->router[Router\Get\Checks::class] = new Router\Get\Checks($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Checks::class]->ListForSuite($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'code-scanning') {
                            if ($pathChunks[5] === 'alerts') {
                                if ($pathChunks[6] === '{alert_number}') {
                                    if ($call === 'GET /repos/{owner}/{repo}/code-scanning/alerts/{alert_number}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\CodeScanning::class, $this->router) === false) {
                                            $this->router[Router\Get\CodeScanning::class] = new Router\Get\CodeScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\CodeScanning::class]->GetAlert($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'analyses') {
                                if ($pathChunks[6] === '{analysis_id}') {
                                    if ($call === 'GET /repos/{owner}/{repo}/code-scanning/analyses/{analysis_id}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\CodeScanning::class, $this->router) === false) {
                                            $this->router[Router\Get\CodeScanning::class] = new Router\Get\CodeScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\CodeScanning::class]->GetAnalysis($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'codeql') {
                                if ($pathChunks[6] === 'databases') {
                                    if ($call === 'GET /repos/{owner}/{repo}/code-scanning/codeql/databases') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\CodeScanning::class, $this->router) === false) {
                                            $this->router[Router\Get\CodeScanning::class] = new Router\Get\CodeScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\CodeScanning::class]->ListCodeqlDatabases($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'sarifs') {
                                if ($pathChunks[6] === '{sarif_id}') {
                                    if ($call === 'GET /repos/{owner}/{repo}/code-scanning/sarifs/{sarif_id}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\CodeScanning::class, $this->router) === false) {
                                            $this->router[Router\Get\CodeScanning::class] = new Router\Get\CodeScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\CodeScanning::class]->GetSarif($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'codespaces') {
                            if ($pathChunks[5] === 'secrets') {
                                if ($pathChunks[6] === 'public-key') {
                                    if ($call === 'GET /repos/{owner}/{repo}/codespaces/secrets/public-key') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Codespaces::class, $this->router) === false) {
                                            $this->router[Router\Get\Codespaces::class] = new Router\Get\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Codespaces::class]->GetRepoPublicKey($params);
                                    }
                                } elseif ($pathChunks[6] === '{secret_name}') {
                                    if ($call === 'GET /repos/{owner}/{repo}/codespaces/secrets/{secret_name}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Codespaces::class, $this->router) === false) {
                                            $this->router[Router\Get\Codespaces::class] = new Router\Get\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Codespaces::class]->GetRepoSecret($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'collaborators') {
                            if ($pathChunks[5] === '{username}') {
                                if ($pathChunks[6] === 'permission') {
                                    if ($call === 'GET /repos/{owner}/{repo}/collaborators/{username}/permission') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                            $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Repos::class]->GetCollaboratorPermissionLevel($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'comments') {
                            if ($pathChunks[5] === '{comment_id}') {
                                if ($pathChunks[6] === 'reactions') {
                                    if ($call === 'GET /repos/{owner}/{repo}/comments/{comment_id}/reactions') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Reactions::class, $this->router) === false) {
                                            $this->router[Router\Get\Reactions::class] = new Router\Get\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Reactions::class]->ListForCommitComment($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'commits') {
                            if ($pathChunks[5] === '{commit_sha}') {
                                if ($pathChunks[6] === 'branches-where-head') {
                                    if ($call === 'GET /repos/{owner}/{repo}/commits/{commit_sha}/branches-where-head') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                            $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Repos::class]->ListBranchesForHeadCommit($params);
                                    }
                                } elseif ($pathChunks[6] === 'comments') {
                                    if ($call === 'GET /repos/{owner}/{repo}/commits/{commit_sha}/comments') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                            $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Repos::class]->ListCommentsForCommit($params);
                                    }
                                } elseif ($pathChunks[6] === 'pulls') {
                                    if ($call === 'GET /repos/{owner}/{repo}/commits/{commit_sha}/pulls') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                            $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Repos::class]->ListPullRequestsAssociatedWithCommit($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === '{ref}') {
                                if ($pathChunks[6] === 'check-runs') {
                                    if ($call === 'GET /repos/{owner}/{repo}/commits/{ref}/check-runs') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Checks::class, $this->router) === false) {
                                            $this->router[Router\Get\Checks::class] = new Router\Get\Checks($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Checks::class]->ListForRef($params);
                                    }
                                } elseif ($pathChunks[6] === 'check-suites') {
                                    if ($call === 'GET /repos/{owner}/{repo}/commits/{ref}/check-suites') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Checks::class, $this->router) === false) {
                                            $this->router[Router\Get\Checks::class] = new Router\Get\Checks($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Checks::class]->ListSuitesForRef($params);
                                    }
                                } elseif ($pathChunks[6] === 'status') {
                                    if ($call === 'GET /repos/{owner}/{repo}/commits/{ref}/status') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                            $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Repos::class]->GetCombinedStatusForRef($params);
                                    }
                                } elseif ($pathChunks[6] === 'statuses') {
                                    if ($call === 'GET /repos/{owner}/{repo}/commits/{ref}/statuses') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                            $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Repos::class]->ListCommitStatusesForRef($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'dependabot') {
                            if ($pathChunks[5] === 'alerts') {
                                if ($pathChunks[6] === '{alert_number}') {
                                    if ($call === 'GET /repos/{owner}/{repo}/dependabot/alerts/{alert_number}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Dependabot::class, $this->router) === false) {
                                            $this->router[Router\Get\Dependabot::class] = new Router\Get\Dependabot($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Dependabot::class]->GetAlert($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'secrets') {
                                if ($pathChunks[6] === 'public-key') {
                                    if ($call === 'GET /repos/{owner}/{repo}/dependabot/secrets/public-key') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Dependabot::class, $this->router) === false) {
                                            $this->router[Router\Get\Dependabot::class] = new Router\Get\Dependabot($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Dependabot::class]->GetRepoPublicKey($params);
                                    }
                                } elseif ($pathChunks[6] === '{secret_name}') {
                                    if ($call === 'GET /repos/{owner}/{repo}/dependabot/secrets/{secret_name}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Dependabot::class, $this->router) === false) {
                                            $this->router[Router\Get\Dependabot::class] = new Router\Get\Dependabot($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Dependabot::class]->GetRepoSecret($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'dependency-graph') {
                            if ($pathChunks[5] === 'compare') {
                                if ($pathChunks[6] === '{basehead}') {
                                    if ($call === 'GET /repos/{owner}/{repo}/dependency-graph/compare/{basehead}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\DependencyGraph::class, $this->router) === false) {
                                            $this->router[Router\Get\DependencyGraph::class] = new Router\Get\DependencyGraph($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\DependencyGraph::class]->DiffRange($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'deployments') {
                            if ($pathChunks[5] === '{deployment_id}') {
                                if ($pathChunks[6] === 'statuses') {
                                    if ($call === 'GET /repos/{owner}/{repo}/deployments/{deployment_id}/statuses') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                            $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Repos::class]->ListDeploymentStatuses($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'environments') {
                            if ($pathChunks[5] === '{environment_name}') {
                                if ($pathChunks[6] === 'deployment-branch-policies') {
                                    if ($call === 'GET /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                            $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Repos::class]->ListDeploymentBranchPolicies($params);
                                    }
                                } elseif ($pathChunks[6] === 'deployment_protection_rules') {
                                    if ($call === 'GET /repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                            $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Repos::class]->GetAllDeploymentProtectionRules($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'git') {
                            if ($pathChunks[5] === 'blobs') {
                                if ($pathChunks[6] === '{file_sha}') {
                                    if ($call === 'GET /repos/{owner}/{repo}/git/blobs/{file_sha}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Git::class, $this->router) === false) {
                                            $this->router[Router\Get\Git::class] = new Router\Get\Git($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Git::class]->GetBlob($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'commits') {
                                if ($pathChunks[6] === '{commit_sha}') {
                                    if ($call === 'GET /repos/{owner}/{repo}/git/commits/{commit_sha}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Git::class, $this->router) === false) {
                                            $this->router[Router\Get\Git::class] = new Router\Get\Git($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Git::class]->GetCommit($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'matching-refs') {
                                if ($pathChunks[6] === '{ref}') {
                                    if ($call === 'GET /repos/{owner}/{repo}/git/matching-refs/{ref}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Git::class, $this->router) === false) {
                                            $this->router[Router\Get\Git::class] = new Router\Get\Git($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Git::class]->ListMatchingRefs($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'ref') {
                                if ($pathChunks[6] === '{ref}') {
                                    if ($call === 'GET /repos/{owner}/{repo}/git/ref/{ref}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Git::class, $this->router) === false) {
                                            $this->router[Router\Get\Git::class] = new Router\Get\Git($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Git::class]->GetRef($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'tags') {
                                if ($pathChunks[6] === '{tag_sha}') {
                                    if ($call === 'GET /repos/{owner}/{repo}/git/tags/{tag_sha}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Git::class, $this->router) === false) {
                                            $this->router[Router\Get\Git::class] = new Router\Get\Git($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Git::class]->GetTag($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'trees') {
                                if ($pathChunks[6] === '{tree_sha}') {
                                    if ($call === 'GET /repos/{owner}/{repo}/git/trees/{tree_sha}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Git::class, $this->router) === false) {
                                            $this->router[Router\Get\Git::class] = new Router\Get\Git($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Git::class]->GetTree($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($pathChunks[5] === '{hook_id}') {
                                if ($pathChunks[6] === 'config') {
                                    if ($call === 'GET /repos/{owner}/{repo}/hooks/{hook_id}/config') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                            $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Repos::class]->GetWebhookConfigForRepo($params);
                                    }
                                } elseif ($pathChunks[6] === 'deliveries') {
                                    if ($call === 'GET /repos/{owner}/{repo}/hooks/{hook_id}/deliveries') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                            $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Repos::class]->ListWebhookDeliveries($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === 'comments') {
                                if ($pathChunks[6] === '{comment_id}') {
                                    if ($call === 'GET /repos/{owner}/{repo}/issues/comments/{comment_id}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                                            $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Issues::class]->GetComment($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'events') {
                                if ($pathChunks[6] === '{event_id}') {
                                    if ($call === 'GET /repos/{owner}/{repo}/issues/events/{event_id}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                                            $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Issues::class]->GetEvent($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === '{issue_number}') {
                                if ($pathChunks[6] === 'comments') {
                                    if ($call === 'GET /repos/{owner}/{repo}/issues/{issue_number}/comments') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                                            $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Issues::class]->ListComments($params);
                                    }
                                } elseif ($pathChunks[6] === 'events') {
                                    if ($call === 'GET /repos/{owner}/{repo}/issues/{issue_number}/events') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                                            $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Issues::class]->ListEvents($params);
                                    }
                                } elseif ($pathChunks[6] === 'labels') {
                                    if ($call === 'GET /repos/{owner}/{repo}/issues/{issue_number}/labels') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                                            $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Issues::class]->ListLabelsOnIssue($params);
                                    }
                                } elseif ($pathChunks[6] === 'reactions') {
                                    if ($call === 'GET /repos/{owner}/{repo}/issues/{issue_number}/reactions') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Reactions::class, $this->router) === false) {
                                            $this->router[Router\Get\Reactions::class] = new Router\Get\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Reactions::class]->ListForIssue($params);
                                    }
                                } elseif ($pathChunks[6] === 'timeline') {
                                    if ($call === 'GET /repos/{owner}/{repo}/issues/{issue_number}/timeline') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                                            $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Issues::class]->ListEventsForTimeline($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'milestones') {
                            if ($pathChunks[5] === '{milestone_number}') {
                                if ($pathChunks[6] === 'labels') {
                                    if ($call === 'GET /repos/{owner}/{repo}/milestones/{milestone_number}/labels') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                                            $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Issues::class]->ListLabelsForMilestone($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'pages') {
                            if ($pathChunks[5] === 'builds') {
                                if ($pathChunks[6] === 'latest') {
                                    if ($call === 'GET /repos/{owner}/{repo}/pages/builds/latest') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                            $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Repos::class]->GetLatestPagesBuild($params);
                                    }
                                } elseif ($pathChunks[6] === '{build_id}') {
                                    if ($call === 'GET /repos/{owner}/{repo}/pages/builds/{build_id}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                            $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Repos::class]->GetPagesBuild($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === 'comments') {
                                if ($pathChunks[6] === '{comment_id}') {
                                    if ($call === 'GET /repos/{owner}/{repo}/pulls/comments/{comment_id}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Pulls::class, $this->router) === false) {
                                            $this->router[Router\Get\Pulls::class] = new Router\Get\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Pulls::class]->GetReviewComment($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === '{pull_number}') {
                                if ($pathChunks[6] === 'comments') {
                                    if ($call === 'GET /repos/{owner}/{repo}/pulls/{pull_number}/comments') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Pulls::class, $this->router) === false) {
                                            $this->router[Router\Get\Pulls::class] = new Router\Get\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Pulls::class]->ListReviewComments($params);
                                    }
                                } elseif ($pathChunks[6] === 'commits') {
                                    if ($call === 'GET /repos/{owner}/{repo}/pulls/{pull_number}/commits') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Pulls::class, $this->router) === false) {
                                            $this->router[Router\Get\Pulls::class] = new Router\Get\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Pulls::class]->ListCommits($params);
                                    }
                                } elseif ($pathChunks[6] === 'files') {
                                    if ($call === 'GET /repos/{owner}/{repo}/pulls/{pull_number}/files') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Pulls::class, $this->router) === false) {
                                            $this->router[Router\Get\Pulls::class] = new Router\Get\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Pulls::class]->ListFiles($params);
                                    }
                                } elseif ($pathChunks[6] === 'merge') {
                                    if ($call === 'GET /repos/{owner}/{repo}/pulls/{pull_number}/merge') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Pulls::class, $this->router) === false) {
                                            $this->router[Router\Get\Pulls::class] = new Router\Get\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Pulls::class]->CheckIfMerged($params);
                                    }
                                } elseif ($pathChunks[6] === 'requested_reviewers') {
                                    if ($call === 'GET /repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Pulls::class, $this->router) === false) {
                                            $this->router[Router\Get\Pulls::class] = new Router\Get\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Pulls::class]->ListRequestedReviewers($params);
                                    }
                                } elseif ($pathChunks[6] === 'reviews') {
                                    if ($call === 'GET /repos/{owner}/{repo}/pulls/{pull_number}/reviews') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Pulls::class, $this->router) === false) {
                                            $this->router[Router\Get\Pulls::class] = new Router\Get\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Pulls::class]->ListReviews($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($pathChunks[5] === 'assets') {
                                if ($pathChunks[6] === '{asset_id}') {
                                    if ($call === 'GET /repos/{owner}/{repo}/releases/assets/{asset_id}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                            $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Repos::class]->GetReleaseAsset($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'tags') {
                                if ($pathChunks[6] === '{tag}') {
                                    if ($call === 'GET /repos/{owner}/{repo}/releases/tags/{tag}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                            $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Repos::class]->GetReleaseByTag($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === '{release_id}') {
                                if ($pathChunks[6] === 'assets') {
                                    if ($call === 'GET /repos/{owner}/{repo}/releases/{release_id}/assets') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                            $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Repos::class]->ListReleaseAssets($params);
                                    }
                                } elseif ($pathChunks[6] === 'reactions') {
                                    if ($call === 'GET /repos/{owner}/{repo}/releases/{release_id}/reactions') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Reactions::class, $this->router) === false) {
                                            $this->router[Router\Get\Reactions::class] = new Router\Get\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Reactions::class]->ListForRelease($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'rules') {
                            if ($pathChunks[5] === 'branches') {
                                if ($pathChunks[6] === '{branch}') {
                                    if ($call === 'GET /repos/{owner}/{repo}/rules/branches/{branch}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                            $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Repos::class]->GetBranchRules($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'secret-scanning') {
                            if ($pathChunks[5] === 'alerts') {
                                if ($pathChunks[6] === '{alert_number}') {
                                    if ($call === 'GET /repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\SecretScanning::class, $this->router) === false) {
                                            $this->router[Router\Get\SecretScanning::class] = new Router\Get\SecretScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\SecretScanning::class]->GetAlert($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'traffic') {
                            if ($pathChunks[5] === 'popular') {
                                if ($pathChunks[6] === 'paths') {
                                    if ($call === 'GET /repos/{owner}/{repo}/traffic/popular/paths') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                            $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Repos::class]->GetTopPaths($params);
                                    }
                                } elseif ($pathChunks[6] === 'referrers') {
                                    if ($call === 'GET /repos/{owner}/{repo}/traffic/popular/referrers') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                            $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Repos::class]->GetTopReferrers($params);
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
                                if ($pathChunks[6] === 'public-key') {
                                    if ($call === 'GET /repositories/{repository_id}/environments/{environment_name}/secrets/public-key') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                            $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Actions::class]->GetEnvironmentPublicKey($params);
                                    }
                                } elseif ($pathChunks[6] === '{secret_name}') {
                                    if ($call === 'GET /repositories/{repository_id}/environments/{environment_name}/secrets/{secret_name}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                            $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Actions::class]->GetEnvironmentSecret($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'variables') {
                                if ($pathChunks[6] === '{name}') {
                                    if ($call === 'GET /repositories/{repository_id}/environments/{environment_name}/variables/{name}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                            $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Actions::class]->GetEnvironmentVariable($params);
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
                                    if ($call === 'GET /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                            $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Teams::class]->GetDiscussionCommentLegacy($params);
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
                                    if ($call === 'GET /user/packages/{package_type}/{package_name}/versions/{package_version_id}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Packages::class, $this->router) === false) {
                                            $this->router[Router\Get\Packages::class] = new Router\Get\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Packages::class]->GetPackageVersionForAuthenticatedUser($params);
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
                                    if ($call === 'GET /users/{username}/packages/{package_type}/{package_name}/versions') {
                                        $matched = true;
                                        if (array_key_exists(Router\Get\Packages::class, $this->router) === false) {
                                            $this->router[Router\Get\Packages::class] = new Router\Get\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Get\Packages::class]->GetAllPackageVersionsForPackageOwnedByUser($params);
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
