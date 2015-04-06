<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| such as the size rules. Feel free to tweak each of these messages.
	|
	*/

	"accepted"         => "O campo :attribute deve ser aceito.",
	"active_url"       => "O campo :attribute não é uma URL válida.",
	"after"            => "O campo :attribute deve ser uma data posterior a :date.",
	"alpha"            => "O campo :attribute só pode conter letras.",
	"alpha_dash"       => "O campo :attribute só pode conter letras, números e traços.",
	"alpha_num"        => "O campo :attribute só pode conter letras e números.",
	"array"            => "O campo :attribute deve ser uma matriz.",
	"before"           => "O campo :attribute deve ser uma data anterior a :date.",
	"between"          => array(
		"numeric" => "O campo :attribute deve estar entre :min - :max.",
		"file"    => "O campo :attribute deve estar entre :min - :max kilobytes.",
		"string"  => "O campo :attribute deve estar entre :min - :max caracteres.",
		"array"   => "O campo :attribute deve ter entre :min - :max itens.",
	),
	"confirmed"        => "O campo :attribute de confirmação não corresponde.",
	"date"             => "O campo :attribute não é uma data válida.",
	"date_format"      => "O campo :attribute não corresponde ao formato :format.",
	"different"        => "O campo :attribute e :other devem ser diferentes.",
	"digits"           => "O campo :attribute deve ser :digits dígitos.",
	"digits_between"   => "O campo :attribute deve estar entre :min e :max dígitos.",
	"email"            => "O campo :attribute não é um formato válido.",
	"exists"           => "O campo :attribute selecionado é inválido.",
	"image"            => "O campo :attribute deve ser uma imagem.",
	"in"               => "O campo :attribute selecionado é inválido.",
	"integer"          => "O campo :attribute deve ser um inteiro.",
	"ip"               => "O campo :attribute deve ser um endereço de IP válido.",
	"max"              => array(
		"numeric" => "O campo :attribute não pode ser superior a :max.",
		"file"    => "O campo :attribute não pode ser superior a :max kilobytes.",
		"string"  => "O campo :attribute não pode ser superior a :max caracteres.",
		"array"   => "O campo :attribute não pode ter mais do que :max itens.",
	),
	"mimes"            => "O campo :attribute deve ser um arquivo do tipo: :values.",
	"min"              => array(
		"numeric" => "O campo :attribute deve ser no mínimo :min.",
		"file"    => "O campo :attribute deve ser no mínimo :min kilobytes.",
		"string"  => "O campo :attribute deve ser no mínimo :min caracteres.",
		"array"   => "O campo :attribute não pode ter menos do que :min itens.",
	),
	"not_in"           => "O campo :attribute selecionado é inválido.",
	"numeric"          => "O campo :attribute deve ser um número.",
	"regex"            => "O campo :attribute não é um formato válido.",
	"required"         => "O campo :attribute é obrigatório.",
	"required_if"      => "O campo :attribute é obrigatório quando :other é :value.",
	"required_with"    => "O campo :attribute é obrigatório quando :values está presente.",
	"required_without" => "O campo :attribute é obrigatório quando :values não está presente.",
	"same"             => "O campo :attribute e :other devem corresponder.",
	"size"             => array(
		"numeric" => "O campo :attribute deve ser :size.",
		"file"    => "O campo :attribute deve ser :size kilobytes.",
		"string"  => "O campo :attribute deve ser :size caracteres.",
		"array"   => "O campo :attribute deve conter :size itens.",
	),
	"unique"           => "O campo :attribute já possui esse valor cadastrado.",
	"url"              => "O campo :attribute não possui um formato válido.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => array(),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(
		'infracao' => 'Infração',
		'ponto' => 'Ponto',
		'penalidade' => 'Penalidade',
                'valor' => 'Valor',
	),

);
