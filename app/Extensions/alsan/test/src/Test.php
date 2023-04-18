<?php declare(strict_types = 1);

namespace Alsan\Test;

use Nette\DI\CompilerExtension;
use Nette\Schema\Schema;
use Nette\Schema\Expect;

class TestExtension extends CompilerExtension
{
	public function getConfigSchema(): Schema
	{
		return Expect::structure([
			'postsPerPage' => Expect::int(),
			'allowComments' => Expect::bool()->default(true),
		]);
	}

	public function loadConfiguration()
	{
		$num = $this->config->postsPerPage;
	}
}