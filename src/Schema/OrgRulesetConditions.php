<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class OrgRulesetConditions
{
    public const SCHEMA_JSON         = '{
    "title": "Organization ruleset conditions",
    "type": "object",
    "oneOf": [
        {
            "title": "repository_name_and_ref_name",
            "type": "object",
            "allOf": [
                {
                    "title": "Repository ruleset conditions for ref names",
                    "type": "object",
                    "properties": {
                        "ref_name": {
                            "type": "object",
                            "properties": {
                                "include": {
                                    "type": "array",
                                    "items": {
                                        "type": "string"
                                    },
                                    "description": "Array of ref names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~DEFAULT_BRANCH` to include the default branch or `~ALL` to include all branches."
                                },
                                "exclude": {
                                    "type": "array",
                                    "items": {
                                        "type": "string"
                                    },
                                    "description": "Array of ref names or patterns to exclude. The condition will not pass if any of these patterns match."
                                }
                            }
                        }
                    },
                    "description": "Parameters for a repository ruleset ref name condition"
                },
                {
                    "title": "Repository ruleset conditions for repository names",
                    "required": [
                        "repository_name"
                    ],
                    "type": "object",
                    "properties": {
                        "repository_name": {
                            "type": "object",
                            "properties": {
                                "include": {
                                    "type": "array",
                                    "items": {
                                        "type": "string"
                                    },
                                    "description": "Array of repository names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~ALL` to include all repositories."
                                },
                                "exclude": {
                                    "type": "array",
                                    "items": {
                                        "type": "string"
                                    },
                                    "description": "Array of repository names or patterns to exclude. The condition will not pass if any of these patterns match."
                                },
                                "protected": {
                                    "type": "boolean",
                                    "description": "Whether renaming of target repositories is prevented."
                                }
                            }
                        }
                    },
                    "description": "Parameters for a repository name condition"
                }
            ],
            "description": "Conditions to target repositories by name and refs by name"
        },
        {
            "title": "repository_id_and_ref_name",
            "type": "object",
            "allOf": [
                {
                    "title": "Repository ruleset conditions for ref names",
                    "type": "object",
                    "properties": {
                        "ref_name": {
                            "type": "object",
                            "properties": {
                                "include": {
                                    "type": "array",
                                    "items": {
                                        "type": "string"
                                    },
                                    "description": "Array of ref names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~DEFAULT_BRANCH` to include the default branch or `~ALL` to include all branches."
                                },
                                "exclude": {
                                    "type": "array",
                                    "items": {
                                        "type": "string"
                                    },
                                    "description": "Array of ref names or patterns to exclude. The condition will not pass if any of these patterns match."
                                }
                            }
                        }
                    },
                    "description": "Parameters for a repository ruleset ref name condition"
                },
                {
                    "title": "Repository ruleset conditions for repository IDs",
                    "required": [
                        "repository_id"
                    ],
                    "type": "object",
                    "properties": {
                        "repository_id": {
                            "type": "object",
                            "properties": {
                                "repository_ids": {
                                    "type": "array",
                                    "items": {
                                        "type": "integer"
                                    },
                                    "description": "The repository IDs that the ruleset applies to. One of these IDs must match for the condition to pass."
                                }
                            }
                        }
                    },
                    "description": "Parameters for a repository ID condition"
                }
            ],
            "description": "Conditions to target repositories by id and refs by name"
        },
        {
            "title": "repository_property_and_ref_name",
            "type": "object",
            "allOf": [
                {
                    "title": "Repository ruleset conditions for ref names",
                    "type": "object",
                    "properties": {
                        "ref_name": {
                            "type": "object",
                            "properties": {
                                "include": {
                                    "type": "array",
                                    "items": {
                                        "type": "string"
                                    },
                                    "description": "Array of ref names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~DEFAULT_BRANCH` to include the default branch or `~ALL` to include all branches."
                                },
                                "exclude": {
                                    "type": "array",
                                    "items": {
                                        "type": "string"
                                    },
                                    "description": "Array of ref names or patterns to exclude. The condition will not pass if any of these patterns match."
                                }
                            }
                        }
                    },
                    "description": "Parameters for a repository ruleset ref name condition"
                },
                {
                    "title": "Repository ruleset conditions for repository properties",
                    "required": [
                        "repository_property"
                    ],
                    "type": "object",
                    "properties": {
                        "repository_property": {
                            "type": "object",
                            "properties": {
                                "include": {
                                    "type": "array",
                                    "items": {
                                        "title": "Repository ruleset property targeting definition",
                                        "required": [
                                            "name",
                                            "property_values"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "name": {
                                                "type": "string",
                                                "description": "The name of the repository property to target"
                                            },
                                            "property_values": {
                                                "type": "array",
                                                "items": {
                                                    "type": "string"
                                                },
                                                "description": "The values to match for the repository property"
                                            },
                                            "source": {
                                                "enum": [
                                                    "custom",
                                                    "system"
                                                ],
                                                "type": "string",
                                                "description": "The source of the repository property. Defaults to \'custom\' if not specified."
                                            }
                                        },
                                        "description": "Parameters for a targeting a repository property"
                                    },
                                    "description": "The repository properties and values to include. All of these properties must match for the condition to pass."
                                },
                                "exclude": {
                                    "type": "array",
                                    "items": {
                                        "title": "Repository ruleset property targeting definition",
                                        "required": [
                                            "name",
                                            "property_values"
                                        ],
                                        "type": "object",
                                        "properties": {
                                            "name": {
                                                "type": "string",
                                                "description": "The name of the repository property to target"
                                            },
                                            "property_values": {
                                                "type": "array",
                                                "items": {
                                                    "type": "string"
                                                },
                                                "description": "The values to match for the repository property"
                                            },
                                            "source": {
                                                "enum": [
                                                    "custom",
                                                    "system"
                                                ],
                                                "type": "string",
                                                "description": "The source of the repository property. Defaults to \'custom\' if not specified."
                                            }
                                        },
                                        "description": "Parameters for a targeting a repository property"
                                    },
                                    "description": "The repository properties and values to exclude. The condition will not pass if any of these properties match."
                                }
                            }
                        }
                    },
                    "description": "Parameters for a repository property condition"
                }
            ],
            "description": "Conditions to target repositories by property and refs by name"
        }
    ],
    "description": "Conditions for an organization ruleset. The conditions object should contain both `repository_name` and `ref_name` properties or both `repository_id` and `ref_name` properties."
}';
    public const SCHEMA_TITLE        = 'Organization ruleset conditions';
    public const SCHEMA_DESCRIPTION  = 'Conditions for an organization ruleset. The conditions object should contain both `repository_name` and `ref_name` properties or both `repository_id` and `ref_name` properties.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
