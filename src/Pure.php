<?php
namespace Psalm;

use Attribute;

#[Attribute(Attribute::TARGET_FUNCTION | Attribute::TARGET_METHOD)]
#[Immutable]
final class Pure extends BaseAttribute
{}