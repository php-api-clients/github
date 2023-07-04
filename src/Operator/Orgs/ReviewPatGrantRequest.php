<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Orgs;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ReviewPatGrantRequest
{
    public const OPERATION_ID    = 'orgs/review-pat-grant-request';
    public const OPERATION_MATCH = 'POST /orgs/{org}/personal-access-token-requests/{pat_request_id}';
    private const METHOD         = 'POST';
    private const PATH           = '/orgs/{org}/personal-access-token-requests/{pat_request_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests\PatRequestId $hydrator)
    {
    }

    /** @return PromiseInterface<array> **/
    public function call(string $org, int $patRequestId, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Orgs\ReviewPatGrantRequest($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $patRequestId);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
