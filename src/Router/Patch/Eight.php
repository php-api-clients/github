<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Patch;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview;
use ApiClients\Client\GitHub\Schema\StatusCheckPolicy;
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

    public function call(string $call, array $params, array $pathChunks): ProtectedBranchPullRequestReview|StatusCheckPolicy|array
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'branches') {
                            if ($pathChunks[5] === '{branch}') {
                                if ($pathChunks[6] === 'protection') {
                                    if ($pathChunks[7] === 'required_pull_request_reviews') {
                                        if ($call === 'PATCH /repos/{owner}/{repo}/branches/{branch}/protection/required_pull_request_reviews') {
                                            $matched = true;
                                            if (array_key_exists(Router\Patch\Repos::class, $this->router) === false) {
                                                $this->router[Router\Patch\Repos::class] = new Router\Patch\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Patch\Repos::class]->updatePullRequestReviewProtection($params);
                                        }
                                    } elseif ($pathChunks[7] === 'required_status_checks') {
                                        if ($call === 'PATCH /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks') {
                                            $matched = true;
                                            if (array_key_exists(Router\Patch\Repos::class, $this->router) === false) {
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

        if ($matched === false) {
            throw new InvalidArgumentException();
        }
    }
}
