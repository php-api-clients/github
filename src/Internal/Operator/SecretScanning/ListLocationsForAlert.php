<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\SecretScanning;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListLocationsForAlert
{
    public const OPERATION_ID    = 'secret-scanning/list-locations-for-alert';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}/locations';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber\Locations $hydrator)
    {
    }

    /** @return iterable<int,Schema\SecretScanningLocation>|WithoutBody */
    public function call(string $owner, string $repo, int $alertNumber, int $page = 1, int $perPage = 30): iterable|WithoutBody
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\SecretScanning\ListLocationsForAlert($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $alertNumber, $page, $perPage);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable|WithoutBody {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
