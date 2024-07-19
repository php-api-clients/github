<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Get;

use ApiClients\Client\GitHub\Internal\Routers;
use ApiClients\Client\GitHub\Schema\ActionsOrganizationPermissions;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\CheckAutomatedSecurityFixes;
use ApiClients\Client\GitHub\Schema\CodespacesSecret;
use ApiClients\Client\GitHub\Schema\CodespacesUserPublicKey;
use ApiClients\Client\GitHub\Schema\ContentFile;
use ApiClients\Client\GitHub\Schema\CopilotOrganizationDetails;
use ApiClients\Client\GitHub\Schema\EmptyObject;
use ApiClients\Client\GitHub\Schema\GistComment;
use ApiClients\Client\GitHub\Schema\HookDelivery;
use ApiClients\Client\GitHub\Schema\Import;
use ApiClients\Client\GitHub\Schema\Installation;
use ApiClients\Client\GitHub\Schema\InteractionLimitResponse;
use ApiClients\Client\GitHub\Schema\Language;
use ApiClients\Client\GitHub\Schema\LicenseContent;
use ApiClients\Client\GitHub\Schema\MarketplacePurchase;
use ApiClients\Client\GitHub\Schema\Migration;
use ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelfHostedRunnersForOrg\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListInRepositoryForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHub\Schema\Operations\Interactions\GetRestrictionsForRepo\Response\ApplicationJson\Ok\Application\Json\One;
use ApiClients\Client\GitHub\Schema\OrganizationRole;
use ApiClients\Client\GitHub\Schema\OrgHook;
use ApiClients\Client\GitHub\Schema\OrgMembership;
use ApiClients\Client\GitHub\Schema\Package;
use ApiClients\Client\GitHub\Schema\Page;
use ApiClients\Client\GitHub\Schema\ProjectCard;
use ApiClients\Client\GitHub\Schema\RepositoryRuleset;
use ApiClients\Client\GitHub\Schema\RepositorySubscription;
use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\Stargazer;
use ApiClients\Client\GitHub\Schema\TeamDiscussion;
use ApiClients\Client\GitHub\Schema\TeamFull;
use ApiClients\Client\GitHub\Schema\TeamMembership;
use ApiClients\Client\GitHub\Schema\TeamProject;
use ApiClients\Client\GitHub\Schema\ThreadSubscription;
use ApiClients\Client\GitHub\Schema\Topic;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Five
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return |Observable<Schema\CopilotUsageMetrics>|Observable<Schema\DependabotAlertWithRepository>|WithoutBody|Observable<Schema\OrganizationSecretScanningAlert>|Observable<Schema\MarketplacePurchase>|Observable<Schema\Event>|Schema\BasicError|Observable<Schema\CodeScanningOrganizationAlertItems>|Observable<Schema\CodeSecurityConfiguration>|Observable<Schema\Package>|Observable<Schema\OrgCustomProperty>|Observable<Schema\OrgRepoCustomPropertyValues>|iterable<int,Schema\RuleSuites>|Observable<Schema\ProjectCard>|Observable<Schema\Activity>|Observable<Schema\SimpleUser>|Observable<Schema\Autolink>|Observable<Schema\ShortBranch>|Observable<Schema\Collaborator>|Observable<Schema\CommitComment>|Observable<Schema\Commit>|Observable<Schema\Contributor>|Observable<Schema\Deployment>|Observable<Schema\MinimalRepository>|Observable<Schema\Hook>|Observable<Schema\RepositoryInvitation>|Observable<Schema\Issue>|Observable<Schema\DeployKey>|Observable<Schema\Label>|Observable<Schema\Milestone>|Observable<Schema\Thread>|Observable<Schema\Project>|Observable<Schema\PullRequestSimple>|Observable<Schema\Release>|Observable<Schema\RepositoryRuleset>|Observable<Schema\RepositoryAdvisory>|Observable<Schema\Tag>|Observable<Schema\Team> */
    public function call(string $call, array $params, array $pathChunks): HookDelivery|iterable|WithoutBody|GistComment|MarketplacePurchase|BasicError|ThreadSubscription|ActionsOrganizationPermissions|Ok|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListOrgSecrets\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListOrgVariables\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Orgs\ListAttestations\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListOrgSecrets\Response\ApplicationJson\Ok|CopilotOrganizationDetails|\ApiClients\Client\GitHub\Schema\Operations\Dependabot\ListOrgSecrets\Response\ApplicationJson\Ok|OrgHook|OrgMembership|Migration|OrganizationRole|RepositoryRuleset|TeamFull|ProjectCard|CheckAutomatedSecurityFixes|Json|\ApiClients\Client\GitHub\Schema\Operations\Repos\GetAllEnvironments\Response\ApplicationJson\Ok|Import|Installation|InteractionLimitResponse|One|Language|LicenseContent|Page|\ApiClients\Client\GitHub\Schema\Operations\Repos\CheckPrivateVulnerabilityReporting\Response\ApplicationJson\Ok|ContentFile|SimpleUser|Stargazer|RepositorySubscription|Topic|TeamDiscussion|TeamMembership|TeamProject|CodespacesUserPublicKey|CodespacesSecret|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\CodespaceMachinesForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Apps\ListInstallationReposForAuthenticatedUser\Response\ApplicationJson\Ok|Package|\ApiClients\Client\GitHub\Schema\Operations\Users\ListAttestations\Response\ApplicationJson\Ok|EmptyObject
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'hook') {
                    if ($pathChunks[3] === 'deliveries') {
                        if ($pathChunks[4] === '{delivery_id}') {
                            if ($call === 'GET /app/hook/deliveries/{delivery_id}') {
                                return $this->routers->internal🔀Router🔀Get🔀Apps()->getWebhookDelivery($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'copilot') {
                        if ($pathChunks[4] === 'usage') {
                            if ($call === 'GET /enterprises/{enterprise}/copilot/usage') {
                                return $this->routers->internal🔀Router🔀Get🔀Copilot()->usageMetricsForEnterprise($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'dependabot') {
                        if ($pathChunks[4] === 'alerts') {
                            if ($call === 'GET /enterprises/{enterprise}/dependabot/alerts') {
                                return $this->routers->internal🔀Router🔀Get🔀Dependabot()->listAlertsForEnterprise($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'secret-scanning') {
                        if ($pathChunks[4] === 'alerts') {
                            if ($call === 'GET /enterprises/{enterprise}/secret-scanning/alerts') {
                                return $this->routers->internal🔀Router🔀Get🔀SecretScanning()->listAlertsForEnterprise($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($pathChunks[3] === 'comments') {
                        if ($pathChunks[4] === '{comment_id}') {
                            if ($call === 'GET /gists/{gist_id}/comments/{comment_id}') {
                                return $this->routers->internal🔀Router🔀Get🔀Gists()->getComment($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'marketplace_listing') {
                if ($pathChunks[2] === 'plans') {
                    if ($pathChunks[3] === '{plan_id}') {
                        if ($pathChunks[4] === 'accounts') {
                            if ($call === 'GET /marketplace_listing/plans/{plan_id}/accounts') {
                                return $this->routers->internal🔀Router🔀Get🔀Apps()->listAccountsForPlan($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'stubbed') {
                    if ($pathChunks[3] === 'accounts') {
                        if ($pathChunks[4] === '{account_id}') {
                            if ($call === 'GET /marketplace_listing/stubbed/accounts/{account_id}') {
                                return $this->routers->internal🔀Router🔀Get🔀Apps()->getSubscriptionPlanForAccountStubbed($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'networks') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'events') {
                            if ($call === 'GET /networks/{owner}/{repo}/events') {
                                return $this->routers->internal🔀Router🔀Get🔀Activity()->listPublicEventsForRepoNetwork($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'notifications') {
                if ($pathChunks[2] === 'threads') {
                    if ($pathChunks[3] === '{thread_id}') {
                        if ($pathChunks[4] === 'subscription') {
                            if ($call === 'GET /notifications/threads/{thread_id}/subscription') {
                                return $this->routers->internal🔀Router🔀Get🔀Activity()->getThreadSubscriptionForAuthenticatedUser($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'permissions') {
                            if ($call === 'GET /orgs/{org}/actions/permissions') {
                                return $this->routers->internal🔀Router🔀Get🔀Actions()->getGithubActionsPermissionsOrganization($params);
                            }
                        } elseif ($pathChunks[4] === 'runners') {
                            if ($call === 'GET /orgs/{org}/actions/runners') {
                                return $this->routers->internal🔀Router🔀Get🔀Actions()->listSelfHostedRunnersForOrg($params);
                            }
                        } elseif ($pathChunks[4] === 'secrets') {
                            if ($call === 'GET /orgs/{org}/actions/secrets') {
                                return $this->routers->internal🔀Router🔀Get🔀Actions()->listOrgSecrets($params);
                            }
                        } elseif ($pathChunks[4] === 'variables') {
                            if ($call === 'GET /orgs/{org}/actions/variables') {
                                return $this->routers->internal🔀Router🔀Get🔀Actions()->listOrgVariables($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'attestations') {
                        if ($pathChunks[4] === '{subject_digest}') {
                            if ($call === 'GET /orgs/{org}/attestations/{subject_digest}') {
                                return $this->routers->internal🔀Router🔀Get🔀Orgs()->listAttestations($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'blocks') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'GET /orgs/{org}/blocks/{username}') {
                                return $this->routers->internal🔀Router🔀Get🔀Orgs()->checkBlockedUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'code-scanning') {
                        if ($pathChunks[4] === 'alerts') {
                            if ($call === 'GET /orgs/{org}/code-scanning/alerts') {
                                return $this->routers->internal🔀Router🔀Get🔀CodeScanning()->listAlertsForOrg($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'code-security') {
                        if ($pathChunks[4] === 'configurations') {
                            if ($call === 'GET /orgs/{org}/code-security/configurations') {
                                return $this->routers->internal🔀Router🔀Get🔀CodeSecurity()->getConfigurationsForOrg($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'codespaces') {
                        if ($pathChunks[4] === 'secrets') {
                            if ($call === 'GET /orgs/{org}/codespaces/secrets') {
                                return $this->routers->internal🔀Router🔀Get🔀Codespaces()->listOrgSecrets($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'copilot') {
                        if ($pathChunks[4] === 'billing') {
                            if ($call === 'GET /orgs/{org}/copilot/billing') {
                                return $this->routers->internal🔀Router🔀Get🔀Copilot()->getCopilotOrganizationDetails($params);
                            }
                        } elseif ($pathChunks[4] === 'usage') {
                            if ($call === 'GET /orgs/{org}/copilot/usage') {
                                return $this->routers->internal🔀Router🔀Get🔀Copilot()->usageMetricsForOrg($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'dependabot') {
                        if ($pathChunks[4] === 'alerts') {
                            if ($call === 'GET /orgs/{org}/dependabot/alerts') {
                                return $this->routers->internal🔀Router🔀Get🔀Dependabot()->listAlertsForOrg($params);
                            }
                        } elseif ($pathChunks[4] === 'secrets') {
                            if ($call === 'GET /orgs/{org}/dependabot/secrets') {
                                return $this->routers->internal🔀Router🔀Get🔀Dependabot()->listOrgSecrets($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'docker') {
                        if ($pathChunks[4] === 'conflicts') {
                            if ($call === 'GET /orgs/{org}/docker/conflicts') {
                                return $this->routers->internal🔀Router🔀Get🔀Packages()->listDockerMigrationConflictingPackagesForOrganization($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($pathChunks[4] === '{hook_id}') {
                            if ($call === 'GET /orgs/{org}/hooks/{hook_id}') {
                                return $this->routers->internal🔀Router🔀Get🔀Orgs()->getWebhook($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'GET /orgs/{org}/members/{username}') {
                                return $this->routers->internal🔀Router🔀Get🔀Orgs()->checkMembershipForUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'memberships') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'GET /orgs/{org}/memberships/{username}') {
                                return $this->routers->internal🔀Router🔀Get🔀Orgs()->getMembershipForUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'migrations') {
                        if ($pathChunks[4] === '{migration_id}') {
                            if ($call === 'GET /orgs/{org}/migrations/{migration_id}') {
                                return $this->routers->internal🔀Router🔀Get🔀Migrations()->getStatusForOrg($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'organization-roles') {
                        if ($pathChunks[4] === '{role_id}') {
                            if ($call === 'GET /orgs/{org}/organization-roles/{role_id}') {
                                return $this->routers->internal🔀Router🔀Get🔀Orgs()->getOrgRole($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'properties') {
                        if ($pathChunks[4] === 'schema') {
                            if ($call === 'GET /orgs/{org}/properties/schema') {
                                return $this->routers->internal🔀Router🔀Get🔀Orgs()->getAllCustomProperties($params);
                            }
                        } elseif ($pathChunks[4] === 'values') {
                            if ($call === 'GET /orgs/{org}/properties/values') {
                                return $this->routers->internal🔀Router🔀Get🔀Orgs()->listCustomPropertiesValuesForRepos($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'public_members') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'GET /orgs/{org}/public_members/{username}') {
                                return $this->routers->internal🔀Router🔀Get🔀Orgs()->checkPublicMembershipForUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'rulesets') {
                        if ($pathChunks[4] === 'rule-suites') {
                            if ($call === 'GET /orgs/{org}/rulesets/rule-suites') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->getOrgRuleSuites($params);
                            }
                        } elseif ($pathChunks[4] === '{ruleset_id}') {
                            if ($call === 'GET /orgs/{org}/rulesets/{ruleset_id}') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->getOrgRuleset($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'secret-scanning') {
                        if ($pathChunks[4] === 'alerts') {
                            if ($call === 'GET /orgs/{org}/secret-scanning/alerts') {
                                return $this->routers->internal🔀Router🔀Get🔀SecretScanning()->listAlertsForOrg($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($call === 'GET /orgs/{org}/teams/{team_slug}') {
                                return $this->routers->internal🔀Router🔀Get🔀Teams()->getByName($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === 'cards') {
                        if ($pathChunks[4] === '{card_id}') {
                            if ($call === 'GET /projects/columns/cards/{card_id}') {
                                return $this->routers->internal🔀Router🔀Get🔀Projects()->getCard($params);
                            }
                        }
                    } elseif ($pathChunks[3] === '{column_id}') {
                        if ($pathChunks[4] === 'cards') {
                            if ($call === 'GET /projects/columns/{column_id}/cards') {
                                return $this->routers->internal🔀Router🔀Get🔀Projects()->listCards($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'activity') {
                            if ($call === 'GET /repos/{owner}/{repo}/activity') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->listActivities($params);
                            }
                        } elseif ($pathChunks[4] === 'assignees') {
                            if ($call === 'GET /repos/{owner}/{repo}/assignees') {
                                return $this->routers->internal🔀Router🔀Get🔀Issues()->listAssignees($params);
                            }
                        } elseif ($pathChunks[4] === 'autolinks') {
                            if ($call === 'GET /repos/{owner}/{repo}/autolinks') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->listAutolinks($params);
                            }
                        } elseif ($pathChunks[4] === 'automated-security-fixes') {
                            if ($call === 'GET /repos/{owner}/{repo}/automated-security-fixes') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->checkAutomatedSecurityFixes($params);
                            }
                        } elseif ($pathChunks[4] === 'branches') {
                            if ($call === 'GET /repos/{owner}/{repo}/branches') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->listBranches($params);
                            }
                        } elseif ($pathChunks[4] === 'codespaces') {
                            if ($call === 'GET /repos/{owner}/{repo}/codespaces') {
                                return $this->routers->internal🔀Router🔀Get🔀Codespaces()->listInRepositoryForAuthenticatedUser($params);
                            }
                        } elseif ($pathChunks[4] === 'collaborators') {
                            if ($call === 'GET /repos/{owner}/{repo}/collaborators') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->listCollaborators($params);
                            }
                        } elseif ($pathChunks[4] === 'comments') {
                            if ($call === 'GET /repos/{owner}/{repo}/comments') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->listCommitCommentsForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'commits') {
                            if ($call === 'GET /repos/{owner}/{repo}/commits') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->listCommits($params);
                            }
                        } elseif ($pathChunks[4] === 'contributors') {
                            if ($call === 'GET /repos/{owner}/{repo}/contributors') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->listContributors($params);
                            }
                        } elseif ($pathChunks[4] === 'deployments') {
                            if ($call === 'GET /repos/{owner}/{repo}/deployments') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->listDeployments($params);
                            }
                        } elseif ($pathChunks[4] === 'environments') {
                            if ($call === 'GET /repos/{owner}/{repo}/environments') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->getAllEnvironments($params);
                            }
                        } elseif ($pathChunks[4] === 'events') {
                            if ($call === 'GET /repos/{owner}/{repo}/events') {
                                return $this->routers->internal🔀Router🔀Get🔀Activity()->listRepoEvents($params);
                            }
                        } elseif ($pathChunks[4] === 'forks') {
                            if ($call === 'GET /repos/{owner}/{repo}/forks') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->listForks($params);
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($call === 'GET /repos/{owner}/{repo}/hooks') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->listWebhooks($params);
                            }
                        } elseif ($pathChunks[4] === 'import') {
                            if ($call === 'GET /repos/{owner}/{repo}/import') {
                                return $this->routers->internal🔀Router🔀Get🔀Migrations()->getImportStatus($params);
                            }
                        } elseif ($pathChunks[4] === 'installation') {
                            if ($call === 'GET /repos/{owner}/{repo}/installation') {
                                return $this->routers->internal🔀Router🔀Get🔀Apps()->getRepoInstallation($params);
                            }
                        } elseif ($pathChunks[4] === 'interaction-limits') {
                            if ($call === 'GET /repos/{owner}/{repo}/interaction-limits') {
                                return $this->routers->internal🔀Router🔀Get🔀Interactions()->getRestrictionsForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'invitations') {
                            if ($call === 'GET /repos/{owner}/{repo}/invitations') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->listInvitations($params);
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($call === 'GET /repos/{owner}/{repo}/issues') {
                                return $this->routers->internal🔀Router🔀Get🔀Issues()->listForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'keys') {
                            if ($call === 'GET /repos/{owner}/{repo}/keys') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->listDeployKeys($params);
                            }
                        } elseif ($pathChunks[4] === 'labels') {
                            if ($call === 'GET /repos/{owner}/{repo}/labels') {
                                return $this->routers->internal🔀Router🔀Get🔀Issues()->listLabelsForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'languages') {
                            if ($call === 'GET /repos/{owner}/{repo}/languages') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->listLanguages($params);
                            }
                        } elseif ($pathChunks[4] === 'license') {
                            if ($call === 'GET /repos/{owner}/{repo}/license') {
                                return $this->routers->internal🔀Router🔀Get🔀Licenses()->getForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'milestones') {
                            if ($call === 'GET /repos/{owner}/{repo}/milestones') {
                                return $this->routers->internal🔀Router🔀Get🔀Issues()->listMilestones($params);
                            }
                        } elseif ($pathChunks[4] === 'notifications') {
                            if ($call === 'GET /repos/{owner}/{repo}/notifications') {
                                return $this->routers->internal🔀Router🔀Get🔀Activity()->listRepoNotificationsForAuthenticatedUser($params);
                            }
                        } elseif ($pathChunks[4] === 'pages') {
                            if ($call === 'GET /repos/{owner}/{repo}/pages') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->getPages($params);
                            }
                        } elseif ($pathChunks[4] === 'private-vulnerability-reporting') {
                            if ($call === 'GET /repos/{owner}/{repo}/private-vulnerability-reporting') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->checkPrivateVulnerabilityReporting($params);
                            }
                        } elseif ($pathChunks[4] === 'projects') {
                            if ($call === 'GET /repos/{owner}/{repo}/projects') {
                                return $this->routers->internal🔀Router🔀Get🔀Projects()->listForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($call === 'GET /repos/{owner}/{repo}/pulls') {
                                return $this->routers->internal🔀Router🔀Get🔀Pulls()->list($params);
                            }
                        } elseif ($pathChunks[4] === 'readme') {
                            if ($call === 'GET /repos/{owner}/{repo}/readme') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->getReadme($params);
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($call === 'GET /repos/{owner}/{repo}/releases') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->listReleases($params);
                            }
                        } elseif ($pathChunks[4] === 'rulesets') {
                            if ($call === 'GET /repos/{owner}/{repo}/rulesets') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->getRepoRulesets($params);
                            }
                        } elseif ($pathChunks[4] === 'security-advisories') {
                            if ($call === 'GET /repos/{owner}/{repo}/security-advisories') {
                                return $this->routers->internal🔀Router🔀Get🔀SecurityAdvisories()->listRepositoryAdvisories($params);
                            }
                        } elseif ($pathChunks[4] === 'stargazers') {
                            if ($call === 'GET /repos/{owner}/{repo}/stargazers') {
                                return $this->routers->internal🔀Router🔀Get🔀Activity()->listStargazersForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'subscribers') {
                            if ($call === 'GET /repos/{owner}/{repo}/subscribers') {
                                return $this->routers->internal🔀Router🔀Get🔀Activity()->listWatchersForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'subscription') {
                            if ($call === 'GET /repos/{owner}/{repo}/subscription') {
                                return $this->routers->internal🔀Router🔀Get🔀Activity()->getRepoSubscription($params);
                            }
                        } elseif ($pathChunks[4] === 'tags') {
                            if ($call === 'GET /repos/{owner}/{repo}/tags') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->listTags($params);
                            }
                        } elseif ($pathChunks[4] === 'teams') {
                            if ($call === 'GET /repos/{owner}/{repo}/teams') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->listTeams($params);
                            }
                        } elseif ($pathChunks[4] === 'topics') {
                            if ($call === 'GET /repos/{owner}/{repo}/topics') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->getAllTopics($params);
                            }
                        } elseif ($pathChunks[4] === 'vulnerability-alerts') {
                            if ($call === 'GET /repos/{owner}/{repo}/vulnerability-alerts') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->checkVulnerabilityAlerts($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'discussions') {
                        if ($pathChunks[4] === '{discussion_number}') {
                            if ($call === 'GET /teams/{team_id}/discussions/{discussion_number}') {
                                return $this->routers->internal🔀Router🔀Get🔀Teams()->getDiscussionLegacy($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'GET /teams/{team_id}/members/{username}') {
                                return $this->routers->internal🔀Router🔀Get🔀Teams()->getMemberLegacy($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'memberships') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'GET /teams/{team_id}/memberships/{username}') {
                                return $this->routers->internal🔀Router🔀Get🔀Teams()->getMembershipForUserLegacy($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($pathChunks[4] === '{project_id}') {
                            if ($call === 'GET /teams/{team_id}/projects/{project_id}') {
                                return $this->routers->internal🔀Router🔀Get🔀Teams()->checkPermissionsForProjectLegacy($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'codespaces') {
                    if ($pathChunks[3] === 'secrets') {
                        if ($pathChunks[4] === 'public-key') {
                            if ($call === 'GET /user/codespaces/secrets/public-key') {
                                return $this->routers->internal🔀Router🔀Get🔀Codespaces()->getPublicKeyForAuthenticatedUser($params);
                            }
                        } elseif ($pathChunks[4] === '{secret_name}') {
                            if ($call === 'GET /user/codespaces/secrets/{secret_name}') {
                                return $this->routers->internal🔀Router🔀Get🔀Codespaces()->getSecretForAuthenticatedUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === '{codespace_name}') {
                        if ($pathChunks[4] === 'machines') {
                            if ($call === 'GET /user/codespaces/{codespace_name}/machines') {
                                return $this->routers->internal🔀Router🔀Get🔀Codespaces()->codespaceMachinesForAuthenticatedUser($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'installations') {
                    if ($pathChunks[3] === '{installation_id}') {
                        if ($pathChunks[4] === 'repositories') {
                            if ($call === 'GET /user/installations/{installation_id}/repositories') {
                                return $this->routers->internal🔀Router🔀Get🔀Apps()->listInstallationReposForAuthenticatedUser($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'memberships') {
                    if ($pathChunks[3] === 'orgs') {
                        if ($pathChunks[4] === '{org}') {
                            if ($call === 'GET /user/memberships/orgs/{org}') {
                                return $this->routers->internal🔀Router🔀Get🔀Orgs()->getMembershipForAuthenticatedUser($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'migrations') {
                    if ($pathChunks[3] === '{migration_id}') {
                        if ($pathChunks[4] === 'archive') {
                            if ($call === 'GET /user/migrations/{migration_id}/archive') {
                                return $this->routers->internal🔀Router🔀Get🔀Migrations()->getArchiveForAuthenticatedUser($params);
                            }
                        } elseif ($pathChunks[4] === 'repositories') {
                            if ($call === 'GET /user/migrations/{migration_id}/repositories') {
                                return $this->routers->internal🔀Router🔀Get🔀Migrations()->listReposForAuthenticatedUser($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'packages') {
                    if ($pathChunks[3] === '{package_type}') {
                        if ($pathChunks[4] === '{package_name}') {
                            if ($call === 'GET /user/packages/{package_type}/{package_name}') {
                                return $this->routers->internal🔀Router🔀Get🔀Packages()->getPackageForAuthenticatedUser($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'starred') {
                    if ($pathChunks[3] === '{owner}') {
                        if ($pathChunks[4] === '{repo}') {
                            if ($call === 'GET /user/starred/{owner}/{repo}') {
                                return $this->routers->internal🔀Router🔀Get🔀Activity()->checkRepoIsStarredByAuthenticatedUser($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($pathChunks[2] === '{username}') {
                    if ($pathChunks[3] === 'attestations') {
                        if ($pathChunks[4] === '{subject_digest}') {
                            if ($call === 'GET /users/{username}/attestations/{subject_digest}') {
                                return $this->routers->internal🔀Router🔀Get🔀Users()->listAttestations($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'docker') {
                        if ($pathChunks[4] === 'conflicts') {
                            if ($call === 'GET /users/{username}/docker/conflicts') {
                                return $this->routers->internal🔀Router🔀Get🔀Packages()->listDockerMigrationConflictingPackagesForUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'events') {
                        if ($pathChunks[4] === 'public') {
                            if ($call === 'GET /users/{username}/events/public') {
                                return $this->routers->internal🔀Router🔀Get🔀Activity()->listPublicEventsForUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'following') {
                        if ($pathChunks[4] === '{target_user}') {
                            if ($call === 'GET /users/{username}/following/{target_user}') {
                                return $this->routers->internal🔀Router🔀Get🔀Users()->checkFollowingForUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'received_events') {
                        if ($pathChunks[4] === 'public') {
                            if ($call === 'GET /users/{username}/received_events/public') {
                                return $this->routers->internal🔀Router🔀Get🔀Activity()->listReceivedPublicEventsForUser($params);
                            }
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
