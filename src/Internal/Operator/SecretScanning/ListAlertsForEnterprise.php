<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\SecretScanning;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListAlertsForEnterprise
{
    public const OPERATION_ID    = 'secret-scanning/list-alerts-for-enterprise';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/secret-scanning/alerts';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Enterprises\Enterprise\SecretScanning\Alerts $hydrator)
    {
    }

    /** @return Observable<Schema\OrganizationSecretScanningAlert> */
    public function call(string $enterprise, string $state, string $secretType, string $resolution, string $before, string $after, string $validity, string $sort = 'created', string $direction = 'desc', int $perPage = 30, bool $isPubliclyLeaked = false, bool $isMultiRepo = false): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\SecretScanning\ListAlertsForEnterprise($this->responseSchemaValidator, $this->hydrator, $enterprise, $state, $secretType, $resolution, $before, $after, $validity, $sort, $direction, $perPage, $isPubliclyLeaked, $isMultiRepo);
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
