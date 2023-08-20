<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Pulls;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\PullRequestReview;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class SubmitReview
{
    public const OPERATION_ID    = 'pulls/submit-review';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/events';
    private const METHOD         = 'POST';
    private const PATH           = '/repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/events';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Events $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo, int $pullNumber, int $reviewId, array $params): PullRequestReview|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Pulls\SubmitReview($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $pullNumber, $reviewId);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PullRequestReview|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
