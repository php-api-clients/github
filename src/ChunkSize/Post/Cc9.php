<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\ChunkSize\Post;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final class Cc9
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
                    if ($pathChunks[3] == 'packages') {
                        if ($pathChunks[4] == '{package_type}') {
                            if ($pathChunks[5] == '{package_name}') {
                                if ($pathChunks[6] == 'versions') {
                                    if ($pathChunks[7] == '{package_version_id}') {
                                        if ($pathChunks[8] == 'restore') {
                                            if ($call == 'POST /orgs/{org}/packages/{package_type}/{package_name}/versions/{package_version_id}/restore') {
                                                if (\array_key_exists(Router\Post\Packages::class, $this->router) == false) {
                                                    $this->router[Router\Post\Packages::class] = new Router\Post\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                }
                                                return $this->router[Router\Post\Packages::class]->restorePackageVersionForOrg($params);
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'repos') {
                if ($pathChunks[2] == '{owner}') {
                    if ($pathChunks[3] == '{repo}') {
                        if ($pathChunks[4] == 'branches') {
                            if ($pathChunks[5] == '{branch}') {
                                if ($pathChunks[6] == 'protection') {
                                    if ($pathChunks[7] == 'required_status_checks') {
                                        if ($pathChunks[8] == 'contexts') {
                                            if ($call == 'POST /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks/contexts') {
                                                if (\array_key_exists(Router\Post\Repos::class, $this->router) == false) {
                                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                }
                                                return $this->router[Router\Post\Repos::class]->addStatusCheckContexts($params);
                                            }
                                        }
                                    } elseif ($pathChunks[7] == 'restrictions') {
                                        if ($pathChunks[8] == 'apps') {
                                            if ($call == 'POST /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/apps') {
                                                if (\array_key_exists(Router\Post\Repos::class, $this->router) == false) {
                                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                }
                                                return $this->router[Router\Post\Repos::class]->addAppAccessRestrictions($params);
                                            }
                                        } elseif ($pathChunks[8] == 'teams') {
                                            if ($call == 'POST /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams') {
                                                if (\array_key_exists(Router\Post\Repos::class, $this->router) == false) {
                                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                }
                                                return $this->router[Router\Post\Repos::class]->addTeamAccessRestrictions($params);
                                            }
                                        } elseif ($pathChunks[8] == 'users') {
                                            if ($call == 'POST /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/users') {
                                                if (\array_key_exists(Router\Post\Repos::class, $this->router) == false) {
                                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                }
                                                return $this->router[Router\Post\Repos::class]->addUserAccessRestrictions($params);
                                            }
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'hooks') {
                            if ($pathChunks[5] == '{hook_id}') {
                                if ($pathChunks[6] == 'deliveries') {
                                    if ($pathChunks[7] == '{delivery_id}') {
                                        if ($pathChunks[8] == 'attempts') {
                                            if ($call == 'POST /repos/{owner}/{repo}/hooks/{hook_id}/deliveries/{delivery_id}/attempts') {
                                                if (\array_key_exists(Router\Post\Repos::class, $this->router) == false) {
                                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                }
                                                return $this->router[Router\Post\Repos::class]->redeliverWebhookDelivery($params);
                                            }
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'pulls') {
                            if ($pathChunks[5] == '{pull_number}') {
                                if ($pathChunks[6] == 'comments') {
                                    if ($pathChunks[7] == '{comment_id}') {
                                        if ($pathChunks[8] == 'replies') {
                                            if ($call == 'POST /repos/{owner}/{repo}/pulls/{pull_number}/comments/{comment_id}/replies') {
                                                if (\array_key_exists(Router\Post\Pulls::class, $this->router) == false) {
                                                    $this->router[Router\Post\Pulls::class] = new Router\Post\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                }
                                                return $this->router[Router\Post\Pulls::class]->createReplyForReviewComment($params);
                                            }
                                        }
                                    }
                                } elseif ($pathChunks[6] == 'reviews') {
                                    if ($pathChunks[7] == '{review_id}') {
                                        if ($pathChunks[8] == 'events') {
                                            if ($call == 'POST /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/events') {
                                                if (\array_key_exists(Router\Post\Pulls::class, $this->router) == false) {
                                                    $this->router[Router\Post\Pulls::class] = new Router\Post\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                }
                                                return $this->router[Router\Post\Pulls::class]->submitReview($params);
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'users') {
                if ($pathChunks[2] == '{username}') {
                    if ($pathChunks[3] == 'packages') {
                        if ($pathChunks[4] == '{package_type}') {
                            if ($pathChunks[5] == '{package_name}') {
                                if ($pathChunks[6] == 'versions') {
                                    if ($pathChunks[7] == '{package_version_id}') {
                                        if ($pathChunks[8] == 'restore') {
                                            if ($call == 'POST /users/{username}/packages/{package_type}/{package_name}/versions/{package_version_id}/restore') {
                                                if (\array_key_exists(Router\Post\Packages::class, $this->router) == false) {
                                                    $this->router[Router\Post\Packages::class] = new Router\Post\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                                }
                                                return $this->router[Router\Post\Packages::class]->restorePackageVersionForUser($params);
                                            }
                                        }
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
