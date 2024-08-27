<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\SecurityAdvisories;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListGlobalAdvisories
{
    public const OPERATION_ID    = 'security-advisories/list-global-advisories';
    public const OPERATION_MATCH = 'GET /advisories';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Advisories $hydrator)
    {
    }

    /** @return iterable<int,Schema\GlobalAdvisory> */
    public function call(string $ghsaId, string $cveId, string $ecosystem, string $severity, $cwes, bool $isWithdrawn, $affects, string $published, string $updated, string $modified, string $epssPercentage, string $epssPercentile, string $before, string $after, string $type = 'reviewed', string $direction = 'desc', int $perPage = 30, string $sort = 'published'): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\SecurityAdvisories\ListGlobalAdvisories($this->responseSchemaValidator, $this->hydrator, $ghsaId, $cveId, $ecosystem, $severity, $cwes, $isWithdrawn, $affects, $published, $updated, $modified, $epssPercentage, $epssPercentile, $before, $after, $type, $direction, $perPage, $sort);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
