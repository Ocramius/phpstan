<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'PDF_begin_page_ext',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'pdfdoc',
			false,
			PHPStan\Type\MixedType::__set_state(array(    'isExplicitMixed' => false, )),
			false,
			false
		),
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'width',
			false,
			PHPStan\Type\FloatType::__set_state(array()),
			false,
			false
		),
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'height',
			false,
			PHPStan\Type\FloatType::__set_state(array()),
			false,
			false
		),
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'optlist',
			false,
			PHPStan\Type\StringType::__set_state(array()),
			false,
			false
		),

	],
	false,
	PHPStan\Type\BooleanType::__set_state(array())
);
