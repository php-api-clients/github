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
final class Cc8
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
            if ($pathChunks[1] == 'repos') {
                if ($pathChunks[2] == '{owner}') {
                    if ($pathChunks[3] == '{repo}') {
                        if ($pathChunks[4] == 'branches') {
                            if ($pathChunks[5] == '{branch}') {
                                if ($pathChunks[6] == 'protection') {
                                    if ($pathChunks[7] == 'required_pull_request_reviews') {
                                        if ($call == 'PATCH /repos/{owner}/{repo}/branches/{branch}/protection/required_pull_request_reviews') {
                                            if (\array_key_exists(Router\Patch\Repos::class, $this->router) == false) {
                                                $this->router[Router\Patch\Repos::class] = new Router\Patch\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Patch\Repos::class]->updatePullRequestReviewProtection($params);
                                        }
                                    } elseif ($pathChunks[7] == 'required_status_checks') {
                                        if ($call == 'PATCH /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks') {
                                            if (\array_key_exists(Router\Patch\Repos::class, $this->router) == false) {
                                                $this->router[Router\Patch\Repos::class] = new Router\Patch\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Patch\Repos::class]->updateStatusCheckProtection($params);
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
