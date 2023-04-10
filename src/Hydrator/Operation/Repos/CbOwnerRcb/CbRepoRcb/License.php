<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class License implements ObjectMapper
{
    private array $hydrationStack = [];
    public function __construct() {}

    /**
     * @template T of object
     * @param class-string<T> $className
     * @return T
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match($className) {
            'ApiClients\Client\Github\Schema\LicenseContent' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️LicenseContent($payload),
                'ApiClients\Client\Github\Schema\LicenseContent\Links' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️LicenseContent⚡️Links($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️LicenseContent(array $payload): \ApiClients\Client\Github\Schema\LicenseContent
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['path'] ?? null;

            if ($value === null) {
                $missingFields[] = 'path';
                goto after_path;
            }

            $properties['path'] = $value;

            after_path:

            $value = $payload['sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sha';
                goto after_sha;
            }

            $properties['sha'] = $value;

            after_sha:

            $value = $payload['size'] ?? null;

            if ($value === null) {
                $missingFields[] = 'size';
                goto after_size;
            }

            $properties['size'] = $value;

            after_size:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['htmlUrl'] = null;
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['git_url'] ?? null;

            if ($value === null) {
                $properties['gitUrl'] = null;
                goto after_gitUrl;
            }

            $properties['gitUrl'] = $value;

            after_gitUrl:

            $value = $payload['download_url'] ?? null;

            if ($value === null) {
                $properties['downloadUrl'] = null;
                goto after_downloadUrl;
            }

            $properties['downloadUrl'] = $value;

            after_downloadUrl:

            $value = $payload['type'] ?? null;

            if ($value === null) {
                $missingFields[] = 'type';
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['content'] ?? null;

            if ($value === null) {
                $missingFields[] = 'content';
                goto after_content;
            }

            $properties['content'] = $value;

            after_content:

            $value = $payload['encoding'] ?? null;

            if ($value === null) {
                $missingFields[] = 'encoding';
                goto after_encoding;
            }

            $properties['encoding'] = $value;

            after_encoding:

            $value = $payload['_links'] ?? null;

            if ($value === null) {
                $missingFields[] = '_links';
                goto after_links;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'links';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️LicenseContent⚡️Links($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['links'] = $value;

            after_links:

            $value = $payload['license'] ?? null;

            if ($value === null) {
                $properties['license'] = null;
                goto after_license;
            }

            $properties['license'] = $value;

            after_license:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\LicenseContent', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\LicenseContent::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\LicenseContent(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\LicenseContent', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️LicenseContent⚡️Links(array $payload): \ApiClients\Client\Github\Schema\LicenseContent\Links
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['git'] ?? null;

            if ($value === null) {
                $properties['git'] = null;
                goto after_git;
            }

            $properties['git'] = $value;

            after_git:

            $value = $payload['html'] ?? null;

            if ($value === null) {
                $properties['html'] = null;
                goto after_html;
            }

            $properties['html'] = $value;

            after_html:

            $value = $payload['self'] ?? null;

            if ($value === null) {
                $missingFields[] = 'self';
                goto after_self;
            }

            $properties['self'] = $value;

            after_self:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\LicenseContent\Links', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\LicenseContent\Links::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\LicenseContent\Links(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\LicenseContent\Links', $exception, stack: $this->hydrationStack);
        }
    }
    
    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new \LogicException('No type mapped for object of class: ' . get_class($object));
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, get_class($object));
    }

    /**
     * @template T
     *
     * @param T               $object
     * @param class-string<T> $className
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match($className) {
                'array' => $this->serializeValuearray($object),
            'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
            'DateTime' => $this->serializeValueDateTime($object),
            'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
            'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
            'ApiClients\Client\Github\Schema\LicenseContent' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️LicenseContent($object),
            'ApiClients\Client\Github\Schema\LicenseContent\Links' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️LicenseContent⚡️Links($object),
                default => throw new \LogicException('No serialization defined for $className'),
            };
        } catch (\Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }
    
    
    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️LicenseContent(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\LicenseContent);
        $result = [];

        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $path = $object->path;
        after_path:        $result['path'] = $path;

        
        $sha = $object->sha;
        after_sha:        $result['sha'] = $sha;

        
        $size = $object->size;
        after_size:        $result['size'] = $size;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $gitUrl = $object->gitUrl;

        if ($gitUrl === null) {
            goto after_gitUrl;
        }
        after_gitUrl:        $result['git_url'] = $gitUrl;

        
        $downloadUrl = $object->downloadUrl;

        if ($downloadUrl === null) {
            goto after_downloadUrl;
        }
        after_downloadUrl:        $result['download_url'] = $downloadUrl;

        
        $type = $object->type;
        after_type:        $result['type'] = $type;

        
        $content = $object->content;
        after_content:        $result['content'] = $content;

        
        $encoding = $object->encoding;
        after_encoding:        $result['encoding'] = $encoding;

        
        $links = $object->links;
        $links = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️LicenseContent⚡️Links($links);
        after_links:        $result['_links'] = $links;

        
        $license = $object->license;

        if ($license === null) {
            goto after_license;
        }
        after_license:        $result['license'] = $license;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️LicenseContent⚡️Links(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\LicenseContent\Links);
        $result = [];

        $git = $object->git;

        if ($git === null) {
            goto after_git;
        }
        after_git:        $result['git'] = $git;

        
        $html = $object->html;

        if ($html === null) {
            goto after_html;
        }
        after_html:        $result['html'] = $html;

        
        $self = $object->self;
        after_self:        $result['self'] = $self;


        return $result;
    }
    
    

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
     */
    public function hydrateObjects(string $className, iterable $payloads): IterableList
    {
        return new IterableList($this->doHydrateObjects($className, $payloads));
    }

    private function doHydrateObjects(string $className, iterable $payloads): Generator
    {
        foreach ($payloads as $index => $payload) {
            yield $index => $this->hydrateObject($className, $payload);
        }
    }

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
     */
    public function serializeObjects(iterable $payloads): IterableList
    {
        return new IterableList($this->doSerializeObjects($payloads));
    }

    private function doSerializeObjects(iterable $objects): Generator
    {
        foreach ($objects as $index => $object) {
            yield $index => $this->serializeObject($object);
        }
    }
}
