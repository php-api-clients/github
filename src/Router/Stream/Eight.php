<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Stream;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Eight
{
    private array $router = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return Observable<string> */
    public function call(string $call, array $params, array $pathChunks): iterable
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'actions') {
                            if ($pathChunks[5] === 'artifacts') {
                                if ($pathChunks[6] === '{artifact_id}') {
                                    if ($pathChunks[7] === '{archive_format}') {
                                        if ($call === 'STREAM /repos/{owner}/{repo}/actions/artifacts/{artifact_id}/{archive_format}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                                $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\Actions::class]->downloadArtifactStreaming($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === 'jobs') {
                                if ($pathChunks[6] === '{job_id}') {
                                    if ($pathChunks[7] === 'logs') {
                                        if ($call === 'STREAM /repos/{owner}/{repo}/actions/jobs/{job_id}/logs') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                                $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Get\Actions::class]->downloadJobLogsForWorkflowRunStreaming($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === 'runs') {
                                if ($pathChunks[6] === '{run_id}') {
                                    if ($pathChunks[7] === 'logs') {
                                        if ($call === 'STREAM /repos/{owner}/{repo}/actions/runs/{run_id}/logs') {
                                            $matched = true;
                                            if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
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

        if ($matched === false) {
            throw new InvalidArgumentException();
        }
    }
}
