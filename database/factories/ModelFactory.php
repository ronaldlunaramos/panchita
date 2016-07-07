<?php
use App\User;
use App\Tag;
use Faker\Generator;


$factory->define(Tag::class,function(Generator $faker){
	$array=[
	'name'=>$faker->name
	];
	return $array;
});

$factory->define(User::class,function(Generator $faker){
	$array=[
	'name'=>$faker->name,
	'email'=>$faker->email,
	'password'=>bcrypt('rluna')
	];
	return $array;
});