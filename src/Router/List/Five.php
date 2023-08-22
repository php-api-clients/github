<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\List;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\Schema\BasicError;
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

    /** @return iterable<Schema\MarketplacePurchase>|(iterable<Schema\Event>|Schema\BasicError|array{code: int})|iterable<Schema\CodeScanningOrganizationAlertItems>|iterable<Schema\OrganizationSecretScanningAlert>|(iterable<Schema\ProjectCard>|iterable<Schema\SimpleUser>|iterable<Schema\ShortBranch>|iterable<Schema\Collaborator>|iterable<Schema\CommitComment>|iterable<Schema\Commit>|(iterable<Schema\Contributor>|iterable<Schema\Deployment>|iterable<Schema\Event>|iterable<Schema\MinimalRepository>|iterable<Schema\Hook>|iterable<Schema\RepositoryInvitation>|(iterable<Schema\Issue>|Schema\BasicError)|iterable<Schema\DeployKey>|iterable<Schema\Label>|iterable<Schema\Milestone>|iterable<Schema\Thread>|iterable<Schema\Project>|(iterable<Schema\PullRequestSimple>|iterable<Schema\Release>|iterable<Schema\RepositoryRuleset>|iterable<Schema\Tag>|iterable<Schema\Team> */
    public function call(string $call, array $params, array $pathChunks): iterable|BasicError
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'marketplace_listing') {
                if ($pathChunks[2] === 'plans') {
                    if ($pathChunks[3] === '{plan_id}') {
                        if ($pathChunks[4] === 'accounts') {
                            if ($call === 'LIST /marketplace_listing/plans/{plan_id}/accounts') {
                                $matched = true;
                                if (array_key_exists(Router\List\Apps::class, $this->router) === false) {
                                    $this->router[Router\List\Apps::class] = new Router\List\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\List\Apps::class]->ListAccountsForPlanListing($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'networks') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'events') {
                            if ($call === 'LIST /networks/{owner}/{repo}/events') {
                                $matched = true;
                                if (array_key_exists(Router\List\Activity::class, $this->router) === false) {
                                    $this->router[Router\List\Activity::class] = new Router\List\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\List\Activity::class]->ListPublicEventsForRepoNetworkListing($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'code-scanning') {
                        if ($pathChunks[4] === 'alerts') {
                            if ($call === 'LIST /orgs/{org}/code-scanning/alerts') {
                                $matched = true;
                                if (array_key_exists(Router\List\CodeScanning::class, $this->router) === false) {
                                    $this->router[Router\List\CodeScanning::class] = new Router\List\CodeScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\List\CodeScanning::class]->ListAlertsForOrgListing($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'secret-scanning') {
                        if ($pathChunks[4] === 'alerts') {
                            if ($call === 'LIST /orgs/{org}/secret-scanning/alerts') {
                                $matched = true;
                                if (array_key_exists(Router\List\SecretScanning::class, $this->router) === false) {
                                    $this->router[Router\List\SecretScanning::class] = new Router\List\SecretScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\List\SecretScanning::class]->ListAlertsForOrgListing($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === '{column_id}') {
                        if ($pathChunks[4] === 'cards') {
                            if ($call === 'LIST /projects/columns/{column_id}/cards') {
                                $matched = true;
                                if (array_key_exists(Router\List\Projects::class, $this->router) === false) {
                                    $this->router[Router\List\Projects::class] = new Router\List\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\List\Projects::class]->ListCardsListing($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'assignees') {
                            if ($call === 'LIST /repos/{owner}/{repo}/assignees') {
                                $matched = true;
                                if (array_key_exists(Router\List\Issues::class, $this->router) === false) {
                                    $this->router[Router\List\Issues::class] = new Router\List\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\List\Issues::class]->ListAssigneesListing($params);
                            }
                        } elseif ($pathChunks[4] === 'branches') {
                            if ($call === 'LIST /repos/{owner}/{repo}/branches') {
                                $matched = true;
                                if (array_key_exists(Router\List\Repos::class, $this->router) === false) {
                                    $this->router[Router\List\Repos::class] = new Router\List\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\List\Repos::class]->ListBranchesListing($params);
                            }
                        } elseif ($pathChunks[4] === 'collaborators') {
                            if ($call === 'LIST /repos/{owner}/{repo}/collaborators') {
                                $matched = true;
                                if (array_key_exists(Router\List\Repos::class, $this->router) === false) {
                                    $this->router[Router\List\Repos::class] = new Router\List\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\List\Repos::class]->ListCollaboratorsListing($params);
                            }
                        } elseif ($pathChunks[4] === 'comments') {
                            if ($call === 'LIST /repos/{owner}/{repo}/comments') {
                                $matched = true;
                                if (array_key_exists(Router\List\Repos::class, $this->router) === false) {
                                    $this->router[Router\List\Repos::class] = new Router\List\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\List\Repos::class]->ListCommitCommentsForRepoListing($params);
                            }
                        } elseif ($pathChunks[4] === 'commits') {
                            if ($call === 'LIST /repos/{owner}/{repo}/commits') {
                                $matched = true;
                                if (array_key_exists(Router\List\Repos::class, $this->router) === false) {
                                    $this->router[Router\List\Repos::class] = new Router\List\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\List\Repos::class]->ListCommitsListing($params);
                            }
                        } elseif ($pathChunks[4] === 'contributors') {
                            if ($call === 'LIST /repos/{owner}/{repo}/contributors') {
                                $matched = true;
                                if (array_key_exists(Router\List\Repos::class, $this->router) === false) {
                                    $this->router[Router\List\Repos::class] = new Router\List\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\List\Repos::class]->ListContributorsListing($params);
                            }
                        } elseif ($pathChunks[4] === 'deployments') {
                            if ($call === 'LIST /repos/{owner}/{repo}/deployments') {
                                $matched = true;
                                if (array_key_exists(Router\List\Repos::class, $this->router) === false) {
                                    $this->router[Router\List\Repos::class] = new Router\List\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\List\Repos::class]->ListDeploymentsListing($params);
                            }
                        } elseif ($pathChunks[4] === 'events') {
                            if ($call === 'LIST /repos/{owner}/{repo}/events') {
                                $matched = true;
                                if (array_key_exists(Router\List\Activity::class, $this->router) === false) {
                                    $this->router[Router\List\Activity::class] = new Router\List\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\List\Activity::class]->ListRepoEventsListing($params);
                            }
                        } elseif ($pathChunks[4] === 'forks') {
                            if ($call === 'LIST /repos/{owner}/{repo}/forks') {
                                $matched = true;
                                if (array_key_exists(Router\List\Repos::class, $this->router) === false) {
                                    $this->router[Router\List\Repos::class] = new Router\List\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\List\Repos::class]->ListForksListing($params);
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($call === 'LIST /repos/{owner}/{repo}/hooks') {
                                $matched = true;
                                if (array_key_exists(Router\List\Repos::class, $this->router) === false) {
                                    $this->router[Router\List\Repos::class] = new Router\List\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\List\Repos::class]->ListWebhooksListing($params);
                            }
                        } elseif ($pathChunks[4] === 'invitations') {
                            if ($call === 'LIST /repos/{owner}/{repo}/invitations') {
                                $matched = true;
                                if (array_key_exists(Router\List\Repos::class, $this->router) === false) {
                                    $this->router[Router\List\Repos::class] = new Router\List\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\List\Repos::class]->ListInvitationsListing($params);
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($call === 'LIST /repos/{owner}/{repo}/issues') {
                                $matched = true;
                                if (array_key_exists(Router\List\Issues::class, $this->router) === false) {
                                    $this->router[Router\List\Issues::class] = new Router\List\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\List\Issues::class]->ListForRepoListing($params);
                            }
                        } elseif ($pathChunks[4] === 'keys') {
                            if ($call === 'LIST /repos/{owner}/{repo}/keys') {
                                $matched = true;
                                if (array_key_exists(Router\List\Repos::class, $this->router) === false) {
                                    $this->router[Router\List\Repos::class] = new Router\List\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\List\Repos::class]->ListDeployKeysListing($params);
                            }
                        } elseif ($pathChunks[4] === 'labels') {
                            if ($call === 'LIST /repos/{owner}/{repo}/labels') {
                                $matched = true;
                                if (array_key_exists(Router\List\Issues::class, $this->router) === false) {
                                    $this->router[Router\List\Issues::class] = new Router\List\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\List\Issues::class]->ListLabelsForRepoListing($params);
                            }
                        } elseif ($pathChunks[4] === 'milestones') {
                            if ($call === 'LIST /repos/{owner}/{repo}/milestones') {
                                $matched = true;
                                if (array_key_exists(Router\List\Issues::class, $this->router) === false) {
                                    $this->router[Router\List\Issues::class] = new Router\List\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\List\Issues::class]->ListMilestonesListing($params);
                            }
                        } elseif ($pathChunks[4] === 'notifications') {
                            if ($call === 'LIST /repos/{owner}/{repo}/notifications') {
                                $matched = true;
                                if (array_key_exists(Router\List\Activity::class, $this->router) === false) {
                                    $this->router[Router\List\Activity::class] = new Router\List\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\List\Activity::class]->ListRepoNotificationsForAuthenticatedUserListing($params);
                            }
                        } elseif ($pathChunks[4] === 'projects') {
                            if ($call === 'LIST /repos/{owner}/{repo}/projects') {
                                $matched = true;
                                if (array_key_exists(Router\List\Projects::class, $this->router) === false) {
                                    $this->router[Router\List\Projects::class] = new Router\List\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\List\Projects::class]->ListForRepoListing($params);
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($call === 'LIST /repos/{owner}/{repo}/pulls') {
                                $matched = true;
                                if (array_key_exists(Router\List\Pulls::class, $this->router) === false) {
                                    $this->router[Router\List\Pulls::class] = new Router\List\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\List\Pulls::class]->ListListing($params);
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($call === 'LIST /repos/{owner}/{repo}/releases') {
                                $matched = true;
                                if (array_key_exists(Router\List\Repos::class, $this->router) === false) {
                                    $this->router[Router\List\Repos::class] = new Router\List\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\List\Repos::class]->ListReleasesListing($params);
                            }
                        } elseif ($pathChunks[4] === 'rulesets') {
                            if ($call === 'LIST /repos/{owner}/{repo}/rulesets') {
                                $matched = true;
                                if (array_key_exists(Router\List\Repos::class, $this->router) === false) {
                                    $this->router[Router\List\Repos::class] = new Router\List\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\List\Repos::class]->GetRepoRulesetsListing($params);
                            }
                        } elseif ($pathChunks[4] === 'subscribers') {
                            if ($call === 'LIST /repos/{owner}/{repo}/subscribers') {
                                $matched = true;
                                if (array_key_exists(Router\List\Activity::class, $this->router) === false) {
                                    $this->router[Router\List\Activity::class] = new Router\List\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\List\Activity::class]->ListWatchersForRepoListing($params);
                            }
                        } elseif ($pathChunks[4] === 'tags') {
                            if ($call === 'LIST /repos/{owner}/{repo}/tags') {
                                $matched = true;
                                if (array_key_exists(Router\List\Repos::class, $this->router) === false) {
                                    $this->router[Router\List\Repos::class] = new Router\List\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\List\Repos::class]->ListTagsListing($params);
                            }
                        } elseif ($pathChunks[4] === 'teams') {
                            if ($call === 'LIST /repos/{owner}/{repo}/teams') {
                                $matched = true;
                                if (array_key_exists(Router\List\Repos::class, $this->router) === false) {
                                    $this->router[Router\List\Repos::class] = new Router\List\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\List\Repos::class]->ListTeamsListing($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'migrations') {
                    if ($pathChunks[3] === '{migration_id}') {
                        if ($pathChunks[4] === 'repositories') {
                            if ($call === 'LIST /user/migrations/{migration_id}/repositories') {
                                $matched = true;
                                if (array_key_exists(Router\List\Migrations::class, $this->router) === false) {
                                    $this->router[Router\List\Migrations::class] = new Router\List\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\List\Migrations::class]->ListReposForAuthenticatedUserListing($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($pathChunks[2] === '{username}') {
                    if ($pathChunks[3] === 'events') {
                        if ($pathChunks[4] === 'public') {
                            if ($call === 'LIST /users/{username}/events/public') {
                                $matched = true;
                                if (array_key_exists(Router\List\Activity::class, $this->router) === false) {
                                    $this->router[Router\List\Activity::class] = new Router\List\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\List\Activity::class]->ListPublicEventsForUserListing($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'received_events') {
                        if ($pathChunks[4] === 'public') {
                            if ($call === 'LIST /users/{username}/received_events/public') {
                                $matched = true;
                                if (array_key_exists(Router\List\Activity::class, $this->router) === false) {
                                    $this->router[Router\List\Activity::class] = new Router\List\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\List\Activity::class]->ListReceivedPublicEventsForUserListing($params);
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
