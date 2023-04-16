<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\ChunkSize\Stream;

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
                        if ($pathChunks[4] == 'actions') {
                            if ($pathChunks[5] == 'artifacts') {
                                if ($pathChunks[6] == '{artifact_id}') {
                                    if ($pathChunks[7] == '{archive_format}') {
                                        if ($call == 'STREAM /repos/{owner}/{repo}/actions/artifacts/{artifact_id}/{archive_format}') {
                                            if (\array_key_exists(Router\Get\Actions::class, $this->router) == false) {
                                                $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Get\Actions::class]->downloadArtifactStreaming($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] == 'jobs') {
                                if ($pathChunks[6] == '{job_id}') {
                                    if ($pathChunks[7] == 'logs') {
                                        if ($call == 'STREAM /repos/{owner}/{repo}/actions/jobs/{job_id}/logs') {
                                            if (\array_key_exists(Router\Get\Actions::class, $this->router) == false) {
                                                $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Get\Actions::class]->downloadJobLogsForWorkflowRunStreaming($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] == 'runs') {
                                if ($pathChunks[6] == '{run_id}') {
                                    if ($pathChunks[7] == 'logs') {
                                        if ($call == 'STREAM /repos/{owner}/{repo}/actions/runs/{run_id}/logs') {
                                            if (\array_key_exists(Router\Get\Actions::class, $this->router) == false) {
                                                $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Get\Actions::class]->downloadWorkflowRunLogsStreaming($params);
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
