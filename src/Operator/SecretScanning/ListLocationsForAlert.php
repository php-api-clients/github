<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\SecretScanning;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class ListLocationsForAlert
{
    public const OPERATION_ID    = 'secret-scanning/list-locations-for-alert';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}/locations';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}/locations';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber\Locations $hydrator)
    {
    }

    /**
     * @return PromiseInterface<array>
     **/
    public function call(string $owner, string $repo, int $alertNumber, int $page = 1, int $perPage = 30): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\SecretScanning\ListLocationsForAlert($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $alertNumber, $page, $perPage);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        });
    }
}
