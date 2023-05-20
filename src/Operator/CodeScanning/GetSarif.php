<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\CodeScanning;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\CodeScanningSarifsStatus;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetSarif
{
    public const OPERATION_ID    = 'code-scanning/get-sarif';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/code-scanning/sarifs/{sarif_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/code-scanning/sarifs/{sarif_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Sarifs\SarifId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<(CodeScanningSarifsStatus|array)>
     **/
    public function call(string $owner, string $repo, string $sarifId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\CodeScanning\GetSarif($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $sarifId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CodeScanningSarifsStatus|array {
            return $operation->createResponse($response);
        });
    }
}
