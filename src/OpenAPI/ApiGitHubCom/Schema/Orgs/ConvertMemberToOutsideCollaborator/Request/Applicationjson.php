<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Orgs\ConvertMemberToOutsideCollaborator\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"async":{"type":"boolean","description":"When set to `true`, the request will be performed asynchronously. Returns a 202 status code when the job is successfully queued.","default":false}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * When set to `true`, the request will be performed asynchronously. Returns a 202 status code when the job is successfully queued.
     */
    public ?bool $async;

    public function __construct(bool $async)
    {
        $this->async = $async;
    }
}
