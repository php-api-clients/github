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

final class Three
{
    private array $router = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return (iterable<Schema\IntegrationInstallationRequest>|array{code: int})|iterable<Schema\Installation>|(iterable<Schema\BaseGist>|iterable<Schema\MarketplaceListingPlan>|(iterable<Schema\SimpleUser>|(iterable<Schema\Email>|(iterable<Schema\GpgKey>|(iterable<Schema\Issue>|(iterable<Schema\Key>|(iterable<Schema\UserMarketplacePurchase>|(iterable<Schema\Migration>|(iterable<Schema\OrganizationSimple>|(iterable<Schema\Package>|(iterable<Schema\Repository>|(iterable<Schema\RepositoryInvitation>|(iterable<Schema\SocialAccount>|(iterable<Schema\SshSigningKey>|(iterable<Schema\MinimalRepository>|(iterable<Schema\TeamFull> */
    public function call(string $call, array $params, array $pathChunks): iterable
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'installation-requests') {
                    if ($call === 'LIST /app/installation-requests') {
                        $matched = true;
                        if (array_key_exists(Router\List\Apps::class, $this->router) === false) {
                            $this->router[Router\List\Apps::class] = new Router\List\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Apps::class]->ListInstallationRequestsForAuthenticatedAppListing($params);
                    }
                } elseif ($pathChunks[2] === 'installations') {
                    if ($call === 'LIST /app/installations') {
                        $matched = true;
                        if (array_key_exists(Router\List\Apps::class, $this->router) === false) {
                            $this->router[Router\List\Apps::class] = new Router\List\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Apps::class]->ListInstallationsListing($params);
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === 'public') {
                    if ($call === 'LIST /gists/public') {
                        $matched = true;
                        if (array_key_exists(Router\List\Gists::class, $this->router) === false) {
                            $this->router[Router\List\Gists::class] = new Router\List\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Gists::class]->ListPublicListing($params);
                    }
                } elseif ($pathChunks[2] === 'starred') {
                    if ($call === 'LIST /gists/starred') {
                        $matched = true;
                        if (array_key_exists(Router\List\Gists::class, $this->router) === false) {
                            $this->router[Router\List\Gists::class] = new Router\List\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Gists::class]->ListStarredListing($params);
                    }
                }
            } elseif ($pathChunks[1] === 'marketplace_listing') {
                if ($pathChunks[2] === 'plans') {
                    if ($call === 'LIST /marketplace_listing/plans') {
                        $matched = true;
                        if (array_key_exists(Router\List\Apps::class, $this->router) === false) {
                            $this->router[Router\List\Apps::class] = new Router\List\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Apps::class]->ListPlansListing($params);
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'blocks') {
                    if ($call === 'LIST /user/blocks') {
                        $matched = true;
                        if (array_key_exists(Router\List\Users::class, $this->router) === false) {
                            $this->router[Router\List\Users::class] = new Router\List\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Users::class]->ListBlockedByAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'emails') {
                    if ($call === 'LIST /user/emails') {
                        $matched = true;
                        if (array_key_exists(Router\List\Users::class, $this->router) === false) {
                            $this->router[Router\List\Users::class] = new Router\List\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Users::class]->ListEmailsForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'followers') {
                    if ($call === 'LIST /user/followers') {
                        $matched = true;
                        if (array_key_exists(Router\List\Users::class, $this->router) === false) {
                            $this->router[Router\List\Users::class] = new Router\List\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Users::class]->ListFollowersForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'following') {
                    if ($call === 'LIST /user/following') {
                        $matched = true;
                        if (array_key_exists(Router\List\Users::class, $this->router) === false) {
                            $this->router[Router\List\Users::class] = new Router\List\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Users::class]->ListFollowedByAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'gpg_keys') {
                    if ($call === 'LIST /user/gpg_keys') {
                        $matched = true;
                        if (array_key_exists(Router\List\Users::class, $this->router) === false) {
                            $this->router[Router\List\Users::class] = new Router\List\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Users::class]->ListGpgKeysForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'issues') {
                    if ($call === 'LIST /user/issues') {
                        $matched = true;
                        if (array_key_exists(Router\List\Issues::class, $this->router) === false) {
                            $this->router[Router\List\Issues::class] = new Router\List\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Issues::class]->ListForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'keys') {
                    if ($call === 'LIST /user/keys') {
                        $matched = true;
                        if (array_key_exists(Router\List\Users::class, $this->router) === false) {
                            $this->router[Router\List\Users::class] = new Router\List\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Users::class]->ListPublicSshKeysForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'marketplace_purchases') {
                    if ($call === 'LIST /user/marketplace_purchases') {
                        $matched = true;
                        if (array_key_exists(Router\List\Apps::class, $this->router) === false) {
                            $this->router[Router\List\Apps::class] = new Router\List\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Apps::class]->ListSubscriptionsForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'migrations') {
                    if ($call === 'LIST /user/migrations') {
                        $matched = true;
                        if (array_key_exists(Router\List\Migrations::class, $this->router) === false) {
                            $this->router[Router\List\Migrations::class] = new Router\List\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Migrations::class]->ListForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'orgs') {
                    if ($call === 'LIST /user/orgs') {
                        $matched = true;
                        if (array_key_exists(Router\List\Orgs::class, $this->router) === false) {
                            $this->router[Router\List\Orgs::class] = new Router\List\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Orgs::class]->ListForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'packages') {
                    if ($call === 'LIST /user/packages') {
                        $matched = true;
                        if (array_key_exists(Router\List\Packages::class, $this->router) === false) {
                            $this->router[Router\List\Packages::class] = new Router\List\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Packages::class]->ListPackagesForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'public_emails') {
                    if ($call === 'LIST /user/public_emails') {
                        $matched = true;
                        if (array_key_exists(Router\List\Users::class, $this->router) === false) {
                            $this->router[Router\List\Users::class] = new Router\List\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Users::class]->ListPublicEmailsForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'repos') {
                    if ($call === 'LIST /user/repos') {
                        $matched = true;
                        if (array_key_exists(Router\List\Repos::class, $this->router) === false) {
                            $this->router[Router\List\Repos::class] = new Router\List\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Repos::class]->ListForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'repository_invitations') {
                    if ($call === 'LIST /user/repository_invitations') {
                        $matched = true;
                        if (array_key_exists(Router\List\Repos::class, $this->router) === false) {
                            $this->router[Router\List\Repos::class] = new Router\List\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Repos::class]->ListInvitationsForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'social_accounts') {
                    if ($call === 'LIST /user/social_accounts') {
                        $matched = true;
                        if (array_key_exists(Router\List\Users::class, $this->router) === false) {
                            $this->router[Router\List\Users::class] = new Router\List\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Users::class]->ListSocialAccountsForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'ssh_signing_keys') {
                    if ($call === 'LIST /user/ssh_signing_keys') {
                        $matched = true;
                        if (array_key_exists(Router\List\Users::class, $this->router) === false) {
                            $this->router[Router\List\Users::class] = new Router\List\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Users::class]->ListSshSigningKeysForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'starred') {
                    if ($call === 'LIST /user/starred') {
                        $matched = true;
                        if (array_key_exists(Router\List\Activity::class, $this->router) === false) {
                            $this->router[Router\List\Activity::class] = new Router\List\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Activity::class]->ListReposStarredByAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'subscriptions') {
                    if ($call === 'LIST /user/subscriptions') {
                        $matched = true;
                        if (array_key_exists(Router\List\Activity::class, $this->router) === false) {
                            $this->router[Router\List\Activity::class] = new Router\List\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Activity::class]->ListWatchedReposForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'teams') {
                    if ($call === 'LIST /user/teams') {
                        $matched = true;
                        if (array_key_exists(Router\List\Teams::class, $this->router) === false) {
                            $this->router[Router\List\Teams::class] = new Router\List\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Teams::class]->ListForAuthenticatedUserListing($params);
                    }
                }
            }
        }

        if ($matched === false) {
            throw new InvalidArgumentException();
        }
    }
}
