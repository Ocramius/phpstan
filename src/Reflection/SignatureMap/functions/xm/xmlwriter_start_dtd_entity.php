<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'xmlwriter_start_dtd_entity',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'xmlwriter',
			false,
			PHPStan\Type\ResourceType::__set_state(array()),
			false,
			false
		),
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'name',
			false,
			PHPStan\Type\StringType::__set_state(array()),
			false,
			false
		),
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'isparam',
			false,
			PHPStan\Type\BooleanType::__set_state(array()),
			false,
			false
		),

	],
	false,
	PHPStan\Type\BooleanType::__set_state(array())
);
