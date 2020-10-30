<?php
namespace Psalm;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
#[Immutable]
final class Readonly extends BaseAttribute
{}