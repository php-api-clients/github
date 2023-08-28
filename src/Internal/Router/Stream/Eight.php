<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Stream;

use ApiClients\Client\GitHub\Internal\Routers;
use InvalidArgumentException;

final class Eight
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return iterable<string> */
    public function call(string $call, array $params, array $pathChunks): iterable
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'actions') {
                            if ($pathChunks[5] === 'artifacts') {
                                if ($pathChunks[6] === '{artifact_id}') {
                                    if ($pathChunks[7] === '{archive_format}') {
                                        if ($call === 'STREAM /repos/{owner}/{repo}/actions/artifacts/{artifact_id}/{archive_format}') {
                                            return $this->routers->internal🔀Router🔀Stream🔀Actions()->downloadArtifactStreaming($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === 'jobs') {
                                if ($pathChunks[6] === '{job_id}') {
                                    if ($pathChunks[7] === 'logs') {
                                        if ($call === 'STREAM /repos/{owner}/{repo}/actions/jobs/{job_id}/logs') {
                                            return $this->routers->internal🔀Router🔀Stream🔀Actions()->downloadJobLogsForWorkflowRunStreaming($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === 'runs') {
                                if ($pathChunks[6] === '{run_id}') {
                                    if ($pathChunks[7] === 'logs') {
                                        if ($call === 'STREAM /repos/{owner}/{repo}/actions/runs/{run_id}/logs') {
                                            return $this->routers->internal🔀Router🔀Stream🔀Actions()->downloadWorkflowRunLogsStreaming($params);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
