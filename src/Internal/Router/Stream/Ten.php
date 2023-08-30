<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Stream;

use ApiClients\Client\GitHub\Internal\Routers;
use InvalidArgumentException;

final class Ten
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return Observable<string> */
    public function call(string $call, array $params, array $pathChunks): iterable
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'actions') {
                            if ($pathChunks[5] === 'runs') {
                                if ($pathChunks[6] === '{run_id}') {
                                    if ($pathChunks[7] === 'attempts') {
                                        if ($pathChunks[8] === '{attempt_number}') {
                                            if ($pathChunks[9] === 'logs') {
                                                if ($call === 'STREAM /repos/{owner}/{repo}/actions/runs/{run_id}/attempts/{attempt_number}/logs') {
                                                    return $this->routers->internal🔀Router🔀Stream🔀Actions()->downloadWorkflowRunAttemptLogsStreaming($params);
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
        }

        throw new InvalidArgumentException();
    }
}
