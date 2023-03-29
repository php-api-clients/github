<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\ContentSubmodule;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Links
{
    public const SCHEMA_JSON = '{"required":["git","html","self"],"type":"object","properties":{"git":{"type":["string","null"],"format":"uri"},"html":{"type":["string","null"],"format":"uri"},"self":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"git":"https:\\/\\/example.com\\/","html":"https:\\/\\/example.com\\/","self":"https:\\/\\/example.com\\/"}';
    public function __construct(public ?string $git, public ?string $html, public string $self)
    {
    }
}
