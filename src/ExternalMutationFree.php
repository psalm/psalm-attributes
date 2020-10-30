<?php
namespace Psalm;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
#[Immutable]
final class ExternalMutationFree extends BaseAttribute
{}
