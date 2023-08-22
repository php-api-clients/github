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

final class Four
{
    private array $router = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return (iterable<Schema\GistComment>|array{code: int})|(iterable<Schema\GistCommit>|(iterable<Schema\GistSimple>|iterable<Schema\MarketplaceListingPlan>|iterable<Schema\SimpleUser>|iterable<Schema\Event>|iterable<Schema\OrganizationInvitation>|iterable<Schema\OrgHook>|iterable<Schema\Issue>|iterable<Schema\Migration>|(iterable<Schema\Package>|iterable<Schema\OrganizationProgrammaticAccessGrantRequest>|iterable<Schema\OrganizationProgrammaticAccessGrant>|iterable<Schema\Project>|iterable<Schema\MinimalRepository>|iterable<Schema\RepositoryRuleset>|iterable<Schema\Team>|(iterable<Schema\SimpleUser>|(iterable<Schema\ProjectColumn>|iterable<Schema\TeamDiscussion>|iterable<Schema\TeamProject>|(iterable<Schema\UserMarketplacePurchase>|(iterable<Schema\OrgMembership>|iterable<Schema\BaseGist>|iterable<Schema\GpgKey>|iterable<Schema\KeySimple>|iterable<Schema\OrganizationSimple>|iterable<Schema\SocialAccount>|iterable<Schema\SshSigningKey> */
    public function call(string $call, array $params, array $pathChunks): iterable
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($pathChunks[3] === 'comments') {
                        if ($call === 'LIST /gists/{gist_id}/comments') {
                            $matched = true;
                            if (array_key_exists(Router\List\Gists::class, $this->router) === false) {
                                $this->router[Router\List\Gists::class] = new Router\List\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Gists::class]->ListCommentsListing($params);
                        }
                    } elseif ($pathChunks[3] === 'commits') {
                        if ($call === 'LIST /gists/{gist_id}/commits') {
                            $matched = true;
                            if (array_key_exists(Router\List\Gists::class, $this->router) === false) {
                                $this->router[Router\List\Gists::class] = new Router\List\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Gists::class]->ListCommitsListing($params);
                        }
                    } elseif ($pathChunks[3] === 'forks') {
                        if ($call === 'LIST /gists/{gist_id}/forks') {
                            $matched = true;
                            if (array_key_exists(Router\List\Gists::class, $this->router) === false) {
                                $this->router[Router\List\Gists::class] = new Router\List\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Gists::class]->ListForksListing($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'marketplace_listing') {
                if ($pathChunks[2] === 'stubbed') {
                    if ($pathChunks[3] === 'plans') {
                        if ($call === 'LIST /marketplace_listing/stubbed/plans') {
                            $matched = true;
                            if (array_key_exists(Router\List\Apps::class, $this->router) === false) {
                                $this->router[Router\List\Apps::class] = new Router\List\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Apps::class]->ListPlansStubbedListing($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'blocks') {
                        if ($call === 'LIST /orgs/{org}/blocks') {
                            $matched = true;
                            if (array_key_exists(Router\List\Orgs::class, $this->router) === false) {
                                $this->router[Router\List\Orgs::class] = new Router\List\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Orgs::class]->ListBlockedUsersListing($params);
                        }
                    } elseif ($pathChunks[3] === 'events') {
                        if ($call === 'LIST /orgs/{org}/events') {
                            $matched = true;
                            if (array_key_exists(Router\List\Activity::class, $this->router) === false) {
                                $this->router[Router\List\Activity::class] = new Router\List\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Activity::class]->ListPublicOrgEventsListing($params);
                        }
                    } elseif ($pathChunks[3] === 'failed_invitations') {
                        if ($call === 'LIST /orgs/{org}/failed_invitations') {
                            $matched = true;
                            if (array_key_exists(Router\List\Orgs::class, $this->router) === false) {
                                $this->router[Router\List\Orgs::class] = new Router\List\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Orgs::class]->ListFailedInvitationsListing($params);
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($call === 'LIST /orgs/{org}/hooks') {
                            $matched = true;
                            if (array_key_exists(Router\List\Orgs::class, $this->router) === false) {
                                $this->router[Router\List\Orgs::class] = new Router\List\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Orgs::class]->ListWebhooksListing($params);
                        }
                    } elseif ($pathChunks[3] === 'invitations') {
                        if ($call === 'LIST /orgs/{org}/invitations') {
                            $matched = true;
                            if (array_key_exists(Router\List\Orgs::class, $this->router) === false) {
                                $this->router[Router\List\Orgs::class] = new Router\List\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Orgs::class]->ListPendingInvitationsListing($params);
                        }
                    } elseif ($pathChunks[3] === 'issues') {
                        if ($call === 'LIST /orgs/{org}/issues') {
                            $matched = true;
                            if (array_key_exists(Router\List\Issues::class, $this->router) === false) {
                                $this->router[Router\List\Issues::class] = new Router\List\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Issues::class]->ListForOrgListing($params);
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($call === 'LIST /orgs/{org}/members') {
                            $matched = true;
                            if (array_key_exists(Router\List\Orgs::class, $this->router) === false) {
                                $this->router[Router\List\Orgs::class] = new Router\List\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Orgs::class]->ListMembersListing($params);
                        }
                    } elseif ($pathChunks[3] === 'migrations') {
                        if ($call === 'LIST /orgs/{org}/migrations') {
                            $matched = true;
                            if (array_key_exists(Router\List\Migrations::class, $this->router) === false) {
                                $this->router[Router\List\Migrations::class] = new Router\List\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Migrations::class]->ListForOrgListing($params);
                        }
                    } elseif ($pathChunks[3] === 'outside_collaborators') {
                        if ($call === 'LIST /orgs/{org}/outside_collaborators') {
                            $matched = true;
                            if (array_key_exists(Router\List\Orgs::class, $this->router) === false) {
                                $this->router[Router\List\Orgs::class] = new Router\List\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Orgs::class]->ListOutsideCollaboratorsListing($params);
                        }
                    } elseif ($pathChunks[3] === 'packages') {
                        if ($call === 'LIST /orgs/{org}/packages') {
                            $matched = true;
                            if (array_key_exists(Router\List\Packages::class, $this->router) === false) {
                                $this->router[Router\List\Packages::class] = new Router\List\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Packages::class]->ListPackagesForOrganizationListing($params);
                        }
                    } elseif ($pathChunks[3] === 'personal-access-token-requests') {
                        if ($call === 'LIST /orgs/{org}/personal-access-token-requests') {
                            $matched = true;
                            if (array_key_exists(Router\List\Orgs::class, $this->router) === false) {
                                $this->router[Router\List\Orgs::class] = new Router\List\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Orgs::class]->ListPatGrantRequestsListing($params);
                        }
                    } elseif ($pathChunks[3] === 'personal-access-tokens') {
                        if ($call === 'LIST /orgs/{org}/personal-access-tokens') {
                            $matched = true;
                            if (array_key_exists(Router\List\Orgs::class, $this->router) === false) {
                                $this->router[Router\List\Orgs::class] = new Router\List\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Orgs::class]->ListPatGrantsListing($params);
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($call === 'LIST /orgs/{org}/projects') {
                            $matched = true;
                            if (array_key_exists(Router\List\Projects::class, $this->router) === false) {
                                $this->router[Router\List\Projects::class] = new Router\List\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Projects::class]->ListForOrgListing($params);
                        }
                    } elseif ($pathChunks[3] === 'public_members') {
                        if ($call === 'LIST /orgs/{org}/public_members') {
                            $matched = true;
                            if (array_key_exists(Router\List\Orgs::class, $this->router) === false) {
                                $this->router[Router\List\Orgs::class] = new Router\List\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Orgs::class]->ListPublicMembersListing($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'LIST /orgs/{org}/repos') {
                            $matched = true;
                            if (array_key_exists(Router\List\Repos::class, $this->router) === false) {
                                $this->router[Router\List\Repos::class] = new Router\List\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Repos::class]->ListForOrgListing($params);
                        }
                    } elseif ($pathChunks[3] === 'rulesets') {
                        if ($call === 'LIST /orgs/{org}/rulesets') {
                            $matched = true;
                            if (array_key_exists(Router\List\Repos::class, $this->router) === false) {
                                $this->router[Router\List\Repos::class] = new Router\List\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Repos::class]->GetOrgRulesetsListing($params);
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($call === 'LIST /orgs/{org}/teams') {
                            $matched = true;
                            if (array_key_exists(Router\List\Teams::class, $this->router) === false) {
                                $this->router[Router\List\Teams::class] = new Router\List\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Teams::class]->ListListing($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === '{project_id}') {
                    if ($pathChunks[3] === 'collaborators') {
                        if ($call === 'LIST /projects/{project_id}/collaborators') {
                            $matched = true;
                            if (array_key_exists(Router\List\Projects::class, $this->router) === false) {
                                $this->router[Router\List\Projects::class] = new Router\List\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Projects::class]->ListCollaboratorsListing($params);
                        }
                    } elseif ($pathChunks[3] === 'columns') {
                        if ($call === 'LIST /projects/{project_id}/columns') {
                            $matched = true;
                            if (array_key_exists(Router\List\Projects::class, $this->router) === false) {
                                $this->router[Router\List\Projects::class] = new Router\List\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Projects::class]->ListColumnsListing($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'discussions') {
                        if ($call === 'LIST /teams/{team_id}/discussions') {
                            $matched = true;
                            if (array_key_exists(Router\List\Teams::class, $this->router) === false) {
                                $this->router[Router\List\Teams::class] = new Router\List\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Teams::class]->ListDiscussionsLegacyListing($params);
                        }
                    } elseif ($pathChunks[3] === 'invitations') {
                        if ($call === 'LIST /teams/{team_id}/invitations') {
                            $matched = true;
                            if (array_key_exists(Router\List\Teams::class, $this->router) === false) {
                                $this->router[Router\List\Teams::class] = new Router\List\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Teams::class]->ListPendingInvitationsLegacyListing($params);
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($call === 'LIST /teams/{team_id}/members') {
                            $matched = true;
                            if (array_key_exists(Router\List\Teams::class, $this->router) === false) {
                                $this->router[Router\List\Teams::class] = new Router\List\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Teams::class]->ListMembersLegacyListing($params);
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($call === 'LIST /teams/{team_id}/projects') {
                            $matched = true;
                            if (array_key_exists(Router\List\Teams::class, $this->router) === false) {
                                $this->router[Router\List\Teams::class] = new Router\List\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Teams::class]->ListProjectsLegacyListing($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'LIST /teams/{team_id}/repos') {
                            $matched = true;
                            if (array_key_exists(Router\List\Teams::class, $this->router) === false) {
                                $this->router[Router\List\Teams::class] = new Router\List\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Teams::class]->ListReposLegacyListing($params);
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($call === 'LIST /teams/{team_id}/teams') {
                            $matched = true;
                            if (array_key_exists(Router\List\Teams::class, $this->router) === false) {
                                $this->router[Router\List\Teams::class] = new Router\List\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Teams::class]->ListChildLegacyListing($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'marketplace_purchases') {
                    if ($pathChunks[3] === 'stubbed') {
                        if ($call === 'LIST /user/marketplace_purchases/stubbed') {
                            $matched = true;
                            if (array_key_exists(Router\List\Apps::class, $this->router) === false) {
                                $this->router[Router\List\Apps::class] = new Router\List\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Apps::class]->ListSubscriptionsForAuthenticatedUserStubbedListing($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'memberships') {
                    if ($pathChunks[3] === 'orgs') {
                        if ($call === 'LIST /user/memberships/orgs') {
                            $matched = true;
                            if (array_key_exists(Router\List\Orgs::class, $this->router) === false) {
                                $this->router[Router\List\Orgs::class] = new Router\List\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Orgs::class]->ListMembershipsForAuthenticatedUserListing($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($pathChunks[2] === '{username}') {
                    if ($pathChunks[3] === 'events') {
                        if ($call === 'LIST /users/{username}/events') {
                            $matched = true;
                            if (array_key_exists(Router\List\Activity::class, $this->router) === false) {
                                $this->router[Router\List\Activity::class] = new Router\List\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Activity::class]->ListEventsForAuthenticatedUserListing($params);
                        }
                    } elseif ($pathChunks[3] === 'followers') {
                        if ($call === 'LIST /users/{username}/followers') {
                            $matched = true;
                            if (array_key_exists(Router\List\Users::class, $this->router) === false) {
                                $this->router[Router\List\Users::class] = new Router\List\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Users::class]->ListFollowersForUserListing($params);
                        }
                    } elseif ($pathChunks[3] === 'following') {
                        if ($call === 'LIST /users/{username}/following') {
                            $matched = true;
                            if (array_key_exists(Router\List\Users::class, $this->router) === false) {
                                $this->router[Router\List\Users::class] = new Router\List\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Users::class]->ListFollowingForUserListing($params);
                        }
                    } elseif ($pathChunks[3] === 'gists') {
                        if ($call === 'LIST /users/{username}/gists') {
                            $matched = true;
                            if (array_key_exists(Router\List\Gists::class, $this->router) === false) {
                                $this->router[Router\List\Gists::class] = new Router\List\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Gists::class]->ListForUserListing($params);
                        }
                    } elseif ($pathChunks[3] === 'gpg_keys') {
                        if ($call === 'LIST /users/{username}/gpg_keys') {
                            $matched = true;
                            if (array_key_exists(Router\List\Users::class, $this->router) === false) {
                                $this->router[Router\List\Users::class] = new Router\List\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Users::class]->ListGpgKeysForUserListing($params);
                        }
                    } elseif ($pathChunks[3] === 'keys') {
                        if ($call === 'LIST /users/{username}/keys') {
                            $matched = true;
                            if (array_key_exists(Router\List\Users::class, $this->router) === false) {
                                $this->router[Router\List\Users::class] = new Router\List\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Users::class]->ListPublicKeysForUserListing($params);
                        }
                    } elseif ($pathChunks[3] === 'orgs') {
                        if ($call === 'LIST /users/{username}/orgs') {
                            $matched = true;
                            if (array_key_exists(Router\List\Orgs::class, $this->router) === false) {
                                $this->router[Router\List\Orgs::class] = new Router\List\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Orgs::class]->ListForUserListing($params);
                        }
                    } elseif ($pathChunks[3] === 'packages') {
                        if ($call === 'LIST /users/{username}/packages') {
                            $matched = true;
                            if (array_key_exists(Router\List\Packages::class, $this->router) === false) {
                                $this->router[Router\List\Packages::class] = new Router\List\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Packages::class]->ListPackagesForUserListing($params);
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($call === 'LIST /users/{username}/projects') {
                            $matched = true;
                            if (array_key_exists(Router\List\Projects::class, $this->router) === false) {
                                $this->router[Router\List\Projects::class] = new Router\List\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Projects::class]->ListForUserListing($params);
                        }
                    } elseif ($pathChunks[3] === 'received_events') {
                        if ($call === 'LIST /users/{username}/received_events') {
                            $matched = true;
                            if (array_key_exists(Router\List\Activity::class, $this->router) === false) {
                                $this->router[Router\List\Activity::class] = new Router\List\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Activity::class]->ListReceivedEventsForUserListing($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'LIST /users/{username}/repos') {
                            $matched = true;
                            if (array_key_exists(Router\List\Repos::class, $this->router) === false) {
                                $this->router[Router\List\Repos::class] = new Router\List\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Repos::class]->ListForUserListing($params);
                        }
                    } elseif ($pathChunks[3] === 'social_accounts') {
                        if ($call === 'LIST /users/{username}/social_accounts') {
                            $matched = true;
                            if (array_key_exists(Router\List\Users::class, $this->router) === false) {
                                $this->router[Router\List\Users::class] = new Router\List\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Users::class]->ListSocialAccountsForUserListing($params);
                        }
                    } elseif ($pathChunks[3] === 'ssh_signing_keys') {
                        if ($call === 'LIST /users/{username}/ssh_signing_keys') {
                            $matched = true;
                            if (array_key_exists(Router\List\Users::class, $this->router) === false) {
                                $this->router[Router\List\Users::class] = new Router\List\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Users::class]->ListSshSigningKeysForUserListing($params);
                        }
                    } elseif ($pathChunks[3] === 'subscriptions') {
                        if ($call === 'LIST /users/{username}/subscriptions') {
                            $matched = true;
                            if (array_key_exists(Router\List\Activity::class, $this->router) === false) {
                                $this->router[Router\List\Activity::class] = new Router\List\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\List\Activity::class]->ListReposWatchedByUserListing($params);
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
