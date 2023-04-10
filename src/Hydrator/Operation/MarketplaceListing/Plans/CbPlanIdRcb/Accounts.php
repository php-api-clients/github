<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\MarketplaceListing\Plans\CbPlanIdRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Accounts implements ObjectMapper
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
            'ApiClients\Client\Github\Schema\MarketplacePurchase' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplacePurchase($payload),
                'ApiClients\Client\Github\Schema\MarketplacePurchase\MarketplacePendingChange' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePendingChange($payload),
                'ApiClients\Client\Github\Schema\MarketplaceListingPlan' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplaceListingPlan($payload),
                'ApiClients\Client\Github\Schema\MarketplacePurchase\MarketplacePurchase' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePurchase($payload),
                'ApiClients\Client\Github\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\Github\Schema\ValidationError' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError($payload),
                'ApiClients\Client\Github\Schema\ValidationError\Errors' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError⚡️Errors($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplacePurchase(array $payload): \ApiClients\Client\Github\Schema\MarketplacePurchase
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['type'] ?? null;

            if ($value === null) {
                $missingFields[] = 'type';
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['login'] ?? null;

            if ($value === null) {
                $missingFields[] = 'login';
                goto after_login;
            }

            $properties['login'] = $value;

            after_login:

            $value = $payload['organization_billing_email'] ?? null;

            if ($value === null) {
                $properties['organizationBillingEmail'] = null;
                goto after_organizationBillingEmail;
            }

            $properties['organizationBillingEmail'] = $value;

            after_organizationBillingEmail:

            $value = $payload['email'] ?? null;

            if ($value === null) {
                $properties['email'] = null;
                goto after_email;
            }

            $properties['email'] = $value;

            after_email:

            $value = $payload['marketplace_pending_change'] ?? null;

            if ($value === null) {
                $properties['marketplacePendingChange'] = null;
                goto after_marketplacePendingChange;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'marketplacePendingChange';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePendingChange($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['marketplacePendingChange'] = $value;

            after_marketplacePendingChange:

            $value = $payload['marketplace_purchase'] ?? null;

            if ($value === null) {
                $missingFields[] = 'marketplace_purchase';
                goto after_marketplacePurchase;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'marketplacePurchase';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePurchase($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['marketplacePurchase'] = $value;

            after_marketplacePurchase:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\MarketplacePurchase', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\MarketplacePurchase::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\MarketplacePurchase(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\MarketplacePurchase', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePendingChange(array $payload): \ApiClients\Client\Github\Schema\MarketplacePurchase\MarketplacePendingChange
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['is_installed'] ?? null;

            if ($value === null) {
                $properties['isInstalled'] = null;
                goto after_isInstalled;
            }

            $properties['isInstalled'] = $value;

            after_isInstalled:

            $value = $payload['effective_date'] ?? null;

            if ($value === null) {
                $properties['effectiveDate'] = null;
                goto after_effectiveDate;
            }

            $properties['effectiveDate'] = $value;

            after_effectiveDate:

            $value = $payload['unit_count'] ?? null;

            if ($value === null) {
                $properties['unitCount'] = null;
                goto after_unitCount;
            }

            $properties['unitCount'] = $value;

            after_unitCount:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $properties['id'] = null;
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['plan'] ?? null;

            if ($value === null) {
                $properties['plan'] = null;
                goto after_plan;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'plan';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplaceListingPlan($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['plan'] = $value;

            after_plan:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\MarketplacePurchase\MarketplacePendingChange', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\MarketplacePurchase\MarketplacePendingChange::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\MarketplacePurchase\MarketplacePendingChange(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\MarketplacePurchase\MarketplacePendingChange', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplaceListingPlan(array $payload): \ApiClients\Client\Github\Schema\MarketplaceListingPlan
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['accounts_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'accounts_url';
                goto after_accountsUrl;
            }

            $properties['accountsUrl'] = $value;

            after_accountsUrl:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['number'] ?? null;

            if ($value === null) {
                $missingFields[] = 'number';
                goto after_number;
            }

            $properties['number'] = $value;

            after_number:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $missingFields[] = 'description';
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['monthly_price_in_cents'] ?? null;

            if ($value === null) {
                $missingFields[] = 'monthly_price_in_cents';
                goto after_monthlyPriceInCents;
            }

            $properties['monthlyPriceInCents'] = $value;

            after_monthlyPriceInCents:

            $value = $payload['yearly_price_in_cents'] ?? null;

            if ($value === null) {
                $missingFields[] = 'yearly_price_in_cents';
                goto after_yearlyPriceInCents;
            }

            $properties['yearlyPriceInCents'] = $value;

            after_yearlyPriceInCents:

            $value = $payload['price_model'] ?? null;

            if ($value === null) {
                $missingFields[] = 'price_model';
                goto after_priceModel;
            }

            $properties['priceModel'] = $value;

            after_priceModel:

            $value = $payload['has_free_trial'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_free_trial';
                goto after_hasFreeTrial;
            }

            $properties['hasFreeTrial'] = $value;

            after_hasFreeTrial:

            $value = $payload['unit_name'] ?? null;

            if ($value === null) {
                $properties['unitName'] = null;
                goto after_unitName;
            }

            $properties['unitName'] = $value;

            after_unitName:

            $value = $payload['state'] ?? null;

            if ($value === null) {
                $missingFields[] = 'state';
                goto after_state;
            }

            $properties['state'] = $value;

            after_state:

            $value = $payload['bullets'] ?? null;

            if ($value === null) {
                $missingFields[] = 'bullets';
                goto after_bullets;
            }

            $properties['bullets'] = $value;

            after_bullets:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\MarketplaceListingPlan', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\MarketplaceListingPlan::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\MarketplaceListingPlan(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\MarketplaceListingPlan', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePurchase(array $payload): \ApiClients\Client\Github\Schema\MarketplacePurchase\MarketplacePurchase
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['billing_cycle'] ?? null;

            if ($value === null) {
                $properties['billingCycle'] = null;
                goto after_billingCycle;
            }

            $properties['billingCycle'] = $value;

            after_billingCycle:

            $value = $payload['next_billing_date'] ?? null;

            if ($value === null) {
                $properties['nextBillingDate'] = null;
                goto after_nextBillingDate;
            }

            $properties['nextBillingDate'] = $value;

            after_nextBillingDate:

            $value = $payload['is_installed'] ?? null;

            if ($value === null) {
                $properties['isInstalled'] = null;
                goto after_isInstalled;
            }

            $properties['isInstalled'] = $value;

            after_isInstalled:

            $value = $payload['unit_count'] ?? null;

            if ($value === null) {
                $properties['unitCount'] = null;
                goto after_unitCount;
            }

            $properties['unitCount'] = $value;

            after_unitCount:

            $value = $payload['on_free_trial'] ?? null;

            if ($value === null) {
                $properties['onFreeTrial'] = null;
                goto after_onFreeTrial;
            }

            $properties['onFreeTrial'] = $value;

            after_onFreeTrial:

            $value = $payload['free_trial_ends_on'] ?? null;

            if ($value === null) {
                $properties['freeTrialEndsOn'] = null;
                goto after_freeTrialEndsOn;
            }

            $properties['freeTrialEndsOn'] = $value;

            after_freeTrialEndsOn:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $properties['updatedAt'] = null;
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['plan'] ?? null;

            if ($value === null) {
                $properties['plan'] = null;
                goto after_plan;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'plan';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplaceListingPlan($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['plan'] = $value;

            after_plan:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\MarketplacePurchase\MarketplacePurchase', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\MarketplacePurchase\MarketplacePurchase::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\MarketplacePurchase\MarketplacePurchase(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\MarketplacePurchase\MarketplacePurchase', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\Github\Schema\BasicError
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $properties['documentationUrl'] = null;
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\BasicError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\BasicError(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError(array $payload): \ApiClients\Client\Github\Schema\ValidationError
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['message'] ?? null;

            if ($value === null) {
                $missingFields[] = 'message';
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'documentation_url';
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

            $value = $payload['errors'] ?? null;

            if ($value === null) {
                $properties['errors'] = null;
                goto after_errors;
            }

            static $errorsCaster1;

            if ($errorsCaster1 === null) {
                $errorsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\ValidationError\\Errors',
));
            }

            $value = $errorsCaster1->cast($value, $this);

            $properties['errors'] = $value;

            after_errors:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ValidationError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ValidationError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\ValidationError(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ValidationError', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError⚡️Errors(array $payload): \ApiClients\Client\Github\Schema\ValidationError\Errors
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['resource'] ?? null;

            if ($value === null) {
                $properties['resource'] = null;
                goto after_resource;
            }

            $properties['resource'] = $value;

            after_resource:

            $value = $payload['field'] ?? null;

            if ($value === null) {
                $properties['field'] = null;
                goto after_field;
            }

            $properties['field'] = $value;

            after_field:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['code'] ?? null;

            if ($value === null) {
                $missingFields[] = 'code';
                goto after_code;
            }

            $properties['code'] = $value;

            after_code:

            $value = $payload['index'] ?? null;

            if ($value === null) {
                $properties['index'] = null;
                goto after_index;
            }

            $properties['index'] = $value;

            after_index:

            $value = $payload['value'] ?? null;

            if ($value === null) {
                $properties['value'] = null;
                goto after_value;
            }

            $properties['value'] = $value;

            after_value:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ValidationError\Errors', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ValidationError\Errors::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\ValidationError\Errors(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ValidationError\Errors', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\Github\Schema\MarketplacePurchase' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplacePurchase($object),
            'ApiClients\Client\Github\Schema\MarketplacePurchase\MarketplacePendingChange' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePendingChange($object),
            'ApiClients\Client\Github\Schema\MarketplaceListingPlan' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplaceListingPlan($object),
            'ApiClients\Client\Github\Schema\MarketplacePurchase\MarketplacePurchase' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePurchase($object),
            'ApiClients\Client\Github\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($object),
            'ApiClients\Client\Github\Schema\ValidationError' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError($object),
            'ApiClients\Client\Github\Schema\ValidationError\Errors' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError⚡️Errors($object),
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


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplacePurchase(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\MarketplacePurchase);
        $result = [];

        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $type = $object->type;
        after_type:        $result['type'] = $type;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $login = $object->login;
        after_login:        $result['login'] = $login;

        
        $organizationBillingEmail = $object->organizationBillingEmail;

        if ($organizationBillingEmail === null) {
            goto after_organizationBillingEmail;
        }
        after_organizationBillingEmail:        $result['organization_billing_email'] = $organizationBillingEmail;

        
        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }
        after_email:        $result['email'] = $email;

        
        $marketplacePendingChange = $object->marketplacePendingChange;

        if ($marketplacePendingChange === null) {
            goto after_marketplacePendingChange;
        }
        $marketplacePendingChange = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePendingChange($marketplacePendingChange);
        after_marketplacePendingChange:        $result['marketplace_pending_change'] = $marketplacePendingChange;

        
        $marketplacePurchase = $object->marketplacePurchase;
        $marketplacePurchase = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePurchase($marketplacePurchase);
        after_marketplacePurchase:        $result['marketplace_purchase'] = $marketplacePurchase;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePendingChange(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\MarketplacePurchase\MarketplacePendingChange);
        $result = [];

        $isInstalled = $object->isInstalled;

        if ($isInstalled === null) {
            goto after_isInstalled;
        }
        after_isInstalled:        $result['is_installed'] = $isInstalled;

        
        $effectiveDate = $object->effectiveDate;

        if ($effectiveDate === null) {
            goto after_effectiveDate;
        }
        after_effectiveDate:        $result['effective_date'] = $effectiveDate;

        
        $unitCount = $object->unitCount;

        if ($unitCount === null) {
            goto after_unitCount;
        }
        after_unitCount:        $result['unit_count'] = $unitCount;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $plan = $object->plan;

        if ($plan === null) {
            goto after_plan;
        }
        $plan = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplaceListingPlan($plan);
        after_plan:        $result['plan'] = $plan;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplaceListingPlan(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\MarketplaceListingPlan);
        $result = [];

        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $accountsUrl = $object->accountsUrl;
        after_accountsUrl:        $result['accounts_url'] = $accountsUrl;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $number = $object->number;
        after_number:        $result['number'] = $number;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $description = $object->description;
        after_description:        $result['description'] = $description;

        
        $monthlyPriceInCents = $object->monthlyPriceInCents;
        after_monthlyPriceInCents:        $result['monthly_price_in_cents'] = $monthlyPriceInCents;

        
        $yearlyPriceInCents = $object->yearlyPriceInCents;
        after_yearlyPriceInCents:        $result['yearly_price_in_cents'] = $yearlyPriceInCents;

        
        $priceModel = $object->priceModel;
        after_priceModel:        $result['price_model'] = $priceModel;

        
        $hasFreeTrial = $object->hasFreeTrial;
        after_hasFreeTrial:        $result['has_free_trial'] = $hasFreeTrial;

        
        $unitName = $object->unitName;

        if ($unitName === null) {
            goto after_unitName;
        }
        after_unitName:        $result['unit_name'] = $unitName;

        
        $state = $object->state;
        after_state:        $result['state'] = $state;

        
        $bullets = $object->bullets;
        static $bulletsSerializer0;

        if ($bulletsSerializer0 === null) {
            $bulletsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $bullets = $bulletsSerializer0->serialize($bullets, $this);
        after_bullets:        $result['bullets'] = $bullets;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePurchase(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\MarketplacePurchase\MarketplacePurchase);
        $result = [];

        $billingCycle = $object->billingCycle;

        if ($billingCycle === null) {
            goto after_billingCycle;
        }
        after_billingCycle:        $result['billing_cycle'] = $billingCycle;

        
        $nextBillingDate = $object->nextBillingDate;

        if ($nextBillingDate === null) {
            goto after_nextBillingDate;
        }
        after_nextBillingDate:        $result['next_billing_date'] = $nextBillingDate;

        
        $isInstalled = $object->isInstalled;

        if ($isInstalled === null) {
            goto after_isInstalled;
        }
        after_isInstalled:        $result['is_installed'] = $isInstalled;

        
        $unitCount = $object->unitCount;

        if ($unitCount === null) {
            goto after_unitCount;
        }
        after_unitCount:        $result['unit_count'] = $unitCount;

        
        $onFreeTrial = $object->onFreeTrial;

        if ($onFreeTrial === null) {
            goto after_onFreeTrial;
        }
        after_onFreeTrial:        $result['on_free_trial'] = $onFreeTrial;

        
        $freeTrialEndsOn = $object->freeTrialEndsOn;

        if ($freeTrialEndsOn === null) {
            goto after_freeTrialEndsOn;
        }
        after_freeTrialEndsOn:        $result['free_trial_ends_on'] = $freeTrialEndsOn;

        
        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $plan = $object->plan;

        if ($plan === null) {
            goto after_plan;
        }
        $plan = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️MarketplaceListingPlan($plan);
        after_plan:        $result['plan'] = $plan;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\BasicError);
        $result = [];

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $documentationUrl = $object->documentationUrl;

        if ($documentationUrl === null) {
            goto after_documentationUrl;
        }
        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }
        after_status:        $result['status'] = $status;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\ValidationError);
        $result = [];

        $message = $object->message;
        after_message:        $result['message'] = $message;

        
        $documentationUrl = $object->documentationUrl;
        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        
        $errors = $object->errors;

        if ($errors === null) {
            goto after_errors;
        }
        static $errorsSerializer0;

        if ($errorsSerializer0 === null) {
            $errorsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\ValidationError\\Errors',
));
        }
        
        $errors = $errorsSerializer0->serialize($errors, $this);
        after_errors:        $result['errors'] = $errors;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError⚡️Errors(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\ValidationError\Errors);
        $result = [];

        $resource = $object->resource;

        if ($resource === null) {
            goto after_resource;
        }
        after_resource:        $result['resource'] = $resource;

        
        $field = $object->field;

        if ($field === null) {
            goto after_field;
        }
        after_field:        $result['field'] = $field;

        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $code = $object->code;
        after_code:        $result['code'] = $code;

        
        $index = $object->index;

        if ($index === null) {
            goto after_index;
        }
        after_index:        $result['index'] = $index;

        
        $value = $object->value;

        if ($value === null) {
            goto after_value;
        }
        after_value:        $result['value'] = $value;


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
