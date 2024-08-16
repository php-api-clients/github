<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\SecretScanning;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\SecretScanningPushProtectionBypass;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class CreatePushProtectionBypass
{
    public const OPERATION_ID    = 'secret-scanning/create-push-protection-bypass';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/secret-scanning/push-protection-bypasses';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\SecretScanning\PushProtectionBypasses $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo, array $params): SecretScanningPushProtectionBypass|WithoutBody
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\SecretScanning\CreatePushProtectionBypass($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): SecretScanningPushProtectionBypass|WithoutBody {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
