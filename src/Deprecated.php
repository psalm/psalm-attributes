<?php
namespace Psalm;

use Attribute;

#[Attribute]
#[Immutable]
final class Deprecated extends BaseAttribute
{
	public function __construct(
		public ?string $since_version = null,
		public ?string $reason = null,
		public ?string $replacement = null,
	) {}
}
