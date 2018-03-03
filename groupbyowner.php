<?php
declare(strict_types=1);

class FileOwners
{
	public static function groupByOwners(array $files): array
	{
		$result = [];
		foreach ($files as $file => $owner)
		{
			$result[$owner][] = $file;
			return $result;
		}
	}
}