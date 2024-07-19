<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\List;

use ApiClients\Client\GitHub\Internal\Routers;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Five
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return Observable<Schema\CopilotUsageMetrics>|Observable<Schema\MarketplacePurchase>|Observable<Schema\Event>|Schema\BasicError|WithoutBody|Observable<Schema\CodeScanningOrganizationAlertItems>|Observable<Schema\OrgRepoCustomPropertyValues>|iterable<int,Schema\RuleSuites>|Observable<Schema\OrganizationSecretScanningAlert>|Observable<Schema\ProjectCard>|Observable<Schema\SimpleUser>|Observable<Schema\ShortBranch>|Observable<Schema\Collaborator>|Observable<Schema\CommitComment>|Observable<Schema\Commit>|Observable<Schema\Contributor>|Observable<Schema\Deployment>|Observable<Schema\MinimalRepository>|Observable<Schema\Hook>|Observable<Schema\RepositoryInvitation>|Observable<Schema\Issue>|Observable<Schema\DeployKey>|Observable<Schema\Label>|Observable<Schema\Milestone>|Observable<Schema\Thread>|Observable<Schema\Project>|Observable<Schema\PullRequestSimple>|Observable<Schema\Release>|Observable<Schema\RepositoryRuleset>|Observable<Schema\Tag>|Observable<Schema\Team> */
    public function call(string $call, array $params, array $pathChunks): iterable|BasicError|WithoutBody
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'copilot') {
                        if ($pathChunks[4] === 'usage') {
                            if ($call === 'LIST /enterprises/{enterprise}/copilot/usage') {
                                return $this->routers->internal🔀Router🔀List🔀Copilot()->usageMetricsForEnterpriseListing($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'marketplace_listing') {
                if ($pathChunks[2] === 'plans') {
                    if ($pathChunks[3] === '{plan_id}') {
                        if ($pathChunks[4] === 'accounts') {
                            if ($call === 'LIST /marketplace_listing/plans/{plan_id}/accounts') {
                                return $this->routers->internal🔀Router🔀List🔀Apps()->listAccountsForPlanListing($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'networks') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'events') {
                            if ($call === 'LIST /networks/{owner}/{repo}/events') {
                                return $this->routers->internal🔀Router🔀List🔀Activity()->listPublicEventsForRepoNetworkListing($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'code-scanning') {
                        if ($pathChunks[4] === 'alerts') {
                            if ($call === 'LIST /orgs/{org}/code-scanning/alerts') {
                                return $this->routers->internal🔀Router🔀List🔀CodeScanning()->listAlertsForOrgListing($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'copilot') {
                        if ($pathChunks[4] === 'usage') {
                            if ($call === 'LIST /orgs/{org}/copilot/usage') {
                                return $this->routers->internal🔀Router🔀List🔀Copilot()->usageMetricsForOrgListing($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'properties') {
                        if ($pathChunks[4] === 'values') {
                            if ($call === 'LIST /orgs/{org}/properties/values') {
                                return $this->routers->internal🔀Router🔀List🔀Orgs()->listCustomPropertiesValuesForReposListing($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'rulesets') {
                        if ($pathChunks[4] === 'rule-suites') {
                            if ($call === 'LIST /orgs/{org}/rulesets/rule-suites') {
                                return $this->routers->internal🔀Router🔀List🔀Repos()->getOrgRuleSuitesListing($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'secret-scanning') {
                        if ($pathChunks[4] === 'alerts') {
                            if ($call === 'LIST /orgs/{org}/secret-scanning/alerts') {
                                return $this->routers->internal🔀Router🔀List🔀SecretScanning()->listAlertsForOrgListing($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === '{column_id}') {
                        if ($pathChunks[4] === 'cards') {
                            if ($call === 'LIST /projects/columns/{column_id}/cards') {
                                return $this->routers->internal🔀Router🔀List🔀Projects()->listCardsListing($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'assignees') {
                            if ($call === 'LIST /repos/{owner}/{repo}/assignees') {
                                return $this->routers->internal🔀Router🔀List🔀Issues()->listAssigneesListing($params);
                            }
                        } elseif ($pathChunks[4] === 'branches') {
                            if ($call === 'LIST /repos/{owner}/{repo}/branches') {
                                return $this->routers->internal🔀Router🔀List🔀Repos()->listBranchesListing($params);
                            }
                        } elseif ($pathChunks[4] === 'collaborators') {
                            if ($call === 'LIST /repos/{owner}/{repo}/collaborators') {
                                return $this->routers->internal🔀Router🔀List🔀Repos()->listCollaboratorsListing($params);
                            }
                        } elseif ($pathChunks[4] === 'comments') {
                            if ($call === 'LIST /repos/{owner}/{repo}/comments') {
                                return $this->routers->internal🔀Router🔀List🔀Repos()->listCommitCommentsForRepoListing($params);
                            }
                        } elseif ($pathChunks[4] === 'commits') {
                            if ($call === 'LIST /repos/{owner}/{repo}/commits') {
                                return $this->routers->internal🔀Router🔀List🔀Repos()->listCommitsListing($params);
                            }
                        } elseif ($pathChunks[4] === 'contributors') {
                            if ($call === 'LIST /repos/{owner}/{repo}/contributors') {
                                return $this->routers->internal🔀Router🔀List🔀Repos()->listContributorsListing($params);
                            }
                        } elseif ($pathChunks[4] === 'deployments') {
                            if ($call === 'LIST /repos/{owner}/{repo}/deployments') {
                                return $this->routers->internal🔀Router🔀List🔀Repos()->listDeploymentsListing($params);
                            }
                        } elseif ($pathChunks[4] === 'events') {
                            if ($call === 'LIST /repos/{owner}/{repo}/events') {
                                return $this->routers->internal🔀Router🔀List🔀Activity()->listRepoEventsListing($params);
                            }
                        } elseif ($pathChunks[4] === 'forks') {
                            if ($call === 'LIST /repos/{owner}/{repo}/forks') {
                                return $this->routers->internal🔀Router🔀List🔀Repos()->listForksListing($params);
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($call === 'LIST /repos/{owner}/{repo}/hooks') {
                                return $this->routers->internal🔀Router🔀List🔀Repos()->listWebhooksListing($params);
                            }
                        } elseif ($pathChunks[4] === 'invitations') {
                            if ($call === 'LIST /repos/{owner}/{repo}/invitations') {
                                return $this->routers->internal🔀Router🔀List🔀Repos()->listInvitationsListing($params);
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($call === 'LIST /repos/{owner}/{repo}/issues') {
                                return $this->routers->internal🔀Router🔀List🔀Issues()->listForRepoListing($params);
                            }
                        } elseif ($pathChunks[4] === 'keys') {
                            if ($call === 'LIST /repos/{owner}/{repo}/keys') {
                                return $this->routers->internal🔀Router🔀List🔀Repos()->listDeployKeysListing($params);
                            }
                        } elseif ($pathChunks[4] === 'labels') {
                            if ($call === 'LIST /repos/{owner}/{repo}/labels') {
                                return $this->routers->internal🔀Router🔀List🔀Issues()->listLabelsForRepoListing($params);
                            }
                        } elseif ($pathChunks[4] === 'milestones') {
                            if ($call === 'LIST /repos/{owner}/{repo}/milestones') {
                                return $this->routers->internal🔀Router🔀List🔀Issues()->listMilestonesListing($params);
                            }
                        } elseif ($pathChunks[4] === 'notifications') {
                            if ($call === 'LIST /repos/{owner}/{repo}/notifications') {
                                return $this->routers->internal🔀Router🔀List🔀Activity()->listRepoNotificationsForAuthenticatedUserListing($params);
                            }
                        } elseif ($pathChunks[4] === 'projects') {
                            if ($call === 'LIST /repos/{owner}/{repo}/projects') {
                                return $this->routers->internal🔀Router🔀List🔀Projects()->listForRepoListing($params);
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($call === 'LIST /repos/{owner}/{repo}/pulls') {
                                return $this->routers->internal🔀Router🔀List🔀Pulls()->listListing($params);
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($call === 'LIST /repos/{owner}/{repo}/releases') {
                                return $this->routers->internal🔀Router🔀List🔀Repos()->listReleasesListing($params);
                            }
                        } elseif ($pathChunks[4] === 'rulesets') {
                            if ($call === 'LIST /repos/{owner}/{repo}/rulesets') {
                                return $this->routers->internal🔀Router🔀List🔀Repos()->getRepoRulesetsListing($params);
                            }
                        } elseif ($pathChunks[4] === 'subscribers') {
                            if ($call === 'LIST /repos/{owner}/{repo}/subscribers') {
                                return $this->routers->internal🔀Router🔀List🔀Activity()->listWatchersForRepoListing($params);
                            }
                        } elseif ($pathChunks[4] === 'tags') {
                            if ($call === 'LIST /repos/{owner}/{repo}/tags') {
                                return $this->routers->internal🔀Router🔀List🔀Repos()->listTagsListing($params);
                            }
                        } elseif ($pathChunks[4] === 'teams') {
                            if ($call === 'LIST /repos/{owner}/{repo}/teams') {
                                return $this->routers->internal🔀Router🔀List🔀Repos()->listTeamsListing($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'migrations') {
                    if ($pathChunks[3] === '{migration_id}') {
                        if ($pathChunks[4] === 'repositories') {
                            if ($call === 'LIST /user/migrations/{migration_id}/repositories') {
                                return $this->routers->internal🔀Router🔀List🔀Migrations()->listReposForAuthenticatedUserListing($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($pathChunks[2] === '{username}') {
                    if ($pathChunks[3] === 'events') {
                        if ($pathChunks[4] === 'public') {
                            if ($call === 'LIST /users/{username}/events/public') {
                                return $this->routers->internal🔀Router🔀List🔀Activity()->listPublicEventsForUserListing($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'received_events') {
                        if ($pathChunks[4] === 'public') {
                            if ($call === 'LIST /users/{username}/received_events/public') {
                                return $this->routers->internal🔀Router🔀List🔀Activity()->listReceivedPublicEventsForUserListing($params);
                            }
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
