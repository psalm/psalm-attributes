<?php
namespace Psalm;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
#[Immutable]
final class Immutable extends BaseAttribute
{}
