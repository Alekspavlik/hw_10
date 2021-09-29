<?php

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';

use Hillel\Models\Category;
use Hillel\Models\Post;
use Hillel\Models\Tag;

//Exercise 1

//for ($i = 1; $i <= 5; $i++) {
//    Category::create(['title' => 'CTitle' . $i, 'slug' => 'CSlug' . $i]);
//}

//Exercise 2

//$category = Category::find(59);
//$category->title = 'update';
//$category->slug = 'update';
//$category->save();

//Exercise 3

//$category = Category::find(60);
//$category->delete();

//Exercise 4

//for ($i = 1; $i <= 10; $i++) {
//    Post::create([
//        'title' => 'PTitle' . $i,
//        'slug' => 'PSlug' . $i,
//        'body' => 'PBody' . $i,
//        'category_id' => Category::all()->pluck('id')->random()
//    ]);
//}

//Exercise 5

//$post = Post::find(25);
//$post->title = 'modified';
//$post->slug = 'modified';
//$post->body = 'modified';
//$post->category_id = 59;
//$post->save();

//Exercise 6

//$post = Post::find(30);
//$post->delete();

//Exercise 7

//for ($i = 1; $i <= 10; $i++) {
//    Tag::create(['title' => 'TTitle' . $i, 'slug' => 'TSlug' . $i]);
//}

//Exercise 8

//$posts = Post::all();
//foreach ($posts as $post) {
//    $random = Tag::all()->pluck('id')->random(3)->all();
//    $post->tags()->sync($random);
//}
