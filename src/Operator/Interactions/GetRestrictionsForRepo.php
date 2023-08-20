<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Interactions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\InteractionLimitResponse;
use ApiClients\Client\GitHub\Schema\Operations\Interactions\GetRestrictionsForRepo\Response\ApplicationJson\Ok\Application\Json\One;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetRestrictionsForRepo
{
    public const OPERATION_ID    = 'interactions/get-restrictions-for-repo';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/interaction-limits';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/interaction-limits';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\InteractionLimits $hydrator)
    {
    }

    /** @return (Schema\InteractionLimitResponse | Schema\Operations\Interactions\GetRestrictionsForRepo\Response\ApplicationJson\Ok\Application\Json\One) */
    public function call(string $owner, string $repo): InteractionLimitResponse|One|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Interactions\GetRestrictionsForRepo($this->responseSchemaValidator, $this->hydrator, $owner, $repo);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): InteractionLimitResponse|One|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
