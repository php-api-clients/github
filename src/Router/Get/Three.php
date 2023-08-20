<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\Schema\CodeOfConduct;
use ApiClients\Client\GitHub\Schema\GistSimple;
use ApiClients\Client\GitHub\Schema\GlobalAdvisory;
use ApiClients\Client\GitHub\Schema\Integration;
use ApiClients\Client\GitHub\Schema\InteractionLimitResponse;
use ApiClients\Client\GitHub\Schema\License;
use ApiClients\Client\GitHub\Schema\Operations\Apps\ListReposAccessibleToInstallation\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHub\Schema\Operations\Interactions\GetRestrictionsForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json\One;
use ApiClients\Client\GitHub\Schema\OrganizationFull;
use ApiClients\Client\GitHub\Schema\PrivateUser;
use ApiClients\Client\GitHub\Schema\Project;
use ApiClients\Client\GitHub\Schema\PublicUser;
use ApiClients\Client\GitHub\Schema\TeamFull;
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

    /** @return |(iterable<Schema\IntegrationInstallationRequest>|array{code: int})|iterable<Schema\Installation>|(Schema\CodeOfConduct|(iterable<Schema\BaseGist>|(Schema\GistSimple|(iterable<string>|(Schema\Operations\Apps\ListReposAccessibleToInstallation\Response\ApplicationJson\Ok|(Schema\License|iterable<Schema\MarketplaceListingPlan>|(Schema\Project|(Schema\Operations\Search\Code\Response\ApplicationJson\Ok|(Schema\Operations\Search\Commits\Response\ApplicationJson\Ok|(Schema\Operations\Search\IssuesAndPullRequests\Response\ApplicationJson\Ok|(Schema\Operations\Search\Labels\Response\ApplicationJson\Ok|(Schema\Operations\Search\Repos\Response\ApplicationJson\Ok|(Schema\Operations\Search\Topics\Response\ApplicationJson\Ok|(Schema\Operations\Search\Users\Response\ApplicationJson\Ok|(iterable<Schema\SimpleUser>|(Schema\Operations\Codespaces\ListForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|(iterable<Schema\Email>|(iterable<Schema\GpgKey>|(Schema\Operations\Apps\ListInstallationsForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|(Schema\InteractionLimitResponse|Schema\Operations\Interactions\GetRestrictionsForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json\One|(iterable<Schema\Issue>|(iterable<Schema\Key>|(iterable<Schema\UserMarketplacePurchase>|(iterable<Schema\Migration>|(iterable<Schema\OrganizationSimple>|(iterable<Schema\Package>|(iterable<Schema\Repository>|(iterable<Schema\RepositoryInvitation>|(iterable<Schema\SocialAccount>|(iterable<Schema\SshSigningKey>|(iterable<Schema\MinimalRepository>|(iterable<Schema\TeamFull>|(Schema\PrivateUser|Schema\PublicUser) */
    public function call(string $call, array $params, array $pathChunks): GlobalAdvisory|iterable|Integration|CodeOfConduct|GistSimple|Ok|License|OrganizationFull|Project|\ApiClients\Client\GitHub\Schema\Operations\Search\Code\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Search\Commits\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Search\IssuesAndPullRequests\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Search\Labels\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Search\Repos\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Search\Topics\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Search\Users\Response\ApplicationJson\Ok|TeamFull|Json|\ApiClients\Client\GitHub\Schema\Operations\Apps\ListInstallationsForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|InteractionLimitResponse|One|PrivateUser|PublicUser
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'advisories') {
                if ($pathChunks[2] === '{ghsa_id}') {
                    if ($call === 'GET /advisories/{ghsa_id}') {
                        $matched = true;
                        if (array_key_exists(Router\Get\SecurityAdvisories::class, $this->router) === false) {
                            $this->router[Router\Get\SecurityAdvisories::class] = new Router\Get\SecurityAdvisories($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\SecurityAdvisories::class]->getGlobalAdvisory($params);
                    }
                }
            } elseif ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'installation-requests') {
                    if ($call === 'GET /app/installation-requests') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                            $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Apps::class]->listInstallationRequestsForAuthenticatedApp($params);
                    }
                } elseif ($pathChunks[2] === 'installations') {
                    if ($call === 'GET /app/installations') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                            $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Apps::class]->listInstallations($params);
                    }
                }
            } elseif ($pathChunks[1] === 'apps') {
                if ($pathChunks[2] === '{app_slug}') {
                    if ($call === 'GET /apps/{app_slug}') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                            $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Apps::class]->getBySlug($params);
                    }
                }
            } elseif ($pathChunks[1] === 'codes_of_conduct') {
                if ($pathChunks[2] === '{key}') {
                    if ($call === 'GET /codes_of_conduct/{key}') {
                        $matched = true;
                        if (array_key_exists(Router\Get\CodesOfConduct::class, $this->router) === false) {
                            $this->router[Router\Get\CodesOfConduct::class] = new Router\Get\CodesOfConduct($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\CodesOfConduct::class]->getConductCode($params);
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === 'public') {
                    if ($call === 'GET /gists/public') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Gists::class, $this->router) === false) {
                            $this->router[Router\Get\Gists::class] = new Router\Get\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Gists::class]->listPublic($params);
                    }
                } elseif ($pathChunks[2] === 'starred') {
                    if ($call === 'GET /gists/starred') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Gists::class, $this->router) === false) {
                            $this->router[Router\Get\Gists::class] = new Router\Get\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Gists::class]->listStarred($params);
                    }
                } elseif ($pathChunks[2] === '{gist_id}') {
                    if ($call === 'GET /gists/{gist_id}') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Gists::class, $this->router) === false) {
                            $this->router[Router\Get\Gists::class] = new Router\Get\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Gists::class]->get($params);
                    }
                }
            } elseif ($pathChunks[1] === 'gitignore') {
                if ($pathChunks[2] === 'templates') {
                    if ($call === 'GET /gitignore/templates') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Gitignore::class, $this->router) === false) {
                            $this->router[Router\Get\Gitignore::class] = new Router\Get\Gitignore($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Gitignore::class]->getAllTemplates($params);
                    }
                }
            } elseif ($pathChunks[1] === 'installation') {
                if ($pathChunks[2] === 'repositories') {
                    if ($call === 'GET /installation/repositories') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                            $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Apps::class]->listReposAccessibleToInstallation($params);
                    }
                }
            } elseif ($pathChunks[1] === 'licenses') {
                if ($pathChunks[2] === '{license}') {
                    if ($call === 'GET /licenses/{license}') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Licenses::class, $this->router) === false) {
                            $this->router[Router\Get\Licenses::class] = new Router\Get\Licenses($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Licenses::class]->get($params);
                    }
                }
            } elseif ($pathChunks[1] === 'marketplace_listing') {
                if ($pathChunks[2] === 'plans') {
                    if ($call === 'GET /marketplace_listing/plans') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                            $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Apps::class]->listPlans($params);
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($call === 'GET /orgs/{org}') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                            $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Orgs::class]->get($params);
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === '{project_id}') {
                    if ($call === 'GET /projects/{project_id}') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Projects::class, $this->router) === false) {
                            $this->router[Router\Get\Projects::class] = new Router\Get\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Projects::class]->get($params);
                    }
                }
            } elseif ($pathChunks[1] === 'search') {
                if ($pathChunks[2] === 'code') {
                    if ($call === 'GET /search/code') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Search::class, $this->router) === false) {
                            $this->router[Router\Get\Search::class] = new Router\Get\Search($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Search::class]->code($params);
                    }
                } elseif ($pathChunks[2] === 'commits') {
                    if ($call === 'GET /search/commits') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Search::class, $this->router) === false) {
                            $this->router[Router\Get\Search::class] = new Router\Get\Search($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Search::class]->commits($params);
                    }
                } elseif ($pathChunks[2] === 'issues') {
                    if ($call === 'GET /search/issues') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Search::class, $this->router) === false) {
                            $this->router[Router\Get\Search::class] = new Router\Get\Search($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Search::class]->issuesAndPullRequests($params);
                    }
                } elseif ($pathChunks[2] === 'labels') {
                    if ($call === 'GET /search/labels') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Search::class, $this->router) === false) {
                            $this->router[Router\Get\Search::class] = new Router\Get\Search($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Search::class]->labels($params);
                    }
                } elseif ($pathChunks[2] === 'repositories') {
                    if ($call === 'GET /search/repositories') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Search::class, $this->router) === false) {
                            $this->router[Router\Get\Search::class] = new Router\Get\Search($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Search::class]->repos($params);
                    }
                } elseif ($pathChunks[2] === 'topics') {
                    if ($call === 'GET /search/topics') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Search::class, $this->router) === false) {
                            $this->router[Router\Get\Search::class] = new Router\Get\Search($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Search::class]->topics($params);
                    }
                } elseif ($pathChunks[2] === 'users') {
                    if ($call === 'GET /search/users') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Search::class, $this->router) === false) {
                            $this->router[Router\Get\Search::class] = new Router\Get\Search($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Search::class]->users($params);
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($call === 'GET /teams/{team_id}') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                            $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Teams::class]->getLegacy($params);
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'blocks') {
                    if ($call === 'GET /user/blocks') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                            $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Users::class]->listBlockedByAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'codespaces') {
                    if ($call === 'GET /user/codespaces') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Codespaces::class, $this->router) === false) {
                            $this->router[Router\Get\Codespaces::class] = new Router\Get\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Codespaces::class]->listForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'emails') {
                    if ($call === 'GET /user/emails') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                            $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Users::class]->listEmailsForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'followers') {
                    if ($call === 'GET /user/followers') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                            $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Users::class]->listFollowersForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'following') {
                    if ($call === 'GET /user/following') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                            $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Users::class]->listFollowedByAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'gpg_keys') {
                    if ($call === 'GET /user/gpg_keys') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                            $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Users::class]->listGpgKeysForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'installations') {
                    if ($call === 'GET /user/installations') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                            $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Apps::class]->listInstallationsForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'interaction-limits') {
                    if ($call === 'GET /user/interaction-limits') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Interactions::class, $this->router) === false) {
                            $this->router[Router\Get\Interactions::class] = new Router\Get\Interactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Interactions::class]->getRestrictionsForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'issues') {
                    if ($call === 'GET /user/issues') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                            $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Issues::class]->listForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'keys') {
                    if ($call === 'GET /user/keys') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                            $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Users::class]->listPublicSshKeysForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'marketplace_purchases') {
                    if ($call === 'GET /user/marketplace_purchases') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                            $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Apps::class]->listSubscriptionsForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'migrations') {
                    if ($call === 'GET /user/migrations') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Migrations::class, $this->router) === false) {
                            $this->router[Router\Get\Migrations::class] = new Router\Get\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Migrations::class]->listForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'orgs') {
                    if ($call === 'GET /user/orgs') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                            $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Orgs::class]->listForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'packages') {
                    if ($call === 'GET /user/packages') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Packages::class, $this->router) === false) {
                            $this->router[Router\Get\Packages::class] = new Router\Get\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Packages::class]->listPackagesForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'public_emails') {
                    if ($call === 'GET /user/public_emails') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                            $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Users::class]->listPublicEmailsForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'repos') {
                    if ($call === 'GET /user/repos') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                            $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Repos::class]->listForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'repository_invitations') {
                    if ($call === 'GET /user/repository_invitations') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                            $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Repos::class]->listInvitationsForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'social_accounts') {
                    if ($call === 'GET /user/social_accounts') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                            $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Users::class]->listSocialAccountsForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'ssh_signing_keys') {
                    if ($call === 'GET /user/ssh_signing_keys') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                            $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Users::class]->listSshSigningKeysForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'starred') {
                    if ($call === 'GET /user/starred') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                            $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Activity::class]->listReposStarredByAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'subscriptions') {
                    if ($call === 'GET /user/subscriptions') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                            $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Activity::class]->listWatchedReposForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'teams') {
                    if ($call === 'GET /user/teams') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                            $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Teams::class]->listForAuthenticatedUser($params);
                    }
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($pathChunks[2] === '{username}') {
                    if ($call === 'GET /users/{username}') {
                        $matched = true;
                        if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                            $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Users::class]->getByUsername($params);
                    }
                }
            }
        }

        if ($matched === false) {
            throw new InvalidArgumentException();
        }
    }
}
