<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListPublic
{
    private const OPERATION_ID = 'repos/list-public';
    /**A repository ID. Only return repositories with an ID greater than this ID.**/
    public int $since;
    /**Specifies the types of repositories to return. Can be one of `all` or `public`. Default: `public`. Note: For GitHub Enterprise Server and GitHub AE, this endpoint will only list repositories available to all users on the enterprise.**/
    public string $visibility;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($since, string $visibility = 'public')
    {
        $this->since      = $since;
        $this->visibility = $visibility;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{since}', '{visibility}'], [$this->since, $this->visibility], '/repositories?since={since}&visibility={visibility}'));
    }

    function validateResponse(): void
    {
    }
}
