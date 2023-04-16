<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\ChunkSize\Patch;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final class Cc7
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
            if ($pathChunks[1] == 'orgs') {
                if ($pathChunks[2] == '{org}') {
                    if ($pathChunks[3] == 'teams') {
                        if ($pathChunks[4] == '{team_slug}') {
                            if ($pathChunks[5] == 'discussions') {
                                if ($pathChunks[6] == '{discussion_number}') {
                                    if ($call == 'PATCH /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}') {
                                        if (\array_key_exists(Router\Patch\Teams::class, $this->router) == false) {
                                            $this->router[Router\Patch\Teams::class] = new Router\Patch\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Patch\Teams::class]->updateDiscussionInOrg($params);
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'repos') {
                if ($pathChunks[2] == '{owner}') {
                    if ($pathChunks[3] == '{repo}') {
                        if ($pathChunks[4] == 'actions') {
                            if ($pathChunks[5] == 'variables') {
                                if ($pathChunks[6] == '{name}') {
                                    if ($call == 'PATCH /repos/{owner}/{repo}/actions/variables/{name}') {
                                        if (\array_key_exists(Router\Patch\Actions::class, $this->router) == false) {
                                            $this->router[Router\Patch\Actions::class] = new Router\Patch\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Patch\Actions::class]->updateRepoVariable($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'code-scanning') {
                            if ($pathChunks[5] == 'alerts') {
                                if ($pathChunks[6] == '{alert_number}') {
                                    if ($call == 'PATCH /repos/{owner}/{repo}/code-scanning/alerts/{alert_number}') {
                                        if (\array_key_exists(Router\Patch\CodeScanning::class, $this->router) == false) {
                                            $this->router[Router\Patch\CodeScanning::class] = new Router\Patch\CodeScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Patch\CodeScanning::class]->updateAlert($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'dependabot') {
                            if ($pathChunks[5] == 'alerts') {
                                if ($pathChunks[6] == '{alert_number}') {
                                    if ($call == 'PATCH /repos/{owner}/{repo}/dependabot/alerts/{alert_number}') {
                                        if (\array_key_exists(Router\Patch\Dependabot::class, $this->router) == false) {
                                            $this->router[Router\Patch\Dependabot::class] = new Router\Patch\Dependabot($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Patch\Dependabot::class]->updateAlert($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'git') {
                            if ($pathChunks[5] == 'refs') {
                                if ($pathChunks[6] == '{ref}') {
                                    if ($call == 'PATCH /repos/{owner}/{repo}/git/refs/{ref}') {
                                        if (\array_key_exists(Router\Patch\Git::class, $this->router) == false) {
                                            $this->router[Router\Patch\Git::class] = new Router\Patch\Git($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Patch\Git::class]->updateRef($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'hooks') {
                            if ($pathChunks[5] == '{hook_id}') {
                                if ($pathChunks[6] == 'config') {
                                    if ($call == 'PATCH /repos/{owner}/{repo}/hooks/{hook_id}/config') {
                                        if (\array_key_exists(Router\Patch\Repos::class, $this->router) == false) {
                                            $this->router[Router\Patch\Repos::class] = new Router\Patch\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Patch\Repos::class]->updateWebhookConfigForRepo($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'import') {
                            if ($pathChunks[5] == 'authors') {
                                if ($pathChunks[6] == '{author_id}') {
                                    if ($call == 'PATCH /repos/{owner}/{repo}/import/authors/{author_id}') {
                                        if (\array_key_exists(Router\Patch\Migrations::class, $this->router) == false) {
                                            $this->router[Router\Patch\Migrations::class] = new Router\Patch\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Patch\Migrations::class]->mapCommitAuthor($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'issues') {
                            if ($pathChunks[5] == 'comments') {
                                if ($pathChunks[6] == '{comment_id}') {
                                    if ($call == 'PATCH /repos/{owner}/{repo}/issues/comments/{comment_id}') {
                                        if (\array_key_exists(Router\Patch\Issues::class, $this->router) == false) {
                                            $this->router[Router\Patch\Issues::class] = new Router\Patch\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Patch\Issues::class]->updateComment($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'pulls') {
                            if ($pathChunks[5] == 'comments') {
                                if ($pathChunks[6] == '{comment_id}') {
                                    if ($call == 'PATCH /repos/{owner}/{repo}/pulls/comments/{comment_id}') {
                                        if (\array_key_exists(Router\Patch\Pulls::class, $this->router) == false) {
                                            $this->router[Router\Patch\Pulls::class] = new Router\Patch\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Patch\Pulls::class]->updateReviewComment($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'releases') {
                            if ($pathChunks[5] == 'assets') {
                                if ($pathChunks[6] == '{asset_id}') {
                                    if ($call == 'PATCH /repos/{owner}/{repo}/releases/assets/{asset_id}') {
                                        if (\array_key_exists(Router\Patch\Repos::class, $this->router) == false) {
                                            $this->router[Router\Patch\Repos::class] = new Router\Patch\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Patch\Repos::class]->updateReleaseAsset($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'secret-scanning') {
                            if ($pathChunks[5] == 'alerts') {
                                if ($pathChunks[6] == '{alert_number}') {
                                    if ($call == 'PATCH /repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}') {
                                        if (\array_key_exists(Router\Patch\SecretScanning::class, $this->router) == false) {
                                            $this->router[Router\Patch\SecretScanning::class] = new Router\Patch\SecretScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Patch\SecretScanning::class]->updateAlert($params);
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'repositories') {
                if ($pathChunks[2] == '{repository_id}') {
                    if ($pathChunks[3] == 'environments') {
                        if ($pathChunks[4] == '{environment_name}') {
                            if ($pathChunks[5] == 'variables') {
                                if ($pathChunks[6] == '{name}') {
                                    if ($call == 'PATCH /repositories/{repository_id}/environments/{environment_name}/variables/{name}') {
                                        if (\array_key_exists(Router\Patch\Actions::class, $this->router) == false) {
                                            $this->router[Router\Patch\Actions::class] = new Router\Patch\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Patch\Actions::class]->updateEnvironmentVariable($params);
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'teams') {
                if ($pathChunks[2] == '{team_id}') {
                    if ($pathChunks[3] == 'discussions') {
                        if ($pathChunks[4] == '{discussion_number}') {
                            if ($pathChunks[5] == 'comments') {
                                if ($pathChunks[6] == '{comment_number}') {
                                    if ($call == 'PATCH /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}') {
                                        if (\array_key_exists(Router\Patch\Teams::class, $this->router) == false) {
                                            $this->router[Router\Patch\Teams::class] = new Router\Patch\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Patch\Teams::class]->updateDiscussionCommentLegacy($params);
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        throw new \InvalidArgumentException();
    }
}
