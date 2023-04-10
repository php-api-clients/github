<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\AliasAbstract;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
abstract readonly class Abstract8249b116f3b5b0976b3d07c41d00d525
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"url":{"type":"string"},"html_url":{"type":"string"},"sha":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"generated_url_null","html_url":"generated_html_url_null","sha":"generated_sha_null"}';
    public function __construct(public ?string $url, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl, public ?string $sha)
    {
    }
}