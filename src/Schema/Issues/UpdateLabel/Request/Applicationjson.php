<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Issues\UpdateLabel\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"new_name":{"type":"string","description":"The new name of the label. Emoji can be added to label names, using either native emoji or colon-style markup. For example, typing `:strawberry:` will render the emoji ![:strawberry:](https:\\/\\/github.githubassets.com\\/images\\/icons\\/emoji\\/unicode\\/1f353.png \\":strawberry:\\"). For a full list of available emoji and codes, see \\"[Emoji cheat sheet](https:\\/\\/github.com\\/ikatyang\\/emoji-cheat-sheet).\\""},"color":{"type":"string","description":"The [hexadecimal color code](http:\\/\\/www.color-hex.com\\/) for the label, without the leading `#`."},"description":{"type":"string","description":"A short description of the label. Must be 100 characters or fewer."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"new_name":"generated_new_name_null","color":"generated_color_null","description":"generated_description_null"}';
    /**
     * newName: The new name of the label. Emoji can be added to label names, using either native emoji or colon-style markup. For example, typing `:strawberry:` will render the emoji ![:strawberry:](https://github.githubassets.com/images/icons/emoji/unicode/1f353.png ":strawberry:"). For a full list of available emoji and codes, see "[Emoji cheat sheet](https://github.com/ikatyang/emoji-cheat-sheet)."
     * color: The [hexadecimal color code](http://www.color-hex.com/) for the label, without the leading `#`.
     * description: A short description of the label. Must be 100 characters or fewer.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('new_name')] public ?string $newName, public ?string $color, public ?string $description)
    {
    }
}
