<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Get;

use ApiClients\Client\GitHub\Internal\Routers;
use ApiClients\Client\GitHub\Schema\CodeScanningVariantAnalysisRepoTask;
use InvalidArgumentException;

final class Eleven
{
    public function __construct(private Routers $routers)
    {
    }

    public function call(string $call, array $params, array $pathChunks): CodeScanningVariantAnalysisRepoTask
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'code-scanning') {
                            if ($pathChunks[5] === 'codeql') {
                                if ($pathChunks[6] === 'variant-analyses') {
                                    if ($pathChunks[7] === '{codeql_variant_analysis_id}') {
                                        if ($pathChunks[8] === 'repos') {
                                            if ($pathChunks[9] === '{repo_owner}') {
                                                if ($pathChunks[10] === '{repo_name}') {
                                                    if ($call === 'GET /repos/{owner}/{repo}/code-scanning/codeql/variant-analyses/{codeql_variant_analysis_id}/repos/{repo_owner}/{repo_name}') {
                                                        return $this->routers->internal🔀Router🔀Get🔀CodeScanning()->getVariantAnalysisRepoTask($params);
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
        }

        throw new InvalidArgumentException();
    }
}
