<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Patch;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\Schema\Authorization;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\Codespace;
use ApiClients\Client\GitHub\Schema\FullRepository;
use ApiClients\Client\GitHub\Schema\ProjectColumn;
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

    /** @return |array{code: int}|(Schema\ProjectColumn|array{code: int})|(iterable<Schema\Email> */
    public function call(string $call, array $params, array $pathChunks): WebhookConfig|Authorization|ProjectColumn|FullRepository|BasicError|Codespace|iterable
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'hook') {
                    if ($pathChunks[3] === 'config') {
                        if ($call === 'PATCH /app/hook/config') {
                            $matched = true;
                            if (array_key_exists(Router\Patch\Apps::class, $this->router) === false) {
                                $this->router[Router\Patch\Apps::class] = new Router\Patch\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Patch\Apps::class]->updateWebhookConfigForApp($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'applications') {
                if ($pathChunks[2] === '{client_id}') {
                    if ($pathChunks[3] === 'token') {
                        if ($call === 'PATCH /applications/{client_id}/token') {
                            $matched = true;
                            if (array_key_exists(Router\Patch\Apps::class, $this->router) === false) {
                                $this->router[Router\Patch\Apps::class] = new Router\Patch\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Patch\Apps::class]->resetToken($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'notifications') {
                if ($pathChunks[2] === 'threads') {
                    if ($pathChunks[3] === '{thread_id}') {
                        if ($call === 'PATCH /notifications/threads/{thread_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Patch\Activity::class, $this->router) === false) {
                                $this->router[Router\Patch\Activity::class] = new Router\Patch\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Patch\Activity::class]->markThreadAsRead($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === '{column_id}') {
                        if ($call === 'PATCH /projects/columns/{column_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Patch\Projects::class, $this->router) === false) {
                                $this->router[Router\Patch\Projects::class] = new Router\Patch\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Patch\Projects::class]->updateColumn($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($call === 'PATCH /repos/{owner}/{repo}') {
                            $matched = true;
                            if (array_key_exists(Router\Patch\Repos::class, $this->router) === false) {
                                $this->router[Router\Patch\Repos::class] = new Router\Patch\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Patch\Repos::class]->update($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'codespaces') {
                    if ($pathChunks[3] === '{codespace_name}') {
                        if ($call === 'PATCH /user/codespaces/{codespace_name}') {
                            $matched = true;
                            if (array_key_exists(Router\Patch\Codespaces::class, $this->router) === false) {
                                $this->router[Router\Patch\Codespaces::class] = new Router\Patch\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Patch\Codespaces::class]->updateForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'email') {
                    if ($pathChunks[3] === 'visibility') {
                        if ($call === 'PATCH /user/email/visibility') {
                            $matched = true;
                            if (array_key_exists(Router\Patch\Users::class, $this->router) === false) {
                                $this->router[Router\Patch\Users::class] = new Router\Patch\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Patch\Users::class]->setPrimaryEmailVisibilityForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'repository_invitations') {
                    if ($pathChunks[3] === '{invitation_id}') {
                        if ($call === 'PATCH /user/repository_invitations/{invitation_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Patch\Repos::class, $this->router) === false) {
                                $this->router[Router\Patch\Repos::class] = new Router\Patch\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Patch\Repos::class]->acceptInvitationForAuthenticatedUser($params);
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
