<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Actor
{
    public const SCHEMA_JSON = '{"title":"Actor","required":["id","login","gravatar_id","url","avatar_url"],"type":"object","properties":{"id":{"type":"integer"},"login":{"type":"string"},"display_login":{"type":"string"},"gravatar_id":{"type":["string","null"]},"url":{"type":"string","format":"uri"},"avatar_url":{"type":"string","format":"uri"}},"description":"Actor"}';
    public const SCHEMA_TITLE = 'Actor';
    public const SCHEMA_DESCRIPTION = 'Actor';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"login":"generated_login","display_login":"generated_display_login","gravatar_id":"generated_gravatar_id","url":"generated_url","avatar_url":"generated_avatar_url"}';
    public function __construct(public ?int $id, public ?string $login, public string $display_login, public ?string $gravatar_id, public ?string $url, public ?string $avatar_url)
    {
    }
}
