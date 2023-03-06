<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Discussion;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Category
{
    public const SCHEMA_JSON = '{"required":["id","repository_id","emoji","name","description","created_at","updated_at","slug","is_answerable"],"type":"object","properties":{"created_at":{"type":"string","format":"date-time"},"description":{"type":"string"},"emoji":{"type":"string"},"id":{"type":"integer"},"is_answerable":{"type":"boolean"},"name":{"type":"string"},"node_id":{"type":"string"},"repository_id":{"type":"integer"},"slug":{"type":"string"},"updated_at":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"created_at":"generated_created_at","description":"generated_description","emoji":"generated_emoji","id":13,"is_answerable":false,"name":"generated_name","node_id":"generated_node_id","repository_id":13,"slug":"generated_slug","updated_at":"generated_updated_at"}';
    public function __construct(public ?string $created_at, public ?string $description, public ?string $emoji, public ?int $id, public ?bool $is_answerable, public ?string $name, public string $node_id, public ?int $repository_id, public ?string $slug, public ?string $updated_at)
    {
    }
}
