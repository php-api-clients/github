<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\CodeScanning;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\CodeScanningDefaultSetupUpdateResponse;
use ApiClients\Client\GitHub\Schema\EmptyObject;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class UpdateDefaultSetup
{
    public const OPERATION_ID    = 'code-scanning/update-default-setup';
    public const OPERATION_MATCH = 'PATCH /repos/{owner}/{repo}/code-scanning/default-setup';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\DefaultSetup $hydrator)
    {
    }

    /** @return Schema\EmptyObject|Schema\CodeScanningDefaultSetupUpdateResponse */
    public function call(string $owner, string $repo, array $params): EmptyObject|CodeScanningDefaultSetupUpdateResponse|array
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\CodeScanning\UpdateDefaultSetup($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): EmptyObject|CodeScanningDefaultSetupUpdateResponse|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
