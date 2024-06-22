<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Get;

use ApiClients\Client\GitHub\Internal\Routers;
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
use ApiClients\Client\GitHub\Schema\CodeSecurityConfiguration;
use ApiClients\Client\GitHub\Schema\CodespaceExportDetails;
use ApiClients\Client\GitHub\Schema\CodespacesOrgSecret;
use ApiClients\Client\GitHub\Schema\CodespacesPermissionsCheckForDevcontainer;
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
use ApiClients\Client\GitHub\Schema\Operations\Codespaces\GetCodespacesForUserInOrg\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHub\Schema\Operations\Copilot\ListCopilotSeatsForEnterprise\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHub\Schema\OrganizationActionsSecret;
use ApiClients\Client\GitHub\Schema\OrganizationActionsVariable;
use ApiClients\Client\GitHub\Schema\OrganizationDependabotSecret;
use ApiClients\Client\GitHub\Schema\OrgCustomProperty;
use ApiClients\Client\GitHub\Schema\Package;
use ApiClients\Client\GitHub\Schema\PackagesBillingUsage;
use ApiClients\Client\GitHub\Schema\PagesHealthCheck;
use ApiClients\Client\GitHub\Schema\ParticipationStats;
use ApiClients\Client\GitHub\Schema\ProjectCollaboratorPermission;
use ApiClients\Client\GitHub\Schema\PullRequest;
use ApiClients\Client\GitHub\Schema\Release;
use ApiClients\Client\GitHub\Schema\RepositoryAdvisory;
use ApiClients\Client\GitHub\Schema\RepositoryRuleset;
use ApiClients\Client\GitHub\Schema\RuleSuite;
use ApiClients\Client\GitHub\Schema\Runner;
use ApiClients\Client\GitHub\Schema\SelectedActions;
use ApiClients\Client\GitHub\Schema\TeamRepository;
use ApiClients\Client\GitHub\Schema\ViewTraffic;
use ApiClients\Client\GitHub\Schema\WebhookConfig;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Six
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return |Observable<Schema\MarketplacePurchase>|Observable<Schema\RunnerApplication>|Observable<Schema\CodeSecurityDefaultConfigurations>|WithoutBody|Observable<Schema\HookDeliveryItem>|Observable<Schema\Team>|Observable<Schema\MinimalRepository>|Observable<Schema\TeamRoleAssignment>|Observable<Schema\UserRoleAssignment>|Observable<Schema\TeamDiscussion>|Observable<Schema\OrganizationInvitation>|Observable<Schema\SimpleUser>|Observable<Schema\TeamProject>|Schema\Operations\Repos\ListAttestations\Response\ApplicationJson\Ok\Application\Json|Observable<Schema\CodeScanningAlertItems>|Observable<Schema\CodeScanningAnalysis>|Observable<Schema\DependabotAlert>|Observable<Schema\PorterAuthor>|Observable<Schema\PorterLargeFile>|Observable<Schema\IssueComment>|Observable<Schema\IssueEvent>|Observable<Schema\PageBuild>|Observable<Schema\CustomPropertyValue>|Observable<Schema\PullRequestReviewComment>|Observable<Schema\RuleSuites>|Observable<Schema\SecretScanningAlert>|Observable<int>|Schema\Operations\Repos\GetCodeFrequencyStats\Response\ApplicationJson\Accepted\Application\Json|Observable<Schema\CommitActivity>|Schema\Operations\Repos\GetCommitActivityStats\Response\ApplicationJson\Accepted\Application\Json|Observable<Schema\ContributorActivity>|Schema\Operations\Repos\GetContributorsStats\Response\ApplicationJson\Accepted\Application\Json|Observable<Schema\TagProtection>|Observable<Schema\TeamDiscussionComment>|Observable<Schema\Reaction>|Observable<Schema\PackageVersion>|Observable<Schema\Event> */
    public function call(string $call, array $params, array $pathChunks): Ok|iterable|ActionsCacheUsageOrgEnterprise|\ApiClients\Client\GitHub\Schema\Operations\Actions\GetActionsCacheUsageByRepoForOrg\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization\Response\ApplicationJson\Ok|SelectedActions|ActionsGetDefaultWorkflowPermissions|Runner|ActionsPublicKey|OrganizationActionsSecret|OrganizationActionsVariable|WithoutBody|CodeSecurityConfiguration|CodespacesPublicKey|CodespacesOrgSecret|\ApiClients\Client\GitHub\Schema\Operations\Copilot\ListCopilotSeats\Response\ApplicationJson\Ok|DependabotPublicKey|OrganizationDependabotSecret|WebhookConfig|Json|CopilotSeatDetails|Package|OrgCustomProperty|RuleSuite|ActionsBillingUsage|PackagesBillingUsage|CombinedBillingUsage|ProjectCollaboratorPermission|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListArtifactsForRepo\Response\ApplicationJson\Ok|ActionsCacheList|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoOrganizationSecrets\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoOrganizationVariables\Response\ApplicationJson\Ok|ActionsRepositoryPermissions|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelfHostedRunnersForRepo\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListWorkflowRunsForRepo\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoSecrets\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoVariables\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoWorkflows\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Repos\ListAttestations\Response\ApplicationJson\Ok\Application\Json|Autolink|BranchWithProtection|BasicError|CheckRun|CheckSuite|CodeScanningDefaultSetup|CodeownersErrors|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\RepoMachinesForAuthenticatedUser\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\PreFlightWithRepoForAuthenticatedUser\Response\ApplicationJson\Ok|CodespacesPermissionsCheckForDevcontainer|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListRepoSecrets\Response\ApplicationJson\Ok|CommitComment|Commit|CommunityProfile|CommitComparison|ContentDirectory|ContentFile|ContentSymlink|ContentSubmodule|\ApiClients\Client\GitHub\Schema\Operations\Dependabot\ListRepoSecrets\Response\ApplicationJson\Ok|DependencyGraphSpdxSbom|Deployment|Environment|Hook|Issue|DeployKey|Label|Milestone|PagesHealthCheck|EmptyObject|PullRequest|Release|RepositoryRuleset|RepositoryAdvisory|\ApiClients\Client\GitHub\Schema\Operations\Repos\GetCodeFrequencyStats\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Repos\GetCommitActivityStats\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Repos\GetContributorsStats\Response\ApplicationJson\Accepted\Application\Json|ParticipationStats|CloneTraffic|ViewTraffic|TeamRepository|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListRepositoriesForSecretForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|CodespaceExportDetails
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'copilot') {
                        if ($pathChunks[4] === 'billing') {
                            if ($pathChunks[5] === 'seats') {
                                if ($call === 'GET /enterprises/{enterprise}/copilot/billing/seats') {
                                    return $this->routers->internal🔀Router🔀Get🔀Copilot()->listCopilotSeatsForEnterprise($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'marketplace_listing') {
                if ($pathChunks[2] === 'stubbed') {
                    if ($pathChunks[3] === 'plans') {
                        if ($pathChunks[4] === '{plan_id}') {
                            if ($pathChunks[5] === 'accounts') {
                                if ($call === 'GET /marketplace_listing/stubbed/plans/{plan_id}/accounts') {
                                    return $this->routers->internal🔀Router🔀Get🔀Apps()->listAccountsForPlanStubbed($params);
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
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->getActionsCacheUsageForOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'usage-by-repository') {
                                if ($call === 'GET /orgs/{org}/actions/cache/usage-by-repository') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->getActionsCacheUsageByRepoForOrg($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'permissions') {
                            if ($pathChunks[5] === 'repositories') {
                                if ($call === 'GET /orgs/{org}/actions/permissions/repositories') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->listSelectedRepositoriesEnabledGithubActionsOrganization($params);
                                }
                            } elseif ($pathChunks[5] === 'selected-actions') {
                                if ($call === 'GET /orgs/{org}/actions/permissions/selected-actions') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->getAllowedActionsOrganization($params);
                                }
                            } elseif ($pathChunks[5] === 'workflow') {
                                if ($call === 'GET /orgs/{org}/actions/permissions/workflow') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->getGithubActionsDefaultWorkflowPermissionsOrganization($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'runners') {
                            if ($pathChunks[5] === 'downloads') {
                                if ($call === 'GET /orgs/{org}/actions/runners/downloads') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->listRunnerApplicationsForOrg($params);
                                }
                            } elseif ($pathChunks[5] === '{runner_id}') {
                                if ($call === 'GET /orgs/{org}/actions/runners/{runner_id}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->getSelfHostedRunnerForOrg($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === 'public-key') {
                                if ($call === 'GET /orgs/{org}/actions/secrets/public-key') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->getOrgPublicKey($params);
                                }
                            } elseif ($pathChunks[5] === '{secret_name}') {
                                if ($call === 'GET /orgs/{org}/actions/secrets/{secret_name}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->getOrgSecret($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'variables') {
                            if ($pathChunks[5] === '{name}') {
                                if ($call === 'GET /orgs/{org}/actions/variables/{name}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->getOrgVariable($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'code-security') {
                        if ($pathChunks[4] === 'configurations') {
                            if ($pathChunks[5] === 'defaults') {
                                if ($call === 'GET /orgs/{org}/code-security/configurations/defaults') {
                                    return $this->routers->internal🔀Router🔀Get🔀CodeSecurity()->getDefaultConfigurations($params);
                                }
                            } elseif ($pathChunks[5] === '{configuration_id}') {
                                if ($call === 'GET /orgs/{org}/code-security/configurations/{configuration_id}') {
                                    return $this->routers->internal🔀Router🔀Get🔀CodeSecurity()->getConfiguration($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'codespaces') {
                        if ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === 'public-key') {
                                if ($call === 'GET /orgs/{org}/codespaces/secrets/public-key') {
                                    return $this->routers->internal🔀Router🔀Get🔀Codespaces()->getOrgPublicKey($params);
                                }
                            } elseif ($pathChunks[5] === '{secret_name}') {
                                if ($call === 'GET /orgs/{org}/codespaces/secrets/{secret_name}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Codespaces()->getOrgSecret($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'copilot') {
                        if ($pathChunks[4] === 'billing') {
                            if ($pathChunks[5] === 'seats') {
                                if ($call === 'GET /orgs/{org}/copilot/billing/seats') {
                                    return $this->routers->internal🔀Router🔀Get🔀Copilot()->listCopilotSeats($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'dependabot') {
                        if ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === 'public-key') {
                                if ($call === 'GET /orgs/{org}/dependabot/secrets/public-key') {
                                    return $this->routers->internal🔀Router🔀Get🔀Dependabot()->getOrgPublicKey($params);
                                }
                            } elseif ($pathChunks[5] === '{secret_name}') {
                                if ($call === 'GET /orgs/{org}/dependabot/secrets/{secret_name}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Dependabot()->getOrgSecret($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($pathChunks[4] === '{hook_id}') {
                            if ($pathChunks[5] === 'config') {
                                if ($call === 'GET /orgs/{org}/hooks/{hook_id}/config') {
                                    return $this->routers->internal🔀Router🔀Get🔀Orgs()->getWebhookConfigForOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'deliveries') {
                                if ($call === 'GET /orgs/{org}/hooks/{hook_id}/deliveries') {
                                    return $this->routers->internal🔀Router🔀Get🔀Orgs()->listWebhookDeliveries($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'invitations') {
                        if ($pathChunks[4] === '{invitation_id}') {
                            if ($pathChunks[5] === 'teams') {
                                if ($call === 'GET /orgs/{org}/invitations/{invitation_id}/teams') {
                                    return $this->routers->internal🔀Router🔀Get🔀Orgs()->listInvitationTeams($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($pathChunks[4] === '{username}') {
                            if ($pathChunks[5] === 'codespaces') {
                                if ($call === 'GET /orgs/{org}/members/{username}/codespaces') {
                                    return $this->routers->internal🔀Router🔀Get🔀Codespaces()->getCodespacesForUserInOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'copilot') {
                                if ($call === 'GET /orgs/{org}/members/{username}/copilot') {
                                    return $this->routers->internal🔀Router🔀Get🔀Copilot()->getCopilotSeatDetailsForUser($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'migrations') {
                        if ($pathChunks[4] === '{migration_id}') {
                            if ($pathChunks[5] === 'archive') {
                                if ($call === 'GET /orgs/{org}/migrations/{migration_id}/archive') {
                                    return $this->routers->internal🔀Router🔀Get🔀Migrations()->downloadArchiveForOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'repositories') {
                                if ($call === 'GET /orgs/{org}/migrations/{migration_id}/repositories') {
                                    return $this->routers->internal🔀Router🔀Get🔀Migrations()->listReposForOrg($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'organization-roles') {
                        if ($pathChunks[4] === '{role_id}') {
                            if ($pathChunks[5] === 'teams') {
                                if ($call === 'GET /orgs/{org}/organization-roles/{role_id}/teams') {
                                    return $this->routers->internal🔀Router🔀Get🔀Orgs()->listOrgRoleTeams($params);
                                }
                            } elseif ($pathChunks[5] === 'users') {
                                if ($call === 'GET /orgs/{org}/organization-roles/{role_id}/users') {
                                    return $this->routers->internal🔀Router🔀Get🔀Orgs()->listOrgRoleUsers($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'packages') {
                        if ($pathChunks[4] === '{package_type}') {
                            if ($pathChunks[5] === '{package_name}') {
                                if ($call === 'GET /orgs/{org}/packages/{package_type}/{package_name}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Packages()->getPackageForOrganization($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'personal-access-token-requests') {
                        if ($pathChunks[4] === '{pat_request_id}') {
                            if ($pathChunks[5] === 'repositories') {
                                if ($call === 'GET /orgs/{org}/personal-access-token-requests/{pat_request_id}/repositories') {
                                    return $this->routers->internal🔀Router🔀Get🔀Orgs()->listPatGrantRequestRepositories($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'personal-access-tokens') {
                        if ($pathChunks[4] === '{pat_id}') {
                            if ($pathChunks[5] === 'repositories') {
                                if ($call === 'GET /orgs/{org}/personal-access-tokens/{pat_id}/repositories') {
                                    return $this->routers->internal🔀Router🔀Get🔀Orgs()->listPatGrantRepositories($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'properties') {
                        if ($pathChunks[4] === 'schema') {
                            if ($pathChunks[5] === '{custom_property_name}') {
                                if ($call === 'GET /orgs/{org}/properties/schema/{custom_property_name}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Orgs()->getCustomProperty($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'rulesets') {
                        if ($pathChunks[4] === 'rule-suites') {
                            if ($pathChunks[5] === '{rule_suite_id}') {
                                if ($call === 'GET /orgs/{org}/rulesets/rule-suites/{rule_suite_id}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getOrgRuleSuite($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'settings') {
                        if ($pathChunks[4] === 'billing') {
                            if ($pathChunks[5] === 'actions') {
                                if ($call === 'GET /orgs/{org}/settings/billing/actions') {
                                    return $this->routers->internal🔀Router🔀Get🔀Billing()->getGithubActionsBillingOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'packages') {
                                if ($call === 'GET /orgs/{org}/settings/billing/packages') {
                                    return $this->routers->internal🔀Router🔀Get🔀Billing()->getGithubPackagesBillingOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'shared-storage') {
                                if ($call === 'GET /orgs/{org}/settings/billing/shared-storage') {
                                    return $this->routers->internal🔀Router🔀Get🔀Billing()->getSharedStorageBillingOrg($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($pathChunks[5] === 'discussions') {
                                if ($call === 'GET /orgs/{org}/teams/{team_slug}/discussions') {
                                    return $this->routers->internal🔀Router🔀Get🔀Teams()->listDiscussionsInOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'invitations') {
                                if ($call === 'GET /orgs/{org}/teams/{team_slug}/invitations') {
                                    return $this->routers->internal🔀Router🔀Get🔀Teams()->listPendingInvitationsInOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'members') {
                                if ($call === 'GET /orgs/{org}/teams/{team_slug}/members') {
                                    return $this->routers->internal🔀Router🔀Get🔀Teams()->listMembersInOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'projects') {
                                if ($call === 'GET /orgs/{org}/teams/{team_slug}/projects') {
                                    return $this->routers->internal🔀Router🔀Get🔀Teams()->listProjectsInOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'repos') {
                                if ($call === 'GET /orgs/{org}/teams/{team_slug}/repos') {
                                    return $this->routers->internal🔀Router🔀Get🔀Teams()->listReposInOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'teams') {
                                if ($call === 'GET /orgs/{org}/teams/{team_slug}/teams') {
                                    return $this->routers->internal🔀Router🔀Get🔀Teams()->listChildInOrg($params);
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
                                    return $this->routers->internal🔀Router🔀Get🔀Projects()->getPermissionForUser($params);
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
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->listArtifactsForRepo($params);
                                }
                            } elseif ($pathChunks[5] === 'caches') {
                                if ($call === 'GET /repos/{owner}/{repo}/actions/caches') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->getActionsCacheList($params);
                                }
                            } elseif ($pathChunks[5] === 'organization-secrets') {
                                if ($call === 'GET /repos/{owner}/{repo}/actions/organization-secrets') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->listRepoOrganizationSecrets($params);
                                }
                            } elseif ($pathChunks[5] === 'organization-variables') {
                                if ($call === 'GET /repos/{owner}/{repo}/actions/organization-variables') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->listRepoOrganizationVariables($params);
                                }
                            } elseif ($pathChunks[5] === 'permissions') {
                                if ($call === 'GET /repos/{owner}/{repo}/actions/permissions') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->getGithubActionsPermissionsRepository($params);
                                }
                            } elseif ($pathChunks[5] === 'runners') {
                                if ($call === 'GET /repos/{owner}/{repo}/actions/runners') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->listSelfHostedRunnersForRepo($params);
                                }
                            } elseif ($pathChunks[5] === 'runs') {
                                if ($call === 'GET /repos/{owner}/{repo}/actions/runs') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->listWorkflowRunsForRepo($params);
                                }
                            } elseif ($pathChunks[5] === 'secrets') {
                                if ($call === 'GET /repos/{owner}/{repo}/actions/secrets') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->listRepoSecrets($params);
                                }
                            } elseif ($pathChunks[5] === 'variables') {
                                if ($call === 'GET /repos/{owner}/{repo}/actions/variables') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->listRepoVariables($params);
                                }
                            } elseif ($pathChunks[5] === 'workflows') {
                                if ($call === 'GET /repos/{owner}/{repo}/actions/workflows') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->listRepoWorkflows($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'assignees') {
                            if ($pathChunks[5] === '{assignee}') {
                                if ($call === 'GET /repos/{owner}/{repo}/assignees/{assignee}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Issues()->checkUserCanBeAssigned($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'attestations') {
                            if ($pathChunks[5] === '{subject_digest}') {
                                if ($call === 'GET /repos/{owner}/{repo}/attestations/{subject_digest}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->listAttestations($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'autolinks') {
                            if ($pathChunks[5] === '{autolink_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/autolinks/{autolink_id}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getAutolink($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'branches') {
                            if ($pathChunks[5] === '{branch}') {
                                if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getBranch($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'check-runs') {
                            if ($pathChunks[5] === '{check_run_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/check-runs/{check_run_id}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Checks()->get($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'check-suites') {
                            if ($pathChunks[5] === '{check_suite_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/check-suites/{check_suite_id}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Checks()->getSuite($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'code-scanning') {
                            if ($pathChunks[5] === 'alerts') {
                                if ($call === 'GET /repos/{owner}/{repo}/code-scanning/alerts') {
                                    return $this->routers->internal🔀Router🔀Get🔀CodeScanning()->listAlertsForRepo($params);
                                }
                            } elseif ($pathChunks[5] === 'analyses') {
                                if ($call === 'GET /repos/{owner}/{repo}/code-scanning/analyses') {
                                    return $this->routers->internal🔀Router🔀Get🔀CodeScanning()->listRecentAnalyses($params);
                                }
                            } elseif ($pathChunks[5] === 'default-setup') {
                                if ($call === 'GET /repos/{owner}/{repo}/code-scanning/default-setup') {
                                    return $this->routers->internal🔀Router🔀Get🔀CodeScanning()->getDefaultSetup($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'codeowners') {
                            if ($pathChunks[5] === 'errors') {
                                if ($call === 'GET /repos/{owner}/{repo}/codeowners/errors') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->codeownersErrors($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'codespaces') {
                            if ($pathChunks[5] === 'devcontainers') {
                                if ($call === 'GET /repos/{owner}/{repo}/codespaces/devcontainers') {
                                    return $this->routers->internal🔀Router🔀Get🔀Codespaces()->listDevcontainersInRepositoryForAuthenticatedUser($params);
                                }
                            } elseif ($pathChunks[5] === 'machines') {
                                if ($call === 'GET /repos/{owner}/{repo}/codespaces/machines') {
                                    return $this->routers->internal🔀Router🔀Get🔀Codespaces()->repoMachinesForAuthenticatedUser($params);
                                }
                            } elseif ($pathChunks[5] === 'new') {
                                if ($call === 'GET /repos/{owner}/{repo}/codespaces/new') {
                                    return $this->routers->internal🔀Router🔀Get🔀Codespaces()->preFlightWithRepoForAuthenticatedUser($params);
                                }
                            } elseif ($pathChunks[5] === 'permissions_check') {
                                if ($call === 'GET /repos/{owner}/{repo}/codespaces/permissions_check') {
                                    return $this->routers->internal🔀Router🔀Get🔀Codespaces()->checkPermissionsForDevcontainer($params);
                                }
                            } elseif ($pathChunks[5] === 'secrets') {
                                if ($call === 'GET /repos/{owner}/{repo}/codespaces/secrets') {
                                    return $this->routers->internal🔀Router🔀Get🔀Codespaces()->listRepoSecrets($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'collaborators') {
                            if ($pathChunks[5] === '{username}') {
                                if ($call === 'GET /repos/{owner}/{repo}/collaborators/{username}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->checkCollaborator($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'comments') {
                            if ($pathChunks[5] === '{comment_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/comments/{comment_id}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getCommitComment($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'commits') {
                            if ($pathChunks[5] === '{ref}') {
                                if ($call === 'GET /repos/{owner}/{repo}/commits/{ref}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getCommit($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'community') {
                            if ($pathChunks[5] === 'profile') {
                                if ($call === 'GET /repos/{owner}/{repo}/community/profile') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getCommunityProfileMetrics($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'compare') {
                            if ($pathChunks[5] === '{basehead}') {
                                if ($call === 'GET /repos/{owner}/{repo}/compare/{basehead}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->compareCommits($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'contents') {
                            if ($pathChunks[5] === '{path}') {
                                if ($call === 'GET /repos/{owner}/{repo}/contents/{path}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getContent($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'dependabot') {
                            if ($pathChunks[5] === 'alerts') {
                                if ($call === 'GET /repos/{owner}/{repo}/dependabot/alerts') {
                                    return $this->routers->internal🔀Router🔀Get🔀Dependabot()->listAlertsForRepo($params);
                                }
                            } elseif ($pathChunks[5] === 'secrets') {
                                if ($call === 'GET /repos/{owner}/{repo}/dependabot/secrets') {
                                    return $this->routers->internal🔀Router🔀Get🔀Dependabot()->listRepoSecrets($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'dependency-graph') {
                            if ($pathChunks[5] === 'sbom') {
                                if ($call === 'GET /repos/{owner}/{repo}/dependency-graph/sbom') {
                                    return $this->routers->internal🔀Router🔀Get🔀DependencyGraph()->exportSbom($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'deployments') {
                            if ($pathChunks[5] === '{deployment_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/deployments/{deployment_id}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getDeployment($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'environments') {
                            if ($pathChunks[5] === '{environment_name}') {
                                if ($call === 'GET /repos/{owner}/{repo}/environments/{environment_name}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getEnvironment($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($pathChunks[5] === '{hook_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/hooks/{hook_id}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getWebhook($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'import') {
                            if ($pathChunks[5] === 'authors') {
                                if ($call === 'GET /repos/{owner}/{repo}/import/authors') {
                                    return $this->routers->internal🔀Router🔀Get🔀Migrations()->getCommitAuthors($params);
                                }
                            } elseif ($pathChunks[5] === 'large_files') {
                                if ($call === 'GET /repos/{owner}/{repo}/import/large_files') {
                                    return $this->routers->internal🔀Router🔀Get🔀Migrations()->getLargeFiles($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === 'comments') {
                                if ($call === 'GET /repos/{owner}/{repo}/issues/comments') {
                                    return $this->routers->internal🔀Router🔀Get🔀Issues()->listCommentsForRepo($params);
                                }
                            } elseif ($pathChunks[5] === 'events') {
                                if ($call === 'GET /repos/{owner}/{repo}/issues/events') {
                                    return $this->routers->internal🔀Router🔀Get🔀Issues()->listEventsForRepo($params);
                                }
                            } elseif ($pathChunks[5] === '{issue_number}') {
                                if ($call === 'GET /repos/{owner}/{repo}/issues/{issue_number}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Issues()->get($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'keys') {
                            if ($pathChunks[5] === '{key_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/keys/{key_id}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getDeployKey($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'labels') {
                            if ($pathChunks[5] === '{name}') {
                                if ($call === 'GET /repos/{owner}/{repo}/labels/{name}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Issues()->getLabel($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'milestones') {
                            if ($pathChunks[5] === '{milestone_number}') {
                                if ($call === 'GET /repos/{owner}/{repo}/milestones/{milestone_number}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Issues()->getMilestone($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'pages') {
                            if ($pathChunks[5] === 'builds') {
                                if ($call === 'GET /repos/{owner}/{repo}/pages/builds') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->listPagesBuilds($params);
                                }
                            } elseif ($pathChunks[5] === 'health') {
                                if ($call === 'GET /repos/{owner}/{repo}/pages/health') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getPagesHealthCheck($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'properties') {
                            if ($pathChunks[5] === 'values') {
                                if ($call === 'GET /repos/{owner}/{repo}/properties/values') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getCustomPropertiesValues($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === 'comments') {
                                if ($call === 'GET /repos/{owner}/{repo}/pulls/comments') {
                                    return $this->routers->internal🔀Router🔀Get🔀Pulls()->listReviewCommentsForRepo($params);
                                }
                            } elseif ($pathChunks[5] === '{pull_number}') {
                                if ($call === 'GET /repos/{owner}/{repo}/pulls/{pull_number}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Pulls()->get($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'readme') {
                            if ($pathChunks[5] === '{dir}') {
                                if ($call === 'GET /repos/{owner}/{repo}/readme/{dir}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getReadmeInDirectory($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($pathChunks[5] === 'latest') {
                                if ($call === 'GET /repos/{owner}/{repo}/releases/latest') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getLatestRelease($params);
                                }
                            } elseif ($pathChunks[5] === '{release_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/releases/{release_id}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getRelease($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'rulesets') {
                            if ($pathChunks[5] === 'rule-suites') {
                                if ($call === 'GET /repos/{owner}/{repo}/rulesets/rule-suites') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getRepoRuleSuites($params);
                                }
                            } elseif ($pathChunks[5] === '{ruleset_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/rulesets/{ruleset_id}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getRepoRuleset($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'secret-scanning') {
                            if ($pathChunks[5] === 'alerts') {
                                if ($call === 'GET /repos/{owner}/{repo}/secret-scanning/alerts') {
                                    return $this->routers->internal🔀Router🔀Get🔀SecretScanning()->listAlertsForRepo($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'security-advisories') {
                            if ($pathChunks[5] === '{ghsa_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/security-advisories/{ghsa_id}') {
                                    return $this->routers->internal🔀Router🔀Get🔀SecurityAdvisories()->getRepositoryAdvisory($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'stats') {
                            if ($pathChunks[5] === 'code_frequency') {
                                if ($call === 'GET /repos/{owner}/{repo}/stats/code_frequency') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getCodeFrequencyStats($params);
                                }
                            } elseif ($pathChunks[5] === 'commit_activity') {
                                if ($call === 'GET /repos/{owner}/{repo}/stats/commit_activity') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getCommitActivityStats($params);
                                }
                            } elseif ($pathChunks[5] === 'contributors') {
                                if ($call === 'GET /repos/{owner}/{repo}/stats/contributors') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getContributorsStats($params);
                                }
                            } elseif ($pathChunks[5] === 'participation') {
                                if ($call === 'GET /repos/{owner}/{repo}/stats/participation') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getParticipationStats($params);
                                }
                            } elseif ($pathChunks[5] === 'punch_card') {
                                if ($call === 'GET /repos/{owner}/{repo}/stats/punch_card') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getPunchCardStats($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'tags') {
                            if ($pathChunks[5] === 'protection') {
                                if ($call === 'GET /repos/{owner}/{repo}/tags/protection') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->listTagProtection($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'tarball') {
                            if ($pathChunks[5] === '{ref}') {
                                if ($call === 'GET /repos/{owner}/{repo}/tarball/{ref}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->downloadTarballArchive($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'traffic') {
                            if ($pathChunks[5] === 'clones') {
                                if ($call === 'GET /repos/{owner}/{repo}/traffic/clones') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getClones($params);
                                }
                            } elseif ($pathChunks[5] === 'views') {
                                if ($call === 'GET /repos/{owner}/{repo}/traffic/views') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getViews($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'zipball') {
                            if ($pathChunks[5] === '{ref}') {
                                if ($call === 'GET /repos/{owner}/{repo}/zipball/{ref}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->downloadZipballArchive($params);
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
                                    return $this->routers->internal🔀Router🔀Get🔀Teams()->listDiscussionCommentsLegacy($params);
                                }
                            } elseif ($pathChunks[5] === 'reactions') {
                                if ($call === 'GET /teams/{team_id}/discussions/{discussion_number}/reactions') {
                                    return $this->routers->internal🔀Router🔀Get🔀Reactions()->listForTeamDiscussionLegacy($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($pathChunks[4] === '{owner}') {
                            if ($pathChunks[5] === '{repo}') {
                                if ($call === 'GET /teams/{team_id}/repos/{owner}/{repo}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Teams()->checkPermissionsForRepoLegacy($params);
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
                                    return $this->routers->internal🔀Router🔀Get🔀Codespaces()->listRepositoriesForSecretForAuthenticatedUser($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === '{codespace_name}') {
                        if ($pathChunks[4] === 'exports') {
                            if ($pathChunks[5] === '{export_id}') {
                                if ($call === 'GET /user/codespaces/{codespace_name}/exports/{export_id}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Codespaces()->getExportDetailsForAuthenticatedUser($params);
                                }
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'packages') {
                    if ($pathChunks[3] === '{package_type}') {
                        if ($pathChunks[4] === '{package_name}') {
                            if ($pathChunks[5] === 'versions') {
                                if ($call === 'GET /user/packages/{package_type}/{package_name}/versions') {
                                    return $this->routers->internal🔀Router🔀Get🔀Packages()->getAllPackageVersionsForPackageOwnedByAuthenticatedUser($params);
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
                                    return $this->routers->internal🔀Router🔀Get🔀Activity()->listOrgEventsForAuthenticatedUser($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'packages') {
                        if ($pathChunks[4] === '{package_type}') {
                            if ($pathChunks[5] === '{package_name}') {
                                if ($call === 'GET /users/{username}/packages/{package_type}/{package_name}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Packages()->getPackageForUser($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'settings') {
                        if ($pathChunks[4] === 'billing') {
                            if ($pathChunks[5] === 'actions') {
                                if ($call === 'GET /users/{username}/settings/billing/actions') {
                                    return $this->routers->internal🔀Router🔀Get🔀Billing()->getGithubActionsBillingUser($params);
                                }
                            } elseif ($pathChunks[5] === 'packages') {
                                if ($call === 'GET /users/{username}/settings/billing/packages') {
                                    return $this->routers->internal🔀Router🔀Get🔀Billing()->getGithubPackagesBillingUser($params);
                                }
                            } elseif ($pathChunks[5] === 'shared-storage') {
                                if ($call === 'GET /users/{username}/settings/billing/shared-storage') {
                                    return $this->routers->internal🔀Router🔀Get🔀Billing()->getSharedStorageBillingUser($params);
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
