<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\AliasAbstract;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
abstract readonly class Abstractcbfbc5da410a0d57b65a397e98165a46
{
    public const SCHEMA_JSON = '{"title":"Label","required":["id","node_id","url","name","color","default","description"],"type":"object","properties":{"color":{"type":"string","description":"6-character hex code, without the leading #, identifying the color"},"default":{"type":"boolean"},"description":{"type":["string","null"]},"id":{"type":"integer"},"name":{"type":"string","description":"The name of the label."},"node_id":{"type":"string"},"url":{"type":"string","description":"URL for the label","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Label';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"color":"generated_color_null","default":false,"description":"generated_description_null","id":13,"name":"generated_name_null","node_id":"generated_node_id_null","url":"https:\\/\\/example.com\\/"}';
    /**
     * color: 6-character hex code, without the leading #, identifying the color
     * name: The name of the label.
     * url: URL for the label
     */
    public function __construct(public string $color, public bool $default, public ?string $description, public int $id, public string $name, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, public string $url)
    {
    }
}
