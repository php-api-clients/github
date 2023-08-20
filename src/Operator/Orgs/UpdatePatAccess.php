<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Orgs;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class UpdatePatAccess
{
    public const OPERATION_ID    = 'orgs/update-pat-access';
    public const OPERATION_MATCH = 'POST /orgs/{org}/personal-access-tokens/{pat_id}';
    private const METHOD         = 'POST';
    private const PATH           = '/orgs/{org}/personal-access-tokens/{pat_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\PersonalAccessTokens\PatId $hydrator)
    {
    }

    /** @return array{code: int} */
    public function call(string $org, int $patId, array $params): array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Orgs\UpdatePatAccess($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $patId);
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
