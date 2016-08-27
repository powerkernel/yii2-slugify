Yii2 Slugify
============
Slugify extension for Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist modernkernel/yii2-slugify "*"
```

or add

```
"modernkernel/yii2-slugify": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
    <?= $form->field($model, 'slug')->widget(\modernkernel\slugify\Slugify::className(),['source'=>'#blog-title']) ?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
```
