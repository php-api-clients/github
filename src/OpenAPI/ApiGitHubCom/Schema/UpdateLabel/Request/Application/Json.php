<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UpdateLabel\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"new_name":{"type":"string","description":"The new name of the label. Emoji can be added to label names, using either native emoji or colon-style markup. For example, typing `:strawberry:` will render the emoji ![:strawberry:](https:\\/\\/github.githubassets.com\\/images\\/icons\\/emoji\\/unicode\\/1f353.png \\":strawberry:\\"). For a full list of available emoji and codes, see \\"[Emoji cheat sheet](https:\\/\\/github.com\\/ikatyang\\/emoji-cheat-sheet).\\""},"color":{"type":"string","description":"The [hexadecimal color code](http:\\/\\/www.color-hex.com\\/) for the label, without the leading `#`."},"description":{"type":"string","description":"A short description of the label. Must be 100 characters or fewer."}}}';
    public const SCHEMA_TITLE = 'UpdateLabel\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The new name of the label. Emoji can be added to label names, using either native emoji or colon-style markup. For example, typing `:strawberry:` will render the emoji ![:strawberry:](https://github.githubassets.com/images/icons/emoji/unicode/1f353.png ":strawberry:"). For a full list of available emoji and codes, see "[Emoji cheat sheet](https://github.com/ikatyang/emoji-cheat-sheet)."
     */
    public readonly string $new_name;
    /**
     * The [hexadecimal color code](http://www.color-hex.com/) for the label, without the leading `#`.
     */
    public readonly string $color;
    /**
     * A short description of the label. Must be 100 characters or fewer.
     */
    public readonly string $description;
    public function __construct(string $new_name, string $color, string $description)
    {
        $this->new_name = $new_name;
        $this->color = $color;
        $this->description = $description;
    }
}
