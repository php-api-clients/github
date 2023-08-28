<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Orgs;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ReviewPatGrantRequest
{
    public const OPERATION_ID    = 'orgs/review-pat-grant-request';
    public const OPERATION_MATCH = 'POST /orgs/{org}/personal-access-token-requests/{pat_request_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests\PatRequestId $hydrator)
    {
    }

    /** @return array{code:int} */
    public function call(string $org, int $patRequestId, array $params): array
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Orgs\ReviewPatGrantRequest($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $patRequestId);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
