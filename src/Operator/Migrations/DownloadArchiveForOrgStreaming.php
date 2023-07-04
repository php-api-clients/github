<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\Migrations;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;
use Rx\Observable;

final readonly class DownloadArchiveForOrgStreaming
{
    public const OPERATION_ID    = 'migrations/download-archive-for-org';
    public const OPERATION_MATCH = 'STREAM /orgs/{org}/migrations/{migration_id}/archive';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/migrations/{migration_id}/archive';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Migrations\MigrationId\Archive $hydrator)
    {
    }

    /** @return PromiseInterface<Observable> **/
    public function call(string $org, int $migrationId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\Migrations\DownloadArchiveForOrgStreaming($this->responseSchemaValidator, $this->hydrator, $this->browser, $org, $migrationId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable {
            return $operation->createResponse($response);
        });
    }
}
