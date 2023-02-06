<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UpdateAuthenticated\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"The new name of the user.","examples":["Omar Jahandar"]},"email":{"type":"string","description":"The publicly visible email address of the user.","examples":["omar@example.com"]},"blog":{"type":"string","description":"The new blog URL of the user.","examples":["blog.example.com"]},"twitter_username":{"type":["string","null"],"description":"The new Twitter username of the user.","examples":["therealomarj"]},"company":{"type":"string","description":"The new company of the user.","examples":["Acme corporation"]},"location":{"type":"string","description":"The new location of the user.","examples":["Berlin, Germany"]},"hireable":{"type":"boolean","description":"The new hiring availability of the user."},"bio":{"type":"string","description":"The new short biography of the user."}}}';
    public const SCHEMA_EXAMPLE = '{"name":"Omar Jahandar","email":"omar@example.com","blog":"blog.example.com","twitter_username":"therealomarj","company":"Acme corporation","location":"Berlin, Germany"}';
    public const SCHEMA_TITLE = 'UpdateAuthenticated\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The new name of the user.
     */
    public readonly string $name;
    /**
     * The publicly visible email address of the user.
     */
    public readonly string $email;
    /**
     * The new blog URL of the user.
     */
    public readonly string $blog;
    /**
     * The new Twitter username of the user.
     */
    public readonly ?string $twitter_username;
    /**
     * The new company of the user.
     */
    public readonly string $company;
    /**
     * The new location of the user.
     */
    public readonly string $location;
    /**
     * The new hiring availability of the user.
     */
    public readonly bool $hireable;
    /**
     * The new short biography of the user.
     */
    public readonly string $bio;
    public function __construct(string $name, string $email, string $blog, string $twitter_username, string $company, string $location, bool $hireable, string $bio)
    {
        $this->name = $name;
        $this->email = $email;
        $this->blog = $blog;
        $this->twitter_username = $twitter_username;
        $this->company = $company;
        $this->location = $location;
        $this->hireable = $hireable;
        $this->bio = $bio;
    }
}
