<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\Schema\ActionsOrganizationPermissions;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\CheckAutomatedSecurityFixes;
use ApiClients\Client\GitHub\Schema\CodespacesSecret;
use ApiClients\Client\GitHub\Schema\CodespacesUserPublicKey;
use ApiClients\Client\GitHub\Schema\ContentFile;
use ApiClients\Client\GitHub\Schema\CopilotOrganizationDetails;
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
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Five
{
    private array $router = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return |(Observable<Schema\DependabotAlertWithRepository>|array{code: int})|Observable<Schema\OrganizationSecretScanningAlert>|(Schema\GistComment|Observable<Schema\MarketplacePurchase>|(Schema\MarketplacePurchase|(Observable<Schema\Event>|Schema\BasicError|(Schema\ThreadSubscription|array{code: int}|Observable<Schema\CodeScanningOrganizationAlertItems>|Observable<Schema\Package>|(array{code: int}|array{code: int, location: string})|(Schema\ProjectCard|(Observable<Schema\ProjectCard>|Observable<Schema\Activity>|Observable<Schema\SimpleUser>|Observable<Schema\Autolink>|(Schema\CheckAutomatedSecurityFixes|Observable<Schema\ShortBranch>|Observable<Schema\Collaborator>|Observable<Schema\CommitComment>|Observable<Schema\Commit>|(Observable<Schema\Contributor>|Observable<Schema\Deployment>|Observable<Schema\Event>|Observable<Schema\MinimalRepository>|Observable<Schema\Hook>|Observable<Schema\RepositoryInvitation>|(Observable<Schema\Issue>|Schema\BasicError)|Observable<Schema\DeployKey>|Observable<Schema\Label>|Observable<Schema\Milestone>|Observable<Schema\Thread>|Observable<Schema\Project>|(Observable<Schema\PullRequestSimple>|Observable<Schema\Release>|Observable<Schema\RepositoryRuleset>|Observable<Schema\RepositoryAdvisory>|(Schema\RepositorySubscription|Observable<Schema\Tag>|Observable<Schema\Team>|(Schema\TeamProject|(Schema\Operations\Codespaces\CodespaceMachinesForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|(Schema\Operations\Apps\ListInstallationReposForAuthenticatedUser\Response\ApplicationJson\Ok */
    public function call(string $call, array $params, array $pathChunks): HookDelivery|iterable|GistComment|MarketplacePurchase|BasicError|ThreadSubscription|ActionsOrganizationPermissions|Ok|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListOrgSecrets\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListOrgVariables\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListOrgSecrets\Response\ApplicationJson\Ok|CopilotOrganizationDetails|\ApiClients\Client\GitHub\Schema\Operations\Dependabot\ListOrgSecrets\Response\ApplicationJson\Ok|OrgHook|OrgMembership|Migration|RepositoryRuleset|TeamFull|ProjectCard|CheckAutomatedSecurityFixes|Json|\ApiClients\Client\GitHub\Schema\Operations\Repos\GetAllEnvironments\Response\ApplicationJson\Ok|Import|Installation|InteractionLimitResponse|One|Language|LicenseContent|Page|ContentFile|SimpleUser|Stargazer|RepositorySubscription|Topic|TeamDiscussion|TeamMembership|TeamProject|CodespacesUserPublicKey|CodespacesSecret|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\CodespaceMachinesForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Apps\ListInstallationReposForAuthenticatedUser\Response\ApplicationJson\Ok|Package
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'hook') {
                    if ($pathChunks[3] === 'deliveries') {
                        if ($pathChunks[4] === '{delivery_id}') {
                            if ($call === 'GET /app/hook/deliveries/{delivery_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                    $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Apps::class]->GetWebhookDelivery($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'dependabot') {
                        if ($pathChunks[4] === 'alerts') {
                            if ($call === 'GET /enterprises/{enterprise}/dependabot/alerts') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Dependabot::class, $this->router) === false) {
                                    $this->router[Router\Get\Dependabot::class] = new Router\Get\Dependabot($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Dependabot::class]->ListAlertsForEnterprise($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'secret-scanning') {
                        if ($pathChunks[4] === 'alerts') {
                            if ($call === 'GET /enterprises/{enterprise}/secret-scanning/alerts') {
                                $matched = true;
                                if (array_key_exists(Router\Get\SecretScanning::class, $this->router) === false) {
                                    $this->router[Router\Get\SecretScanning::class] = new Router\Get\SecretScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\SecretScanning::class]->ListAlertsForEnterprise($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($pathChunks[3] === 'comments') {
                        if ($pathChunks[4] === '{comment_id}') {
                            if ($call === 'GET /gists/{gist_id}/comments/{comment_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Gists::class, $this->router) === false) {
                                    $this->router[Router\Get\Gists::class] = new Router\Get\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Gists::class]->GetComment($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'marketplace_listing') {
                if ($pathChunks[2] === 'plans') {
                    if ($pathChunks[3] === '{plan_id}') {
                        if ($pathChunks[4] === 'accounts') {
                            if ($call === 'GET /marketplace_listing/plans/{plan_id}/accounts') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                    $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Apps::class]->ListAccountsForPlan($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'stubbed') {
                    if ($pathChunks[3] === 'accounts') {
                        if ($pathChunks[4] === '{account_id}') {
                            if ($call === 'GET /marketplace_listing/stubbed/accounts/{account_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                    $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Apps::class]->GetSubscriptionPlanForAccountStubbed($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'networks') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'events') {
                            if ($call === 'GET /networks/{owner}/{repo}/events') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                    $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Activity::class]->ListPublicEventsForRepoNetwork($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'notifications') {
                if ($pathChunks[2] === 'threads') {
                    if ($pathChunks[3] === '{thread_id}') {
                        if ($pathChunks[4] === 'subscription') {
                            if ($call === 'GET /notifications/threads/{thread_id}/subscription') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                    $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Activity::class]->GetThreadSubscriptionForAuthenticatedUser($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'permissions') {
                            if ($call === 'GET /orgs/{org}/actions/permissions') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                    $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Actions::class]->GetGithubActionsPermissionsOrganization($params);
                            }
                        } elseif ($pathChunks[4] === 'runners') {
                            if ($call === 'GET /orgs/{org}/actions/runners') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                    $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Actions::class]->ListSelfHostedRunnersForOrg($params);
                            }
                        } elseif ($pathChunks[4] === 'secrets') {
                            if ($call === 'GET /orgs/{org}/actions/secrets') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                    $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Actions::class]->ListOrgSecrets($params);
                            }
                        } elseif ($pathChunks[4] === 'variables') {
                            if ($call === 'GET /orgs/{org}/actions/variables') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                    $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Actions::class]->ListOrgVariables($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'blocks') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'GET /orgs/{org}/blocks/{username}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Orgs::class]->CheckBlockedUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'code-scanning') {
                        if ($pathChunks[4] === 'alerts') {
                            if ($call === 'GET /orgs/{org}/code-scanning/alerts') {
                                $matched = true;
                                if (array_key_exists(Router\Get\CodeScanning::class, $this->router) === false) {
                                    $this->router[Router\Get\CodeScanning::class] = new Router\Get\CodeScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\CodeScanning::class]->ListAlertsForOrg($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'codespaces') {
                        if ($pathChunks[4] === 'secrets') {
                            if ($call === 'GET /orgs/{org}/codespaces/secrets') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Codespaces::class, $this->router) === false) {
                                    $this->router[Router\Get\Codespaces::class] = new Router\Get\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Codespaces::class]->ListOrgSecrets($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'copilot') {
                        if ($pathChunks[4] === 'billing') {
                            if ($call === 'GET /orgs/{org}/copilot/billing') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Copilot::class, $this->router) === false) {
                                    $this->router[Router\Get\Copilot::class] = new Router\Get\Copilot($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Copilot::class]->GetCopilotOrganizationDetails($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'dependabot') {
                        if ($pathChunks[4] === 'alerts') {
                            if ($call === 'GET /orgs/{org}/dependabot/alerts') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Dependabot::class, $this->router) === false) {
                                    $this->router[Router\Get\Dependabot::class] = new Router\Get\Dependabot($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Dependabot::class]->ListAlertsForOrg($params);
                            }
                        } elseif ($pathChunks[4] === 'secrets') {
                            if ($call === 'GET /orgs/{org}/dependabot/secrets') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Dependabot::class, $this->router) === false) {
                                    $this->router[Router\Get\Dependabot::class] = new Router\Get\Dependabot($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Dependabot::class]->ListOrgSecrets($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'docker') {
                        if ($pathChunks[4] === 'conflicts') {
                            if ($call === 'GET /orgs/{org}/docker/conflicts') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Packages::class, $this->router) === false) {
                                    $this->router[Router\Get\Packages::class] = new Router\Get\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Packages::class]->ListDockerMigrationConflictingPackagesForOrganization($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($pathChunks[4] === '{hook_id}') {
                            if ($call === 'GET /orgs/{org}/hooks/{hook_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Orgs::class]->GetWebhook($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'GET /orgs/{org}/members/{username}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Orgs::class]->CheckMembershipForUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'memberships') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'GET /orgs/{org}/memberships/{username}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Orgs::class]->GetMembershipForUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'migrations') {
                        if ($pathChunks[4] === '{migration_id}') {
                            if ($call === 'GET /orgs/{org}/migrations/{migration_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Migrations::class, $this->router) === false) {
                                    $this->router[Router\Get\Migrations::class] = new Router\Get\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Migrations::class]->GetStatusForOrg($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'public_members') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'GET /orgs/{org}/public_members/{username}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Orgs::class]->CheckPublicMembershipForUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'rulesets') {
                        if ($pathChunks[4] === '{ruleset_id}') {
                            if ($call === 'GET /orgs/{org}/rulesets/{ruleset_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->GetOrgRuleset($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'secret-scanning') {
                        if ($pathChunks[4] === 'alerts') {
                            if ($call === 'GET /orgs/{org}/secret-scanning/alerts') {
                                $matched = true;
                                if (array_key_exists(Router\Get\SecretScanning::class, $this->router) === false) {
                                    $this->router[Router\Get\SecretScanning::class] = new Router\Get\SecretScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\SecretScanning::class]->ListAlertsForOrg($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($call === 'GET /orgs/{org}/teams/{team_slug}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                    $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Teams::class]->GetByName($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === 'cards') {
                        if ($pathChunks[4] === '{card_id}') {
                            if ($call === 'GET /projects/columns/cards/{card_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Projects::class, $this->router) === false) {
                                    $this->router[Router\Get\Projects::class] = new Router\Get\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Projects::class]->GetCard($params);
                            }
                        }
                    } elseif ($pathChunks[3] === '{column_id}') {
                        if ($pathChunks[4] === 'cards') {
                            if ($call === 'GET /projects/columns/{column_id}/cards') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Projects::class, $this->router) === false) {
                                    $this->router[Router\Get\Projects::class] = new Router\Get\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Projects::class]->ListCards($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'activity') {
                            if ($call === 'GET /repos/{owner}/{repo}/activity') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->ListActivities($params);
                            }
                        } elseif ($pathChunks[4] === 'assignees') {
                            if ($call === 'GET /repos/{owner}/{repo}/assignees') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                                    $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Issues::class]->ListAssignees($params);
                            }
                        } elseif ($pathChunks[4] === 'autolinks') {
                            if ($call === 'GET /repos/{owner}/{repo}/autolinks') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->ListAutolinks($params);
                            }
                        } elseif ($pathChunks[4] === 'automated-security-fixes') {
                            if ($call === 'GET /repos/{owner}/{repo}/automated-security-fixes') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->CheckAutomatedSecurityFixes($params);
                            }
                        } elseif ($pathChunks[4] === 'branches') {
                            if ($call === 'GET /repos/{owner}/{repo}/branches') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->ListBranches($params);
                            }
                        } elseif ($pathChunks[4] === 'codespaces') {
                            if ($call === 'GET /repos/{owner}/{repo}/codespaces') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Codespaces::class, $this->router) === false) {
                                    $this->router[Router\Get\Codespaces::class] = new Router\Get\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Codespaces::class]->ListInRepositoryForAuthenticatedUser($params);
                            }
                        } elseif ($pathChunks[4] === 'collaborators') {
                            if ($call === 'GET /repos/{owner}/{repo}/collaborators') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->ListCollaborators($params);
                            }
                        } elseif ($pathChunks[4] === 'comments') {
                            if ($call === 'GET /repos/{owner}/{repo}/comments') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->ListCommitCommentsForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'commits') {
                            if ($call === 'GET /repos/{owner}/{repo}/commits') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->ListCommits($params);
                            }
                        } elseif ($pathChunks[4] === 'contributors') {
                            if ($call === 'GET /repos/{owner}/{repo}/contributors') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->ListContributors($params);
                            }
                        } elseif ($pathChunks[4] === 'deployments') {
                            if ($call === 'GET /repos/{owner}/{repo}/deployments') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->ListDeployments($params);
                            }
                        } elseif ($pathChunks[4] === 'environments') {
                            if ($call === 'GET /repos/{owner}/{repo}/environments') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->GetAllEnvironments($params);
                            }
                        } elseif ($pathChunks[4] === 'events') {
                            if ($call === 'GET /repos/{owner}/{repo}/events') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                    $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Activity::class]->ListRepoEvents($params);
                            }
                        } elseif ($pathChunks[4] === 'forks') {
                            if ($call === 'GET /repos/{owner}/{repo}/forks') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->ListForks($params);
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($call === 'GET /repos/{owner}/{repo}/hooks') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->ListWebhooks($params);
                            }
                        } elseif ($pathChunks[4] === 'import') {
                            if ($call === 'GET /repos/{owner}/{repo}/import') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Migrations::class, $this->router) === false) {
                                    $this->router[Router\Get\Migrations::class] = new Router\Get\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Migrations::class]->GetImportStatus($params);
                            }
                        } elseif ($pathChunks[4] === 'installation') {
                            if ($call === 'GET /repos/{owner}/{repo}/installation') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                    $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Apps::class]->GetRepoInstallation($params);
                            }
                        } elseif ($pathChunks[4] === 'interaction-limits') {
                            if ($call === 'GET /repos/{owner}/{repo}/interaction-limits') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Interactions::class, $this->router) === false) {
                                    $this->router[Router\Get\Interactions::class] = new Router\Get\Interactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Interactions::class]->GetRestrictionsForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'invitations') {
                            if ($call === 'GET /repos/{owner}/{repo}/invitations') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->ListInvitations($params);
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($call === 'GET /repos/{owner}/{repo}/issues') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                                    $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Issues::class]->ListForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'keys') {
                            if ($call === 'GET /repos/{owner}/{repo}/keys') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->ListDeployKeys($params);
                            }
                        } elseif ($pathChunks[4] === 'labels') {
                            if ($call === 'GET /repos/{owner}/{repo}/labels') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                                    $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Issues::class]->ListLabelsForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'languages') {
                            if ($call === 'GET /repos/{owner}/{repo}/languages') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->ListLanguages($params);
                            }
                        } elseif ($pathChunks[4] === 'license') {
                            if ($call === 'GET /repos/{owner}/{repo}/license') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Licenses::class, $this->router) === false) {
                                    $this->router[Router\Get\Licenses::class] = new Router\Get\Licenses($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Licenses::class]->GetForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'milestones') {
                            if ($call === 'GET /repos/{owner}/{repo}/milestones') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                                    $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Issues::class]->ListMilestones($params);
                            }
                        } elseif ($pathChunks[4] === 'notifications') {
                            if ($call === 'GET /repos/{owner}/{repo}/notifications') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                    $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Activity::class]->ListRepoNotificationsForAuthenticatedUser($params);
                            }
                        } elseif ($pathChunks[4] === 'pages') {
                            if ($call === 'GET /repos/{owner}/{repo}/pages') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->GetPages($params);
                            }
                        } elseif ($pathChunks[4] === 'projects') {
                            if ($call === 'GET /repos/{owner}/{repo}/projects') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Projects::class, $this->router) === false) {
                                    $this->router[Router\Get\Projects::class] = new Router\Get\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Projects::class]->ListForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($call === 'GET /repos/{owner}/{repo}/pulls') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Pulls::class, $this->router) === false) {
                                    $this->router[Router\Get\Pulls::class] = new Router\Get\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Pulls::class]->List($params);
                            }
                        } elseif ($pathChunks[4] === 'readme') {
                            if ($call === 'GET /repos/{owner}/{repo}/readme') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->GetReadme($params);
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($call === 'GET /repos/{owner}/{repo}/releases') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->ListReleases($params);
                            }
                        } elseif ($pathChunks[4] === 'rulesets') {
                            if ($call === 'GET /repos/{owner}/{repo}/rulesets') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->GetRepoRulesets($params);
                            }
                        } elseif ($pathChunks[4] === 'security-advisories') {
                            if ($call === 'GET /repos/{owner}/{repo}/security-advisories') {
                                $matched = true;
                                if (array_key_exists(Router\Get\SecurityAdvisories::class, $this->router) === false) {
                                    $this->router[Router\Get\SecurityAdvisories::class] = new Router\Get\SecurityAdvisories($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\SecurityAdvisories::class]->ListRepositoryAdvisories($params);
                            }
                        } elseif ($pathChunks[4] === 'stargazers') {
                            if ($call === 'GET /repos/{owner}/{repo}/stargazers') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                    $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Activity::class]->ListStargazersForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'subscribers') {
                            if ($call === 'GET /repos/{owner}/{repo}/subscribers') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                    $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Activity::class]->ListWatchersForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'subscription') {
                            if ($call === 'GET /repos/{owner}/{repo}/subscription') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                    $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Activity::class]->GetRepoSubscription($params);
                            }
                        } elseif ($pathChunks[4] === 'tags') {
                            if ($call === 'GET /repos/{owner}/{repo}/tags') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->ListTags($params);
                            }
                        } elseif ($pathChunks[4] === 'teams') {
                            if ($call === 'GET /repos/{owner}/{repo}/teams') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->ListTeams($params);
                            }
                        } elseif ($pathChunks[4] === 'topics') {
                            if ($call === 'GET /repos/{owner}/{repo}/topics') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->GetAllTopics($params);
                            }
                        } elseif ($pathChunks[4] === 'vulnerability-alerts') {
                            if ($call === 'GET /repos/{owner}/{repo}/vulnerability-alerts') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->CheckVulnerabilityAlerts($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'discussions') {
                        if ($pathChunks[4] === '{discussion_number}') {
                            if ($call === 'GET /teams/{team_id}/discussions/{discussion_number}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                    $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Teams::class]->GetDiscussionLegacy($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'GET /teams/{team_id}/members/{username}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                    $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Teams::class]->GetMemberLegacy($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'memberships') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'GET /teams/{team_id}/memberships/{username}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                    $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Teams::class]->GetMembershipForUserLegacy($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($pathChunks[4] === '{project_id}') {
                            if ($call === 'GET /teams/{team_id}/projects/{project_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                    $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Teams::class]->CheckPermissionsForProjectLegacy($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'codespaces') {
                    if ($pathChunks[3] === 'secrets') {
                        if ($pathChunks[4] === 'public-key') {
                            if ($call === 'GET /user/codespaces/secrets/public-key') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Codespaces::class, $this->router) === false) {
                                    $this->router[Router\Get\Codespaces::class] = new Router\Get\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Codespaces::class]->GetPublicKeyForAuthenticatedUser($params);
                            }
                        } elseif ($pathChunks[4] === '{secret_name}') {
                            if ($call === 'GET /user/codespaces/secrets/{secret_name}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Codespaces::class, $this->router) === false) {
                                    $this->router[Router\Get\Codespaces::class] = new Router\Get\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Codespaces::class]->GetSecretForAuthenticatedUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === '{codespace_name}') {
                        if ($pathChunks[4] === 'machines') {
                            if ($call === 'GET /user/codespaces/{codespace_name}/machines') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Codespaces::class, $this->router) === false) {
                                    $this->router[Router\Get\Codespaces::class] = new Router\Get\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Codespaces::class]->CodespaceMachinesForAuthenticatedUser($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'installations') {
                    if ($pathChunks[3] === '{installation_id}') {
                        if ($pathChunks[4] === 'repositories') {
                            if ($call === 'GET /user/installations/{installation_id}/repositories') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                    $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Apps::class]->ListInstallationReposForAuthenticatedUser($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'memberships') {
                    if ($pathChunks[3] === 'orgs') {
                        if ($pathChunks[4] === '{org}') {
                            if ($call === 'GET /user/memberships/orgs/{org}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Orgs::class]->GetMembershipForAuthenticatedUser($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'migrations') {
                    if ($pathChunks[3] === '{migration_id}') {
                        if ($pathChunks[4] === 'archive') {
                            if ($call === 'GET /user/migrations/{migration_id}/archive') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Migrations::class, $this->router) === false) {
                                    $this->router[Router\Get\Migrations::class] = new Router\Get\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Migrations::class]->GetArchiveForAuthenticatedUser($params);
                            }
                        } elseif ($pathChunks[4] === 'repositories') {
                            if ($call === 'GET /user/migrations/{migration_id}/repositories') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Migrations::class, $this->router) === false) {
                                    $this->router[Router\Get\Migrations::class] = new Router\Get\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Migrations::class]->ListReposForAuthenticatedUser($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'packages') {
                    if ($pathChunks[3] === '{package_type}') {
                        if ($pathChunks[4] === '{package_name}') {
                            if ($call === 'GET /user/packages/{package_type}/{package_name}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Packages::class, $this->router) === false) {
                                    $this->router[Router\Get\Packages::class] = new Router\Get\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Packages::class]->GetPackageForAuthenticatedUser($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'starred') {
                    if ($pathChunks[3] === '{owner}') {
                        if ($pathChunks[4] === '{repo}') {
                            if ($call === 'GET /user/starred/{owner}/{repo}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                    $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Activity::class]->CheckRepoIsStarredByAuthenticatedUser($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($pathChunks[2] === '{username}') {
                    if ($pathChunks[3] === 'docker') {
                        if ($pathChunks[4] === 'conflicts') {
                            if ($call === 'GET /users/{username}/docker/conflicts') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Packages::class, $this->router) === false) {
                                    $this->router[Router\Get\Packages::class] = new Router\Get\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Packages::class]->ListDockerMigrationConflictingPackagesForUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'events') {
                        if ($pathChunks[4] === 'public') {
                            if ($call === 'GET /users/{username}/events/public') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                    $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Activity::class]->ListPublicEventsForUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'following') {
                        if ($pathChunks[4] === '{target_user}') {
                            if ($call === 'GET /users/{username}/following/{target_user}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                    $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Users::class]->CheckFollowingForUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'received_events') {
                        if ($pathChunks[4] === 'public') {
                            if ($call === 'GET /users/{username}/received_events/public') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                    $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Activity::class]->ListReceivedPublicEventsForUser($params);
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
