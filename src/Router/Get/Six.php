<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\Schema\ActionsBillingUsage;
use ApiClients\Client\GitHub\Schema\ActionsCacheList;
use ApiClients\Client\GitHub\Schema\ActionsCacheUsageOrgEnterprise;
use ApiClients\Client\GitHub\Schema\ActionsGetDefaultWorkflowPermissions;
use ApiClients\Client\GitHub\Schema\ActionsPublicKey;
use ApiClients\Client\GitHub\Schema\ActionsRepositoryPermissions;
use ApiClients\Client\GitHub\Schema\Autolink;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\BranchWithProtection;
use ApiClients\Client\GitHub\Schema\CheckRun;
use ApiClients\Client\GitHub\Schema\CheckSuite;
use ApiClients\Client\GitHub\Schema\CloneTraffic;
use ApiClients\Client\GitHub\Schema\CodeownersErrors;
use ApiClients\Client\GitHub\Schema\CodeScanningDefaultSetup;
use ApiClients\Client\GitHub\Schema\CodespaceExportDetails;
use ApiClients\Client\GitHub\Schema\CodespacesOrgSecret;
use ApiClients\Client\GitHub\Schema\CodespacesPublicKey;
use ApiClients\Client\GitHub\Schema\CombinedBillingUsage;
use ApiClients\Client\GitHub\Schema\Commit;
use ApiClients\Client\GitHub\Schema\CommitComment;
use ApiClients\Client\GitHub\Schema\CommitComparison;
use ApiClients\Client\GitHub\Schema\CommunityProfile;
use ApiClients\Client\GitHub\Schema\ContentDirectory;
use ApiClients\Client\GitHub\Schema\ContentFile;
use ApiClients\Client\GitHub\Schema\ContentSubmodule;
use ApiClients\Client\GitHub\Schema\ContentSymlink;
use ApiClients\Client\GitHub\Schema\CopilotSeatDetails;
use ApiClients\Client\GitHub\Schema\DependabotPublicKey;
use ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom;
use ApiClients\Client\GitHub\Schema\DeployKey;
use ApiClients\Client\GitHub\Schema\Deployment;
use ApiClients\Client\GitHub\Schema\EmptyObject;
use ApiClients\Client\GitHub\Schema\Environment;
use ApiClients\Client\GitHub\Schema\Hook;
use ApiClients\Client\GitHub\Schema\Issue;
use ApiClients\Client\GitHub\Schema\Label;
use ApiClients\Client\GitHub\Schema\Milestone;
use ApiClients\Client\GitHub\Schema\Operations\Actions\GetActionsCacheUsageByRepoForOrg\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHub\Schema\Operations\Codespaces\GetCodespacesForUserInOrg\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHub\Schema\OrganizationActionsSecret;
use ApiClients\Client\GitHub\Schema\OrganizationActionsVariable;
use ApiClients\Client\GitHub\Schema\OrganizationDependabotSecret;
use ApiClients\Client\GitHub\Schema\Package;
use ApiClients\Client\GitHub\Schema\PackagesBillingUsage;
use ApiClients\Client\GitHub\Schema\PagesHealthCheck;
use ApiClients\Client\GitHub\Schema\ParticipationStats;
use ApiClients\Client\GitHub\Schema\ProjectCollaboratorPermission;
use ApiClients\Client\GitHub\Schema\PullRequest;
use ApiClients\Client\GitHub\Schema\Release;
use ApiClients\Client\GitHub\Schema\RepositoryAdvisory;
use ApiClients\Client\GitHub\Schema\RepositoryRuleset;
use ApiClients\Client\GitHub\Schema\Runner;
use ApiClients\Client\GitHub\Schema\SelectedActions;
use ApiClients\Client\GitHub\Schema\TeamRepository;
use ApiClients\Client\GitHub\Schema\ViewTraffic;
use ApiClients\Client\GitHub\Schema\WebhookConfig;
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

    /** @return iterable<Schema\MarketplacePurchase>||iterable<Schema\RunnerApplication>|iterable<Schema\HookDeliveryItem>|iterable<Schema\Team>|(Schema\Operations\Codespaces\GetCodespacesForUserInOrg\Response\ApplicationJson\Ok\Application\Json|array{code: int})|(Schema\CopilotSeatDetails|array{code: int}|iterable<Schema\MinimalRepository>|iterable<Schema\TeamDiscussion>|iterable<Schema\OrganizationInvitation>|iterable<Schema\SimpleUser>|iterable<Schema\TeamProject>|(Schema\ProjectCollaboratorPermission|(iterable<Schema\CodeScanningAlertItems>|iterable<Schema\CodeScanningAnalysis>|(Schema\CodeownersErrors|(Schema\Operations\Codespaces\RepoMachinesForAuthenticatedUser\Response\ApplicationJson\Ok|(Schema\ContentDirectory|Schema\ContentFile|Schema\ContentSymlink|Schema\ContentSubmodule|(iterable<Schema\DependabotAlert>|iterable<Schema\PorterAuthor>|iterable<Schema\PorterLargeFile>|iterable<Schema\IssueComment>|iterable<Schema\IssueEvent>|(Schema\Issue|Schema\BasicError|iterable<Schema\PageBuild>|(Schema\PagesHealthCheck|Schema\EmptyObject|iterable<Schema\PullRequestReviewComment>|(Schema\PullRequest|(Schema\Release|(iterable<Schema\SecretScanningAlert>|(iterable<int>|Schema\Operations\Repos\GetCodeFrequencyStats\Response\ApplicationJson\Accepted\Application\Json|(iterable<Schema\CommitActivity>|Schema\Operations\Repos\GetCommitActivityStats\Response\ApplicationJson\Accepted\Application\Json|(iterable<Schema\ContributorActivity>|Schema\Operations\Repos\GetContributorsStats\Response\ApplicationJson\Accepted\Application\Json|iterable<Schema\TagProtection>|array{code: int, location: string}|iterable<Schema\TeamDiscussionComment>|iterable<Schema\Reaction>|(Schema\TeamRepository|iterable<Schema\PackageVersion>|iterable<Schema\Event> */
    public function call(string $call, array $params, array $pathChunks): iterable|ActionsCacheUsageOrgEnterprise|Ok|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization\Response\ApplicationJson\Ok|SelectedActions|ActionsGetDefaultWorkflowPermissions|Runner|ActionsPublicKey|OrganizationActionsSecret|OrganizationActionsVariable|CodespacesPublicKey|CodespacesOrgSecret|\ApiClients\Client\GitHub\Schema\Operations\Copilot\ListCopilotSeats\Response\ApplicationJson\Ok|DependabotPublicKey|OrganizationDependabotSecret|WebhookConfig|Json|CopilotSeatDetails|Package|ActionsBillingUsage|PackagesBillingUsage|CombinedBillingUsage|ProjectCollaboratorPermission|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListArtifactsForRepo\Response\ApplicationJson\Ok|ActionsCacheList|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoOrganizationSecrets\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoOrganizationVariables\Response\ApplicationJson\Ok|ActionsRepositoryPermissions|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelfHostedRunnersForRepo\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListWorkflowRunsForRepo\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoSecrets\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoVariables\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoWorkflows\Response\ApplicationJson\Ok|Autolink|BranchWithProtection|BasicError|CheckRun|CheckSuite|CodeScanningDefaultSetup|CodeownersErrors|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\RepoMachinesForAuthenticatedUser\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\PreFlightWithRepoForAuthenticatedUser\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListRepoSecrets\Response\ApplicationJson\Ok|CommitComment|Commit|CommunityProfile|CommitComparison|ContentDirectory|ContentFile|ContentSymlink|ContentSubmodule|\ApiClients\Client\GitHub\Schema\Operations\Dependabot\ListRepoSecrets\Response\ApplicationJson\Ok|DependencyGraphSpdxSbom|Deployment|Environment|Hook|Issue|DeployKey|Label|Milestone|PagesHealthCheck|EmptyObject|PullRequest|Release|RepositoryRuleset|RepositoryAdvisory|\ApiClients\Client\GitHub\Schema\Operations\Repos\GetCodeFrequencyStats\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Repos\GetCommitActivityStats\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Repos\GetContributorsStats\Response\ApplicationJson\Accepted\Application\Json|ParticipationStats|CloneTraffic|ViewTraffic|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListEnvironmentSecrets\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListEnvironmentVariables\Response\ApplicationJson\Ok\Application\Json|TeamRepository|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListRepositoriesForSecretForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|CodespaceExportDetails
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'marketplace_listing') {
                if ($pathChunks[2] === 'stubbed') {
                    if ($pathChunks[3] === 'plans') {
                        if ($pathChunks[4] === '{plan_id}') {
                            if ($pathChunks[5] === 'accounts') {
                                if ($call === 'GET /marketplace_listing/stubbed/plans/{plan_id}/accounts') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                        $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Apps::class]->listAccountsForPlanStubbed($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'cache') {
                            if ($pathChunks[5] === 'usage') {
                                if ($call === 'GET /orgs/{org}/actions/cache/usage') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->getActionsCacheUsageForOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'usage-by-repository') {
                                if ($call === 'GET /orgs/{org}/actions/cache/usage-by-repository') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->getActionsCacheUsageByRepoForOrg($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'permissions') {
                            if ($pathChunks[5] === 'repositories') {
                                if ($call === 'GET /orgs/{org}/actions/permissions/repositories') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->listSelectedRepositoriesEnabledGithubActionsOrganization($params);
                                }
                            } elseif ($pathChunks[5] === 'selected-actions') {
                                if ($call === 'GET /orgs/{org}/actions/permissions/selected-actions') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->getAllowedActionsOrganization($params);
                                }
                            } elseif ($pathChunks[5] === 'workflow') {
                                if ($call === 'GET /orgs/{org}/actions/permissions/workflow') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->getGithubActionsDefaultWorkflowPermissionsOrganization($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'runners') {
                            if ($pathChunks[5] === 'downloads') {
                                if ($call === 'GET /orgs/{org}/actions/runners/downloads') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->listRunnerApplicationsForOrg($params);
                                }
                            } elseif ($pathChunks[5] === '{runner_id}') {
                                if ($call === 'GET /orgs/{org}/actions/runners/{runner_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->getSelfHostedRunnerForOrg($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === 'public-key') {
                                if ($call === 'GET /orgs/{org}/actions/secrets/public-key') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->getOrgPublicKey($params);
                                }
                            } elseif ($pathChunks[5] === '{secret_name}') {
                                if ($call === 'GET /orgs/{org}/actions/secrets/{secret_name}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->getOrgSecret($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'variables') {
                            if ($pathChunks[5] === '{name}') {
                                if ($call === 'GET /orgs/{org}/actions/variables/{name}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->getOrgVariable($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'codespaces') {
                        if ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === 'public-key') {
                                if ($call === 'GET /orgs/{org}/codespaces/secrets/public-key') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Codespaces::class, $this->router) === false) {
                                        $this->router[Router\Get\Codespaces::class] = new Router\Get\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Codespaces::class]->getOrgPublicKey($params);
                                }
                            } elseif ($pathChunks[5] === '{secret_name}') {
                                if ($call === 'GET /orgs/{org}/codespaces/secrets/{secret_name}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Codespaces::class, $this->router) === false) {
                                        $this->router[Router\Get\Codespaces::class] = new Router\Get\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Codespaces::class]->getOrgSecret($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'copilot') {
                        if ($pathChunks[4] === 'billing') {
                            if ($pathChunks[5] === 'seats') {
                                if ($call === 'GET /orgs/{org}/copilot/billing/seats') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Copilot::class, $this->router) === false) {
                                        $this->router[Router\Get\Copilot::class] = new Router\Get\Copilot($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Copilot::class]->listCopilotSeats($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'dependabot') {
                        if ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === 'public-key') {
                                if ($call === 'GET /orgs/{org}/dependabot/secrets/public-key') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Dependabot::class, $this->router) === false) {
                                        $this->router[Router\Get\Dependabot::class] = new Router\Get\Dependabot($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Dependabot::class]->getOrgPublicKey($params);
                                }
                            } elseif ($pathChunks[5] === '{secret_name}') {
                                if ($call === 'GET /orgs/{org}/dependabot/secrets/{secret_name}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Dependabot::class, $this->router) === false) {
                                        $this->router[Router\Get\Dependabot::class] = new Router\Get\Dependabot($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Dependabot::class]->getOrgSecret($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($pathChunks[4] === '{hook_id}') {
                            if ($pathChunks[5] === 'config') {
                                if ($call === 'GET /orgs/{org}/hooks/{hook_id}/config') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                        $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Orgs::class]->getWebhookConfigForOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'deliveries') {
                                if ($call === 'GET /orgs/{org}/hooks/{hook_id}/deliveries') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                        $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Orgs::class]->listWebhookDeliveries($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'invitations') {
                        if ($pathChunks[4] === '{invitation_id}') {
                            if ($pathChunks[5] === 'teams') {
                                if ($call === 'GET /orgs/{org}/invitations/{invitation_id}/teams') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                        $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Orgs::class]->listInvitationTeams($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($pathChunks[4] === '{username}') {
                            if ($pathChunks[5] === 'codespaces') {
                                if ($call === 'GET /orgs/{org}/members/{username}/codespaces') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Codespaces::class, $this->router) === false) {
                                        $this->router[Router\Get\Codespaces::class] = new Router\Get\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Codespaces::class]->getCodespacesForUserInOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'copilot') {
                                if ($call === 'GET /orgs/{org}/members/{username}/copilot') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Copilot::class, $this->router) === false) {
                                        $this->router[Router\Get\Copilot::class] = new Router\Get\Copilot($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Copilot::class]->getCopilotSeatAssignmentDetailsForUser($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'migrations') {
                        if ($pathChunks[4] === '{migration_id}') {
                            if ($pathChunks[5] === 'archive') {
                                if ($call === 'GET /orgs/{org}/migrations/{migration_id}/archive') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Migrations::class, $this->router) === false) {
                                        $this->router[Router\Get\Migrations::class] = new Router\Get\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Migrations::class]->downloadArchiveForOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'repositories') {
                                if ($call === 'GET /orgs/{org}/migrations/{migration_id}/repositories') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Migrations::class, $this->router) === false) {
                                        $this->router[Router\Get\Migrations::class] = new Router\Get\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Migrations::class]->listReposForOrg($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'packages') {
                        if ($pathChunks[4] === '{package_type}') {
                            if ($pathChunks[5] === '{package_name}') {
                                if ($call === 'GET /orgs/{org}/packages/{package_type}/{package_name}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Packages::class, $this->router) === false) {
                                        $this->router[Router\Get\Packages::class] = new Router\Get\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Packages::class]->getPackageForOrganization($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'personal-access-token-requests') {
                        if ($pathChunks[4] === '{pat_request_id}') {
                            if ($pathChunks[5] === 'repositories') {
                                if ($call === 'GET /orgs/{org}/personal-access-token-requests/{pat_request_id}/repositories') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                        $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Orgs::class]->listPatGrantRequestRepositories($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'personal-access-tokens') {
                        if ($pathChunks[4] === '{pat_id}') {
                            if ($pathChunks[5] === 'repositories') {
                                if ($call === 'GET /orgs/{org}/personal-access-tokens/{pat_id}/repositories') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                        $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Orgs::class]->listPatGrantRepositories($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'settings') {
                        if ($pathChunks[4] === 'billing') {
                            if ($pathChunks[5] === 'actions') {
                                if ($call === 'GET /orgs/{org}/settings/billing/actions') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Billing::class, $this->router) === false) {
                                        $this->router[Router\Get\Billing::class] = new Router\Get\Billing($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Billing::class]->getGithubActionsBillingOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'packages') {
                                if ($call === 'GET /orgs/{org}/settings/billing/packages') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Billing::class, $this->router) === false) {
                                        $this->router[Router\Get\Billing::class] = new Router\Get\Billing($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Billing::class]->getGithubPackagesBillingOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'shared-storage') {
                                if ($call === 'GET /orgs/{org}/settings/billing/shared-storage') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Billing::class, $this->router) === false) {
                                        $this->router[Router\Get\Billing::class] = new Router\Get\Billing($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Billing::class]->getSharedStorageBillingOrg($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($pathChunks[5] === 'discussions') {
                                if ($call === 'GET /orgs/{org}/teams/{team_slug}/discussions') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                        $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Teams::class]->listDiscussionsInOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'invitations') {
                                if ($call === 'GET /orgs/{org}/teams/{team_slug}/invitations') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                        $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Teams::class]->listPendingInvitationsInOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'members') {
                                if ($call === 'GET /orgs/{org}/teams/{team_slug}/members') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                        $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Teams::class]->listMembersInOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'projects') {
                                if ($call === 'GET /orgs/{org}/teams/{team_slug}/projects') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                        $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Teams::class]->listProjectsInOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'repos') {
                                if ($call === 'GET /orgs/{org}/teams/{team_slug}/repos') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                        $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Teams::class]->listReposInOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'teams') {
                                if ($call === 'GET /orgs/{org}/teams/{team_slug}/teams') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                        $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Teams::class]->listChildInOrg($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === '{project_id}') {
                    if ($pathChunks[3] === 'collaborators') {
                        if ($pathChunks[4] === '{username}') {
                            if ($pathChunks[5] === 'permission') {
                                if ($call === 'GET /projects/{project_id}/collaborators/{username}/permission') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Projects::class, $this->router) === false) {
                                        $this->router[Router\Get\Projects::class] = new Router\Get\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Projects::class]->getPermissionForUser($params);
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
                                if ($call === 'GET /repos/{owner}/{repo}/actions/artifacts') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->listArtifactsForRepo($params);
                                }
                            } elseif ($pathChunks[5] === 'caches') {
                                if ($call === 'GET /repos/{owner}/{repo}/actions/caches') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->getActionsCacheList($params);
                                }
                            } elseif ($pathChunks[5] === 'organization-secrets') {
                                if ($call === 'GET /repos/{owner}/{repo}/actions/organization-secrets') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->listRepoOrganizationSecrets($params);
                                }
                            } elseif ($pathChunks[5] === 'organization-variables') {
                                if ($call === 'GET /repos/{owner}/{repo}/actions/organization-variables') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->listRepoOrganizationVariables($params);
                                }
                            } elseif ($pathChunks[5] === 'permissions') {
                                if ($call === 'GET /repos/{owner}/{repo}/actions/permissions') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->getGithubActionsPermissionsRepository($params);
                                }
                            } elseif ($pathChunks[5] === 'runners') {
                                if ($call === 'GET /repos/{owner}/{repo}/actions/runners') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->listSelfHostedRunnersForRepo($params);
                                }
                            } elseif ($pathChunks[5] === 'runs') {
                                if ($call === 'GET /repos/{owner}/{repo}/actions/runs') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->listWorkflowRunsForRepo($params);
                                }
                            } elseif ($pathChunks[5] === 'secrets') {
                                if ($call === 'GET /repos/{owner}/{repo}/actions/secrets') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->listRepoSecrets($params);
                                }
                            } elseif ($pathChunks[5] === 'variables') {
                                if ($call === 'GET /repos/{owner}/{repo}/actions/variables') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->listRepoVariables($params);
                                }
                            } elseif ($pathChunks[5] === 'workflows') {
                                if ($call === 'GET /repos/{owner}/{repo}/actions/workflows') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->listRepoWorkflows($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'assignees') {
                            if ($pathChunks[5] === '{assignee}') {
                                if ($call === 'GET /repos/{owner}/{repo}/assignees/{assignee}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                                        $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Issues::class]->checkUserCanBeAssigned($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'autolinks') {
                            if ($pathChunks[5] === '{autolink_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/autolinks/{autolink_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getAutolink($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'branches') {
                            if ($pathChunks[5] === '{branch}') {
                                if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getBranch($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'check-runs') {
                            if ($pathChunks[5] === '{check_run_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/check-runs/{check_run_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Checks::class, $this->router) === false) {
                                        $this->router[Router\Get\Checks::class] = new Router\Get\Checks($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Checks::class]->get($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'check-suites') {
                            if ($pathChunks[5] === '{check_suite_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/check-suites/{check_suite_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Checks::class, $this->router) === false) {
                                        $this->router[Router\Get\Checks::class] = new Router\Get\Checks($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Checks::class]->getSuite($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'code-scanning') {
                            if ($pathChunks[5] === 'alerts') {
                                if ($call === 'GET /repos/{owner}/{repo}/code-scanning/alerts') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\CodeScanning::class, $this->router) === false) {
                                        $this->router[Router\Get\CodeScanning::class] = new Router\Get\CodeScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\CodeScanning::class]->listAlertsForRepo($params);
                                }
                            } elseif ($pathChunks[5] === 'analyses') {
                                if ($call === 'GET /repos/{owner}/{repo}/code-scanning/analyses') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\CodeScanning::class, $this->router) === false) {
                                        $this->router[Router\Get\CodeScanning::class] = new Router\Get\CodeScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\CodeScanning::class]->listRecentAnalyses($params);
                                }
                            } elseif ($pathChunks[5] === 'default-setup') {
                                if ($call === 'GET /repos/{owner}/{repo}/code-scanning/default-setup') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\CodeScanning::class, $this->router) === false) {
                                        $this->router[Router\Get\CodeScanning::class] = new Router\Get\CodeScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\CodeScanning::class]->getDefaultSetup($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'codeowners') {
                            if ($pathChunks[5] === 'errors') {
                                if ($call === 'GET /repos/{owner}/{repo}/codeowners/errors') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->codeownersErrors($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'codespaces') {
                            if ($pathChunks[5] === 'devcontainers') {
                                if ($call === 'GET /repos/{owner}/{repo}/codespaces/devcontainers') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Codespaces::class, $this->router) === false) {
                                        $this->router[Router\Get\Codespaces::class] = new Router\Get\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Codespaces::class]->listDevcontainersInRepositoryForAuthenticatedUser($params);
                                }
                            } elseif ($pathChunks[5] === 'machines') {
                                if ($call === 'GET /repos/{owner}/{repo}/codespaces/machines') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Codespaces::class, $this->router) === false) {
                                        $this->router[Router\Get\Codespaces::class] = new Router\Get\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Codespaces::class]->repoMachinesForAuthenticatedUser($params);
                                }
                            } elseif ($pathChunks[5] === 'new') {
                                if ($call === 'GET /repos/{owner}/{repo}/codespaces/new') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Codespaces::class, $this->router) === false) {
                                        $this->router[Router\Get\Codespaces::class] = new Router\Get\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Codespaces::class]->preFlightWithRepoForAuthenticatedUser($params);
                                }
                            } elseif ($pathChunks[5] === 'secrets') {
                                if ($call === 'GET /repos/{owner}/{repo}/codespaces/secrets') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Codespaces::class, $this->router) === false) {
                                        $this->router[Router\Get\Codespaces::class] = new Router\Get\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Codespaces::class]->listRepoSecrets($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'collaborators') {
                            if ($pathChunks[5] === '{username}') {
                                if ($call === 'GET /repos/{owner}/{repo}/collaborators/{username}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->checkCollaborator($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'comments') {
                            if ($pathChunks[5] === '{comment_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/comments/{comment_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getCommitComment($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'commits') {
                            if ($pathChunks[5] === '{ref}') {
                                if ($call === 'GET /repos/{owner}/{repo}/commits/{ref}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getCommit($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'community') {
                            if ($pathChunks[5] === 'profile') {
                                if ($call === 'GET /repos/{owner}/{repo}/community/profile') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getCommunityProfileMetrics($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'compare') {
                            if ($pathChunks[5] === '{basehead}') {
                                if ($call === 'GET /repos/{owner}/{repo}/compare/{basehead}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->compareCommits($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'contents') {
                            if ($pathChunks[5] === '{path}') {
                                if ($call === 'GET /repos/{owner}/{repo}/contents/{path}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getContent($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'dependabot') {
                            if ($pathChunks[5] === 'alerts') {
                                if ($call === 'GET /repos/{owner}/{repo}/dependabot/alerts') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Dependabot::class, $this->router) === false) {
                                        $this->router[Router\Get\Dependabot::class] = new Router\Get\Dependabot($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Dependabot::class]->listAlertsForRepo($params);
                                }
                            } elseif ($pathChunks[5] === 'secrets') {
                                if ($call === 'GET /repos/{owner}/{repo}/dependabot/secrets') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Dependabot::class, $this->router) === false) {
                                        $this->router[Router\Get\Dependabot::class] = new Router\Get\Dependabot($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Dependabot::class]->listRepoSecrets($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'dependency-graph') {
                            if ($pathChunks[5] === 'sbom') {
                                if ($call === 'GET /repos/{owner}/{repo}/dependency-graph/sbom') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\DependencyGraph::class, $this->router) === false) {
                                        $this->router[Router\Get\DependencyGraph::class] = new Router\Get\DependencyGraph($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\DependencyGraph::class]->exportSbom($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'deployments') {
                            if ($pathChunks[5] === '{deployment_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/deployments/{deployment_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getDeployment($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'environments') {
                            if ($pathChunks[5] === '{environment_name}') {
                                if ($call === 'GET /repos/{owner}/{repo}/environments/{environment_name}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getEnvironment($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($pathChunks[5] === '{hook_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/hooks/{hook_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getWebhook($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'import') {
                            if ($pathChunks[5] === 'authors') {
                                if ($call === 'GET /repos/{owner}/{repo}/import/authors') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Migrations::class, $this->router) === false) {
                                        $this->router[Router\Get\Migrations::class] = new Router\Get\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Migrations::class]->getCommitAuthors($params);
                                }
                            } elseif ($pathChunks[5] === 'large_files') {
                                if ($call === 'GET /repos/{owner}/{repo}/import/large_files') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Migrations::class, $this->router) === false) {
                                        $this->router[Router\Get\Migrations::class] = new Router\Get\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Migrations::class]->getLargeFiles($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === 'comments') {
                                if ($call === 'GET /repos/{owner}/{repo}/issues/comments') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                                        $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Issues::class]->listCommentsForRepo($params);
                                }
                            } elseif ($pathChunks[5] === 'events') {
                                if ($call === 'GET /repos/{owner}/{repo}/issues/events') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                                        $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Issues::class]->listEventsForRepo($params);
                                }
                            } elseif ($pathChunks[5] === '{issue_number}') {
                                if ($call === 'GET /repos/{owner}/{repo}/issues/{issue_number}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                                        $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Issues::class]->get($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'keys') {
                            if ($pathChunks[5] === '{key_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/keys/{key_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getDeployKey($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'labels') {
                            if ($pathChunks[5] === '{name}') {
                                if ($call === 'GET /repos/{owner}/{repo}/labels/{name}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                                        $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Issues::class]->getLabel($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'milestones') {
                            if ($pathChunks[5] === '{milestone_number}') {
                                if ($call === 'GET /repos/{owner}/{repo}/milestones/{milestone_number}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                                        $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Issues::class]->getMilestone($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'pages') {
                            if ($pathChunks[5] === 'builds') {
                                if ($call === 'GET /repos/{owner}/{repo}/pages/builds') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->listPagesBuilds($params);
                                }
                            } elseif ($pathChunks[5] === 'health') {
                                if ($call === 'GET /repos/{owner}/{repo}/pages/health') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getPagesHealthCheck($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === 'comments') {
                                if ($call === 'GET /repos/{owner}/{repo}/pulls/comments') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Pulls::class, $this->router) === false) {
                                        $this->router[Router\Get\Pulls::class] = new Router\Get\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Pulls::class]->listReviewCommentsForRepo($params);
                                }
                            } elseif ($pathChunks[5] === '{pull_number}') {
                                if ($call === 'GET /repos/{owner}/{repo}/pulls/{pull_number}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Pulls::class, $this->router) === false) {
                                        $this->router[Router\Get\Pulls::class] = new Router\Get\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Pulls::class]->get($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'readme') {
                            if ($pathChunks[5] === '{dir}') {
                                if ($call === 'GET /repos/{owner}/{repo}/readme/{dir}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getReadmeInDirectory($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($pathChunks[5] === 'latest') {
                                if ($call === 'GET /repos/{owner}/{repo}/releases/latest') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getLatestRelease($params);
                                }
                            } elseif ($pathChunks[5] === '{release_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/releases/{release_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getRelease($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'rulesets') {
                            if ($pathChunks[5] === '{ruleset_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/rulesets/{ruleset_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getRepoRuleset($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'secret-scanning') {
                            if ($pathChunks[5] === 'alerts') {
                                if ($call === 'GET /repos/{owner}/{repo}/secret-scanning/alerts') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\SecretScanning::class, $this->router) === false) {
                                        $this->router[Router\Get\SecretScanning::class] = new Router\Get\SecretScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\SecretScanning::class]->listAlertsForRepo($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'security-advisories') {
                            if ($pathChunks[5] === '{ghsa_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/security-advisories/{ghsa_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\SecurityAdvisories::class, $this->router) === false) {
                                        $this->router[Router\Get\SecurityAdvisories::class] = new Router\Get\SecurityAdvisories($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\SecurityAdvisories::class]->getRepositoryAdvisory($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'stats') {
                            if ($pathChunks[5] === 'code_frequency') {
                                if ($call === 'GET /repos/{owner}/{repo}/stats/code_frequency') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getCodeFrequencyStats($params);
                                }
                            } elseif ($pathChunks[5] === 'commit_activity') {
                                if ($call === 'GET /repos/{owner}/{repo}/stats/commit_activity') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getCommitActivityStats($params);
                                }
                            } elseif ($pathChunks[5] === 'contributors') {
                                if ($call === 'GET /repos/{owner}/{repo}/stats/contributors') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getContributorsStats($params);
                                }
                            } elseif ($pathChunks[5] === 'participation') {
                                if ($call === 'GET /repos/{owner}/{repo}/stats/participation') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getParticipationStats($params);
                                }
                            } elseif ($pathChunks[5] === 'punch_card') {
                                if ($call === 'GET /repos/{owner}/{repo}/stats/punch_card') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getPunchCardStats($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'tags') {
                            if ($pathChunks[5] === 'protection') {
                                if ($call === 'GET /repos/{owner}/{repo}/tags/protection') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->listTagProtection($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'tarball') {
                            if ($pathChunks[5] === '{ref}') {
                                if ($call === 'GET /repos/{owner}/{repo}/tarball/{ref}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->downloadTarballArchive($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'traffic') {
                            if ($pathChunks[5] === 'clones') {
                                if ($call === 'GET /repos/{owner}/{repo}/traffic/clones') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getClones($params);
                                }
                            } elseif ($pathChunks[5] === 'views') {
                                if ($call === 'GET /repos/{owner}/{repo}/traffic/views') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getViews($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'zipball') {
                            if ($pathChunks[5] === '{ref}') {
                                if ($call === 'GET /repos/{owner}/{repo}/zipball/{ref}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->downloadZipballArchive($params);
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
                                if ($call === 'GET /repositories/{repository_id}/environments/{environment_name}/secrets') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->listEnvironmentSecrets($params);
                                }
                            } elseif ($pathChunks[5] === 'variables') {
                                if ($call === 'GET /repositories/{repository_id}/environments/{environment_name}/variables') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->listEnvironmentVariables($params);
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
                                if ($call === 'GET /teams/{team_id}/discussions/{discussion_number}/comments') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                        $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Teams::class]->listDiscussionCommentsLegacy($params);
                                }
                            } elseif ($pathChunks[5] === 'reactions') {
                                if ($call === 'GET /teams/{team_id}/discussions/{discussion_number}/reactions') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Reactions::class, $this->router) === false) {
                                        $this->router[Router\Get\Reactions::class] = new Router\Get\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Reactions::class]->listForTeamDiscussionLegacy($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($pathChunks[4] === '{owner}') {
                            if ($pathChunks[5] === '{repo}') {
                                if ($call === 'GET /teams/{team_id}/repos/{owner}/{repo}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                        $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Teams::class]->checkPermissionsForRepoLegacy($params);
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
                                if ($call === 'GET /user/codespaces/secrets/{secret_name}/repositories') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Codespaces::class, $this->router) === false) {
                                        $this->router[Router\Get\Codespaces::class] = new Router\Get\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Codespaces::class]->listRepositoriesForSecretForAuthenticatedUser($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === '{codespace_name}') {
                        if ($pathChunks[4] === 'exports') {
                            if ($pathChunks[5] === '{export_id}') {
                                if ($call === 'GET /user/codespaces/{codespace_name}/exports/{export_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Codespaces::class, $this->router) === false) {
                                        $this->router[Router\Get\Codespaces::class] = new Router\Get\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Codespaces::class]->getExportDetailsForAuthenticatedUser($params);
                                }
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'packages') {
                    if ($pathChunks[3] === '{package_type}') {
                        if ($pathChunks[4] === '{package_name}') {
                            if ($pathChunks[5] === 'versions') {
                                if ($call === 'GET /user/packages/{package_type}/{package_name}/versions') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Packages::class, $this->router) === false) {
                                        $this->router[Router\Get\Packages::class] = new Router\Get\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Packages::class]->getAllPackageVersionsForPackageOwnedByAuthenticatedUser($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($pathChunks[2] === '{username}') {
                    if ($pathChunks[3] === 'events') {
                        if ($pathChunks[4] === 'orgs') {
                            if ($pathChunks[5] === '{org}') {
                                if ($call === 'GET /users/{username}/events/orgs/{org}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                        $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Activity::class]->listOrgEventsForAuthenticatedUser($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'packages') {
                        if ($pathChunks[4] === '{package_type}') {
                            if ($pathChunks[5] === '{package_name}') {
                                if ($call === 'GET /users/{username}/packages/{package_type}/{package_name}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Packages::class, $this->router) === false) {
                                        $this->router[Router\Get\Packages::class] = new Router\Get\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Packages::class]->getPackageForUser($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'settings') {
                        if ($pathChunks[4] === 'billing') {
                            if ($pathChunks[5] === 'actions') {
                                if ($call === 'GET /users/{username}/settings/billing/actions') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Billing::class, $this->router) === false) {
                                        $this->router[Router\Get\Billing::class] = new Router\Get\Billing($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Billing::class]->getGithubActionsBillingUser($params);
                                }
                            } elseif ($pathChunks[5] === 'packages') {
                                if ($call === 'GET /users/{username}/settings/billing/packages') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Billing::class, $this->router) === false) {
                                        $this->router[Router\Get\Billing::class] = new Router\Get\Billing($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Billing::class]->getGithubPackagesBillingUser($params);
                                }
                            } elseif ($pathChunks[5] === 'shared-storage') {
                                if ($call === 'GET /users/{username}/settings/billing/shared-storage') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Billing::class, $this->router) === false) {
                                        $this->router[Router\Get\Billing::class] = new Router\Get\Billing($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Billing::class]->getSharedStorageBillingUser($params);
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
