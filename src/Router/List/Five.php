<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\List;

use ApiClients\Client\GitHub\Routers;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\BasicError;
use InvalidArgumentException;

final class Five
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return iterable<Schema\MarketplacePurchase>|iterable<Schema\Event>|Schema\BasicError|array{code:int}|iterable<Schema\CodeScanningOrganizationAlertItems>|iterable<Schema\OrganizationSecretScanningAlert>|iterable<Schema\ProjectCard>|iterable<Schema\SimpleUser>|iterable<Schema\ShortBranch>|iterable<Schema\Collaborator>|iterable<Schema\CommitComment>|iterable<Schema\Commit>|iterable<Schema\Contributor>|iterable<Schema\Deployment>|iterable<Schema\MinimalRepository>|iterable<Schema\Hook>|iterable<Schema\RepositoryInvitation>|iterable<Schema\Issue>|iterable<Schema\DeployKey>|iterable<Schema\Label>|iterable<Schema\Milestone>|iterable<Schema\Thread>|iterable<Schema\Project>|iterable<Schema\PullRequestSimple>|iterable<Schema\Release>|iterable<Schema\RepositoryRuleset>|iterable<Schema\Tag>|iterable<Schema\Team> */
    public function call(string $call, array $params, array $pathChunks): iterable|BasicError
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'marketplace_listing') {
                if ($pathChunks[2] === 'plans') {
                    if ($pathChunks[3] === '{plan_id}') {
                        if ($pathChunks[4] === 'accounts') {
                            if ($call === 'LIST /marketplace_listing/plans/{plan_id}/accounts') {
                                return $this->routers->router🔀List🔀Apps()->listAccountsForPlanListing($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'networks') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'events') {
                            if ($call === 'LIST /networks/{owner}/{repo}/events') {
                                return $this->routers->router🔀List🔀Activity()->listPublicEventsForRepoNetworkListing($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'code-scanning') {
                        if ($pathChunks[4] === 'alerts') {
                            if ($call === 'LIST /orgs/{org}/code-scanning/alerts') {
                                return $this->routers->router🔀List🔀CodeScanning()->listAlertsForOrgListing($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'secret-scanning') {
                        if ($pathChunks[4] === 'alerts') {
                            if ($call === 'LIST /orgs/{org}/secret-scanning/alerts') {
                                return $this->routers->router🔀List🔀SecretScanning()->listAlertsForOrgListing($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === '{column_id}') {
                        if ($pathChunks[4] === 'cards') {
                            if ($call === 'LIST /projects/columns/{column_id}/cards') {
                                return $this->routers->router🔀List🔀Projects()->listCardsListing($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'assignees') {
                            if ($call === 'LIST /repos/{owner}/{repo}/assignees') {
                                return $this->routers->router🔀List🔀Issues()->listAssigneesListing($params);
                            }
                        } elseif ($pathChunks[4] === 'branches') {
                            if ($call === 'LIST /repos/{owner}/{repo}/branches') {
                                return $this->routers->router🔀List🔀Repos()->listBranchesListing($params);
                            }
                        } elseif ($pathChunks[4] === 'collaborators') {
                            if ($call === 'LIST /repos/{owner}/{repo}/collaborators') {
                                return $this->routers->router🔀List🔀Repos()->listCollaboratorsListing($params);
                            }
                        } elseif ($pathChunks[4] === 'comments') {
                            if ($call === 'LIST /repos/{owner}/{repo}/comments') {
                                return $this->routers->router🔀List🔀Repos()->listCommitCommentsForRepoListing($params);
                            }
                        } elseif ($pathChunks[4] === 'commits') {
                            if ($call === 'LIST /repos/{owner}/{repo}/commits') {
                                return $this->routers->router🔀List🔀Repos()->listCommitsListing($params);
                            }
                        } elseif ($pathChunks[4] === 'contributors') {
                            if ($call === 'LIST /repos/{owner}/{repo}/contributors') {
                                return $this->routers->router🔀List🔀Repos()->listContributorsListing($params);
                            }
                        } elseif ($pathChunks[4] === 'deployments') {
                            if ($call === 'LIST /repos/{owner}/{repo}/deployments') {
                                return $this->routers->router🔀List🔀Repos()->listDeploymentsListing($params);
                            }
                        } elseif ($pathChunks[4] === 'events') {
                            if ($call === 'LIST /repos/{owner}/{repo}/events') {
                                return $this->routers->router🔀List🔀Activity()->listRepoEventsListing($params);
                            }
                        } elseif ($pathChunks[4] === 'forks') {
                            if ($call === 'LIST /repos/{owner}/{repo}/forks') {
                                return $this->routers->router🔀List🔀Repos()->listForksListing($params);
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($call === 'LIST /repos/{owner}/{repo}/hooks') {
                                return $this->routers->router🔀List🔀Repos()->listWebhooksListing($params);
                            }
                        } elseif ($pathChunks[4] === 'invitations') {
                            if ($call === 'LIST /repos/{owner}/{repo}/invitations') {
                                return $this->routers->router🔀List🔀Repos()->listInvitationsListing($params);
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($call === 'LIST /repos/{owner}/{repo}/issues') {
                                return $this->routers->router🔀List🔀Issues()->listForRepoListing($params);
                            }
                        } elseif ($pathChunks[4] === 'keys') {
                            if ($call === 'LIST /repos/{owner}/{repo}/keys') {
                                return $this->routers->router🔀List🔀Repos()->listDeployKeysListing($params);
                            }
                        } elseif ($pathChunks[4] === 'labels') {
                            if ($call === 'LIST /repos/{owner}/{repo}/labels') {
                                return $this->routers->router🔀List🔀Issues()->listLabelsForRepoListing($params);
                            }
                        } elseif ($pathChunks[4] === 'milestones') {
                            if ($call === 'LIST /repos/{owner}/{repo}/milestones') {
                                return $this->routers->router🔀List🔀Issues()->listMilestonesListing($params);
                            }
                        } elseif ($pathChunks[4] === 'notifications') {
                            if ($call === 'LIST /repos/{owner}/{repo}/notifications') {
                                return $this->routers->router🔀List🔀Activity()->listRepoNotificationsForAuthenticatedUserListing($params);
                            }
                        } elseif ($pathChunks[4] === 'projects') {
                            if ($call === 'LIST /repos/{owner}/{repo}/projects') {
                                return $this->routers->router🔀List🔀Projects()->listForRepoListing($params);
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($call === 'LIST /repos/{owner}/{repo}/pulls') {
                                return $this->routers->router🔀List🔀Pulls()->listListing($params);
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($call === 'LIST /repos/{owner}/{repo}/releases') {
                                return $this->routers->router🔀List🔀Repos()->listReleasesListing($params);
                            }
                        } elseif ($pathChunks[4] === 'rulesets') {
                            if ($call === 'LIST /repos/{owner}/{repo}/rulesets') {
                                return $this->routers->router🔀List🔀Repos()->getRepoRulesetsListing($params);
                            }
                        } elseif ($pathChunks[4] === 'subscribers') {
                            if ($call === 'LIST /repos/{owner}/{repo}/subscribers') {
                                return $this->routers->router🔀List🔀Activity()->listWatchersForRepoListing($params);
                            }
                        } elseif ($pathChunks[4] === 'tags') {
                            if ($call === 'LIST /repos/{owner}/{repo}/tags') {
                                return $this->routers->router🔀List🔀Repos()->listTagsListing($params);
                            }
                        } elseif ($pathChunks[4] === 'teams') {
                            if ($call === 'LIST /repos/{owner}/{repo}/teams') {
                                return $this->routers->router🔀List🔀Repos()->listTeamsListing($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'migrations') {
                    if ($pathChunks[3] === '{migration_id}') {
                        if ($pathChunks[4] === 'repositories') {
                            if ($call === 'LIST /user/migrations/{migration_id}/repositories') {
                                return $this->routers->router🔀List🔀Migrations()->listReposForAuthenticatedUserListing($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($pathChunks[2] === '{username}') {
                    if ($pathChunks[3] === 'events') {
                        if ($pathChunks[4] === 'public') {
                            if ($call === 'LIST /users/{username}/events/public') {
                                return $this->routers->router🔀List🔀Activity()->listPublicEventsForUserListing($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'received_events') {
                        if ($pathChunks[4] === 'public') {
                            if ($call === 'LIST /users/{username}/received_events/public') {
                                return $this->routers->router🔀List🔀Activity()->listReceivedPublicEventsForUserListing($params);
                            }
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
