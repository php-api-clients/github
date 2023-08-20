<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operator\CodeScanning;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\CodeScanningSarifsReceipt;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class UploadSarif
{
    public const OPERATION_ID    = 'code-scanning/upload-sarif';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/code-scanning/sarifs';
    private const METHOD         = 'POST';
    private const PATH           = '/repos/{owner}/{repo}/code-scanning/sarifs';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Sarifs $hydrator)
    {
    }

    /** @return (Schema\CodeScanningSarifsReceipt | array{code: int}) */
    public function call(string $owner, string $repo, array $params): CodeScanningSarifsReceipt|array
    {
        $operation = new \ApiClients\Client\GitHub\Operation\CodeScanning\UploadSarif($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): CodeScanningSarifsReceipt|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
