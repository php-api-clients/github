<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Patch;

use ApiClients\Client\GitHub\Internal\Routers;
use ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview;
use ApiClients\Client\GitHub\Schema\StatusCheckPolicy;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Eight
{
    public function __construct(private Routers $routers)
    {
    }

    public function call(string $call, array $params, array $pathChunks): ProtectedBranchPullRequestReview|StatusCheckPolicy|WithoutBody
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'branches') {
                            if ($pathChunks[5] === '{branch}') {
                                if ($pathChunks[6] === 'protection') {
                                    if ($pathChunks[7] === 'required_pull_request_reviews') {
                                        if ($call === 'PATCH /repos/{owner}/{repo}/branches/{branch}/protection/required_pull_request_reviews') {
                                            return $this->routers->internal🔀Router🔀Patch🔀Repos()->updatePullRequestReviewProtection($params);
                                        }
                                    } elseif ($pathChunks[7] === 'required_status_checks') {
                                        if ($call === 'PATCH /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks') {
                                            return $this->routers->internal🔀Router🔀Patch🔀Repos()->updateStatusCheckProtection($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'environments') {
                            if ($pathChunks[5] === '{environment_name}') {
                                if ($pathChunks[6] === 'variables') {
                                    if ($pathChunks[7] === '{name}') {
                                        if ($call === 'PATCH /repos/{owner}/{repo}/environments/{environment_name}/variables/{name}') {
                                            return $this->routers->internal🔀Router🔀Patch🔀Actions()->updateEnvironmentVariable($params);
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
