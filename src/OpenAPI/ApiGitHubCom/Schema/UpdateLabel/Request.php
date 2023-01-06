<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UpdateLabel;

final class Request
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"new_name":{"type":"string","description":"The new name of the label. Emoji can be added to label names, using either native emoji or colon-style markup. For example, typing `:strawberry:` will render the emoji ![:strawberry:](https:\\/\\/github.githubassets.com\\/images\\/icons\\/emoji\\/unicode\\/1f353.png \\":strawberry:\\"). For a full list of available emoji and codes, see \\"[Emoji cheat sheet](https:\\/\\/github.com\\/ikatyang\\/emoji-cheat-sheet).\\""},"color":{"type":"string","description":"The [hexadecimal color code](http:\\/\\/www.color-hex.com\\/) for the label, without the leading `#`."},"description":{"type":"string","description":"A short description of the label. Must be 100 characters or fewer."}}}';
    public const SCHEMA_TITLE = 'UpdateLabel\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The new name of the label. Emoji can be added to label names, using either native emoji or colon-style markup. For example, typing `:strawberry:` will render the emoji ![:strawberry:](https://github.githubassets.com/images/icons/emoji/unicode/1f353.png ":strawberry:"). For a full list of available emoji and codes, see "[Emoji cheat sheet](https://github.com/ikatyang/emoji-cheat-sheet)."
     */
    private string $new_name;
    /**
     * The [hexadecimal color code](http://www.color-hex.com/) for the label, without the leading `#`.
     */
    private string $color;
    /**
     * A short description of the label. Must be 100 characters or fewer.
     */
    private string $description;
    /**
     * The new name of the label. Emoji can be added to label names, using either native emoji or colon-style markup. For example, typing `:strawberry:` will render the emoji ![:strawberry:](https://github.githubassets.com/images/icons/emoji/unicode/1f353.png ":strawberry:"). For a full list of available emoji and codes, see "[Emoji cheat sheet](https://github.com/ikatyang/emoji-cheat-sheet)."
     */
    public function new_name() : string
    {
        return $this->new_name;
    }
    /**
     * The [hexadecimal color code](http://www.color-hex.com/) for the label, without the leading `#`.
     */
    public function color() : string
    {
        return $this->color;
    }
    /**
     * A short description of the label. Must be 100 characters or fewer.
     */
    public function description() : string
    {
        return $this->description;
    }
}
