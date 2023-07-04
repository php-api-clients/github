<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\CodeScanning;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema\CodeScanningCodeqlDatabase;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetCodeqlDatabase
{
    public const OPERATION_ID    = 'code-scanning/get-codeql-database';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/code-scanning/codeql/databases/{language}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/code-scanning/codeql/databases/{language}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Codeql\Databases\Language $hydrator)
    {
    }

    /** @return PromiseInterface<(CodeScanningCodeqlDatabase|array)> **/
    public function call(string $owner, string $repo, string $language): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHub\Operation\CodeScanning\GetCodeqlDatabase($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $language);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CodeScanningCodeqlDatabase|array {
            return $operation->createResponse($response);
        });
    }
}
