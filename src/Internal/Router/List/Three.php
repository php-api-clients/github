<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\List;

use ApiClients\Client\GitHub\Internal\Routers;
use ApiClients\Client\GitHub\Schema;
use InvalidArgumentException;

final class Three
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return iterable<Schema\IntegrationInstallationRequest>|array{code:int}|iterable<Schema\Installation>|iterable<Schema\BaseGist>|iterable<Schema\MarketplaceListingPlan>|iterable<Schema\SimpleUser>|iterable<Schema\Email>|iterable<Schema\GpgKey>|iterable<Schema\Issue>|iterable<Schema\Key>|iterable<Schema\UserMarketplacePurchase>|iterable<Schema\Migration>|iterable<Schema\OrganizationSimple>|iterable<Schema\Package>|iterable<Schema\Repository>|iterable<Schema\RepositoryInvitation>|iterable<Schema\SocialAccount>|iterable<Schema\SshSigningKey>|iterable<Schema\MinimalRepository>|iterable<Schema\TeamFull> */
    public function call(string $call, array $params, array $pathChunks): iterable
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'installation-requests') {
                    if ($call === 'LIST /app/installation-requests') {
                        return $this->routers->internal🔀Router🔀List🔀Apps()->listInstallationRequestsForAuthenticatedAppListing($params);
                    }
                } elseif ($pathChunks[2] === 'installations') {
                    if ($call === 'LIST /app/installations') {
                        return $this->routers->internal🔀Router🔀List🔀Apps()->listInstallationsListing($params);
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === 'public') {
                    if ($call === 'LIST /gists/public') {
                        return $this->routers->internal🔀Router🔀List🔀Gists()->listPublicListing($params);
                    }
                } elseif ($pathChunks[2] === 'starred') {
                    if ($call === 'LIST /gists/starred') {
                        return $this->routers->internal🔀Router🔀List🔀Gists()->listStarredListing($params);
                    }
                }
            } elseif ($pathChunks[1] === 'marketplace_listing') {
                if ($pathChunks[2] === 'plans') {
                    if ($call === 'LIST /marketplace_listing/plans') {
                        return $this->routers->internal🔀Router🔀List🔀Apps()->listPlansListing($params);
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'blocks') {
                    if ($call === 'LIST /user/blocks') {
                        return $this->routers->internal🔀Router🔀List🔀Users()->listBlockedByAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'emails') {
                    if ($call === 'LIST /user/emails') {
                        return $this->routers->internal🔀Router🔀List🔀Users()->listEmailsForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'followers') {
                    if ($call === 'LIST /user/followers') {
                        return $this->routers->internal🔀Router🔀List🔀Users()->listFollowersForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'following') {
                    if ($call === 'LIST /user/following') {
                        return $this->routers->internal🔀Router🔀List🔀Users()->listFollowedByAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'gpg_keys') {
                    if ($call === 'LIST /user/gpg_keys') {
                        return $this->routers->internal🔀Router🔀List🔀Users()->listGpgKeysForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'issues') {
                    if ($call === 'LIST /user/issues') {
                        return $this->routers->internal🔀Router🔀List🔀Issues()->listForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'keys') {
                    if ($call === 'LIST /user/keys') {
                        return $this->routers->internal🔀Router🔀List🔀Users()->listPublicSshKeysForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'marketplace_purchases') {
                    if ($call === 'LIST /user/marketplace_purchases') {
                        return $this->routers->internal🔀Router🔀List🔀Apps()->listSubscriptionsForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'migrations') {
                    if ($call === 'LIST /user/migrations') {
                        return $this->routers->internal🔀Router🔀List🔀Migrations()->listForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'orgs') {
                    if ($call === 'LIST /user/orgs') {
                        return $this->routers->internal🔀Router🔀List🔀Orgs()->listForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'packages') {
                    if ($call === 'LIST /user/packages') {
                        return $this->routers->internal🔀Router🔀List🔀Packages()->listPackagesForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'public_emails') {
                    if ($call === 'LIST /user/public_emails') {
                        return $this->routers->internal🔀Router🔀List🔀Users()->listPublicEmailsForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'repos') {
                    if ($call === 'LIST /user/repos') {
                        return $this->routers->internal🔀Router🔀List🔀Repos()->listForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'repository_invitations') {
                    if ($call === 'LIST /user/repository_invitations') {
                        return $this->routers->internal🔀Router🔀List🔀Repos()->listInvitationsForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'social_accounts') {
                    if ($call === 'LIST /user/social_accounts') {
                        return $this->routers->internal🔀Router🔀List🔀Users()->listSocialAccountsForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'ssh_signing_keys') {
                    if ($call === 'LIST /user/ssh_signing_keys') {
                        return $this->routers->internal🔀Router🔀List🔀Users()->listSshSigningKeysForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'starred') {
                    if ($call === 'LIST /user/starred') {
                        return $this->routers->internal🔀Router🔀List🔀Activity()->listReposStarredByAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'subscriptions') {
                    if ($call === 'LIST /user/subscriptions') {
                        return $this->routers->internal🔀Router🔀List🔀Activity()->listWatchedReposForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'teams') {
                    if ($call === 'LIST /user/teams') {
                        return $this->routers->internal🔀Router🔀List🔀Teams()->listForAuthenticatedUserListing($params);
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
