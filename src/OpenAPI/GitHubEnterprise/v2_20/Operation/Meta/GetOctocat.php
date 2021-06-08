<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Meta;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetOctocat
{
    private const OPERATION_ID = 'meta/get-octocat';
    /**The words to show in Octocat's speech bubble**/
    public string $s;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($s)
    {
        $this->s = $s;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{s}'], [$this->s], '/octocat?s={s}'));
    }

    function validateResponse(): void
    {
    }
}
