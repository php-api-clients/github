<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\ChunkSize\Delete;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final class Cc4
{
    private array $router = array();
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\GitHub\Hydrators $hydrators;
    private readonly \React\Http\Browser $browser;
    private readonly \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\GitHub\Hydrators $hydrators, \React\Http\Browser $browser, \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrators = $hydrators;
        $this->browser = $browser;
        $this->authentication = $authentication;
    }
    public function call(string $call, array $params, array $pathChunks)
    {
        if ($pathChunks[0] == '') {
            if ($pathChunks[1] == 'app') {
                if ($pathChunks[2] == 'installations') {
                    if ($pathChunks[3] == '{installation_id}') {
                        if ($call == 'DELETE /app/installations/{installation_id}') {
                            if (\array_key_exists(Router\Delete\Apps::class, $this->router) == false) {
                                $this->router[Router\Delete\Apps::class] = new Router\Delete\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }
                            return $this->router[Router\Delete\Apps::class]->deleteInstallation($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'applications') {
                if ($pathChunks[2] == '{client_id}') {
                    if ($pathChunks[3] == 'grant') {
                        if ($call == 'DELETE /applications/{client_id}/grant') {
                            if (\array_key_exists(Router\Delete\Apps::class, $this->router) == false) {
                                $this->router[Router\Delete\Apps::class] = new Router\Delete\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }
                            return $this->router[Router\Delete\Apps::class]->deleteAuthorization($params);
                        }
                    } elseif ($pathChunks[3] == 'token') {
                        if ($call == 'DELETE /applications/{client_id}/token') {
                            if (\array_key_exists(Router\Delete\Apps::class, $this->router) == false) {
                                $this->router[Router\Delete\Apps::class] = new Router\Delete\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }
                            return $this->router[Router\Delete\Apps::class]->deleteToken($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'gists') {
                if ($pathChunks[2] == '{gist_id}') {
                    if ($pathChunks[3] == 'star') {
                        if ($call == 'DELETE /gists/{gist_id}/star') {
                            if (\array_key_exists(Router\Delete\Gists::class, $this->router) == false) {
                                $this->router[Router\Delete\Gists::class] = new Router\Delete\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }
                            return $this->router[Router\Delete\Gists::class]->unstar($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'orgs') {
                if ($pathChunks[2] == '{org}') {
                    if ($pathChunks[3] == 'interaction-limits') {
                        if ($call == 'DELETE /orgs/{org}/interaction-limits') {
                            if (\array_key_exists(Router\Delete\Interactions::class, $this->router) == false) {
                                $this->router[Router\Delete\Interactions::class] = new Router\Delete\Interactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }
                            return $this->router[Router\Delete\Interactions::class]->removeRestrictionsForOrg($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'projects') {
                if ($pathChunks[2] == 'columns') {
                    if ($pathChunks[3] == '{column_id}') {
                        if ($call == 'DELETE /projects/columns/{column_id}') {
                            if (\array_key_exists(Router\Delete\Projects::class, $this->router) == false) {
                                $this->router[Router\Delete\Projects::class] = new Router\Delete\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }
                            return $this->router[Router\Delete\Projects::class]->deleteColumn($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'repos') {
                if ($pathChunks[2] == '{owner}') {
                    if ($pathChunks[3] == '{repo}') {
                        if ($call == 'DELETE /repos/{owner}/{repo}') {
                            if (\array_key_exists(Router\Delete\Repos::class, $this->router) == false) {
                                $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }
                            return $this->router[Router\Delete\Repos::class]->delete($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'user') {
                if ($pathChunks[2] == 'blocks') {
                    if ($pathChunks[3] == '{username}') {
                        if ($call == 'DELETE /user/blocks/{username}') {
                            if (\array_key_exists(Router\Delete\Users::class, $this->router) == false) {
                                $this->router[Router\Delete\Users::class] = new Router\Delete\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }
                            return $this->router[Router\Delete\Users::class]->unblock($params);
                        }
                    }
                } elseif ($pathChunks[2] == 'codespaces') {
                    if ($pathChunks[3] == '{codespace_name}') {
                        if ($call == 'DELETE /user/codespaces/{codespace_name}') {
                            if (\array_key_exists(Router\Delete\Codespaces::class, $this->router) == false) {
                                $this->router[Router\Delete\Codespaces::class] = new Router\Delete\Codespaces($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }
                            return $this->router[Router\Delete\Codespaces::class]->deleteForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] == 'following') {
                    if ($pathChunks[3] == '{username}') {
                        if ($call == 'DELETE /user/following/{username}') {
                            if (\array_key_exists(Router\Delete\Users::class, $this->router) == false) {
                                $this->router[Router\Delete\Users::class] = new Router\Delete\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }
                            return $this->router[Router\Delete\Users::class]->unfollow($params);
                        }
                    }
                } elseif ($pathChunks[2] == 'gpg_keys') {
                    if ($pathChunks[3] == '{gpg_key_id}') {
                        if ($call == 'DELETE /user/gpg_keys/{gpg_key_id}') {
                            if (\array_key_exists(Router\Delete\Users::class, $this->router) == false) {
                                $this->router[Router\Delete\Users::class] = new Router\Delete\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }
                            return $this->router[Router\Delete\Users::class]->deleteGpgKeyForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] == 'keys') {
                    if ($pathChunks[3] == '{key_id}') {
                        if ($call == 'DELETE /user/keys/{key_id}') {
                            if (\array_key_exists(Router\Delete\Users::class, $this->router) == false) {
                                $this->router[Router\Delete\Users::class] = new Router\Delete\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }
                            return $this->router[Router\Delete\Users::class]->deletePublicSshKeyForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] == 'repository_invitations') {
                    if ($pathChunks[3] == '{invitation_id}') {
                        if ($call == 'DELETE /user/repository_invitations/{invitation_id}') {
                            if (\array_key_exists(Router\Delete\Repos::class, $this->router) == false) {
                                $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }
                            return $this->router[Router\Delete\Repos::class]->declineInvitationForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] == 'ssh_signing_keys') {
                    if ($pathChunks[3] == '{ssh_signing_key_id}') {
                        if ($call == 'DELETE /user/ssh_signing_keys/{ssh_signing_key_id}') {
                            if (\array_key_exists(Router\Delete\Users::class, $this->router) == false) {
                                $this->router[Router\Delete\Users::class] = new Router\Delete\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }
                            return $this->router[Router\Delete\Users::class]->deleteSshSigningKeyForAuthenticatedUser($params);
                        }
                    }
                }
            }
        }
        throw new \InvalidArgumentException();
    }
}
