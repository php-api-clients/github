<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\ChunkSize\Get;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Cc3
{
    private array $router = [];
    private readonly SchemaValidator $requestSchemaValidator;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrators $hydrators;
    private readonly Browser $browser;
    private readonly AuthenticationInterface $authentication;

    public function __construct(SchemaValidator $requestSchemaValidator, SchemaValidator $responseSchemaValidator, Hydrators $hydrators, Browser $browser, AuthenticationInterface $authentication)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrators               = $hydrators;
        $this->browser                 = $browser;
        $this->authentication          = $authentication;
    }

    public function call(string $call, array $params, array $pathChunks)
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'installation-requests') {
                    if ($call === 'GET /app/installation-requests') {
                        if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                            $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Apps::class]->listInstallationRequestsForAuthenticatedApp($params);
                    }
                } elseif ($pathChunks[2] === 'installations') {
                    if ($call === 'GET /app/installations') {
                        if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                            $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Apps::class]->listInstallations($params);
                    }
                }
            } elseif ($pathChunks[1] === 'apps') {
                if ($pathChunks[2] === '{app_slug}') {
                    if ($call === 'GET /apps/{app_slug}') {
                        if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                            $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Apps::class]->getBySlug($params);
                    }
                }
            } elseif ($pathChunks[1] === 'codes_of_conduct') {
                if ($pathChunks[2] === '{key}') {
                    if ($call === 'GET /codes_of_conduct/{key}') {
                        if (array_key_exists(Router\Get\CodesOfConduct::class, $this->router) === false) {
                            $this->router[Router\Get\CodesOfConduct::class] = new Router\Get\CodesOfConduct($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\CodesOfConduct::class]->getConductCode($params);
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === 'public') {
                    if ($call === 'GET /gists/public') {
                        if (array_key_exists(Router\Get\Gists::class, $this->router) === false) {
                            $this->router[Router\Get\Gists::class] = new Router\Get\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Gists::class]->listPublic($params);
                    }
                } elseif ($pathChunks[2] === 'starred') {
                    if ($call === 'GET /gists/starred') {
                        if (array_key_exists(Router\Get\Gists::class, $this->router) === false) {
                            $this->router[Router\Get\Gists::class] = new Router\Get\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Gists::class]->listStarred($params);
                    }
                } elseif ($pathChunks[2] === '{gist_id}') {
                    if ($call === 'GET /gists/{gist_id}') {
                        if (array_key_exists(Router\Get\Gists::class, $this->router) === false) {
                            $this->router[Router\Get\Gists::class] = new Router\Get\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Gists::class]->get($params);
                    }
                }
            } elseif ($pathChunks[1] === 'gitignore') {
                if ($pathChunks[2] === 'templates') {
                    if ($call === 'GET /gitignore/templates') {
                        if (array_key_exists(Router\Get\Gitignore::class, $this->router) === false) {
                            $this->router[Router\Get\Gitignore::class] = new Router\Get\Gitignore($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Gitignore::class]->getAllTemplates($params);
                    }
                }
            } elseif ($pathChunks[1] === 'installation') {
                if ($pathChunks[2] === 'repositories') {
                    if ($call === 'GET /installation/repositories') {
                        if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                            $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Apps::class]->listReposAccessibleToInstallation($params);
                    }
                }
            } elseif ($pathChunks[1] === 'licenses') {
                if ($pathChunks[2] === '{license}') {
                    if ($call === 'GET /licenses/{license}') {
                        if (array_key_exists(Router\Get\Licenses::class, $this->router) === false) {
                            $this->router[Router\Get\Licenses::class] = new Router\Get\Licenses($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Licenses::class]->get($params);
                    }
                }
            } elseif ($pathChunks[1] === 'marketplace_listing') {
                if ($pathChunks[2] === 'plans') {
                    if ($call === 'GET /marketplace_listing/plans') {
                        if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                            $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Apps::class]->listPlans($params);
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($call === 'GET /orgs/{org}') {
                        if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                            $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Orgs::class]->get($params);
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === '{project_id}') {
                    if ($call === 'GET /projects/{project_id}') {
                        if (array_key_exists(Router\Get\Projects::class, $this->router) === false) {
                            $this->router[Router\Get\Projects::class] = new Router\Get\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Projects::class]->get($params);
                    }
                }
            } elseif ($pathChunks[1] === 'search') {
                if ($pathChunks[2] === 'code') {
                    if ($call === 'GET /search/code') {
                        if (array_key_exists(Router\Get\Search::class, $this->router) === false) {
                            $this->router[Router\Get\Search::class] = new Router\Get\Search($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Search::class]->code($params);
                    }
                } elseif ($pathChunks[2] === 'commits') {
                    if ($call === 'GET /search/commits') {
                        if (array_key_exists(Router\Get\Search::class, $this->router) === false) {
                            $this->router[Router\Get\Search::class] = new Router\Get\Search($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Search::class]->commits($params);
                    }
                } elseif ($pathChunks[2] === 'issues') {
                    if ($call === 'GET /search/issues') {
                        if (array_key_exists(Router\Get\Search::class, $this->router) === false) {
                            $this->router[Router\Get\Search::class] = new Router\Get\Search($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Search::class]->issuesAndPullRequests($params);
                    }
                } elseif ($pathChunks[2] === 'labels') {
                    if ($call === 'GET /search/labels') {
                        if (array_key_exists(Router\Get\Search::class, $this->router) === false) {
                            $this->router[Router\Get\Search::class] = new Router\Get\Search($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Search::class]->labels($params);
                    }
                } elseif ($pathChunks[2] === 'repositories') {
                    if ($call === 'GET /search/repositories') {
                        if (array_key_exists(Router\Get\Search::class, $this->router) === false) {
                            $this->router[Router\Get\Search::class] = new Router\Get\Search($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Search::class]->repos($params);
                    }
                } elseif ($pathChunks[2] === 'topics') {
                    if ($call === 'GET /search/topics') {
                        if (array_key_exists(Router\Get\Search::class, $this->router) === false) {
                            $this->router[Router\Get\Search::class] = new Router\Get\Search($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Search::class]->topics($params);
                    }
                } elseif ($pathChunks[2] === 'users') {
                    if ($call === 'GET /search/users') {
                        if (array_key_exists(Router\Get\Search::class, $this->router) === false) {
                            $this->router[Router\Get\Search::class] = new Router\Get\Search($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Search::class]->users($params);
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($call === 'GET /teams/{team_id}') {
                        if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                            $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Teams::class]->getLegacy($params);
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'blocks') {
                    if ($call === 'GET /user/blocks') {
                        if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                            $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Users::class]->listBlockedByAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'codespaces') {
                    if ($call === 'GET /user/codespaces') {
                        if (array_key_exists(Router\Get\Codespaces::class, $this->router) === false) {
                            $this->router[Router\Get\Codespaces::class] = new Router\Get\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Codespaces::class]->listForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'emails') {
                    if ($call === 'GET /user/emails') {
                        if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                            $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Users::class]->listEmailsForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'followers') {
                    if ($call === 'GET /user/followers') {
                        if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                            $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Users::class]->listFollowersForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'following') {
                    if ($call === 'GET /user/following') {
                        if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                            $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Users::class]->listFollowedByAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'gpg_keys') {
                    if ($call === 'GET /user/gpg_keys') {
                        if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                            $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Users::class]->listGpgKeysForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'installations') {
                    if ($call === 'GET /user/installations') {
                        if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                            $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Apps::class]->listInstallationsForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'interaction-limits') {
                    if ($call === 'GET /user/interaction-limits') {
                        if (array_key_exists(Router\Get\Interactions::class, $this->router) === false) {
                            $this->router[Router\Get\Interactions::class] = new Router\Get\Interactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Interactions::class]->getRestrictionsForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'issues') {
                    if ($call === 'GET /user/issues') {
                        if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                            $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Issues::class]->listForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'keys') {
                    if ($call === 'GET /user/keys') {
                        if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                            $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Users::class]->listPublicSshKeysForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'marketplace_purchases') {
                    if ($call === 'GET /user/marketplace_purchases') {
                        if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                            $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Apps::class]->listSubscriptionsForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'migrations') {
                    if ($call === 'GET /user/migrations') {
                        if (array_key_exists(Router\Get\Migrations::class, $this->router) === false) {
                            $this->router[Router\Get\Migrations::class] = new Router\Get\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Migrations::class]->listForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'orgs') {
                    if ($call === 'GET /user/orgs') {
                        if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                            $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Orgs::class]->listForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'packages') {
                    if ($call === 'GET /user/packages') {
                        if (array_key_exists(Router\Get\Packages::class, $this->router) === false) {
                            $this->router[Router\Get\Packages::class] = new Router\Get\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Packages::class]->listPackagesForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'public_emails') {
                    if ($call === 'GET /user/public_emails') {
                        if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                            $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Users::class]->listPublicEmailsForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'repos') {
                    if ($call === 'GET /user/repos') {
                        if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                            $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Repos::class]->listForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'repository_invitations') {
                    if ($call === 'GET /user/repository_invitations') {
                        if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                            $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Repos::class]->listInvitationsForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'social_accounts') {
                    if ($call === 'GET /user/social_accounts') {
                        if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                            $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Users::class]->listSocialAccountsForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'ssh_signing_keys') {
                    if ($call === 'GET /user/ssh_signing_keys') {
                        if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                            $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Users::class]->listSshSigningKeysForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'starred') {
                    if ($call === 'GET /user/starred') {
                        if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                            $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Activity::class]->listReposStarredByAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'subscriptions') {
                    if ($call === 'GET /user/subscriptions') {
                        if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                            $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Activity::class]->listWatchedReposForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'teams') {
                    if ($call === 'GET /user/teams') {
                        if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                            $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Teams::class]->listForAuthenticatedUser($params);
                    }
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($pathChunks[2] === '{username}') {
                    if ($call === 'GET /users/{username}') {
                        if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                            $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Get\Users::class]->getByUsername($params);
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
