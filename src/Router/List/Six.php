<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\List;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
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

    /** @return iterable<Schema\MarketplacePurchase>|iterable<Schema\Team>|iterable<Schema\MinimalRepository>|iterable<Schema\TeamDiscussion>|iterable<Schema\OrganizationInvitation>|iterable<Schema\SimpleUser>|iterable<Schema\TeamProject>|(iterable<Schema\CodeScanningAlertItems>|array{code: int})|iterable<Schema\CodeScanningAnalysis>|(iterable<Schema\DependabotAlert>|iterable<Schema\IssueComment>|iterable<Schema\IssueEvent>|iterable<Schema\PageBuild>|iterable<Schema\PullRequestReviewComment>|(iterable<Schema\SecretScanningAlert>|iterable<Schema\TeamDiscussionComment>|iterable<Schema\Reaction>|iterable<Schema\PackageVersion>|iterable<Schema\Event> */
    public function call(string $call, array $params, array $pathChunks): iterable
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'marketplace_listing') {
                if ($pathChunks[2] === 'stubbed') {
                    if ($pathChunks[3] === 'plans') {
                        if ($pathChunks[4] === '{plan_id}') {
                            if ($pathChunks[5] === 'accounts') {
                                if ($call === 'LIST /marketplace_listing/stubbed/plans/{plan_id}/accounts') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\Apps::class, $this->router) === false) {
                                        $this->router[Router\List\Apps::class] = new Router\List\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\Apps::class]->ListAccountsForPlanStubbedListing($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'invitations') {
                        if ($pathChunks[4] === '{invitation_id}') {
                            if ($pathChunks[5] === 'teams') {
                                if ($call === 'LIST /orgs/{org}/invitations/{invitation_id}/teams') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\Orgs::class, $this->router) === false) {
                                        $this->router[Router\List\Orgs::class] = new Router\List\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\Orgs::class]->ListInvitationTeamsListing($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'migrations') {
                        if ($pathChunks[4] === '{migration_id}') {
                            if ($pathChunks[5] === 'repositories') {
                                if ($call === 'LIST /orgs/{org}/migrations/{migration_id}/repositories') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\Migrations::class, $this->router) === false) {
                                        $this->router[Router\List\Migrations::class] = new Router\List\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\Migrations::class]->ListReposForOrgListing($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'personal-access-token-requests') {
                        if ($pathChunks[4] === '{pat_request_id}') {
                            if ($pathChunks[5] === 'repositories') {
                                if ($call === 'LIST /orgs/{org}/personal-access-token-requests/{pat_request_id}/repositories') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\Orgs::class, $this->router) === false) {
                                        $this->router[Router\List\Orgs::class] = new Router\List\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\Orgs::class]->ListPatGrantRequestRepositoriesListing($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'personal-access-tokens') {
                        if ($pathChunks[4] === '{pat_id}') {
                            if ($pathChunks[5] === 'repositories') {
                                if ($call === 'LIST /orgs/{org}/personal-access-tokens/{pat_id}/repositories') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\Orgs::class, $this->router) === false) {
                                        $this->router[Router\List\Orgs::class] = new Router\List\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\Orgs::class]->ListPatGrantRepositoriesListing($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($pathChunks[5] === 'discussions') {
                                if ($call === 'LIST /orgs/{org}/teams/{team_slug}/discussions') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\Teams::class, $this->router) === false) {
                                        $this->router[Router\List\Teams::class] = new Router\List\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\Teams::class]->ListDiscussionsInOrgListing($params);
                                }
                            } elseif ($pathChunks[5] === 'invitations') {
                                if ($call === 'LIST /orgs/{org}/teams/{team_slug}/invitations') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\Teams::class, $this->router) === false) {
                                        $this->router[Router\List\Teams::class] = new Router\List\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\Teams::class]->ListPendingInvitationsInOrgListing($params);
                                }
                            } elseif ($pathChunks[5] === 'members') {
                                if ($call === 'LIST /orgs/{org}/teams/{team_slug}/members') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\Teams::class, $this->router) === false) {
                                        $this->router[Router\List\Teams::class] = new Router\List\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\Teams::class]->ListMembersInOrgListing($params);
                                }
                            } elseif ($pathChunks[5] === 'projects') {
                                if ($call === 'LIST /orgs/{org}/teams/{team_slug}/projects') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\Teams::class, $this->router) === false) {
                                        $this->router[Router\List\Teams::class] = new Router\List\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\Teams::class]->ListProjectsInOrgListing($params);
                                }
                            } elseif ($pathChunks[5] === 'repos') {
                                if ($call === 'LIST /orgs/{org}/teams/{team_slug}/repos') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\Teams::class, $this->router) === false) {
                                        $this->router[Router\List\Teams::class] = new Router\List\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\Teams::class]->ListReposInOrgListing($params);
                                }
                            } elseif ($pathChunks[5] === 'teams') {
                                if ($call === 'LIST /orgs/{org}/teams/{team_slug}/teams') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\Teams::class, $this->router) === false) {
                                        $this->router[Router\List\Teams::class] = new Router\List\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\Teams::class]->ListChildInOrgListing($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'code-scanning') {
                            if ($pathChunks[5] === 'alerts') {
                                if ($call === 'LIST /repos/{owner}/{repo}/code-scanning/alerts') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\CodeScanning::class, $this->router) === false) {
                                        $this->router[Router\List\CodeScanning::class] = new Router\List\CodeScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\CodeScanning::class]->ListAlertsForRepoListing($params);
                                }
                            } elseif ($pathChunks[5] === 'analyses') {
                                if ($call === 'LIST /repos/{owner}/{repo}/code-scanning/analyses') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\CodeScanning::class, $this->router) === false) {
                                        $this->router[Router\List\CodeScanning::class] = new Router\List\CodeScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\CodeScanning::class]->ListRecentAnalysesListing($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'dependabot') {
                            if ($pathChunks[5] === 'alerts') {
                                if ($call === 'LIST /repos/{owner}/{repo}/dependabot/alerts') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\Dependabot::class, $this->router) === false) {
                                        $this->router[Router\List\Dependabot::class] = new Router\List\Dependabot($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\Dependabot::class]->ListAlertsForRepoListing($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === 'comments') {
                                if ($call === 'LIST /repos/{owner}/{repo}/issues/comments') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\Issues::class, $this->router) === false) {
                                        $this->router[Router\List\Issues::class] = new Router\List\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\Issues::class]->ListCommentsForRepoListing($params);
                                }
                            } elseif ($pathChunks[5] === 'events') {
                                if ($call === 'LIST /repos/{owner}/{repo}/issues/events') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\Issues::class, $this->router) === false) {
                                        $this->router[Router\List\Issues::class] = new Router\List\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\Issues::class]->ListEventsForRepoListing($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'pages') {
                            if ($pathChunks[5] === 'builds') {
                                if ($call === 'LIST /repos/{owner}/{repo}/pages/builds') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\Repos::class, $this->router) === false) {
                                        $this->router[Router\List\Repos::class] = new Router\List\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\Repos::class]->ListPagesBuildsListing($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === 'comments') {
                                if ($call === 'LIST /repos/{owner}/{repo}/pulls/comments') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\Pulls::class, $this->router) === false) {
                                        $this->router[Router\List\Pulls::class] = new Router\List\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\Pulls::class]->ListReviewCommentsForRepoListing($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'secret-scanning') {
                            if ($pathChunks[5] === 'alerts') {
                                if ($call === 'LIST /repos/{owner}/{repo}/secret-scanning/alerts') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\SecretScanning::class, $this->router) === false) {
                                        $this->router[Router\List\SecretScanning::class] = new Router\List\SecretScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\SecretScanning::class]->ListAlertsForRepoListing($params);
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
                                if ($call === 'LIST /teams/{team_id}/discussions/{discussion_number}/comments') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\Teams::class, $this->router) === false) {
                                        $this->router[Router\List\Teams::class] = new Router\List\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\Teams::class]->ListDiscussionCommentsLegacyListing($params);
                                }
                            } elseif ($pathChunks[5] === 'reactions') {
                                if ($call === 'LIST /teams/{team_id}/discussions/{discussion_number}/reactions') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\Reactions::class, $this->router) === false) {
                                        $this->router[Router\List\Reactions::class] = new Router\List\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\Reactions::class]->ListForTeamDiscussionLegacyListing($params);
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
                                if ($call === 'LIST /user/packages/{package_type}/{package_name}/versions') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\Packages::class, $this->router) === false) {
                                        $this->router[Router\List\Packages::class] = new Router\List\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\Packages::class]->GetAllPackageVersionsForPackageOwnedByAuthenticatedUserListing($params);
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
                                if ($call === 'LIST /users/{username}/events/orgs/{org}') {
                                    $matched = true;
                                    if (array_key_exists(Router\List\Activity::class, $this->router) === false) {
                                        $this->router[Router\List\Activity::class] = new Router\List\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\List\Activity::class]->ListOrgEventsForAuthenticatedUserListing($params);
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
