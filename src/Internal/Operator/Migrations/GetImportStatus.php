<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Migrations;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\Import;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetImportStatus
{
    public const OPERATION_ID    = 'migrations/get-import-status';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/import';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Import $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo): Import|array
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Migrations\GetImportStatus($this->responseSchemaValidator, $this->hydrator, $owner, $repo);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Import|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
