<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class UpdatePullRequestReviewProtection
{
    public const OPERATION_ID    = 'repos/update-pull-request-review-protection';
    public const OPERATION_MATCH = 'PATCH /repos/{owner}/{repo}/branches/{branch}/protection/required_pull_request_reviews';
    private const METHOD         = 'PATCH';
    private const PATH           = '/repos/{owner}/{repo}/branches/{branch}/protection/required_pull_request_reviews';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredPullRequestReviews $hydrator)
    {
    }

    /**
     * @return PromiseInterface<ProtectedBranchPullRequestReview>
     **/
    public function call(string $owner, string $repo, string $branch, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\UpdatePullRequestReviewProtection($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $branch);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ProtectedBranchPullRequestReview {
            return $operation->createResponse($response);
        });
    }
}
