<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Label
{
    public const SCHEMA_JSON = '{"title":"Label","required":["id","node_id","url","name","description","color","default"],"type":"object","properties":{"id":{"type":"integer","format":"int64","examples":[208045946]},"node_id":{"type":"string","examples":["MDU6TGFiZWwyMDgwNDU5NDY="]},"url":{"type":"string","description":"URL for the label","format":"uri","examples":["https:\\/\\/api.github.com\\/repositories\\/42\\/labels\\/bug"]},"name":{"type":"string","description":"The name of the label.","examples":["bug"]},"description":{"type":["string","null"],"examples":["Something isn\'t working"]},"color":{"type":"string","description":"6-character hex code, without the leading #, identifying the color","examples":["FFFFFF"]},"default":{"type":"boolean","examples":[true]}},"description":"Color-coded labels help you categorize and filter your issues (just like labels in Gmail)."}';
    public const SCHEMA_TITLE = 'Label';
    public const SCHEMA_DESCRIPTION = 'Color-coded labels help you categorize and filter your issues (just like labels in Gmail).';
    public const SCHEMA_EXAMPLE_DATA = '{"id":208045946,"node_id":"MDU6TGFiZWwyMDgwNDU5NDY=","url":"https:\\/\\/api.github.com\\/repositories\\/42\\/labels\\/bug","name":"bug","description":"Something isn\'t working","color":"FFFFFF","default":true}';
    /**
     * url: URL for the label
     * name: The name of the label.
     * color: 6-character hex code, without the leading #, identifying the color
     */
    public function __construct(public int $id, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, public string $url, public string $name, public ?string $description, public string $color, public bool $default)
    {
    }
}
