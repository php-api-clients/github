<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\Codespace;
use ApiClients\Client\GitHub\Schema\FullRepository;
use ApiClients\Client\GitHub\Schema\GistSimple;
use ApiClients\Client\GitHub\Schema\GitignoreTemplate;
use ApiClients\Client\GitHub\Schema\GpgKey;
use ApiClients\Client\GitHub\Schema\Hovercard;
use ApiClients\Client\GitHub\Schema\Installation;
use ApiClients\Client\GitHub\Schema\InteractionLimitResponse;
use ApiClients\Client\GitHub\Schema\Key;
use ApiClients\Client\GitHub\Schema\MarketplacePurchase;
use ApiClients\Client\GitHub\Schema\Migration;
use ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListInOrganization\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHub\Schema\Operations\Interactions\GetRestrictionsForOrg\Response\ApplicationJson\Ok\Application\Json\One;
use ApiClients\Client\GitHub\Schema\ProjectColumn;
use ApiClients\Client\GitHub\Schema\Repository;
use ApiClients\Client\GitHub\Schema\SshSigningKey;
use ApiClients\Client\GitHub\Schema\StarredRepository;
use ApiClients\Client\GitHub\Schema\Thread;
use ApiClients\Client\GitHub\Schema\WebhookConfig;
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

    /** @return |iterable<Schema\HookDeliveryItem>|(iterable<Schema\GistComment>|array{code: int})|(iterable<Schema\GistCommit>|(iterable<Schema\GistSimple>|array{code: int}|(Schema\GitignoreTemplate|iterable<Schema\MarketplaceListingPlan>|(Schema\Thread|iterable<Schema\SimpleUser>|(Schema\Operations\Codespaces\ListInOrganization\Response\ApplicationJson\Ok|iterable<Schema\Event>|iterable<Schema\OrganizationInvitation>|iterable<Schema\OrgHook>|(Schema\InteractionLimitResponse|Schema\Operations\Interactions\GetRestrictionsForOrg\Response\ApplicationJson\Ok\Application\Json\One)|iterable<Schema\Issue>|iterable<Schema\Migration>|(iterable<Schema\Package>|iterable<Schema\OrganizationProgrammaticAccessGrantRequest>|iterable<Schema\OrganizationProgrammaticAccessGrant>|iterable<Schema\Project>|iterable<Schema\MinimalRepository>|iterable<Schema\RepositoryRuleset>|iterable<Schema\RepositoryAdvisory>|iterable<Schema\TeamSimple>|iterable<Schema\Team>|(Schema\ProjectColumn|(iterable<Schema\SimpleUser>|(iterable<Schema\ProjectColumn>|iterable<Schema\TeamDiscussion>|iterable<Schema\TeamProject>|(Schema\Codespace|iterable<Schema\Package>|(Schema\GpgKey|(Schema\Key|(iterable<Schema\UserMarketplacePurchase>|(iterable<Schema\OrgMembership>|(Schema\Migration|(Schema\SshSigningKey|iterable<Schema\BaseGist>|iterable<Schema\GpgKey>|iterable<Schema\KeySimple>|iterable<Schema\OrganizationSimple>|iterable<Schema\SocialAccount>|iterable<Schema\SshSigningKey>|(Schema\StarredRepository|Schema\Repository) */
    public function call(string $call, array $params, array $pathChunks): WebhookConfig|iterable|Installation|GistSimple|GitignoreTemplate|MarketplacePurchase|Thread|Ok|\ApiClients\Client\GitHub\Schema\Operations\Orgs\ListAppInstallations\Response\ApplicationJson\Ok|InteractionLimitResponse|One|ProjectColumn|FullRepository|BasicError|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListSecretsForAuthenticatedUser\Response\ApplicationJson\Ok|Codespace|GpgKey|Key|Migration|SshSigningKey|Hovercard|StarredRepository|Repository
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'hook') {
                    if ($pathChunks[3] === 'config') {
                        if ($call === 'GET /app/hook/config') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Apps::class]->getWebhookConfigForApp($params);
                        }
                    } elseif ($pathChunks[3] === 'deliveries') {
                        if ($call === 'GET /app/hook/deliveries') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Apps::class]->listWebhookDeliveries($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'installations') {
                    if ($pathChunks[3] === '{installation_id}') {
                        if ($call === 'GET /app/installations/{installation_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Apps::class]->getInstallation($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($pathChunks[3] === 'comments') {
                        if ($call === 'GET /gists/{gist_id}/comments') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Gists::class, $this->router) === false) {
                                $this->router[Router\Get\Gists::class] = new Router\Get\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Gists::class]->listComments($params);
                        }
                    } elseif ($pathChunks[3] === 'commits') {
                        if ($call === 'GET /gists/{gist_id}/commits') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Gists::class, $this->router) === false) {
                                $this->router[Router\Get\Gists::class] = new Router\Get\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Gists::class]->listCommits($params);
                        }
                    } elseif ($pathChunks[3] === 'forks') {
                        if ($call === 'GET /gists/{gist_id}/forks') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Gists::class, $this->router) === false) {
                                $this->router[Router\Get\Gists::class] = new Router\Get\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Gists::class]->listForks($params);
                        }
                    } elseif ($pathChunks[3] === 'star') {
                        if ($call === 'GET /gists/{gist_id}/star') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Gists::class, $this->router) === false) {
                                $this->router[Router\Get\Gists::class] = new Router\Get\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Gists::class]->checkIsStarred($params);
                        }
                    } elseif ($pathChunks[3] === '{sha}') {
                        if ($call === 'GET /gists/{gist_id}/{sha}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Gists::class, $this->router) === false) {
                                $this->router[Router\Get\Gists::class] = new Router\Get\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Gists::class]->getRevision($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'gitignore') {
                if ($pathChunks[2] === 'templates') {
                    if ($pathChunks[3] === '{name}') {
                        if ($call === 'GET /gitignore/templates/{name}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Gitignore::class, $this->router) === false) {
                                $this->router[Router\Get\Gitignore::class] = new Router\Get\Gitignore($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Gitignore::class]->getTemplate($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'marketplace_listing') {
                if ($pathChunks[2] === 'accounts') {
                    if ($pathChunks[3] === '{account_id}') {
                        if ($call === 'GET /marketplace_listing/accounts/{account_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Apps::class]->getSubscriptionPlanForAccount($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'stubbed') {
                    if ($pathChunks[3] === 'plans') {
                        if ($call === 'GET /marketplace_listing/stubbed/plans') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Apps::class]->listPlansStubbed($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'notifications') {
                if ($pathChunks[2] === 'threads') {
                    if ($pathChunks[3] === '{thread_id}') {
                        if ($call === 'GET /notifications/threads/{thread_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Activity::class]->getThread($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'blocks') {
                        if ($call === 'GET /orgs/{org}/blocks') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->listBlockedUsers($params);
                        }
                    } elseif ($pathChunks[3] === 'codespaces') {
                        if ($call === 'GET /orgs/{org}/codespaces') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Codespaces::class, $this->router) === false) {
                                $this->router[Router\Get\Codespaces::class] = new Router\Get\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Codespaces::class]->listInOrganization($params);
                        }
                    } elseif ($pathChunks[3] === 'events') {
                        if ($call === 'GET /orgs/{org}/events') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Activity::class]->listPublicOrgEvents($params);
                        }
                    } elseif ($pathChunks[3] === 'failed_invitations') {
                        if ($call === 'GET /orgs/{org}/failed_invitations') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->listFailedInvitations($params);
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($call === 'GET /orgs/{org}/hooks') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->listWebhooks($params);
                        }
                    } elseif ($pathChunks[3] === 'installation') {
                        if ($call === 'GET /orgs/{org}/installation') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Apps::class]->getOrgInstallation($params);
                        }
                    } elseif ($pathChunks[3] === 'installations') {
                        if ($call === 'GET /orgs/{org}/installations') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->listAppInstallations($params);
                        }
                    } elseif ($pathChunks[3] === 'interaction-limits') {
                        if ($call === 'GET /orgs/{org}/interaction-limits') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Interactions::class, $this->router) === false) {
                                $this->router[Router\Get\Interactions::class] = new Router\Get\Interactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Interactions::class]->getRestrictionsForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'invitations') {
                        if ($call === 'GET /orgs/{org}/invitations') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->listPendingInvitations($params);
                        }
                    } elseif ($pathChunks[3] === 'issues') {
                        if ($call === 'GET /orgs/{org}/issues') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                                $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Issues::class]->listForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($call === 'GET /orgs/{org}/members') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->listMembers($params);
                        }
                    } elseif ($pathChunks[3] === 'migrations') {
                        if ($call === 'GET /orgs/{org}/migrations') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Migrations::class, $this->router) === false) {
                                $this->router[Router\Get\Migrations::class] = new Router\Get\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Migrations::class]->listForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'outside_collaborators') {
                        if ($call === 'GET /orgs/{org}/outside_collaborators') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->listOutsideCollaborators($params);
                        }
                    } elseif ($pathChunks[3] === 'packages') {
                        if ($call === 'GET /orgs/{org}/packages') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Packages::class, $this->router) === false) {
                                $this->router[Router\Get\Packages::class] = new Router\Get\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Packages::class]->listPackagesForOrganization($params);
                        }
                    } elseif ($pathChunks[3] === 'personal-access-token-requests') {
                        if ($call === 'GET /orgs/{org}/personal-access-token-requests') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->listPatGrantRequests($params);
                        }
                    } elseif ($pathChunks[3] === 'personal-access-tokens') {
                        if ($call === 'GET /orgs/{org}/personal-access-tokens') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->listPatGrants($params);
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($call === 'GET /orgs/{org}/projects') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Projects::class, $this->router) === false) {
                                $this->router[Router\Get\Projects::class] = new Router\Get\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Projects::class]->listForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'public_members') {
                        if ($call === 'GET /orgs/{org}/public_members') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->listPublicMembers($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'GET /orgs/{org}/repos') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Repos::class]->listForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'rulesets') {
                        if ($call === 'GET /orgs/{org}/rulesets') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Repos::class]->getOrgRulesets($params);
                        }
                    } elseif ($pathChunks[3] === 'security-advisories') {
                        if ($call === 'GET /orgs/{org}/security-advisories') {
                            $matched = true;
                            if (array_key_exists(Router\Get\SecurityAdvisories::class, $this->router) === false) {
                                $this->router[Router\Get\SecurityAdvisories::class] = new Router\Get\SecurityAdvisories($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\SecurityAdvisories::class]->listOrgRepositoryAdvisories($params);
                        }
                    } elseif ($pathChunks[3] === 'security-managers') {
                        if ($call === 'GET /orgs/{org}/security-managers') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->listSecurityManagerTeams($params);
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($call === 'GET /orgs/{org}/teams') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Teams::class]->list_($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === '{column_id}') {
                        if ($call === 'GET /projects/columns/{column_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Projects::class, $this->router) === false) {
                                $this->router[Router\Get\Projects::class] = new Router\Get\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Projects::class]->getColumn($params);
                        }
                    }
                } elseif ($pathChunks[2] === '{project_id}') {
                    if ($pathChunks[3] === 'collaborators') {
                        if ($call === 'GET /projects/{project_id}/collaborators') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Projects::class, $this->router) === false) {
                                $this->router[Router\Get\Projects::class] = new Router\Get\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Projects::class]->listCollaborators($params);
                        }
                    } elseif ($pathChunks[3] === 'columns') {
                        if ($call === 'GET /projects/{project_id}/columns') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Projects::class, $this->router) === false) {
                                $this->router[Router\Get\Projects::class] = new Router\Get\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Projects::class]->listColumns($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($call === 'GET /repos/{owner}/{repo}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Repos::class]->get($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'discussions') {
                        if ($call === 'GET /teams/{team_id}/discussions') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Teams::class]->listDiscussionsLegacy($params);
                        }
                    } elseif ($pathChunks[3] === 'invitations') {
                        if ($call === 'GET /teams/{team_id}/invitations') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Teams::class]->listPendingInvitationsLegacy($params);
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($call === 'GET /teams/{team_id}/members') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Teams::class]->listMembersLegacy($params);
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($call === 'GET /teams/{team_id}/projects') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Teams::class]->listProjectsLegacy($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'GET /teams/{team_id}/repos') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Teams::class]->listReposLegacy($params);
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($call === 'GET /teams/{team_id}/teams') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Teams::class]->listChildLegacy($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'blocks') {
                    if ($pathChunks[3] === '{username}') {
                        if ($call === 'GET /user/blocks/{username}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->checkBlocked($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'codespaces') {
                    if ($pathChunks[3] === 'secrets') {
                        if ($call === 'GET /user/codespaces/secrets') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Codespaces::class, $this->router) === false) {
                                $this->router[Router\Get\Codespaces::class] = new Router\Get\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Codespaces::class]->listSecretsForAuthenticatedUser($params);
                        }
                    } elseif ($pathChunks[3] === '{codespace_name}') {
                        if ($call === 'GET /user/codespaces/{codespace_name}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Codespaces::class, $this->router) === false) {
                                $this->router[Router\Get\Codespaces::class] = new Router\Get\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Codespaces::class]->getForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'docker') {
                    if ($pathChunks[3] === 'conflicts') {
                        if ($call === 'GET /user/docker/conflicts') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Packages::class, $this->router) === false) {
                                $this->router[Router\Get\Packages::class] = new Router\Get\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Packages::class]->listDockerMigrationConflictingPackagesForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'following') {
                    if ($pathChunks[3] === '{username}') {
                        if ($call === 'GET /user/following/{username}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->checkPersonIsFollowedByAuthenticated($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'gpg_keys') {
                    if ($pathChunks[3] === '{gpg_key_id}') {
                        if ($call === 'GET /user/gpg_keys/{gpg_key_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->getGpgKeyForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'keys') {
                    if ($pathChunks[3] === '{key_id}') {
                        if ($call === 'GET /user/keys/{key_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->getPublicSshKeyForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'marketplace_purchases') {
                    if ($pathChunks[3] === 'stubbed') {
                        if ($call === 'GET /user/marketplace_purchases/stubbed') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Apps::class]->listSubscriptionsForAuthenticatedUserStubbed($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'memberships') {
                    if ($pathChunks[3] === 'orgs') {
                        if ($call === 'GET /user/memberships/orgs') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->listMembershipsForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'migrations') {
                    if ($pathChunks[3] === '{migration_id}') {
                        if ($call === 'GET /user/migrations/{migration_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Migrations::class, $this->router) === false) {
                                $this->router[Router\Get\Migrations::class] = new Router\Get\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Migrations::class]->getStatusForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'ssh_signing_keys') {
                    if ($pathChunks[3] === '{ssh_signing_key_id}') {
                        if ($call === 'GET /user/ssh_signing_keys/{ssh_signing_key_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->getSshSigningKeyForAuthenticatedUser($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($pathChunks[2] === '{username}') {
                    if ($pathChunks[3] === 'events') {
                        if ($call === 'GET /users/{username}/events') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Activity::class]->listEventsForAuthenticatedUser($params);
                        }
                    } elseif ($pathChunks[3] === 'followers') {
                        if ($call === 'GET /users/{username}/followers') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->listFollowersForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'following') {
                        if ($call === 'GET /users/{username}/following') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->listFollowingForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'gists') {
                        if ($call === 'GET /users/{username}/gists') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Gists::class, $this->router) === false) {
                                $this->router[Router\Get\Gists::class] = new Router\Get\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Gists::class]->listForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'gpg_keys') {
                        if ($call === 'GET /users/{username}/gpg_keys') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->listGpgKeysForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'hovercard') {
                        if ($call === 'GET /users/{username}/hovercard') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->getContextForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'installation') {
                        if ($call === 'GET /users/{username}/installation') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Apps::class]->getUserInstallation($params);
                        }
                    } elseif ($pathChunks[3] === 'keys') {
                        if ($call === 'GET /users/{username}/keys') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->listPublicKeysForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'orgs') {
                        if ($call === 'GET /users/{username}/orgs') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->listForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'packages') {
                        if ($call === 'GET /users/{username}/packages') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Packages::class, $this->router) === false) {
                                $this->router[Router\Get\Packages::class] = new Router\Get\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Packages::class]->listPackagesForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($call === 'GET /users/{username}/projects') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Projects::class, $this->router) === false) {
                                $this->router[Router\Get\Projects::class] = new Router\Get\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Projects::class]->listForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'received_events') {
                        if ($call === 'GET /users/{username}/received_events') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Activity::class]->listReceivedEventsForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'GET /users/{username}/repos') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Repos::class]->listForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'social_accounts') {
                        if ($call === 'GET /users/{username}/social_accounts') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->listSocialAccountsForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'ssh_signing_keys') {
                        if ($call === 'GET /users/{username}/ssh_signing_keys') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->listSshSigningKeysForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'starred') {
                        if ($call === 'GET /users/{username}/starred') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Activity::class]->listReposStarredByUser($params);
                        }
                    } elseif ($pathChunks[3] === 'subscriptions') {
                        if ($call === 'GET /users/{username}/subscriptions') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Activity::class]->listReposWatchedByUser($params);
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
