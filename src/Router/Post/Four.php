<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Post;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\Schema\Authorization;
use ApiClients\Client\GitHub\Schema\BaseGist;
use ApiClients\Client\GitHub\Schema\GistComment;
use ApiClients\Client\GitHub\Schema\Integration;
use ApiClients\Client\GitHub\Schema\Migration;
use ApiClients\Client\GitHub\Schema\Operations\Orgs\ReviewPatGrantRequestsInBulk\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Client\GitHub\Schema\OrganizationInvitation;
use ApiClients\Client\GitHub\Schema\OrgHook;
use ApiClients\Client\GitHub\Schema\Project;
use ApiClients\Client\GitHub\Schema\ProjectColumn;
use ApiClients\Client\GitHub\Schema\Repository;
use ApiClients\Client\GitHub\Schema\RepositoryRuleset;
use ApiClients\Client\GitHub\Schema\TeamDiscussion;
use ApiClients\Client\GitHub\Schema\TeamFull;
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

    /** @return |(Schema\GistComment|array{code: int})|(Schema\BaseGist|(Schema\ProjectColumn */
    public function call(string $call, array $params, array $pathChunks): Integration|Authorization|GistComment|BaseGist|OrgHook|OrganizationInvitation|Migration|Json|\ApiClients\Client\GitHub\Schema\Operations\Orgs\UpdatePatAccesses\Response\ApplicationJson\Accepted\Application\Json|Project|Repository|RepositoryRuleset|TeamFull|ProjectColumn|TeamDiscussion|array
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'app-manifests') {
                if ($pathChunks[2] === '{code}') {
                    if ($pathChunks[3] === 'conversions') {
                        if ($call === 'POST /app-manifests/{code}/conversions') {
                            $matched = true;
                            if (array_key_exists(Router\Post\Apps::class, $this->router) === false) {
                                $this->router[Router\Post\Apps::class] = new Router\Post\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Apps::class]->CreateFromManifest($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'applications') {
                if ($pathChunks[2] === '{client_id}') {
                    if ($pathChunks[3] === 'token') {
                        if ($call === 'POST /applications/{client_id}/token') {
                            $matched = true;
                            if (array_key_exists(Router\Post\Apps::class, $this->router) === false) {
                                $this->router[Router\Post\Apps::class] = new Router\Post\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Apps::class]->CheckToken($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($pathChunks[3] === 'comments') {
                        if ($call === 'POST /gists/{gist_id}/comments') {
                            $matched = true;
                            if (array_key_exists(Router\Post\Gists::class, $this->router) === false) {
                                $this->router[Router\Post\Gists::class] = new Router\Post\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Gists::class]->CreateComment($params);
                        }
                    } elseif ($pathChunks[3] === 'forks') {
                        if ($call === 'POST /gists/{gist_id}/forks') {
                            $matched = true;
                            if (array_key_exists(Router\Post\Gists::class, $this->router) === false) {
                                $this->router[Router\Post\Gists::class] = new Router\Post\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Gists::class]->Fork($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'hooks') {
                        if ($call === 'POST /orgs/{org}/hooks') {
                            $matched = true;
                            if (array_key_exists(Router\Post\Orgs::class, $this->router) === false) {
                                $this->router[Router\Post\Orgs::class] = new Router\Post\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Orgs::class]->CreateWebhook($params);
                        }
                    } elseif ($pathChunks[3] === 'invitations') {
                        if ($call === 'POST /orgs/{org}/invitations') {
                            $matched = true;
                            if (array_key_exists(Router\Post\Orgs::class, $this->router) === false) {
                                $this->router[Router\Post\Orgs::class] = new Router\Post\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Orgs::class]->CreateInvitation($params);
                        }
                    } elseif ($pathChunks[3] === 'migrations') {
                        if ($call === 'POST /orgs/{org}/migrations') {
                            $matched = true;
                            if (array_key_exists(Router\Post\Migrations::class, $this->router) === false) {
                                $this->router[Router\Post\Migrations::class] = new Router\Post\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Migrations::class]->StartForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'personal-access-token-requests') {
                        if ($call === 'POST /orgs/{org}/personal-access-token-requests') {
                            $matched = true;
                            if (array_key_exists(Router\Post\Orgs::class, $this->router) === false) {
                                $this->router[Router\Post\Orgs::class] = new Router\Post\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Orgs::class]->ReviewPatGrantRequestsInBulk($params);
                        }
                    } elseif ($pathChunks[3] === 'personal-access-tokens') {
                        if ($call === 'POST /orgs/{org}/personal-access-tokens') {
                            $matched = true;
                            if (array_key_exists(Router\Post\Orgs::class, $this->router) === false) {
                                $this->router[Router\Post\Orgs::class] = new Router\Post\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Orgs::class]->UpdatePatAccesses($params);
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($call === 'POST /orgs/{org}/projects') {
                            $matched = true;
                            if (array_key_exists(Router\Post\Projects::class, $this->router) === false) {
                                $this->router[Router\Post\Projects::class] = new Router\Post\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Projects::class]->CreateForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'POST /orgs/{org}/repos') {
                            $matched = true;
                            if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Repos::class]->CreateInOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'rulesets') {
                        if ($call === 'POST /orgs/{org}/rulesets') {
                            $matched = true;
                            if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Repos::class]->CreateOrgRuleset($params);
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($call === 'POST /orgs/{org}/teams') {
                            $matched = true;
                            if (array_key_exists(Router\Post\Teams::class, $this->router) === false) {
                                $this->router[Router\Post\Teams::class] = new Router\Post\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Teams::class]->Create($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === '{project_id}') {
                    if ($pathChunks[3] === 'columns') {
                        if ($call === 'POST /projects/{project_id}/columns') {
                            $matched = true;
                            if (array_key_exists(Router\Post\Projects::class, $this->router) === false) {
                                $this->router[Router\Post\Projects::class] = new Router\Post\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Projects::class]->CreateColumn($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'discussions') {
                        if ($call === 'POST /teams/{team_id}/discussions') {
                            $matched = true;
                            if (array_key_exists(Router\Post\Teams::class, $this->router) === false) {
                                $this->router[Router\Post\Teams::class] = new Router\Post\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Teams::class]->CreateDiscussionLegacy($params);
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
