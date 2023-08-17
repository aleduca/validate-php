<?php

use app\database\model\User;
use core\facades\UploadImage;
use core\library\Sanitize;
use core\library\Session;
use core\library\Validate;

// $validate = new Validate;
// $validate->image('file', ['size' => 2, 'extensions' => []]);
// $validate->required(['firstName', 'lastName', 'email']);
// $validate->max('password', 10);
// // $validate->min('password', 10);
// $validate->email('email');
// $validate->unique('email', 'users');

// if ($validate->has_errors()) {
//     return redirect('/');
// }

// $sanitized = Sanitize::execute()->all();
// var_dump($sanitized);

// var_dump($sanitized->all());
// $sanitized->all()
// $image = new UploadImage;
// $image->make()
// ->watermark('watermark.png', width:50, height:50, x:10, y:10)
// ->resize(400, null, true)
// ->execute();

// $info = $image->get_image_info();

// $user = new User;
// remove_file($user->find('id', 5)->image);
// $user->update([
//     'image' => $info['path'],
// ], ['id' => 5]);


// Session::flash('message', 'Upload successfully');

// redirect('/');
