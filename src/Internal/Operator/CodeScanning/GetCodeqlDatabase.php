<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\CodeScanning;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\CodeScanningCodeqlDatabase;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetCodeqlDatabase
{
    public const OPERATION_ID    = 'code-scanning/get-codeql-database';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/code-scanning/codeql/databases/{language}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Codeql\Databases\Language $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo, string $language): CodeScanningCodeqlDatabase|WithoutBody
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\CodeScanning\GetCodeqlDatabase($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $language);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CodeScanningCodeqlDatabase|WithoutBody {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
