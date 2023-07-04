<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\CommunityProfile;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetCommunityProfileMetrics
{
    public const OPERATION_ID    = 'repos/get-community-profile-metrics';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/community/profile';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/community/profile';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Community\Profile $hydrator)
    {
    }

    /** @return PromiseInterface<CommunityProfile> **/
    public function call(string $owner, string $repo): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Repos\GetCommunityProfileMetrics($this->responseSchemaValidator, $this->hydrator, $owner, $repo);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CommunityProfile {
            return $operation->createResponse($response);
        });
    }
}
