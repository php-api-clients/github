<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Migrations;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetLargeFiles
{
    public const OPERATION_ID    = 'migrations/get-large-files';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/import/large_files';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Import\LargeFiles $hydrator)
    {
    }

    /** @return Observable<Schema\PorterLargeFile> */
    public function call(string $owner, string $repo): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Migrations\GetLargeFiles($this->responseSchemaValidator, $this->hydrator, $owner, $repo);
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