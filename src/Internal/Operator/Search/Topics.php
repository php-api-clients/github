<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Search;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\Operations\Search\Topics\Response\ApplicationJson\Ok;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class Topics
{
    public const OPERATION_ID    = 'search/topics';
    public const OPERATION_MATCH = 'GET /search/topics';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Search\Topics $hydrator)
    {
    }

    /** @return */
    public function call(string $q, int $perPage = 30, int $page = 1): Ok|WithoutBody
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Search\Topics($this->responseSchemaValidator, $this->hydrator, $q, $perPage, $page);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Ok|WithoutBody {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
