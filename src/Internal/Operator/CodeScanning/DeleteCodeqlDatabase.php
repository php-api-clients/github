<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\CodeScanning;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class DeleteCodeqlDatabase
{
    public const OPERATION_ID    = 'code-scanning/delete-codeql-database';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/code-scanning/codeql/databases/{language}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Codeql\Databases\Language $hydrator)
    {
    }

    public function call(string $owner, string $repo, string $language): WithoutBody
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\CodeScanning\DeleteCodeqlDatabase($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $language);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): WithoutBody {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
