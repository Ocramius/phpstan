<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'curl_errno',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'ch',
			false,
			PHPStan\Type\MixedType::__set_state(array(    'isExplicitMixed' => false, )),
			false,
			false
		),

	],
	false,
	PHPStan\Type\IntegerType::__set_state(array())
);
